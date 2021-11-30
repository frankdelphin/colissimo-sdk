<?php

namespace SengentoBV\ColissimoSdk\ServiceClients;

use Exception;
use SengentoBV\ColissimoSdk\ColissimoApiClient;
use SengentoBV\ColissimoSdk\ColissimoAuthenticationInterface;
use SengentoBV\ColissimoSdk\Exceptions\ColissimoException;
use SengentoBV\ColissimoSdk\Exceptions\ColissimoSoapFaultException;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;
use WsdlToPhp\PackageBase\AbstractStructBase;

abstract class AbstractColissimoServiceClient
{
    /**
     * @var ColissimoApiClient
     */
    private ColissimoApiClient $apiClient;

    public function __construct(ColissimoApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    public function getApiClient() : ColissimoApiClient
    {
        return $this->apiClient;
    }

    /**
     * @param AbstractSoapClientBase $serviceClient
     * @param array $requestArguments
     * @param string $requestFunction
     * @param array $arguments
     * @param string|null $functionName
     * @param bool $applyAuthentication
     * @return mixed
     * @throws ColissimoException
     * @throws ColissimoSoapFaultException
     */
    protected function executeServiceRequest(AbstractSoapClientBase $serviceClient, array $requestArguments, string $requestFunction, array $arguments, ?string $functionName = null, bool $applyAuthentication = true)
    {
        $functionName = $functionName ?? debug_backtrace()[1]['function'];

        $fault = null;
        $result = false;

        if ($applyAuthentication && ($authentication = $this->getApiClient()->getAuthentication()) === null) {
            $fault = new SoapFault('INTERNAL_AUTHENTICATION_NOT_SET', 'Authentication not set.');
        }

        if ($fault === null) {

            if ($applyAuthentication && isset($authentication)) {
                // Go over the request arguments and modify where needed
                foreach ($requestArguments as $requestArgument) {
                    if (!$requestArgument instanceof AbstractStructBase) {
                        // We can only 'patch' instances extending AbstractStructBase
                        continue;
                    }

                    // Apply authentication, updating credentials stored in the request argument(s) automatically
                    $this->applyAuthentication($serviceClient, $requestArgument, $authentication);
                }
            }

            // Call the API
            $result = $serviceClient->$requestFunction(...$requestArguments);
        }

        if ($result === false) {
            $fault = $fault ?? $serviceClient->getLastErrorForMethod(get_class($serviceClient) . '::' . $requestFunction);

            try {
                if ($this->getApiClient()->getFaultHandler()->tryRecover($this, $functionName, $fault)) {

                    return $this->$functionName(...$arguments);
                }
            } catch (ColissimoException $colissimoException) {
                throw $colissimoException;
            } catch (Exception $exception) {
                throw new ColissimoException(null, null, $exception);
            }

            throw new ColissimoSoapFaultException($fault);
        }

        return $result;
    }

    private function applyAuthentication(AbstractSoapClientBase $soapClient, AbstractStructBase $object, ColissimoAuthenticationInterface $authentication, array &$loopPreventionCache = [])
    {
        if (in_array($object, $loopPreventionCache, true)) {
            return;
        }

        $loopPreventionCache[] = $object;

        // Check for method 'setPassword' and call it if it exists
        if (method_exists($object, 'setPassword')) {
            $object->setPassword($authentication->getPassword());
        }

        // Check for method 'setContractNumber' and call it if it exists
        if (method_exists($object, 'setContractNumber')) {
            $object->setContractNumber($authentication->getContractNumber());
        }

        // Final step: Take all properties (that is what jsonSerialize does) and repeat the process for each AbstractStructBase instance
        // The 'loopPreventionCache' array is to keep track of objects already processed, to prevent endless loops
        foreach ($object->jsonSerialize() as $propertyValue) {
            if ($propertyValue instanceof AbstractStructBase) {
                $this->applyAuthentication($soapClient, $propertyValue, $authentication, $loopPreventionCache);
            }
        }
    }
}
