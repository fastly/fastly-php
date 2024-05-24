# Fastly\Api\KvStoreItemApi


```php
$apiInstance = new Fastly\Api\KvStoreItemApi(
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
[**deleteKeyFromStore()**](KvStoreItemApi.md#deleteKeyFromStore) | **DELETE** /resources/stores/kv/{store_id}/keys/{key_name} | Delete kv store item.
[**getKeys()**](KvStoreItemApi.md#getKeys) | **GET** /resources/stores/kv/{store_id}/keys | List kv store keys.
[**getValueForKey()**](KvStoreItemApi.md#getValueForKey) | **GET** /resources/stores/kv/{store_id}/keys/{key_name} | Get the value of an kv store item
[**setValueForKey()**](KvStoreItemApi.md#setValueForKey) | **PUT** /resources/stores/kv/{store_id}/keys/{key_name} | Insert an item into an kv store


## `deleteKeyFromStore()`

```php
deleteKeyFromStore($options) // Delete kv store item.
```

Delete an item from an kv store

### Example
```php
    $options['store_id'] = 'store_id_example'; // string
$options['key_name'] = 'key_name_example'; // string

try {
    $apiInstance->deleteKeyFromStore($options);
} catch (Exception $e) {
    echo 'Exception when calling KvStoreItemApi->deleteKeyFromStore: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**store_id** | **string** |  |
**key_name** | **string** |  |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getKeys()`

```php
getKeys($options): \Fastly\Model\InlineResponse2004 // List kv store keys.
```

List the keys of all items within an kv store.

### Example
```php
    $options['store_id'] = 'store_id_example'; // string
$options['cursor'] = 'cursor_example'; // string
$options['limit'] = 100; // int
$options['prefix'] = 'prefix_example'; // string

try {
    $result = $apiInstance->getKeys($options);
} catch (Exception $e) {
    echo 'Exception when calling KvStoreItemApi->getKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**store_id** | **string** |  |
**cursor** | **string** |  | [optional]
**limit** | **int** |  | [optional] [defaults to 100]
**prefix** | **string** |  | [optional]

### Return type

[**\Fastly\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getValueForKey()`

```php
getValueForKey($options): string // Get the value of an kv store item
```

Get the value associated with a key.

### Example
```php
    $options['store_id'] = 'store_id_example'; // string
$options['key_name'] = 'key_name_example'; // string

try {
    $result = $apiInstance->getValueForKey($options);
} catch (Exception $e) {
    echo 'Exception when calling KvStoreItemApi->getValueForKey: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**store_id** | **string** |  |
**key_name** | **string** |  |

### Return type

**string**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `setValueForKey()`

```php
setValueForKey($options): string // Insert an item into an kv store
```

Set a new value for a new or existing key in an kv store.

### Example
```php
    $options['store_id'] = 'store_id_example'; // string
$options['key_name'] = 'key_name_example'; // string
$options['if_generation_match'] = 56; // int
$options['time_to_live_sec'] = 56; // int
$options['metadata'] = 'metadata_example'; // string
$options['add'] = True; // bool
$options['append'] = True; // bool
$options['prepend'] = True; // bool
$options['background_fetch'] = True; // bool
$options['body'] = 'body_example'; // string

try {
    $result = $apiInstance->setValueForKey($options);
} catch (Exception $e) {
    echo 'Exception when calling KvStoreItemApi->setValueForKey: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**store_id** | **string** |  |
**key_name** | **string** |  |
**if_generation_match** | **int** |  | [optional]
**time_to_live_sec** | **int** |  | [optional]
**metadata** | **string** |  | [optional]
**add** | **bool** |  | [optional]
**append** | **bool** |  | [optional]
**prepend** | **bool** |  | [optional]
**background_fetch** | **bool** |  | [optional]
**body** | **string** |  | [optional]

### Return type

**string**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
