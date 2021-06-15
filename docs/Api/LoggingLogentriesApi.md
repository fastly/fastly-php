# Fastly\Api\LoggingLogentriesApi


```php
$apiInstance = new Fastly\Api\LoggingLogentriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLogLogentries()**](LoggingLogentriesApi.md#createLogLogentries) | **POST** /service/{service_id}/version/{version_id}/logging/logentries | Create a Logentries log endpoint
[**deleteLogLogentries()**](LoggingLogentriesApi.md#deleteLogLogentries) | **DELETE** /service/{service_id}/version/{version_id}/logging/logentries/{logging_logentries_name} | Delete a Logentries log endpoint
[**getLogLogentries()**](LoggingLogentriesApi.md#getLogLogentries) | **GET** /service/{service_id}/version/{version_id}/logging/logentries/{logging_logentries_name} | Get a Logentries log endpoint
[**listLogLogentries()**](LoggingLogentriesApi.md#listLogLogentries) | **GET** /service/{service_id}/version/{version_id}/logging/logentries | List Logentries log endpoints
[**updateLogLogentries()**](LoggingLogentriesApi.md#updateLogLogentries) | **PUT** /service/{service_id}/version/{version_id}/logging/logentries/{logging_logentries_name} | Update a Logentries log endpoint


## `createLogLogentries()`

```php
createLogLogentries($options): \Fastly\Model\LoggingLogentriesResponse // Create a Logentries log endpoint
```

Create a Logentry for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->createLogLogentries($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingLogentriesApi->createLogLogentries: ', $e->getMessage(), PHP_EOL;
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
**port** | **int** | The port number. | [optional] [default to 20000]
**token** | **string** | Use token based authentication ([https://logentries.com/doc/input-token/](https://logentries.com/doc/input-token/)). | [optional]
**use_tls** | [**\Fastly\Model\LoggingUseTls**](../Model/LoggingUseTls.md) |  | [optional]
**region** | **string** |  | [optional]

### Return type

[**\Fastly\Model\LoggingLogentriesResponse**](../Model/LoggingLogentriesResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogLogentries()`

```php
deleteLogLogentries($options): object // Delete a Logentries log endpoint
```

Delete the Logentry for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->deleteLogLogentries($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingLogentriesApi->deleteLogLogentries: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_logentries_name** | **string** |  |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogLogentries()`

```php
getLogLogentries($options): \Fastly\Model\LoggingLogentriesResponse // Get a Logentries log endpoint
```

Get the Logentry for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->getLogLogentries($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingLogentriesApi->getLogLogentries: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_logentries_name** | **string** |  |

### Return type

[**\Fastly\Model\LoggingLogentriesResponse**](../Model/LoggingLogentriesResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLogLogentries()`

```php
listLogLogentries($options): \Fastly\Model\LoggingLogentriesResponse[] // List Logentries log endpoints
```

List all of the Logentries for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->listLogLogentries($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingLogentriesApi->listLogLogentries: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |

### Return type

[**\Fastly\Model\LoggingLogentriesResponse[]**](../Model/LoggingLogentriesResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateLogLogentries()`

```php
updateLogLogentries($options): \Fastly\Model\LoggingLogentriesResponse // Update a Logentries log endpoint
```

Update the Logentry for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->updateLogLogentries($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingLogentriesApi->updateLogLogentries: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_logentries_name** | **string** |  |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | [**\Fastly\Model\LoggingPlacement**](../Model/LoggingPlacement.md) |  | [optional]
**format_version** | [**\Fastly\Model\LoggingFormatVersion**](../Model/LoggingFormatVersion.md) |  | [optional]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [default to &#39;%h %l %u %t &quot;%r&quot; %&amp;gt;s %b&#39;]
**port** | **int** | The port number. | [optional] [default to 20000]
**token** | **string** | Use token based authentication ([https://logentries.com/doc/input-token/](https://logentries.com/doc/input-token/)). | [optional]
**use_tls** | [**\Fastly\Model\LoggingUseTls**](../Model/LoggingUseTls.md) |  | [optional]
**region** | **string** |  | [optional]

### Return type

[**\Fastly\Model\LoggingLogentriesResponse**](../Model/LoggingLogentriesResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
