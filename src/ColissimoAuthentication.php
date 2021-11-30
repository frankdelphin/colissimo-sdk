<?php

namespace SengentoBV\ColissimoSdk;

class ColissimoAuthentication implements ColissimoAuthenticationInterface
{
    protected string $contractNumber;
    protected string $password;

    /**
     * @param string $contractNumber
     * @param string $password
     */
    public function __construct(string $contractNumber, string $password)
    {
        $this->contractNumber = $contractNumber;
        $this->password = $password;
    }

    /**
     * @inheritDoc
     */
    public function getContractNumber(): string
    {
        return $this->contractNumber;
    }

    /**
     * @inheritDoc
     */
    public function getPassword(): string
    {
        return $this->password;
    }
}