# OpenAPI\Client\ServicesHealthcheckApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createHealthcheck()**](ServicesHealthcheckApi.md#createHealthcheck) | **POST** /service/{service_id}/version/{version_id}/healthcheck | Create a healthcheck
[**deleteHealthcheck()**](ServicesHealthcheckApi.md#deleteHealthcheck) | **DELETE** /service/{service_id}/version/{version_id}/healthcheck/{healthcheck_name} | Delete a healthcheck
[**getHealthcheck()**](ServicesHealthcheckApi.md#getHealthcheck) | **GET** /service/{service_id}/version/{version_id}/healthcheck/{healthcheck_name} | Get a healthcheck
[**listHealthchecks()**](ServicesHealthcheckApi.md#listHealthchecks) | **GET** /service/{service_id}/version/{version_id}/healthcheck | List healthchecks
[**updateHealthcheck()**](ServicesHealthcheckApi.md#updateHealthcheck) | **PUT** /service/{service_id}/version/{version_id}/healthcheck/{healthcheck_name} | Update a healthcheck


## `createHealthcheck()`

```php
createHealthcheck($service_id, $version_id, $service_id2, $version, $check_interval, $comment, $expected_response, $host, $http_version, $initial, $method, $name, $path, $threshold, $timeout, $window): \OpenAPI\Client\Model\InlineObject
```

Create a healthcheck

Create a healthcheck for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServicesHealthcheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$service_id2 = 'service_id_example'; // string | Alphanumeric string identifying the service.
$version = 56; // int | Integer identifying a service version.
$check_interval = 56; // int | How often to run the healthcheck in milliseconds.
$comment = ''; // string | A freeform descriptive note.
$expected_response = 56; // int | The status code expected from the host.
$host = 'host_example'; // string | Which host to check.
$http_version = 'http_version_example'; // string | Whether to use version 1.0 or 1.1 HTTP.
$initial = 56; // int | When loading a config, the initial number of probes to be seen as OK.
$method = 'method_example'; // string | Which HTTP method to use.
$name = 'name_example'; // string | The name of the healthcheck.
$path = 'path_example'; // string | The path to check.
$threshold = 56; // int | How many healthchecks must succeed to be considered healthy.
$timeout = 56; // int | Timeout in milliseconds.
$window = 56; // int | The number of most recent healthcheck queries to keep for this healthcheck.

try {
    $result = $apiInstance->createHealthcheck($service_id, $version_id, $service_id2, $version, $check_interval, $comment, $expected_response, $host, $http_version, $initial, $method, $name, $path, $threshold, $timeout, $window);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesHealthcheckApi->createHealthcheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **service_id2** | **string**| Alphanumeric string identifying the service. | [optional]
 **version** | **int**| Integer identifying a service version. | [optional]
 **check_interval** | **int**| How often to run the healthcheck in milliseconds. | [optional]
 **comment** | **string**| A freeform descriptive note. | [optional] [default to &#39;&#39;]
 **expected_response** | **int**| The status code expected from the host. | [optional]
 **host** | **string**| Which host to check. | [optional]
 **http_version** | **string**| Whether to use version 1.0 or 1.1 HTTP. | [optional]
 **initial** | **int**| When loading a config, the initial number of probes to be seen as OK. | [optional]
 **method** | **string**| Which HTTP method to use. | [optional]
 **name** | **string**| The name of the healthcheck. | [optional]
 **path** | **string**| The path to check. | [optional]
 **threshold** | **int**| How many healthchecks must succeed to be considered healthy. | [optional]
 **timeout** | **int**| Timeout in milliseconds. | [optional]
 **window** | **int**| The number of most recent healthcheck queries to keep for this healthcheck. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineObject**](../Model/InlineObject.md)

### Authorization

[token_engineer](../../README.md#token_engineer)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteHealthcheck()`

```php
deleteHealthcheck($service_id, $version_id, $healthcheck_name): object
```

Delete a healthcheck

Delete the healthcheck for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServicesHealthcheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$healthcheck_name = example-healthcheck; // string

try {
    $result = $apiInstance->deleteHealthcheck($service_id, $version_id, $healthcheck_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesHealthcheckApi->deleteHealthcheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **healthcheck_name** | **string**|  |

### Return type

**object**

### Authorization

[token_engineer](../../README.md#token_engineer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHealthcheck()`

```php
getHealthcheck($service_id, $version_id, $healthcheck_name): \OpenAPI\Client\Model\InlineObject
```

Get a healthcheck

Get the healthcheck for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServicesHealthcheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$healthcheck_name = example-healthcheck; // string

try {
    $result = $apiInstance->getHealthcheck($service_id, $version_id, $healthcheck_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesHealthcheckApi->getHealthcheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **healthcheck_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\InlineObject**](../Model/InlineObject.md)

### Authorization

[token_engineer](../../README.md#token_engineer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listHealthchecks()`

```php
listHealthchecks($service_id, $version_id): \OpenAPI\Client\Model\InlineResponse200[]
```

List healthchecks

List all of the healthchecks for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServicesHealthcheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int

try {
    $result = $apiInstance->listHealthchecks($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesHealthcheckApi->listHealthchecks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse200[]**](../Model/InlineResponse200.md)

### Authorization

[token_engineer](../../README.md#token_engineer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateHealthcheck()`

```php
updateHealthcheck($service_id, $version_id, $healthcheck_name, $service_id2, $version, $check_interval, $comment, $expected_response, $host, $http_version, $initial, $method, $name, $path, $threshold, $timeout, $window): \OpenAPI\Client\Model\InlineObject1
```

Update a healthcheck

Update the healthcheck for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServicesHealthcheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$healthcheck_name = example-healthcheck; // string
$service_id2 = 'service_id_example'; // string | Alphanumeric string identifying the service.
$version = 56; // int | Integer identifying a service version.
$check_interval = 56; // int | How often to run the healthcheck in milliseconds.
$comment = ''; // string | A freeform descriptive note.
$expected_response = 56; // int | The status code expected from the host.
$host = 'host_example'; // string | Which host to check.
$http_version = 'http_version_example'; // string | Whether to use version 1.0 or 1.1 HTTP.
$initial = 56; // int | When loading a config, the initial number of probes to be seen as OK.
$method = 'method_example'; // string | Which HTTP method to use.
$name = 'name_example'; // string | The name of the healthcheck.
$path = 'path_example'; // string | The path to check.
$threshold = 56; // int | How many healthchecks must succeed to be considered healthy.
$timeout = 56; // int | Timeout in milliseconds.
$window = 56; // int | The number of most recent healthcheck queries to keep for this healthcheck.

try {
    $result = $apiInstance->updateHealthcheck($service_id, $version_id, $healthcheck_name, $service_id2, $version, $check_interval, $comment, $expected_response, $host, $http_version, $initial, $method, $name, $path, $threshold, $timeout, $window);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesHealthcheckApi->updateHealthcheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **healthcheck_name** | **string**|  |
 **service_id2** | **string**| Alphanumeric string identifying the service. | [optional]
 **version** | **int**| Integer identifying a service version. | [optional]
 **check_interval** | **int**| How often to run the healthcheck in milliseconds. | [optional]
 **comment** | **string**| A freeform descriptive note. | [optional] [default to &#39;&#39;]
 **expected_response** | **int**| The status code expected from the host. | [optional]
 **host** | **string**| Which host to check. | [optional]
 **http_version** | **string**| Whether to use version 1.0 or 1.1 HTTP. | [optional]
 **initial** | **int**| When loading a config, the initial number of probes to be seen as OK. | [optional]
 **method** | **string**| Which HTTP method to use. | [optional]
 **name** | **string**| The name of the healthcheck. | [optional]
 **path** | **string**| The path to check. | [optional]
 **threshold** | **int**| How many healthchecks must succeed to be considered healthy. | [optional]
 **timeout** | **int**| Timeout in milliseconds. | [optional]
 **window** | **int**| The number of most recent healthcheck queries to keep for this healthcheck. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineObject1**](../Model/InlineObject1.md)

### Authorization

[token_engineer](../../README.md#token_engineer)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
