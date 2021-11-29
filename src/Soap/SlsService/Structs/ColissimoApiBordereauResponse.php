<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for bordereauResponse Structs
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiBordereauResponse extends ColissimoApiBaseResponse
{
    /**
     * The bordereau
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBordereau|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBordereau $bordereau = null;
    /**
     * Constructor method for bordereauResponse
     * @uses ColissimoApiBordereauResponse::setBordereau()
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBordereau $bordereau
     */
    public function __construct(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBordereau $bordereau = null)
    {
        $this
            ->setBordereau($bordereau);
    }
    /**
     * Get bordereau value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBordereau|null
     */
    public function getBordereau(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBordereau
    {
        return $this->bordereau;
    }
    /**
     * Set bordereau value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBordereau $bordereau
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBordereauResponse
     */
    public function setBordereau(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiBordereau $bordereau = null): self
    {
        $this->bordereau = $bordereau;
        
        return $this;
    }
}
