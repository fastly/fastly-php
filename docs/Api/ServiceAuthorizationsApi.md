# OpenAPI\Client\ServiceAuthorizationsApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createServiceAuthorization()**](ServiceAuthorizationsApi.md#createServiceAuthorization) | **POST** /service-authorizations | Create service authorization
[**deleteServiceAuthorization()**](ServiceAuthorizationsApi.md#deleteServiceAuthorization) | **DELETE** /service-authorizations/{service_authorization_id} | Delete service authorization
[**deleteServiceAuthorization2()**](ServiceAuthorizationsApi.md#deleteServiceAuthorization2) | **DELETE** /service-authorizations | Delete service authorizations
[**listServiceAuthorization()**](ServiceAuthorizationsApi.md#listServiceAuthorization) | **GET** /service-authorizations | List service authorizations
[**showServiceAuthorization()**](ServiceAuthorizationsApi.md#showServiceAuthorization) | **GET** /service-authorizations/{service_authorization_id} | Show service authorization
[**updateServiceAuthorization()**](ServiceAuthorizationsApi.md#updateServiceAuthorization) | **PATCH** /service-authorizations/{service_authorization_id} | Update service authorization
[**updateServiceAuthorization2()**](ServiceAuthorizationsApi.md#updateServiceAuthorization2) | **PATCH** /service-authorizations | Update service authorizations


## `createServiceAuthorization()`

```php
createServiceAuthorization($resource_service_authorization): \OpenAPI\Client\Model\ResourceServiceAuthorization
```

Create service authorization

Create service authorization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServiceAuthorizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource_service_authorization = {"data":{"type":"service_authorization","attributes":{"permission":"read_only"},"relationships":{"user":{"data":{"type":"user","id":"6c7kAlo4vACNchGOdQxP37"}},"service":{"data":{"type":"service","id":"SU1Z0isxPaozGVKXdv0eY"}}}}}; // \OpenAPI\Client\Model\ResourceServiceAuthorization

try {
    $result = $apiInstance->createServiceAuthorization($resource_service_authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceAuthorizationsApi->createServiceAuthorization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_service_authorization** | [**\OpenAPI\Client\Model\ResourceServiceAuthorization**](../Model/ResourceServiceAuthorization.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ResourceServiceAuthorization**](../Model/ResourceServiceAuthorization.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/vnd.api+json`
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteServiceAuthorization()`

```php
deleteServiceAuthorization($service_authorization_id)
```

Delete service authorization

Delete service authorization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServiceAuthorizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_authorization_id = 'service_authorization_id_example'; // string

try {
    $apiInstance->deleteServiceAuthorization($service_authorization_id);
} catch (Exception $e) {
    echo 'Exception when calling ServiceAuthorizationsApi->deleteServiceAuthorization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_authorization_id** | **string**|  |

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

## `deleteServiceAuthorization2()`

```php
deleteServiceAuthorization2($inline_object7): \OpenAPI\Client\Model\InlineResponse204
```

Delete service authorizations

Delete service authorizations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServiceAuthorizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object7 = new \OpenAPI\Client\Model\InlineObject7(); // \OpenAPI\Client\Model\InlineObject7

try {
    $result = $apiInstance->deleteServiceAuthorization2($inline_object7);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceAuthorizationsApi->deleteServiceAuthorization2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object7** | [**\OpenAPI\Client\Model\InlineObject7**](../Model/InlineObject7.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse204**](../Model/InlineResponse204.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/vnd.api+json; ext=bulk`
- **Accept**: `application/vnd.api+json; ext=bulk`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listServiceAuthorization()`

```php
listServiceAuthorization($page_number, $page_size): object
```

List service authorizations

List service authorizations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServiceAuthorizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_number = 56; // int | Current page.
$page_size = 20; // int | Number of records per page.

try {
    $result = $apiInstance->listServiceAuthorization($page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceAuthorizationsApi->listServiceAuthorization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_number** | **int**| Current page. | [optional]
 **page_size** | **int**| Number of records per page. | [optional] [default to 20]

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

## `showServiceAuthorization()`

```php
showServiceAuthorization($service_authorization_id): \OpenAPI\Client\Model\ResourceServiceAuthorization
```

Show service authorization

Show service authorization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServiceAuthorizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_authorization_id = 'service_authorization_id_example'; // string

try {
    $result = $apiInstance->showServiceAuthorization($service_authorization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceAuthorizationsApi->showServiceAuthorization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_authorization_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ResourceServiceAuthorization**](../Model/ResourceServiceAuthorization.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateServiceAuthorization()`

```php
updateServiceAuthorization($service_authorization_id, $resource_service_authorization): \OpenAPI\Client\Model\ResourceServiceAuthorization
```

Update service authorization

Update service authorization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServiceAuthorizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_authorization_id = 'service_authorization_id_example'; // string
$resource_service_authorization = {"data":{"id":"3krg2uUGZzb2W9Euo4moOY","type":"service_authorization","attributes":{"permission":"read_only"}}}; // \OpenAPI\Client\Model\ResourceServiceAuthorization

try {
    $result = $apiInstance->updateServiceAuthorization($service_authorization_id, $resource_service_authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceAuthorizationsApi->updateServiceAuthorization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_authorization_id** | **string**|  |
 **resource_service_authorization** | [**\OpenAPI\Client\Model\ResourceServiceAuthorization**](../Model/ResourceServiceAuthorization.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ResourceServiceAuthorization**](../Model/ResourceServiceAuthorization.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateServiceAuthorization2()`

```php
updateServiceAuthorization2($inline_object8): \OpenAPI\Client\Model\InlineObject8
```

Update service authorizations

Update service authorizations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServiceAuthorizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object8 = new \OpenAPI\Client\Model\InlineObject8(); // \OpenAPI\Client\Model\InlineObject8

try {
    $result = $apiInstance->updateServiceAuthorization2($inline_object8);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceAuthorizationsApi->updateServiceAuthorization2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object8** | [**\OpenAPI\Client\Model\InlineObject8**](../Model/InlineObject8.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineObject8**](../Model/InlineObject8.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/vnd.api+json; ext=bulk`
- **Accept**: `application/vnd.api+json; ext=bulk`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
