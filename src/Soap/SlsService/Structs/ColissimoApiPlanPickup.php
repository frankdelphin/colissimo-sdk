<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for planPickup Structs
 * Meta information extracted from the WSDL
 * - type: tns:planPickup
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiPlanPickup extends AbstractStructBase
{
    /**
     * The planPickupRequest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPlanPickupRequest|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPlanPickupRequest $planPickupRequest = null;
    /**
     * Constructor method for planPickup
     * @uses ColissimoApiPlanPickup::setPlanPickupRequest()
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPlanPickupRequest $planPickupRequest
     */
    public function __construct(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPlanPickupRequest $planPickupRequest = null)
    {
        $this
            ->setPlanPickupRequest($planPickupRequest);
    }
    /**
     * Get planPickupRequest value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPlanPickupRequest|null
     */
    public function getPlanPickupRequest(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPlanPickupRequest
    {
        return $this->planPickupRequest;
    }
    /**
     * Set planPickupRequest value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPlanPickupRequest $planPickupRequest
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPlanPickup
     */
    public function setPlanPickupRequest(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPlanPickupRequest $planPickupRequest = null): self
    {
        $this->planPickupRequest = $planPickupRequest;
        
        return $this;
    }
}
