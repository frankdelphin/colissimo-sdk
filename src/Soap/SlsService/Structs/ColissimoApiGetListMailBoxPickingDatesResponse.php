<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getListMailBoxPickingDatesResponse Structs
 * Meta information extracted from the WSDL
 * - type: tns:getListMailBoxPickingDatesResponse
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiGetListMailBoxPickingDatesResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetListMailBoxPickingDatesResponseType|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetListMailBoxPickingDatesResponseType $return = null;
    /**
     * Constructor method for getListMailBoxPickingDatesResponse
     * @uses ColissimoApiGetListMailBoxPickingDatesResponse::setReturn()
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetListMailBoxPickingDatesResponseType $return
     */
    public function __construct(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetListMailBoxPickingDatesResponseType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetListMailBoxPickingDatesResponseType|null
     */
    public function getReturn(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetListMailBoxPickingDatesResponseType
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetListMailBoxPickingDatesResponseType $return
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetListMailBoxPickingDatesResponse
     */
    public function setReturn(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetListMailBoxPickingDatesResponseType $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
