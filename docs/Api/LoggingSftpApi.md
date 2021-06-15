# Fastly\Api\LoggingSftpApi


```php
$apiInstance = new Fastly\Api\LoggingSftpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | HTTP request | Description
------------- | ------------- | -------------
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
**service_id** | **string** |  |
**version_id** | **int** |  |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | [**\Fastly\Model\LoggingPlacement**](../Model/LoggingPlacement.md) |  | [optional]
**format_version** | [**\Fastly\Model\LoggingFormatVersion**](../Model/LoggingFormatVersion.md) |  | [optional]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [default to &#39;%h %l %u %t &quot;%r&quot; %&amp;gt;s %b&#39;]
**message_type** | [**\Fastly\Model\LoggingMessageType**](../Model/LoggingMessageType.md) |  | [optional]
**timestamp_format** | **string** | Date and time in ISO 8601 format. | [optional]
**period** | **int** | How frequently log files are finalized so they can be available for reading (in seconds). | [optional] [default to 3600]
**gzip_level** | **int** | What level of gzip encoding to have when sending logs (default &#x60;0&#x60;, no compression). If an explicit non-zero value is set, then &#x60;compression_codec&#x60; will default to \\\&quot;gzip.\\\&quot; Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. | [optional] [default to 0]
**compression_codec** | [**\Fastly\Model\LoggingCompressionCodec**](../Model/LoggingCompressionCodec.md) |  | [optional]
**address** | **string** | A hostname or IPv4 address. | [optional]
**port** | [**mixed**](../Model/mixed.md) | The port number. | [optional]
**password** | **string** | The password for the server. If both &#x60;password&#x60; and &#x60;secret_key&#x60; are passed, &#x60;secret_key&#x60; will be used in preference. | [optional]
**path** | **string** | The path to upload logs to. | [optional] [default to &#39;null&#39;]
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [default to &#39;null&#39;]
**secret_key** | **string** | The SSH private key for the server. If both &#x60;password&#x60; and &#x60;secret_key&#x60; are passed, &#x60;secret_key&#x60; will be used in preference. | [optional] [default to &#39;null&#39;]
**ssh_known_hosts** | **string** | A list of host keys for all hosts we can connect to over SFTP. | [optional]
**user** | **string** | The username for the server. | [optional]

### Return type

[**\Fastly\Model\LoggingSftpResponse**](../Model/LoggingSftpResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogSftp()`

```php
deleteLogSftp($options): object // Delete an SFTP log endpoint
```

Delete the SFTP for a particular service and version.

### Example
```php
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
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_sftp_name** | **string** |  |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogSftp()`

```php
getLogSftp($options): \Fastly\Model\LoggingSftpResponse // Get an SFTP log endpoint
```

Get the SFTP for a particular service and version.

### Example
```php
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
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_sftp_name** | **string** |  |

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
**service_id** | **string** |  |
**version_id** | **int** |  |

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
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_sftp_name** | **string** |  |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | [**\Fastly\Model\LoggingPlacement**](../Model/LoggingPlacement.md) |  | [optional]
**format_version** | [**\Fastly\Model\LoggingFormatVersion**](../Model/LoggingFormatVersion.md) |  | [optional]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [default to &#39;%h %l %u %t &quot;%r&quot; %&amp;gt;s %b&#39;]
**message_type** | [**\Fastly\Model\LoggingMessageType**](../Model/LoggingMessageType.md) |  | [optional]
**timestamp_format** | **string** | Date and time in ISO 8601 format. | [optional]
**period** | **int** | How frequently log files are finalized so they can be available for reading (in seconds). | [optional] [default to 3600]
**gzip_level** | **int** | What level of gzip encoding to have when sending logs (default &#x60;0&#x60;, no compression). If an explicit non-zero value is set, then &#x60;compression_codec&#x60; will default to \\\&quot;gzip.\\\&quot; Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. | [optional] [default to 0]
**compression_codec** | [**\Fastly\Model\LoggingCompressionCodec**](../Model/LoggingCompressionCodec.md) |  | [optional]
**address** | **string** | A hostname or IPv4 address. | [optional]
**port** | [**mixed**](../Model/mixed.md) | The port number. | [optional]
**password** | **string** | The password for the server. If both &#x60;password&#x60; and &#x60;secret_key&#x60; are passed, &#x60;secret_key&#x60; will be used in preference. | [optional]
**path** | **string** | The path to upload logs to. | [optional] [default to &#39;null&#39;]
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [default to &#39;null&#39;]
**secret_key** | **string** | The SSH private key for the server. If both &#x60;password&#x60; and &#x60;secret_key&#x60; are passed, &#x60;secret_key&#x60; will be used in preference. | [optional] [default to &#39;null&#39;]
**ssh_known_hosts** | **string** | A list of host keys for all hosts we can connect to over SFTP. | [optional]
**user** | **string** | The username for the server. | [optional]

### Return type

[**\Fastly\Model\LoggingSftpResponse**](../Model/LoggingSftpResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
