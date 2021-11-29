<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for checkGenerateLabel Structs
 * Meta information extracted from the WSDL
 * - type: tns:checkGenerateLabel
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiCheckGenerateLabel extends AbstractStructBase
{
    /**
     * The checkGenerateLabelRequest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCheckGenerateLabelRequest|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCheckGenerateLabelRequest $checkGenerateLabelRequest = null;
    /**
     * Constructor method for checkGenerateLabel
     * @uses ColissimoApiCheckGenerateLabel::setCheckGenerateLabelRequest()
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCheckGenerateLabelRequest $checkGenerateLabelRequest
     */
    public function __construct(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCheckGenerateLabelRequest $checkGenerateLabelRequest = null)
    {
        $this
            ->setCheckGenerateLabelRequest($checkGenerateLabelRequest);
    }
    /**
     * Get checkGenerateLabelRequest value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCheckGenerateLabelRequest|null
     */
    public function getCheckGenerateLabelRequest(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCheckGenerateLabelRequest
    {
        return $this->checkGenerateLabelRequest;
    }
    /**
     * Set checkGenerateLabelRequest value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCheckGenerateLabelRequest $checkGenerateLabelRequest
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCheckGenerateLabel
     */
    public function setCheckGenerateLabelRequest(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCheckGenerateLabelRequest $checkGenerateLabelRequest = null): self
    {
        $this->checkGenerateLabelRequest = $checkGenerateLabelRequest;
        
        return $this;
    }
}
