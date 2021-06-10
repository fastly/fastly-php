# OpenAPIClient-php

Fastly will upload log messages to the S3 bucket in the format specified in the S3 object.


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


$apiInstance = new OpenAPI\Client\Api\LoggingS3Api(
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
$format = '%h %l %u %t \"%r\" %&gt;s %b'; // string | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats).
$message_type = 'classic'; // string | How the message should be formatted.
$timestamp_format = 'timestamp_format_example'; // string | Date and time in ISO 8601 format.
$period = 3600; // int | How frequently log files are finalized so they can be available for reading (in seconds).
$gzip_level = 0; // int | What level of gzip encoding to have when sending logs (default `0`, no compression). If an explicit non-zero value is set, then `compression_codec` will default to \\\"gzip.\\\" Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error.
$compression_codec = 'compression_codec_example'; // string | The codec used for compression of your logs. Valid values are `zstd`, `snappy`, and `gzip`. If the specified codec is \\\"gzip\\\", `gzip_level` will default to 3. To specify a different level, leave `compression_codec` blank and explicitly set the level using `gzip_level`. Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error.
$access_key = 'access_key_example'; // string | The access key for your S3 account. Not required if `iam_role` is provided.
$acl = 'acl_example'; // string | The access control list (ACL) specific request header. See the AWS documentation for [Access Control List (ACL) Specific Request Headers](https://docs.aws.amazon.com/AmazonS3/latest/API/mpUploadInitiate.html#initiate-mpu-acl-specific-request-headers) for more information.
$bucket_name = 'bucket_name_example'; // string | The bucket name for S3 account.
$domain = 'domain_example'; // string | The domain of the Amazon S3 endpoint.
$iam_role = 'iam_role_example'; // string | The Amazon Resource Name (ARN) for the IAM role granting Fastly access to S3. Not required if `access_key` and `secret_key` are provided.
$path = 'null'; // string | The path to upload logs to.
$public_key = 'null'; // string | A PGP public key that Fastly will use to encrypt your log files before writing them to disk.
$redundancy = 'null'; // string | The S3 redundancy level.
$secret_key = 'secret_key_example'; // string | The secret key for your S3 account. Not required if `iam_role` is provided.
$server_side_encryption_kms_key_id = 'null'; // string | Optional server-side KMS Key Id. Must be set if `server_side_encryption` is set to `aws:kms` or `AES256`.
$server_side_encryption = 'null'; // string | Set this to `AES256` or `aws:kms` to enable S3 Server Side Encryption.

try {
    $result = $apiInstance->createLogAwsS3($service_id, $version_id, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $message_type, $timestamp_format, $period, $gzip_level, $compression_codec, $access_key, $acl, $bucket_name, $domain, $iam_role, $path, $public_key, $redundancy, $secret_key, $server_side_encryption_kms_key_id, $server_side_encryption);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingS3Api->createLogAwsS3: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.fastly.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*LoggingS3Api* | [**createLogAwsS3**](docs/Api/LoggingS3Api.md#createlogawss3) | **POST** /service/{service_id}/version/{version_id}/logging/s3 | Create an AWS S3 log endpoint
*LoggingS3Api* | [**deleteLogAwsS3**](docs/Api/LoggingS3Api.md#deletelogawss3) | **DELETE** /service/{service_id}/version/{version_id}/logging/s3/{logging_s3_name} | Delete an AWS S3 log endpoint
*LoggingS3Api* | [**getLogAwsS3**](docs/Api/LoggingS3Api.md#getlogawss3) | **GET** /service/{service_id}/version/{version_id}/logging/s3/{logging_s3_name} | Get an AWS S3 log endpoint
*LoggingS3Api* | [**listLogAwsS3**](docs/Api/LoggingS3Api.md#listlogawss3) | **GET** /service/{service_id}/version/{version_id}/logging/s3 | List AWS S3 log endpoints
*LoggingS3Api* | [**updateLogAwsS3**](docs/Api/LoggingS3Api.md#updatelogawss3) | **PUT** /service/{service_id}/version/{version_id}/logging/s3/{logging_s3_name} | Update an AWS S3 log endpoint

## Models

- [InlineObject](docs/Model/InlineObject.md)
- [InlineObject1](docs/Model/InlineObject1.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [ModelLoggingS3](docs/Model/ModelLoggingS3.md)

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
