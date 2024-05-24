# Fastly\Api\ConfigStoreItemApi


```php
$apiInstance = new Fastly\Api\ConfigStoreItemApi(
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
[**bulkUpdateConfigStoreItem()**](ConfigStoreItemApi.md#bulkUpdateConfigStoreItem) | **PATCH** /resources/stores/config/{config_store_id}/items | Update multiple entries in a config store
[**createConfigStoreItem()**](ConfigStoreItemApi.md#createConfigStoreItem) | **POST** /resources/stores/config/{config_store_id}/item | Create an entry in a config store
[**deleteConfigStoreItem()**](ConfigStoreItemApi.md#deleteConfigStoreItem) | **DELETE** /resources/stores/config/{config_store_id}/item/{config_store_item_key} | Delete an item from a config store
[**getConfigStoreItem()**](ConfigStoreItemApi.md#getConfigStoreItem) | **GET** /resources/stores/config/{config_store_id}/item/{config_store_item_key} | Get an item from a config store
[**listConfigStoreItems()**](ConfigStoreItemApi.md#listConfigStoreItems) | **GET** /resources/stores/config/{config_store_id}/items | List items in a config store
[**updateConfigStoreItem()**](ConfigStoreItemApi.md#updateConfigStoreItem) | **PATCH** /resources/stores/config/{config_store_id}/item/{config_store_item_key} | Update an entry in a config store
[**upsertConfigStoreItem()**](ConfigStoreItemApi.md#upsertConfigStoreItem) | **PUT** /resources/stores/config/{config_store_id}/item/{config_store_item_key} | Insert or update an entry in a config store


## `bulkUpdateConfigStoreItem()`

```php
bulkUpdateConfigStoreItem($options): \Fastly\Model\InlineResponse200 // Update multiple entries in a config store
```

Add multiple key-value pairs to an individual config store, specified by ID.

### Example
```php
    $options['config_store_id'] = 'config_store_id_example'; // string | An alphanumeric string identifying the config store.
$options['bulk_update_config_store_list_request'] = {"items":[{"op":"create","item_key":"test-key","item_value":"new-value"},{"op":"update","item_key":"test-key-2","item_value":"new-value-2"},{"op":"upsert","item_key":"test-key-3","item_value":"new-value-3"},{"op":"delete","item_key":"test-key-4"}]}; // \Fastly\Model\BulkUpdateConfigStoreListRequest

