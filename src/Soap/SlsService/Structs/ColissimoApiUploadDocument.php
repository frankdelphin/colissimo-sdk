<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for uploadDocument Structs
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiUploadDocument extends AbstractStructBase
{
    /**
     * The documentContent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $documentContent = null;
    /**
     * Constructor method for uploadDocument
     * @uses ColissimoApiUploadDocument::setDocumentContent()
     * @param string $documentContent
     */
    public function __construct(?string $documentContent = null)
    {
        $this
            ->setDocumentContent($documentContent);
    }
    /**
     * Get documentContent value
     * @return string|null
     */
    public function getDocumentContent(): ?string
    {
        return $this->documentContent;
    }
    /**
     * Set documentContent value
     * @param string $documentContent
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiUploadDocument
     */
    public function setDocumentContent(?string $documentContent = null): self
    {
        // validation for constraint: string
        if (!is_null($documentContent) && !is_string($documentContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentContent, true), gettype($documentContent)), __LINE__);
        }
        $this->documentContent = $documentContent;
        
        return $this;
    }
}
