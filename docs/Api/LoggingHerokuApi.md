# Fastly\Api\LoggingHerokuApi


```php
$apiInstance = new Fastly\Api\LoggingHerokuApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**createLogHeroku()**](LoggingHerokuApi.md#createLogHeroku) | **POST** /service/{service_id}/version/{version_id}/logging/heroku | Create a Heroku log endpoint
[**deleteLogHeroku()**](LoggingHerokuApi.md#deleteLogHeroku) | **DELETE** /service/{service_id}/version/{version_id}/logging/heroku/{logging_heroku_name} | Delete the Heroku log endpoint
[**getLogHeroku()**](LoggingHerokuApi.md#getLogHeroku) | **GET** /service/{service_id}/version/{version_id}/logging/heroku/{logging_heroku_name} | Get a Heroku log endpoint
[**listLogHeroku()**](LoggingHerokuApi.md#listLogHeroku) | **GET** /service/{service_id}/version/{version_id}/logging/heroku | List Heroku log endpoints
[**updateLogHeroku()**](LoggingHerokuApi.md#updateLogHeroku) | **PUT** /service/{service_id}/version/{version_id}/logging/heroku/{logging_heroku_name} | Update the Heroku log endpoint


## `createLogHeroku()`

```php
createLogHeroku($options): \Fastly\Model\LoggingHerokuResponse // Create a Heroku log endpoint
```

Create a Heroku for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->createLogHeroku($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingHerokuApi->createLogHeroku: ', $e->getMessage(), PHP_EOL;
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
**token** | **string** | The token to use for authentication ([https://devcenter.heroku.com/articles/add-on-partner-log-integration](https://devcenter.heroku.com/articles/add-on-partner-log-integration)). | [optional]
**url** | **string** | The URL to stream logs to. | [optional]

### Return type

[**\Fastly\Model\LoggingHerokuResponse**](../Model/LoggingHerokuResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogHeroku()`

```php
deleteLogHeroku($options): object // Delete the Heroku log endpoint
```

Delete the Heroku for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->deleteLogHeroku($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingHerokuApi->deleteLogHeroku: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_heroku_name** | **string** |  |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogHeroku()`

```php
getLogHeroku($options): \Fastly\Model\LoggingHerokuResponse // Get a Heroku log endpoint
```

Get the Heroku for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->getLogHeroku($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingHerokuApi->getLogHeroku: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_heroku_name** | **string** |  |

### Return type

[**\Fastly\Model\LoggingHerokuResponse**](../Model/LoggingHerokuResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLogHeroku()`

```php
listLogHeroku($options): \Fastly\Model\LoggingHerokuResponse[] // List Heroku log endpoints
```

List all of the Herokus for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->listLogHeroku($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingHerokuApi->listLogHeroku: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |

### Return type

[**\Fastly\Model\LoggingHerokuResponse[]**](../Model/LoggingHerokuResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateLogHeroku()`

```php
updateLogHeroku($options): \Fastly\Model\LoggingHerokuResponse // Update the Heroku log endpoint
```

Update the Heroku for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->updateLogHeroku($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingHerokuApi->updateLogHeroku: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_heroku_name** | **string** |  |
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [default to &#39;%h %l %u %t &quot;%r&quot; %&amp;gt;s %b&#39;]
**format_version** | [**\Fastly\Model\LoggingFormatVersion**](../Model/LoggingFormatVersion.md) |  | [optional]
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | [**\Fastly\Model\LoggingPlacement**](../Model/LoggingPlacement.md) |  | [optional]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**token** | **string** | The token to use for authentication ([https://devcenter.heroku.com/articles/add-on-partner-log-integration](https://devcenter.heroku.com/articles/add-on-partner-log-integration)). | [optional]
**url** | **string** | The URL to stream logs to. | [optional]

### Return type

[**\Fastly\Model\LoggingHerokuResponse**](../Model/LoggingHerokuResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
