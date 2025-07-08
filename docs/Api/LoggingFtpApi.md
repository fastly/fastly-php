# Fastly\Api\LoggingFtpApi


```php
$apiInstance = new Fastly\Api\LoggingFtpApi(
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
[**createLogFtp()**](LoggingFtpApi.md#createLogFtp) | **POST** /service/{service_id}/version/{version_id}/logging/ftp | Create an FTP log endpoint
[**deleteLogFtp()**](LoggingFtpApi.md#deleteLogFtp) | **DELETE** /service/{service_id}/version/{version_id}/logging/ftp/{logging_ftp_name} | Delete an FTP log endpoint
[**getLogFtp()**](LoggingFtpApi.md#getLogFtp) | **GET** /service/{service_id}/version/{version_id}/logging/ftp/{logging_ftp_name} | Get an FTP log endpoint
[**listLogFtp()**](LoggingFtpApi.md#listLogFtp) | **GET** /service/{service_id}/version/{version_id}/logging/ftp | List FTP log endpoints
[**updateLogFtp()**](LoggingFtpApi.md#updateLogFtp) | **PUT** /service/{service_id}/version/{version_id}/logging/ftp/{logging_ftp_name} | Update an FTP log endpoint


## `createLogFtp()`

```php
createLogFtp($options): \Fastly\Model\LoggingFtpResponse // Create an FTP log endpoint
```

Create a FTP for a particular service and version.

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
$options['address'] = 'address_example'; // string | An hostname or IPv4 address.
$options['hostname'] = 'hostname_example'; // string | Hostname used.
$options['ipv4'] = 'ipv4_example'; // string | IPv4 address of the host.
$options['password'] = 'password_example'; // string | The password for the server. For anonymous use an email address.
$options['path'] = 'path_example'; // string | The path to upload log files to. If the path ends in `/` then it is treated as a directory.
$options['public_key'] = 'null'; // string | A PGP public key that Fastly will use to encrypt your log files before writing them to disk.
$options['user'] = 'user_example'; // string | The username for the server. Can be anonymous.
$options['port'] = 21; // int | The port number.

try {
    $result = $apiInstance->createLogFtp($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingFtpApi->createLogFtp: ', $e->getMessage(), PHP_EOL;
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
**address** | **string** | An hostname or IPv4 address. | [optional]
**hostname** | **string** | Hostname used. | [optional]
**ipv4** | **string** | IPv4 address of the host. | [optional]
**password** | **string** | The password for the server. For anonymous use an email address. | [optional]
**path** | **string** | The path to upload log files to. If the path ends in `/` then it is treated as a directory. | [optional]
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [defaults to 'null']
**user** | **string** | The username for the server. Can be anonymous. | [optional]
**port** | **int** | The port number. | [optional] [defaults to 21]

### Return type

[**\Fastly\Model\LoggingFtpResponse**](../Model/LoggingFtpResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogFtp()`

```php
deleteLogFtp($options): \Fastly\Model\InlineResponse200 // Delete an FTP log endpoint
```

Delete the FTP for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_ftp_name'] = 'logging_ftp_name_example'; // string | The name for the real-time logging configuration.

try {
    $result = $apiInstance->deleteLogFtp($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingFtpApi->deleteLogFtp: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_ftp_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogFtp()`

```php
getLogFtp($options): \Fastly\Model\LoggingFtpResponse // Get an FTP log endpoint
```

Get the FTP for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_ftp_name'] = 'logging_ftp_name_example'; // string | The name for the real-time logging configuration.

try {
    $result = $apiInstance->getLogFtp($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingFtpApi->getLogFtp: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_ftp_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\LoggingFtpResponse**](../Model/LoggingFtpResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLogFtp()`

```php
listLogFtp($options): \Fastly\Model\LoggingFtpResponse[] // List FTP log endpoints
```

List all of the FTPs for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

try {
    $result = $apiInstance->listLogFtp($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingFtpApi->listLogFtp: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\LoggingFtpResponse[]**](../Model/LoggingFtpResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateLogFtp()`

```php
updateLogFtp($options): \Fastly\Model\LoggingFtpResponse // Update an FTP log endpoint
```

Update the FTP for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_ftp_name'] = 'logging_ftp_name_example'; // string | The name for the real-time logging configuration.
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
$options['address'] = 'address_example'; // string | An hostname or IPv4 address.
$options['hostname'] = 'hostname_example'; // string | Hostname used.
$options['ipv4'] = 'ipv4_example'; // string | IPv4 address of the host.
$options['password'] = 'password_example'; // string | The password for the server. For anonymous use an email address.
$options['path'] = 'path_example'; // string | The path to upload log files to. If the path ends in `/` then it is treated as a directory.
$options['public_key'] = 'null'; // string | A PGP public key that Fastly will use to encrypt your log files before writing them to disk.
$options['user'] = 'user_example'; // string | The username for the server. Can be anonymous.
$options['port'] = 21; // int | The port number.

try {
    $result = $apiInstance->updateLogFtp($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingFtpApi->updateLogFtp: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_ftp_name** | **string** | The name for the real-time logging configuration. |
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
**address** | **string** | An hostname or IPv4 address. | [optional]
**hostname** | **string** | Hostname used. | [optional]
**ipv4** | **string** | IPv4 address of the host. | [optional]
**password** | **string** | The password for the server. For anonymous use an email address. | [optional]
**path** | **string** | The path to upload log files to. If the path ends in `/` then it is treated as a directory. | [optional]
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [defaults to 'null']
**user** | **string** | The username for the server. Can be anonymous. | [optional]
**port** | **int** | The port number. | [optional] [defaults to 21]

### Return type

[**\Fastly\Model\LoggingFtpResponse**](../Model/LoggingFtpResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
