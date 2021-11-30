<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateCN23 Structs
 * Meta information extracted from the WSDL
 * - type: tns:generateCN23
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiGenerateCN23 extends AbstractStructBase
{
    /**
     * The generateCN23Request
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateCN23Request|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateCN23Request $generateCN23Request = null;
    /**
     * Constructor method for generateCN23
     * @uses ColissimoApiGenerateCN23::setGenerateCN23Request()
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateCN23Request $generateCN23Request
     */
    public function __construct(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateCN23Request $generateCN23Request = null)
    {
        $this
            ->setGenerateCN23Request($generateCN23Request);
    }
    /**
     * Get generateCN23Request value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateCN23Request|null
     */
    public function getGenerateCN23Request(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateCN23Request
    {
        return $this->generateCN23Request;
    }
    /**
     * Set generateCN23Request value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateCN23Request $generateCN23Request
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateCN23
     */
    public function setGenerateCN23Request(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateCN23Request $generateCN23Request = null): self
    {
        $this->generateCN23Request = $generateCN23Request;
        
        return $this;
    }
}
