# Fastly\Api\DictionaryItemApi


```php
$apiInstance = new Fastly\Api\DictionaryItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
```

## Methods

> [!NOTE]
> All URIs are relative to `https://api.fastly.com`

Method | HTTP request | Description
------ | ------------ | -----------
[**bulkUpdateDictionaryItem()**](DictionaryItemApi.md#bulkUpdateDictionaryItem) | **PATCH** /service/{service_id}/dictionary/{dictionary_id}/items | Update multiple entries in an edge dictionary
[**createDictionaryItem()**](DictionaryItemApi.md#createDictionaryItem) | **POST** /service/{service_id}/dictionary/{dictionary_id}/item | Create an entry in an edge dictionary
[**deleteDictionaryItem()**](DictionaryItemApi.md#deleteDictionaryItem) | **DELETE** /service/{service_id}/dictionary/{dictionary_id}/item/{dictionary_item_key} | Delete an item from an edge dictionary
[**getDictionaryItem()**](DictionaryItemApi.md#getDictionaryItem) | **GET** /service/{service_id}/dictionary/{dictionary_id}/item/{dictionary_item_key} | Get an item from an edge dictionary
[**listDictionaryItems()**](DictionaryItemApi.md#listDictionaryItems) | **GET** /service/{service_id}/dictionary/{dictionary_id}/items | List items in an edge dictionary
[**updateDictionaryItem()**](DictionaryItemApi.md#updateDictionaryItem) | **PATCH** /service/{service_id}/dictionary/{dictionary_id}/item/{dictionary_item_key} | Update an entry in an edge dictionary
[**upsertDictionaryItem()**](DictionaryItemApi.md#upsertDictionaryItem) | **PUT** /service/{service_id}/dictionary/{dictionary_id}/item/{dictionary_item_key} | Insert or update an entry in an edge dictionary


## `bulkUpdateDictionaryItem()`

```php
bulkUpdateDictionaryItem($options): \Fastly\Model\InlineResponse200 // Update multiple entries in an edge dictionary
```

Update multiple items in the same dictionary. For faster updates to your service, group your changes into large batches. The maximum batch size is 1000 items. [Contact support](https://support.fastly.com/) to discuss raising this limit.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['dictionary_id'] = 'dictionary_id_example'; // string | Alphanumeric string identifying a Dictionary.
$options['bulk_update_dictionary_list_request'] = {"items":[{"op":"create","item_key":"test-key","item_value":"new-value"},{"op":"update","item_key":"test-key-2","item_value":"new-value-2"},{"op":"upsert","item_key":"test-key-3","item_value":"new-value-3"},{"op":"delete","item_key":"test-key-4"}]}; // \Fastly\Model\BulkUpdateDictionaryListRequest

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**dictionary_id** | **string** | Alphanumeric string identifying a Dictionary. |
**bulk_update_dictionary_list_request** | [**\Fastly\Model\BulkUpdateDictionaryListRequest**](../Model/BulkUpdateDictionaryListRequest.md) |  | [optional]

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createDictionaryItem()`

```php
createDictionaryItem($options): \Fastly\Model\DictionaryItemResponse // Create an entry in an edge dictionary
```

Create DictionaryItem given service, dictionary ID, item key, and item value.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['dictionary_id'] = 'dictionary_id_example'; // string | Alphanumeric string identifying a Dictionary.
$options['item_key'] = 'item_key_example'; // string | Item key, maximum 256 characters.
$options['item_value'] = 'item_value_example'; // string | Item value, maximum 8000 characters.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**dictionary_id** | **string** | Alphanumeric string identifying a Dictionary. |
**item_key** | **string** | Item key, maximum 256 characters. | [optional]
**item_value** | **string** | Item value, maximum 8000 characters. | [optional]

### Return type

[**\Fastly\Model\DictionaryItemResponse**](../Model/DictionaryItemResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteDictionaryItem()`

```php
deleteDictionaryItem($options): \Fastly\Model\InlineResponse200 // Delete an item from an edge dictionary
```

Delete DictionaryItem given service, dictionary ID, and item key.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['dictionary_id'] = 'dictionary_id_example'; // string | Alphanumeric string identifying a Dictionary.
$options['dictionary_item_key'] = 'dictionary_item_key_example'; // string | Item key, maximum 256 characters.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**dictionary_id** | **string** | Alphanumeric string identifying a Dictionary. |
**dictionary_item_key** | **string** | Item key, maximum 256 characters. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getDictionaryItem()`

```php
getDictionaryItem($options): \Fastly\Model\DictionaryItemResponse // Get an item from an edge dictionary
```

Retrieve a single DictionaryItem given service, dictionary ID and item key.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['dictionary_id'] = 'dictionary_id_example'; // string | Alphanumeric string identifying a Dictionary.
$options['dictionary_item_key'] = 'dictionary_item_key_example'; // string | Item key, maximum 256 characters.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**dictionary_id** | **string** | Alphanumeric string identifying a Dictionary. |
**dictionary_item_key** | **string** | Item key, maximum 256 characters. |

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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['dictionary_id'] = 'dictionary_id_example'; // string | Alphanumeric string identifying a Dictionary.
$options['page'] = 1; // int | Current page.
$options['per_page'] = 20; // int | Number of records per page.
$options['sort'] = created; // string | Field on which to sort.
$options['direction'] = ascend; // string | Direction in which to sort results.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**dictionary_id** | **string** | Alphanumeric string identifying a Dictionary. |
**page** | **int** | Current page. | [optional]
**per_page** | **int** | Number of records per page. | [optional] [defaults to 20]
**sort** | **string** | Field on which to sort. | [optional] [defaults to 'created']
**direction** | **string** | Direction in which to sort results. | [optional] [one of: 'ascend', 'descend'] [defaults to 'ascend']

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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['dictionary_id'] = 'dictionary_id_example'; // string | Alphanumeric string identifying a Dictionary.
$options['dictionary_item_key'] = 'dictionary_item_key_example'; // string | Item key, maximum 256 characters.
$options['item_key'] = 'item_key_example'; // string | Item key, maximum 256 characters.
$options['item_value'] = 'item_value_example'; // string | Item value, maximum 8000 characters.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**dictionary_id** | **string** | Alphanumeric string identifying a Dictionary. |
**dictionary_item_key** | **string** | Item key, maximum 256 characters. |
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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['dictionary_id'] = 'dictionary_id_example'; // string | Alphanumeric string identifying a Dictionary.
$options['dictionary_item_key'] = 'dictionary_item_key_example'; // string | Item key, maximum 256 characters.
$options['item_key'] = 'item_key_example'; // string | Item key, maximum 256 characters.
$options['item_value'] = 'item_value_example'; // string | Item value, maximum 8000 characters.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**dictionary_id** | **string** | Alphanumeric string identifying a Dictionary. |
**dictionary_item_key** | **string** | Item key, maximum 256 characters. |
**item_key** | **string** | Item key, maximum 256 characters. | [optional]
**item_value** | **string** | Item value, maximum 8000 characters. | [optional]

### Return type

[**\Fastly\Model\DictionaryItemResponse**](../Model/DictionaryItemResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
