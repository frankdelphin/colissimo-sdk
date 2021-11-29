<?php

namespace SengentoBV\ColissimoSdk;

interface ColissimoAuthenticationInterface
{
    /**
     * Get the contract number.
     * @return string
     */
    public function getContractNumber(): string;

    /**
     * Get the password.
     * @return string
     */
    public function getPassword(): string;
}