<?php

namespace SengentoBV\ColissimoSdk\Exceptions;

use Exception;
use Throwable;

class ColissimoException extends Exception
{
    public function __construct(?string $message = null,
                                ?int $code = null,
                                Throwable $previous = null)
    {
        $message = (($message === null && $previous !== null) ? $previous->getMessage() : $message) ?? 'An exception occurred.';
        $code = (($code === null && $previous !== null) ? $previous->getCode() : $code) ?? 0;

        parent::__construct($message, $code, $previous);
    }
}