# OpenAPI\Client\LoggingGcsApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLogGcs()**](LoggingGcsApi.md#createLogGcs) | **POST** /service/{service_id}/version/{version_id}/logging/gcs | Create a GCS log endpoint
[**deleteLogGcs()**](LoggingGcsApi.md#deleteLogGcs) | **DELETE** /service/{service_id}/version/{version_id}/logging/gcs/{logging_gcs_name} | Delete a GCS log endpoint
[**getLogGcs()**](LoggingGcsApi.md#getLogGcs) | **GET** /service/{service_id}/version/{version_id}/logging/gcs/{logging_gcs_name} | Get a GCS log endpoint
[**listLogGcs()**](LoggingGcsApi.md#listLogGcs) | **GET** /service/{service_id}/version/{version_id}/logging/gcs | List GCS log endpoints
[**updateLogGcs()**](LoggingGcsApi.md#updateLogGcs) | **PUT** /service/{service_id}/version/{version_id}/logging/gcs/{logging_gcs_name} | Update a GCS log endpoint


## `createLogGcs()`

```php
createLogGcs($service_id, $version_id, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $message_type, $timestamp_format, $period, $gzip_level, $compression_codec, $user, $secret_key, $bucket_name, $path, $public_key): \OpenAPI\Client\Model\ModelLoggingGcs
```

Create a GCS log endpoint

Create GCS logging for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingGcsApi(
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
$user = 'user_example'; // string | Your Google Cloud Platform service account email address. The `client_email` field in your service account authentication JSON. Required.
$secret_key = 'secret_key_example'; // string | Your Google Cloud Platform account secret key. The `private_key` field in your service account authentication JSON. Required.
$bucket_name = 'bucket_name_example'; // string | The name of the GCS bucket.
$path = 'path_example'; // string
$public_key = 'null'; // string | A PGP public key that Fastly will use to encrypt your log files before writing them to disk.

try {
    $result = $apiInstance->createLogGcs($service_id, $version_id, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $message_type, $timestamp_format, $period, $gzip_level, $compression_codec, $user, $secret_key, $bucket_name, $path, $public_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingGcsApi->createLogGcs: ', $e->getMessage(), PHP_EOL;
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
 **user** | **string**| Your Google Cloud Platform service account email address. The &#x60;client_email&#x60; field in your service account authentication JSON. Required. | [optional]
 **secret_key** | **string**| Your Google Cloud Platform account secret key. The &#x60;private_key&#x60; field in your service account authentication JSON. Required. | [optional]
 **bucket_name** | **string**| The name of the GCS bucket. | [optional]
 **path** | [**string**](../Model/string.md)|  | [optional]
 **public_key** | **string**| A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [default to &#39;null&#39;]

### Return type

[**\OpenAPI\Client\Model\ModelLoggingGcs**](../Model/ModelLoggingGcs.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLogGcs()`

```php
deleteLogGcs($service_id, $version_id, $logging_gcs_name): object
```

Delete a GCS log endpoint

Delete the GCS Logging for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingGcsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$logging_gcs_name = 'logging_gcs_name_example'; // string

try {
    $result = $apiInstance->deleteLogGcs($service_id, $version_id, $logging_gcs_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingGcsApi->deleteLogGcs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **logging_gcs_name** | **string**|  |

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

## `getLogGcs()`

```php
getLogGcs($service_id, $version_id, $logging_gcs_name): \OpenAPI\Client\Model\ModelLoggingGcs
```

Get a GCS log endpoint

Get the GCS Logging for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingGcsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$logging_gcs_name = 'logging_gcs_name_example'; // string

try {
    $result = $apiInstance->getLogGcs($service_id, $version_id, $logging_gcs_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingGcsApi->getLogGcs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **logging_gcs_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelLoggingGcs**](../Model/ModelLoggingGcs.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLogGcs()`

```php
listLogGcs($service_id, $version_id): \OpenAPI\Client\Model\ModelLoggingGcs[]
```

List GCS log endpoints

List all of the GCS log endpoints for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingGcsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int

try {
    $result = $apiInstance->listLogGcs($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingGcsApi->listLogGcs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ModelLoggingGcs[]**](../Model/ModelLoggingGcs.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLogGcs()`

```php
updateLogGcs($service_id, $version_id, $logging_gcs_name, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $message_type, $timestamp_format, $period, $gzip_level, $compression_codec, $user, $secret_key, $bucket_name, $path, $public_key): \OpenAPI\Client\Model\ModelLoggingGcs
```

Update a GCS log endpoint

Update the GCS for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingGcsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$logging_gcs_name = 'logging_gcs_name_example'; // string
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
$user = 'user_example'; // string | Your Google Cloud Platform service account email address. The `client_email` field in your service account authentication JSON. Required.
$secret_key = 'secret_key_example'; // string | Your Google Cloud Platform account secret key. The `private_key` field in your service account authentication JSON. Required.
$bucket_name = 'bucket_name_example'; // string | The name of the GCS bucket.
$path = 'path_example'; // string
$public_key = 'null'; // string | A PGP public key that Fastly will use to encrypt your log files before writing them to disk.

try {
    $result = $apiInstance->updateLogGcs($service_id, $version_id, $logging_gcs_name, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $message_type, $timestamp_format, $period, $gzip_level, $compression_codec, $user, $secret_key, $bucket_name, $path, $public_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingGcsApi->updateLogGcs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **logging_gcs_name** | **string**|  |
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
 **user** | **string**| Your Google Cloud Platform service account email address. The &#x60;client_email&#x60; field in your service account authentication JSON. Required. | [optional]
 **secret_key** | **string**| Your Google Cloud Platform account secret key. The &#x60;private_key&#x60; field in your service account authentication JSON. Required. | [optional]
 **bucket_name** | **string**| The name of the GCS bucket. | [optional]
 **path** | [**string**](../Model/string.md)|  | [optional]
 **public_key** | **string**| A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [default to &#39;null&#39;]

### Return type

[**\OpenAPI\Client\Model\ModelLoggingGcs**](../Model/ModelLoggingGcs.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
