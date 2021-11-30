<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateCN23Response Structs
 * Meta information extracted from the WSDL
 * - type: tns:generateCN23Response
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiGenerateCN23Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateCN23V2ResponseType|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateCN23V2ResponseType $return = null;
    /**
     * Constructor method for generateCN23Response
     * @uses ColissimoApiGenerateCN23Response::setReturn()
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateCN23V2ResponseType $return
     */
    public function __construct(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateCN23V2ResponseType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateCN23V2ResponseType|null
     */
    public function getReturn(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateCN23V2ResponseType
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateCN23V2ResponseType $return
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateCN23Response
     */
    public function setReturn(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateCN23V2ResponseType $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
