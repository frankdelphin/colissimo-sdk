<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zoneRouting Structs
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiZoneRouting extends AbstractStructBase
{
    /**
     * The zoneCABRoutage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneCABRoutage|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneCABRoutage $zoneCABRoutage = null;
    /**
     * The zoneInfosRoutage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneInfosRoutage|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneInfosRoutage $zoneInfosRoutage = null;
    /**
     * Constructor method for zoneRouting
     * @uses ColissimoApiZoneRouting::setZoneCABRoutage()
     * @uses ColissimoApiZoneRouting::setZoneInfosRoutage()
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneCABRoutage $zoneCABRoutage
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneInfosRoutage $zoneInfosRoutage
     */
    public function __construct(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneCABRoutage $zoneCABRoutage = null, ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneInfosRoutage $zoneInfosRoutage = null)
    {
        $this
            ->setZoneCABRoutage($zoneCABRoutage)
            ->setZoneInfosRoutage($zoneInfosRoutage);
    }
    /**
     * Get zoneCABRoutage value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneCABRoutage|null
     */
    public function getZoneCABRoutage(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneCABRoutage
    {
        return $this->zoneCABRoutage;
    }
    /**
     * Set zoneCABRoutage value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneCABRoutage $zoneCABRoutage
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneRouting
     */
    public function setZoneCABRoutage(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneCABRoutage $zoneCABRoutage = null): self
    {
        $this->zoneCABRoutage = $zoneCABRoutage;
        
        return $this;
    }
    /**
     * Get zoneInfosRoutage value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneInfosRoutage|null
     */
    public function getZoneInfosRoutage(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneInfosRoutage
    {
        return $this->zoneInfosRoutage;
    }
    /**
     * Set zoneInfosRoutage value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneInfosRoutage $zoneInfosRoutage
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneRouting
     */
    public function setZoneInfosRoutage(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiZoneInfosRoutage $zoneInfosRoutage = null): self
    {
        $this->zoneInfosRoutage = $zoneInfosRoutage;
        
        return $this;
    }
}
