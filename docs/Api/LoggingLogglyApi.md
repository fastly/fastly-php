# Fastly\Api\LoggingLogglyApi


```php
$apiInstance = new Fastly\Api\LoggingLogglyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLogLoggly()**](LoggingLogglyApi.md#createLogLoggly) | **POST** /service/{service_id}/version/{version_id}/logging/loggly | Create a Loggly log endpoint
[**deleteLogLoggly()**](LoggingLogglyApi.md#deleteLogLoggly) | **DELETE** /service/{service_id}/version/{version_id}/logging/loggly/{logging_loggly_name} | Delete a Loggly log endpoint
[**getLogLoggly()**](LoggingLogglyApi.md#getLogLoggly) | **GET** /service/{service_id}/version/{version_id}/logging/loggly/{logging_loggly_name} | Get a Loggly log endpoint
[**listLogLoggly()**](LoggingLogglyApi.md#listLogLoggly) | **GET** /service/{service_id}/version/{version_id}/logging/loggly | List Loggly log endpoints
[**updateLogLoggly()**](LoggingLogglyApi.md#updateLogLoggly) | **PUT** /service/{service_id}/version/{version_id}/logging/loggly/{logging_loggly_name} | Update a Loggly log endpoint


## `createLogLoggly()`

```php
createLogLoggly($options): \Fastly\Model\LoggingLogglyResponse // Create a Loggly log endpoint
```

Create a Loggly logging object for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->createLogLoggly($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingLogglyApi->createLogLoggly: ', $e->getMessage(), PHP_EOL;
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
**token** | **string** | The token to use for authentication ([https://www.loggly.com/docs/customer-token-authentication-token/](https://www.loggly.com/docs/customer-token-authentication-token/)). | [optional]

### Return type

[**\Fastly\Model\LoggingLogglyResponse**](../Model/LoggingLogglyResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogLoggly()`

```php
deleteLogLoggly($options): object // Delete a Loggly log endpoint
```

Delete the Loggly logging object for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->deleteLogLoggly($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingLogglyApi->deleteLogLoggly: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_loggly_name** | **string** |  |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogLoggly()`

```php
getLogLoggly($options): \Fastly\Model\LoggingLogglyResponse // Get a Loggly log endpoint
```

Get the Loggly logging object for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->getLogLoggly($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingLogglyApi->getLogLoggly: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_loggly_name** | **string** |  |

### Return type

[**\Fastly\Model\LoggingLogglyResponse**](../Model/LoggingLogglyResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLogLoggly()`

```php
listLogLoggly($options): \Fastly\Model\LoggingLogglyResponse[] // List Loggly log endpoints
```

List all Loggly logging objects for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->listLogLoggly($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingLogglyApi->listLogLoggly: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |

### Return type

[**\Fastly\Model\LoggingLogglyResponse[]**](../Model/LoggingLogglyResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateLogLoggly()`

```php
updateLogLoggly($options): \Fastly\Model\LoggingLogglyResponse // Update a Loggly log endpoint
```

Update the Loggly logging object for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->updateLogLoggly($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingLogglyApi->updateLogLoggly: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_loggly_name** | **string** |  |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | [**\Fastly\Model\LoggingPlacement**](../Model/LoggingPlacement.md) |  | [optional]
**format_version** | [**\Fastly\Model\LoggingFormatVersion**](../Model/LoggingFormatVersion.md) |  | [optional]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [default to &#39;%h %l %u %t &quot;%r&quot; %&amp;gt;s %b&#39;]
**token** | **string** | The token to use for authentication ([https://www.loggly.com/docs/customer-token-authentication-token/](https://www.loggly.com/docs/customer-token-authentication-token/)). | [optional]

### Return type

[**\Fastly\Model\LoggingLogglyResponse**](../Model/LoggingLogglyResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
