<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addressPickupLocation Structs
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiAddressPickupLocation extends AbstractStructBase
{
    /**
     * The city
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The countryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $countryCode = null;
    /**
     * The countryLabel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $countryLabel = null;
    /**
     * The line1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $line1 = null;
    /**
     * The line2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $line2 = null;
    /**
     * The line3
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $line3 = null;
    /**
     * The line4
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $line4 = null;
    /**
     * The zipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $zipCode = null;
    /**
     * Constructor method for addressPickupLocation
     * @uses ColissimoApiAddressPickupLocation::setCity()
     * @uses ColissimoApiAddressPickupLocation::setCountryCode()
     * @uses ColissimoApiAddressPickupLocation::setCountryLabel()
     * @uses ColissimoApiAddressPickupLocation::setLine1()
     * @uses ColissimoApiAddressPickupLocation::setLine2()
     * @uses ColissimoApiAddressPickupLocation::setLine3()
     * @uses ColissimoApiAddressPickupLocation::setLine4()
     * @uses ColissimoApiAddressPickupLocation::setZipCode()
     * @param string $city
     * @param string $countryCode
     * @param string $countryLabel
     * @param string $line1
     * @param string $line2
     * @param string $line3
     * @param string $line4
     * @param string $zipCode
     */
    public function __construct(?string $city = null, ?string $countryCode = null, ?string $countryLabel = null, ?string $line1 = null, ?string $line2 = null, ?string $line3 = null, ?string $line4 = null, ?string $zipCode = null)
    {
        $this
            ->setCity($city)
            ->setCountryCode($countryCode)
            ->setCountryLabel($countryLabel)
            ->setLine1($line1)
            ->setLine2($line2)
            ->setLine3($line3)
            ->setLine4($line4)
            ->setZipCode($zipCode);
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressPickupLocation
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        
        return $this;
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressPickupLocation
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        
        return $this;
    }
    /**
     * Get countryLabel value
     * @return string|null
     */
    public function getCountryLabel(): ?string
    {
        return $this->countryLabel;
    }
    /**
     * Set countryLabel value
     * @param string $countryLabel
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressPickupLocation
     */
    public function setCountryLabel(?string $countryLabel = null): self
    {
        // validation for constraint: string
        if (!is_null($countryLabel) && !is_string($countryLabel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryLabel, true), gettype($countryLabel)), __LINE__);
        }
        $this->countryLabel = $countryLabel;
        
        return $this;
    }
    /**
     * Get line1 value
     * @return string|null
     */
    public function getLine1(): ?string
    {
        return $this->line1;
    }
    /**
     * Set line1 value
     * @param string $line1
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressPickupLocation
     */
    public function setLine1(?string $line1 = null): self
    {
        // validation for constraint: string
        if (!is_null($line1) && !is_string($line1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($line1, true), gettype($line1)), __LINE__);
        }
        $this->line1 = $line1;
        
        return $this;
    }
    /**
     * Get line2 value
     * @return string|null
     */
    public function getLine2(): ?string
    {
        return $this->line2;
    }
    /**
     * Set line2 value
     * @param string $line2
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressPickupLocation
     */
    public function setLine2(?string $line2 = null): self
    {
        // validation for constraint: string
        if (!is_null($line2) && !is_string($line2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($line2, true), gettype($line2)), __LINE__);
        }
        $this->line2 = $line2;
        
        return $this;
    }
    /**
     * Get line3 value
     * @return string|null
     */
    public function getLine3(): ?string
    {
        return $this->line3;
    }
    /**
     * Set line3 value
     * @param string $line3
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressPickupLocation
     */
    public function setLine3(?string $line3 = null): self
    {
        // validation for constraint: string
        if (!is_null($line3) && !is_string($line3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($line3, true), gettype($line3)), __LINE__);
        }
        $this->line3 = $line3;
        
        return $this;
    }
    /**
     * Get line4 value
     * @return string|null
     */
    public function getLine4(): ?string
    {
        return $this->line4;
    }
    /**
     * Set line4 value
     * @param string $line4
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressPickupLocation
     */
    public function setLine4(?string $line4 = null): self
    {
        // validation for constraint: string
        if (!is_null($line4) && !is_string($line4)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($line4, true), gettype($line4)), __LINE__);
        }
        $this->line4 = $line4;
        
        return $this;
    }
    /**
     * Get zipCode value
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }
    /**
     * Set zipCode value
     * @param string $zipCode
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressPickupLocation
     */
    public function setZipCode(?string $zipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), gettype($zipCode)), __LINE__);
        }
        $this->zipCode = $zipCode;
        
        return $this;
    }
}