try {
    $result = $apiInstance->bulkUpdateConfigStoreItem($options);
} catch (Exception $e) {
    echo 'Exception when calling ConfigStoreItemApi->bulkUpdateConfigStoreItem: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**config_store_id** | **string** | An alphanumeric string identifying the config store. |
**bulk_update_config_store_list_request** | [**\Fastly\Model\BulkUpdateConfigStoreListRequest**](../Model/BulkUpdateConfigStoreListRequest.md) |  | [optional]

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createConfigStoreItem()`

```php
createConfigStoreItem($options): \Fastly\Model\ConfigStoreItemResponse // Create an entry in a config store
```

Add a single key-value pair to an individual config store, specified by ID.

### Example
```php
    $options['config_store_id'] = 'config_store_id_example'; // string | An alphanumeric string identifying the config store.
$options['item_key'] = 'item_key_example'; // string | Item key, maximum 256 characters.
$options['item_value'] = 'item_value_example'; // string | Item value, maximum 8000 characters.

try {
    $result = $apiInstance->createConfigStoreItem($options);
} catch (Exception $e) {
    echo 'Exception when calling ConfigStoreItemApi->createConfigStoreItem: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**config_store_id** | **string** | An alphanumeric string identifying the config store. |
**item_key** | **string** | Item key, maximum 256 characters. | [optional]
**item_value** | **string** | Item value, maximum 8000 characters. | [optional]

### Return type

[**\Fastly\Model\ConfigStoreItemResponse**](../Model/ConfigStoreItemResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteConfigStoreItem()`

```php
deleteConfigStoreItem($options): \Fastly\Model\InlineResponse200 // Delete an item from a config store
```

Delete an entry in a config store given a config store ID, and item key.

### Example
```php
    $options['config_store_id'] = 'config_store_id_example'; // string | An alphanumeric string identifying the config store.
$options['config_store_item_key'] = 'config_store_item_key_example'; // string | Item key, maximum 256 characters.

try {
    $result = $apiInstance->deleteConfigStoreItem($options);
} catch (Exception $e) {
    echo 'Exception when calling ConfigStoreItemApi->deleteConfigStoreItem: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**config_store_id** | **string** | An alphanumeric string identifying the config store. |
**config_store_item_key** | **string** | Item key, maximum 256 characters. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getConfigStoreItem()`

```php
getConfigStoreItem($options): \Fastly\Model\ConfigStoreItemResponse // Get an item from a config store
```

Retrieve a config store entry given a config store ID and item key.

### Example
```php
    $options['config_store_id'] = 'config_store_id_example'; // string | An alphanumeric string identifying the config store.
$options['config_store_item_key'] = 'config_store_item_key_example'; // string | Item key, maximum 256 characters.

try {
    $result = $apiInstance->getConfigStoreItem($options);
} catch (Exception $e) {
    echo 'Exception when calling ConfigStoreItemApi->getConfigStoreItem: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**config_store_id** | **string** | An alphanumeric string identifying the config store. |
**config_store_item_key** | **string** | Item key, maximum 256 characters. |

### Return type

[**\Fastly\Model\ConfigStoreItemResponse**](../Model/ConfigStoreItemResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listConfigStoreItems()`

```php
listConfigStoreItems($options): \Fastly\Model\ConfigStoreItemResponse[] // List items in a config store
```

List the key-value pairs associated with a given config store ID.

### Example
```php
    $options['config_store_id'] = 'config_store_id_example'; // string | An alphanumeric string identifying the config store.

try {
    $result = $apiInstance->listConfigStoreItems($options);
} catch (Exception $e) {
    echo 'Exception when calling ConfigStoreItemApi->listConfigStoreItems: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**config_store_id** | **string** | An alphanumeric string identifying the config store. |

### Return type

[**\Fastly\Model\ConfigStoreItemResponse[]**](../Model/ConfigStoreItemResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateConfigStoreItem()`

```php
updateConfigStoreItem($options): \Fastly\Model\ConfigStoreItemResponse // Update an entry in a config store
```

Update an entry in a config store given a config store ID, item key, and item value.

### Example
```php
    $options['config_store_id'] = 'config_store_id_example'; // string | An alphanumeric string identifying the config store.
$options['config_store_item_key'] = 'config_store_item_key_example'; // string | Item key, maximum 256 characters.
$options['item_key'] = 'item_key_example'; // string | Item key, maximum 256 characters.
$options['item_value'] = 'item_value_example'; // string | Item value, maximum 8000 characters.

try {
    $result = $apiInstance->updateConfigStoreItem($options);
} catch (Exception $e) {
    echo 'Exception when calling ConfigStoreItemApi->updateConfigStoreItem: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**config_store_id** | **string** | An alphanumeric string identifying the config store. |
**config_store_item_key** | **string** | Item key, maximum 256 characters. |
**item_key** | **string** | Item key, maximum 256 characters. | [optional]
**item_value** | **string** | Item value, maximum 8000 characters. | [optional]

### Return type

[**\Fastly\Model\ConfigStoreItemResponse**](../Model/ConfigStoreItemResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `upsertConfigStoreItem()`

```php
upsertConfigStoreItem($options): \Fastly\Model\ConfigStoreItemResponse // Insert or update an entry in a config store
```

Insert or update an entry in a config store given a config store ID, item key, and item value.

### Example
```php
    $options['config_store_id'] = 'config_store_id_example'; // string | An alphanumeric string identifying the config store.
$options['config_store_item_key'] = 'config_store_item_key_example'; // string | Item key, maximum 256 characters.
$options['item_key'] = 'item_key_example'; // string | Item key, maximum 256 characters.
$options['item_value'] = 'item_value_example'; // string | Item value, maximum 8000 characters.

try {
    $result = $apiInstance->upsertConfigStoreItem($options);
} catch (Exception $e) {
    echo 'Exception when calling ConfigStoreItemApi->upsertConfigStoreItem: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**config_store_id** | **string** | An alphanumeric string identifying the config store. |
**config_store_item_key** | **string** | Item key, maximum 256 characters. |
**item_key** | **string** | Item key, maximum 256 characters. | [optional]
**item_value** | **string** | Item value, maximum 8000 characters. | [optional]

### Return type

[**\Fastly\Model\ConfigStoreItemResponse**](../Model/ConfigStoreItemResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
