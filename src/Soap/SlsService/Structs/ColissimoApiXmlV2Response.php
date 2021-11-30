<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for xmlV2Response Structs
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiXmlV2Response extends ColissimoApiXmlResponse
{
    /**
     * The fields
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiFields|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiFields $fields = null;
    /**
     * Constructor method for xmlV2Response
     * @uses ColissimoApiXmlV2Response::setFields()
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiFields $fields
     */
    public function __construct(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiFields $fields = null)
    {
        $this
            ->setFields($fields);
    }
    /**
     * Get fields value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiFields|null
     */
    public function getFields(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiFields
    {
        return $this->fields;
    }
    /**
     * Set fields value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiFields $fields
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiXmlV2Response
     */
    public function setFields(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiFields $fields = null): self
    {
        $this->fields = $fields;
        
        return $this;
    }
}
