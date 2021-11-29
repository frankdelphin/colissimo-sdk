<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService;

/**
 * Class which returns the class map definition
 * @package ColissimoApi
 */
class ColissimoSlsApiClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'CheckGenerateLabelRequestType' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiCheckGenerateLabelRequestType',
            'outputFormat' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiOutputFormat',
            'letter' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiLetter',
            'service' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiService',
            'parcel' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiParcel',
            'customsDeclarations' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiCustomsDeclarations',
            'contents' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiContents',
            'article' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiArticle',
            'category' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiCategory',
            'original' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiOriginal',
            'importerAddress' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiImporterAddress',
            'sender' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiSender',
            'address' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiAddress',
            'addressee' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiAddressee',
            'codSenderAddress' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiCodSenderAddress',
            'uploadDocument' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiUploadDocument',
            'fields' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiFields',
            'field' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiField',
            'GenerateCN23RequestType' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiGenerateCN23RequestType',
            'GenerateLabelRequestType' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiGenerateLabelRequestType',
            'GetListMailBoxPickingDatesRetourRequestType' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiGetListMailBoxPickingDatesRetourRequestType',
            'GetProductInterRequestType' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiGetProductInterRequestType',
            'planPickupRequestType' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiPlanPickupRequestType',
            'getListMailBoxPickingDates' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiGetListMailBoxPickingDates',
            'getListMailBoxPickingDatesRetourRequest' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiGetListMailBoxPickingDatesRetourRequest',
            'getListMailBoxPickingDatesResponse' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiGetListMailBoxPickingDatesResponse',
            'GetListMailBoxPickingDatesResponseType' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiGetListMailBoxPickingDatesResponseType',
            'baseResponse' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiBaseResponse',
            'Message' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiMessage',
            'generateLabel' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiGenerateLabel',
            'generateLabelRequest' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiGenerateLabelRequest',
            'generateLabelResponse' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiGenerateLabelResponse',
            'GenerateLabelV2ResponseType' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiGenerateLabelV2ResponseType',
            'xmlV2Response' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiXmlV2Response',
            'xmlResponse' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiXmlResponse',
            'belgiumLabel' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiBelgiumLabel',
            'codeVAS' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiCodeVAS',
            'returnAddressBelgium' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiReturnAddressBelgium',
            'elementVisual' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiElementVisual',
            'pickupLocation' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiPickupLocation',
            'addressPickupLocation' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiAddressPickupLocation',
            'routing' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiRouting',
            'site' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiSite',
            'addressPCH' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiAddressPCH',
            'swissLabel' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiSwissLabel',
            'zoneRouting' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiZoneRouting',
            'zoneCABRoutage' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiZoneCABRoutage',
            'zoneInfosRoutage' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiZoneInfosRoutage',
            'labelV2Response' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiLabelV2Response',
            'labelResponse' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiLabelResponse',
            'planPickup' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiPlanPickup',
            'planPickupRequest' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiPlanPickupRequest',
            'planPickupResponse' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiPlanPickupResponse',
            'planPickupResponseType' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiPlanPickupResponseType',
            'checkGenerateLabel' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiCheckGenerateLabel',
            'checkGenerateLabelRequest' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiCheckGenerateLabelRequest',
            'checkGenerateLabelResponse' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiCheckGenerateLabelResponse',
            'CheckGenerateLabelResponseType' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiCheckGenerateLabelResponseType',
            'getProductInter' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiGetProductInter',
            'getProductInterRequest' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiGetProductInterRequest',
            'getProductInterResponse' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiGetProductInterResponse',
            'GetProductInterResponseType' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiGetProductInterResponseType',
            'generateBordereauByParcelsNumbers' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiGenerateBordereauByParcelsNumbers',
            'generateBordereauParcelNumberList' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiGenerateBordereauParcelNumberList',
            'generateBordereauByParcelsNumbersResponse' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiGenerateBordereauByParcelsNumbersResponse',
            'bordereauResponse' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiBordereauResponse',
            'bordereau' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiBordereau',
            'bordereauHeader' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiBordereauHeader',
            'generateCN23' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiGenerateCN23',
            'generateCN23Request' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiGenerateCN23Request',
            'generateCN23Response' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiGenerateCN23Response',
            'GenerateCN23V2ResponseType' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiGenerateCN23V2ResponseType',
            'getBordereauByNumber' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiGetBordereauByNumber',
            'getBordereauByNumberResponse' => '\\SengentoBV\\ColissimoSdk\\Soap\\SlsService\\Structs\\ColissimoApiGetBordereauByNumberResponse',
        ];
    }
}
