<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getProductInter Structs
 * Meta information extracted from the WSDL
 * - type: tns:getProductInter
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiGetProductInter extends AbstractStructBase
{
    /**
     * The getProductInterRequest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetProductInterRequest|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetProductInterRequest $getProductInterRequest = null;
    /**
     * Constructor method for getProductInter
     * @uses ColissimoApiGetProductInter::setGetProductInterRequest()
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetProductInterRequest $getProductInterRequest
     */
    public function __construct(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetProductInterRequest $getProductInterRequest = null)
    {
        $this
            ->setGetProductInterRequest($getProductInterRequest);
    }
    /**
     * Get getProductInterRequest value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetProductInterRequest|null
     */
    public function getGetProductInterRequest(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetProductInterRequest
    {
        return $this->getProductInterRequest;
    }
    /**
     * Set getProductInterRequest value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetProductInterRequest $getProductInterRequest
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetProductInter
     */
    public function setGetProductInterRequest(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetProductInterRequest $getProductInterRequest = null): self
    {
        $this->getProductInterRequest = $getProductInterRequest;
        
        return $this;
    }
}
