<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for bordereau Structs
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiBordereau extends AbstractStructBase
{
    /**
     * The bordereauDataHandler
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bordereauDataHandler = null;
    /**
     * The bordereauHeader
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBordereauHeader|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBordereauHeader $bordereauHeader = null;
    /**
     * Constructor method for bordereau
     * @uses ColissimoApiBordereau::setBordereauDataHandler()
     * @uses ColissimoApiBordereau::setBordereauHeader()
     * @param string $bordereauDataHandler
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBordereauHeader $bordereauHeader
     */
    public function __construct(?string $bordereauDataHandler = null, ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBordereauHeader $bordereauHeader = null)
    {
        $this
            ->setBordereauDataHandler($bordereauDataHandler)
            ->setBordereauHeader($bordereauHeader);
    }
    /**
     * Get bordereauDataHandler value
     * @return string|null
     */
    public function getBordereauDataHandler(): ?string
    {
        return $this->bordereauDataHandler;
    }
    /**
     * Set bordereauDataHandler value
     * @param string $bordereauDataHandler
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBordereau
     */
    public function setBordereauDataHandler(?string $bordereauDataHandler = null): self
    {
        // validation for constraint: string
        if (!is_null($bordereauDataHandler) && !is_string($bordereauDataHandler)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bordereauDataHandler, true), gettype($bordereauDataHandler)), __LINE__);
        }
        $this->bordereauDataHandler = $bordereauDataHandler;
        
        return $this;
    }
    /**
     * Get bordereauHeader value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBordereauHeader|null
     */
    public function getBordereauHeader(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBordereauHeader
    {
        return $this->bordereauHeader;
    }
    /**
     * Set bordereauHeader value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBordereauHeader $bordereauHeader
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBordereau
     */
    public function setBordereauHeader(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBordereauHeader $bordereauHeader = null): self
    {
        $this->bordereauHeader = $bordereauHeader;
        
        return $this;
    }
}
