# OpenAPI\Client\DictionaryApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDictionary()**](DictionaryApi.md#createDictionary) | **POST** /service/{service_id}/version/{version_id}/dictionary | Create an edge dictionary
[**deleteDictionary()**](DictionaryApi.md#deleteDictionary) | **DELETE** /service/{service_id}/version/{version_id}/dictionary/{dictionary_name} | Delete an edge dictionary
[**getDictionary()**](DictionaryApi.md#getDictionary) | **GET** /service/{service_id}/version/{version_id}/dictionary/{dictionary_name} | Get an edge dictionary
[**listDictionaries()**](DictionaryApi.md#listDictionaries) | **GET** /service/{service_id}/version/{version_id}/dictionary | List edge dictionaries
[**updateDictionary()**](DictionaryApi.md#updateDictionary) | **PUT** /service/{service_id}/version/{version_id}/dictionary/{dictionary_name} | Update an edge dictionary


## `createDictionary()`

```php
createDictionary($service_id, $version_id, $created_at, $deleted_at, $updated_at, $id, $name, $service_id2, $version, $write_only): \OpenAPI\Client\Model\ModelDictionary
```

Create an edge dictionary

Create named dictionary for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DictionaryApi(
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
$id = 'id_example'; // string | Alphanumeric string identifying a Dictionary.
$name = 'name_example'; // string | Name for the Dictionary.
$service_id2 = 'service_id_example'; // string | Alphanumeric string identifying the service.
$version = 56; // int | Integer identifying a service version.
$write_only = false; // bool | Determines if items in the dictionary are readable or not.

try {
    $result = $apiInstance->createDictionary($service_id, $version_id, $created_at, $deleted_at, $updated_at, $id, $name, $service_id2, $version, $write_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryApi->createDictionary: ', $e->getMessage(), PHP_EOL;
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
 **id** | **string**| Alphanumeric string identifying a Dictionary. | [optional]
 **name** | **string**| Name for the Dictionary. | [optional]
 **service_id2** | **string**| Alphanumeric string identifying the service. | [optional]
 **version** | **int**| Integer identifying a service version. | [optional]
 **write_only** | **bool**| Determines if items in the dictionary are readable or not. | [optional] [default to false]

### Return type

[**\OpenAPI\Client\Model\ModelDictionary**](../Model/ModelDictionary.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDictionary()`

```php
deleteDictionary($service_id, $version_id, $dictionary_name): object
```

Delete an edge dictionary

Delete named dictionary for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DictionaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$dictionary_name = 'dictionary_name_example'; // string

try {
    $result = $apiInstance->deleteDictionary($service_id, $version_id, $dictionary_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryApi->deleteDictionary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **dictionary_name** | **string**|  |

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

## `getDictionary()`

```php
getDictionary($service_id, $version_id, $dictionary_name): \OpenAPI\Client\Model\ModelDictionary
```

Get an edge dictionary

Retrieve a single dictionary by name for the version and service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DictionaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$dictionary_name = 'dictionary_name_example'; // string

try {
    $result = $apiInstance->getDictionary($service_id, $version_id, $dictionary_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryApi->getDictionary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **dictionary_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelDictionary**](../Model/ModelDictionary.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDictionaries()`

```php
listDictionaries($service_id, $version_id): \OpenAPI\Client\Model\ModelDictionary[]
```

List edge dictionaries

List all dictionaries for the version of the service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DictionaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int

try {
    $result = $apiInstance->listDictionaries($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryApi->listDictionaries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ModelDictionary[]**](../Model/ModelDictionary.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDictionary()`

```php
updateDictionary($service_id, $version_id, $dictionary_name): \OpenAPI\Client\Model\ModelDictionary
```

Update an edge dictionary

Update named dictionary for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DictionaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$dictionary_name = 'dictionary_name_example'; // string

try {
    $result = $apiInstance->updateDictionary($service_id, $version_id, $dictionary_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryApi->updateDictionary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **dictionary_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelDictionary**](../Model/ModelDictionary.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
