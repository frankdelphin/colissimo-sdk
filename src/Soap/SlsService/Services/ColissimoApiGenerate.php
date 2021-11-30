<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Services;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Generate Services
 * @package ColissimoApi
 * @subpackage Services
 */
class ColissimoApiGenerate extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named generateLabel
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateLabel $parameters
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateLabelResponse|bool
     */
    public function generateLabel(\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateLabel $parameters)
    {
        try {
            $this->setResult($resultGenerateLabel = $this->getSoapClient()->__soapCall('generateLabel', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGenerateLabel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named generateBordereauByParcelsNumbers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateBordereauByParcelsNumbers $parameters
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateBordereauByParcelsNumbersResponse|bool
     */
    public function generateBordereauByParcelsNumbers(\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateBordereauByParcelsNumbers $parameters)
    {
        try {
            $this->setResult($resultGenerateBordereauByParcelsNumbers = $this->getSoapClient()->__soapCall('generateBordereauByParcelsNumbers', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGenerateBordereauByParcelsNumbers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named generateCN23
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateCN23 $parameters
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateCN23Response|bool
     */
    public function generateCN23(\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateCN23 $parameters)
    {
        try {
            $this->setResult($resultGenerateCN23 = $this->getSoapClient()->__soapCall('generateCN23', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGenerateCN23;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateBordereauByParcelsNumbersResponse|\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateCN23Response|\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateLabelResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
