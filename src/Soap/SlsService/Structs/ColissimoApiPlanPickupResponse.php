<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for planPickupResponse Structs
 * Meta information extracted from the WSDL
 * - type: tns:planPickupResponse
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiPlanPickupResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPlanPickupResponseType|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPlanPickupResponseType $return = null;
    /**
     * Constructor method for planPickupResponse
     * @uses ColissimoApiPlanPickupResponse::setReturn()
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPlanPickupResponseType $return
     */
    public function __construct(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPlanPickupResponseType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPlanPickupResponseType|null
     */
    public function getReturn(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPlanPickupResponseType
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPlanPickupResponseType $return
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPlanPickupResponse
     */
    public function setReturn(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPlanPickupResponseType $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
