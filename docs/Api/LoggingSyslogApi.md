# Fastly\Api\LoggingSyslogApi


```php
$apiInstance = new Fastly\Api\LoggingSyslogApi(
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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['name'] = 'name_example'; // string | The name for the real-time logging configuration.
$options['placement'] = 'placement_example'; // string | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
$options['response_condition'] = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$options['format'] = '%h %l %u %t \"%r\" %&gt;s %b'; // string | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/).
$options['log_processing_region'] = 'none'; // string | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global.
$options['format_version'] = self::FORMAT_VERSION_v2; // int | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
$options['tls_ca_cert'] = 'null'; // string | A secure certificate to authenticate a server with. Must be in PEM format.
$options['tls_client_cert'] = 'null'; // string | The client certificate used to make authenticated requests. Must be in PEM format.
$options['tls_client_key'] = 'null'; // string | The client private key used to make authenticated requests. Must be in PEM format.
$options['tls_hostname'] = 'null'; // string | The hostname to verify the server's certificate. This should be one of the Subject Alternative Name (SAN) fields for the certificate. Common Names (CN) are not supported.
$options['address'] = 'address_example'; // string | A hostname or IPv4 address.
$options['port'] = 514; // int | The port number.
$options['message_type'] = new \Fastly\Model\LoggingMessageType(); // \Fastly\Model\LoggingMessageType
$options['hostname'] = 'hostname_example'; // string | The hostname used for the syslog endpoint.
$options['ipv4'] = 'ipv4_example'; // string | The IPv4 address used for the syslog endpoint.
$options['token'] = 'null'; // string | Whether to prepend each message with a specific token.
$options['use_tls'] = new \Fastly\Model\LoggingUseTlsString(); // \Fastly\Model\LoggingUseTlsString

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional] [one of: 'none', 'null']
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). | [optional] [defaults to '%h %l %u %t "%r" %&gt;s %b']
**log_processing_region** | **string** | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global. | [optional] [one of: 'none', 'eu', 'us'] [defaults to 'none']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**tls_ca_cert** | **string** | A secure certificate to authenticate a server with. Must be in PEM format. | [optional] [defaults to 'null']
**tls_client_cert** | **string** | The client certificate used to make authenticated requests. Must be in PEM format. | [optional] [defaults to 'null']
**tls_client_key** | **string** | The client private key used to make authenticated requests. Must be in PEM format. | [optional] [defaults to 'null']
**tls_hostname** | **string** | The hostname to verify the server&#39;s certificate. This should be one of the Subject Alternative Name (SAN) fields for the certificate. Common Names (CN) are not supported. | [optional] [defaults to 'null']
**address** | **string** | A hostname or IPv4 address. | [optional]
**port** | **int** | The port number. | [optional] [defaults to 514]
**message_type** | [**\Fastly\Model\LoggingMessageType**](../Model/LoggingMessageType.md) |  | [optional]
**hostname** | **string** | The hostname used for the syslog endpoint. | [optional]
**ipv4** | **string** | The IPv4 address used for the syslog endpoint. | [optional]
**token** | **string** | Whether to prepend each message with a specific token. | [optional] [defaults to 'null']
**use_tls** | [**\Fastly\Model\LoggingUseTlsString**](../Model/LoggingUseTlsString.md) |  | [optional]

### Return type

[**\Fastly\Model\LoggingSyslogResponse**](../Model/LoggingSyslogResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogSyslog()`

```php
deleteLogSyslog($options): \Fastly\Model\InlineResponse200 // Delete a syslog log endpoint
```

Delete the Syslog for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_syslog_name'] = 'logging_syslog_name_example'; // string | The name for the real-time logging configuration.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_syslog_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogSyslog()`

```php
getLogSyslog($options): \Fastly\Model\LoggingSyslogResponse // Get a syslog log endpoint
```

Get the Syslog for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_syslog_name'] = 'logging_syslog_name_example'; // string | The name for the real-time logging configuration.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_syslog_name** | **string** | The name for the real-time logging configuration. |

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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_syslog_name'] = 'logging_syslog_name_example'; // string | The name for the real-time logging configuration.
$options['name'] = 'name_example'; // string | The name for the real-time logging configuration.
$options['placement'] = 'placement_example'; // string | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
$options['response_condition'] = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$options['format'] = '%h %l %u %t \"%r\" %&gt;s %b'; // string | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/).
$options['log_processing_region'] = 'none'; // string | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global.
$options['format_version'] = self::FORMAT_VERSION_v2; // int | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
$options['tls_ca_cert'] = 'null'; // string | A secure certificate to authenticate a server with. Must be in PEM format.
$options['tls_client_cert'] = 'null'; // string | The client certificate used to make authenticated requests. Must be in PEM format.
$options['tls_client_key'] = 'null'; // string | The client private key used to make authenticated requests. Must be in PEM format.
$options['tls_hostname'] = 'null'; // string | The hostname to verify the server's certificate. This should be one of the Subject Alternative Name (SAN) fields for the certificate. Common Names (CN) are not supported.
$options['address'] = 'address_example'; // string | A hostname or IPv4 address.
$options['port'] = 514; // int | The port number.
$options['message_type'] = new \Fastly\Model\LoggingMessageType(); // \Fastly\Model\LoggingMessageType
$options['hostname'] = 'hostname_example'; // string | The hostname used for the syslog endpoint.
$options['ipv4'] = 'ipv4_example'; // string | The IPv4 address used for the syslog endpoint.
$options['token'] = 'null'; // string | Whether to prepend each message with a specific token.
$options['use_tls'] = new \Fastly\Model\LoggingUseTlsString(); // \Fastly\Model\LoggingUseTlsString

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_syslog_name** | **string** | The name for the real-time logging configuration. |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional] [one of: 'none', 'null']
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). | [optional] [defaults to '%h %l %u %t "%r" %&gt;s %b']
**log_processing_region** | **string** | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global. | [optional] [one of: 'none', 'eu', 'us'] [defaults to 'none']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**tls_ca_cert** | **string** | A secure certificate to authenticate a server with. Must be in PEM format. | [optional] [defaults to 'null']
**tls_client_cert** | **string** | The client certificate used to make authenticated requests. Must be in PEM format. | [optional] [defaults to 'null']
**tls_client_key** | **string** | The client private key used to make authenticated requests. Must be in PEM format. | [optional] [defaults to 'null']
**tls_hostname** | **string** | The hostname to verify the server&#39;s certificate. This should be one of the Subject Alternative Name (SAN) fields for the certificate. Common Names (CN) are not supported. | [optional] [defaults to 'null']
**address** | **string** | A hostname or IPv4 address. | [optional]
**port** | **int** | The port number. | [optional] [defaults to 514]
**message_type** | [**\Fastly\Model\LoggingMessageType**](../Model/LoggingMessageType.md) |  | [optional]
**hostname** | **string** | The hostname used for the syslog endpoint. | [optional]
**ipv4** | **string** | The IPv4 address used for the syslog endpoint. | [optional]
**token** | **string** | Whether to prepend each message with a specific token. | [optional] [defaults to 'null']
**use_tls** | [**\Fastly\Model\LoggingUseTlsString**](../Model/LoggingUseTlsString.md) |  | [optional]

### Return type

[**\Fastly\Model\LoggingSyslogResponse**](../Model/LoggingSyslogResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
