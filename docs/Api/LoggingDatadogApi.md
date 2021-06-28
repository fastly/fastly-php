# Fastly\Api\LoggingDatadogApi


```php
$apiInstance = new Fastly\Api\LoggingDatadogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLogDatadog()**](LoggingDatadogApi.md#createLogDatadog) | **POST** /service/{service_id}/version/{version_id}/logging/datadog | Create a Datadog log endpoint
[**deleteLogDatadog()**](LoggingDatadogApi.md#deleteLogDatadog) | **DELETE** /service/{service_id}/version/{version_id}/logging/datadog/{logging_datadog_name} | Delete a Datadog log endpoint
[**getLogDatadog()**](LoggingDatadogApi.md#getLogDatadog) | **GET** /service/{service_id}/version/{version_id}/logging/datadog/{logging_datadog_name} | Get a Datadog log endpoint
[**listLogDatadog()**](LoggingDatadogApi.md#listLogDatadog) | **GET** /service/{service_id}/version/{version_id}/logging/datadog | List Datadog log endpoints
[**updateLogDatadog()**](LoggingDatadogApi.md#updateLogDatadog) | **PUT** /service/{service_id}/version/{version_id}/logging/datadog/{logging_datadog_name} | Update a Datadog log endpoint


## `createLogDatadog()`

```php
createLogDatadog($options): \Fastly\Model\LoggingDatadogResponse // Create a Datadog log endpoint
```

Create a Datadog logging object for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->createLogDatadog($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingDatadogApi->createLogDatadog: ', $e->getMessage(), PHP_EOL;
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
**format** | [**mixed**](../Model/mixed.md) | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). Must produce valid JSON that Datadog can ingest. | [optional]
**region** | **string** | The region that log data will be sent to. | [optional] [default to &#39;US&#39;]
**token** | **string** | The API key from your Datadog account. Required. | [optional]

### Return type

[**\Fastly\Model\LoggingDatadogResponse**](../Model/LoggingDatadogResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogDatadog()`

```php
deleteLogDatadog($options): object // Delete a Datadog log endpoint
```

Delete the Datadog logging object for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->deleteLogDatadog($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingDatadogApi->deleteLogDatadog: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_datadog_name** | **string** |  |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogDatadog()`

```php
getLogDatadog($options): \Fastly\Model\LoggingDatadogResponse // Get a Datadog log endpoint
```

Get the details for a Datadog logging object for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->getLogDatadog($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingDatadogApi->getLogDatadog: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_datadog_name** | **string** |  |

### Return type

[**\Fastly\Model\LoggingDatadogResponse**](../Model/LoggingDatadogResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLogDatadog()`

```php
listLogDatadog($options): \Fastly\Model\LoggingDatadogResponse[] // List Datadog log endpoints
```

List all of the Datadog logging objects for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->listLogDatadog($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingDatadogApi->listLogDatadog: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |

### Return type

[**\Fastly\Model\LoggingDatadogResponse[]**](../Model/LoggingDatadogResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateLogDatadog()`

```php
updateLogDatadog($options): \Fastly\Model\LoggingDatadogResponse // Update a Datadog log endpoint
```

Update the Datadog logging object for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->updateLogDatadog($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingDatadogApi->updateLogDatadog: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_datadog_name** | **string** |  |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | [**\Fastly\Model\LoggingPlacement**](../Model/LoggingPlacement.md) |  | [optional]
**format_version** | [**\Fastly\Model\LoggingFormatVersion**](../Model/LoggingFormatVersion.md) |  | [optional]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | [**mixed**](../Model/mixed.md) | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). Must produce valid JSON that Datadog can ingest. | [optional]
**region** | **string** | The region that log data will be sent to. | [optional] [default to REGION_US]
**token** | **string** | The API key from your Datadog account. Required. | [optional]

### Return type

[**\Fastly\Model\LoggingDatadogResponse**](../Model/LoggingDatadogResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
