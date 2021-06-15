# Fastly\Api\LoggingCloudfilesApi


```php
$apiInstance = new Fastly\Api\LoggingCloudfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLogCloudfiles()**](LoggingCloudfilesApi.md#createLogCloudfiles) | **POST** /service/{service_id}/version/{version_id}/logging/cloudfiles | Create a Cloud Files log endpoint
[**deleteLogCloudfiles()**](LoggingCloudfilesApi.md#deleteLogCloudfiles) | **DELETE** /service/{service_id}/version/{version_id}/logging/cloudfiles/{logging_cloudfiles_name} | Delete the Cloud Files log endpoint
[**getLogCloudfiles()**](LoggingCloudfilesApi.md#getLogCloudfiles) | **GET** /service/{service_id}/version/{version_id}/logging/cloudfiles/{logging_cloudfiles_name} | Get a Cloud Files log endpoint
[**listLogCloudfiles()**](LoggingCloudfilesApi.md#listLogCloudfiles) | **GET** /service/{service_id}/version/{version_id}/logging/cloudfiles | List Cloud Files log endpoints
[**updateLogCloudfiles()**](LoggingCloudfilesApi.md#updateLogCloudfiles) | **PUT** /service/{service_id}/version/{version_id}/logging/cloudfiles/{logging_cloudfiles_name} | Update the Cloud Files log endpoint


## `createLogCloudfiles()`

```php
createLogCloudfiles($options): \Fastly\Model\LoggingCloudfilesResponse // Create a Cloud Files log endpoint
```

Create a Cloud Files log endpoint for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->createLogCloudfiles($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingCloudfilesApi->createLogCloudfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | [**\Fastly\Model\LoggingPlacement**](../Model/LoggingPlacement.md) |  | [optional]
**format_version** | [**\Fastly\Model\LoggingFormatVersion**](../Model/LoggingFormatVersion.md) |  | [optional]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [default to &#39;%h %l %u %t &quot;%r&quot; %&amp;gt;s %b&#39;]
**message_type** | [**\Fastly\Model\LoggingMessageType**](../Model/LoggingMessageType.md) |  | [optional]
**timestamp_format** | **string** | Date and time in ISO 8601 format. | [optional]
**period** | **int** | How frequently log files are finalized so they can be available for reading (in seconds). | [optional] [default to 3600]
**gzip_level** | **int** | What level of gzip encoding to have when sending logs (default &#x60;0&#x60;, no compression). If an explicit non-zero value is set, then &#x60;compression_codec&#x60; will default to \\\&quot;gzip.\\\&quot; Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. | [optional] [default to 0]
**compression_codec** | [**\Fastly\Model\LoggingCompressionCodec**](../Model/LoggingCompressionCodec.md) |  | [optional]
**access_key** | **string** | Your Cloud Files account access key. | [optional]
**bucket_name** | **string** | The name of your Cloud Files container. | [optional]
**path** | **string** | The path to upload logs to. | [optional] [default to &#39;null&#39;]
**region** | **string** | The region to stream logs to. | [optional]
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [default to &#39;null&#39;]
**user** | **string** | The username for your Cloud Files account. | [optional]

### Return type

[**\Fastly\Model\LoggingCloudfilesResponse**](../Model/LoggingCloudfilesResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogCloudfiles()`

```php
deleteLogCloudfiles($options): object // Delete the Cloud Files log endpoint
```

Delete the Cloud Files log endpoint for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->deleteLogCloudfiles($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingCloudfilesApi->deleteLogCloudfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_cloudfiles_name** | **string** |  |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogCloudfiles()`

```php
getLogCloudfiles($options): \Fastly\Model\LoggingCloudfilesResponse // Get a Cloud Files log endpoint
```

Get the Cloud Files log endpoint for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->getLogCloudfiles($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingCloudfilesApi->getLogCloudfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_cloudfiles_name** | **string** |  |

### Return type

[**\Fastly\Model\LoggingCloudfilesResponse**](../Model/LoggingCloudfilesResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLogCloudfiles()`

```php
listLogCloudfiles($options): \Fastly\Model\LoggingCloudfilesResponse[] // List Cloud Files log endpoints
```

List all of the Cloud Files log endpoints for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->listLogCloudfiles($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingCloudfilesApi->listLogCloudfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |

### Return type

[**\Fastly\Model\LoggingCloudfilesResponse[]**](../Model/LoggingCloudfilesResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateLogCloudfiles()`

```php
updateLogCloudfiles($options): \Fastly\Model\LoggingCloudfilesResponse // Update the Cloud Files log endpoint
```

Update the Cloud Files log endpoint for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->updateLogCloudfiles($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingCloudfilesApi->updateLogCloudfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_cloudfiles_name** | **string** |  |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | [**\Fastly\Model\LoggingPlacement**](../Model/LoggingPlacement.md) |  | [optional]
**format_version** | [**\Fastly\Model\LoggingFormatVersion**](../Model/LoggingFormatVersion.md) |  | [optional]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [default to &#39;%h %l %u %t &quot;%r&quot; %&amp;gt;s %b&#39;]
**message_type** | [**\Fastly\Model\LoggingMessageType**](../Model/LoggingMessageType.md) |  | [optional]
**timestamp_format** | **string** | Date and time in ISO 8601 format. | [optional]
**period** | **int** | How frequently log files are finalized so they can be available for reading (in seconds). | [optional] [default to 3600]
**gzip_level** | **int** | What level of gzip encoding to have when sending logs (default &#x60;0&#x60;, no compression). If an explicit non-zero value is set, then &#x60;compression_codec&#x60; will default to \\\&quot;gzip.\\\&quot; Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. | [optional] [default to 0]
**compression_codec** | [**\Fastly\Model\LoggingCompressionCodec**](../Model/LoggingCompressionCodec.md) |  | [optional]
**access_key** | **string** | Your Cloud Files account access key. | [optional]
**bucket_name** | **string** | The name of your Cloud Files container. | [optional]
**path** | **string** | The path to upload logs to. | [optional] [default to &#39;null&#39;]
**region** | **string** | The region to stream logs to. | [optional]
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [default to &#39;null&#39;]
**user** | **string** | The username for your Cloud Files account. | [optional]

### Return type

[**\Fastly\Model\LoggingCloudfilesResponse**](../Model/LoggingCloudfilesResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
