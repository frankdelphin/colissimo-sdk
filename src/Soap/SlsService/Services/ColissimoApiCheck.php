<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Services;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Check Services
 * @package ColissimoApi
 * @subpackage Services
 */
class ColissimoApiCheck extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named checkGenerateLabel
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCheckGenerateLabel $parameters
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCheckGenerateLabelResponse|bool
     */
    public function checkGenerateLabel(\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCheckGenerateLabel $parameters)
    {
        try {
            $this->setResult($resultCheckGenerateLabel = $this->getSoapClient()->__soapCall('checkGenerateLabel', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCheckGenerateLabel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCheckGenerateLabelResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
