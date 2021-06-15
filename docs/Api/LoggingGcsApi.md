# Fastly\Api\LoggingGcsApi


```php
$apiInstance = new Fastly\Api\LoggingGcsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLogGcs()**](LoggingGcsApi.md#createLogGcs) | **POST** /service/{service_id}/version/{version_id}/logging/gcs | Create a GCS log endpoint
[**deleteLogGcs()**](LoggingGcsApi.md#deleteLogGcs) | **DELETE** /service/{service_id}/version/{version_id}/logging/gcs/{logging_gcs_name} | Delete a GCS log endpoint
[**getLogGcs()**](LoggingGcsApi.md#getLogGcs) | **GET** /service/{service_id}/version/{version_id}/logging/gcs/{logging_gcs_name} | Get a GCS log endpoint
[**listLogGcs()**](LoggingGcsApi.md#listLogGcs) | **GET** /service/{service_id}/version/{version_id}/logging/gcs | List GCS log endpoints
[**updateLogGcs()**](LoggingGcsApi.md#updateLogGcs) | **PUT** /service/{service_id}/version/{version_id}/logging/gcs/{logging_gcs_name} | Update a GCS log endpoint


## `createLogGcs()`

```php
createLogGcs($options): \Fastly\Model\LoggingGcsResponse // Create a GCS log endpoint
```

Create GCS logging for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->createLogGcs($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingGcsApi->createLogGcs: ', $e->getMessage(), PHP_EOL;
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
**user** | **string** | Your Google Cloud Platform service account email address. The &#x60;client_email&#x60; field in your service account authentication JSON. Required. | [optional]
**secret_key** | **string** | Your Google Cloud Platform account secret key. The &#x60;private_key&#x60; field in your service account authentication JSON. Required. | [optional]
**bucket_name** | **string** | The name of the GCS bucket. | [optional]
**path** | [**string**](../Model/string.md) |  | [optional]
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [default to &#39;null&#39;]

### Return type

[**\Fastly\Model\LoggingGcsResponse**](../Model/LoggingGcsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogGcs()`

```php
deleteLogGcs($options): object // Delete a GCS log endpoint
```

Delete the GCS Logging for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->deleteLogGcs($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingGcsApi->deleteLogGcs: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_gcs_name** | **string** |  |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogGcs()`

```php
getLogGcs($options): \Fastly\Model\LoggingGcsResponse // Get a GCS log endpoint
```

Get the GCS Logging for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->getLogGcs($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingGcsApi->getLogGcs: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_gcs_name** | **string** |  |

### Return type

[**\Fastly\Model\LoggingGcsResponse**](../Model/LoggingGcsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLogGcs()`

```php
listLogGcs($options): \Fastly\Model\LoggingGcsResponse[] // List GCS log endpoints
```

List all of the GCS log endpoints for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->listLogGcs($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingGcsApi->listLogGcs: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |

### Return type

[**\Fastly\Model\LoggingGcsResponse[]**](../Model/LoggingGcsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateLogGcs()`

```php
updateLogGcs($options): \Fastly\Model\LoggingGcsResponse // Update a GCS log endpoint
```

Update the GCS for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->updateLogGcs($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingGcsApi->updateLogGcs: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_gcs_name** | **string** |  |
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
**user** | **string** | Your Google Cloud Platform service account email address. The &#x60;client_email&#x60; field in your service account authentication JSON. Required. | [optional]
**secret_key** | **string** | Your Google Cloud Platform account secret key. The &#x60;private_key&#x60; field in your service account authentication JSON. Required. | [optional]
**bucket_name** | **string** | The name of the GCS bucket. | [optional]
**path** | [**string**](../Model/string.md) |  | [optional]
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [default to &#39;null&#39;]

### Return type

[**\Fastly\Model\LoggingGcsResponse**](../Model/LoggingGcsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
