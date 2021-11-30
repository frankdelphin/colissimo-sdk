<?php

namespace SengentoBV\ColissimoSdk\ServiceClients;

use SengentoBV\ColissimoSdk\ColissimoApiClient;
use SengentoBV\ColissimoSdk\Exceptions\ColissimoException;
use SengentoBV\ColissimoSdk\Services\ColissimoSoapServiceMap;
use SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBordereauResponse;
use SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCheckGenerateLabel;
use SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCheckGenerateLabelResponseType;
use SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateBordereauByParcelsNumbers;
use SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateCN23;
use SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateCN23V2ResponseType;
use SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateLabel;
use SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateLabelV2ResponseType;
use SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetBordereauByNumber;
use SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetListMailBoxPickingDates;
use SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetListMailBoxPickingDatesResponseType;
use SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetProductInter;
use SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetProductInterResponseType;
use SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPlanPickup;
use SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPlanPickupResponseType;

class ColissimoSlsServiceClient extends AbstractColissimoServiceClient
{
    public function __construct(ColissimoApiClient $apiClient)
    {
        parent::__construct($apiClient);
    }

    //<editor-fold desc="Sls - Check API functions">
    /**
     * @param ColissimoApiCheckGenerateLabel $input
     * @return ColissimoApiCheckGenerateLabelResponseType
     * @throws ColissimoException
     */
    public function checkGenerateLabel(ColissimoApiCheckGenerateLabel $input): ColissimoApiCheckGenerateLabelResponseType
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ColissimoSoapServiceMap::SERVICE_SLS_CHECK);

        /** See {@see ColissimoApiCheck::checkGenerateLabel()} and {@see ColissimoApiCheckGenerateLabelResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'checkGenerateLabel', func_get_args(), __FUNCTION__)->getReturn();
    }
    //</editor-fold>

    //<editor-fold desc="Sls - Generate API functions">
    /**
     * @param ColissimoApiGenerateLabel $input
     * @return ColissimoApiGenerateLabelV2ResponseType
     * @throws ColissimoException
     */
    public function generateLabel(ColissimoApiGenerateLabel $input): ColissimoApiGenerateLabelV2ResponseType
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ColissimoSoapServiceMap::SERVICE_SLS_CHECK);

        /** See {@see ColissimoApiGenerate::generateLabel()} and {@see ColissimoApiGenerateLabelResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'generateLabel', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ColissimoApiGenerateBordereauByParcelsNumbers $input
     * @return ColissimoApiBordereauResponse
     * @throws ColissimoException
     */
    public function generateBordereauByParcelsNumbers(ColissimoApiGenerateBordereauByParcelsNumbers $input): ColissimoApiBordereauResponse
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ColissimoSoapServiceMap::SERVICE_SLS_GENERATE);

        /** See {@see ColissimoApiGenerate::generateBordereauByParcelsNumbers()} and {@see ColissimoApiGenerateBordereauByParcelsNumbersResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'generateBordereauByParcelsNumbers', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ColissimoApiGenerateCN23 $input
     * @return ColissimoApiGenerateCN23V2ResponseType
     * @throws ColissimoException
     */
    public function generateCN23(ColissimoApiGenerateCN23 $input): ColissimoApiGenerateCN23V2ResponseType
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ColissimoSoapServiceMap::SERVICE_SLS_GENERATE);

        /** See {@see ColissimoApiGenerate::generateCN23()} and {@see ColissimoApiGenerateCN23Response::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'generateCN23', func_get_args(), __FUNCTION__)->getReturn();
    }
    //</editor-fold>

    //<editor-fold desc="Sls - Get API functions">
    /**
     * @param ColissimoApiGetListMailBoxPickingDates $input
     * @return ColissimoApiGetListMailBoxPickingDatesResponseType
     * @throws ColissimoException
     */
    public function getListMailBoxPickingDates(ColissimoApiGetListMailBoxPickingDates $input): ColissimoApiGetListMailBoxPickingDatesResponseType
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ColissimoSoapServiceMap::SERVICE_SLS_GET);

        /** See {@see ColissimoApiGet::getListMailBoxPickingDates()} and {@see ColissimoApiGetListMailBoxPickingDatesResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'getListMailBoxPickingDates', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ColissimoApiGetProductInter $input
     * @return ColissimoApiGetProductInterResponseType
     * @throws ColissimoException
     */
    public function getProductInter(ColissimoApiGetProductInter $input): ColissimoApiGetProductInterResponseType
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ColissimoSoapServiceMap::SERVICE_SLS_GET);

        /** See {@see ColissimoApiGet::getProductInter()} and {@see ColissimoApiGetProductInterResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'getProductInter', func_get_args(), __FUNCTION__)->getReturn();
    }

    /**
     * @param ColissimoApiGetBordereauByNumber $input
     * @return ColissimoApiBordereauResponse
     * @throws ColissimoException
     */
    public function getBordereauByNumber(ColissimoApiGetBordereauByNumber $input): ColissimoApiBordereauResponse
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ColissimoSoapServiceMap::SERVICE_SLS_GET);

        /** See {@see ColissimoApiGet::getBordereauByNumber()} and {@see ColissimoApiGetBordereauByNumberResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'getBordereauByNumber', func_get_args(), __FUNCTION__)->getReturn();
    }
    //</editor-fold>

    //<editor-fold desc="Sls - Plan API functions">
    /**
     * @param ColissimoApiPlanPickup $input
     * @return ColissimoApiPlanPickupResponseType
     * @throws ColissimoException
     */
    public function planPickup(ColissimoApiPlanPickup $input): ColissimoApiPlanPickupResponseType
    {
        $serviceClient = $this->getApiClient()->getSoapServiceClient(ColissimoSoapServiceMap::SERVICE_SLS_PLAN);

        /** See {@see ColissimoApiPlan::planPickup()} and {@see ColissimoApiPlanPickupResponse::getReturn()} */
        return $this->executeServiceRequest($serviceClient, [$input], 'planPickup', func_get_args(), __FUNCTION__)->getReturn();
    }
    //</editor-fold>
}