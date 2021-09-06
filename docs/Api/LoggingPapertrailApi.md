# Fastly\Api\LoggingPapertrailApi


```php
$apiInstance = new Fastly\Api\LoggingPapertrailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**createLogPapertrail()**](LoggingPapertrailApi.md#createLogPapertrail) | **POST** /service/{service_id}/version/{version_id}/logging/papertrail | Create a Papertrail log endpoint
[**deleteLogPapertrail()**](LoggingPapertrailApi.md#deleteLogPapertrail) | **DELETE** /service/{service_id}/version/{version_id}/logging/papertrail/{logging_papertrail_name} | Delete a Papertrail log endpoint
[**getLogPapertrail()**](LoggingPapertrailApi.md#getLogPapertrail) | **GET** /service/{service_id}/version/{version_id}/logging/papertrail/{logging_papertrail_name} | Get a Papertrail log endpoint
[**listLogPapertrail()**](LoggingPapertrailApi.md#listLogPapertrail) | **GET** /service/{service_id}/version/{version_id}/logging/papertrail | List Papertrail log endpoints
[**updateLogPapertrail()**](LoggingPapertrailApi.md#updateLogPapertrail) | **PUT** /service/{service_id}/version/{version_id}/logging/papertrail/{logging_papertrail_name} | Update a Papertrail log endpoint


## `createLogPapertrail()`

```php
createLogPapertrail($options): \Fastly\Model\LoggingPapertrailResponse // Create a Papertrail log endpoint
```

Create a Papertrail for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->createLogPapertrail($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingPapertrailApi->createLogPapertrail: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [default to &#39;%h %l %u %t &quot;%r&quot; %&amp;gt;s %b&#39;]
**format_version** | [**\Fastly\Model\LoggingFormatVersion**](../Model/LoggingFormatVersion.md) |  | [optional]
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | [**\Fastly\Model\LoggingPlacement**](../Model/LoggingPlacement.md) |  | [optional]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**address** | **string** | A hostname or IPv4 address. | [optional]
**port** | **int** | The port number. | [optional] [default to 514]

### Return type

[**\Fastly\Model\LoggingPapertrailResponse**](../Model/LoggingPapertrailResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogPapertrail()`

```php
deleteLogPapertrail($options): object // Delete a Papertrail log endpoint
```

Delete the Papertrail for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->deleteLogPapertrail($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingPapertrailApi->deleteLogPapertrail: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_papertrail_name** | **string** |  |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogPapertrail()`

```php
getLogPapertrail($options): \Fastly\Model\LoggingPapertrailResponse // Get a Papertrail log endpoint
```

Get the Papertrail for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->getLogPapertrail($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingPapertrailApi->getLogPapertrail: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_papertrail_name** | **string** |  |

### Return type

[**\Fastly\Model\LoggingPapertrailResponse**](../Model/LoggingPapertrailResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLogPapertrail()`

```php
listLogPapertrail($options): \Fastly\Model\LoggingPapertrailResponse[] // List Papertrail log endpoints
```

List all of the Papertrails for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->listLogPapertrail($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingPapertrailApi->listLogPapertrail: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |

### Return type

[**\Fastly\Model\LoggingPapertrailResponse[]**](../Model/LoggingPapertrailResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateLogPapertrail()`

```php
updateLogPapertrail($options): \Fastly\Model\LoggingPapertrailResponse // Update a Papertrail log endpoint
```

Update the Papertrail for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->updateLogPapertrail($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingPapertrailApi->updateLogPapertrail: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_papertrail_name** | **string** |  |
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [default to &#39;%h %l %u %t &quot;%r&quot; %&amp;gt;s %b&#39;]
**format_version** | [**\Fastly\Model\LoggingFormatVersion**](../Model/LoggingFormatVersion.md) |  | [optional]
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | [**\Fastly\Model\LoggingPlacement**](../Model/LoggingPlacement.md) |  | [optional]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**address** | **string** | A hostname or IPv4 address. | [optional]
**port** | **int** | The port number. | [optional] [default to 514]

### Return type

[**\Fastly\Model\LoggingPapertrailResponse**](../Model/LoggingPapertrailResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
