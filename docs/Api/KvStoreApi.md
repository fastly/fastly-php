# Fastly\Api\KvStoreApi


```php
$apiInstance = new Fastly\Api\KvStoreApi(
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
[**createStore()**](KvStoreApi.md#createStore) | **POST** /resources/stores/kv | Create a KV store.
[**deleteStore()**](KvStoreApi.md#deleteStore) | **DELETE** /resources/stores/kv/{store_id} | Delete a KV store.
[**getStore()**](KvStoreApi.md#getStore) | **GET** /resources/stores/kv/{store_id} | Describe a KV store.
[**getStores()**](KvStoreApi.md#getStores) | **GET** /resources/stores/kv | List KV stores.


## `createStore()`

```php
createStore($options): \Fastly\Model\StoreResponse // Create a KV store.
```

Create a new KV store.

### Example
```php
    $options['location'] = 'location_example'; // string
$options['store'] = {"name":"my-store"}; // \Fastly\Model\Store

try {
    $result = $apiInstance->createStore($options);
} catch (Exception $e) {
    echo 'Exception when calling KvStoreApi->createStore: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**location** | **string** |  | [optional]
**store** | [**\Fastly\Model\Store**](../Model/Store.md) |  | [optional]

### Return type

[**\Fastly\Model\StoreResponse**](../Model/StoreResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteStore()`

```php
deleteStore($options) // Delete a KV store.
```

A KV store must be empty before it can be deleted.  Deleting a KV store that still contains keys will result in a `409` (Conflict).

### Example
```php
    $options['store_id'] = 'store_id_example'; // string

try {
    $apiInstance->deleteStore($options);
} catch (Exception $e) {
    echo 'Exception when calling KvStoreApi->deleteStore: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**store_id** | **string** |  |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getStore()`

```php
getStore($options): \Fastly\Model\StoreResponse // Describe a KV store.
```

Get a KV store by ID.

### Example
```php
    $options['store_id'] = 'store_id_example'; // string

try {
    $result = $apiInstance->getStore($options);
} catch (Exception $e) {
    echo 'Exception when calling KvStoreApi->getStore: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**store_id** | **string** |  |

### Return type

[**\Fastly\Model\StoreResponse**](../Model/StoreResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getStores()`

```php
getStores($options): \Fastly\Model\InlineResponse2003 // List KV stores.
```

Get all stores for a given customer.

### Example
```php
    $options['cursor'] = 'cursor_example'; // string
$options['limit'] = 1000; // int

try {
    $result = $apiInstance->getStores($options);
} catch (Exception $e) {
    echo 'Exception when calling KvStoreApi->getStores: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**cursor** | **string** |  | [optional]
**limit** | **int** |  | [optional] [defaults to 1000]

### Return type

[**\Fastly\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
