# Fastly\Api\LoggingHttpsApi


```php
$apiInstance = new Fastly\Api\LoggingHttpsApi(
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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['name'] = 'name_example'; // string | The name for the real-time logging configuration.
$options['placement'] = 'placement_example'; // string | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
$options['response_condition'] = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$options['format'] = '%h %l %u %t \"%r\" %&gt;s %b'; // string | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats).
$options['format_version'] = self::FORMAT_VERSION_v2; // int | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
$options['tls_ca_cert'] = 'null'; // string | A secure certificate to authenticate a server with. Must be in PEM format.
$options['tls_client_cert'] = 'null'; // string | The client certificate used to make authenticated requests. Must be in PEM format.
$options['tls_client_key'] = 'null'; // string | The client private key used to make authenticated requests. Must be in PEM format.
$options['tls_hostname'] = 'null'; // string | The hostname to verify the server's certificate. This should be one of the Subject Alternative Name (SAN) fields for the certificate. Common Names (CN) are not supported.
$options['request_max_entries'] = 0; // int | The maximum number of logs sent in one request. Defaults `0` (10k).
$options['request_max_bytes'] = 0; // int | The maximum number of bytes sent in one request. Defaults `0` (100MB).
$options['url'] = 'url_example'; // string | The URL to send logs to. Must use HTTPS. Required.
$options['content_type'] = 'null'; // string | Content type of the header sent with the request.
$options['header_name'] = 'null'; // string | Name of the custom header sent with the request.
$options['message_type'] = new \Fastly\Model\LoggingMessageType(); // \Fastly\Model\LoggingMessageType
$options['header_value'] = 'null'; // string | Value of the custom header sent with the request.
$options['method'] = 'POST'; // string | HTTP method used for request.
$options['json_format'] = 'json_format_example'; // string | Enforces valid JSON formatting for log entries.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional] [one of: 'none', 'waf_debug', 'null']
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [defaults to '%h %l %u %t "%r" %&gt;s %b']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**tls_ca_cert** | **string** | A secure certificate to authenticate a server with. Must be in PEM format. | [optional] [defaults to 'null']
**tls_client_cert** | **string** | The client certificate used to make authenticated requests. Must be in PEM format. | [optional] [defaults to 'null']
**tls_client_key** | **string** | The client private key used to make authenticated requests. Must be in PEM format. | [optional] [defaults to 'null']
**tls_hostname** | **string** | The hostname to verify the server&#39;s certificate. This should be one of the Subject Alternative Name (SAN) fields for the certificate. Common Names (CN) are not supported. | [optional] [defaults to 'null']
**request_max_entries** | **int** | The maximum number of logs sent in one request. Defaults `0` (10k). | [optional] [defaults to 0]
**request_max_bytes** | **int** | The maximum number of bytes sent in one request. Defaults `0` (100MB). | [optional] [defaults to 0]
**url** | **string** | The URL to send logs to. Must use HTTPS. Required. | [optional]
**content_type** | **string** | Content type of the header sent with the request. | [optional] [defaults to 'null']
**header_name** | **string** | Name of the custom header sent with the request. | [optional] [defaults to 'null']
**message_type** | [**\Fastly\Model\LoggingMessageType**](../Model/LoggingMessageType.md) |  | [optional]
**header_value** | **string** | Value of the custom header sent with the request. | [optional] [defaults to 'null']
**method** | **string** | HTTP method used for request. | [optional] [one of: 'POST', 'PUT'] [defaults to 'POST']
**json_format** | **string** | Enforces valid JSON formatting for log entries. | [optional] [one of: '0', '1', '2']

### Return type

[**\Fastly\Model\LoggingHttpsResponse**](../Model/LoggingHttpsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogHttps()`

```php
deleteLogHttps($options): \Fastly\Model\InlineResponse200 // Delete an HTTPS log endpoint
```

Delete the HTTPS object for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_https_name'] = 'logging_https_name_example'; // string | The name for the real-time logging configuration.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_https_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogHttps()`

