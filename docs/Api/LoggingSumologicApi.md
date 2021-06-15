# Fastly\Api\LoggingSumologicApi


```php
$apiInstance = new Fastly\Api\LoggingSumologicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLogSumologic()**](LoggingSumologicApi.md#createLogSumologic) | **POST** /service/{service_id}/version/{version_id}/logging/sumologic | Create a Sumologic log endpoint
[**deleteLogSumologic()**](LoggingSumologicApi.md#deleteLogSumologic) | **DELETE** /service/{service_id}/version/{version_id}/logging/sumologic/{logging_sumologic_name} | Delete a Sumologic log endpoint
[**getLogSumologic()**](LoggingSumologicApi.md#getLogSumologic) | **GET** /service/{service_id}/version/{version_id}/logging/sumologic/{logging_sumologic_name} | Get a Sumologic log endpoint
[**listLogSumologic()**](LoggingSumologicApi.md#listLogSumologic) | **GET** /service/{service_id}/version/{version_id}/logging/sumologic | List Sumologic log endpoints
[**updateLogSumologic()**](LoggingSumologicApi.md#updateLogSumologic) | **PUT** /service/{service_id}/version/{version_id}/logging/sumologic/{logging_sumologic_name} | Update a Sumologic log endpoint


## `createLogSumologic()`

```php
createLogSumologic($options): \Fastly\Model\LoggingSumologicResponse // Create a Sumologic log endpoint
```

Create a Sumologic for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->createLogSumologic($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingSumologicApi->createLogSumologic: ', $e->getMessage(), PHP_EOL;
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
**url** | **string** | The URL to post logs to. | [optional]

### Return type

[**\Fastly\Model\LoggingSumologicResponse**](../Model/LoggingSumologicResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogSumologic()`

```php
deleteLogSumologic($options): object // Delete a Sumologic log endpoint
```

Delete the Sumologic for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->deleteLogSumologic($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingSumologicApi->deleteLogSumologic: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_sumologic_name** | **string** |  |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogSumologic()`

```php
getLogSumologic($options): \Fastly\Model\LoggingSumologicResponse // Get a Sumologic log endpoint
```

Get the Sumologic for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->getLogSumologic($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingSumologicApi->getLogSumologic: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_sumologic_name** | **string** |  |

### Return type

[**\Fastly\Model\LoggingSumologicResponse**](../Model/LoggingSumologicResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLogSumologic()`

```php
listLogSumologic($options): \Fastly\Model\LoggingSumologicResponse[] // List Sumologic log endpoints
```

List all of the Sumologics for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->listLogSumologic($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingSumologicApi->listLogSumologic: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |

### Return type

[**\Fastly\Model\LoggingSumologicResponse[]**](../Model/LoggingSumologicResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateLogSumologic()`

```php
updateLogSumologic($options): \Fastly\Model\LoggingSumologicResponse // Update a Sumologic log endpoint
```

Update the Sumologic for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->updateLogSumologic($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingSumologicApi->updateLogSumologic: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_sumologic_name** | **string** |  |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | [**\Fastly\Model\LoggingPlacement**](../Model/LoggingPlacement.md) |  | [optional]
**format_version** | [**\Fastly\Model\LoggingFormatVersion**](../Model/LoggingFormatVersion.md) |  | [optional]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [default to &#39;%h %l %u %t &quot;%r&quot; %&amp;gt;s %b&#39;]
**message_type** | [**\Fastly\Model\LoggingMessageType**](../Model/LoggingMessageType.md) |  | [optional]
**url** | **string** | The URL to post logs to. | [optional]

### Return type

[**\Fastly\Model\LoggingSumologicResponse**](../Model/LoggingSumologicResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
