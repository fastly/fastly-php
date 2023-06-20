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

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**createStore()**](KvStoreApi.md#createStore) | **POST** /resources/stores/kv | Create an kv store.
[**deleteStore()**](KvStoreApi.md#deleteStore) | **DELETE** /resources/stores/kv/{store_id} | Delete an kv store.
[**getStore()**](KvStoreApi.md#getStore) | **GET** /resources/stores/kv/{store_id} | Describe an kv store.
[**getStores()**](KvStoreApi.md#getStores) | **GET** /resources/stores/kv | List kv stores.


## `createStore()`

```php
createStore($options): \Fastly\Model\StoreResponse // Create an kv store.
```

Create a new kv store.

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
deleteStore($options) // Delete an kv store.
```

An kv store must be empty before it can be deleted.  Deleting an kv store that still contains keys will result in a `409` (Conflict).

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
getStore($options): \Fastly\Model\StoreResponse // Describe an kv store.
```

Get an kv store by ID.

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
getStores($options): \Fastly\Model\InlineResponse2003 // List kv stores.
```

Get all stores for a given customer.

### Example
```php
    $options['cursor'] = 'cursor_example'; // string
$options['limit'] = 100; // int

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
**limit** | **int** |  | [optional] [defaults to 100]

### Return type

[**\Fastly\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
