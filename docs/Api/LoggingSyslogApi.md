# Fastly\Api\LoggingSyslogApi


```php
$apiInstance = new Fastly\Api\LoggingSyslogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**createLogSyslog()**](LoggingSyslogApi.md#createLogSyslog) | **POST** /service/{service_id}/version/{version_id}/logging/syslog | Create a syslog log endpoint
[**deleteLogSyslog()**](LoggingSyslogApi.md#deleteLogSyslog) | **DELETE** /service/{service_id}/version/{version_id}/logging/syslog/{logging_syslog_name} | Delete a syslog log endpoint
[**getLogSyslog()**](LoggingSyslogApi.md#getLogSyslog) | **GET** /service/{service_id}/version/{version_id}/logging/syslog/{logging_syslog_name} | Get a syslog log endpoint
[**listLogSyslog()**](LoggingSyslogApi.md#listLogSyslog) | **GET** /service/{service_id}/version/{version_id}/logging/syslog | List Syslog log endpoints
[**updateLogSyslog()**](LoggingSyslogApi.md#updateLogSyslog) | **PUT** /service/{service_id}/version/{version_id}/logging/syslog/{logging_syslog_name} | Update a syslog log endpoint


## `createLogSyslog()`

```php
createLogSyslog($options): \Fastly\Model\LoggingSyslogResponse // Create a syslog log endpoint
```

Create a Syslog for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->createLogSyslog($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingSyslogApi->createLogSyslog: ', $e->getMessage(), PHP_EOL;
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
**address** | **string** | A hostname or IPv4 address. | [optional]
**port** | **int** | The port number. | [optional] [default to 514]
**message_type** | [**\Fastly\Model\LoggingMessageType**](../Model/LoggingMessageType.md) |  | [optional]
**hostname** | **string** | The hostname used for the syslog endpoint. | [optional]
**ipv4** | **string** | The IPv4 address used for the syslog endpoint. | [optional]
**token** | **string** | Whether to prepend each message with a specific token. | [optional] [default to &#39;null&#39;]
**use_tls** | [**\Fastly\Model\LoggingUseTls**](../Model/LoggingUseTls.md) |  | [optional]

### Return type

[**\Fastly\Model\LoggingSyslogResponse**](../Model/LoggingSyslogResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogSyslog()`

```php
deleteLogSyslog($options): object // Delete a syslog log endpoint
```

Delete the Syslog for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->deleteLogSyslog($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingSyslogApi->deleteLogSyslog: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_syslog_name** | **string** |  |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogSyslog()`

```php
getLogSyslog($options): \Fastly\Model\LoggingSyslogResponse // Get a syslog log endpoint
```

Get the Syslog for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->getLogSyslog($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingSyslogApi->getLogSyslog: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_syslog_name** | **string** |  |

### Return type

[**\Fastly\Model\LoggingSyslogResponse**](../Model/LoggingSyslogResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLogSyslog()`

```php
listLogSyslog($options): \Fastly\Model\LoggingSyslogResponse[] // List Syslog log endpoints
```

List all of the Syslogs for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->listLogSyslog($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingSyslogApi->listLogSyslog: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |

### Return type

[**\Fastly\Model\LoggingSyslogResponse[]**](../Model/LoggingSyslogResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateLogSyslog()`

```php
updateLogSyslog($options): \Fastly\Model\LoggingSyslogResponse // Update a syslog log endpoint
```

Update the Syslog for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->updateLogSyslog($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingSyslogApi->updateLogSyslog: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_syslog_name** | **string** |  |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | [**\Fastly\Model\LoggingPlacement**](../Model/LoggingPlacement.md) |  | [optional]
**format_version** | [**\Fastly\Model\LoggingFormatVersion**](../Model/LoggingFormatVersion.md) |  | [optional]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [default to &#39;%h %l %u %t &quot;%r&quot; %&amp;gt;s %b&#39;]
**tls_ca_cert** | **string** | A secure certificate to authenticate a server with. Must be in PEM format. | [optional] [default to &#39;null&#39;]
**tls_client_cert** | **string** | The client certificate used to make authenticated requests. Must be in PEM format. | [optional] [default to &#39;null&#39;]
**tls_client_key** | **string** | The client private key used to make authenticated requests. Must be in PEM format. | [optional] [default to &#39;null&#39;]
**tls_hostname** | **string** | The hostname to verify the server&#39;s certificate. This should be one of the Subject Alternative Name (SAN) fields for the certificate. Common Names (CN) are not supported. | [optional] [default to &#39;null&#39;]
**address** | **string** | A hostname or IPv4 address. | [optional]
**port** | **int** | The port number. | [optional] [default to 514]
**message_type** | [**\Fastly\Model\LoggingMessageType**](../Model/LoggingMessageType.md) |  | [optional]
**hostname** | **string** | The hostname used for the syslog endpoint. | [optional]
**ipv4** | **string** | The IPv4 address used for the syslog endpoint. | [optional]
**token** | **string** | Whether to prepend each message with a specific token. | [optional] [default to &#39;null&#39;]
**use_tls** | [**\Fastly\Model\LoggingUseTls**](../Model/LoggingUseTls.md) |  | [optional]

### Return type

[**\Fastly\Model\LoggingSyslogResponse**](../Model/LoggingSyslogResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
