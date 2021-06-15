# OpenAPI\Client\DictionaryItemApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkUpdateDictionaryItem()**](DictionaryItemApi.md#bulkUpdateDictionaryItem) | **PATCH** /service/{service_id}/dictionary/{dictionary_id}/items | Update multiple entries in an edge dictionary
[**createDictionaryItem()**](DictionaryItemApi.md#createDictionaryItem) | **POST** /service/{service_id}/dictionary/{dictionary_id}/item | Create an entry in an edge dictionary
[**deleteDictionaryItem()**](DictionaryItemApi.md#deleteDictionaryItem) | **DELETE** /service/{service_id}/dictionary/{dictionary_id}/item/{dictionary_item_key} | Delete an item from an edge dictionary
[**getDictionaryItem()**](DictionaryItemApi.md#getDictionaryItem) | **GET** /service/{service_id}/dictionary/{dictionary_id}/item/{dictionary_item_key} | Get an item from an edge dictionary
[**listDictionaryItems()**](DictionaryItemApi.md#listDictionaryItems) | **GET** /service/{service_id}/dictionary/{dictionary_id}/items | List items in an edge dictionary
[**updateDictionaryItem()**](DictionaryItemApi.md#updateDictionaryItem) | **PATCH** /service/{service_id}/dictionary/{dictionary_id}/item/{dictionary_item_key} | Update an entry in an edge dictionary
[**upsertDictionaryItem()**](DictionaryItemApi.md#upsertDictionaryItem) | **PUT** /service/{service_id}/dictionary/{dictionary_id}/item/{dictionary_item_key} | Insert or update an entry in an edge dictionary


## `bulkUpdateDictionaryItem()`

```php
bulkUpdateDictionaryItem($service_id, $dictionary_id, $inline_object1): object
```

Update multiple entries in an edge dictionary

Update DictionaryItem in batch for given service, dictionary ID and key/value pairs for items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DictionaryItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$dictionary_id = 'dictionary_id_example'; // string
$inline_object1 = new \OpenAPI\Client\Model\InlineObject1(); // \OpenAPI\Client\Model\InlineObject1

try {
    $result = $apiInstance->bulkUpdateDictionaryItem($service_id, $dictionary_id, $inline_object1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryItemApi->bulkUpdateDictionaryItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **dictionary_id** | **string**|  |
 **inline_object1** | [**\OpenAPI\Client\Model\InlineObject1**](../Model/InlineObject1.md)|  | [optional]

### Return type

**object**

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDictionaryItem()`

```php
createDictionaryItem($service_id, $dictionary_id, $created_at, $deleted_at, $updated_at, $dictionary_id2, $service_id2, $item_key, $item_value): \OpenAPI\Client\Model\ModelDictionaryItem
```

Create an entry in an edge dictionary

Create DictionaryItem given service, dictionary ID, item key, and item value.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DictionaryItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$dictionary_id = 'dictionary_id_example'; // string
$created_at = 'created_at_example'; // string | Date and time in ISO 8601 format.
$deleted_at = 'deleted_at_example'; // string | Date and time in ISO 8601 format.
$updated_at = 'updated_at_example'; // string | Date and time in ISO 8601 format.
$dictionary_id2 = 'dictionary_id_example'; // string | Alphanumeric string identifying a Dictionary.
$service_id2 = 'service_id_example'; // string | Alphanumeric string identifying the service.
$item_key = 'item_key_example'; // string | Item key, maximum 256 characters.
$item_value = 'item_value_example'; // string | Item value, maximum 8000 characters.

try {
    $result = $apiInstance->createDictionaryItem($service_id, $dictionary_id, $created_at, $deleted_at, $updated_at, $dictionary_id2, $service_id2, $item_key, $item_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryItemApi->createDictionaryItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **dictionary_id** | **string**|  |
 **created_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **deleted_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **updated_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **dictionary_id2** | **string**| Alphanumeric string identifying a Dictionary. | [optional]
 **service_id2** | **string**| Alphanumeric string identifying the service. | [optional]
 **item_key** | **string**| Item key, maximum 256 characters. | [optional]
 **item_value** | **string**| Item value, maximum 8000 characters. | [optional]

### Return type

[**\OpenAPI\Client\Model\ModelDictionaryItem**](../Model/ModelDictionaryItem.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDictionaryItem()`

```php
deleteDictionaryItem($service_id, $dictionary_id, $dictionary_item_key): object
```

Delete an item from an edge dictionary

Delete DictionaryItem given service, dictionary ID, and item key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DictionaryItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$dictionary_id = 'dictionary_id_example'; // string
$dictionary_item_key = 'dictionary_item_key_example'; // string

try {
    $result = $apiInstance->deleteDictionaryItem($service_id, $dictionary_id, $dictionary_item_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryItemApi->deleteDictionaryItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **dictionary_id** | **string**|  |
 **dictionary_item_key** | **string**|  |

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

## `getDictionaryItem()`

```php
getDictionaryItem($service_id, $dictionary_id, $dictionary_item_key): \OpenAPI\Client\Model\ModelDictionaryItem
```

Get an item from an edge dictionary

Retrieve a single DictionaryItem given service, dictionary ID and item key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DictionaryItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$dictionary_id = 'dictionary_id_example'; // string
$dictionary_item_key = 'dictionary_item_key_example'; // string

try {
    $result = $apiInstance->getDictionaryItem($service_id, $dictionary_id, $dictionary_item_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryItemApi->getDictionaryItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **dictionary_id** | **string**|  |
 **dictionary_item_key** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelDictionaryItem**](../Model/ModelDictionaryItem.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDictionaryItems()`

```php
listDictionaryItems($service_id, $dictionary_id, $page, $per_page, $sort, $direction): \OpenAPI\Client\Model\ModelDictionaryItem[]
```

List items in an edge dictionary

List of DictionaryItems given service and dictionary ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DictionaryItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$dictionary_id = 'dictionary_id_example'; // string
$page = 56; // int | Current page.
$per_page = 20; // int | Number of records per page.
$sort = 'created'; // string | Field on which to sort.
$direction = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Direction(); // \OpenAPI\Client\Model\Direction | Direction in which to sort results.

try {
    $result = $apiInstance->listDictionaryItems($service_id, $dictionary_id, $page, $per_page, $sort, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryItemApi->listDictionaryItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **dictionary_id** | **string**|  |
 **page** | **int**| Current page. | [optional]
 **per_page** | **int**| Number of records per page. | [optional] [default to 20]
 **sort** | **string**| Field on which to sort. | [optional] [default to &#39;created&#39;]
 **direction** | [**\OpenAPI\Client\Model\Direction**](../Model/.md)| Direction in which to sort results. | [optional]

### Return type

[**\OpenAPI\Client\Model\ModelDictionaryItem[]**](../Model/ModelDictionaryItem.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDictionaryItem()`

```php
updateDictionaryItem($service_id, $dictionary_id, $dictionary_item_key, $created_at, $deleted_at, $updated_at, $dictionary_id2, $service_id2, $item_key, $item_value): \OpenAPI\Client\Model\ModelDictionaryItem
```

Update an entry in an edge dictionary

Update DictionaryItem given service, dictionary ID, item key, and item value.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DictionaryItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$dictionary_id = 'dictionary_id_example'; // string
$dictionary_item_key = 'dictionary_item_key_example'; // string
$created_at = 'created_at_example'; // string | Date and time in ISO 8601 format.
$deleted_at = 'deleted_at_example'; // string | Date and time in ISO 8601 format.
$updated_at = 'updated_at_example'; // string | Date and time in ISO 8601 format.
$dictionary_id2 = 'dictionary_id_example'; // string | Alphanumeric string identifying a Dictionary.
$service_id2 = 'service_id_example'; // string | Alphanumeric string identifying the service.
$item_key = 'item_key_example'; // string | Item key, maximum 256 characters.
$item_value = 'item_value_example'; // string | Item value, maximum 8000 characters.

try {
    $result = $apiInstance->updateDictionaryItem($service_id, $dictionary_id, $dictionary_item_key, $created_at, $deleted_at, $updated_at, $dictionary_id2, $service_id2, $item_key, $item_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryItemApi->updateDictionaryItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **dictionary_id** | **string**|  |
 **dictionary_item_key** | **string**|  |
 **created_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **deleted_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **updated_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **dictionary_id2** | **string**| Alphanumeric string identifying a Dictionary. | [optional]
 **service_id2** | **string**| Alphanumeric string identifying the service. | [optional]
 **item_key** | **string**| Item key, maximum 256 characters. | [optional]
 **item_value** | **string**| Item value, maximum 8000 characters. | [optional]

### Return type

[**\OpenAPI\Client\Model\ModelDictionaryItem**](../Model/ModelDictionaryItem.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertDictionaryItem()`

```php
upsertDictionaryItem($service_id, $dictionary_id, $dictionary_item_key, $created_at, $deleted_at, $updated_at, $dictionary_id2, $service_id2, $item_key, $item_value): \OpenAPI\Client\Model\ModelDictionaryItem
```

Insert or update an entry in an edge dictionary

Upsert DictionaryItem given service, dictionary ID, item key, and item value.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DictionaryItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$dictionary_id = 'dictionary_id_example'; // string
$dictionary_item_key = 'dictionary_item_key_example'; // string
$created_at = 'created_at_example'; // string | Date and time in ISO 8601 format.
$deleted_at = 'deleted_at_example'; // string | Date and time in ISO 8601 format.
$updated_at = 'updated_at_example'; // string | Date and time in ISO 8601 format.
$dictionary_id2 = 'dictionary_id_example'; // string | Alphanumeric string identifying a Dictionary.
$service_id2 = 'service_id_example'; // string | Alphanumeric string identifying the service.
$item_key = 'item_key_example'; // string | Item key, maximum 256 characters.
$item_value = 'item_value_example'; // string | Item value, maximum 8000 characters.

try {
    $result = $apiInstance->upsertDictionaryItem($service_id, $dictionary_id, $dictionary_item_key, $created_at, $deleted_at, $updated_at, $dictionary_id2, $service_id2, $item_key, $item_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryItemApi->upsertDictionaryItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **dictionary_id** | **string**|  |
 **dictionary_item_key** | **string**|  |
 **created_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **deleted_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **updated_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **dictionary_id2** | **string**| Alphanumeric string identifying a Dictionary. | [optional]
 **service_id2** | **string**| Alphanumeric string identifying the service. | [optional]
 **item_key** | **string**| Item key, maximum 256 characters. | [optional]
 **item_value** | **string**| Item value, maximum 8000 characters. | [optional]

### Return type

[**\OpenAPI\Client\Model\ModelDictionaryItem**](../Model/ModelDictionaryItem.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
