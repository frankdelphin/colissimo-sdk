<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zoneInfosRoutage Structs
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiZoneInfosRoutage extends AbstractStructBase
{
    /**
     * The controlKeyTrackingNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $controlKeyTrackingNumber = null;
    /**
     * The datePrinting
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $datePrinting = null;
    /**
     * The hourPrinting
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $hourPrinting = null;
    /**
     * The identificationDestination1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $identificationDestination1 = null;
    /**
     * The identificationDestination2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $identificationDestination2 = null;
    /**
     * The MSort
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MSort = null;
    /**
     * The numberVersionWS
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $numberVersionWS = null;
    /**
     * The routingVersion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $routingVersion = null;
    /**
     * The serviceMark
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $serviceMark = null;
    /**
     * The sortDest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $sortDest = null;
    /**
     * The sortOrigin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $sortOrigin = null;
    /**
     * The trackingNumberRouting
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $trackingNumberRouting = null;
    /**
     * The typeServiceLivraison
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $typeServiceLivraison = null;
    /**
     * The rDepot
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $rDepot = null;
    /**
     * Constructor method for zoneInfosRoutage
     * @uses ColissimoApiZoneInfosRoutage::setControlKeyTrackingNumber()
     * @uses ColissimoApiZoneInfosRoutage::setDatePrinting()
     * @uses ColissimoApiZoneInfosRoutage::setHourPrinting()
     * @uses ColissimoApiZoneInfosRoutage::setIdentificationDestination1()
     * @uses ColissimoApiZoneInfosRoutage::setIdentificationDestination2()
     * @uses ColissimoApiZoneInfosRoutage::setMSort()
     * @uses ColissimoApiZoneInfosRoutage::setNumberVersionWS()
     * @uses ColissimoApiZoneInfosRoutage::setRoutingVersion()
     * @uses ColissimoApiZoneInfosRoutage::setServiceMark()
     * @uses ColissimoApiZoneInfosRoutage::setSortDest()
     * @uses ColissimoApiZoneInfosRoutage::setSortOrigin()
     * @uses ColissimoApiZoneInfosRoutage::setTrackingNumberRouting()
     * @uses ColissimoApiZoneInfosRoutage::setTypeServiceLivraison()
     * @uses ColissimoApiZoneInfosRoutage::setRDepot()
     * @param string $controlKeyTrackingNumber
     * @param string $datePrinting
     * @param string $hourPrinting
     * @param string $identificationDestination1
     * @param string $identificationDestination2
     * @param string $mSort
     * @param string $numberVersionWS
     * @param string $routingVersion
     * @param string $serviceMark
     * @param string $sortDest
     * @param string $sortOrigin
     * @param string $trackingNumberRouting
     * @param string $typeServiceLivraison
     * @param string $rDepot
     */
    public function __construct(?string $controlKeyTrackingNumber = null, ?string $datePrinting = null, ?string $hourPrinting = null, ?string $identificationDestination1 = null, ?string $identificationDestination2 = null, ?string $mSort = null, ?string $numberVersionWS = null, ?string $routingVersion = null, ?string $serviceMark = null, ?string $sortDest = null, ?string $sortOrigin = null, ?string $trackingNumberRouting = null, ?string $typeServiceLivraison = null, ?string $rDepot = null)
    {
        $this
            ->setControlKeyTrackingNumber($controlKeyTrackingNumber)
            ->setDatePrinting($datePrinting)
            ->setHourPrinting($hourPrinting)
            ->setIdentificationDestination1($identificationDestination1)
            ->setIdentificationDestination2($identificationDestination2)
            ->setMSort($mSort)
            ->setNumberVersionWS($numberVersionWS)
            ->setRoutingVersion($routingVersion)
            ->setServiceMark($serviceMark)
            ->setSortDest($sortDest)
            ->setSortOrigin($sortOrigin)
            ->setTrackingNumberRouting($trackingNumberRouting)
            ->setTypeServiceLivraison($typeServiceLivraison)
            ->setRDepot($rDepot);
    }
    /**
     * Get controlKeyTrackingNumber value
     * @return string|null
     */
    public function getControlKeyTrackingNumber(): ?string
    {
        return $this->controlKeyTrackingNumber;
    }
    /**
     * Set controlKeyTrackingNumber value
     * @param string $controlKeyTrackingNumber
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneInfosRoutage
     */
    public function setControlKeyTrackingNumber(?string $controlKeyTrackingNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($controlKeyTrackingNumber) && !is_string($controlKeyTrackingNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($controlKeyTrackingNumber, true), gettype($controlKeyTrackingNumber)), __LINE__);
        }
        $this->controlKeyTrackingNumber = $controlKeyTrackingNumber;
        
        return $this;
    }
    /**
     * Get datePrinting value
     * @return string|null
     */
    public function getDatePrinting(): ?string
    {
        return $this->datePrinting;
    }
    /**
     * Set datePrinting value
     * @param string $datePrinting
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneInfosRoutage
     */
    public function setDatePrinting(?string $datePrinting = null): self
    {
        // validation for constraint: string
        if (!is_null($datePrinting) && !is_string($datePrinting)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($datePrinting, true), gettype($datePrinting)), __LINE__);
        }
        $this->datePrinting = $datePrinting;
        
        return $this;
    }
    /**
     * Get hourPrinting value
     * @return string|null
     */
    public function getHourPrinting(): ?string
    {
        return $this->hourPrinting;
    }
    /**
     * Set hourPrinting value
     * @param string $hourPrinting
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneInfosRoutage
     */
    public function setHourPrinting(?string $hourPrinting = null): self
    {
        // validation for constraint: string
        if (!is_null($hourPrinting) && !is_string($hourPrinting)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hourPrinting, true), gettype($hourPrinting)), __LINE__);
        }
        $this->hourPrinting = $hourPrinting;
        
        return $this;
    }
    /**
     * Get identificationDestination1 value
     * @return string|null
     */
    public function getIdentificationDestination1(): ?string
    {
        return $this->identificationDestination1;
    }
    /**
     * Set identificationDestination1 value
     * @param string $identificationDestination1
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneInfosRoutage
     */
    public function setIdentificationDestination1(?string $identificationDestination1 = null): self
    {
        // validation for constraint: string
        if (!is_null($identificationDestination1) && !is_string($identificationDestination1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identificationDestination1, true), gettype($identificationDestination1)), __LINE__);
        }
        $this->identificationDestination1 = $identificationDestination1;
        
        return $this;
    }
    /**
     * Get identificationDestination2 value
     * @return string|null
     */
    public function getIdentificationDestination2(): ?string
    {
        return $this->identificationDestination2;
    }
    /**
     * Set identificationDestination2 value
     * @param string $identificationDestination2
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneInfosRoutage
     */
    public function setIdentificationDestination2(?string $identificationDestination2 = null): self
    {
        // validation for constraint: string
        if (!is_null($identificationDestination2) && !is_string($identificationDestination2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identificationDestination2, true), gettype($identificationDestination2)), __LINE__);
        }
        $this->identificationDestination2 = $identificationDestination2;
        
        return $this;
    }
    /**
     * Get MSort value
     * @return string|null
     */
    public function getMSort(): ?string
    {
        return $this->MSort;
    }
    /**
     * Set MSort value
     * @param string $mSort
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneInfosRoutage
     */
    public function setMSort(?string $mSort = null): self
    {
        // validation for constraint: string
        if (!is_null($mSort) && !is_string($mSort)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mSort, true), gettype($mSort)), __LINE__);
        }
        $this->MSort = $mSort;
        
        return $this;
    }
    /**
     * Get numberVersionWS value
     * @return string|null
     */
    public function getNumberVersionWS(): ?string
    {
        return $this->numberVersionWS;
    }
    /**
     * Set numberVersionWS value
     * @param string $numberVersionWS
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneInfosRoutage
     */
    public function setNumberVersionWS(?string $numberVersionWS = null): self
    {
        // validation for constraint: string
        if (!is_null($numberVersionWS) && !is_string($numberVersionWS)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numberVersionWS, true), gettype($numberVersionWS)), __LINE__);
        }
        $this->numberVersionWS = $numberVersionWS;
        
        return $this;
    }
    /**
     * Get routingVersion value
     * @return string|null
     */
    public function getRoutingVersion(): ?string
    {
        return $this->routingVersion;
    }
    /**
     * Set routingVersion value
     * @param string $routingVersion
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneInfosRoutage
     */
    public function setRoutingVersion(?string $routingVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($routingVersion) && !is_string($routingVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routingVersion, true), gettype($routingVersion)), __LINE__);
        }
        $this->routingVersion = $routingVersion;
        
        return $this;
    }
    /**
     * Get serviceMark value
     * @return string|null
     */
    public function getServiceMark(): ?string
    {
        return $this->serviceMark;
    }
    /**
     * Set serviceMark value
     * @param string $serviceMark
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneInfosRoutage
     */
    public function setServiceMark(?string $serviceMark = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceMark) && !is_string($serviceMark)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceMark, true), gettype($serviceMark)), __LINE__);
        }
        $this->serviceMark = $serviceMark;
        
        return $this;
    }
    /**
     * Get sortDest value
     * @return string|null
     */
    public function getSortDest(): ?string
    {
        return $this->sortDest;
    }
    /**
     * Set sortDest value
     * @param string $sortDest
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneInfosRoutage
     */
    public function setSortDest(?string $sortDest = null): self
    {
        // validation for constraint: string
        if (!is_null($sortDest) && !is_string($sortDest)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sortDest, true), gettype($sortDest)), __LINE__);
        }
        $this->sortDest = $sortDest;
        
        return $this;
    }
    /**
     * Get sortOrigin value
     * @return string|null
     */
    public function getSortOrigin(): ?string
    {
        return $this->sortOrigin;
    }
    /**
     * Set sortOrigin value
     * @param string $sortOrigin
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneInfosRoutage
     */
    public function setSortOrigin(?string $sortOrigin = null): self
    {
        // validation for constraint: string
        if (!is_null($sortOrigin) && !is_string($sortOrigin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sortOrigin, true), gettype($sortOrigin)), __LINE__);
        }
        $this->sortOrigin = $sortOrigin;
        
        return $this;
    }
    /**
     * Get trackingNumberRouting value
     * @return string|null
     */
    public function getTrackingNumberRouting(): ?string
    {
        return $this->trackingNumberRouting;
    }
    /**
     * Set trackingNumberRouting value
     * @param string $trackingNumberRouting
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneInfosRoutage
     */
    public function setTrackingNumberRouting(?string $trackingNumberRouting = null): self
    {
        // validation for constraint: string
        if (!is_null($trackingNumberRouting) && !is_string($trackingNumberRouting)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trackingNumberRouting, true), gettype($trackingNumberRouting)), __LINE__);
        }
        $this->trackingNumberRouting = $trackingNumberRouting;
        
        return $this;
    }
    /**
     * Get typeServiceLivraison value
     * @return string|null
     */
    public function getTypeServiceLivraison(): ?string
    {
        return $this->typeServiceLivraison;
    }
    /**
     * Set typeServiceLivraison value
     * @param string $typeServiceLivraison
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneInfosRoutage
     */
    public function setTypeServiceLivraison(?string $typeServiceLivraison = null): self
    {
        // validation for constraint: string
        if (!is_null($typeServiceLivraison) && !is_string($typeServiceLivraison)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeServiceLivraison, true), gettype($typeServiceLivraison)), __LINE__);
        }
        $this->typeServiceLivraison = $typeServiceLivraison;
        
        return $this;
    }
    /**
     * Get rDepot value
     * @return string|null
     */
    public function getRDepot(): ?string
    {
        return $this->rDepot;
    }
    /**
     * Set rDepot value
     * @param string $rDepot
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneInfosRoutage
     */
    public function setRDepot(?string $rDepot = null): self
    {
        // validation for constraint: string
        if (!is_null($rDepot) && !is_string($rDepot)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rDepot, true), gettype($rDepot)), __LINE__);
        }
        $this->rDepot = $rDepot;
        
        return $this;
    }
}
