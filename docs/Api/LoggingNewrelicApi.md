# Fastly\Api\LoggingNewrelicApi


```php
$apiInstance = new Fastly\Api\LoggingNewrelicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**createLogNewrelic()**](LoggingNewrelicApi.md#createLogNewrelic) | **POST** /service/{service_id}/version/{version_id}/logging/newrelic | Create a New Relic log endpoint
[**deleteLogNewrelic()**](LoggingNewrelicApi.md#deleteLogNewrelic) | **DELETE** /service/{service_id}/version/{version_id}/logging/newrelic/{logging_newrelic_name} | Delete a New Relic log endpoint
[**getLogNewrelic()**](LoggingNewrelicApi.md#getLogNewrelic) | **GET** /service/{service_id}/version/{version_id}/logging/newrelic/{logging_newrelic_name} | Get a New Relic log endpoint
[**listLogNewrelic()**](LoggingNewrelicApi.md#listLogNewrelic) | **GET** /service/{service_id}/version/{version_id}/logging/newrelic | List New Relic log endpoints
[**updateLogNewrelic()**](LoggingNewrelicApi.md#updateLogNewrelic) | **PUT** /service/{service_id}/version/{version_id}/logging/newrelic/{logging_newrelic_name} | Update a New Relic log endpoint


## `createLogNewrelic()`

```php
createLogNewrelic($options): \Fastly\Model\LoggingNewrelicResponse // Create a New Relic log endpoint
```

Create a New Relic Logs logging object for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->createLogNewrelic($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingNewrelicApi->createLogNewrelic: ', $e->getMessage(), PHP_EOL;
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
**format** | [**mixed**](../Model/mixed.md) | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). Must produce valid JSON that New Relic Logs can ingest. | [optional]
**token** | **string** | The Insert API key from the Account page of your New Relic account. Required. | [optional]

### Return type

[**\Fastly\Model\LoggingNewrelicResponse**](../Model/LoggingNewrelicResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogNewrelic()`

```php
deleteLogNewrelic($options): object // Delete a New Relic log endpoint
```

Delete the New Relic Logs logging object for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->deleteLogNewrelic($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingNewrelicApi->deleteLogNewrelic: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_newrelic_name** | **string** |  |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogNewrelic()`

```php
getLogNewrelic($options): \Fastly\Model\LoggingNewrelicResponse // Get a New Relic log endpoint
```

Get the details of a New Relic Logs logging object for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->getLogNewrelic($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingNewrelicApi->getLogNewrelic: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_newrelic_name** | **string** |  |

### Return type

[**\Fastly\Model\LoggingNewrelicResponse**](../Model/LoggingNewrelicResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLogNewrelic()`

```php
listLogNewrelic($options): \Fastly\Model\LoggingNewrelicResponse[] // List New Relic log endpoints
```

List all of the New Relic Logs logging objects for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->listLogNewrelic($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingNewrelicApi->listLogNewrelic: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |

### Return type

[**\Fastly\Model\LoggingNewrelicResponse[]**](../Model/LoggingNewrelicResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateLogNewrelic()`

```php
updateLogNewrelic($options): \Fastly\Model\LoggingNewrelicResponse // Update a New Relic log endpoint
```

Update a New Relic Logs logging object for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->updateLogNewrelic($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingNewrelicApi->updateLogNewrelic: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_newrelic_name** | **string** |  |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | [**\Fastly\Model\LoggingPlacement**](../Model/LoggingPlacement.md) |  | [optional]
**format_version** | [**\Fastly\Model\LoggingFormatVersion**](../Model/LoggingFormatVersion.md) |  | [optional]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | [**mixed**](../Model/mixed.md) | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). Must produce valid JSON that New Relic Logs can ingest. | [optional]
**token** | **string** | The Insert API key from the Account page of your New Relic account. Required. | [optional]

### Return type

[**\Fastly\Model\LoggingNewrelicResponse**](../Model/LoggingNewrelicResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