```php
getLogHttps($options): \Fastly\Model\LoggingHttpsResponse // Get an HTTPS log endpoint
```

Get the HTTPS object for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_https_name'] = 'logging_https_name_example'; // string | The name for the real-time logging configuration.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_https_name** | **string** | The name for the real-time logging configuration. |

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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_https_name'] = 'logging_https_name_example'; // string | The name for the real-time logging configuration.
$options['name'] = 'name_example'; // string | The name for the real-time logging configuration.
$options['placement'] = 'placement_example'; // string | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
$options['response_condition'] = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$options['format'] = '%h %l %u %t \"%r\" %&gt;s %b'; // string | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats).
$options['format_version'] = self::FORMAT_VERSION_v2; // int | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
$options['tls_ca_cert'] = 'null'; // string | A secure certificate to authenticate a server with. Must be in PEM format.
$options['tls_client_cert'] = 'null'; // string | The client certificate used to make authenticated requests. Must be in PEM format.
$options['tls_client_key'] = 'null'; // string | The client private key used to make authenticated requests. Must be in PEM format.
$options['tls_hostname'] = 'null'; // string | The hostname to verify the server's certificate. This should be one of the Subject Alternative Name (SAN) fields for the certificate. Common Names (CN) are not supported.
$options['request_max_entries'] = 0; // int | The maximum number of logs sent in one request. Defaults `0` (10k).
$options['request_max_bytes'] = 0; // int | The maximum number of bytes sent in one request. Defaults `0` (100MB).
$options['url'] = 'url_example'; // string | The URL to send logs to. Must use HTTPS. Required.
$options['content_type'] = 'null'; // string | Content type of the header sent with the request.
$options['header_name'] = 'null'; // string | Name of the custom header sent with the request.
$options['message_type'] = new \Fastly\Model\LoggingMessageType(); // \Fastly\Model\LoggingMessageType
$options['header_value'] = 'null'; // string | Value of the custom header sent with the request.
$options['method'] = 'POST'; // string | HTTP method used for request.
$options['json_format'] = 'json_format_example'; // string | Enforces valid JSON formatting for log entries.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_https_name** | **string** | The name for the real-time logging configuration. |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional] [one of: 'none', 'waf_debug', 'null']
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [defaults to '%h %l %u %t "%r" %&gt;s %b']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**tls_ca_cert** | **string** | A secure certificate to authenticate a server with. Must be in PEM format. | [optional] [defaults to 'null']
**tls_client_cert** | **string** | The client certificate used to make authenticated requests. Must be in PEM format. | [optional] [defaults to 'null']
**tls_client_key** | **string** | The client private key used to make authenticated requests. Must be in PEM format. | [optional] [defaults to 'null']
**tls_hostname** | **string** | The hostname to verify the server&#39;s certificate. This should be one of the Subject Alternative Name (SAN) fields for the certificate. Common Names (CN) are not supported. | [optional] [defaults to 'null']
**request_max_entries** | **int** | The maximum number of logs sent in one request. Defaults `0` (10k). | [optional] [defaults to 0]
**request_max_bytes** | **int** | The maximum number of bytes sent in one request. Defaults `0` (100MB). | [optional] [defaults to 0]
**url** | **string** | The URL to send logs to. Must use HTTPS. Required. | [optional]
**content_type** | **string** | Content type of the header sent with the request. | [optional] [defaults to 'null']
**header_name** | **string** | Name of the custom header sent with the request. | [optional] [defaults to 'null']
**message_type** | [**\Fastly\Model\LoggingMessageType**](../Model/LoggingMessageType.md) |  | [optional]
**header_value** | **string** | Value of the custom header sent with the request. | [optional] [defaults to 'null']
**method** | **string** | HTTP method used for request. | [optional] [one of: 'POST', 'PUT'] [defaults to 'POST']
**json_format** | **string** | Enforces valid JSON formatting for log entries. | [optional] [one of: '0', '1', '2']

### Return type

[**\Fastly\Model\LoggingHttpsResponse**](../Model/LoggingHttpsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
