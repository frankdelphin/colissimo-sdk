<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for site Structs
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiSite extends AbstractStructBase
{
    /**
     * The address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressPCH|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressPCH $address = null;
    /**
     * The code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $code = null;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * Constructor method for site
     * @uses ColissimoApiSite::setAddress()
     * @uses ColissimoApiSite::setCode()
     * @uses ColissimoApiSite::setName()
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressPCH $address
     * @param string $code
     * @param string $name
     */
    public function __construct(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressPCH $address = null, ?string $code = null, ?string $name = null)
    {
        $this
            ->setAddress($address)
            ->setCode($code)
            ->setName($name);
    }
    /**
     * Get address value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressPCH|null
     */
    public function getAddress(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressPCH
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressPCH $address
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSite
     */
    public function setAddress(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressPCH $address = null): self
    {
        $this->address = $address;
        
        return $this;
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSite
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSite
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
}
