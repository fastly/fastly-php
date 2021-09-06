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
**access_key** | **string** | Your OpenStack account access key. | [optional]
**bucket_name** | **string** | The name of your OpenStack container. | [optional]
**path** | **string** | The path to upload logs to. | [optional] [default to &#39;null&#39;]
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [default to &#39;null&#39;]
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
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_openstack_name** | **string** |  |

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
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_openstack_name** | **string** |  |

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
**service_id** | **string** |  |
**version_id** | **int** |  |

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
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_openstack_name** | **string** |  |
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
**access_key** | **string** | Your OpenStack account access key. | [optional]
**bucket_name** | **string** | The name of your OpenStack container. | [optional]
**path** | **string** | The path to upload logs to. | [optional] [default to &#39;null&#39;]
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [default to &#39;null&#39;]
**url** | **string** | Your OpenStack auth url. | [optional]
**user** | **string** | The username for your OpenStack account. | [optional]

### Return type

[**\Fastly\Model\LoggingOpenstackResponse**](../Model/LoggingOpenstackResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
