<?php

namespace SengentoBV\ColissimoSdk\Exceptions;

class ColissimoSoapFaultException extends ColissimoException
{
    /**
     * Get the source SoapFault instance.
     *
     * @return \SoapFault
     * @noinspection PhpIncompatibleReturnTypeInspection
     */
    public function getSource() : \SoapFault
    {
        return $this->getPrevious();
    }

    public function __construct(\SoapFault $soapFault)
    {
        $message = null;
        $code = null;

        // Special case for error responses
        if (isset($soapFault->faultcode) && isset($soapFault->faultstring)) {

            if ($soapFault->faultcode === 'INTERNAL_AUTHENTICATION_NOT_SET') {
                $message = 'Authentication not set.';
                $code = -1;
            }
        }

        parent::__construct($message, $code, $soapFault);
    }
}