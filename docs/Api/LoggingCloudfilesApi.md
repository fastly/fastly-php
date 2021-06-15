# OpenAPI\Client\LoggingCloudfilesApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLogCloudfiles()**](LoggingCloudfilesApi.md#createLogCloudfiles) | **POST** /service/{service_id}/version/{version_id}/logging/cloudfiles | Create a Cloud Files log endpoint
[**deleteLogCloudfiles()**](LoggingCloudfilesApi.md#deleteLogCloudfiles) | **DELETE** /service/{service_id}/version/{version_id}/logging/cloudfiles/{logging_cloudfiles_name} | Delete the Cloud Files log endpoint
[**getLogCloudfiles()**](LoggingCloudfilesApi.md#getLogCloudfiles) | **GET** /service/{service_id}/version/{version_id}/logging/cloudfiles/{logging_cloudfiles_name} | Get a Cloud Files log endpoint
[**listLogCloudfiles()**](LoggingCloudfilesApi.md#listLogCloudfiles) | **GET** /service/{service_id}/version/{version_id}/logging/cloudfiles | List Cloud Files log endpoints
[**updateLogCloudfiles()**](LoggingCloudfilesApi.md#updateLogCloudfiles) | **PUT** /service/{service_id}/version/{version_id}/logging/cloudfiles/{logging_cloudfiles_name} | Update the Cloud Files log endpoint


## `createLogCloudfiles()`

```php
createLogCloudfiles($service_id, $version_id): \OpenAPI\Client\Model\ModelLoggingCloudfiles
```

Create a Cloud Files log endpoint

Create a Cloud Files log endpoint for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingCloudfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int

try {
    $result = $apiInstance->createLogCloudfiles($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingCloudfilesApi->createLogCloudfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ModelLoggingCloudfiles**](../Model/ModelLoggingCloudfiles.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLogCloudfiles()`

```php
deleteLogCloudfiles($service_id, $version_id, $logging_cloudfiles_name): object
```

Delete the Cloud Files log endpoint

Delete the Cloud Files log endpoint for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingCloudfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$logging_cloudfiles_name = 'logging_cloudfiles_name_example'; // string

try {
    $result = $apiInstance->deleteLogCloudfiles($service_id, $version_id, $logging_cloudfiles_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingCloudfilesApi->deleteLogCloudfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **logging_cloudfiles_name** | **string**|  |

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

## `getLogCloudfiles()`

```php
getLogCloudfiles($service_id, $version_id, $logging_cloudfiles_name): \OpenAPI\Client\Model\ModelLoggingCloudfiles
```

Get a Cloud Files log endpoint

Get the Cloud Files log endpoint for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingCloudfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$logging_cloudfiles_name = 'logging_cloudfiles_name_example'; // string

try {
    $result = $apiInstance->getLogCloudfiles($service_id, $version_id, $logging_cloudfiles_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingCloudfilesApi->getLogCloudfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **logging_cloudfiles_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelLoggingCloudfiles**](../Model/ModelLoggingCloudfiles.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLogCloudfiles()`

```php
listLogCloudfiles($service_id, $version_id): \OpenAPI\Client\Model\ModelLoggingCloudfiles[]
```

List Cloud Files log endpoints

List all of the Cloud Files log endpoints for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingCloudfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int

try {
    $result = $apiInstance->listLogCloudfiles($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingCloudfilesApi->listLogCloudfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ModelLoggingCloudfiles[]**](../Model/ModelLoggingCloudfiles.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLogCloudfiles()`

```php
updateLogCloudfiles($service_id, $version_id, $logging_cloudfiles_name, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $message_type, $timestamp_format, $period, $gzip_level, $compression_codec, $access_key, $bucket_name, $path, $region, $public_key, $user): \OpenAPI\Client\Model\ModelLoggingCloudfiles
```

Update the Cloud Files log endpoint

Update the Cloud Files log endpoint for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingCloudfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$logging_cloudfiles_name = 'logging_cloudfiles_name_example'; // string
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
$access_key = 'access_key_example'; // string | Your Cloud Files account access key.
$bucket_name = 'bucket_name_example'; // string | The name of your Cloud Files container.
$path = 'null'; // string | The path to upload logs to.
$region = 'region_example'; // string | The region to stream logs to.
$public_key = 'null'; // string | A PGP public key that Fastly will use to encrypt your log files before writing them to disk.
$user = 'user_example'; // string | The username for your Cloudfile account.

try {
    $result = $apiInstance->updateLogCloudfiles($service_id, $version_id, $logging_cloudfiles_name, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $message_type, $timestamp_format, $period, $gzip_level, $compression_codec, $access_key, $bucket_name, $path, $region, $public_key, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingCloudfilesApi->updateLogCloudfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **logging_cloudfiles_name** | **string**|  |
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
 **access_key** | **string**| Your Cloud Files account access key. | [optional]
 **bucket_name** | **string**| The name of your Cloud Files container. | [optional]
 **path** | **string**| The path to upload logs to. | [optional] [default to &#39;null&#39;]
 **region** | **string**| The region to stream logs to. | [optional]
 **public_key** | **string**| A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [default to &#39;null&#39;]
 **user** | **string**| The username for your Cloudfile account. | [optional]

### Return type

[**\OpenAPI\Client\Model\ModelLoggingCloudfiles**](../Model/ModelLoggingCloudfiles.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
