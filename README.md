# sengentobv/colissimo-sdk

Unofficial Colissimo API PHP SDK

Simple wrapper around the Colissimo SOAP APIs.

## Installation & Usage

### Requirements

PHP 7.4 or later.

Check composer.json for a list of all the requirements.

### Composer

The recommended way to install this library is through
[Composer](https://getcomposer.org/).

```bash
composer require sengentobv/colissimo-sdk
```

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/colissimo-sdk/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure the authentication
$authentication = new \SengentoBV\ColissimoSdk\ColissimoAuthentication($CONTRACT_NUMBER, $PASSWORD);

// Create an instance of the client
$apiClient = new \SengentoBV\ColissimoSdk\ColissimoApiClient($authentication);

try {
    // Get an instance of the SLS service
    $slsService = $apiClient->getSlsService();
        
    // Perform a call
    // NOTE: You have to leave the contract number/password empty as the authentication information will be (over)written automatically!
    $result = $slsService->checkGenerateLabel(new \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiCheckGenerateLabel(...))
    print_r($result);
    
} catch (\Exception $e) {
    echo $e->getMessage();
}

```

## API Endpoints

The following webservices have been wrapped/mapped.

- https://ws.colissimo.fr/sls-ws/SlsServiceWS/2.0

## Authorization

The Colissimo API uses a custom method to authenticate (using the same set of credentials).

This library aims to aid you in this!

Whenever you create a new request object, you can (should) leave the fields meant for authentication empty as this library will do the heavy lifting for you by filling in (or overwriting) these fields automatically.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```