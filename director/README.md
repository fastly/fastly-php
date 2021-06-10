# OpenAPIClient-php

A Director is responsible for balancing requests among a group of Backends. In addition to simply balancing, Directors can be configured to attempt retrying failed requests. Additionally, Directors have a quorum setting which can be used to determine when the Director as a whole is considered \"up\", in order to prevent \"server whack-a-mole\" following an outage as servers come back up. Only directors created via the API can be modified via the API. Directors known as \"autodirectors\" that are created automatically when load balancing groups of servers together cannot be modified or retrieved via the API.


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoadBalancingDirectorsDirectorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$created_at = 'created_at_example'; // string | Date and time in ISO 8601 format.
$deleted_at = 'deleted_at_example'; // string | Date and time in ISO 8601 format.
$updated_at = 'updated_at_example'; // string | Date and time in ISO 8601 format.
$service_id2 = 'service_id_example'; // string | Alphanumeric string identifying the service.
$version = 56; // int | Integer identifying a service version.
$backends = new \OpenAPI\Client\Model\ServiceServiceIdVersionVersionIdDirectorBackends(); // \OpenAPI\Client\Model\ServiceServiceIdVersionVersionIdDirectorBackends[] | List of backends associated to a director.
$capacity = 56; // int | Unused.
$comment = ''; // string | A freeform descriptive note.
$name = 'name_example'; // string | Name for the Director.
$quorum = 75; // int | The percentage of capacity that needs to be up for a director to be considered up. `0` to `100`.
$shield = 'null'; // string | Selected POP to serve as a shield for the backends. Defaults to `null` meaning no origin shielding if not set. Refer to the [datacenters API endpoint](/reference/api/utils/datacenter/) to get a list of available POPs used for shielding.
$type = 1; // int | What type of load balance group to use.
$retries = 5; // int | How many backends to search if it fails.

try {
    $result = $apiInstance->createDirector($service_id, $version_id, $created_at, $deleted_at, $updated_at, $service_id2, $version, $backends, $capacity, $comment, $name, $quorum, $shield, $type, $retries);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoadBalancingDirectorsDirectorApi->createDirector: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.fastly.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*LoadBalancingDirectorsDirectorApi* | [**createDirector**](docs/Api/LoadBalancingDirectorsDirectorApi.md#createdirector) | **POST** /service/{service_id}/version/{version_id}/director | Create a director
*LoadBalancingDirectorsDirectorApi* | [**deleteDirector**](docs/Api/LoadBalancingDirectorsDirectorApi.md#deletedirector) | **DELETE** /service/{service_id}/version/{version_id}/director/{director_name} | Delete a director
*LoadBalancingDirectorsDirectorApi* | [**getDirector**](docs/Api/LoadBalancingDirectorsDirectorApi.md#getdirector) | **GET** /service/{service_id}/version/{version_id}/director/{director_name} | Get a director
*LoadBalancingDirectorsDirectorApi* | [**listDirectors**](docs/Api/LoadBalancingDirectorsDirectorApi.md#listdirectors) | **GET** /service/{service_id}/version/{version_id}/director | List directors
*LoadBalancingDirectorsDirectorApi* | [**updateDirector**](docs/Api/LoadBalancingDirectorsDirectorApi.md#updatedirector) | **PUT** /service/{service_id}/version/{version_id}/director/{director_name} | Update a director

## Models

- [InlineObject](docs/Model/InlineObject.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [ModelDirector](docs/Model/ModelDirector.md)
- [ServiceServiceIdVersionVersionIdDirectorBackends](docs/Model/ServiceServiceIdVersionVersionIdDirectorBackends.md)

## Authorization

### token_engineer

- **Type**: API key
- **API key parameter name**: Fastly-Key
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
