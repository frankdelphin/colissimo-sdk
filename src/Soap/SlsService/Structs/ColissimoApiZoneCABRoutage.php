<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zoneCABRoutage Structs
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiZoneCABRoutage extends AbstractStructBase
{
    /**
     * The barCodeRouting
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $barCodeRouting = null;
    /**
     * The parcelNumberRouting
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $parcelNumberRouting = null;
    /**
     * Constructor method for zoneCABRoutage
     * @uses ColissimoApiZoneCABRoutage::setBarCodeRouting()
     * @uses ColissimoApiZoneCABRoutage::setParcelNumberRouting()
     * @param string $barCodeRouting
     * @param string $parcelNumberRouting
     */
    public function __construct(?string $barCodeRouting = null, ?string $parcelNumberRouting = null)
    {
        $this
            ->setBarCodeRouting($barCodeRouting)
            ->setParcelNumberRouting($parcelNumberRouting);
    }
    /**
     * Get barCodeRouting value
     * @return string|null
     */
    public function getBarCodeRouting(): ?string
    {
        return $this->barCodeRouting;
    }
    /**
     * Set barCodeRouting value
     * @param string $barCodeRouting
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneCABRoutage
     */
    public function setBarCodeRouting(?string $barCodeRouting = null): self
    {
        // validation for constraint: string
        if (!is_null($barCodeRouting) && !is_string($barCodeRouting)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barCodeRouting, true), gettype($barCodeRouting)), __LINE__);
        }
        $this->barCodeRouting = $barCodeRouting;
        
        return $this;
    }
    /**
     * Get parcelNumberRouting value
     * @return string|null
     */
    public function getParcelNumberRouting(): ?string
    {
        return $this->parcelNumberRouting;
    }
    /**
     * Set parcelNumberRouting value
     * @param string $parcelNumberRouting
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneCABRoutage
     */
    public function setParcelNumberRouting(?string $parcelNumberRouting = null): self
    {
        // validation for constraint: string
        if (!is_null($parcelNumberRouting) && !is_string($parcelNumberRouting)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parcelNumberRouting, true), gettype($parcelNumberRouting)), __LINE__);
        }
        $this->parcelNumberRouting = $parcelNumberRouting;
        
        return $this;
    }
}
