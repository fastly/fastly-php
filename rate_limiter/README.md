# OpenAPIClient-php

Rate limiters add configurable origin request rate limiting to a service. Use of this feature is by invite only and subject to the terms set forth in the invitation you were emailed. To create a rate limiting policy, you must have a [paid account with a contract](https://docs.fastly.com/en/guides/accounts-and-pricing-plans#paid-accounts-with-contractual-commitments) for Fastly’s services.


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


$apiInstance = new OpenAPI\Client\Api\VclServicesRateLimiterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$name = 'name_example'; // string | A human readable name for the rate limiting rule.
$http_methods = 'http_methods_example'; // string[] | Array of HTTP methods to apply rate limiting to.
$rps_limit = 56; // int | Upper limit of requests per second allowed by the rate limiter.
$window_size = 56; // int | Number of seconds during which the RPS limit must be exceeded in order to trigger a violation.
$client_key = 'client_key_example'; // string[] | Array of VCL variables used to generate a counter key to identify a client. Examples variables include `req.http.Fastly-Client-IP`, `req.http.User-Agent`, or a custom header like `req.http.API-Key`.
$penalty_box_duration = 56; // int | Length of time in seconds that the rate limiter is in effect after the initial violation is detected.
$action = 'action_example'; // string | The action to take when a rate limiter violation is detected. \\\"response\\\" and \\\"response_object\\\" prevent an origin request; \\\"log_only\\\" logs the violation but allows the origin request to continue.
$service_id2 = 'service_id_example'; // string | Alphanumeric string identifying the service.
$version = 56; // int | Integer identifying a service version.
$created_at = 'created_at_example'; // string | Date and time in ISO 8601 format.
$deleted_at = 'deleted_at_example'; // string | Date and time in ISO 8601 format.
$updated_at = 'updated_at_example'; // string | Date and time in ISO 8601 format.
$uri_dictionary_name = 'uri_dictionary_name_example'; // string | The name of an Edge Dictionary containing URIs as keys. If not defined or null, all origin URIs will be rate limited.
$response = new \OpenAPI\Client\Model\ServiceServiceIdVersionVersionIdRateLimitersResponse(); // \OpenAPI\Client\Model\ServiceServiceIdVersionVersionIdRateLimitersResponse
$response_object_name = 'response_object_name_example'; // string | Name of existing response object. Required if `action` is \\\"response_object\\\". Note that the rate limiter response is only updated to reflect the response object content when saving the rate limiter configuration.
$logger_type = 'logger_type_example'; // string | Name of the type of logging endpoint to be used when action is \\\"log_only\\\". The logging endpoint type is used to determine the appropriate log format to use when emitting log entries.
$feature_revision = 56; // int | Revision number of the rate limiting feature implementation. Defaults to the most recent revision.

try {
    $result = $apiInstance->createRateLimiter($service_id, $version_id, $name, $http_methods, $rps_limit, $window_size, $client_key, $penalty_box_duration, $action, $service_id2, $version, $created_at, $deleted_at, $updated_at, $uri_dictionary_name, $response, $response_object_name, $logger_type, $feature_revision);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclServicesRateLimiterApi->createRateLimiter: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.fastly.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*VclServicesRateLimiterApi* | [**createRateLimiter**](docs/Api/VclServicesRateLimiterApi.md#createratelimiter) | **POST** /service/{service_id}/version/{version_id}/rate-limiters | Create a rate limiter
*VclServicesRateLimiterApi* | [**deleteRateLimiter**](docs/Api/VclServicesRateLimiterApi.md#deleteratelimiter) | **DELETE** /rate-limiters/{rate_limiter_id} | Delete a rate limiter
*VclServicesRateLimiterApi* | [**getRateLimiter**](docs/Api/VclServicesRateLimiterApi.md#getratelimiter) | **GET** /rate-limiters/{rate_limiter_id} | Get a rate limiter
*VclServicesRateLimiterApi* | [**listRateLimiters**](docs/Api/VclServicesRateLimiterApi.md#listratelimiters) | **GET** /service/{service_id}/version/{version_id}/rate-limiters | List rate limiters
*VclServicesRateLimiterApi* | [**updateRateLimiter**](docs/Api/VclServicesRateLimiterApi.md#updateratelimiter) | **PUT** /rate-limiters/{rate_limiter_id} | Update a rate limiter

## Models

- [InlineObject](docs/Model/InlineObject.md)
- [InlineObject1](docs/Model/InlineObject1.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [ModelRateLimiter](docs/Model/ModelRateLimiter.md)
- [ServiceServiceIdVersionVersionIdRateLimitersResponse](docs/Model/ServiceServiceIdVersionVersionIdRateLimitersResponse.md)

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

- API version: `1.0.0-beta`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
