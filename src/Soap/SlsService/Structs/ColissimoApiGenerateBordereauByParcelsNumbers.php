<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateBordereauByParcelsNumbers Structs
 * Meta information extracted from the WSDL
 * - type: tns:generateBordereauByParcelsNumbers
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiGenerateBordereauByParcelsNumbers extends AbstractStructBase
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
     * The generateBordereauParcelNumberList
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateBordereauParcelNumberList|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateBordereauParcelNumberList $generateBordereauParcelNumberList = null;
    /**
     * Constructor method for generateBordereauByParcelsNumbers
     * @uses ColissimoApiGenerateBordereauByParcelsNumbers::setContractNumber()
     * @uses ColissimoApiGenerateBordereauByParcelsNumbers::setPassword()
     * @uses ColissimoApiGenerateBordereauByParcelsNumbers::setGenerateBordereauParcelNumberList()
     * @param string $contractNumber
     * @param string $password
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateBordereauParcelNumberList $generateBordereauParcelNumberList
     */
    public function __construct(?string $contractNumber = null, ?string $password = null, ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateBordereauParcelNumberList $generateBordereauParcelNumberList = null)
    {
        $this
            ->setContractNumber($contractNumber)
            ->setPassword($password)
            ->setGenerateBordereauParcelNumberList($generateBordereauParcelNumberList);
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
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateBordereauByParcelsNumbers
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
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateBordereauByParcelsNumbers
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
     * Get generateBordereauParcelNumberList value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateBordereauParcelNumberList|null
     */
    public function getGenerateBordereauParcelNumberList(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateBordereauParcelNumberList
    {
        return $this->generateBordereauParcelNumberList;
    }
    /**
     * Set generateBordereauParcelNumberList value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateBordereauParcelNumberList $generateBordereauParcelNumberList
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateBordereauByParcelsNumbers
     */
    public function setGenerateBordereauParcelNumberList(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGenerateBordereauParcelNumberList $generateBordereauParcelNumberList = null): self
    {
        $this->generateBordereauParcelNumberList = $generateBordereauParcelNumberList;
        
        return $this;
    }
}
