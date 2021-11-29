<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for letter Structs
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiLetter extends AbstractStructBase
{
    /**
     * The service
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiService|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiService $service = null;
    /**
     * The parcel
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiParcel|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiParcel $parcel = null;
    /**
     * The customsDeclarations
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCustomsDeclarations|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCustomsDeclarations $customsDeclarations = null;
    /**
     * The sender
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender $sender = null;
    /**
     * The addressee
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressee|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressee $addressee = null;
    /**
     * The codSenderAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCodSenderAddress|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCodSenderAddress $codSenderAddress = null;
    /**
     * The uploadDocument
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiUploadDocument|null
     */
    protected ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiUploadDocument $uploadDocument = null;
    /**
     * Constructor method for letter
     * @uses ColissimoApiLetter::setService()
     * @uses ColissimoApiLetter::setParcel()
     * @uses ColissimoApiLetter::setCustomsDeclarations()
     * @uses ColissimoApiLetter::setSender()
     * @uses ColissimoApiLetter::setAddressee()
     * @uses ColissimoApiLetter::setCodSenderAddress()
     * @uses ColissimoApiLetter::setUploadDocument()
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiService $service
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiParcel $parcel
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCustomsDeclarations $customsDeclarations
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender $sender
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressee $addressee
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCodSenderAddress $codSenderAddress
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiUploadDocument $uploadDocument
     */
    public function __construct(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiService $service = null, ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiParcel $parcel = null, ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCustomsDeclarations $customsDeclarations = null, ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender $sender = null, ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressee $addressee = null, ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCodSenderAddress $codSenderAddress = null, ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiUploadDocument $uploadDocument = null)
    {
        $this
            ->setService($service)
            ->setParcel($parcel)
            ->setCustomsDeclarations($customsDeclarations)
            ->setSender($sender)
            ->setAddressee($addressee)
            ->setCodSenderAddress($codSenderAddress)
            ->setUploadDocument($uploadDocument);
    }
    /**
     * Get service value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiService|null
     */
    public function getService(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiService
    {
        return $this->service;
    }
    /**
     * Set service value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiService $service
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiLetter
     */
    public function setService(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiService $service = null): self
    {
        $this->service = $service;
        
        return $this;
    }
    /**
     * Get parcel value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiParcel|null
     */
    public function getParcel(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiParcel
    {
        return $this->parcel;
    }
    /**
     * Set parcel value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiParcel $parcel
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiLetter
     */
    public function setParcel(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiParcel $parcel = null): self
    {
        $this->parcel = $parcel;
        
        return $this;
    }
    /**
     * Get customsDeclarations value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCustomsDeclarations|null
     */
    public function getCustomsDeclarations(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCustomsDeclarations
    {
        return $this->customsDeclarations;
    }
    /**
     * Set customsDeclarations value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCustomsDeclarations $customsDeclarations
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiLetter
     */
    public function setCustomsDeclarations(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCustomsDeclarations $customsDeclarations = null): self
    {
        $this->customsDeclarations = $customsDeclarations;
        
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
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiLetter
     */
    public function setSender(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiSender $sender = null): self
    {
        $this->sender = $sender;
        
        return $this;
    }
    /**
     * Get addressee value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressee|null
     */
    public function getAddressee(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressee
    {
        return $this->addressee;
    }
    /**
     * Set addressee value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressee $addressee
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiLetter
     */
    public function setAddressee(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiAddressee $addressee = null): self
    {
        $this->addressee = $addressee;
        
        return $this;
    }
    /**
     * Get codSenderAddress value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCodSenderAddress|null
     */
    public function getCodSenderAddress(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCodSenderAddress
    {
        return $this->codSenderAddress;
    }
    /**
     * Set codSenderAddress value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCodSenderAddress $codSenderAddress
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiLetter
     */
    public function setCodSenderAddress(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCodSenderAddress $codSenderAddress = null): self
    {
        $this->codSenderAddress = $codSenderAddress;
        
        return $this;
    }
    /**
     * Get uploadDocument value
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiUploadDocument|null
     */
    public function getUploadDocument(): ?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiUploadDocument
    {
        return $this->uploadDocument;
    }
    /**
     * Set uploadDocument value
     * @param \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiUploadDocument $uploadDocument
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiLetter
     */
    public function setUploadDocument(?\SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiUploadDocument $uploadDocument = null): self
    {
        $this->uploadDocument = $uploadDocument;
        
        return $this;
    }
}
