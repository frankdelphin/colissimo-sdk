<?php

namespace SengentoBV\ColissimoSdk;

use SengentoBV\ColissimoSdk\Exceptions\ColissimoArgumentOutOfRangeException;

class ColissimoServiceType
{
    public const SLS = 'Sls';

    /**
     * Check if the given string is a valid service type identifier. Case-sensitive.
     * @param string $serviceType Service type identifier.
     * @return bool
     */
    public static function isValid(string $serviceType): bool
    {
        return in_array($serviceType, [
            static::SLS,
        ]);
    }

    /**
     * Check if the given string is a valid service type identifier. Case-sensitive.
     * @param string $serviceType Service type identifier.
     * @throws ColissimoArgumentOutOfRangeException
     */
    public static function requireValid(string $serviceType)
    {
        if (!static::isValid($serviceType)) {
            throw new ColissimoArgumentOutOfRangeException('serviceType', 'Invalid service type.', $serviceType);
        }
    }
}