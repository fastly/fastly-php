# Fastly\Api\LoggingAzureblobApi


```php
$apiInstance = new Fastly\Api\LoggingAzureblobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**createLogAzure()**](LoggingAzureblobApi.md#createLogAzure) | **POST** /service/{service_id}/version/{version_id}/logging/azureblob | Create an Azure Blob Storage log endpoint
[**deleteLogAzure()**](LoggingAzureblobApi.md#deleteLogAzure) | **DELETE** /service/{service_id}/version/{version_id}/logging/azureblob/{logging_azureblob_name} | Delete the Azure Blob Storage log endpoint
[**getLogAzure()**](LoggingAzureblobApi.md#getLogAzure) | **GET** /service/{service_id}/version/{version_id}/logging/azureblob/{logging_azureblob_name} | Get an Azure Blob Storage log endpoint
[**listLogAzure()**](LoggingAzureblobApi.md#listLogAzure) | **GET** /service/{service_id}/version/{version_id}/logging/azureblob | List Azure Blob Storage log endpoints
[**updateLogAzure()**](LoggingAzureblobApi.md#updateLogAzure) | **PUT** /service/{service_id}/version/{version_id}/logging/azureblob/{logging_azureblob_name} | Update an Azure Blob Storage log endpoint


## `createLogAzure()`

```php
createLogAzure($options): \Fastly\Model\LoggingAzureblobResponse // Create an Azure Blob Storage log endpoint
```

Create an Azure Blob Storage logging endpoint for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->createLogAzure($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingAzureblobApi->createLogAzure: ', $e->getMessage(), PHP_EOL;
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
**message_type** | **string** | How the message should be formatted. | [optional] [one of: 'classic', 'loggly', 'logplex', 'blank'] [defaults to 'classic']
**timestamp_format** | **string** | Date and time in ISO 8601 format. | [optional]
**period** | **int** | How frequently log files are finalized so they can be available for reading (in seconds). | [optional] [defaults to 3600]
**gzip_level** | **int** | What level of gzip encoding to have when sending logs (default `0`, no compression). If an explicit non-zero value is set, then `compression_codec` will default to \\\&quot;gzip.\\\&quot; Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error. | [optional] [defaults to 0]
**compression_codec** | **string** | The codec used for compression of your logs. Valid values are `zstd`, `snappy`, and `gzip`. If the specified codec is \\\&quot;gzip\\\&quot;, `gzip_level` will default to 3. To specify a different level, leave `compression_codec` blank and explicitly set the level using `gzip_level`. Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error. | [optional] [one of: 'zstd', 'snappy', 'gzip']
**path** | **string** | The path to upload logs to. | [optional] [defaults to 'null']
**account_name** | **string** | The unique Azure Blob Storage namespace in which your data objects are stored. Required. | [optional]
**container** | **string** | The name of the Azure Blob Storage container in which to store logs. Required. | [optional]
**sas_token** | **string** | The Azure shared access signature providing write access to the blob service objects. Be sure to update your token before it expires or the logging functionality will not work. Required. | [optional]
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [defaults to 'null']
**file_max_bytes** | **int** | The maximum number of bytes for each uploaded file. A value of 0 can be used to indicate there is no limit on the size of uploaded files, otherwise the minimum value is 1048576 bytes (1 MiB.) | [optional]

### Return type

[**\Fastly\Model\LoggingAzureblobResponse**](../Model/LoggingAzureblobResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogAzure()`

```php
deleteLogAzure($options): object // Delete the Azure Blob Storage log endpoint
```

Delete the Azure Blob Storage logging endpoint for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->deleteLogAzure($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingAzureblobApi->deleteLogAzure: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_azureblob_name** | **string** | The name for the real-time logging configuration. |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogAzure()`

```php
getLogAzure($options): \Fastly\Model\LoggingAzureblobResponse // Get an Azure Blob Storage log endpoint
```

Get the Azure Blob Storage logging endpoint for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->getLogAzure($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingAzureblobApi->getLogAzure: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_azureblob_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\LoggingAzureblobResponse**](../Model/LoggingAzureblobResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLogAzure()`

```php
listLogAzure($options): \Fastly\Model\LoggingAzureblobResponse[] // List Azure Blob Storage log endpoints
```

List all of the Azure Blob Storage logging endpoints for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->listLogAzure($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingAzureblobApi->listLogAzure: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\LoggingAzureblobResponse[]**](../Model/LoggingAzureblobResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateLogAzure()`

```php
updateLogAzure($options): \Fastly\Model\LoggingAzureblobResponse // Update an Azure Blob Storage log endpoint
```

Update the Azure Blob Storage logging endpoint for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->updateLogAzure($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingAzureblobApi->updateLogAzure: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_azureblob_name** | **string** | The name for the real-time logging configuration. |
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
**path** | **string** | The path to upload logs to. | [optional] [defaults to 'null']
**account_name** | **string** | The unique Azure Blob Storage namespace in which your data objects are stored. Required. | [optional]
**container** | **string** | The name of the Azure Blob Storage container in which to store logs. Required. | [optional]
**sas_token** | **string** | The Azure shared access signature providing write access to the blob service objects. Be sure to update your token before it expires or the logging functionality will not work. Required. | [optional]
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [defaults to 'null']
**file_max_bytes** | **int** | The maximum number of bytes for each uploaded file. A value of 0 can be used to indicate there is no limit on the size of uploaded files, otherwise the minimum value is 1048576 bytes (1 MiB.) | [optional]

### Return type

[**\Fastly\Model\LoggingAzureblobResponse**](../Model/LoggingAzureblobResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
