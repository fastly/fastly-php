# Fastly\Api\LoggingHoneycombApi


```php
$apiInstance = new Fastly\Api\LoggingHoneycombApi(
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
[**createLogHoneycomb()**](LoggingHoneycombApi.md#createLogHoneycomb) | **POST** /service/{service_id}/version/{version_id}/logging/honeycomb | Create a Honeycomb log endpoint
[**deleteLogHoneycomb()**](LoggingHoneycombApi.md#deleteLogHoneycomb) | **DELETE** /service/{service_id}/version/{version_id}/logging/honeycomb/{logging_honeycomb_name} | Delete the Honeycomb log endpoint
[**getLogHoneycomb()**](LoggingHoneycombApi.md#getLogHoneycomb) | **GET** /service/{service_id}/version/{version_id}/logging/honeycomb/{logging_honeycomb_name} | Get a Honeycomb log endpoint
[**listLogHoneycomb()**](LoggingHoneycombApi.md#listLogHoneycomb) | **GET** /service/{service_id}/version/{version_id}/logging/honeycomb | List Honeycomb log endpoints
[**updateLogHoneycomb()**](LoggingHoneycombApi.md#updateLogHoneycomb) | **PUT** /service/{service_id}/version/{version_id}/logging/honeycomb/{logging_honeycomb_name} | Update a Honeycomb log endpoint


## `createLogHoneycomb()`

```php
createLogHoneycomb($options): \Fastly\Model\LoggingHoneycombResponse // Create a Honeycomb log endpoint
```

Create a Honeycomb logging object for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['name'] = 'name_example'; // string | The name for the real-time logging configuration.
$options['placement'] = 'placement_example'; // string | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
$options['response_condition'] = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$options['format'] = 'format_example'; // string | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). Must produce valid JSON that Honeycomb can ingest.
$options['log_processing_region'] = 'none'; // string | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global.
$options['format_version'] = self::FORMAT_VERSION_v2; // int | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
$options['dataset'] = 'dataset_example'; // string | The Honeycomb Dataset you want to log to.
$options['token'] = 'token_example'; // string | The Write Key from the Account page of your Honeycomb account.

try {
    $result = $apiInstance->createLogHoneycomb($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingHoneycombApi->createLogHoneycomb: ', $e->getMessage(), PHP_EOL;
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
**format** | **string** | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). Must produce valid JSON that Honeycomb can ingest. | [optional]
**log_processing_region** | **string** | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global. | [optional] [one of: 'none', 'eu', 'us'] [defaults to 'none']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**dataset** | **string** | The Honeycomb Dataset you want to log to. | [optional]
**token** | **string** | The Write Key from the Account page of your Honeycomb account. | [optional]

### Return type

[**\Fastly\Model\LoggingHoneycombResponse**](../Model/LoggingHoneycombResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogHoneycomb()`

```php
deleteLogHoneycomb($options): \Fastly\Model\InlineResponse200 // Delete the Honeycomb log endpoint
```

Delete the Honeycomb logging object for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_honeycomb_name'] = 'logging_honeycomb_name_example'; // string | The name for the real-time logging configuration.

try {
    $result = $apiInstance->deleteLogHoneycomb($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingHoneycombApi->deleteLogHoneycomb: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_honeycomb_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogHoneycomb()`

```php
getLogHoneycomb($options): \Fastly\Model\LoggingHoneycombResponse // Get a Honeycomb log endpoint
```

Get the details of a Honeycomb logging object for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_honeycomb_name'] = 'logging_honeycomb_name_example'; // string | The name for the real-time logging configuration.

try {
    $result = $apiInstance->getLogHoneycomb($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingHoneycombApi->getLogHoneycomb: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_honeycomb_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\LoggingHoneycombResponse**](../Model/LoggingHoneycombResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLogHoneycomb()`

```php
listLogHoneycomb($options): \Fastly\Model\LoggingHoneycombResponse[] // List Honeycomb log endpoints
```

List all of the Honeycomb logging objects for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

try {
    $result = $apiInstance->listLogHoneycomb($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingHoneycombApi->listLogHoneycomb: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\LoggingHoneycombResponse[]**](../Model/LoggingHoneycombResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateLogHoneycomb()`

```php
updateLogHoneycomb($options): \Fastly\Model\LoggingHoneycombResponse // Update a Honeycomb log endpoint
```

Update a Honeycomb logging object for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_honeycomb_name'] = 'logging_honeycomb_name_example'; // string | The name for the real-time logging configuration.
$options['name'] = 'name_example'; // string | The name for the real-time logging configuration.
$options['placement'] = 'placement_example'; // string | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
$options['response_condition'] = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$options['format'] = 'format_example'; // string | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). Must produce valid JSON that Honeycomb can ingest.
$options['log_processing_region'] = 'none'; // string | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global.
$options['format_version'] = self::FORMAT_VERSION_v2; // int | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
$options['dataset'] = 'dataset_example'; // string | The Honeycomb Dataset you want to log to.
$options['token'] = 'token_example'; // string | The Write Key from the Account page of your Honeycomb account.

try {
    $result = $apiInstance->updateLogHoneycomb($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingHoneycombApi->updateLogHoneycomb: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_honeycomb_name** | **string** | The name for the real-time logging configuration. |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional] [one of: 'none', 'null']
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). Must produce valid JSON that Honeycomb can ingest. | [optional]
**log_processing_region** | **string** | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global. | [optional] [one of: 'none', 'eu', 'us'] [defaults to 'none']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**dataset** | **string** | The Honeycomb Dataset you want to log to. | [optional]
**token** | **string** | The Write Key from the Account page of your Honeycomb account. | [optional]

### Return type

[**\Fastly\Model\LoggingHoneycombResponse**](../Model/LoggingHoneycombResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
