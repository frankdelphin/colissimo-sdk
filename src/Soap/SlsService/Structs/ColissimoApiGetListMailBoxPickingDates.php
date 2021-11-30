<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getListMailBoxPickingDates Structs
 * Meta information extracted from the WSDL
 * - type: tns:getListMailBoxPickingDates
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiGetListMailBoxPickingDates extends AbstractStructBase
{
    /**
     * The getListMailBoxPickingDatesRetourRequest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetListMailBoxPickingDatesRetourRequest|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetListMailBoxPickingDatesRetourRequest $getListMailBoxPickingDatesRetourRequest = null;
    /**
     * Constructor method for getListMailBoxPickingDates
     * @uses ColissimoApiGetListMailBoxPickingDates::setGetListMailBoxPickingDatesRetourRequest()
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetListMailBoxPickingDatesRetourRequest $getListMailBoxPickingDatesRetourRequest
     */
    public function __construct(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetListMailBoxPickingDatesRetourRequest $getListMailBoxPickingDatesRetourRequest = null)
    {
        $this
            ->setGetListMailBoxPickingDatesRetourRequest($getListMailBoxPickingDatesRetourRequest);
    }
    /**
     * Get getListMailBoxPickingDatesRetourRequest value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetListMailBoxPickingDatesRetourRequest|null
     */
    public function getGetListMailBoxPickingDatesRetourRequest(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetListMailBoxPickingDatesRetourRequest
    {
        return $this->getListMailBoxPickingDatesRetourRequest;
    }
    /**
     * Set getListMailBoxPickingDatesRetourRequest value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetListMailBoxPickingDatesRetourRequest $getListMailBoxPickingDatesRetourRequest
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetListMailBoxPickingDates
     */
    public function setGetListMailBoxPickingDatesRetourRequest(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetListMailBoxPickingDatesRetourRequest $getListMailBoxPickingDatesRetourRequest = null): self
    {
        $this->getListMailBoxPickingDatesRetourRequest = $getListMailBoxPickingDatesRetourRequest;
        
        return $this;
    }
}
