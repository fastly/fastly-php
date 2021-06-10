# OpenAPIClient-php

Fastly will upload log messages to the Google BigQuery dataset and table in the format specified in the BigQuery logging object.


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


$apiInstance = new OpenAPI\Client\Api\LoggingBigqueryApi(
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
$name = 'name_example'; // string | The name of the BigQuery logging object. Used as a primary key for API access.
$placement = 'placement_example'; // string | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
$format_version = 2; // int | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
$response_condition = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$format = '%h %l %u %t \"%r\" %&gt;s %b'; // string | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). Must produce JSON that matches the schema of your BigQuery table.
$user = 'user_example'; // string | Your Google Cloud Platform service account email address. The `client_email` field in your service account authentication JSON. Required.
$secret_key = 'secret_key_example'; // string | Your Google Cloud Platform account secret key. The `private_key` field in your service account authentication JSON. Required.
$dataset = 'dataset_example'; // string | Your BigQuery dataset.
$table = 'table_example'; // string | Your BigQuery table.
$template_suffix = 'template_suffix_example'; // string | BigQuery table name suffix template. Optional.
$project_id = 'project_id_example'; // string | Your Google Cloud Platform project ID. Required

try {
    $result = $apiInstance->createLogBigquery($service_id, $version_id, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $user, $secret_key, $dataset, $table, $template_suffix, $project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingBigqueryApi->createLogBigquery: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.fastly.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*LoggingBigqueryApi* | [**createLogBigquery**](docs/Api/LoggingBigqueryApi.md#createlogbigquery) | **POST** /service/{service_id}/version/{version_id}/logging/bigquery | Create a BigQuery log endpoint
*LoggingBigqueryApi* | [**deleteLogBigquery**](docs/Api/LoggingBigqueryApi.md#deletelogbigquery) | **DELETE** /service/{service_id}/version/{version_id}/logging/bigquery/{logging_bigquery_name} | Delete a BigQuery log endpoint
*LoggingBigqueryApi* | [**getLogBigquery**](docs/Api/LoggingBigqueryApi.md#getlogbigquery) | **GET** /service/{service_id}/version/{version_id}/logging/bigquery/{logging_bigquery_name} | Get a BigQuery log endpoint
*LoggingBigqueryApi* | [**listLogBigquery**](docs/Api/LoggingBigqueryApi.md#listlogbigquery) | **GET** /service/{service_id}/version/{version_id}/logging/bigquery | List BigQuery log endpoints
*LoggingBigqueryApi* | [**updateLogBigquery**](docs/Api/LoggingBigqueryApi.md#updatelogbigquery) | **PUT** /service/{service_id}/version/{version_id}/logging/bigquery/{logging_bigquery_name} | Update a BigQuery log endpoint

## Models

- [InlineObject](docs/Model/InlineObject.md)
- [InlineObject1](docs/Model/InlineObject1.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [ModelLoggingBigquery](docs/Model/ModelLoggingBigquery.md)

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
