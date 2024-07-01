# Fastly\Api\LoggingSplunkApi


```php
$apiInstance = new Fastly\Api\LoggingSplunkApi(
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
$options['request_max_entries'] = 0; // int | The maximum number of logs sent in one request. Defaults `0` for unbounded.
$options['request_max_bytes'] = 0; // int | The maximum number of bytes sent in one request. Defaults `0` for unbounded.
$options['url'] = 'url_example'; // string | The URL to post logs to.
$options['token'] = 'token_example'; // string | A Splunk token for use in posting logs over HTTP to your collector.
$options['use_tls'] = new \Fastly\Model\LoggingUseTlsString(); // \Fastly\Model\LoggingUseTlsString

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
**request_max_entries** | **int** | The maximum number of logs sent in one request. Defaults `0` for unbounded. | [optional] [defaults to 0]
**request_max_bytes** | **int** | The maximum number of bytes sent in one request. Defaults `0` for unbounded. | [optional] [defaults to 0]
**url** | **string** | The URL to post logs to. | [optional]
**token** | **string** | A Splunk token for use in posting logs over HTTP to your collector. | [optional]
**use_tls** | [**\Fastly\Model\LoggingUseTlsString**](../Model/LoggingUseTlsString.md) |  | [optional]

### Return type

[**\Fastly\Model\LoggingSplunkResponse**](../Model/LoggingSplunkResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogSplunk()`

```php
deleteLogSplunk($options): \Fastly\Model\InlineResponse200 // Delete a Splunk log endpoint
```

Delete the Splunk logging object for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_splunk_name'] = 'logging_splunk_name_example'; // string | The name for the real-time logging configuration.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_splunk_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogSplunk()`

```php
getLogSplunk($options): \Fastly\Model\LoggingSplunkResponse // Get a Splunk log endpoint
```

Get the details for a Splunk logging object for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_splunk_name'] = 'logging_splunk_name_example'; // string | The name for the real-time logging configuration.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_splunk_name** | **string** | The name for the real-time logging configuration. |

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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_splunk_name'] = 'logging_splunk_name_example'; // string | The name for the real-time logging configuration.
$options['name'] = 'name_example'; // string | The name for the real-time logging configuration.
$options['placement'] = 'placement_example'; // string | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
$options['response_condition'] = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$options['format'] = '%h %l %u %t \"%r\" %&gt;s %b'; // string | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats).
$options['format_version'] = self::FORMAT_VERSION_v2; // int | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
$options['tls_ca_cert'] = 'null'; // string | A secure certificate to authenticate a server with. Must be in PEM format.
$options['tls_client_cert'] = 'null'; // string | The client certificate used to make authenticated requests. Must be in PEM format.
$options['tls_client_key'] = 'null'; // string | The client private key used to make authenticated requests. Must be in PEM format.
$options['tls_hostname'] = 'null'; // string | The hostname to verify the server's certificate. This should be one of the Subject Alternative Name (SAN) fields for the certificate. Common Names (CN) are not supported.
$options['request_max_entries'] = 0; // int | The maximum number of logs sent in one request. Defaults `0` for unbounded.
$options['request_max_bytes'] = 0; // int | The maximum number of bytes sent in one request. Defaults `0` for unbounded.
$options['url'] = 'url_example'; // string | The URL to post logs to.
$options['token'] = 'token_example'; // string | A Splunk token for use in posting logs over HTTP to your collector.
$options['use_tls'] = new \Fastly\Model\LoggingUseTlsString(); // \Fastly\Model\LoggingUseTlsString

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_splunk_name** | **string** | The name for the real-time logging configuration. |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional] [one of: 'none', 'waf_debug', 'null']
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [defaults to '%h %l %u %t "%r" %&gt;s %b']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**tls_ca_cert** | **string** | A secure certificate to authenticate a server with. Must be in PEM format. | [optional] [defaults to 'null']
**tls_client_cert** | **string** | The client certificate used to make authenticated requests. Must be in PEM format. | [optional] [defaults to 'null']
**tls_client_key** | **string** | The client private key used to make authenticated requests. Must be in PEM format. | [optional] [defaults to 'null']
**tls_hostname** | **string** | The hostname to verify the server&#39;s certificate. This should be one of the Subject Alternative Name (SAN) fields for the certificate. Common Names (CN) are not supported. | [optional] [defaults to 'null']
**request_max_entries** | **int** | The maximum number of logs sent in one request. Defaults `0` for unbounded. | [optional] [defaults to 0]
**request_max_bytes** | **int** | The maximum number of bytes sent in one request. Defaults `0` for unbounded. | [optional] [defaults to 0]
**url** | **string** | The URL to post logs to. | [optional]
**token** | **string** | A Splunk token for use in posting logs over HTTP to your collector. | [optional]
**use_tls** | [**\Fastly\Model\LoggingUseTlsString**](../Model/LoggingUseTlsString.md) |  | [optional]

### Return type

[**\Fastly\Model\LoggingSplunkResponse**](../Model/LoggingSplunkResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
