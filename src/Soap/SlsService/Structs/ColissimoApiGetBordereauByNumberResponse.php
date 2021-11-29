<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getBordereauByNumberResponse Structs
 * Meta information extracted from the WSDL
 * - type: tns:getBordereauByNumberResponse
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiGetBordereauByNumberResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBordereauResponse|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBordereauResponse $return = null;
    /**
     * Constructor method for getBordereauByNumberResponse
     * @uses ColissimoApiGetBordereauByNumberResponse::setReturn()
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBordereauResponse $return
     */
    public function __construct(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBordereauResponse $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBordereauResponse|null
     */
    public function getReturn(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBordereauResponse
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBordereauResponse $return
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetBordereauByNumberResponse
     */
    public function setReturn(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBordereauResponse $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
