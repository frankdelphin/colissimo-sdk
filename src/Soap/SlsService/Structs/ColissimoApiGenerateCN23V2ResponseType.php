<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateCN23V2ResponseType Structs
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiGenerateCN23V2ResponseType extends ColissimoApiBaseResponse
{
    /**
     * The fields
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiFields|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiFields $fields = null;
    /**
     * The cn23
     * Meta information extracted from the WSDL
     * - expectedContentTypes: application/octet-stream
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cn23 = null;
    /**
     * Constructor method for GenerateCN23V2ResponseType
     * @uses ColissimoApiGenerateCN23V2ResponseType::setFields()
     * @uses ColissimoApiGenerateCN23V2ResponseType::setCn23()
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiFields $fields
     * @param string $cn23
     */
    public function __construct(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiFields $fields = null, ?string $cn23 = null)
    {
        $this
            ->setFields($fields)
            ->setCn23($cn23);
    }
    /**
     * Get fields value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiFields|null
     */
    public function getFields(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiFields
    {
        return $this->fields;
    }
    /**
     * Set fields value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiFields $fields
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateCN23V2ResponseType
     */
    public function setFields(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiFields $fields = null): self
    {
        $this->fields = $fields;
        
        return $this;
    }
    /**
     * Get cn23 value
     * @return string|null
     */
    public function getCn23(): ?string
    {
        return $this->cn23;
    }
    /**
     * Set cn23 value
     * @param string $cn23
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateCN23V2ResponseType
     */
    public function setCn23(?string $cn23 = null): self
    {
        // validation for constraint: string
        if (!is_null($cn23) && !is_string($cn23)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cn23, true), gettype($cn23)), __LINE__);
        }
        $this->cn23 = $cn23;
        
        return $this;
    }
}
