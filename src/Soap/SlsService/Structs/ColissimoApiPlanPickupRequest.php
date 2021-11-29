<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for planPickupRequest Structs
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiPlanPickupRequest extends AbstractStructBase
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
     * The parcelNumber
     * @var string|null
     */
    protected ?string $parcelNumber = null;
    /**
     * The mailBoxPickingDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $mailBoxPickingDate = null;
    /**
     * The sender
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender $sender = null;
    /**
     * Constructor method for planPickupRequest
     * @uses ColissimoApiPlanPickupRequest::setContractNumber()
     * @uses ColissimoApiPlanPickupRequest::setPassword()
     * @uses ColissimoApiPlanPickupRequest::setParcelNumber()
     * @uses ColissimoApiPlanPickupRequest::setMailBoxPickingDate()
     * @uses ColissimoApiPlanPickupRequest::setSender()
     * @param string $contractNumber
     * @param string $password
     * @param string $parcelNumber
     * @param string $mailBoxPickingDate
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender $sender
     */
    public function __construct(?string $contractNumber = null, ?string $password = null, ?string $parcelNumber = null, ?string $mailBoxPickingDate = null, ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender $sender = null)
    {
        $this
            ->setContractNumber($contractNumber)
            ->setPassword($password)
            ->setParcelNumber($parcelNumber)
            ->setMailBoxPickingDate($mailBoxPickingDate)
            ->setSender($sender);
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
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPlanPickupRequest
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
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPlanPickupRequest
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
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPlanPickupRequest
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
     * Get mailBoxPickingDate value
     * @return string|null
     */
    public function getMailBoxPickingDate(): ?string
    {
        return $this->mailBoxPickingDate;
    }
    /**
     * Set mailBoxPickingDate value
     * @param string $mailBoxPickingDate
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPlanPickupRequest
     */
    public function setMailBoxPickingDate(?string $mailBoxPickingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($mailBoxPickingDate) && !is_string($mailBoxPickingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailBoxPickingDate, true), gettype($mailBoxPickingDate)), __LINE__);
        }
        $this->mailBoxPickingDate = $mailBoxPickingDate;
        
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
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiPlanPickupRequest
     */
    public function setSender(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender $sender = null): self
    {
        $this->sender = $sender;
        
        return $this;
    }
}
