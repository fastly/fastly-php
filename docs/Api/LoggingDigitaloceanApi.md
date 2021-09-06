# Fastly\Api\LoggingDigitaloceanApi


```php
$apiInstance = new Fastly\Api\LoggingDigitaloceanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
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
**service_id** | **string** |  |
**version_id** | **int** |  |
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [default to &#39;%h %l %u %t &quot;%r&quot; %&amp;gt;s %b&#39;]
**format_version** | [**\Fastly\Model\LoggingFormatVersion**](../Model/LoggingFormatVersion.md) |  | [optional]
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | [**\Fastly\Model\LoggingPlacement**](../Model/LoggingPlacement.md) |  | [optional]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**compression_codec** | [**\Fastly\Model\LoggingCompressionCodec**](../Model/LoggingCompressionCodec.md) |  | [optional]
**gzip_level** | **int** | What level of gzip encoding to have when sending logs (default &#x60;0&#x60;, no compression). If an explicit non-zero value is set, then &#x60;compression_codec&#x60; will default to \\\&quot;gzip.\\\&quot; Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. | [optional] [default to 0]
**message_type** | [**\Fastly\Model\LoggingMessageType**](../Model/LoggingMessageType.md) |  | [optional]
**period** | **int** | How frequently log files are finalized so they can be available for reading (in seconds). | [optional] [default to 3600]
**timestamp_format** | **string** | Date and time in ISO 8601 format. | [optional]
**access_key** | **string** | Your DigitalOcean Spaces account access key. | [optional]
**bucket_name** | **string** | The name of the DigitalOcean Space. | [optional]
**domain** | **string** | The domain of the DigitalOcean Spaces endpoint. | [optional] [default to &#39;nyc3.digitaloceanspaces.com&#39;]
**path** | **string** | The path to upload logs to. | [optional] [default to &#39;null&#39;]
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [default to &#39;null&#39;]
**secret_key** | **string** | Your DigitalOcean Spaces account secret key. | [optional]

### Return type

[**\Fastly\Model\LoggingDigitaloceanResponse**](../Model/LoggingDigitaloceanResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogDigocean()`

```php
deleteLogDigocean($options): object // Delete a DigitalOcean Spaces log endpoint
```

Delete the DigitalOcean Space for a particular service and version.

### Example
```php
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
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_digitalocean_name** | **string** |  |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogDigocean()`

```php
getLogDigocean($options): \Fastly\Model\LoggingDigitaloceanResponse // Get a DigitalOcean Spaces log endpoint
```

Get the DigitalOcean Space for a particular service and version.

### Example
```php
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
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_digitalocean_name** | **string** |  |

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
**service_id** | **string** |  |
**version_id** | **int** |  |

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
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_digitalocean_name** | **string** |  |
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [default to &#39;%h %l %u %t &quot;%r&quot; %&amp;gt;s %b&#39;]
**format_version** | [**\Fastly\Model\LoggingFormatVersion**](../Model/LoggingFormatVersion.md) |  | [optional]
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | [**\Fastly\Model\LoggingPlacement**](../Model/LoggingPlacement.md) |  | [optional]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**compression_codec** | [**\Fastly\Model\LoggingCompressionCodec**](../Model/LoggingCompressionCodec.md) |  | [optional]
**gzip_level** | **int** | What level of gzip encoding to have when sending logs (default &#x60;0&#x60;, no compression). If an explicit non-zero value is set, then &#x60;compression_codec&#x60; will default to \\\&quot;gzip.\\\&quot; Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. | [optional] [default to 0]
**message_type** | [**\Fastly\Model\LoggingMessageType**](../Model/LoggingMessageType.md) |  | [optional]
**period** | **int** | How frequently log files are finalized so they can be available for reading (in seconds). | [optional] [default to 3600]
**timestamp_format** | **string** | Date and time in ISO 8601 format. | [optional]
**access_key** | **string** | Your DigitalOcean Spaces account access key. | [optional]
**bucket_name** | **string** | The name of the DigitalOcean Space. | [optional]
**domain** | **string** | The domain of the DigitalOcean Spaces endpoint. | [optional] [default to &#39;nyc3.digitaloceanspaces.com&#39;]
**path** | **string** | The path to upload logs to. | [optional] [default to &#39;null&#39;]
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [default to &#39;null&#39;]
**secret_key** | **string** | Your DigitalOcean Spaces account secret key. | [optional]

### Return type

[**\Fastly\Model\LoggingDigitaloceanResponse**](../Model/LoggingDigitaloceanResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
