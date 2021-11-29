<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for elementVisual Structs
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiElementVisual extends AbstractStructBase
{
    /**
     * The name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The position
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $position = null;
    /**
     * The shortcut
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shortcut = null;
    /**
     * Constructor method for elementVisual
     * @uses ColissimoApiElementVisual::setName()
     * @uses ColissimoApiElementVisual::setPosition()
     * @uses ColissimoApiElementVisual::setShortcut()
     * @param string $name
     * @param string $position
     * @param string $shortcut
     */
    public function __construct(?string $name = null, ?string $position = null, ?string $shortcut = null)
    {
        $this
            ->setName($name)
            ->setPosition($position)
            ->setShortcut($shortcut);
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
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiElementVisual
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
     * Get position value
     * @return string|null
     */
    public function getPosition(): ?string
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param string $position
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiElementVisual
     */
    public function setPosition(?string $position = null): self
    {
        // validation for constraint: string
        if (!is_null($position) && !is_string($position)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get shortcut value
     * @return string|null
     */
    public function getShortcut(): ?string
    {
        return $this->shortcut;
    }
    /**
     * Set shortcut value
     * @param string $shortcut
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiElementVisual
     */
    public function setShortcut(?string $shortcut = null): self
    {
        // validation for constraint: string
        if (!is_null($shortcut) && !is_string($shortcut)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shortcut, true), gettype($shortcut)), __LINE__);
        }
        $this->shortcut = $shortcut;
        
        return $this;
    }
}
