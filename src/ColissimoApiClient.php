<?php

namespace SengentoBV\ColissimoSdk;

use SengentoBV\ColissimoSdk\Exceptions\ColissimoException;
use SengentoBV\ColissimoSdk\ServiceClients\ColissimoSlsPhp8ServiceClient;
use SengentoBV\ColissimoSdk\ServiceClients\ColissimoSlsServiceClient;
use SengentoBV\ColissimoSdk\Services\ColissimoSoapServiceMap;
use SengentoBV\ColissimoSdk\Soap\SlsService\ColissimoSlsApiClassMap;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;
use WsdlToPhp\PackageBase\SoapClientInterface;

class ColissimoApiClient
{
    /**
     * Option key to define WSDL service location override
     * @var string
     */
    const WSDL_CLIENT_SERVICE_URL = 'wsdl_client_service_url';

    private array $wsdlOptions;

    private ColissimoFaultHandler $faultHandler;

    private ?ColissimoAuthenticationInterface $authentication;

    private array $soapServiceClients = [];

    /**
     * Stores the default set of WSDL options, per service type (see: {@see DpdBeShipperServiceType})
     * @var ?array
     */
    private ?array $defaultWsdlOptions = null;

    /**
     * Class constructor.
     * @param array|null $wsdlOptions Optional WSDL options. Array of array.
     *                                If used, the key must be one of the constants found in {@see ColissimoServiceType}
     *                                Throws if any of the indexes is an invalid service type, or the value is not an array
     * @param ?ColissimoAuthenticationInterface $authentication Optional authentication data to use to perform protected calls.
     *                                                      [default: null]
     * @param ?ColissimoFaultHandler $faultHandler Optional fault handler that is invoked when an API calls fails that can trigger a retry.
     *                                         [default: dummy handler]
     * @throws ColissimoException Throws if the any of the keys of the $wsdlOptions array is not a valid service type.
     */
    public function __construct(?ColissimoAuthenticationInterface $authentication = null,
                                ?ColissimoFaultHandler            $faultHandler = null,
                                array                             $wsdlOptions = null)
    {
        if ($wsdlOptions !== null && count($wsdlOptions) > 0) {
            foreach ($wsdlOptions as $serviceType => $wsdlOptionsArray) {
                ColissimoServiceType::requireValid($serviceType);

                if (!is_array($wsdlOptionsArray)) {
                    throw new ColissimoException('WSDL options value for "' . $serviceType . '" is not an array.');
                }
            }
        }

        $this->wsdlOptions = $wsdlOptions ?? [];
        $this->authentication = $authentication;
        $this->faultHandler = $faultHandler ?? new ColissimoFaultHandler();
    }

    /**
     * Change the authentication info used to authenticate protected API calls.
     * @param ?ColissimoAuthenticationInterface $authentication Authentication information, or null to unset it.
     * @return ColissimoAuthenticationInterface
     */
    public function setAuthentication(?ColissimoAuthenticationInterface $authentication): ColissimoAuthenticationInterface
    {
        $this->authentication = $authentication;

        return $this;
    }

    /**
     * Get the authentication info used to authenticate protected API calls.
     *
     * @return ColissimoAuthenticationInterface|null
     */
    public function getAuthentication(): ?ColissimoAuthenticationInterface
    {
        return $this->authentication;
    }

    public function getDefaultWsdlOptions(): array
    {
        if ($this->defaultWsdlOptions === null) {
            $this->defaultWsdlOptions = [
                ColissimoServiceType::SLS => [
                    SoapClientInterface::WSDL_CLASSMAP => ColissimoSlsApiClassMap::get(),
                    SoapClientInterface::WSDL_TRACE => false,
                    SoapClientInterface::WSDL_URL => 'https://ws.colissimo.fr/sls-ws/SlsServiceWS/2.0?wsdl',
                    static::WSDL_CLIENT_SERVICE_URL => 'https://ws.colissimo.fr/sls-ws/SlsServiceWS/2.0',
                ],
            ];
        }

        return $this->defaultWsdlOptions;
    }

    /**
     * Get the WSDL options for the given service type after having applied the optional overrides.
     * @param string $serviceType Valid service type. See {@see DpdBeShipperServiceType}
     * @return array
     * @throws Exceptions\ColissimoArgumentOutOfRangeException Throws if the service type isn't valid.
     */
    public function getWsdlOptions(string $serviceType): array
    {
        ColissimoServiceType::requireValid($serviceType);

        $defaultWsdlOptions = $this->getDefaultWsdlOptions();

        $wsdlOptions = $defaultWsdlOptions[$serviceType];

        foreach ($this->wsdlOptions as $key => $value) {
            $wsdlOptions[$key] = $value;
        }

        return $wsdlOptions;
    }

    /**
     * Set the WSDL option overrides for a specific service type.
     *
     * @param string $serviceType Valid service type. See {@see DpdBeShipperServiceType}
     * @param array $wsdlOptions WSDL option overrides.
     * @param bool $replace true (default) to replace all overrides for the given service type; false to merge them instead.
     * @throws Exceptions\ColissimoException Throws if the service type isn't valid.
     */
    public function setWsdlOptions(string $serviceType, array $wsdlOptions, bool $replace = true): ColissimoApiClient
    {
        ColissimoServiceType::requireValid($serviceType);

        if ($replace || !isset($this->wsdlOptions[$serviceType]) || count($this->wsdlOptions[$serviceType]) === 0) {
            $this->wsdlOptions[$serviceType] = $wsdlOptions;
        } else {
            foreach ($wsdlOptions as $wsdlOptionKey => $wsdlOptionValue) {
                $this->wsdlOptions[$serviceType][$wsdlOptionKey] = $wsdlOptionValue;
            }
        }

        return $this;
    }

    /**
     * @param string $soapServiceType
     * @return AbstractSoapClientBase
     * @throws ColissimoException
     */
    public function getSoapServiceClient(string $soapServiceType): AbstractSoapClientBase
    {
        $soapServiceType = strtoupper($soapServiceType);

        if (isset($this->soapServiceClients[$soapServiceType])) {

            return $this->soapServiceClients[$soapServiceType];
        }

        $serviceMapping = ColissimoSoapServiceMap::get($soapServiceType);
        $serviceClass = $serviceMapping['serviceClass'];
        $serviceType = $serviceMapping['serviceType'];

        $wsdlOptions = $this->getWsdlOptions($serviceType);

        /** @var AbstractSoapClientBase $serviceInstance */
        $serviceInstance = new $serviceClass($wsdlOptions);

        $wsdlServiceUrlOption = static::WSDL_CLIENT_SERVICE_URL;

        // Override the service url if needed
        if (isset($wsdlOptions[$wsdlServiceUrlOption])) {
            $serviceInstance->getSoapClient()->__setLocation($wsdlOptions[$wsdlServiceUrlOption]);
        }

        // Cache the instance
        $this->soapServiceClients[$soapServiceType] = $serviceInstance;

        return $serviceInstance;
    }

    /**
     * Get a new instance of the SLS service client.
     * @return ColissimoSlsServiceClient
     */
    public function getSlsService(): ColissimoSlsServiceClient
    {
        return new ColissimoSlsServiceClient($this);
    }

    /**
     * @return ColissimoFaultHandler
     */
    public function getFaultHandler(): ColissimoFaultHandler
    {
        return $this->faultHandler;
    }

    /**
     * @param ColissimoFaultHandler $faultHandler
     * @return ColissimoApiClient
     */
    public function setFaultHandler(ColissimoFaultHandler $faultHandler): ColissimoApiClient
    {
        $this->faultHandler = $faultHandler;

        return $this;
    }
}