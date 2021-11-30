<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pickupLocation Structs
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiPickupLocation extends AbstractStructBase
{
    /**
     * The address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressPickupLocation|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressPickupLocation $address = null;
    /**
     * The groupRouting
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $groupRouting = null;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The netWork
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $netWork = null;
    /**
     * The pointId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pointId = null;
    /**
     * The routingFileVersion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $routingFileVersion = null;
    /**
     * The routingZipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $routingZipCode = null;
    /**
     * The serviceLabel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $serviceLabel = null;
    /**
     * The sortDistribution
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $sortDistribution = null;
    /**
     * Constructor method for pickupLocation
     * @uses ColissimoApiPickupLocation::setAddress()
     * @uses ColissimoApiPickupLocation::setGroupRouting()
     * @uses ColissimoApiPickupLocation::setName()
     * @uses ColissimoApiPickupLocation::setNetWork()
     * @uses ColissimoApiPickupLocation::setPointId()
     * @uses ColissimoApiPickupLocation::setRoutingFileVersion()
     * @uses ColissimoApiPickupLocation::setRoutingZipCode()
     * @uses ColissimoApiPickupLocation::setServiceLabel()
     * @uses ColissimoApiPickupLocation::setSortDistribution()
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressPickupLocation $address
     * @param string $groupRouting
     * @param string $name
     * @param string $netWork
     * @param string $pointId
     * @param string $routingFileVersion
     * @param string $routingZipCode
     * @param string $serviceLabel
     * @param string $sortDistribution
     */
    public function __construct(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressPickupLocation $address = null, ?string $groupRouting = null, ?string $name = null, ?string $netWork = null, ?string $pointId = null, ?string $routingFileVersion = null, ?string $routingZipCode = null, ?string $serviceLabel = null, ?string $sortDistribution = null)
    {
        $this
            ->setAddress($address)
            ->setGroupRouting($groupRouting)
            ->setName($name)
            ->setNetWork($netWork)
            ->setPointId($pointId)
            ->setRoutingFileVersion($routingFileVersion)
            ->setRoutingZipCode($routingZipCode)
            ->setServiceLabel($serviceLabel)
            ->setSortDistribution($sortDistribution);
    }
    /**
     * Get address value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressPickupLocation|null
     */
    public function getAddress(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressPickupLocation
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressPickupLocation $address
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPickupLocation
     */
    public function setAddress(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressPickupLocation $address = null): self
    {
        $this->address = $address;
        
        return $this;
    }
    /**
     * Get groupRouting value
     * @return string|null
     */
    public function getGroupRouting(): ?string
    {
        return $this->groupRouting;
    }
    /**
     * Set groupRouting value
     * @param string $groupRouting
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPickupLocation
     */
    public function setGroupRouting(?string $groupRouting = null): self
    {
        // validation for constraint: string
        if (!is_null($groupRouting) && !is_string($groupRouting)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupRouting, true), gettype($groupRouting)), __LINE__);
        }
        $this->groupRouting = $groupRouting;
        
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
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPickupLocation
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
    /**
     * Get netWork value
     * @return string|null
     */
    public function getNetWork(): ?string
    {
        return $this->netWork;
    }
    /**
     * Set netWork value
     * @param string $netWork
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPickupLocation
     */
    public function setNetWork(?string $netWork = null): self
    {
        // validation for constraint: string
        if (!is_null($netWork) && !is_string($netWork)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($netWork, true), gettype($netWork)), __LINE__);
        }
        $this->netWork = $netWork;
        
        return $this;
    }
    /**
     * Get pointId value
     * @return string|null
     */
    public function getPointId(): ?string
    {
        return $this->pointId;
    }
    /**
     * Set pointId value
     * @param string $pointId
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPickupLocation
     */
    public function setPointId(?string $pointId = null): self
    {
        // validation for constraint: string
        if (!is_null($pointId) && !is_string($pointId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pointId, true), gettype($pointId)), __LINE__);
        }
        $this->pointId = $pointId;
        
        return $this;
    }
    /**
     * Get routingFileVersion value
     * @return string|null
     */
    public function getRoutingFileVersion(): ?string
    {
        return $this->routingFileVersion;
    }
    /**
     * Set routingFileVersion value
     * @param string $routingFileVersion
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPickupLocation
     */
    public function setRoutingFileVersion(?string $routingFileVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($routingFileVersion) && !is_string($routingFileVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routingFileVersion, true), gettype($routingFileVersion)), __LINE__);
        }
        $this->routingFileVersion = $routingFileVersion;
        
        return $this;
    }
    /**
     * Get routingZipCode value
     * @return string|null
     */
    public function getRoutingZipCode(): ?string
    {
        return $this->routingZipCode;
    }
    /**
     * Set routingZipCode value
     * @param string $routingZipCode
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPickupLocation
     */
    public function setRoutingZipCode(?string $routingZipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($routingZipCode) && !is_string($routingZipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routingZipCode, true), gettype($routingZipCode)), __LINE__);
        }
        $this->routingZipCode = $routingZipCode;
        
        return $this;
    }
    /**
     * Get serviceLabel value
     * @return string|null
     */
    public function getServiceLabel(): ?string
    {
        return $this->serviceLabel;
    }
    /**
     * Set serviceLabel value
     * @param string $serviceLabel
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPickupLocation
     */
    public function setServiceLabel(?string $serviceLabel = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceLabel) && !is_string($serviceLabel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceLabel, true), gettype($serviceLabel)), __LINE__);
        }
        $this->serviceLabel = $serviceLabel;
        
        return $this;
    }
    /**
     * Get sortDistribution value
     * @return string|null
     */
    public function getSortDistribution(): ?string
    {
        return $this->sortDistribution;
    }
    /**
     * Set sortDistribution value
     * @param string $sortDistribution
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPickupLocation
     */
    public function setSortDistribution(?string $sortDistribution = null): self
    {
        // validation for constraint: string
        if (!is_null($sortDistribution) && !is_string($sortDistribution)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sortDistribution, true), gettype($sortDistribution)), __LINE__);
        }
        $this->sortDistribution = $sortDistribution;
        
        return $this;
    }
}
