# Fastly\Api\LoggingOpenstackApi


```php
$apiInstance = new Fastly\Api\LoggingOpenstackApi(
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
[**createLogOpenstack()**](LoggingOpenstackApi.md#createLogOpenstack) | **POST** /service/{service_id}/version/{version_id}/logging/openstack | Create an OpenStack log endpoint
[**deleteLogOpenstack()**](LoggingOpenstackApi.md#deleteLogOpenstack) | **DELETE** /service/{service_id}/version/{version_id}/logging/openstack/{logging_openstack_name} | Delete an OpenStack log endpoint
[**getLogOpenstack()**](LoggingOpenstackApi.md#getLogOpenstack) | **GET** /service/{service_id}/version/{version_id}/logging/openstack/{logging_openstack_name} | Get an OpenStack log endpoint
[**listLogOpenstack()**](LoggingOpenstackApi.md#listLogOpenstack) | **GET** /service/{service_id}/version/{version_id}/logging/openstack | List OpenStack log endpoints
[**updateLogOpenstack()**](LoggingOpenstackApi.md#updateLogOpenstack) | **PUT** /service/{service_id}/version/{version_id}/logging/openstack/{logging_openstack_name} | Update an OpenStack log endpoint


## `createLogOpenstack()`

```php
createLogOpenstack($options): \Fastly\Model\LoggingOpenstackResponse // Create an OpenStack log endpoint
```

Create a openstack for a particular service and version.

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
$options['message_type'] = 'classic'; // string | How the message should be formatted.
$options['timestamp_format'] = 'timestamp_format_example'; // string | A timestamp format
$options['compression_codec'] = 'compression_codec_example'; // string | The codec used for compressing your logs. Valid values are `zstd`, `snappy`, and `gzip`. Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error.
$options['period'] = 3600; // int | How frequently log files are finalized so they can be available for reading (in seconds).
$options['gzip_level'] = 0; // int | The level of gzip encoding when sending logs (default `0`, no compression). Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error.
$options['access_key'] = 'access_key_example'; // string | Your OpenStack account access key.
$options['bucket_name'] = 'bucket_name_example'; // string | The name of your OpenStack container.
$options['path'] = 'null'; // string | The path to upload logs to.
$options['public_key'] = 'null'; // string | A PGP public key that Fastly will use to encrypt your log files before writing them to disk.
$options['url'] = 'url_example'; // string | Your OpenStack auth url.
$options['user'] = 'user_example'; // string | The username for your OpenStack account.

try {
    $result = $apiInstance->createLogOpenstack($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingOpenstackApi->createLogOpenstack: ', $e->getMessage(), PHP_EOL;
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
**message_type** | **string** | How the message should be formatted. | [optional] [one of: 'classic', 'loggly', 'logplex', 'blank'] [defaults to 'classic']
**timestamp_format** | **string** | A timestamp format | [optional]
**compression_codec** | **string** | The codec used for compressing your logs. Valid values are `zstd`, `snappy`, and `gzip`. Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error. | [optional] [one of: 'zstd', 'snappy', 'gzip']
**period** | **int** | How frequently log files are finalized so they can be available for reading (in seconds). | [optional] [defaults to 3600]
**gzip_level** | **int** | The level of gzip encoding when sending logs (default `0`, no compression). Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error. | [optional] [defaults to 0]
**access_key** | **string** | Your OpenStack account access key. | [optional]
**bucket_name** | **string** | The name of your OpenStack container. | [optional]
**path** | **string** | The path to upload logs to. | [optional] [defaults to 'null']
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [defaults to 'null']
**url** | **string** | Your OpenStack auth url. | [optional]
**user** | **string** | The username for your OpenStack account. | [optional]

### Return type

[**\Fastly\Model\LoggingOpenstackResponse**](../Model/LoggingOpenstackResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogOpenstack()`

```php
deleteLogOpenstack($options): \Fastly\Model\InlineResponse200 // Delete an OpenStack log endpoint
```

Delete the openstack for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_openstack_name'] = 'logging_openstack_name_example'; // string | The name for the real-time logging configuration.

