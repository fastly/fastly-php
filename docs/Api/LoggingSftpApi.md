# Fastly\Api\LoggingSftpApi


```php
$apiInstance = new Fastly\Api\LoggingSftpApi(
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
[**createLogSftp()**](LoggingSftpApi.md#createLogSftp) | **POST** /service/{service_id}/version/{version_id}/logging/sftp | Create an SFTP log endpoint
[**deleteLogSftp()**](LoggingSftpApi.md#deleteLogSftp) | **DELETE** /service/{service_id}/version/{version_id}/logging/sftp/{logging_sftp_name} | Delete an SFTP log endpoint
[**getLogSftp()**](LoggingSftpApi.md#getLogSftp) | **GET** /service/{service_id}/version/{version_id}/logging/sftp/{logging_sftp_name} | Get an SFTP log endpoint
[**listLogSftp()**](LoggingSftpApi.md#listLogSftp) | **GET** /service/{service_id}/version/{version_id}/logging/sftp | List SFTP log endpoints
[**updateLogSftp()**](LoggingSftpApi.md#updateLogSftp) | **PUT** /service/{service_id}/version/{version_id}/logging/sftp/{logging_sftp_name} | Update an SFTP log endpoint


## `createLogSftp()`

```php
createLogSftp($options): \Fastly\Model\LoggingSftpResponse // Create an SFTP log endpoint
```

Create a SFTP for a particular service and version.

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
$options['address'] = 'address_example'; // string | A hostname or IPv4 address.
$options['port'] = 22; // int | The port number.
$options['password'] = 'password_example'; // string | The password for the server. If both `password` and `secret_key` are passed, `secret_key` will be used in preference.
$options['path'] = 'null'; // string | The path to upload logs to.
$options['public_key'] = 'null'; // string | A PGP public key that Fastly will use to encrypt your log files before writing them to disk.
$options['secret_key'] = 'null'; // string | The SSH private key for the server. If both `password` and `secret_key` are passed, `secret_key` will be used in preference.
$options['ssh_known_hosts'] = 'ssh_known_hosts_example'; // string | A list of host keys for all hosts we can connect to over SFTP.
$options['user'] = 'user_example'; // string | The username for the server.

try {
    $result = $apiInstance->createLogSftp($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingSftpApi->createLogSftp: ', $e->getMessage(), PHP_EOL;
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
**address** | **string** | A hostname or IPv4 address. | [optional]
**port** | **int** | The port number. | [optional] [defaults to 22]
**password** | **string** | The password for the server. If both `password` and `secret_key` are passed, `secret_key` will be used in preference. | [optional]
**path** | **string** | The path to upload logs to. | [optional] [defaults to 'null']
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [defaults to 'null']
**secret_key** | **string** | The SSH private key for the server. If both `password` and `secret_key` are passed, `secret_key` will be used in preference. | [optional] [defaults to 'null']
**ssh_known_hosts** | **string** | A list of host keys for all hosts we can connect to over SFTP. | [optional]
**user** | **string** | The username for the server. | [optional]

### Return type

[**\Fastly\Model\LoggingSftpResponse**](../Model/LoggingSftpResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogSftp()`

```php
deleteLogSftp($options): \Fastly\Model\InlineResponse200 // Delete an SFTP log endpoint
```

Delete the SFTP for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_sftp_name'] = 'logging_sftp_name_example'; // string | The name for the real-time logging configuration.

try {
    $result = $apiInstance->deleteLogSftp($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingSftpApi->deleteLogSftp: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_sftp_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogSftp()`

```php
getLogSftp($options): \Fastly\Model\LoggingSftpResponse // Get an SFTP log endpoint
```

Get the SFTP for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_sftp_name'] = 'logging_sftp_name_example'; // string | The name for the real-time logging configuration.

try {
    $result = $apiInstance->getLogSftp($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingSftpApi->getLogSftp: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_sftp_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\LoggingSftpResponse**](../Model/LoggingSftpResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLogSftp()`

```php
listLogSftp($options): \Fastly\Model\LoggingSftpResponse[] // List SFTP log endpoints
```

List all of the SFTPs for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

try {
    $result = $apiInstance->listLogSftp($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingSftpApi->listLogSftp: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\LoggingSftpResponse[]**](../Model/LoggingSftpResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateLogSftp()`

```php
updateLogSftp($options): \Fastly\Model\LoggingSftpResponse // Update an SFTP log endpoint
```

Update the SFTP for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_sftp_name'] = 'logging_sftp_name_example'; // string | The name for the real-time logging configuration.
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
$options['address'] = 'address_example'; // string | A hostname or IPv4 address.
$options['port'] = 22; // int | The port number.
$options['password'] = 'password_example'; // string | The password for the server. If both `password` and `secret_key` are passed, `secret_key` will be used in preference.
$options['path'] = 'null'; // string | The path to upload logs to.
$options['public_key'] = 'null'; // string | A PGP public key that Fastly will use to encrypt your log files before writing them to disk.
$options['secret_key'] = 'null'; // string | The SSH private key for the server. If both `password` and `secret_key` are passed, `secret_key` will be used in preference.
$options['ssh_known_hosts'] = 'ssh_known_hosts_example'; // string | A list of host keys for all hosts we can connect to over SFTP.
$options['user'] = 'user_example'; // string | The username for the server.

try {
    $result = $apiInstance->updateLogSftp($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingSftpApi->updateLogSftp: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_sftp_name** | **string** | The name for the real-time logging configuration. |
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
**address** | **string** | A hostname or IPv4 address. | [optional]
**port** | **int** | The port number. | [optional] [defaults to 22]
**password** | **string** | The password for the server. If both `password` and `secret_key` are passed, `secret_key` will be used in preference. | [optional]
**path** | **string** | The path to upload logs to. | [optional] [defaults to 'null']
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [defaults to 'null']
**secret_key** | **string** | The SSH private key for the server. If both `password` and `secret_key` are passed, `secret_key` will be used in preference. | [optional] [defaults to 'null']
**ssh_known_hosts** | **string** | A list of host keys for all hosts we can connect to over SFTP. | [optional]
**user** | **string** | The username for the server. | [optional]

### Return type

[**\Fastly\Model\LoggingSftpResponse**](../Model/LoggingSftpResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
