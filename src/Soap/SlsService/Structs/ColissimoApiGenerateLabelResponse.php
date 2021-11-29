<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateLabelResponse Structs
 * Meta information extracted from the WSDL
 * - type: tns:generateLabelResponse
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiGenerateLabelResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateLabelV2ResponseType|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateLabelV2ResponseType $return = null;
    /**
     * Constructor method for generateLabelResponse
     * @uses ColissimoApiGenerateLabelResponse::setReturn()
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateLabelV2ResponseType $return
     */
    public function __construct(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateLabelV2ResponseType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateLabelV2ResponseType|null
     */
    public function getReturn(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateLabelV2ResponseType
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateLabelV2ResponseType $return
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateLabelResponse
     */
    public function setReturn(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateLabelV2ResponseType $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