try {
    $result = $apiInstance->deleteLogOpenstack($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingOpenstackApi->deleteLogOpenstack: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_openstack_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogOpenstack()`

```php
getLogOpenstack($options): \Fastly\Model\LoggingOpenstackResponse // Get an OpenStack log endpoint
```

Get the openstack for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_openstack_name'] = 'logging_openstack_name_example'; // string | The name for the real-time logging configuration.

try {
    $result = $apiInstance->getLogOpenstack($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingOpenstackApi->getLogOpenstack: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_openstack_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\LoggingOpenstackResponse**](../Model/LoggingOpenstackResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLogOpenstack()`

```php
listLogOpenstack($options): \Fastly\Model\LoggingOpenstackResponse[] // List OpenStack log endpoints
```

List all of the openstacks for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

try {
    $result = $apiInstance->listLogOpenstack($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingOpenstackApi->listLogOpenstack: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\LoggingOpenstackResponse[]**](../Model/LoggingOpenstackResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateLogOpenstack()`

```php
updateLogOpenstack($options): \Fastly\Model\LoggingOpenstackResponse // Update an OpenStack log endpoint
```

Update the openstack for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_openstack_name'] = 'logging_openstack_name_example'; // string | The name for the real-time logging configuration.
$options['name'] = 'name_example'; // string | The name for the real-time logging configuration.
$options['placement'] = 'placement_example'; // string | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
$options['response_condition'] = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$options['format'] = '%h %l %u %t \"%r\" %&gt;s %b'; // string | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/).
$options['log_processing_region'] = 'none'; // string | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global.
$options['format_version'] = self::FORMAT_VERSION_v2; // int | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
$options['message_type'] = 'classic'; // string | How the message should be formatted.
$options['timestamp_format'] = 'timestamp_format_example'; // string | A timestamp format
$options['compression_codec'] = 'compression_codec_example'; // string | The codec used for compressing your logs. Valid values are `zstd`, `snappy`, and `gzip`. Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error.
$options['period'] = 3600; // int | How frequently log files are finalized so they can be available for reading (in seconds).
$options['gzip_level'] = 0; // int | The level of gzip encoding when sending logs (default `0`, no compression). Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error.
$options['access_key'] = 'access_key_example'; // string | Your OpenStack account access key.
$options['bucket_name'] = 'bucket_name_example'; // string | The name of your OpenStack container.
$options['path'] = 'null'; // string | The path to upload logs to.
$options['public_key'] = 'null'; // string | A PGP public key that Fastly will use to encrypt your log files before writing them to disk.
$options['url'] = 'url_example'; // string | Your OpenStack auth url.
$options['user'] = 'user_example'; // string | The username for your OpenStack account.

try {
    $result = $apiInstance->updateLogOpenstack($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingOpenstackApi->updateLogOpenstack: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_openstack_name** | **string** | The name for the real-time logging configuration. |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional] [one of: 'none', 'null']
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). | [optional] [defaults to '%h %l %u %t "%r" %&gt;s %b']
**log_processing_region** | **string** | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global. | [optional] [one of: 'none', 'eu', 'us'] [defaults to 'none']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**message_type** | **string** | How the message should be formatted. | [optional] [one of: 'classic', 'loggly', 'logplex', 'blank'] [defaults to 'classic']
**timestamp_format** | **string** | A timestamp format | [optional]
**compression_codec** | **string** | The codec used for compressing your logs. Valid values are `zstd`, `snappy`, and `gzip`. Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error. | [optional] [one of: 'zstd', 'snappy', 'gzip']
**period** | **int** | How frequently log files are finalized so they can be available for reading (in seconds). | [optional] [defaults to 3600]
**gzip_level** | **int** | The level of gzip encoding when sending logs (default `0`, no compression). Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error. | [optional] [defaults to 0]
**access_key** | **string** | Your OpenStack account access key. | [optional]
**bucket_name** | **string** | The name of your OpenStack container. | [optional]
**path** | **string** | The path to upload logs to. | [optional] [defaults to 'null']
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [defaults to 'null']
**url** | **string** | Your OpenStack auth url. | [optional]
**user** | **string** | The username for your OpenStack account. | [optional]

### Return type

[**\Fastly\Model\LoggingOpenstackResponse**](../Model/LoggingOpenstackResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
