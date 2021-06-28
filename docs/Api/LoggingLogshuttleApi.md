# Fastly\Api\LoggingLogshuttleApi


```php
$apiInstance = new Fastly\Api\LoggingLogshuttleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**createLogLogshuttle()**](LoggingLogshuttleApi.md#createLogLogshuttle) | **POST** /service/{service_id}/version/{version_id}/logging/logshuttle | Create a Log Shuttle log endpoint
[**deleteLogLogshuttle()**](LoggingLogshuttleApi.md#deleteLogLogshuttle) | **DELETE** /service/{service_id}/version/{version_id}/logging/logshuttle/{logging_logshuttle_name} | Delete a Log Shuttle log endpoint
[**getLogLogshuttle()**](LoggingLogshuttleApi.md#getLogLogshuttle) | **GET** /service/{service_id}/version/{version_id}/logging/logshuttle/{logging_logshuttle_name} | Get a Log Shuttle log endpoint
[**listLogLogshuttle()**](LoggingLogshuttleApi.md#listLogLogshuttle) | **GET** /service/{service_id}/version/{version_id}/logging/logshuttle | List Log Shuttle log endpoints
[**updateLogLogshuttle()**](LoggingLogshuttleApi.md#updateLogLogshuttle) | **PUT** /service/{service_id}/version/{version_id}/logging/logshuttle/{logging_logshuttle_name} | Update a Log Shuttle log endpoint


## `createLogLogshuttle()`

```php
createLogLogshuttle($options): \Fastly\Model\LoggingLogshuttleResponse // Create a Log Shuttle log endpoint
```

Create a Log Shuttle logging endpoint for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->createLogLogshuttle($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingLogshuttleApi->createLogLogshuttle: ', $e->getMessage(), PHP_EOL;
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
**token** | **string** | The data authentication token associated with this endpoint. | [optional]
**url** | **string** | The URL to stream logs to. | [optional]

### Return type

[**\Fastly\Model\LoggingLogshuttleResponse**](../Model/LoggingLogshuttleResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogLogshuttle()`

```php
deleteLogLogshuttle($options): object // Delete a Log Shuttle log endpoint
```

Delete the Log Shuttle logging endpoint for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->deleteLogLogshuttle($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingLogshuttleApi->deleteLogLogshuttle: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_logshuttle_name** | **string** |  |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogLogshuttle()`

```php
getLogLogshuttle($options): \Fastly\Model\LoggingLogshuttleResponse // Get a Log Shuttle log endpoint
```

Get the Log Shuttle logging endpoint for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->getLogLogshuttle($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingLogshuttleApi->getLogLogshuttle: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_logshuttle_name** | **string** |  |

### Return type

[**\Fastly\Model\LoggingLogshuttleResponse**](../Model/LoggingLogshuttleResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLogLogshuttle()`

```php
listLogLogshuttle($options): \Fastly\Model\LoggingLogshuttleResponse[] // List Log Shuttle log endpoints
```

List all of the Log Shuttle logging endpoints for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->listLogLogshuttle($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingLogshuttleApi->listLogLogshuttle: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |

### Return type

[**\Fastly\Model\LoggingLogshuttleResponse[]**](../Model/LoggingLogshuttleResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateLogLogshuttle()`

```php
updateLogLogshuttle($options): \Fastly\Model\LoggingLogshuttleResponse // Update a Log Shuttle log endpoint
```

Update the Log Shuttle logging endpoint for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->updateLogLogshuttle($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingLogshuttleApi->updateLogLogshuttle: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_logshuttle_name** | **string** |  |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | [**\Fastly\Model\LoggingPlacement**](../Model/LoggingPlacement.md) |  | [optional]
**format_version** | [**\Fastly\Model\LoggingFormatVersion**](../Model/LoggingFormatVersion.md) |  | [optional]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [default to &#39;%h %l %u %t &quot;%r&quot; %&amp;gt;s %b&#39;]
**token** | **string** | The data authentication token associated with this endpoint. | [optional]
**url** | **string** | The URL to stream logs to. | [optional]

### Return type

[**\Fastly\Model\LoggingLogshuttleResponse**](../Model/LoggingLogshuttleResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
