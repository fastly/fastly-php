# OpenAPI\Client\LoggingLogshuttleApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLogLogshuttle()**](LoggingLogshuttleApi.md#createLogLogshuttle) | **POST** /service/{service_id}/version/{version_id}/logging/logshuttle | Create a Log Shuttle log endpoint
[**deleteLogLogshuttle()**](LoggingLogshuttleApi.md#deleteLogLogshuttle) | **DELETE** /service/{service_id}/version/{version_id}/logging/logshuttle/{logging_logshuttle_name} | Delete a Log Shuttle log endpoint
[**getLogLogshuttle()**](LoggingLogshuttleApi.md#getLogLogshuttle) | **GET** /service/{service_id}/version/{version_id}/logging/logshuttle/{logging_logshuttle_name} | Get a Log Shuttle log endpoint
[**listLogLogshuttle()**](LoggingLogshuttleApi.md#listLogLogshuttle) | **GET** /service/{service_id}/version/{version_id}/logging/logshuttle | List Log Shuttle log endpoints
[**updateLogLogshuttle()**](LoggingLogshuttleApi.md#updateLogLogshuttle) | **PUT** /service/{service_id}/version/{version_id}/logging/logshuttle/{logging_logshuttle_name} | Update a Log Shuttle log endpoint


## `createLogLogshuttle()`

```php
createLogLogshuttle($service_id, $version_id, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $token, $url): \OpenAPI\Client\Model\ModelLoggingLogshuttle
```

Create a Log Shuttle log endpoint

Create a Log Shuttle logging endpoint for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingLogshuttleApi(
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
$token = 'token_example'; // string | The data authentication token associated with this endpoint.
$url = 'url_example'; // string | The URL to stream logs to.

try {
    $result = $apiInstance->createLogLogshuttle($service_id, $version_id, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $token, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingLogshuttleApi->createLogLogshuttle: ', $e->getMessage(), PHP_EOL;
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
 **token** | **string**| The data authentication token associated with this endpoint. | [optional]
 **url** | **string**| The URL to stream logs to. | [optional]

### Return type

[**\OpenAPI\Client\Model\ModelLoggingLogshuttle**](../Model/ModelLoggingLogshuttle.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLogLogshuttle()`

```php
deleteLogLogshuttle($service_id, $version_id, $logging_logshuttle_name): object
```

Delete a Log Shuttle log endpoint

Delete the Log Shuttle logging endpoint for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingLogshuttleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$logging_logshuttle_name = 'logging_logshuttle_name_example'; // string

try {
    $result = $apiInstance->deleteLogLogshuttle($service_id, $version_id, $logging_logshuttle_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingLogshuttleApi->deleteLogLogshuttle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **logging_logshuttle_name** | **string**|  |

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

## `getLogLogshuttle()`

```php
getLogLogshuttle($service_id, $version_id, $logging_logshuttle_name): \OpenAPI\Client\Model\ModelLoggingLogshuttle
```

Get a Log Shuttle log endpoint

Get the Log Shuttle logging endpoint for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingLogshuttleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$logging_logshuttle_name = 'logging_logshuttle_name_example'; // string

try {
    $result = $apiInstance->getLogLogshuttle($service_id, $version_id, $logging_logshuttle_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingLogshuttleApi->getLogLogshuttle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **logging_logshuttle_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelLoggingLogshuttle**](../Model/ModelLoggingLogshuttle.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLogLogshuttle()`

```php
listLogLogshuttle($service_id, $version_id): \OpenAPI\Client\Model\ModelLoggingLogshuttle[]
```

List Log Shuttle log endpoints

List all of the Log Shuttle logging endpoints for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingLogshuttleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int

try {
    $result = $apiInstance->listLogLogshuttle($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingLogshuttleApi->listLogLogshuttle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ModelLoggingLogshuttle[]**](../Model/ModelLoggingLogshuttle.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLogLogshuttle()`

```php
updateLogLogshuttle($service_id, $version_id, $logging_logshuttle_name, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $token, $url): \OpenAPI\Client\Model\ModelLoggingLogshuttle
```

Update a Log Shuttle log endpoint

Update the Log Shuttle logging endpoint for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingLogshuttleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$logging_logshuttle_name = 'logging_logshuttle_name_example'; // string
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
$token = 'token_example'; // string | The data authentication token associated with this endpoint.
$url = 'url_example'; // string | The URL to stream logs to.

try {
    $result = $apiInstance->updateLogLogshuttle($service_id, $version_id, $logging_logshuttle_name, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $token, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingLogshuttleApi->updateLogLogshuttle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **logging_logshuttle_name** | **string**|  |
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
 **token** | **string**| The data authentication token associated with this endpoint. | [optional]
 **url** | **string**| The URL to stream logs to. | [optional]

### Return type

[**\OpenAPI\Client\Model\ModelLoggingLogshuttle**](../Model/ModelLoggingLogshuttle.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
