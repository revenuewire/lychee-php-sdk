# ./
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2017-11-10T21:08:00Z
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/revenuewire/lychee-php-sdk.git"
    }
  ],
  "require": {
    "revenuewire/lychee-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/.//autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new Swagger\Client\Api\DefaultApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->getSession($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSession: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://lychee-api.revenuewire.io/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**getSession**](docs/Api/DefaultApi.md#getsession) | **GET** /sessions/{id} | 
*DefaultApi* | [**getSessionsByIp**](docs/Api/DefaultApi.md#getsessionsbyip) | **GET** /sessions/ip/{ip} | 
*DefaultApi* | [**getSessionsBySessionId**](docs/Api/DefaultApi.md#getsessionsbysessionid) | **GET** /sessions/session/{sessionId} | 


## Documentation For Models

 - [CustomerSession](docs/Model/CustomerSession.md)
 - [CustomerSessionSubIds](docs/Model/CustomerSessionSubIds.md)


## Documentation For Authorization


## api_key

- **Type**: API key
- **API key parameter name**: x-api-key
- **Location**: HTTP header


## Author




