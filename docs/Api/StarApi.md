# OpenAPI\Client\StarApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createServiceStar()**](StarApi.md#createServiceStar) | **POST** /stars | Create a star
[**deleteServiceStar()**](StarApi.md#deleteServiceStar) | **DELETE** /stars/{star_id} | Delete a star
[**getServiceStar()**](StarApi.md#getServiceStar) | **GET** /stars/{star_id} | Get a star
[**listServiceStars()**](StarApi.md#listServiceStars) | **GET** /stars | List stars


## `createServiceStar()`

```php
createServiceStar($resource_star): \OpenAPI\Client\Model\ResourceStar
```

Create a star

Create star.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\StarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource_star = {"data":{"type":"star","relationships":{"user":{"data":{"type":"user","id\"":"6c7kAlo4vACNchGOdQxP37"}},"service\"":{"data\"":{"type":"service","id":"SU1Z0isxPaozGVKXdv0eY"}}}}}; // \OpenAPI\Client\Model\ResourceStar

try {
    $result = $apiInstance->createServiceStar($resource_star);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StarApi->createServiceStar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_star** | [**\OpenAPI\Client\Model\ResourceStar**](../Model/ResourceStar.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ResourceStar**](../Model/ResourceStar.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/vnd.api+json`
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteServiceStar()`

```php
deleteServiceStar($star_id)
```

Delete a star

Delete star.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\StarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$star_id = 'star_id_example'; // string

try {
    $apiInstance->deleteServiceStar($star_id);
} catch (Exception $e) {
    echo 'Exception when calling StarApi->deleteServiceStar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **star_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServiceStar()`

```php
getServiceStar($star_id): \OpenAPI\Client\Model\ResourceStar
```

Get a star

Show star.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\StarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$star_id = 'star_id_example'; // string

try {
    $result = $apiInstance->getServiceStar($star_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StarApi->getServiceStar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **star_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ResourceStar**](../Model/ResourceStar.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listServiceStars()`

```php
listServiceStars(): object
```

List stars

List stars.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\StarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listServiceStars();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StarApi->listServiceStars: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
