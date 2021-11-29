# Fastly\Api\LoggingOpenstackApi


```php
$apiInstance = new Fastly\Api\LoggingOpenstackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
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
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional] [one of: 'none', 'waf_debug', 'null']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [defaults to '%h %l %u %t "%r" %&gt;s %b']
**message_type** | **string** | How the message should be formatted. | [optional] [one of: 'classic', 'loggly', 'logplex', 'blank'] [defaults to MESSAGE_TYPE_CLASSIC]
**timestamp_format** | **string** | Date and time in ISO 8601 format. | [optional]
**period** | **int** | How frequently log files are finalized so they can be available for reading (in seconds). | [optional] [defaults to 3600]
**gzip_level** | **int** | What level of gzip encoding to have when sending logs (default `0`, no compression). If an explicit non-zero value is set, then `compression_codec` will default to \\\&quot;gzip.\\\&quot; Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error. | [optional] [defaults to 0]
**compression_codec** | **string** | The codec used for compression of your logs. Valid values are `zstd`, `snappy`, and `gzip`. If the specified codec is \\\&quot;gzip\\\&quot;, `gzip_level` will default to 3. To specify a different level, leave `compression_codec` blank and explicitly set the level using `gzip_level`. Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error. | [optional] [one of: 'zstd', 'snappy', 'gzip']
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
deleteLogOpenstack($options): object // Delete an OpenStack log endpoint
```

Delete the openstack for a particular service and version.

### Example
```php
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

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogOpenstack()`

```php
getLogOpenstack($options): \Fastly\Model\LoggingOpenstackResponse // Get an OpenStack log endpoint
```

Get the openstack for a particular service and version.

### Example
```php
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
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional] [one of: 'none', 'waf_debug', 'null']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [defaults to '%h %l %u %t "%r" %&gt;s %b']
**message_type** | **string** | How the message should be formatted. | [optional] [one of: 'classic', 'loggly', 'logplex', 'blank'] [defaults to MESSAGE_TYPE_CLASSIC]
**timestamp_format** | **string** | Date and time in ISO 8601 format. | [optional]
**period** | **int** | How frequently log files are finalized so they can be available for reading (in seconds). | [optional] [defaults to 3600]
**gzip_level** | **int** | What level of gzip encoding to have when sending logs (default `0`, no compression). If an explicit non-zero value is set, then `compression_codec` will default to \\\&quot;gzip.\\\&quot; Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error. | [optional] [defaults to 0]
**compression_codec** | **string** | The codec used for compression of your logs. Valid values are `zstd`, `snappy`, and `gzip`. If the specified codec is \\\&quot;gzip\\\&quot;, `gzip_level` will default to 3. To specify a different level, leave `compression_codec` blank and explicitly set the level using `gzip_level`. Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error. | [optional] [one of: 'zstd', 'snappy', 'gzip']
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
