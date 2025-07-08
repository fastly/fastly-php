# Fastly\Api\LoggingHerokuApi


```php
$apiInstance = new Fastly\Api\LoggingHerokuApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
```

## Methods

> [!NOTE]
> All URIs are relative to `https://api.fastly.com`

Method | HTTP request | Description
------ | ------------ | -----------
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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['name'] = 'name_example'; // string | The name for the real-time logging configuration.
$options['placement'] = 'placement_example'; // string | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
$options['response_condition'] = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$options['format'] = '%h %l %u %t \"%r\" %&gt;s %b'; // string | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/).
$options['log_processing_region'] = 'none'; // string | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global.
$options['format_version'] = self::FORMAT_VERSION_v2; // int | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
$options['token'] = 'token_example'; // string | The token to use for authentication ([https://devcenter.heroku.com/articles/add-on-partner-log-integration](https://devcenter.heroku.com/articles/add-on-partner-log-integration)).
$options['url'] = 'url_example'; // string | The URL to stream logs to.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional] [one of: 'none', 'null']
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). | [optional] [defaults to '%h %l %u %t "%r" %&gt;s %b']
**log_processing_region** | **string** | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global. | [optional] [one of: 'none', 'eu', 'us'] [defaults to 'none']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**token** | **string** | The token to use for authentication ([https://devcenter.heroku.com/articles/add-on-partner-log-integration](https://devcenter.heroku.com/articles/add-on-partner-log-integration)). | [optional]
**url** | **string** | The URL to stream logs to. | [optional]

### Return type

[**\Fastly\Model\LoggingHerokuResponse**](../Model/LoggingHerokuResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogHeroku()`

```php
deleteLogHeroku($options): \Fastly\Model\InlineResponse200 // Delete the Heroku log endpoint
```

Delete the Heroku for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_heroku_name'] = 'logging_heroku_name_example'; // string | The name for the real-time logging configuration.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_heroku_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogHeroku()`

```php
getLogHeroku($options): \Fastly\Model\LoggingHerokuResponse // Get a Heroku log endpoint
```

Get the Heroku for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_heroku_name'] = 'logging_heroku_name_example'; // string | The name for the real-time logging configuration.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_heroku_name** | **string** | The name for the real-time logging configuration. |

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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_heroku_name'] = 'logging_heroku_name_example'; // string | The name for the real-time logging configuration.
$options['name'] = 'name_example'; // string | The name for the real-time logging configuration.
$options['placement'] = 'placement_example'; // string | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
$options['response_condition'] = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$options['format'] = '%h %l %u %t \"%r\" %&gt;s %b'; // string | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/).
$options['log_processing_region'] = 'none'; // string | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global.
$options['format_version'] = self::FORMAT_VERSION_v2; // int | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
$options['token'] = 'token_example'; // string | The token to use for authentication ([https://devcenter.heroku.com/articles/add-on-partner-log-integration](https://devcenter.heroku.com/articles/add-on-partner-log-integration)).
$options['url'] = 'url_example'; // string | The URL to stream logs to.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_heroku_name** | **string** | The name for the real-time logging configuration. |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional] [one of: 'none', 'null']
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). | [optional] [defaults to '%h %l %u %t "%r" %&gt;s %b']
**log_processing_region** | **string** | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global. | [optional] [one of: 'none', 'eu', 'us'] [defaults to 'none']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**token** | **string** | The token to use for authentication ([https://devcenter.heroku.com/articles/add-on-partner-log-integration](https://devcenter.heroku.com/articles/add-on-partner-log-integration)). | [optional]
**url** | **string** | The URL to stream logs to. | [optional]

### Return type

[**\Fastly\Model\LoggingHerokuResponse**](../Model/LoggingHerokuResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
