<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for xmlResponse Structs
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiXmlResponse extends AbstractStructBase
{
    /**
     * The cn23
     * Meta information extracted from the WSDL
     * - expectedContentTypes: application/octet-stream
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cn23 = null;
    /**
     * The addressee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressee|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressee $addressee = null;
    /**
     * The barCodeCityssimo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $barCodeCityssimo = null;
    /**
     * The barCodePCH
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $barCodePCH = null;
    /**
     * The barCodeRouting
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $barCodeRouting = null;
    /**
     * The belgiumLabel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBelgiumLabel|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBelgiumLabel $belgiumLabel = null;
    /**
     * The cabAztec
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cabAztec = null;
    /**
     * The contractNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $contractNumber = null;
    /**
     * The elementVisual
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiElementVisual[]
     */
    protected ?array $elementVisual = null;
    /**
     * The numberPCH
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $numberPCH = null;
    /**
     * The numberRouting
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $numberRouting = null;
    /**
     * The parcelNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $parcelNumber = null;
    /**
     * The parcelNumberPartner
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $parcelNumberPartner = null;
    /**
     * The pickupLocation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPickupLocation|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPickupLocation $pickupLocation = null;
    /**
     * The routing
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiRouting|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiRouting $routing = null;
    /**
     * The sender
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender $sender = null;
    /**
     * The sitePCH
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSite|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSite $sitePCH = null;
    /**
     * The swissLabel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSwissLabel|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSwissLabel $swissLabel = null;
    /**
     * The zoneRouting
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneRouting|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneRouting $zoneRouting = null;
    /**
     * Constructor method for xmlResponse
     * @uses ColissimoApiXmlResponse::setCn23()
     * @uses ColissimoApiXmlResponse::setAddressee()
     * @uses ColissimoApiXmlResponse::setBarCodeCityssimo()
     * @uses ColissimoApiXmlResponse::setBarCodePCH()
     * @uses ColissimoApiXmlResponse::setBarCodeRouting()
     * @uses ColissimoApiXmlResponse::setBelgiumLabel()
     * @uses ColissimoApiXmlResponse::setCabAztec()
     * @uses ColissimoApiXmlResponse::setContractNumber()
     * @uses ColissimoApiXmlResponse::setElementVisual()
     * @uses ColissimoApiXmlResponse::setNumberPCH()
     * @uses ColissimoApiXmlResponse::setNumberRouting()
     * @uses ColissimoApiXmlResponse::setParcelNumber()
     * @uses ColissimoApiXmlResponse::setParcelNumberPartner()
     * @uses ColissimoApiXmlResponse::setPickupLocation()
     * @uses ColissimoApiXmlResponse::setRouting()
     * @uses ColissimoApiXmlResponse::setSender()
     * @uses ColissimoApiXmlResponse::setSitePCH()
     * @uses ColissimoApiXmlResponse::setSwissLabel()
     * @uses ColissimoApiXmlResponse::setZoneRouting()
     * @param string $cn23
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressee $addressee
     * @param string $barCodeCityssimo
     * @param string $barCodePCH
     * @param string $barCodeRouting
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBelgiumLabel $belgiumLabel
     * @param string $cabAztec
     * @param string $contractNumber
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiElementVisual[] $elementVisual
     * @param string $numberPCH
     * @param string $numberRouting
     * @param string $parcelNumber
     * @param string $parcelNumberPartner
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPickupLocation $pickupLocation
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiRouting $routing
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender $sender
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSite $sitePCH
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSwissLabel $swissLabel
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneRouting $zoneRouting
     */
    public function __construct(?string $cn23 = null, ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressee $addressee = null, ?string $barCodeCityssimo = null, ?string $barCodePCH = null, ?string $barCodeRouting = null, ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBelgiumLabel $belgiumLabel = null, ?string $cabAztec = null, ?string $contractNumber = null, ?array $elementVisual = null, ?string $numberPCH = null, ?string $numberRouting = null, ?string $parcelNumber = null, ?string $parcelNumberPartner = null, ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPickupLocation $pickupLocation = null, ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiRouting $routing = null, ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender $sender = null, ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSite $sitePCH = null, ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSwissLabel $swissLabel = null, ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneRouting $zoneRouting = null)
    {
        $this
            ->setCn23($cn23)
            ->setAddressee($addressee)
            ->setBarCodeCityssimo($barCodeCityssimo)
            ->setBarCodePCH($barCodePCH)
            ->setBarCodeRouting($barCodeRouting)
            ->setBelgiumLabel($belgiumLabel)
            ->setCabAztec($cabAztec)
            ->setContractNumber($contractNumber)
            ->setElementVisual($elementVisual)
            ->setNumberPCH($numberPCH)
            ->setNumberRouting($numberRouting)
            ->setParcelNumber($parcelNumber)
            ->setParcelNumberPartner($parcelNumberPartner)
            ->setPickupLocation($pickupLocation)
            ->setRouting($routing)
            ->setSender($sender)
            ->setSitePCH($sitePCH)
            ->setSwissLabel($swissLabel)
            ->setZoneRouting($zoneRouting);
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
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiXmlResponse
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
    /**
     * Get addressee value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressee|null
     */
    public function getAddressee(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressee
    {
        return $this->addressee;
    }
    /**
     * Set addressee value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressee $addressee
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiXmlResponse
     */
    public function setAddressee(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressee $addressee = null): self
    {
        $this->addressee = $addressee;
        
        return $this;
    }
    /**
     * Get barCodeCityssimo value
     * @return string|null
     */
    public function getBarCodeCityssimo(): ?string
    {
        return $this->barCodeCityssimo;
    }
    /**
     * Set barCodeCityssimo value
     * @param string $barCodeCityssimo
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiXmlResponse
     */
    public function setBarCodeCityssimo(?string $barCodeCityssimo = null): self
    {
        // validation for constraint: string
        if (!is_null($barCodeCityssimo) && !is_string($barCodeCityssimo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barCodeCityssimo, true), gettype($barCodeCityssimo)), __LINE__);
        }
        $this->barCodeCityssimo = $barCodeCityssimo;
        
        return $this;
    }
    /**
     * Get barCodePCH value
     * @return string|null
     */
    public function getBarCodePCH(): ?string
    {
        return $this->barCodePCH;
    }
    /**
     * Set barCodePCH value
     * @param string $barCodePCH
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiXmlResponse
     */
    public function setBarCodePCH(?string $barCodePCH = null): self
    {
        // validation for constraint: string
        if (!is_null($barCodePCH) && !is_string($barCodePCH)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barCodePCH, true), gettype($barCodePCH)), __LINE__);
        }
        $this->barCodePCH = $barCodePCH;
        
        return $this;
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
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiXmlResponse
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
     * Get belgiumLabel value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBelgiumLabel|null
     */
    public function getBelgiumLabel(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBelgiumLabel
    {
        return $this->belgiumLabel;
    }
    /**
     * Set belgiumLabel value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBelgiumLabel $belgiumLabel
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiXmlResponse
     */
    public function setBelgiumLabel(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBelgiumLabel $belgiumLabel = null): self
    {
        $this->belgiumLabel = $belgiumLabel;
        
        return $this;
    }
    /**
     * Get cabAztec value
     * @return string|null
     */
    public function getCabAztec(): ?string
    {
        return $this->cabAztec;
    }
    /**
     * Set cabAztec value
     * @param string $cabAztec
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiXmlResponse
     */
    public function setCabAztec(?string $cabAztec = null): self
    {
        // validation for constraint: string
        if (!is_null($cabAztec) && !is_string($cabAztec)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cabAztec, true), gettype($cabAztec)), __LINE__);
        }
        $this->cabAztec = $cabAztec;
        
        return $this;
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
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiXmlResponse
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
     * Get elementVisual value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiElementVisual[]
     */
    public function getElementVisual(): ?array
    {
        return isset($this->elementVisual) ? $this->elementVisual : null;
    }
    /**
     * This method is responsible for validating the values passed to the setElementVisual method
     * This method is willingly generated in order to preserve the one-line inline validation within the setElementVisual method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateElementVisualForArrayConstraintsFromSetElementVisual(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $xmlResponseElementVisualItem) {
            // validation for constraint: itemType
            if (!$xmlResponseElementVisualItem instanceof \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiElementVisual) {
                $invalidValues[] = is_object($xmlResponseElementVisualItem) ? get_class($xmlResponseElementVisualItem) : sprintf('%s(%s)', gettype($xmlResponseElementVisualItem), var_export($xmlResponseElementVisualItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The elementVisual property can only contain items of type \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiElementVisual, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set elementVisual value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiElementVisual[] $elementVisual
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiXmlResponse
     */
    public function setElementVisual(?array $elementVisual = null): self
    {
        // validation for constraint: array
        if ('' !== ($elementVisualArrayErrorMessage = self::validateElementVisualForArrayConstraintsFromSetElementVisual($elementVisual))) {
            throw new InvalidArgumentException($elementVisualArrayErrorMessage, __LINE__);
        }
        if (is_null($elementVisual) || (is_array($elementVisual) && empty($elementVisual))) {
            unset($this->elementVisual);
        } else {
            $this->elementVisual = $elementVisual;
        }
        
        return $this;
    }
    /**
     * Add item to elementVisual value
     * @throws InvalidArgumentException
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiElementVisual $item
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiXmlResponse
     */
    public function addToElementVisual(\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiElementVisual $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiElementVisual) {
            throw new InvalidArgumentException(sprintf('The elementVisual property can only contain items of type \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiElementVisual, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->elementVisual[] = $item;
        
        return $this;
    }
    /**
     * Get numberPCH value
     * @return string|null
     */
    public function getNumberPCH(): ?string
    {
        return $this->numberPCH;
    }
    /**
     * Set numberPCH value
     * @param string $numberPCH
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiXmlResponse
     */
    public function setNumberPCH(?string $numberPCH = null): self
    {
        // validation for constraint: string
        if (!is_null($numberPCH) && !is_string($numberPCH)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numberPCH, true), gettype($numberPCH)), __LINE__);
        }
        $this->numberPCH = $numberPCH;
        
        return $this;
    }
    /**
     * Get numberRouting value
     * @return string|null
     */
    public function getNumberRouting(): ?string
    {
        return $this->numberRouting;
    }
    /**
     * Set numberRouting value
     * @param string $numberRouting
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiXmlResponse
     */
    public function setNumberRouting(?string $numberRouting = null): self
    {
        // validation for constraint: string
        if (!is_null($numberRouting) && !is_string($numberRouting)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numberRouting, true), gettype($numberRouting)), __LINE__);
        }
        $this->numberRouting = $numberRouting;
        
        return $this;
    }
    /**
     * Get parcelNumber value
     * @return string|null
     */
    public function getParcelNumber(): ?string
    {
        return $this->parcelNumber;
    }
    /**
     * Set parcelNumber value
     * @param string $parcelNumber
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiXmlResponse
     */
    public function setParcelNumber(?string $parcelNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($parcelNumber) && !is_string($parcelNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parcelNumber, true), gettype($parcelNumber)), __LINE__);
        }
        $this->parcelNumber = $parcelNumber;
        
        return $this;
    }
    /**
     * Get parcelNumberPartner value
     * @return string|null
     */
    public function getParcelNumberPartner(): ?string
    {
        return $this->parcelNumberPartner;
    }
    /**
     * Set parcelNumberPartner value
     * @param string $parcelNumberPartner
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiXmlResponse
     */
    public function setParcelNumberPartner(?string $parcelNumberPartner = null): self
    {
        // validation for constraint: string
        if (!is_null($parcelNumberPartner) && !is_string($parcelNumberPartner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parcelNumberPartner, true), gettype($parcelNumberPartner)), __LINE__);
        }
        $this->parcelNumberPartner = $parcelNumberPartner;
        
        return $this;
    }
    /**
     * Get pickupLocation value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPickupLocation|null
     */
    public function getPickupLocation(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPickupLocation
    {
        return $this->pickupLocation;
    }
    /**
     * Set pickupLocation value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPickupLocation $pickupLocation
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiXmlResponse
     */
    public function setPickupLocation(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPickupLocation $pickupLocation = null): self
    {
        $this->pickupLocation = $pickupLocation;
        
        return $this;
    }
    /**
     * Get routing value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiRouting|null
     */
    public function getRouting(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiRouting
    {
        return $this->routing;
    }
    /**
     * Set routing value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiRouting $routing
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiXmlResponse
     */
    public function setRouting(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiRouting $routing = null): self
    {
        $this->routing = $routing;
        
        return $this;
    }
    /**
     * Get sender value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender|null
     */
    public function getSender(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender
    {
        return $this->sender;
    }
    /**
     * Set sender value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender $sender
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiXmlResponse
     */
    public function setSender(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender $sender = null): self
    {
        $this->sender = $sender;
        
        return $this;
    }
    /**
     * Get sitePCH value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSite|null
     */
    public function getSitePCH(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSite
    {
        return $this->sitePCH;
    }
    /**
     * Set sitePCH value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSite $sitePCH
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiXmlResponse
     */
    public function setSitePCH(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSite $sitePCH = null): self
    {
        $this->sitePCH = $sitePCH;
        
        return $this;
    }
    /**
     * Get swissLabel value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSwissLabel|null
     */
    public function getSwissLabel(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSwissLabel
    {
        return $this->swissLabel;
    }
    /**
     * Set swissLabel value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSwissLabel $swissLabel
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiXmlResponse
     */
    public function setSwissLabel(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSwissLabel $swissLabel = null): self
    {
        $this->swissLabel = $swissLabel;
        
        return $this;
    }
    /**
     * Get zoneRouting value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneRouting|null
     */
    public function getZoneRouting(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneRouting
    {
        return $this->zoneRouting;
    }
    /**
     * Set zoneRouting value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneRouting $zoneRouting
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiXmlResponse
     */
    public function setZoneRouting(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneRouting $zoneRouting = null): self
    {
        $this->zoneRouting = $zoneRouting;
        
        return $this;
    }
}
