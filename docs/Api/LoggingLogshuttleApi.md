# Fastly\Api\LoggingLogshuttleApi


```php
$apiInstance = new Fastly\Api\LoggingLogshuttleApi(
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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['name'] = 'name_example'; // string | The name for the real-time logging configuration.
$options['placement'] = 'placement_example'; // string | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
$options['response_condition'] = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$options['format'] = '%h %l %u %t \"%r\" %&gt;s %b'; // string | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/).
$options['log_processing_region'] = 'none'; // string | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global.
$options['format_version'] = self::FORMAT_VERSION_v2; // int | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
$options['token'] = 'token_example'; // string | The data authentication token associated with this endpoint.
$options['url'] = 'url_example'; // string | The URL to stream logs to.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional] [one of: 'none', 'null']
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). | [optional] [defaults to '%h %l %u %t "%r" %&gt;s %b']
**log_processing_region** | **string** | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global. | [optional] [one of: 'none', 'eu', 'us'] [defaults to 'none']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**token** | **string** | The data authentication token associated with this endpoint. | [optional]
**url** | **string** | The URL to stream logs to. | [optional]

### Return type

[**\Fastly\Model\LoggingLogshuttleResponse**](../Model/LoggingLogshuttleResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogLogshuttle()`

```php
deleteLogLogshuttle($options): \Fastly\Model\InlineResponse200 // Delete a Log Shuttle log endpoint
```

Delete the Log Shuttle logging endpoint for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_logshuttle_name'] = 'logging_logshuttle_name_example'; // string | The name for the real-time logging configuration.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_logshuttle_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogLogshuttle()`

```php
getLogLogshuttle($options): \Fastly\Model\LoggingLogshuttleResponse // Get a Log Shuttle log endpoint
```

Get the Log Shuttle logging endpoint for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_logshuttle_name'] = 'logging_logshuttle_name_example'; // string | The name for the real-time logging configuration.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_logshuttle_name** | **string** | The name for the real-time logging configuration. |

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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_logshuttle_name'] = 'logging_logshuttle_name_example'; // string | The name for the real-time logging configuration.
$options['name'] = 'name_example'; // string | The name for the real-time logging configuration.
$options['placement'] = 'placement_example'; // string | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
$options['response_condition'] = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$options['format'] = '%h %l %u %t \"%r\" %&gt;s %b'; // string | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/).
$options['log_processing_region'] = 'none'; // string | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global.
$options['format_version'] = self::FORMAT_VERSION_v2; // int | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
$options['token'] = 'token_example'; // string | The data authentication token associated with this endpoint.
$options['url'] = 'url_example'; // string | The URL to stream logs to.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_logshuttle_name** | **string** | The name for the real-time logging configuration. |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional] [one of: 'none', 'null']
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). | [optional] [defaults to '%h %l %u %t "%r" %&gt;s %b']
**log_processing_region** | **string** | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global. | [optional] [one of: 'none', 'eu', 'us'] [defaults to 'none']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**token** | **string** | The data authentication token associated with this endpoint. | [optional]
**url** | **string** | The URL to stream logs to. | [optional]

### Return type

[**\Fastly\Model\LoggingLogshuttleResponse**](../Model/LoggingLogshuttleResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
