<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getListMailBoxPickingDatesRetourRequest Structs
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiGetListMailBoxPickingDatesRetourRequest extends AbstractStructBase
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
     * The sender
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender $sender = null;
    /**
     * Constructor method for getListMailBoxPickingDatesRetourRequest
     * @uses ColissimoApiGetListMailBoxPickingDatesRetourRequest::setContractNumber()
     * @uses ColissimoApiGetListMailBoxPickingDatesRetourRequest::setPassword()
     * @uses ColissimoApiGetListMailBoxPickingDatesRetourRequest::setSender()
     * @param string $contractNumber
     * @param string $password
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender $sender
     */
    public function __construct(?string $contractNumber = null, ?string $password = null, ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender $sender = null)
    {
        $this
            ->setContractNumber($contractNumber)
            ->setPassword($password)
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
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetListMailBoxPickingDatesRetourRequest
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
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetListMailBoxPickingDatesRetourRequest
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
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetListMailBoxPickingDatesRetourRequest
     */
    public function setSender(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender $sender = null): self
    {
        $this->sender = $sender;
        
        return $this;
    }
}
