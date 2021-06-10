# OpenAPIClient-php

Fastly will upload log messages periodically to the server in the format specified in the Elasticsearch object.


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


$apiInstance = new OpenAPI\Client\Api\LoggingElasticsearchApi(
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
$name = 'name_example'; // string | The name for the real-time logging configuration.
$placement = 'placement_example'; // string | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
$format_version = 2; // int | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
$response_condition = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$format = '%h %l %u %t \"%r\" %&gt;s %b'; // string | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). Must produce valid JSON that Elasticsearch can ingest.
$tls_ca_cert = 'null'; // string | A secure certificate to authenticate a server with. Must be in PEM format.
$tls_client_cert = 'null'; // string | The client certificate used to make authenticated requests. Must be in PEM format.
$tls_client_key = 'null'; // string | The client private key used to make authenticated requests. Must be in PEM format.
$tls_hostname = 'null'; // string | The hostname to verify the server's certificate. This should be one of the Subject Alternative Name (SAN) fields for the certificate. Common Names (CN) are not supported.
$request_max_entries = 0; // int | The maximum number of logs sent in one request. Defaults `0` for unbounded.
$request_max_bytes = 0; // int | The maximum number of bytes sent in one request. Defaults `0` for unbounded.
$index = 'index_example'; // string | The name of the Elasticsearch index to send documents (logs) to. The index must follow the Elasticsearch [index format rules](https://www.elastic.co/guide/en/elasticsearch/reference/current/indices-create-index.html). We support [strftime](https://www.man7.org/linux/man-pages/man3/strftime.3.html) interpolated variables inside braces prefixed with a pound symbol. For example, `#{%F}` will interpolate as `YYYY-MM-DD` with today's date.
$url = 'url_example'; // string | The URL to stream logs to. Must use HTTPS.
$pipeline = 'pipeline_example'; // string | The ID of the Elasticsearch ingest pipeline to apply pre-process transformations to before indexing. Learn more about creating a pipeline in the [Elasticsearch docs](https://www.elastic.co/guide/en/elasticsearch/reference/current/ingest.html).
$user = 'user_example'; // string | Basic Auth username.
$password = 'password_example'; // string | Basic Auth password.

try {
    $result = $apiInstance->createLogElasticsearch($service_id, $version_id, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $tls_ca_cert, $tls_client_cert, $tls_client_key, $tls_hostname, $request_max_entries, $request_max_bytes, $index, $url, $pipeline, $user, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingElasticsearchApi->createLogElasticsearch: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.fastly.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*LoggingElasticsearchApi* | [**createLogElasticsearch**](docs/Api/LoggingElasticsearchApi.md#createlogelasticsearch) | **POST** /service/{service_id}/version/{version_id}/logging/elasticsearch | Create an Elasticsearch log endpoint
*LoggingElasticsearchApi* | [**deleteLogElasticsearch**](docs/Api/LoggingElasticsearchApi.md#deletelogelasticsearch) | **DELETE** /service/{service_id}/version/{version_id}/logging/elasticsearch/{logging_elasticsearch_name} | Delete an Elasticsearch log endpoint
*LoggingElasticsearchApi* | [**getLogElasticsearch**](docs/Api/LoggingElasticsearchApi.md#getlogelasticsearch) | **GET** /service/{service_id}/version/{version_id}/logging/elasticsearch/{logging_elasticsearch_name} | Get an Elasticsearch log endpoint
*LoggingElasticsearchApi* | [**listLogElasticsearch**](docs/Api/LoggingElasticsearchApi.md#listlogelasticsearch) | **GET** /service/{service_id}/version/{version_id}/logging/elasticsearch | List Elasticsearch log endpoints
*LoggingElasticsearchApi* | [**updateLogElasticsearch**](docs/Api/LoggingElasticsearchApi.md#updatelogelasticsearch) | **PUT** /service/{service_id}/version/{version_id}/logging/elasticsearch/{logging_elasticsearch_name} | Update an Elasticsearch log endpoint

## Models

- [InlineObject](docs/Model/InlineObject.md)
- [InlineObject1](docs/Model/InlineObject1.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [ModelLoggingElasticsearch](docs/Model/ModelLoggingElasticsearch.md)

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
