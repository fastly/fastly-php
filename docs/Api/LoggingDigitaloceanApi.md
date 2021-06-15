# OpenAPI\Client\LoggingDigitaloceanApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLogDigocean()**](LoggingDigitaloceanApi.md#createLogDigocean) | **POST** /service/{service_id}/version/{version_id}/logging/digitalocean | Create a DigitalOcean Spaces log endpoint
[**deleteLogDigocean()**](LoggingDigitaloceanApi.md#deleteLogDigocean) | **DELETE** /service/{service_id}/version/{version_id}/logging/digitalocean/{logging_digitalocean_name} | Delete a DigitalOcean Spaces log endpoint
[**getLogDigocean()**](LoggingDigitaloceanApi.md#getLogDigocean) | **GET** /service/{service_id}/version/{version_id}/logging/digitalocean/{logging_digitalocean_name} | Get a DigitalOcean Spaces log endpoint
[**listLogDigocean()**](LoggingDigitaloceanApi.md#listLogDigocean) | **GET** /service/{service_id}/version/{version_id}/logging/digitalocean | List DigitalOcean Spaces log endpoints
[**updateLogDigocean()**](LoggingDigitaloceanApi.md#updateLogDigocean) | **PUT** /service/{service_id}/version/{version_id}/logging/digitalocean/{logging_digitalocean_name} | Update a DigitalOcean Spaces log endpoint


## `createLogDigocean()`

```php
createLogDigocean($service_id, $version_id, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $message_type, $timestamp_format, $period, $gzip_level, $compression_codec, $bucket_name, $access_key, $secret_key, $domain, $path, $public_key): \OpenAPI\Client\Model\ModelLoggingDigitalocean
```

Create a DigitalOcean Spaces log endpoint

Create a DigitalOcean Space for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingDigitaloceanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$created_at = 'created_at_example'; // string | Date and time in ISO 8601 format.
$deleted_at = 'deleted_at_example'; // string | Date and time in ISO 8601 format.
$updated_at = 'updated_at_example'; // string | Date and time in ISO 8601 format.
$service_id2 = 'service_id_example'; // string | Alphanumeric string identifying the service.
$version = 56; // int | Integer identifying a service version.
$name = 'name_example'; // string | The name for the real-time logging configuration.
$placement = new \OpenAPI\Client\Model\LoggingPlacement(); // \OpenAPI\Client\Model\LoggingPlacement
$format_version = new \OpenAPI\Client\Model\LoggingFormatVersion(); // \OpenAPI\Client\Model\LoggingFormatVersion
$response_condition = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$format = '%h %l %u %t \"%r\" %&gt;s %b'; // string | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats).
$message_type = new \OpenAPI\Client\Model\LoggingMessageType(); // \OpenAPI\Client\Model\LoggingMessageType
$timestamp_format = 'timestamp_format_example'; // string | Date and time in ISO 8601 format.
$period = 3600; // int | How frequently log files are finalized so they can be available for reading (in seconds).
$gzip_level = 0; // int | What level of gzip encoding to have when sending logs (default `0`, no compression). If an explicit non-zero value is set, then `compression_codec` will default to \\\"gzip.\\\" Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error.
$compression_codec = new \OpenAPI\Client\Model\LoggingCompressionCodec(); // \OpenAPI\Client\Model\LoggingCompressionCodec
$bucket_name = 'bucket_name_example'; // string | The name of the DigitalOcean Space.
$access_key = 'access_key_example'; // string | Your DigitalOcean Spaces account access key.
$secret_key = 'secret_key_example'; // string | Your DigitalOcean Spaces account secret key.
$domain = 'nyc3.digitaloceanspaces.com'; // string | The domain of the DigitalOcean Spaces endpoint.
$path = 'null'; // string | The path to upload logs to.
$public_key = 'null'; // string | A PGP public key that Fastly will use to encrypt your log files before writing them to disk.

try {
    $result = $apiInstance->createLogDigocean($service_id, $version_id, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $message_type, $timestamp_format, $period, $gzip_level, $compression_codec, $bucket_name, $access_key, $secret_key, $domain, $path, $public_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingDigitaloceanApi->createLogDigocean: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **created_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **deleted_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **updated_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **service_id2** | **string**| Alphanumeric string identifying the service. | [optional]
 **version** | **int**| Integer identifying a service version. | [optional]
 **name** | **string**| The name for the real-time logging configuration. | [optional]
 **placement** | [**\OpenAPI\Client\Model\LoggingPlacement**](../Model/LoggingPlacement.md)|  | [optional]
 **format_version** | [**\OpenAPI\Client\Model\LoggingFormatVersion**](../Model/LoggingFormatVersion.md)|  | [optional]
 **response_condition** | **string**| The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
 **format** | **string**| A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [default to &#39;%h %l %u %t &quot;%r&quot; %&amp;gt;s %b&#39;]
 **message_type** | [**\OpenAPI\Client\Model\LoggingMessageType**](../Model/LoggingMessageType.md)|  | [optional]
 **timestamp_format** | **string**| Date and time in ISO 8601 format. | [optional]
 **period** | **int**| How frequently log files are finalized so they can be available for reading (in seconds). | [optional] [default to 3600]
 **gzip_level** | **int**| What level of gzip encoding to have when sending logs (default &#x60;0&#x60;, no compression). If an explicit non-zero value is set, then &#x60;compression_codec&#x60; will default to \\\&quot;gzip.\\\&quot; Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. | [optional] [default to 0]
 **compression_codec** | [**\OpenAPI\Client\Model\LoggingCompressionCodec**](../Model/LoggingCompressionCodec.md)|  | [optional]
 **bucket_name** | **string**| The name of the DigitalOcean Space. | [optional]
 **access_key** | **string**| Your DigitalOcean Spaces account access key. | [optional]
 **secret_key** | **string**| Your DigitalOcean Spaces account secret key. | [optional]
 **domain** | **string**| The domain of the DigitalOcean Spaces endpoint. | [optional] [default to &#39;nyc3.digitaloceanspaces.com&#39;]
 **path** | **string**| The path to upload logs to. | [optional] [default to &#39;null&#39;]
 **public_key** | **string**| A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [default to &#39;null&#39;]

### Return type

[**\OpenAPI\Client\Model\ModelLoggingDigitalocean**](../Model/ModelLoggingDigitalocean.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLogDigocean()`

```php
deleteLogDigocean($service_id, $version_id, $logging_digitalocean_name): object
```

Delete a DigitalOcean Spaces log endpoint

Delete the DigitalOcean Space for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingDigitaloceanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$logging_digitalocean_name = 'logging_digitalocean_name_example'; // string

try {
    $result = $apiInstance->deleteLogDigocean($service_id, $version_id, $logging_digitalocean_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingDigitaloceanApi->deleteLogDigocean: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **logging_digitalocean_name** | **string**|  |

### Return type

**object**

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLogDigocean()`

```php
getLogDigocean($service_id, $version_id, $logging_digitalocean_name): \OpenAPI\Client\Model\ModelLoggingDigitalocean
```

Get a DigitalOcean Spaces log endpoint

Get the DigitalOcean Space for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingDigitaloceanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$logging_digitalocean_name = 'logging_digitalocean_name_example'; // string

try {
    $result = $apiInstance->getLogDigocean($service_id, $version_id, $logging_digitalocean_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingDigitaloceanApi->getLogDigocean: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **logging_digitalocean_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelLoggingDigitalocean**](../Model/ModelLoggingDigitalocean.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLogDigocean()`

```php
listLogDigocean($service_id, $version_id): \OpenAPI\Client\Model\ModelLoggingDigitalocean[]
```

List DigitalOcean Spaces log endpoints

List all of the DigitalOcean Spaces for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingDigitaloceanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int

try {
    $result = $apiInstance->listLogDigocean($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingDigitaloceanApi->listLogDigocean: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ModelLoggingDigitalocean[]**](../Model/ModelLoggingDigitalocean.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLogDigocean()`

```php
updateLogDigocean($service_id, $version_id, $logging_digitalocean_name, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $message_type, $timestamp_format, $period, $gzip_level, $compression_codec, $bucket_name, $access_key, $secret_key, $domain, $path, $public_key): \OpenAPI\Client\Model\ModelLoggingDigitalocean
```

Update a DigitalOcean Spaces log endpoint

Update the DigitalOcean Space for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingDigitaloceanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$logging_digitalocean_name = 'logging_digitalocean_name_example'; // string
$created_at = 'created_at_example'; // string | Date and time in ISO 8601 format.
$deleted_at = 'deleted_at_example'; // string | Date and time in ISO 8601 format.
$updated_at = 'updated_at_example'; // string | Date and time in ISO 8601 format.
$service_id2 = 'service_id_example'; // string | Alphanumeric string identifying the service.
$version = 56; // int | Integer identifying a service version.
$name = 'name_example'; // string | The name for the real-time logging configuration.
$placement = new \OpenAPI\Client\Model\LoggingPlacement(); // \OpenAPI\Client\Model\LoggingPlacement
$format_version = new \OpenAPI\Client\Model\LoggingFormatVersion(); // \OpenAPI\Client\Model\LoggingFormatVersion
$response_condition = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$format = '%h %l %u %t \"%r\" %&gt;s %b'; // string | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats).
$message_type = new \OpenAPI\Client\Model\LoggingMessageType(); // \OpenAPI\Client\Model\LoggingMessageType
$timestamp_format = 'timestamp_format_example'; // string | Date and time in ISO 8601 format.
$period = 3600; // int | How frequently log files are finalized so they can be available for reading (in seconds).
$gzip_level = 0; // int | What level of gzip encoding to have when sending logs (default `0`, no compression). If an explicit non-zero value is set, then `compression_codec` will default to \\\"gzip.\\\" Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error.
$compression_codec = new \OpenAPI\Client\Model\LoggingCompressionCodec(); // \OpenAPI\Client\Model\LoggingCompressionCodec
$bucket_name = 'bucket_name_example'; // string | The name of the DigitalOcean Space.
$access_key = 'access_key_example'; // string | Your DigitalOcean Spaces account access key.
$secret_key = 'secret_key_example'; // string | Your DigitalOcean Spaces account secret key.
$domain = 'nyc3.digitaloceanspaces.com'; // string | The domain of the DigitalOcean Spaces endpoint.
$path = 'null'; // string | The path to upload logs to.
$public_key = 'null'; // string | A PGP public key that Fastly will use to encrypt your log files before writing them to disk.

try {
    $result = $apiInstance->updateLogDigocean($service_id, $version_id, $logging_digitalocean_name, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $message_type, $timestamp_format, $period, $gzip_level, $compression_codec, $bucket_name, $access_key, $secret_key, $domain, $path, $public_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingDigitaloceanApi->updateLogDigocean: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **logging_digitalocean_name** | **string**|  |
 **created_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **deleted_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **updated_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **service_id2** | **string**| Alphanumeric string identifying the service. | [optional]
 **version** | **int**| Integer identifying a service version. | [optional]
 **name** | **string**| The name for the real-time logging configuration. | [optional]
 **placement** | [**\OpenAPI\Client\Model\LoggingPlacement**](../Model/LoggingPlacement.md)|  | [optional]
 **format_version** | [**\OpenAPI\Client\Model\LoggingFormatVersion**](../Model/LoggingFormatVersion.md)|  | [optional]
 **response_condition** | **string**| The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
 **format** | **string**| A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [default to &#39;%h %l %u %t &quot;%r&quot; %&amp;gt;s %b&#39;]
 **message_type** | [**\OpenAPI\Client\Model\LoggingMessageType**](../Model/LoggingMessageType.md)|  | [optional]
 **timestamp_format** | **string**| Date and time in ISO 8601 format. | [optional]
 **period** | **int**| How frequently log files are finalized so they can be available for reading (in seconds). | [optional] [default to 3600]
 **gzip_level** | **int**| What level of gzip encoding to have when sending logs (default &#x60;0&#x60;, no compression). If an explicit non-zero value is set, then &#x60;compression_codec&#x60; will default to \\\&quot;gzip.\\\&quot; Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. | [optional] [default to 0]
 **compression_codec** | [**\OpenAPI\Client\Model\LoggingCompressionCodec**](../Model/LoggingCompressionCodec.md)|  | [optional]
 **bucket_name** | **string**| The name of the DigitalOcean Space. | [optional]
 **access_key** | **string**| Your DigitalOcean Spaces account access key. | [optional]
 **secret_key** | **string**| Your DigitalOcean Spaces account secret key. | [optional]
 **domain** | **string**| The domain of the DigitalOcean Spaces endpoint. | [optional] [default to &#39;nyc3.digitaloceanspaces.com&#39;]
 **path** | **string**| The path to upload logs to. | [optional] [default to &#39;null&#39;]
 **public_key** | **string**| A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [default to &#39;null&#39;]

### Return type

[**\OpenAPI\Client\Model\ModelLoggingDigitalocean**](../Model/ModelLoggingDigitalocean.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
