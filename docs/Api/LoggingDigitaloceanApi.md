# Fastly\Api\LoggingDigitaloceanApi


```php
$apiInstance = new Fastly\Api\LoggingDigitaloceanApi(
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
[**createLogDigocean()**](LoggingDigitaloceanApi.md#createLogDigocean) | **POST** /service/{service_id}/version/{version_id}/logging/digitalocean | Create a DigitalOcean Spaces log endpoint
[**deleteLogDigocean()**](LoggingDigitaloceanApi.md#deleteLogDigocean) | **DELETE** /service/{service_id}/version/{version_id}/logging/digitalocean/{logging_digitalocean_name} | Delete a DigitalOcean Spaces log endpoint
[**getLogDigocean()**](LoggingDigitaloceanApi.md#getLogDigocean) | **GET** /service/{service_id}/version/{version_id}/logging/digitalocean/{logging_digitalocean_name} | Get a DigitalOcean Spaces log endpoint
[**listLogDigocean()**](LoggingDigitaloceanApi.md#listLogDigocean) | **GET** /service/{service_id}/version/{version_id}/logging/digitalocean | List DigitalOcean Spaces log endpoints
[**updateLogDigocean()**](LoggingDigitaloceanApi.md#updateLogDigocean) | **PUT** /service/{service_id}/version/{version_id}/logging/digitalocean/{logging_digitalocean_name} | Update a DigitalOcean Spaces log endpoint


## `createLogDigocean()`

```php
createLogDigocean($options): \Fastly\Model\LoggingDigitaloceanResponse // Create a DigitalOcean Spaces log endpoint
```

Create a DigitalOcean Space for a particular service and version.

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
$options['bucket_name'] = 'bucket_name_example'; // string | The name of the DigitalOcean Space.
$options['access_key'] = 'access_key_example'; // string | Your DigitalOcean Spaces account access key.
$options['secret_key'] = 'secret_key_example'; // string | Your DigitalOcean Spaces account secret key.
$options['domain'] = 'nyc3.digitaloceanspaces.com'; // string | The domain of the DigitalOcean Spaces endpoint.
$options['path'] = 'null'; // string | The path to upload logs to.
$options['public_key'] = 'null'; // string | A PGP public key that Fastly will use to encrypt your log files before writing them to disk.

try {
    $result = $apiInstance->createLogDigocean($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingDigitaloceanApi->createLogDigocean: ', $e->getMessage(), PHP_EOL;
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
**bucket_name** | **string** | The name of the DigitalOcean Space. | [optional]
**access_key** | **string** | Your DigitalOcean Spaces account access key. | [optional]
**secret_key** | **string** | Your DigitalOcean Spaces account secret key. | [optional]
**domain** | **string** | The domain of the DigitalOcean Spaces endpoint. | [optional] [defaults to 'nyc3.digitaloceanspaces.com']
**path** | **string** | The path to upload logs to. | [optional] [defaults to 'null']
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [defaults to 'null']

### Return type

[**\Fastly\Model\LoggingDigitaloceanResponse**](../Model/LoggingDigitaloceanResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogDigocean()`

```php
deleteLogDigocean($options): \Fastly\Model\InlineResponse200 // Delete a DigitalOcean Spaces log endpoint
```

Delete the DigitalOcean Space for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_digitalocean_name'] = 'logging_digitalocean_name_example'; // string | The name for the real-time logging configuration.

try {
    $result = $apiInstance->deleteLogDigocean($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingDigitaloceanApi->deleteLogDigocean: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_digitalocean_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogDigocean()`

```php
getLogDigocean($options): \Fastly\Model\LoggingDigitaloceanResponse // Get a DigitalOcean Spaces log endpoint
```

Get the DigitalOcean Space for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_digitalocean_name'] = 'logging_digitalocean_name_example'; // string | The name for the real-time logging configuration.

try {
    $result = $apiInstance->getLogDigocean($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingDigitaloceanApi->getLogDigocean: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_digitalocean_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\LoggingDigitaloceanResponse**](../Model/LoggingDigitaloceanResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLogDigocean()`

```php
listLogDigocean($options): \Fastly\Model\LoggingDigitaloceanResponse[] // List DigitalOcean Spaces log endpoints
```

List all of the DigitalOcean Spaces for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

try {
    $result = $apiInstance->listLogDigocean($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingDigitaloceanApi->listLogDigocean: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\LoggingDigitaloceanResponse[]**](../Model/LoggingDigitaloceanResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateLogDigocean()`

```php
updateLogDigocean($options): \Fastly\Model\LoggingDigitaloceanResponse // Update a DigitalOcean Spaces log endpoint
```

Update the DigitalOcean Space for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_digitalocean_name'] = 'logging_digitalocean_name_example'; // string | The name for the real-time logging configuration.
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
$options['bucket_name'] = 'bucket_name_example'; // string | The name of the DigitalOcean Space.
$options['access_key'] = 'access_key_example'; // string | Your DigitalOcean Spaces account access key.
$options['secret_key'] = 'secret_key_example'; // string | Your DigitalOcean Spaces account secret key.
$options['domain'] = 'nyc3.digitaloceanspaces.com'; // string | The domain of the DigitalOcean Spaces endpoint.
$options['path'] = 'null'; // string | The path to upload logs to.
$options['public_key'] = 'null'; // string | A PGP public key that Fastly will use to encrypt your log files before writing them to disk.

try {
    $result = $apiInstance->updateLogDigocean($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingDigitaloceanApi->updateLogDigocean: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_digitalocean_name** | **string** | The name for the real-time logging configuration. |
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
**bucket_name** | **string** | The name of the DigitalOcean Space. | [optional]
**access_key** | **string** | Your DigitalOcean Spaces account access key. | [optional]
**secret_key** | **string** | Your DigitalOcean Spaces account secret key. | [optional]
**domain** | **string** | The domain of the DigitalOcean Spaces endpoint. | [optional] [defaults to 'nyc3.digitaloceanspaces.com']
**path** | **string** | The path to upload logs to. | [optional] [defaults to 'null']
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [defaults to 'null']

### Return type

[**\Fastly\Model\LoggingDigitaloceanResponse**](../Model/LoggingDigitaloceanResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
