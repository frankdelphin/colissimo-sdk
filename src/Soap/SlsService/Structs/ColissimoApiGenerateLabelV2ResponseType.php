<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateLabelV2ResponseType Structs
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiGenerateLabelV2ResponseType extends ColissimoApiBaseResponse
{
    /**
     * The labelXmlV2Reponse
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiXmlV2Response|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiXmlV2Response $labelXmlV2Reponse = null;
    /**
     * The labelV2Response
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiLabelV2Response|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiLabelV2Response $labelV2Response = null;
    /**
     * Constructor method for GenerateLabelV2ResponseType
     * @uses ColissimoApiGenerateLabelV2ResponseType::setLabelXmlV2Reponse()
     * @uses ColissimoApiGenerateLabelV2ResponseType::setLabelV2Response()
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiXmlV2Response $labelXmlV2Reponse
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiLabelV2Response $labelV2Response
     */
    public function __construct(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiXmlV2Response $labelXmlV2Reponse = null, ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiLabelV2Response $labelV2Response = null)
    {
        $this
            ->setLabelXmlV2Reponse($labelXmlV2Reponse)
            ->setLabelV2Response($labelV2Response);
    }
    /**
     * Get labelXmlV2Reponse value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiXmlV2Response|null
     */
    public function getLabelXmlV2Reponse(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiXmlV2Response
    {
        return $this->labelXmlV2Reponse;
    }
    /**
     * Set labelXmlV2Reponse value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiXmlV2Response $labelXmlV2Reponse
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateLabelV2ResponseType
     */
    public function setLabelXmlV2Reponse(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiXmlV2Response $labelXmlV2Reponse = null): self
    {
        $this->labelXmlV2Reponse = $labelXmlV2Reponse;
        
        return $this;
    }
    /**
     * Get labelV2Response value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiLabelV2Response|null
     */
    public function getLabelV2Response(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiLabelV2Response
    {
        return $this->labelV2Response;
    }
    /**
     * Set labelV2Response value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiLabelV2Response $labelV2Response
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateLabelV2ResponseType
     */
    public function setLabelV2Response(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiLabelV2Response $labelV2Response = null): self
    {
        $this->labelV2Response = $labelV2Response;
        
        return $this;
    }
}
