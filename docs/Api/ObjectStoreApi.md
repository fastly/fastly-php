# Fastly\Api\ObjectStoreApi


```php
$apiInstance = new Fastly\Api\ObjectStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**createStore()**](ObjectStoreApi.md#createStore) | **POST** /resources/stores/object | Create an object store.
[**deleteStore()**](ObjectStoreApi.md#deleteStore) | **DELETE** /resources/stores/object/{store_id} | Delete an object store.
[**getStore()**](ObjectStoreApi.md#getStore) | **GET** /resources/stores/object/{store_id} | Describe an object store.
[**getStores()**](ObjectStoreApi.md#getStores) | **GET** /resources/stores/object | List object stores.


## `createStore()`

```php
createStore($options): \Fastly\Model\StoreResponse // Create an object store.
```

Create a new object store.

### Example
```php
    $options['store'] = {"name":"my-store"}; // \Fastly\Model\Store

try {
    $result = $apiInstance->createStore($options);
} catch (Exception $e) {
    echo 'Exception when calling ObjectStoreApi->createStore: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**store** | [**\Fastly\Model\Store**](../Model/Store.md) |  | [optional]

### Return type

[**\Fastly\Model\StoreResponse**](../Model/StoreResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteStore()`

```php
deleteStore($options) // Delete an object store.
```

An object store must be empty before it can be deleted.  Deleting an object store that still contains keys will result in a `409` (Conflict).

### Example
```php
    $options['store_id'] = 'store_id_example'; // string

try {
    $apiInstance->deleteStore($options);
} catch (Exception $e) {
    echo 'Exception when calling ObjectStoreApi->deleteStore: ', $e->getMessage(), PHP_EOL;
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
getStore($options): \Fastly\Model\StoreResponse // Describe an object store.
```

Get an object store by ID.

### Example
```php
    $options['store_id'] = 'store_id_example'; // string

try {
    $result = $apiInstance->getStore($options);
} catch (Exception $e) {
    echo 'Exception when calling ObjectStoreApi->getStore: ', $e->getMessage(), PHP_EOL;
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
getStores($options): \Fastly\Model\InlineResponse2002 // List object stores.
```

Get all stores for a given customer.

### Example
```php
    $options['cursor'] = 'cursor_example'; // string
$options['limit'] = 100; // int

try {
    $result = $apiInstance->getStores($options);
} catch (Exception $e) {
    echo 'Exception when calling ObjectStoreApi->getStores: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**cursor** | **string** |  | [optional]
**limit** | **int** |  | [optional] [defaults to 100]

### Return type

[**\Fastly\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
