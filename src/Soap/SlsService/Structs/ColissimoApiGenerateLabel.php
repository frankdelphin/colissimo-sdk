<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateLabel Structs
 * Meta information extracted from the WSDL
 * - type: tns:generateLabel
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiGenerateLabel extends AbstractStructBase
{
    /**
     * The generateLabelRequest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateLabelRequest|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateLabelRequest $generateLabelRequest = null;
    /**
     * Constructor method for generateLabel
     * @uses ColissimoApiGenerateLabel::setGenerateLabelRequest()
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateLabelRequest $generateLabelRequest
     */
    public function __construct(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateLabelRequest $generateLabelRequest = null)
    {
        $this
            ->setGenerateLabelRequest($generateLabelRequest);
    }
    /**
     * Get generateLabelRequest value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateLabelRequest|null
     */
    public function getGenerateLabelRequest(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateLabelRequest
    {
        return $this->generateLabelRequest;
    }
    /**
     * Set generateLabelRequest value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateLabelRequest $generateLabelRequest
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateLabel
     */
    public function setGenerateLabelRequest(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateLabelRequest $generateLabelRequest = null): self
    {
        $this->generateLabelRequest = $generateLabelRequest;
        
        return $this;
    }
}
