<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sender Structs
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiSender extends AbstractStructBase
{
    /**
     * The senderParcelRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $senderParcelRef = null;
    /**
     * The address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddress|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddress $address = null;
    /**
     * The line0
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $line0 = null;
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
     * The countryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $countryCode = null;
    /**
     * The zipCode
     * @var string|null
     */
    protected ?string $zipCode = null;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The companyName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $companyName = null;
    /**
     * The lastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $lastName = null;
    /**
     * The firstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $firstName = null;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The phoneNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $phoneNumber = null;
    /**
     * Constructor method for sender
     * @uses ColissimoApiSender::setSenderParcelRef()
     * @uses ColissimoApiSender::setAddress()
     * @uses ColissimoApiSender::setLine0()
     * @uses ColissimoApiSender::setLine1()
     * @uses ColissimoApiSender::setLine2()
     * @uses ColissimoApiSender::setLine3()
     * @uses ColissimoApiSender::setCountryCode()
     * @uses ColissimoApiSender::setZipCode()
     * @uses ColissimoApiSender::setCity()
     * @uses ColissimoApiSender::setCompanyName()
     * @uses ColissimoApiSender::setLastName()
     * @uses ColissimoApiSender::setFirstName()
     * @uses ColissimoApiSender::setEmail()
     * @uses ColissimoApiSender::setPhoneNumber()
     * @param string $senderParcelRef
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddress $address
     * @param string $line0
     * @param string $line1
     * @param string $line2
     * @param string $line3
     * @param string $countryCode
     * @param string $zipCode
     * @param string $city
     * @param string $companyName
     * @param string $lastName
     * @param string $firstName
     * @param string $email
     * @param string $phoneNumber
     */
    public function __construct(?string $senderParcelRef = null, ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddress $address = null, ?string $line0 = null, ?string $line1 = null, ?string $line2 = null, ?string $line3 = null, ?string $countryCode = null, ?string $zipCode = null, ?string $city = null, ?string $companyName = null, ?string $lastName = null, ?string $firstName = null, ?string $email = null, ?string $phoneNumber = null)
    {
        $this
            ->setSenderParcelRef($senderParcelRef)
            ->setAddress($address)
            ->setLine0($line0)
            ->setLine1($line1)
            ->setLine2($line2)
            ->setLine3($line3)
            ->setCountryCode($countryCode)
            ->setZipCode($zipCode)
            ->setCity($city)
            ->setCompanyName($companyName)
            ->setLastName($lastName)
            ->setFirstName($firstName)
            ->setEmail($email)
            ->setPhoneNumber($phoneNumber);
    }
    /**
     * Get senderParcelRef value
     * @return string|null
     */
    public function getSenderParcelRef(): ?string
    {
        return $this->senderParcelRef;
    }
    /**
     * Set senderParcelRef value
     * @param string $senderParcelRef
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender
     */
    public function setSenderParcelRef(?string $senderParcelRef = null): self
    {
        // validation for constraint: string
        if (!is_null($senderParcelRef) && !is_string($senderParcelRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($senderParcelRef, true), gettype($senderParcelRef)), __LINE__);
        }
        $this->senderParcelRef = $senderParcelRef;
        
        return $this;
    }
    /**
     * Get address value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddress|null
     */
    public function getAddress(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddress
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddress $address
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender
     */
    public function setAddress(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddress $address = null): self
    {
        $this->address = $address;
        
        return $this;
    }
    /**
     * Get line0 value
     * @return string|null
     */
    public function getLine0(): ?string
    {
        return $this->line0;
    }
    /**
     * Set line0 value
     * @param string $line0
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender
     */
    public function setLine0(?string $line0 = null): self
    {
        // validation for constraint: string
        if (!is_null($line0) && !is_string($line0)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($line0, true), gettype($line0)), __LINE__);
        }
        $this->line0 = $line0;
        
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
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender
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
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender
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
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender
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
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender
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
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender
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
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender
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
     * Get companyName value
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }
    /**
     * Set companyName value
     * @param string $companyName
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender
     */
    public function setCompanyName(?string $companyName = null): self
    {
        // validation for constraint: string
        if (!is_null($companyName) && !is_string($companyName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($companyName, true), gettype($companyName)), __LINE__);
        }
        $this->companyName = $companyName;
        
        return $this;
    }
    /**
     * Get lastName value
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }
    /**
     * Set lastName value
     * @param string $lastName
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender
     */
    public function setLastName(?string $lastName = null): self
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        $this->lastName = $lastName;
        
        return $this;
    }
    /**
     * Get firstName value
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }
    /**
     * Set firstName value
     * @param string $firstName
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender
     */
    public function setFirstName(?string $firstName = null): self
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        $this->firstName = $firstName;
        
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        
        return $this;
    }
    /**
     * Get phoneNumber value
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }
    /**
     * Set phoneNumber value
     * @param string $phoneNumber
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender
     */
    public function setPhoneNumber(?string $phoneNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneNumber, true), gettype($phoneNumber)), __LINE__);
        }
        $this->phoneNumber = $phoneNumber;
        
        return $this;
    }
}
