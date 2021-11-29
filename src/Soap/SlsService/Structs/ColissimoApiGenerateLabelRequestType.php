<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateLabelRequestType Structs
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiGenerateLabelRequestType extends AbstractStructBase
{
    /**
     * The contractNumber
     * @var string|null
     */
    protected ?string $contractNumber = null;
    /**
     * The password
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The outputFormat
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiOutputFormat|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiOutputFormat $outputFormat = null;
    /**
     * The letter
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiLetter|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiLetter $letter = null;
    /**
     * The fields
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiFields|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiFields $fields = null;
    /**
     * Constructor method for GenerateLabelRequestType
     * @uses ColissimoApiGenerateLabelRequestType::setContractNumber()
     * @uses ColissimoApiGenerateLabelRequestType::setPassword()
     * @uses ColissimoApiGenerateLabelRequestType::setOutputFormat()
     * @uses ColissimoApiGenerateLabelRequestType::setLetter()
     * @uses ColissimoApiGenerateLabelRequestType::setFields()
     * @param string $contractNumber
     * @param string $password
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiOutputFormat $outputFormat
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiLetter $letter
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiFields $fields
     */
    public function __construct(?string $contractNumber = null, ?string $password = null, ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiOutputFormat $outputFormat = null, ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiLetter $letter = null, ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiFields $fields = null)
    {
        $this
            ->setContractNumber($contractNumber)
            ->setPassword($password)
            ->setOutputFormat($outputFormat)
            ->setLetter($letter)
            ->setFields($fields);
    }
    /**
     * Get contractNumber value
     * @return string|null
     */
    public function getContractNumber(): ?string
    {
        return $this->contractNumber;
    }
    /**
     * Set contractNumber value
     * @param string $contractNumber
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateLabelRequestType
     */
    public function setContractNumber(?string $contractNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($contractNumber) && !is_string($contractNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contractNumber, true), gettype($contractNumber)), __LINE__);
        }
        $this->contractNumber = $contractNumber;
        
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateLabelRequestType
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
    /**
     * Get outputFormat value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiOutputFormat|null
     */
    public function getOutputFormat(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiOutputFormat
    {
        return $this->outputFormat;
    }
    /**
     * Set outputFormat value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiOutputFormat $outputFormat
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateLabelRequestType
     */
    public function setOutputFormat(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiOutputFormat $outputFormat = null): self
    {
        $this->outputFormat = $outputFormat;
        
        return $this;
    }
    /**
     * Get letter value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiLetter|null
     */
    public function getLetter(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiLetter
    {
        return $this->letter;
    }
    /**
     * Set letter value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiLetter $letter
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateLabelRequestType
     */
    public function setLetter(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiLetter $letter = null): self
    {
        $this->letter = $letter;
        
        return $this;
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
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateLabelRequestType
     */
    public function setFields(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiFields $fields = null): self
    {
        $this->fields = $fields;
        
        return $this;
    }
}
