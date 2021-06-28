# Fastly\Api\LoggingScalyrApi


```php
$apiInstance = new Fastly\Api\LoggingScalyrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLogScalyr()**](LoggingScalyrApi.md#createLogScalyr) | **POST** /service/{service_id}/version/{version_id}/logging/scalyr | Create a Scalyr log endpoint
[**deleteLogScalyr()**](LoggingScalyrApi.md#deleteLogScalyr) | **DELETE** /service/{service_id}/version/{version_id}/logging/scalyr/{logging_scalyr_name} | Delete the Scalyr log endpoint
[**getLogScalyr()**](LoggingScalyrApi.md#getLogScalyr) | **GET** /service/{service_id}/version/{version_id}/logging/scalyr/{logging_scalyr_name} | Get a Scalyr log endpoint
[**listLogScalyr()**](LoggingScalyrApi.md#listLogScalyr) | **GET** /service/{service_id}/version/{version_id}/logging/scalyr | List Scalyr log endpoints
[**updateLogScalyr()**](LoggingScalyrApi.md#updateLogScalyr) | **PUT** /service/{service_id}/version/{version_id}/logging/scalyr/{logging_scalyr_name} | Update the Scalyr log endpoint


## `createLogScalyr()`

```php
createLogScalyr($options): \Fastly\Model\LoggingScalyrResponse // Create a Scalyr log endpoint
```

Create a Scalyr for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->createLogScalyr($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingScalyrApi->createLogScalyr: ', $e->getMessage(), PHP_EOL;
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
**region** | **string** | The region that log data will be sent to. | [optional] [default to REGION_US]
**token** | **string** | The token to use for authentication ([https://www.scalyr.com/keys](https://www.scalyr.com/keys)). | [optional]
**project_id** | **string** | The name of the logfile within Scalyr. | [optional] [default to &#39;logplex&#39;]

### Return type

[**\Fastly\Model\LoggingScalyrResponse**](../Model/LoggingScalyrResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogScalyr()`

```php
deleteLogScalyr($options): object // Delete the Scalyr log endpoint
```

Delete the Scalyr for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->deleteLogScalyr($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingScalyrApi->deleteLogScalyr: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_scalyr_name** | **string** |  |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogScalyr()`

```php
getLogScalyr($options): \Fastly\Model\LoggingScalyrResponse // Get a Scalyr log endpoint
```

Get the Scalyr for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->getLogScalyr($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingScalyrApi->getLogScalyr: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_scalyr_name** | **string** |  |

### Return type

[**\Fastly\Model\LoggingScalyrResponse**](../Model/LoggingScalyrResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLogScalyr()`

```php
listLogScalyr($options): \Fastly\Model\LoggingScalyrResponse[] // List Scalyr log endpoints
```

List all of the Scalyrs for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->listLogScalyr($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingScalyrApi->listLogScalyr: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |

### Return type

[**\Fastly\Model\LoggingScalyrResponse[]**](../Model/LoggingScalyrResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateLogScalyr()`

```php
updateLogScalyr($options): \Fastly\Model\LoggingScalyrResponse // Update the Scalyr log endpoint
```

Update the Scalyr for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->updateLogScalyr($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingScalyrApi->updateLogScalyr: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_scalyr_name** | **string** |  |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | [**\Fastly\Model\LoggingPlacement**](../Model/LoggingPlacement.md) |  | [optional]
**format_version** | [**\Fastly\Model\LoggingFormatVersion**](../Model/LoggingFormatVersion.md) |  | [optional]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [default to &#39;%h %l %u %t &quot;%r&quot; %&amp;gt;s %b&#39;]
**region** | **string** | The region that log data will be sent to. | [optional] [default to REGION_US]
**token** | **string** | The token to use for authentication ([https://www.scalyr.com/keys](https://www.scalyr.com/keys)). | [optional]
**project_id** | **string** | The name of the logfile within Scalyr. | [optional] [default to &#39;logplex&#39;]

### Return type

[**\Fastly\Model\LoggingScalyrResponse**](../Model/LoggingScalyrResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
