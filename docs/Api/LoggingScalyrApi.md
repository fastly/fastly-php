# Fastly\Api\LoggingScalyrApi


```php
$apiInstance = new Fastly\Api\LoggingScalyrApi(
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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['name'] = 'name_example'; // string | The name for the real-time logging configuration.
$options['placement'] = 'placement_example'; // string | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
$options['response_condition'] = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$options['format'] = '%h %l %u %t \"%r\" %&gt;s %b'; // string | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/).
$options['log_processing_region'] = 'none'; // string | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global.
$options['format_version'] = self::FORMAT_VERSION_v2; // int | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
$options['region'] = 'US'; // string | The region that log data will be sent to.
$options['token'] = 'token_example'; // string | The token to use for authentication.
$options['project_id'] = 'logplex'; // string | The name of the logfile within Scalyr.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional] [one of: 'none', 'null']
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). | [optional] [defaults to '%h %l %u %t "%r" %&gt;s %b']
**log_processing_region** | **string** | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global. | [optional] [one of: 'none', 'eu', 'us'] [defaults to 'none']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**region** | **string** | The region that log data will be sent to. | [optional] [one of: 'US', 'EU'] [defaults to 'US']
**token** | **string** | The token to use for authentication. | [optional]
**project_id** | **string** | The name of the logfile within Scalyr. | [optional] [defaults to 'logplex']

### Return type

[**\Fastly\Model\LoggingScalyrResponse**](../Model/LoggingScalyrResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogScalyr()`

```php
deleteLogScalyr($options): \Fastly\Model\InlineResponse200 // Delete the Scalyr log endpoint
```

Delete the Scalyr for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_scalyr_name'] = 'logging_scalyr_name_example'; // string | The name for the real-time logging configuration.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_scalyr_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogScalyr()`

```php
getLogScalyr($options): \Fastly\Model\LoggingScalyrResponse // Get a Scalyr log endpoint
```

Get the Scalyr for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_scalyr_name'] = 'logging_scalyr_name_example'; // string | The name for the real-time logging configuration.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_scalyr_name** | **string** | The name for the real-time logging configuration. |

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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_scalyr_name'] = 'logging_scalyr_name_example'; // string | The name for the real-time logging configuration.
$options['name'] = 'name_example'; // string | The name for the real-time logging configuration.
$options['placement'] = 'placement_example'; // string | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
$options['response_condition'] = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$options['format'] = '%h %l %u %t \"%r\" %&gt;s %b'; // string | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/).
$options['log_processing_region'] = 'none'; // string | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global.
$options['format_version'] = self::FORMAT_VERSION_v2; // int | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
$options['region'] = 'US'; // string | The region that log data will be sent to.
$options['token'] = 'token_example'; // string | The token to use for authentication.
$options['project_id'] = 'logplex'; // string | The name of the logfile within Scalyr.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_scalyr_name** | **string** | The name for the real-time logging configuration. |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional] [one of: 'none', 'null']
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). | [optional] [defaults to '%h %l %u %t "%r" %&gt;s %b']
**log_processing_region** | **string** | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global. | [optional] [one of: 'none', 'eu', 'us'] [defaults to 'none']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**region** | **string** | The region that log data will be sent to. | [optional] [one of: 'US', 'EU'] [defaults to 'US']
**token** | **string** | The token to use for authentication. | [optional]
**project_id** | **string** | The name of the logfile within Scalyr. | [optional] [defaults to 'logplex']

### Return type

[**\Fastly\Model\LoggingScalyrResponse**](../Model/LoggingScalyrResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
