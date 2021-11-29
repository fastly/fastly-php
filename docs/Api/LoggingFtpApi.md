# Fastly\Api\LoggingFtpApi


```php
$apiInstance = new Fastly\Api\LoggingFtpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
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
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional] [one of: 'none', 'waf_debug', 'null']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [defaults to '%h %l %u %t "%r" %&gt;s %b']
**message_type** | **string** | How the message should be formatted. | [optional] [one of: 'classic', 'loggly', 'logplex', 'blank'] [defaults to MESSAGE_TYPE_CLASSIC]
**timestamp_format** | **string** | Date and time in ISO 8601 format. | [optional]
**period** | **int** | How frequently log files are finalized so they can be available for reading (in seconds). | [optional] [defaults to 3600]
**gzip_level** | **int** | What level of gzip encoding to have when sending logs (default `0`, no compression). If an explicit non-zero value is set, then `compression_codec` will default to \\\&quot;gzip.\\\&quot; Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error. | [optional] [defaults to 0]
**compression_codec** | **string** | The codec used for compression of your logs. Valid values are `zstd`, `snappy`, and `gzip`. If the specified codec is \\\&quot;gzip\\\&quot;, `gzip_level` will default to 3. To specify a different level, leave `compression_codec` blank and explicitly set the level using `gzip_level`. Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error. | [optional] [one of: 'zstd', 'snappy', 'gzip']
**address** | **string** | An hostname or IPv4 address. | [optional]
**hostname** | **string** | Hostname used. | [optional]
**ipv4** | **string** | IPv4 address of the host. | [optional]
**password** | **string** | The password for the server. For anonymous use an email address. | [optional]
**path** | **string** | The path to upload log files to. If the path ends in `/` then it is treated as a directory. | [optional]
**port** | **int** | The port number. | [optional] [defaults to 21]
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [defaults to 'null']
**user** | **string** | The username for the server. Can be anonymous. | [optional]

### Return type

[**\Fastly\Model\LoggingFtpResponse**](../Model/LoggingFtpResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogFtp()`

```php
deleteLogFtp($options): object // Delete an FTP log endpoint
```

Delete the FTP for a particular service and version.

### Example
```php
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

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogFtp()`

```php
getLogFtp($options): \Fastly\Model\LoggingFtpResponse // Get an FTP log endpoint
```

Get the FTP for a particular service and version.

### Example
```php
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
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional] [one of: 'none', 'waf_debug', 'null']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [defaults to '%h %l %u %t "%r" %&gt;s %b']
**message_type** | **string** | How the message should be formatted. | [optional] [one of: 'classic', 'loggly', 'logplex', 'blank'] [defaults to MESSAGE_TYPE_CLASSIC]
**timestamp_format** | **string** | Date and time in ISO 8601 format. | [optional]
**period** | **int** | How frequently log files are finalized so they can be available for reading (in seconds). | [optional] [defaults to 3600]
**gzip_level** | **int** | What level of gzip encoding to have when sending logs (default `0`, no compression). If an explicit non-zero value is set, then `compression_codec` will default to \\\&quot;gzip.\\\&quot; Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error. | [optional] [defaults to 0]
**compression_codec** | **string** | The codec used for compression of your logs. Valid values are `zstd`, `snappy`, and `gzip`. If the specified codec is \\\&quot;gzip\\\&quot;, `gzip_level` will default to 3. To specify a different level, leave `compression_codec` blank and explicitly set the level using `gzip_level`. Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error. | [optional] [one of: 'zstd', 'snappy', 'gzip']
**address** | **string** | An hostname or IPv4 address. | [optional]
**hostname** | **string** | Hostname used. | [optional]
**ipv4** | **string** | IPv4 address of the host. | [optional]
**password** | **string** | The password for the server. For anonymous use an email address. | [optional]
**path** | **string** | The path to upload log files to. If the path ends in `/` then it is treated as a directory. | [optional]
**port** | **int** | The port number. | [optional] [defaults to 21]
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [defaults to 'null']
**user** | **string** | The username for the server. Can be anonymous. | [optional]

### Return type

[**\Fastly\Model\LoggingFtpResponse**](../Model/LoggingFtpResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
