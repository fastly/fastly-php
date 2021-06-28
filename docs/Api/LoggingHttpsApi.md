# Fastly\Api\LoggingHttpsApi


```php
$apiInstance = new Fastly\Api\LoggingHttpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**createLogHttps()**](LoggingHttpsApi.md#createLogHttps) | **POST** /service/{service_id}/version/{version_id}/logging/https | Create an HTTPS log endpoint
[**deleteLogHttps()**](LoggingHttpsApi.md#deleteLogHttps) | **DELETE** /service/{service_id}/version/{version_id}/logging/https/{logging_https_name} | Delete an HTTPS log endpoint
[**getLogHttps()**](LoggingHttpsApi.md#getLogHttps) | **GET** /service/{service_id}/version/{version_id}/logging/https/{logging_https_name} | Get an HTTPS log endpoint
[**listLogHttps()**](LoggingHttpsApi.md#listLogHttps) | **GET** /service/{service_id}/version/{version_id}/logging/https | List HTTPS log endpoints
[**updateLogHttps()**](LoggingHttpsApi.md#updateLogHttps) | **PUT** /service/{service_id}/version/{version_id}/logging/https/{logging_https_name} | Update an HTTPS log endpoint


## `createLogHttps()`

```php
createLogHttps($options): \Fastly\Model\LoggingHttpsResponse // Create an HTTPS log endpoint
```

Create an HTTPS object for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->createLogHttps($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingHttpsApi->createLogHttps: ', $e->getMessage(), PHP_EOL;
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
**tls_ca_cert** | **string** | A secure certificate to authenticate a server with. Must be in PEM format. | [optional] [default to &#39;null&#39;]
**tls_client_cert** | **string** | The client certificate used to make authenticated requests. Must be in PEM format. | [optional] [default to &#39;null&#39;]
**tls_client_key** | **string** | The client private key used to make authenticated requests. Must be in PEM format. | [optional] [default to &#39;null&#39;]
**tls_hostname** | **string** | The hostname to verify the server&#39;s certificate. This should be one of the Subject Alternative Name (SAN) fields for the certificate. Common Names (CN) are not supported. | [optional] [default to &#39;null&#39;]
**request_max_entries** | **int** | The maximum number of logs sent in one request. Defaults &#x60;0&#x60; (no limit). | [optional] [default to 0]
**request_max_bytes** | **int** | The maximum number of bytes sent in one request. Defaults &#x60;0&#x60; (no limit). | [optional] [default to 0]
**url** | **string** | The URL to send logs to. Must use HTTPS. Required. | [optional]
**content_type** | **string** | Content type of the header sent with the request. | [optional] [default to &#39;null&#39;]
**header_name** | **string** | Name of the custom header sent with the request. | [optional] [default to &#39;null&#39;]
**message_type** | [**\Fastly\Model\LoggingMessageType**](../Model/LoggingMessageType.md) |  | [optional]
**header_value** | **string** | Value of the custom header sent with the request. | [optional] [default to &#39;null&#39;]
**method** | **string** | HTTP method used for request. | [optional] [default to &#39;POST&#39;]
**json_format** | **string** | Enforces valid JSON formatting for log entries. | [optional]

### Return type

[**\Fastly\Model\LoggingHttpsResponse**](../Model/LoggingHttpsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogHttps()`

```php
deleteLogHttps($options): object // Delete an HTTPS log endpoint
```

Delete the HTTPS object for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->deleteLogHttps($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingHttpsApi->deleteLogHttps: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_https_name** | **string** |  |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogHttps()`

```php
getLogHttps($options): \Fastly\Model\LoggingHttpsResponse // Get an HTTPS log endpoint
```

Get the HTTPS object for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->getLogHttps($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingHttpsApi->getLogHttps: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_https_name** | **string** |  |

### Return type

[**\Fastly\Model\LoggingHttpsResponse**](../Model/LoggingHttpsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLogHttps()`

```php
listLogHttps($options): \Fastly\Model\LoggingHttpsResponse[] // List HTTPS log endpoints
```

List all of the HTTPS objects for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->listLogHttps($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingHttpsApi->listLogHttps: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |

### Return type

[**\Fastly\Model\LoggingHttpsResponse[]**](../Model/LoggingHttpsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateLogHttps()`

```php
updateLogHttps($options): \Fastly\Model\LoggingHttpsResponse // Update an HTTPS log endpoint
```

Update the HTTPS object for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->updateLogHttps($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingHttpsApi->updateLogHttps: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_https_name** | **string** |  |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | [**\Fastly\Model\LoggingPlacement**](../Model/LoggingPlacement.md) |  | [optional]
**format_version** | [**\Fastly\Model\LoggingFormatVersion**](../Model/LoggingFormatVersion.md) |  | [optional]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [default to &#39;%h %l %u %t &quot;%r&quot; %&amp;gt;s %b&#39;]
**tls_ca_cert** | **string** | A secure certificate to authenticate a server with. Must be in PEM format. | [optional] [default to &#39;null&#39;]
**tls_client_cert** | **string** | The client certificate used to make authenticated requests. Must be in PEM format. | [optional] [default to &#39;null&#39;]
**tls_client_key** | **string** | The client private key used to make authenticated requests. Must be in PEM format. | [optional] [default to &#39;null&#39;]
**tls_hostname** | **string** | The hostname to verify the server&#39;s certificate. This should be one of the Subject Alternative Name (SAN) fields for the certificate. Common Names (CN) are not supported. | [optional] [default to &#39;null&#39;]
**request_max_entries** | **int** | The maximum number of logs sent in one request. Defaults &#x60;0&#x60; (no limit). | [optional] [default to 0]
**request_max_bytes** | **int** | The maximum number of bytes sent in one request. Defaults &#x60;0&#x60; (no limit). | [optional] [default to 0]
**url** | **string** | The URL to send logs to. Must use HTTPS. Required. | [optional]
**content_type** | **string** | Content type of the header sent with the request. | [optional] [default to &#39;null&#39;]
**header_name** | **string** | Name of the custom header sent with the request. | [optional] [default to &#39;null&#39;]
**message_type** | [**\Fastly\Model\LoggingMessageType**](../Model/LoggingMessageType.md) |  | [optional]
**header_value** | **string** | Value of the custom header sent with the request. | [optional] [default to &#39;null&#39;]
**method** | **string** | HTTP method used for request. | [optional] [default to METHOD_POST]
**json_format** | **string** | Enforces valid JSON formatting for log entries. | [optional]

### Return type

[**\Fastly\Model\LoggingHttpsResponse**](../Model/LoggingHttpsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
