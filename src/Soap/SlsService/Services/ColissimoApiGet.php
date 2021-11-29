<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Services;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get Services
 * @package ColissimoApi
 * @subpackage Services
 */
class ColissimoApiGet extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getListMailBoxPickingDates
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetListMailBoxPickingDates $parameters
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetListMailBoxPickingDatesResponse|bool
     */
    public function getListMailBoxPickingDates(\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetListMailBoxPickingDates $parameters)
    {
        try {
            $this->setResult($resultGetListMailBoxPickingDates = $this->getSoapClient()->__soapCall('getListMailBoxPickingDates', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetListMailBoxPickingDates;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getProductInter
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetProductInter $parameters
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetProductInterResponse|bool
     */
    public function getProductInter(\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetProductInter $parameters)
    {
        try {
            $this->setResult($resultGetProductInter = $this->getSoapClient()->__soapCall('getProductInter', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetProductInter;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBordereauByNumber
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetBordereauByNumber $parameters
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetBordereauByNumberResponse|bool
     */
    public function getBordereauByNumber(\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetBordereauByNumber $parameters)
    {
        try {
            $this->setResult($resultGetBordereauByNumber = $this->getSoapClient()->__soapCall('getBordereauByNumber', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBordereauByNumber;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetBordereauByNumberResponse|\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetListMailBoxPickingDatesResponse|\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetProductInterResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
