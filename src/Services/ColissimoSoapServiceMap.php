<?php

namespace SengentoBV\ColissimoSdk\Services;

use SengentoBV\ColissimoSdk\ColissimoServiceType;
use SengentoBV\ColissimoSdk\Exceptions\ColissimoArgumentOutOfRangeException;

class ColissimoSoapServiceMap
{
    public const SERVICE_SLS_CHECK = "SERVICE_SLS_CHECK";
    public const SERVICE_SLS_GENERATE = "SERVICE_SLS_GENERATE";
    public const SERVICE_SLS_GET = "SERVICE_SLS_GET";
    public const SERVICE_SLS_PLAN = "SERVICE_SLS_PLAN";

    final public static function all(): array
    {
        return [
            static::SERVICE_SLS_CHECK => [
                'serviceType' => ColissimoServiceType::SLS,
                'serviceClass' => \SengentoBV\ColissimoSdk\Soap\SlsService\Services\ColissimoApiCheck::class,
            ],
            static::SERVICE_SLS_GENERATE => [
                'serviceType' => ColissimoServiceType::SLS,
                'serviceClass' => \SengentoBV\ColissimoSdk\Soap\SlsService\Services\ColissimoApiGenerate::class,
            ],
            static::SERVICE_SLS_GET => [
                'serviceType' => ColissimoServiceType::SLS,
                'serviceClass' => \SengentoBV\ColissimoSdk\Soap\SlsService\Services\ColissimoApiGet::class,
            ],
            static::SERVICE_SLS_PLAN => [
                'serviceType' => ColissimoServiceType::SLS,
                'serviceClass' => \SengentoBV\ColissimoSdk\Soap\SlsService\Services\ColissimoApiPlan::class,
            ],
        ];
    }

    /**
     * @param string $service
     * @return array
     * @throws ColissimoArgumentOutOfRangeException
     */
    final public static function get(string $service): array
    {
        $service = strtoupper($service);
        $mappings = static::all();

        if (isset($mappings[$service])) {
            return $mappings[$service];
        }

        throw new ColissimoArgumentOutOfRangeException('service', 'Invalid service type.', $service);
    }
}