<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for checkGenerateLabelResponse Structs
 * Meta information extracted from the WSDL
 * - type: tns:checkGenerateLabelResponse
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiCheckGenerateLabelResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCheckGenerateLabelResponseType|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCheckGenerateLabelResponseType $return = null;
    /**
     * Constructor method for checkGenerateLabelResponse
     * @uses ColissimoApiCheckGenerateLabelResponse::setReturn()
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCheckGenerateLabelResponseType $return
     */
    public function __construct(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCheckGenerateLabelResponseType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCheckGenerateLabelResponseType|null
     */
    public function getReturn(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCheckGenerateLabelResponseType
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCheckGenerateLabelResponseType $return
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCheckGenerateLabelResponse
     */
    public function setReturn(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCheckGenerateLabelResponseType $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
