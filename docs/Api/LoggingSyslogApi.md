# OpenAPI\Client\LoggingSyslogApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLogSyslog()**](LoggingSyslogApi.md#createLogSyslog) | **POST** /service/{service_id}/version/{version_id}/logging/syslog | Create a syslog log endpoint
[**deleteLogSyslog()**](LoggingSyslogApi.md#deleteLogSyslog) | **DELETE** /service/{service_id}/version/{version_id}/logging/syslog/{logging_syslog_name} | Delete a syslog log endpoint
[**getLogSyslog()**](LoggingSyslogApi.md#getLogSyslog) | **GET** /service/{service_id}/version/{version_id}/logging/syslog/{logging_syslog_name} | Get a syslog log endpoint
[**listLogSyslog()**](LoggingSyslogApi.md#listLogSyslog) | **GET** /service/{service_id}/version/{version_id}/logging/syslog | List Syslog log endpoints
[**updateLogSyslog()**](LoggingSyslogApi.md#updateLogSyslog) | **PUT** /service/{service_id}/version/{version_id}/logging/syslog/{logging_syslog_name} | Update a syslog log endpoint


## `createLogSyslog()`

```php
createLogSyslog($service_id, $version_id, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $tls_ca_cert, $tls_client_cert, $tls_client_key, $tls_hostname, $address, $port, $message_type, $hostname, $ipv4, $token, $use_tls): \OpenAPI\Client\Model\ModelLoggingSyslog
```

Create a syslog log endpoint

Create a Syslog for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingSyslogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$created_at = 'created_at_example'; // string | Date and time in ISO 8601 format.
$deleted_at = 'deleted_at_example'; // string | Date and time in ISO 8601 format.
$updated_at = 'updated_at_example'; // string | Date and time in ISO 8601 format.
$service_id2 = 'service_id_example'; // string | Alphanumeric string identifying the service.
$version = 56; // int | Integer identifying a service version.
$name = 'name_example'; // string | The name for the real-time logging configuration.
$placement = new \OpenAPI\Client\Model\LoggingPlacement(); // \OpenAPI\Client\Model\LoggingPlacement
$format_version = new \OpenAPI\Client\Model\LoggingFormatVersion(); // \OpenAPI\Client\Model\LoggingFormatVersion
$response_condition = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$format = '%h %l %u %t \"%r\" %&gt;s %b'; // string | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats).
$tls_ca_cert = 'null'; // string | A secure certificate to authenticate a server with. Must be in PEM format.
$tls_client_cert = 'null'; // string | The client certificate used to make authenticated requests. Must be in PEM format.
$tls_client_key = 'null'; // string | The client private key used to make authenticated requests. Must be in PEM format.
$tls_hostname = 'null'; // string | The hostname to verify the server's certificate. This should be one of the Subject Alternative Name (SAN) fields for the certificate. Common Names (CN) are not supported.
$address = 'address_example'; // string | A hostname or IPv4 address.
$port = 514; // int | The port number.
$message_type = new \OpenAPI\Client\Model\LoggingMessageType(); // \OpenAPI\Client\Model\LoggingMessageType
$hostname = 'hostname_example'; // string | The hostname used for the syslog endpoint.
$ipv4 = 'ipv4_example'; // string | The IPv4 address used for the syslog endpoint.
$token = 'null'; // string | Whether to prepend each message with a specific token.
$use_tls = new \OpenAPI\Client\Model\LoggingUseTls(); // \OpenAPI\Client\Model\LoggingUseTls

try {
    $result = $apiInstance->createLogSyslog($service_id, $version_id, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $tls_ca_cert, $tls_client_cert, $tls_client_key, $tls_hostname, $address, $port, $message_type, $hostname, $ipv4, $token, $use_tls);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingSyslogApi->createLogSyslog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **created_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **deleted_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **updated_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **service_id2** | **string**| Alphanumeric string identifying the service. | [optional]
 **version** | **int**| Integer identifying a service version. | [optional]
 **name** | **string**| The name for the real-time logging configuration. | [optional]
 **placement** | [**\OpenAPI\Client\Model\LoggingPlacement**](../Model/LoggingPlacement.md)|  | [optional]
 **format_version** | [**\OpenAPI\Client\Model\LoggingFormatVersion**](../Model/LoggingFormatVersion.md)|  | [optional]
 **response_condition** | **string**| The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
 **format** | **string**| A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [default to &#39;%h %l %u %t &quot;%r&quot; %&amp;gt;s %b&#39;]
 **tls_ca_cert** | **string**| A secure certificate to authenticate a server with. Must be in PEM format. | [optional] [default to &#39;null&#39;]
 **tls_client_cert** | **string**| The client certificate used to make authenticated requests. Must be in PEM format. | [optional] [default to &#39;null&#39;]
 **tls_client_key** | **string**| The client private key used to make authenticated requests. Must be in PEM format. | [optional] [default to &#39;null&#39;]
 **tls_hostname** | **string**| The hostname to verify the server&#39;s certificate. This should be one of the Subject Alternative Name (SAN) fields for the certificate. Common Names (CN) are not supported. | [optional] [default to &#39;null&#39;]
 **address** | **string**| A hostname or IPv4 address. | [optional]
 **port** | **int**| The port number. | [optional] [default to 514]
 **message_type** | [**\OpenAPI\Client\Model\LoggingMessageType**](../Model/LoggingMessageType.md)|  | [optional]
 **hostname** | **string**| The hostname used for the syslog endpoint. | [optional]
 **ipv4** | **string**| The IPv4 address used for the syslog endpoint. | [optional]
 **token** | **string**| Whether to prepend each message with a specific token. | [optional] [default to &#39;null&#39;]
 **use_tls** | [**\OpenAPI\Client\Model\LoggingUseTls**](../Model/LoggingUseTls.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ModelLoggingSyslog**](../Model/ModelLoggingSyslog.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLogSyslog()`

```php
deleteLogSyslog($service_id, $version_id, $logging_syslog_name): object
```

Delete a syslog log endpoint

Delete the Syslog for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingSyslogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$logging_syslog_name = 'logging_syslog_name_example'; // string

try {
    $result = $apiInstance->deleteLogSyslog($service_id, $version_id, $logging_syslog_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingSyslogApi->deleteLogSyslog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **logging_syslog_name** | **string**|  |

### Return type

**object**

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLogSyslog()`

```php
getLogSyslog($service_id, $version_id, $logging_syslog_name): \OpenAPI\Client\Model\ModelLoggingSyslog
```

Get a syslog log endpoint

Get the Syslog for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingSyslogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$logging_syslog_name = 'logging_syslog_name_example'; // string

try {
    $result = $apiInstance->getLogSyslog($service_id, $version_id, $logging_syslog_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingSyslogApi->getLogSyslog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **logging_syslog_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelLoggingSyslog**](../Model/ModelLoggingSyslog.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLogSyslog()`

```php
listLogSyslog($service_id, $version_id): \OpenAPI\Client\Model\ModelLoggingSyslog[]
```

List Syslog log endpoints

List all of the Syslogs for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingSyslogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int

try {
    $result = $apiInstance->listLogSyslog($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingSyslogApi->listLogSyslog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ModelLoggingSyslog[]**](../Model/ModelLoggingSyslog.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLogSyslog()`

```php
updateLogSyslog($service_id, $version_id, $logging_syslog_name, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $tls_ca_cert, $tls_client_cert, $tls_client_key, $tls_hostname, $address, $port, $message_type, $hostname, $ipv4, $token, $use_tls): \OpenAPI\Client\Model\ModelLoggingSyslog
```

Update a syslog log endpoint

Update the Syslog for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingSyslogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$logging_syslog_name = 'logging_syslog_name_example'; // string
$created_at = 'created_at_example'; // string | Date and time in ISO 8601 format.
$deleted_at = 'deleted_at_example'; // string | Date and time in ISO 8601 format.
$updated_at = 'updated_at_example'; // string | Date and time in ISO 8601 format.
$service_id2 = 'service_id_example'; // string | Alphanumeric string identifying the service.
$version = 56; // int | Integer identifying a service version.
$name = 'name_example'; // string | The name for the real-time logging configuration.
$placement = new \OpenAPI\Client\Model\LoggingPlacement(); // \OpenAPI\Client\Model\LoggingPlacement
$format_version = new \OpenAPI\Client\Model\LoggingFormatVersion(); // \OpenAPI\Client\Model\LoggingFormatVersion
$response_condition = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$format = '%h %l %u %t \"%r\" %&gt;s %b'; // string | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats).
$tls_ca_cert = 'null'; // string | A secure certificate to authenticate a server with. Must be in PEM format.
$tls_client_cert = 'null'; // string | The client certificate used to make authenticated requests. Must be in PEM format.
$tls_client_key = 'null'; // string | The client private key used to make authenticated requests. Must be in PEM format.
$tls_hostname = 'null'; // string | The hostname to verify the server's certificate. This should be one of the Subject Alternative Name (SAN) fields for the certificate. Common Names (CN) are not supported.
$address = 'address_example'; // string | A hostname or IPv4 address.
$port = 514; // int | The port number.
$message_type = new \OpenAPI\Client\Model\LoggingMessageType(); // \OpenAPI\Client\Model\LoggingMessageType
$hostname = 'hostname_example'; // string | The hostname used for the syslog endpoint.
$ipv4 = 'ipv4_example'; // string | The IPv4 address used for the syslog endpoint.
$token = 'null'; // string | Whether to prepend each message with a specific token.
$use_tls = new \OpenAPI\Client\Model\LoggingUseTls(); // \OpenAPI\Client\Model\LoggingUseTls

try {
    $result = $apiInstance->updateLogSyslog($service_id, $version_id, $logging_syslog_name, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $tls_ca_cert, $tls_client_cert, $tls_client_key, $tls_hostname, $address, $port, $message_type, $hostname, $ipv4, $token, $use_tls);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingSyslogApi->updateLogSyslog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **logging_syslog_name** | **string**|  |
 **created_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **deleted_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **updated_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **service_id2** | **string**| Alphanumeric string identifying the service. | [optional]
 **version** | **int**| Integer identifying a service version. | [optional]
 **name** | **string**| The name for the real-time logging configuration. | [optional]
 **placement** | [**\OpenAPI\Client\Model\LoggingPlacement**](../Model/LoggingPlacement.md)|  | [optional]
 **format_version** | [**\OpenAPI\Client\Model\LoggingFormatVersion**](../Model/LoggingFormatVersion.md)|  | [optional]
 **response_condition** | **string**| The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
 **format** | **string**| A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [default to &#39;%h %l %u %t &quot;%r&quot; %&amp;gt;s %b&#39;]
 **tls_ca_cert** | **string**| A secure certificate to authenticate a server with. Must be in PEM format. | [optional] [default to &#39;null&#39;]
 **tls_client_cert** | **string**| The client certificate used to make authenticated requests. Must be in PEM format. | [optional] [default to &#39;null&#39;]
 **tls_client_key** | **string**| The client private key used to make authenticated requests. Must be in PEM format. | [optional] [default to &#39;null&#39;]
 **tls_hostname** | **string**| The hostname to verify the server&#39;s certificate. This should be one of the Subject Alternative Name (SAN) fields for the certificate. Common Names (CN) are not supported. | [optional] [default to &#39;null&#39;]
 **address** | **string**| A hostname or IPv4 address. | [optional]
 **port** | **int**| The port number. | [optional] [default to 514]
 **message_type** | [**\OpenAPI\Client\Model\LoggingMessageType**](../Model/LoggingMessageType.md)|  | [optional]
 **hostname** | **string**| The hostname used for the syslog endpoint. | [optional]
 **ipv4** | **string**| The IPv4 address used for the syslog endpoint. | [optional]
 **token** | **string**| Whether to prepend each message with a specific token. | [optional] [default to &#39;null&#39;]
 **use_tls** | [**\OpenAPI\Client\Model\LoggingUseTls**](../Model/LoggingUseTls.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ModelLoggingSyslog**](../Model/ModelLoggingSyslog.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
