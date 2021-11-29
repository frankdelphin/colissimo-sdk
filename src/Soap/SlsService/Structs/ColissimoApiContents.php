<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for contents Structs
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiContents extends AbstractStructBase
{
    /**
     * The article
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiArticle[]
     */
    protected ?array $article = null;
    /**
     * The category
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCategory|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCategory $category = null;
    /**
     * The original
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiOriginal[]
     */
    protected ?array $original = null;
    /**
     * The explanations
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $explanations = null;
    /**
     * Constructor method for contents
     * @uses ColissimoApiContents::setArticle()
     * @uses ColissimoApiContents::setCategory()
     * @uses ColissimoApiContents::setOriginal()
     * @uses ColissimoApiContents::setExplanations()
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiArticle[] $article
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCategory $category
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiOriginal[] $original
     * @param string $explanations
     */
    public function __construct(?array $article = null, ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCategory $category = null, ?array $original = null, ?string $explanations = null)
    {
        $this
            ->setArticle($article)
            ->setCategory($category)
            ->setOriginal($original)
            ->setExplanations($explanations);
    }
    /**
     * Get article value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiArticle[]
     */
    public function getArticle(): ?array
    {
        return isset($this->article) ? $this->article : null;
    }
    /**
     * This method is responsible for validating the values passed to the setArticle method
     * This method is willingly generated in order to preserve the one-line inline validation within the setArticle method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateArticleForArrayConstraintsFromSetArticle(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $contentsArticleItem) {
            // validation for constraint: itemType
            if (!$contentsArticleItem instanceof \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiArticle) {
                $invalidValues[] = is_object($contentsArticleItem) ? get_class($contentsArticleItem) : sprintf('%s(%s)', gettype($contentsArticleItem), var_export($contentsArticleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The article property can only contain items of type \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiArticle, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set article value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiArticle[] $article
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiContents
     */
    public function setArticle(?array $article = null): self
    {
        // validation for constraint: array
        if ('' !== ($articleArrayErrorMessage = self::validateArticleForArrayConstraintsFromSetArticle($article))) {
            throw new InvalidArgumentException($articleArrayErrorMessage, __LINE__);
        }
        if (is_null($article) || (is_array($article) && empty($article))) {
            unset($this->article);
        } else {
            $this->article = $article;
        }
        
        return $this;
    }
    /**
     * Add item to article value
     * @throws InvalidArgumentException
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiArticle $item
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiContents
     */
    public function addToArticle(\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiArticle $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiArticle) {
            throw new InvalidArgumentException(sprintf('The article property can only contain items of type \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiArticle, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->article[] = $item;
        
        return $this;
    }
    /**
     * Get category value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCategory|null
     */
    public function getCategory(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCategory
    {
        return $this->category;
    }
    /**
     * Set category value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCategory $category
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiContents
     */
    public function setCategory(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCategory $category = null): self
    {
        $this->category = $category;
        
        return $this;
    }
    /**
     * Get original value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiOriginal[]
     */
    public function getOriginal(): ?array
    {
        return isset($this->original) ? $this->original : null;
    }
    /**
     * This method is responsible for validating the values passed to the setOriginal method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOriginal method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOriginalForArrayConstraintsFromSetOriginal(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $contentsOriginalItem) {
            // validation for constraint: itemType
            if (!$contentsOriginalItem instanceof \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiOriginal) {
                $invalidValues[] = is_object($contentsOriginalItem) ? get_class($contentsOriginalItem) : sprintf('%s(%s)', gettype($contentsOriginalItem), var_export($contentsOriginalItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The original property can only contain items of type \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiOriginal, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set original value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiOriginal[] $original
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiContents
     */
    public function setOriginal(?array $original = null): self
    {
        // validation for constraint: array
        if ('' !== ($originalArrayErrorMessage = self::validateOriginalForArrayConstraintsFromSetOriginal($original))) {
            throw new InvalidArgumentException($originalArrayErrorMessage, __LINE__);
        }
        if (is_null($original) || (is_array($original) && empty($original))) {
            unset($this->original);
        } else {
            $this->original = $original;
        }
        
        return $this;
    }
    /**
     * Add item to original value
     * @throws InvalidArgumentException
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiOriginal $item
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiContents
     */
    public function addToOriginal(\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiOriginal $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiOriginal) {
            throw new InvalidArgumentException(sprintf('The original property can only contain items of type \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiOriginal, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->original[] = $item;
        
        return $this;
    }
    /**
     * Get explanations value
     * @return string|null
     */
    public function getExplanations(): ?string
    {
        return $this->explanations;
    }
    /**
     * Set explanations value
     * @param string $explanations
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiContents
     */
    public function setExplanations(?string $explanations = null): self
    {
        // validation for constraint: string
        if (!is_null($explanations) && !is_string($explanations)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($explanations, true), gettype($explanations)), __LINE__);
        }
        $this->explanations = $explanations;
        
        return $this;
    }
}
