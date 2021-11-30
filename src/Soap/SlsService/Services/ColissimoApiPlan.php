<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Services;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Plan Services
 * @package ColissimoApi
 * @subpackage Services
 */
class ColissimoApiPlan extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named planPickup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPlanPickup $parameters
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPlanPickupResponse|bool
     */
    public function planPickup(\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPlanPickup $parameters)
    {
        try {
            $this->setResult($resultPlanPickup = $this->getSoapClient()->__soapCall('planPickup', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultPlanPickup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPlanPickupResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
