# OpenAPI\Client\LoadBalancingDirectorsBackendApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDirectorBackend()**](LoadBalancingDirectorsBackendApi.md#createDirectorBackend) | **POST** /service/{service_id}/version/{version_id}/director/{director_name}/backend/{backend_name} | Create a director-backend relationship
[**deleteDirectorBackend()**](LoadBalancingDirectorsBackendApi.md#deleteDirectorBackend) | **DELETE** /service/{service_id}/version/{version_id}/director/{director_name}/backend/{backend_name} | Delete a director-backend relationship
[**getDirectorBackend()**](LoadBalancingDirectorsBackendApi.md#getDirectorBackend) | **GET** /service/{service_id}/version/{version_id}/director/{director_name}/backend/{backend_name} | Get a director-backend relationship


## `createDirectorBackend()`

```php
createDirectorBackend($director_name, $service_id, $version_id, $backend_name): \OpenAPI\Client\Model\InlineResponse200
```

Create a director-backend relationship

Establishes a relationship between a Backend and a Director. The Backend is then considered a member of the Director and can be used to balance traffic onto.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoadBalancingDirectorsBackendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$director_name = director-name; // string
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$backend_name = backend-name; // string

try {
    $result = $apiInstance->createDirectorBackend($director_name, $service_id, $version_id, $backend_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoadBalancingDirectorsBackendApi->createDirectorBackend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **director_name** | **string**|  |
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **backend_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[token_engineer](../../README.md#token_engineer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDirectorBackend()`

```php
deleteDirectorBackend($director_name, $service_id, $version_id, $backend_name): object
```

Delete a director-backend relationship

Deletes the relationship between a Backend and a Director. The Backend is no longer considered a member of the Director and thus will not have traffic balanced onto it from this Director.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoadBalancingDirectorsBackendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$director_name = director-name; // string
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$backend_name = backend-name; // string

try {
    $result = $apiInstance->deleteDirectorBackend($director_name, $service_id, $version_id, $backend_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoadBalancingDirectorsBackendApi->deleteDirectorBackend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **director_name** | **string**|  |
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **backend_name** | **string**|  |

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

## `getDirectorBackend()`

```php
getDirectorBackend($director_name, $service_id, $version_id, $backend_name): \OpenAPI\Client\Model\InlineResponse200
```

Get a director-backend relationship

Returns the relationship between a Backend and a Director. If the Backend has been associated with the Director, it returns a simple record indicating this. Otherwise, returns a 404.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoadBalancingDirectorsBackendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$director_name = director-name; // string
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$backend_name = backend-name; // string

try {
    $result = $apiInstance->getDirectorBackend($director_name, $service_id, $version_id, $backend_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoadBalancingDirectorsBackendApi->getDirectorBackend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **director_name** | **string**|  |
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **backend_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[token_engineer](../../README.md#token_engineer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
