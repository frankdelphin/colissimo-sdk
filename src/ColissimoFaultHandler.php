<?php

namespace SengentoBV\ColissimoSdk;

use Exception;
use SengentoBV\ColissimoSdk\ServiceClients\AbstractColissimoServiceClient;
use SoapFault;

class ColissimoFaultHandler
{
    /**
     * Attempt to recover from the thrown fault.
     *
     * You can throw your own fault if needed (if not castable to DpdBeException, your exception will be wrapped)
     *
     * @param AbstractColissimoServiceClient $serviceClient
     * @param string $function Function name
     * @param SoapFault|Exception $fault Soap fault or exception thrown.
     * @return bool true to indicate a recovery was attempted and the call should be retried; false to throw the original exception.
     */
    public function tryRecover(AbstractColissimoServiceClient $serviceClient, string $function, Exception $fault) : bool
    {
        return false;
    }
}