<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use SengentoBV\ColissimoSdk\ColissimoApiClient;
use SengentoBV\ColissimoSdk\ColissimoFaultHandler;
use SengentoBV\ColissimoSdk\ServiceClients\ColissimoSlsServiceClient;
use SengentoBV\ColissimoSdk\Services\ColissimoSoapServiceMap;

class ColissimoApiClientTest extends TestCase
{
    private ColissimoApiClient $apiClient;

    public function setUp(): void
    {
        $this->apiClient = new ColissimoApiClient();
    }

    public function testGetSoapServiceClientThrowsOnInvalidSoapServiceType()
    {
        $this->expectException(\SengentoBV\ColissimoSdk\Exceptions\ColissimoArgumentOutOfRangeException::class);
        $this->expectExceptionMessage('Invalid service type.');

        $this->apiClient->getSoapServiceClient('invalid');
    }

    /**
     * @dataProvider getSoapServiceClientForValidSoapServiceTypeReturnsCorrectClientProvider
     */
    public function testGetSoapServiceClientForValidSoapServiceTypeReturnsCorrectClient($soapServiceType, $soapServiceTypeClass)
    {
        $soapServiceInstance = $this->apiClient->getSoapServiceClient($soapServiceType);

        $this->assertInstanceOf($soapServiceTypeClass, $soapServiceInstance);
    }

    /**
     * @dataProvider getServiceClientFunctionsReturnsCorrectClientProvider
     */
    public function testGetServiceClientFunctionsReturnsCorrectClient($functionName, $serviceClientType)
    {
        $clientInstance = $this->apiClient->$functionName();

        $this->assertInstanceOf($serviceClientType, $clientInstance);
    }

    public function testDefaultFaultHandlerMatchesExpected()
    {
        $this->assertEquals(ColissimoFaultHandler::class, get_class($this->apiClient->getFaultHandler()));
    }

    public function getSoapServiceClientForValidSoapServiceTypeReturnsCorrectClientProvider(): array
    {
        return [
            [ColissimoSoapServiceMap::SERVICE_SLS_PLAN, \SengentoBV\ColissimoSdk\Soap\SlsService\Services\ColissimoApiPlan::class],
            [ColissimoSoapServiceMap::SERVICE_SLS_GET, \SengentoBV\ColissimoSdk\Soap\SlsService\Services\ColissimoApiGet::class],
            [ColissimoSoapServiceMap::SERVICE_SLS_GENERATE, \SengentoBV\ColissimoSdk\Soap\SlsService\Services\ColissimoApiGenerate::class],
            [ColissimoSoapServiceMap::SERVICE_SLS_CHECK, \SengentoBV\ColissimoSdk\Soap\SlsService\Services\ColissimoApiCheck::class],

        ];
    }

    public function getServiceClientFunctionsReturnsCorrectClientProvider(): array
    {
        return [
            ['getSlsService', ColissimoSlsServiceClient::class],
        ];
    }
}