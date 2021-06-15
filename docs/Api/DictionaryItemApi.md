# Fastly\Api\DictionaryItemApi


```php
$apiInstance = new Fastly\Api\DictionaryItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

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
bulkUpdateDictionaryItem($options): object // Update multiple entries in an edge dictionary
```

Update DictionaryItem in batch for given service, dictionary ID and key/value pairs for items.

### Example
```php
try {
    $result = $apiInstance->bulkUpdateDictionaryItem($options);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryItemApi->bulkUpdateDictionaryItem: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**dictionary_id** | **string** |  |
**inline_object** | [**\Fastly\Model\InlineObject**](../Model/InlineObject.md) |  | [optional]

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createDictionaryItem()`

```php
createDictionaryItem($options): \Fastly\Model\DictionaryItemResponse // Create an entry in an edge dictionary
```

Create DictionaryItem given service, dictionary ID, item key, and item value.

### Example
```php
try {
    $result = $apiInstance->createDictionaryItem($options);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryItemApi->createDictionaryItem: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**dictionary_id** | **string** |  |
**item_key** | **string** | Item key, maximum 256 characters. | [optional]
**item_value** | **string** | Item value, maximum 8000 characters. | [optional]

### Return type

[**\Fastly\Model\DictionaryItemResponse**](../Model/DictionaryItemResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteDictionaryItem()`

```php
deleteDictionaryItem($options): object // Delete an item from an edge dictionary
```

Delete DictionaryItem given service, dictionary ID, and item key.

### Example
```php
try {
    $result = $apiInstance->deleteDictionaryItem($options);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryItemApi->deleteDictionaryItem: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**dictionary_id** | **string** |  |
**dictionary_item_key** | **string** |  |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getDictionaryItem()`

```php
getDictionaryItem($options): \Fastly\Model\DictionaryItemResponse // Get an item from an edge dictionary
```

Retrieve a single DictionaryItem given service, dictionary ID and item key.

### Example
```php
try {
    $result = $apiInstance->getDictionaryItem($options);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryItemApi->getDictionaryItem: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**dictionary_id** | **string** |  |
**dictionary_item_key** | **string** |  |

### Return type

[**\Fastly\Model\DictionaryItemResponse**](../Model/DictionaryItemResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listDictionaryItems()`

```php
listDictionaryItems($options): \Fastly\Model\DictionaryItemResponse[] // List items in an edge dictionary
```

List of DictionaryItems given service and dictionary ID.

### Example
```php
try {
    $result = $apiInstance->listDictionaryItems($options);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryItemApi->listDictionaryItems: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**dictionary_id** | **string** |  |
**page** | **int** | Current page. | [optional]
**per_page** | **int** | Number of records per page. | [optional] [default to 20]
**sort** | **string** | Field on which to sort. | [optional] [default to &#39;created&#39;]
**direction** | **string** | Direction in which to sort results. | [optional] [default to &#39;ascend&#39;]

### Return type

[**\Fastly\Model\DictionaryItemResponse[]**](../Model/DictionaryItemResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateDictionaryItem()`

```php
updateDictionaryItem($options): \Fastly\Model\DictionaryItemResponse // Update an entry in an edge dictionary
```

Update DictionaryItem given service, dictionary ID, item key, and item value.

### Example
```php
try {
    $result = $apiInstance->updateDictionaryItem($options);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryItemApi->updateDictionaryItem: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**dictionary_id** | **string** |  |
**dictionary_item_key** | **string** |  |
**item_key** | **string** | Item key, maximum 256 characters. | [optional]
**item_value** | **string** | Item value, maximum 8000 characters. | [optional]

### Return type

[**\Fastly\Model\DictionaryItemResponse**](../Model/DictionaryItemResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `upsertDictionaryItem()`

```php
upsertDictionaryItem($options): \Fastly\Model\DictionaryItemResponse // Insert or update an entry in an edge dictionary
```

Upsert DictionaryItem given service, dictionary ID, item key, and item value.

### Example
```php
try {
    $result = $apiInstance->upsertDictionaryItem($options);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryItemApi->upsertDictionaryItem: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**dictionary_id** | **string** |  |
**dictionary_item_key** | **string** |  |
**item_key** | **string** | Item key, maximum 256 characters. | [optional]
**item_value** | **string** | Item value, maximum 8000 characters. | [optional]

### Return type

[**\Fastly\Model\DictionaryItemResponse**](../Model/DictionaryItemResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
