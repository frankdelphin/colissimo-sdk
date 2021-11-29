<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for belgiumLabel Structs
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiBelgiumLabel extends AbstractStructBase
{
    /**
     * The codeBarre
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codeBarre = null;
    /**
     * The codeVAS
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCodeVAS|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCodeVAS $codeVAS = null;
    /**
     * The identification
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $identification = null;
    /**
     * The returnAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiReturnAddressBelgium|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiReturnAddressBelgium $returnAddress = null;
    /**
     * Constructor method for belgiumLabel
     * @uses ColissimoApiBelgiumLabel::setCodeBarre()
     * @uses ColissimoApiBelgiumLabel::setCodeVAS()
     * @uses ColissimoApiBelgiumLabel::setIdentification()
     * @uses ColissimoApiBelgiumLabel::setReturnAddress()
     * @param string $codeBarre
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCodeVAS $codeVAS
     * @param string $identification
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiReturnAddressBelgium $returnAddress
     */
    public function __construct(?string $codeBarre = null, ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCodeVAS $codeVAS = null, ?string $identification = null, ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiReturnAddressBelgium $returnAddress = null)
    {
        $this
            ->setCodeBarre($codeBarre)
            ->setCodeVAS($codeVAS)
            ->setIdentification($identification)
            ->setReturnAddress($returnAddress);
    }
    /**
     * Get codeBarre value
     * @return string|null
     */
    public function getCodeBarre(): ?string
    {
        return $this->codeBarre;
    }
    /**
     * Set codeBarre value
     * @param string $codeBarre
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBelgiumLabel
     */
    public function setCodeBarre(?string $codeBarre = null): self
    {
        // validation for constraint: string
        if (!is_null($codeBarre) && !is_string($codeBarre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeBarre, true), gettype($codeBarre)), __LINE__);
        }
        $this->codeBarre = $codeBarre;
        
        return $this;
    }
    /**
     * Get codeVAS value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCodeVAS|null
     */
    public function getCodeVAS(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCodeVAS
    {
        return $this->codeVAS;
    }
    /**
     * Set codeVAS value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCodeVAS $codeVAS
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBelgiumLabel
     */
    public function setCodeVAS(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCodeVAS $codeVAS = null): self
    {
        $this->codeVAS = $codeVAS;
        
        return $this;
    }
    /**
     * Get identification value
     * @return string|null
     */
    public function getIdentification(): ?string
    {
        return $this->identification;
    }
    /**
     * Set identification value
     * @param string $identification
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBelgiumLabel
     */
    public function setIdentification(?string $identification = null): self
    {
        // validation for constraint: string
        if (!is_null($identification) && !is_string($identification)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identification, true), gettype($identification)), __LINE__);
        }
        $this->identification = $identification;
        
        return $this;
    }
    /**
     * Get returnAddress value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiReturnAddressBelgium|null
     */
    public function getReturnAddress(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiReturnAddressBelgium
    {
        return $this->returnAddress;
    }
    /**
     * Set returnAddress value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiReturnAddressBelgium $returnAddress
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBelgiumLabel
     */
    public function setReturnAddress(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiReturnAddressBelgium $returnAddress = null): self
    {
        $this->returnAddress = $returnAddress;
        
        return $this;
    }
}
