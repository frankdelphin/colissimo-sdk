<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addressee Structs
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiAddressee extends AbstractStructBase
{
    /**
     * The addresseeParcelRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $addresseeParcelRef = null;
    /**
     * The codeBarForReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $codeBarForReference = null;
    /**
     * The serviceInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $serviceInfo = null;
    /**
     * The promotionCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $promotionCode = null;
    /**
     * The address
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddress|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddress $address = null;
    /**
     * Constructor method for addressee
     * @uses ColissimoApiAddressee::setAddresseeParcelRef()
     * @uses ColissimoApiAddressee::setCodeBarForReference()
     * @uses ColissimoApiAddressee::setServiceInfo()
     * @uses ColissimoApiAddressee::setPromotionCode()
     * @uses ColissimoApiAddressee::setAddress()
     * @param string $addresseeParcelRef
     * @param bool $codeBarForReference
     * @param string $serviceInfo
     * @param string $promotionCode
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddress $address
     */
    public function __construct(?string $addresseeParcelRef = null, ?bool $codeBarForReference = null, ?string $serviceInfo = null, ?string $promotionCode = null, ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddress $address = null)
    {
        $this
            ->setAddresseeParcelRef($addresseeParcelRef)
            ->setCodeBarForReference($codeBarForReference)
            ->setServiceInfo($serviceInfo)
            ->setPromotionCode($promotionCode)
            ->setAddress($address);
    }
    /**
     * Get addresseeParcelRef value
     * @return string|null
     */
    public function getAddresseeParcelRef(): ?string
    {
        return $this->addresseeParcelRef;
    }
    /**
     * Set addresseeParcelRef value
     * @param string $addresseeParcelRef
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressee
     */
    public function setAddresseeParcelRef(?string $addresseeParcelRef = null): self
    {
        // validation for constraint: string
        if (!is_null($addresseeParcelRef) && !is_string($addresseeParcelRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addresseeParcelRef, true), gettype($addresseeParcelRef)), __LINE__);
        }
        $this->addresseeParcelRef = $addresseeParcelRef;
        
        return $this;
    }
    /**
     * Get codeBarForReference value
     * @return bool|null
     */
    public function getCodeBarForReference(): ?bool
    {
        return $this->codeBarForReference;
    }
    /**
     * Set codeBarForReference value
     * @param bool $codeBarForReference
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressee
     */
    public function setCodeBarForReference(?bool $codeBarForReference = null): self
    {
        // validation for constraint: boolean
        if (!is_null($codeBarForReference) && !is_bool($codeBarForReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($codeBarForReference, true), gettype($codeBarForReference)), __LINE__);
        }
        $this->codeBarForReference = $codeBarForReference;
        
        return $this;
    }
    /**
     * Get serviceInfo value
     * @return string|null
     */
    public function getServiceInfo(): ?string
    {
        return $this->serviceInfo;
    }
    /**
     * Set serviceInfo value
     * @param string $serviceInfo
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressee
     */
    public function setServiceInfo(?string $serviceInfo = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceInfo) && !is_string($serviceInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceInfo, true), gettype($serviceInfo)), __LINE__);
        }
        $this->serviceInfo = $serviceInfo;
        
        return $this;
    }
    /**
     * Get promotionCode value
     * @return string|null
     */
    public function getPromotionCode(): ?string
    {
        return $this->promotionCode;
    }
    /**
     * Set promotionCode value
     * @param string $promotionCode
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressee
     */
    public function setPromotionCode(?string $promotionCode = null): self
    {
        // validation for constraint: string
        if (!is_null($promotionCode) && !is_string($promotionCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promotionCode, true), gettype($promotionCode)), __LINE__);
        }
        $this->promotionCode = $promotionCode;
        
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
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressee
     */
    public function setAddress(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddress $address = null): self
    {
        $this->address = $address;
        
        return $this;
    }
}
