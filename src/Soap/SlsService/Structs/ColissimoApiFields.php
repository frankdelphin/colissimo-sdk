<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for fields Structs
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiFields extends AbstractStructBase
{
    /**
     * The field
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiField[]
     */
    protected ?array $field = null;
    /**
     * Constructor method for fields
     * @uses ColissimoApiFields::setField()
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiField[] $field
     */
    public function __construct(?array $field = null)
    {
        $this
            ->setField($field);
    }
    /**
     * Get field value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiField[]
     */
    public function getField(): ?array
    {
        return isset($this->field) ? $this->field : null;
    }
    /**
     * This method is responsible for validating the values passed to the setField method
     * This method is willingly generated in order to preserve the one-line inline validation within the setField method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFieldForArrayConstraintsFromSetField(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fieldsFieldItem) {
            // validation for constraint: itemType
            if (!$fieldsFieldItem instanceof \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiField) {
                $invalidValues[] = is_object($fieldsFieldItem) ? get_class($fieldsFieldItem) : sprintf('%s(%s)', gettype($fieldsFieldItem), var_export($fieldsFieldItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The field property can only contain items of type \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiField, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set field value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiField[] $field
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiFields
     */
    public function setField(?array $field = null): self
    {
        // validation for constraint: array
        if ('' !== ($fieldArrayErrorMessage = self::validateFieldForArrayConstraintsFromSetField($field))) {
            throw new InvalidArgumentException($fieldArrayErrorMessage, __LINE__);
        }
        if (is_null($field) || (is_array($field) && empty($field))) {
            unset($this->field);
        } else {
            $this->field = $field;
        }
        
        return $this;
    }
    /**
     * Add item to field value
     * @throws InvalidArgumentException
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiField $item
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiFields
     */
    public function addToField(\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiField $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiField) {
            throw new InvalidArgumentException(sprintf('The field property can only contain items of type \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiField, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->field[] = $item;
        
        return $this;
    }
}
