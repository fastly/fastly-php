# OpenAPI\Client\ResponseObjectApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createResponseObject()**](ResponseObjectApi.md#createResponseObject) | **POST** /service/{service_id}/version/{version_id}/response_object | Create a Response object
[**deleteResponseObject()**](ResponseObjectApi.md#deleteResponseObject) | **DELETE** /service/{service_id}/version/{version_id}/response_object/{response_object_name} | Delete a Response Object
[**getResponseObject()**](ResponseObjectApi.md#getResponseObject) | **GET** /service/{service_id}/version/{version_id}/response_object/{response_object_name} | Get a Response object
[**listResponseObjects()**](ResponseObjectApi.md#listResponseObjects) | **GET** /service/{service_id}/version/{version_id}/response_object | List Response objects
[**updateResponseObject()**](ResponseObjectApi.md#updateResponseObject) | **PUT** /service/{service_id}/version/{version_id}/response_object/{response_object_name} | Update a Response object


## `createResponseObject()`

```php
createResponseObject($service_id, $version_id): \OpenAPI\Client\Model\ModelResponseObject
```

Create a Response object

Creates a new Response Object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ResponseObjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int

try {
    $result = $apiInstance->createResponseObject($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResponseObjectApi->createResponseObject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ModelResponseObject**](../Model/ModelResponseObject.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteResponseObject()`

```php
deleteResponseObject($service_id, $version_id, $response_object_name): object
```

Delete a Response Object

Deletes the specified Response Object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ResponseObjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$response_object_name = 'response_object_name_example'; // string

try {
    $result = $apiInstance->deleteResponseObject($service_id, $version_id, $response_object_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResponseObjectApi->deleteResponseObject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **response_object_name** | **string**|  |

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

## `getResponseObject()`

```php
getResponseObject($service_id, $version_id, $response_object_name): \OpenAPI\Client\Model\ModelResponseObject
```

Get a Response object

Gets the specified Response Object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ResponseObjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$response_object_name = 'response_object_name_example'; // string

try {
    $result = $apiInstance->getResponseObject($service_id, $version_id, $response_object_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResponseObjectApi->getResponseObject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **response_object_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelResponseObject**](../Model/ModelResponseObject.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listResponseObjects()`

```php
listResponseObjects($service_id, $version_id): \OpenAPI\Client\Model\ModelResponseObject[]
```

List Response objects

Returns all Response Objects for the specified service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ResponseObjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int

try {
    $result = $apiInstance->listResponseObjects($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResponseObjectApi->listResponseObjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ModelResponseObject[]**](../Model/ModelResponseObject.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateResponseObject()`

```php
updateResponseObject($service_id, $version_id, $response_object_name): \OpenAPI\Client\Model\ModelResponseObject
```

Update a Response object

Updates the specified Response Object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ResponseObjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$response_object_name = 'response_object_name_example'; // string

try {
    $result = $apiInstance->updateResponseObject($service_id, $version_id, $response_object_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResponseObjectApi->updateResponseObject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **response_object_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelResponseObject**](../Model/ModelResponseObject.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
