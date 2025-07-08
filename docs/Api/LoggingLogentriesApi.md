# Fastly\Api\LoggingLogentriesApi


```php
$apiInstance = new Fastly\Api\LoggingLogentriesApi(
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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['name'] = 'name_example'; // string | The name for the real-time logging configuration.
$options['placement'] = 'placement_example'; // string | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
$options['response_condition'] = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$options['format'] = '%h %l %u %t \"%r\" %&gt;s %b'; // string | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/).
$options['log_processing_region'] = 'none'; // string | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global.
$options['format_version'] = self::FORMAT_VERSION_v2; // int | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
$options['port'] = 20000; // int | The port number.
$options['token'] = 'token_example'; // string | Use token based authentication.
$options['use_tls'] = new \Fastly\Model\LoggingUseTlsString(); // \Fastly\Model\LoggingUseTlsString
$options['region'] = 'region_example'; // string | The region to which to stream logs.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional] [one of: 'none', 'null']
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). | [optional] [defaults to '%h %l %u %t "%r" %&gt;s %b']
**log_processing_region** | **string** | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global. | [optional] [one of: 'none', 'eu', 'us'] [defaults to 'none']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**port** | **int** | The port number. | [optional] [defaults to 20000]
**token** | **string** | Use token based authentication. | [optional]
**use_tls** | [**\Fastly\Model\LoggingUseTlsString**](../Model/LoggingUseTlsString.md) |  | [optional]
**region** | **string** | The region to which to stream logs. | [optional] [one of: 'US', 'US-2', 'US-3', 'EU', 'CA', 'AU', 'AP']

### Return type

[**\Fastly\Model\LoggingLogentriesResponse**](../Model/LoggingLogentriesResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogLogentries()`

```php
deleteLogLogentries($options): \Fastly\Model\InlineResponse200 // Delete a Logentries log endpoint
```

Delete the Logentry for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_logentries_name'] = 'logging_logentries_name_example'; // string | The name for the real-time logging configuration.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_logentries_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogLogentries()`

```php
getLogLogentries($options): \Fastly\Model\LoggingLogentriesResponse // Get a Logentries log endpoint
```

Get the Logentry for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_logentries_name'] = 'logging_logentries_name_example'; // string | The name for the real-time logging configuration.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_logentries_name** | **string** | The name for the real-time logging configuration. |

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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_logentries_name'] = 'logging_logentries_name_example'; // string | The name for the real-time logging configuration.
$options['name'] = 'name_example'; // string | The name for the real-time logging configuration.
$options['placement'] = 'placement_example'; // string | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
$options['response_condition'] = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$options['format'] = '%h %l %u %t \"%r\" %&gt;s %b'; // string | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/).
$options['log_processing_region'] = 'none'; // string | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global.
$options['format_version'] = self::FORMAT_VERSION_v2; // int | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
$options['port'] = 20000; // int | The port number.
$options['token'] = 'token_example'; // string | Use token based authentication.
$options['use_tls'] = new \Fastly\Model\LoggingUseTlsString(); // \Fastly\Model\LoggingUseTlsString
$options['region'] = 'region_example'; // string | The region to which to stream logs.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_logentries_name** | **string** | The name for the real-time logging configuration. |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional] [one of: 'none', 'null']
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). | [optional] [defaults to '%h %l %u %t "%r" %&gt;s %b']
**log_processing_region** | **string** | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global. | [optional] [one of: 'none', 'eu', 'us'] [defaults to 'none']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**port** | **int** | The port number. | [optional] [defaults to 20000]
**token** | **string** | Use token based authentication. | [optional]
**use_tls** | [**\Fastly\Model\LoggingUseTlsString**](../Model/LoggingUseTlsString.md) |  | [optional]
**region** | **string** | The region to which to stream logs. | [optional] [one of: 'US', 'US-2', 'US-3', 'EU', 'CA', 'AU', 'AP']

### Return type

[**\Fastly\Model\LoggingLogentriesResponse**](../Model/LoggingLogentriesResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
