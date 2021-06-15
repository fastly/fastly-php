# Fastly\Api\LoggingHoneycombApi


```php
$apiInstance = new Fastly\Api\LoggingHoneycombApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLogHoneycomb()**](LoggingHoneycombApi.md#createLogHoneycomb) | **POST** /service/{service_id}/version/{version_id}/logging/honeycomb | Create a Honeycomb log endpoint
[**deleteLogHoneycomb()**](LoggingHoneycombApi.md#deleteLogHoneycomb) | **DELETE** /service/{service_id}/version/{version_id}/logging/honeycomb/{logging_honeycomb_name} | Delete the Honeycomb log endpoint
[**getLogHoneycomb()**](LoggingHoneycombApi.md#getLogHoneycomb) | **GET** /service/{service_id}/version/{version_id}/logging/honeycomb/{logging_honeycomb_name} | Get a Honeycomb log endpoint
[**listLogHoneycomb()**](LoggingHoneycombApi.md#listLogHoneycomb) | **GET** /service/{service_id}/version/{version_id}/logging/honeycomb | List Honeycomb log endpoints
[**updateLogHoneycomb()**](LoggingHoneycombApi.md#updateLogHoneycomb) | **PUT** /service/{service_id}/version/{version_id}/logging/honeycomb/{logging_honeycomb_name} | Update a Honeycomb log endpoint


## `createLogHoneycomb()`

```php
createLogHoneycomb($options): \Fastly\Model\LoggingHoneycomb // Create a Honeycomb log endpoint
```

Create a Honeycomb logging object for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->createLogHoneycomb($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingHoneycombApi->createLogHoneycomb: ', $e->getMessage(), PHP_EOL;
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
**format** | [**mixed**](../Model/mixed.md) | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). Must produce valid JSON that Honeycomb can ingest. | [optional]
**dataset** | **string** | The Honeycomb Dataset you want to log to. | [optional]
**token** | **string** | The Write Key from the Account page of your Honeycomb account. | [optional]

### Return type

[**\Fastly\Model\LoggingHoneycomb**](../Model/LoggingHoneycomb.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogHoneycomb()`

```php
deleteLogHoneycomb($options): object // Delete the Honeycomb log endpoint
```

Delete the Honeycomb logging object for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->deleteLogHoneycomb($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingHoneycombApi->deleteLogHoneycomb: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_honeycomb_name** | **string** |  |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogHoneycomb()`

```php
getLogHoneycomb($options): \Fastly\Model\LoggingHoneycomb // Get a Honeycomb log endpoint
```

Get the details of a Honeycomb logging object for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->getLogHoneycomb($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingHoneycombApi->getLogHoneycomb: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_honeycomb_name** | **string** |  |

### Return type

[**\Fastly\Model\LoggingHoneycomb**](../Model/LoggingHoneycomb.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLogHoneycomb()`

```php
listLogHoneycomb($options): \Fastly\Model\LoggingHoneycombResponse[] // List Honeycomb log endpoints
```

List all of the Honeycomb logging objects for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->listLogHoneycomb($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingHoneycombApi->listLogHoneycomb: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |

### Return type

[**\Fastly\Model\LoggingHoneycombResponse[]**](../Model/LoggingHoneycombResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateLogHoneycomb()`

```php
updateLogHoneycomb($options): \Fastly\Model\LoggingHoneycombResponse // Update a Honeycomb log endpoint
```

Update a Honeycomb logging object for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->updateLogHoneycomb($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingHoneycombApi->updateLogHoneycomb: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_honeycomb_name** | **string** |  |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | [**\Fastly\Model\LoggingPlacement**](../Model/LoggingPlacement.md) |  | [optional]
**format_version** | [**\Fastly\Model\LoggingFormatVersion**](../Model/LoggingFormatVersion.md) |  | [optional]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | [**mixed**](../Model/mixed.md) | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). Must produce valid JSON that Honeycomb can ingest. | [optional]
**dataset** | **string** | The Honeycomb Dataset you want to log to. | [optional]
**token** | **string** | The Write Key from the Account page of your Honeycomb account. | [optional]

### Return type

[**\Fastly\Model\LoggingHoneycombResponse**](../Model/LoggingHoneycombResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
