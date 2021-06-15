# OpenAPI\Client\LoggingHttpsApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLogHttps()**](LoggingHttpsApi.md#createLogHttps) | **POST** /service/{service_id}/version/{version_id}/logging/https | Create an HTTPS log endpoint
[**deleteLogHttps()**](LoggingHttpsApi.md#deleteLogHttps) | **DELETE** /service/{service_id}/version/{version_id}/logging/https/{logging_https_name} | Delete an HTTPS log endpoint
[**getLogHttps()**](LoggingHttpsApi.md#getLogHttps) | **GET** /service/{service_id}/version/{version_id}/logging/https/{logging_https_name} | Get an HTTPS log endpoint
[**listLogHttps()**](LoggingHttpsApi.md#listLogHttps) | **GET** /service/{service_id}/version/{version_id}/logging/https | List HTTPS log endpoints
[**updateLogHttps()**](LoggingHttpsApi.md#updateLogHttps) | **PUT** /service/{service_id}/version/{version_id}/logging/https/{logging_https_name} | Update an HTTPS log endpoint


## `createLogHttps()`

```php
createLogHttps($service_id, $version_id, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $tls_ca_cert, $tls_client_cert, $tls_client_key, $tls_hostname, $request_max_entries, $request_max_bytes, $url, $content_type, $header_name, $message_type, $header_value, $method, $json_format): \OpenAPI\Client\Model\ModelLoggingHttps
```

Create an HTTPS log endpoint

Create an HTTPS object for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingHttpsApi(
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
$request_max_entries = 0; // int | The maximum number of logs sent in one request. Defaults `0` (no limit).
$request_max_bytes = 0; // int | The maximum number of bytes sent in one request. Defaults `0` (no limit).
$url = 'url_example'; // string | The URL to send logs to. Must use HTTPS. Required.
$content_type = 'null'; // string | Content type of the header sent with the request.
$header_name = 'null'; // string | Name of the custom header sent with the request.
$message_type = new \OpenAPI\Client\Model\LoggingMessageType(); // \OpenAPI\Client\Model\LoggingMessageType
$header_value = 'null'; // string | Value of the custom header sent with the request.
$method = 'POST'; // string | HTTP method used for request.
$json_format = 'json_format_example'; // string | Enforces valid JSON formatting for log entries.

try {
    $result = $apiInstance->createLogHttps($service_id, $version_id, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $tls_ca_cert, $tls_client_cert, $tls_client_key, $tls_hostname, $request_max_entries, $request_max_bytes, $url, $content_type, $header_name, $message_type, $header_value, $method, $json_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingHttpsApi->createLogHttps: ', $e->getMessage(), PHP_EOL;
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
 **request_max_entries** | **int**| The maximum number of logs sent in one request. Defaults &#x60;0&#x60; (no limit). | [optional] [default to 0]
 **request_max_bytes** | **int**| The maximum number of bytes sent in one request. Defaults &#x60;0&#x60; (no limit). | [optional] [default to 0]
 **url** | **string**| The URL to send logs to. Must use HTTPS. Required. | [optional]
 **content_type** | **string**| Content type of the header sent with the request. | [optional] [default to &#39;null&#39;]
 **header_name** | **string**| Name of the custom header sent with the request. | [optional] [default to &#39;null&#39;]
 **message_type** | [**\OpenAPI\Client\Model\LoggingMessageType**](../Model/LoggingMessageType.md)|  | [optional]
 **header_value** | **string**| Value of the custom header sent with the request. | [optional] [default to &#39;null&#39;]
 **method** | **string**| HTTP method used for request. | [optional] [default to &#39;POST&#39;]
 **json_format** | **string**| Enforces valid JSON formatting for log entries. | [optional]

### Return type

[**\OpenAPI\Client\Model\ModelLoggingHttps**](../Model/ModelLoggingHttps.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLogHttps()`

```php
deleteLogHttps($service_id, $version_id, $logging_https_name): object
```

Delete an HTTPS log endpoint

Delete the HTTPS object for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingHttpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$logging_https_name = 'logging_https_name_example'; // string

try {
    $result = $apiInstance->deleteLogHttps($service_id, $version_id, $logging_https_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingHttpsApi->deleteLogHttps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **logging_https_name** | **string**|  |

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

## `getLogHttps()`

```php
getLogHttps($service_id, $version_id, $logging_https_name): \OpenAPI\Client\Model\ModelLoggingHttps
```

Get an HTTPS log endpoint

Get the HTTPS object for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingHttpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$logging_https_name = 'logging_https_name_example'; // string

try {
    $result = $apiInstance->getLogHttps($service_id, $version_id, $logging_https_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingHttpsApi->getLogHttps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **logging_https_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelLoggingHttps**](../Model/ModelLoggingHttps.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLogHttps()`

```php
listLogHttps($service_id, $version_id): \OpenAPI\Client\Model\ModelLoggingHttps[]
```

List HTTPS log endpoints

List all of the HTTPS objects for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingHttpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int

try {
    $result = $apiInstance->listLogHttps($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingHttpsApi->listLogHttps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ModelLoggingHttps[]**](../Model/ModelLoggingHttps.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLogHttps()`

```php
updateLogHttps($service_id, $version_id, $logging_https_name, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $tls_ca_cert, $tls_client_cert, $tls_client_key, $tls_hostname, $request_max_entries, $request_max_bytes, $url, $content_type, $header_name, $message_type, $header_value, $method, $json_format): \OpenAPI\Client\Model\ModelLoggingHttps
```

Update an HTTPS log endpoint

Update the HTTPS object for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingHttpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$logging_https_name = 'logging_https_name_example'; // string
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
$request_max_entries = 0; // int | The maximum number of logs sent in one request. Defaults `0` (no limit).
$request_max_bytes = 0; // int | The maximum number of bytes sent in one request. Defaults `0` (no limit).
$url = 'url_example'; // string | The URL to send logs to. Must use HTTPS. Required.
$content_type = 'null'; // string | Content type of the header sent with the request.
$header_name = 'null'; // string | Name of the custom header sent with the request.
$message_type = new \OpenAPI\Client\Model\LoggingMessageType(); // \OpenAPI\Client\Model\LoggingMessageType
$header_value = 'null'; // string | Value of the custom header sent with the request.
$method = METHOD_POST; // string | HTTP method used for request.
$json_format = 'json_format_example'; // string | Enforces valid JSON formatting for log entries.

try {
    $result = $apiInstance->updateLogHttps($service_id, $version_id, $logging_https_name, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $tls_ca_cert, $tls_client_cert, $tls_client_key, $tls_hostname, $request_max_entries, $request_max_bytes, $url, $content_type, $header_name, $message_type, $header_value, $method, $json_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingHttpsApi->updateLogHttps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **logging_https_name** | **string**|  |
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
 **request_max_entries** | **int**| The maximum number of logs sent in one request. Defaults &#x60;0&#x60; (no limit). | [optional] [default to 0]
 **request_max_bytes** | **int**| The maximum number of bytes sent in one request. Defaults &#x60;0&#x60; (no limit). | [optional] [default to 0]
 **url** | **string**| The URL to send logs to. Must use HTTPS. Required. | [optional]
 **content_type** | **string**| Content type of the header sent with the request. | [optional] [default to &#39;null&#39;]
 **header_name** | **string**| Name of the custom header sent with the request. | [optional] [default to &#39;null&#39;]
 **message_type** | [**\OpenAPI\Client\Model\LoggingMessageType**](../Model/LoggingMessageType.md)|  | [optional]
 **header_value** | **string**| Value of the custom header sent with the request. | [optional] [default to &#39;null&#39;]
 **method** | **string**| HTTP method used for request. | [optional] [default to METHOD_POST]
 **json_format** | **string**| Enforces valid JSON formatting for log entries. | [optional]

### Return type

[**\OpenAPI\Client\Model\ModelLoggingHttps**](../Model/ModelLoggingHttps.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
