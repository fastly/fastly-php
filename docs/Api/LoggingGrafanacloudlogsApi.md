# Fastly\Api\LoggingGrafanacloudlogsApi


```php
$apiInstance = new Fastly\Api\LoggingGrafanacloudlogsApi(
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
[**createLogGrafanacloudlogs()**](LoggingGrafanacloudlogsApi.md#createLogGrafanacloudlogs) | **POST** /service/{service_id}/version/{version_id}/logging/grafanacloudlogs | Create a Grafana Cloud Logs log endpoint
[**deleteLogGrafanacloudlogs()**](LoggingGrafanacloudlogsApi.md#deleteLogGrafanacloudlogs) | **DELETE** /service/{service_id}/version/{version_id}/logging/grafanacloudlogs/{logging_grafanacloudlogs_name} | Delete the Grafana Cloud Logs log endpoint
[**getLogGrafanacloudlogs()**](LoggingGrafanacloudlogsApi.md#getLogGrafanacloudlogs) | **GET** /service/{service_id}/version/{version_id}/logging/grafanacloudlogs/{logging_grafanacloudlogs_name} | Get a Grafana Cloud Logs log endpoint
[**listLogGrafanacloudlogs()**](LoggingGrafanacloudlogsApi.md#listLogGrafanacloudlogs) | **GET** /service/{service_id}/version/{version_id}/logging/grafanacloudlogs | List Grafana Cloud Logs log endpoints
[**updateLogGrafanacloudlogs()**](LoggingGrafanacloudlogsApi.md#updateLogGrafanacloudlogs) | **PUT** /service/{service_id}/version/{version_id}/logging/grafanacloudlogs/{logging_grafanacloudlogs_name} | Update a Grafana Cloud Logs log endpoint


## `createLogGrafanacloudlogs()`

```php
createLogGrafanacloudlogs($options): \Fastly\Model\LoggingGrafanacloudlogsResponse // Create a Grafana Cloud Logs log endpoint
```

Create a Grafana Cloud Logs logging object for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['name'] = 'name_example'; // string | The name for the real-time logging configuration.
$options['placement'] = 'placement_example'; // string | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
$options['response_condition'] = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$options['format'] = 'format_example'; // string | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats).
$options['format_version'] = self::FORMAT_VERSION_v2; // int | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
$options['user'] = 'user_example'; // string | The Grafana Cloud Logs Dataset you want to log to.
$options['url'] = 'url_example'; // string | The URL of the Loki instance in your Grafana stack.
$options['token'] = 'token_example'; // string | The Grafana Access Policy token with `logs:write` access scoped to your Loki instance.
$options['index'] = 'index_example'; // string | The Stream Labels, a JSON string used to identify the stream.

try {
    $result = $apiInstance->createLogGrafanacloudlogs($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingGrafanacloudlogsApi->createLogGrafanacloudlogs: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional] [one of: 'none', 'waf_debug', 'null']
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional]
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**user** | **string** | The Grafana Cloud Logs Dataset you want to log to. | [optional]
**url** | **string** | The URL of the Loki instance in your Grafana stack. | [optional]
**token** | **string** | The Grafana Access Policy token with `logs:write` access scoped to your Loki instance. | [optional]
**index** | **string** | The Stream Labels, a JSON string used to identify the stream. | [optional]

### Return type

[**\Fastly\Model\LoggingGrafanacloudlogsResponse**](../Model/LoggingGrafanacloudlogsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogGrafanacloudlogs()`

```php
deleteLogGrafanacloudlogs($options): \Fastly\Model\InlineResponse200 // Delete the Grafana Cloud Logs log endpoint
```

Delete the Grafana Cloud Logs logging object for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_grafanacloudlogs_name'] = 'logging_grafanacloudlogs_name_example'; // string | The name for the real-time logging configuration.

try {
    $result = $apiInstance->deleteLogGrafanacloudlogs($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingGrafanacloudlogsApi->deleteLogGrafanacloudlogs: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_grafanacloudlogs_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogGrafanacloudlogs()`

```php
getLogGrafanacloudlogs($options): \Fastly\Model\LoggingGrafanacloudlogsResponse // Get a Grafana Cloud Logs log endpoint
```

Get the details of a Grafana Cloud Logs logging object for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_grafanacloudlogs_name'] = 'logging_grafanacloudlogs_name_example'; // string | The name for the real-time logging configuration.

try {
    $result = $apiInstance->getLogGrafanacloudlogs($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingGrafanacloudlogsApi->getLogGrafanacloudlogs: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_grafanacloudlogs_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\LoggingGrafanacloudlogsResponse**](../Model/LoggingGrafanacloudlogsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLogGrafanacloudlogs()`

```php
listLogGrafanacloudlogs($options): \Fastly\Model\LoggingGrafanacloudlogsResponse[] // List Grafana Cloud Logs log endpoints
```

List all of the Grafana Cloud Logs logging objects for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

try {
    $result = $apiInstance->listLogGrafanacloudlogs($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingGrafanacloudlogsApi->listLogGrafanacloudlogs: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\LoggingGrafanacloudlogsResponse[]**](../Model/LoggingGrafanacloudlogsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateLogGrafanacloudlogs()`

```php
updateLogGrafanacloudlogs($options): \Fastly\Model\LoggingGrafanacloudlogsResponse // Update a Grafana Cloud Logs log endpoint
```

Update a Grafana Cloud Logs logging object for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_grafanacloudlogs_name'] = 'logging_grafanacloudlogs_name_example'; // string | The name for the real-time logging configuration.
$options['name'] = 'name_example'; // string | The name for the real-time logging configuration.
$options['placement'] = 'placement_example'; // string | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
$options['response_condition'] = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$options['format'] = 'format_example'; // string | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats).
$options['format_version'] = self::FORMAT_VERSION_v2; // int | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
$options['user'] = 'user_example'; // string | The Grafana Cloud Logs Dataset you want to log to.
$options['url'] = 'url_example'; // string | The URL of the Loki instance in your Grafana stack.
$options['token'] = 'token_example'; // string | The Grafana Access Policy token with `logs:write` access scoped to your Loki instance.
$options['index'] = 'index_example'; // string | The Stream Labels, a JSON string used to identify the stream.

try {
    $result = $apiInstance->updateLogGrafanacloudlogs($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingGrafanacloudlogsApi->updateLogGrafanacloudlogs: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_grafanacloudlogs_name** | **string** | The name for the real-time logging configuration. |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional] [one of: 'none', 'waf_debug', 'null']
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional]
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**user** | **string** | The Grafana Cloud Logs Dataset you want to log to. | [optional]
**url** | **string** | The URL of the Loki instance in your Grafana stack. | [optional]
**token** | **string** | The Grafana Access Policy token with `logs:write` access scoped to your Loki instance. | [optional]
**index** | **string** | The Stream Labels, a JSON string used to identify the stream. | [optional]

### Return type

[**\Fastly\Model\LoggingGrafanacloudlogsResponse**](../Model/LoggingGrafanacloudlogsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
