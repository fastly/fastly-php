# OpenAPI\Client\LoggingKafkaApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLogKafka()**](LoggingKafkaApi.md#createLogKafka) | **POST** /service/{service_id}/version/{version_id}/logging/kafka | Create a Kafka log endpoint
[**deleteLogKafka()**](LoggingKafkaApi.md#deleteLogKafka) | **DELETE** /service/{service_id}/version/{version_id}/logging/kafka/{logging_kafka_name} | Delete the Kafka log endpoint
[**getLogKafka()**](LoggingKafkaApi.md#getLogKafka) | **GET** /service/{service_id}/version/{version_id}/logging/kafka/{logging_kafka_name} | Get a Kafka log endpoint
[**listLogKafka()**](LoggingKafkaApi.md#listLogKafka) | **GET** /service/{service_id}/version/{version_id}/logging/kafka | List Kafka log endpoints
[**updateLogKafka()**](LoggingKafkaApi.md#updateLogKafka) | **PUT** /service/{service_id}/version/{version_id}/logging/kafka/{logging_kafka_name} | Update the Kafka log endpoint


## `createLogKafka()`

```php
createLogKafka($service_id, $version_id, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $tls_ca_cert, $tls_client_cert, $tls_client_key, $tls_hostname, $topic, $brokers, $compression_codec, $required_acks, $request_max_bytes, $parse_log_keyvals, $auth_method, $user, $password, $use_tls): \OpenAPI\Client\Model\ModelLoggingKafka
```

Create a Kafka log endpoint

Create a Kafka logging endpoint for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingKafkaApi(
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
$topic = 'topic_example'; // string | The Kafka topic to send logs to. Required.
$brokers = 'brokers_example'; // string | A comma-separated list of IP addresses or hostnames of Kafka brokers. Required.
$compression_codec = 'compression_codec_example'; // string | The codec used for compression of your logs.
$required_acks = 1; // int | The number of acknowledgements a leader must receive before a write is considered successful.
$request_max_bytes = 0; // int | The maximum number of bytes sent in one request. Defaults `0` (no limit).
$parse_log_keyvals = True; // bool | Enables parsing of key=value tuples from the beginning of a logline, turning them into [record headers](https://cwiki.apache.org/confluence/display/KAFKA/KIP-82+-+Add+Record+Headers).
$auth_method = 'auth_method_example'; // string | SASL authentication method.
$user = 'user_example'; // string | SASL user.
$password = 'password_example'; // string | SASL password.
$use_tls = new \OpenAPI\Client\Model\LoggingUseTls(); // \OpenAPI\Client\Model\LoggingUseTls

try {
    $result = $apiInstance->createLogKafka($service_id, $version_id, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $tls_ca_cert, $tls_client_cert, $tls_client_key, $tls_hostname, $topic, $brokers, $compression_codec, $required_acks, $request_max_bytes, $parse_log_keyvals, $auth_method, $user, $password, $use_tls);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingKafkaApi->createLogKafka: ', $e->getMessage(), PHP_EOL;
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
 **topic** | **string**| The Kafka topic to send logs to. Required. | [optional]
 **brokers** | **string**| A comma-separated list of IP addresses or hostnames of Kafka brokers. Required. | [optional]
 **compression_codec** | **string**| The codec used for compression of your logs. | [optional]
 **required_acks** | **int**| The number of acknowledgements a leader must receive before a write is considered successful. | [optional] [default to 1]
 **request_max_bytes** | **int**| The maximum number of bytes sent in one request. Defaults &#x60;0&#x60; (no limit). | [optional] [default to 0]
 **parse_log_keyvals** | **bool**| Enables parsing of key&#x3D;value tuples from the beginning of a logline, turning them into [record headers](https://cwiki.apache.org/confluence/display/KAFKA/KIP-82+-+Add+Record+Headers). | [optional]
 **auth_method** | **string**| SASL authentication method. | [optional]
 **user** | **string**| SASL user. | [optional]
 **password** | **string**| SASL password. | [optional]
 **use_tls** | [**\OpenAPI\Client\Model\LoggingUseTls**](../Model/LoggingUseTls.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ModelLoggingKafka**](../Model/ModelLoggingKafka.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLogKafka()`

```php
deleteLogKafka($service_id, $version_id, $logging_kafka_name): object
```

Delete the Kafka log endpoint

Delete the Kafka logging endpoint for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingKafkaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$logging_kafka_name = 'logging_kafka_name_example'; // string

try {
    $result = $apiInstance->deleteLogKafka($service_id, $version_id, $logging_kafka_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingKafkaApi->deleteLogKafka: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **logging_kafka_name** | **string**|  |

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

## `getLogKafka()`

```php
getLogKafka($service_id, $version_id, $logging_kafka_name): \OpenAPI\Client\Model\ModelLoggingKafka
```

Get a Kafka log endpoint

Get the Kafka logging endpoint for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingKafkaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$logging_kafka_name = 'logging_kafka_name_example'; // string

try {
    $result = $apiInstance->getLogKafka($service_id, $version_id, $logging_kafka_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingKafkaApi->getLogKafka: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **logging_kafka_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelLoggingKafka**](../Model/ModelLoggingKafka.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLogKafka()`

```php
listLogKafka($service_id, $version_id): \OpenAPI\Client\Model\ModelLoggingKafka[]
```

List Kafka log endpoints

List all of the Kafka logging endpoints for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingKafkaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int

try {
    $result = $apiInstance->listLogKafka($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingKafkaApi->listLogKafka: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ModelLoggingKafka[]**](../Model/ModelLoggingKafka.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLogKafka()`

```php
updateLogKafka($service_id, $version_id, $logging_kafka_name): \OpenAPI\Client\Model\ModelLoggingKafka
```

Update the Kafka log endpoint

Update the Kafka logging endpoint for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingKafkaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$logging_kafka_name = 'logging_kafka_name_example'; // string

try {
    $result = $apiInstance->updateLogKafka($service_id, $version_id, $logging_kafka_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingKafkaApi->updateLogKafka: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **logging_kafka_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelLoggingKafka**](../Model/ModelLoggingKafka.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
