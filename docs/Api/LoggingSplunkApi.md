# Fastly\Api\LoggingSplunkApi


```php
$apiInstance = new Fastly\Api\LoggingSplunkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**createLogSplunk()**](LoggingSplunkApi.md#createLogSplunk) | **POST** /service/{service_id}/version/{version_id}/logging/splunk | Create a Splunk log endpoint
[**deleteLogSplunk()**](LoggingSplunkApi.md#deleteLogSplunk) | **DELETE** /service/{service_id}/version/{version_id}/logging/splunk/{logging_splunk_name} | Delete a Splunk log endpoint
[**getLogSplunk()**](LoggingSplunkApi.md#getLogSplunk) | **GET** /service/{service_id}/version/{version_id}/logging/splunk/{logging_splunk_name} | Get a Splunk log endpoint
[**listLogSplunk()**](LoggingSplunkApi.md#listLogSplunk) | **GET** /service/{service_id}/version/{version_id}/logging/splunk | List Splunk log endpoints
[**updateLogSplunk()**](LoggingSplunkApi.md#updateLogSplunk) | **PUT** /service/{service_id}/version/{version_id}/logging/splunk/{logging_splunk_name} | Update a Splunk log endpoint


## `createLogSplunk()`

```php
createLogSplunk($options): \Fastly\Model\LoggingSplunkResponse // Create a Splunk log endpoint
```

Create a Splunk logging object for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->createLogSplunk($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingSplunkApi->createLogSplunk: ', $e->getMessage(), PHP_EOL;
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
**request_max_entries** | **int** | The maximum number of logs sent in one request. Defaults &#x60;0&#x60; for unbounded. | [optional] [default to 0]
**request_max_bytes** | **int** | The maximum number of bytes sent in one request. Defaults &#x60;0&#x60; for unbounded. | [optional] [default to 0]
**url** | **string** | The URL to post logs to. | [optional]
**token** | **string** | A Splunk token for use in posting logs over HTTP to your collector. | [optional]
**use_tls** | [**\Fastly\Model\LoggingUseTls**](../Model/LoggingUseTls.md) |  | [optional]

### Return type

[**\Fastly\Model\LoggingSplunkResponse**](../Model/LoggingSplunkResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogSplunk()`

```php
deleteLogSplunk($options): object // Delete a Splunk log endpoint
```

Delete the Splunk logging object for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->deleteLogSplunk($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingSplunkApi->deleteLogSplunk: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_splunk_name** | **string** |  |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogSplunk()`

```php
getLogSplunk($options): \Fastly\Model\LoggingSplunkResponse // Get a Splunk log endpoint
```

Get the details for a Splunk logging object for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->getLogSplunk($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingSplunkApi->getLogSplunk: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_splunk_name** | **string** |  |

### Return type

[**\Fastly\Model\LoggingSplunkResponse**](../Model/LoggingSplunkResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLogSplunk()`

```php
listLogSplunk($options): \Fastly\Model\LoggingSplunkResponse[] // List Splunk log endpoints
```

List all of the Splunk logging objects for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->listLogSplunk($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingSplunkApi->listLogSplunk: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |

### Return type

[**\Fastly\Model\LoggingSplunkResponse[]**](../Model/LoggingSplunkResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateLogSplunk()`

```php
updateLogSplunk($options): \Fastly\Model\LoggingSplunkResponse // Update a Splunk log endpoint
```

Update the Splunk logging object for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->updateLogSplunk($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingSplunkApi->updateLogSplunk: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_splunk_name** | **string** |  |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | [**\Fastly\Model\LoggingPlacement**](../Model/LoggingPlacement.md) |  | [optional]
**format_version** | [**\Fastly\Model\LoggingFormatVersion**](../Model/LoggingFormatVersion.md) |  | [optional]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [default to &#39;%h %l %u %t &quot;%r&quot; %&amp;gt;s %b&#39;]
**tls_ca_cert** | **string** | A secure certificate to authenticate a server with. Must be in PEM format. | [optional] [default to &#39;null&#39;]
**tls_client_cert** | **string** | The client certificate used to make authenticated requests. Must be in PEM format. | [optional] [default to &#39;null&#39;]
**tls_client_key** | **string** | The client private key used to make authenticated requests. Must be in PEM format. | [optional] [default to &#39;null&#39;]
**tls_hostname** | **string** | The hostname to verify the server&#39;s certificate. This should be one of the Subject Alternative Name (SAN) fields for the certificate. Common Names (CN) are not supported. | [optional] [default to &#39;null&#39;]
**request_max_entries** | **int** | The maximum number of logs sent in one request. Defaults &#x60;0&#x60; for unbounded. | [optional] [default to 0]
**request_max_bytes** | **int** | The maximum number of bytes sent in one request. Defaults &#x60;0&#x60; for unbounded. | [optional] [default to 0]
**url** | **string** | The URL to post logs to. | [optional]
**token** | **string** | A Splunk token for use in posting logs over HTTP to your collector. | [optional]
**use_tls** | [**\Fastly\Model\LoggingUseTls**](../Model/LoggingUseTls.md) |  | [optional]

### Return type

[**\Fastly\Model\LoggingSplunkResponse**](../Model/LoggingSplunkResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
