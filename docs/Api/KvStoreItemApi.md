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
[**kvStoreDeleteItem()**](KvStoreItemApi.md#kvStoreDeleteItem) | **DELETE** /resources/stores/kv/{store_id}/keys/{key} | Delete an item.
[**kvStoreGetItem()**](KvStoreItemApi.md#kvStoreGetItem) | **GET** /resources/stores/kv/{store_id}/keys/{key} | Get an item.
[**kvStoreListItemKeys()**](KvStoreItemApi.md#kvStoreListItemKeys) | **GET** /resources/stores/kv/{store_id}/keys | List item keys.
[**kvStoreUpsertItem()**](KvStoreItemApi.md#kvStoreUpsertItem) | **PUT** /resources/stores/kv/{store_id}/keys/{key} | Insert or update an item.


## `kvStoreDeleteItem()`

```php
kvStoreDeleteItem($options) // Delete an item.
```

Delete an item.

### Example
```php
    $options['store_id'] = 'store_id_example'; // string
$options['key'] = 'key_example'; // string
$options['if_generation_match'] = 56; // int
$options['force'] = false; // bool

try {
    $apiInstance->kvStoreDeleteItem($options);
} catch (Exception $e) {
    echo 'Exception when calling KvStoreItemApi->kvStoreDeleteItem: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**store_id** | **string** |  |
**key** | **string** |  |
**if_generation_match** | **int** |  | [optional]
**force** | **bool** |  | [optional] [defaults to false]

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `kvStoreGetItem()`

```php
kvStoreGetItem($options): string // Get an item.
```

Get an item, including its value, metadata (if any), and generation marker.

### Example
```php
    $options['store_id'] = 'store_id_example'; // string
$options['key'] = 'key_example'; // string

try {
    $result = $apiInstance->kvStoreGetItem($options);
} catch (Exception $e) {
    echo 'Exception when calling KvStoreItemApi->kvStoreGetItem: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**store_id** | **string** |  |
**key** | **string** |  |

### Return type

**string**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `kvStoreListItemKeys()`

```php
kvStoreListItemKeys($options): \Fastly\Model\InlineResponse2006 // List item keys.
```

Lists the matching item keys (or all item keys, if no prefix is supplied).

### Example
```php
    $options['store_id'] = 'store_id_example'; // string
$options['cursor'] = 'cursor_example'; // string
$options['limit'] = 100; // int
$options['prefix'] = 'prefix_example'; // string
$options['consistency'] = 'strong'; // string

try {
    $result = $apiInstance->kvStoreListItemKeys($options);
} catch (Exception $e) {
    echo 'Exception when calling KvStoreItemApi->kvStoreListItemKeys: ', $e->getMessage(), PHP_EOL;
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
**consistency** | **string** |  | [optional] [one of: 'strong', 'eventual'] [defaults to 'strong']

### Return type

[**\Fastly\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `kvStoreUpsertItem()`

```php
kvStoreUpsertItem($options) // Insert or update an item.
```

Inserts or updates an item's value and metadata.

### Example
```php
    $options['store_id'] = 'store_id_example'; // string
$options['key'] = 'key_example'; // string
$options['if_generation_match'] = 56; // int
$options['time_to_live_sec'] = 56; // int
$options['metadata'] = 'metadata_example'; // string
$options['add'] = false; // bool
$options['append'] = false; // bool
$options['prepend'] = false; // bool
$options['background_fetch'] = false; // bool
$options['body'] = 'body_example'; // string

try {
    $apiInstance->kvStoreUpsertItem($options);
} catch (Exception $e) {
    echo 'Exception when calling KvStoreItemApi->kvStoreUpsertItem: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**store_id** | **string** |  |
**key** | **string** |  |
**if_generation_match** | **int** |  | [optional]
**time_to_live_sec** | **int** |  | [optional]
**metadata** | **string** |  | [optional]
**add** | **bool** |  | [optional] [defaults to false]
**append** | **bool** |  | [optional] [defaults to false]
**prepend** | **bool** |  | [optional] [defaults to false]
**background_fetch** | **bool** |  | [optional] [defaults to false]
**body** | **string** |  | [optional]

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
