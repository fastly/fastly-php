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
[**deleteKeyFromStore()**](ObjectStoreApi.md#deleteKeyFromStore) | **DELETE** /resources/stores/object/{store_id}/keys/{key_name} | Delete object store key.
[**deleteStore()**](ObjectStoreApi.md#deleteStore) | **DELETE** /resources/stores/object/{store_id} | Delete an object store.
[**getKeys()**](ObjectStoreApi.md#getKeys) | **GET** /resources/stores/object/{store_id}/keys | List object store keys.
[**getStore()**](ObjectStoreApi.md#getStore) | **GET** /resources/stores/object/{store_id} | Describe an object store.
[**getStores()**](ObjectStoreApi.md#getStores) | **GET** /resources/stores/object | List object stores.
[**getValueForKey()**](ObjectStoreApi.md#getValueForKey) | **GET** /resources/stores/object/{store_id}/keys/{key_name} | Get object store key value.
[**setValueForKey()**](ObjectStoreApi.md#setValueForKey) | **PUT** /resources/stores/object/{store_id}/keys/{key_name} | Insert object store key-value.


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

## `deleteKeyFromStore()`

```php
deleteKeyFromStore($options) // Delete object store key.
```

Delete a key from a customer store.

### Example
```php
    $options['store_id'] = 'store_id_example'; // string
$options['key_name'] = 'key_name_example'; // string

try {
    $apiInstance->deleteKeyFromStore($options);
} catch (Exception $e) {
    echo 'Exception when calling ObjectStoreApi->deleteKeyFromStore: ', $e->getMessage(), PHP_EOL;
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

## `deleteStore()`

```php
deleteStore($options) // Delete an object store.
```

An object store must be empty before it can be deleted.  Deleting an object store that still contains keys will result in a 409 Conflict.

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

## `getKeys()`

```php
getKeys($options): \Fastly\Model\KeyResponse // List object store keys.
```

List all keys within an object store.

### Example
```php
    $options['store_id'] = 'store_id_example'; // string
$options['cursor'] = 'cursor_example'; // string
$options['limit'] = 100; // int

try {
    $result = $apiInstance->getKeys($options);
} catch (Exception $e) {
    echo 'Exception when calling ObjectStoreApi->getKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**store_id** | **string** |  |
**cursor** | **string** |  | [optional]
**limit** | **int** |  | [optional] [defaults to 100]

### Return type

[**\Fastly\Model\KeyResponse**](../Model/KeyResponse.md)

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
getStores($options): \Fastly\Model\GetStoresResponse // List object stores.
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

[**\Fastly\Model\GetStoresResponse**](../Model/GetStoresResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getValueForKey()`

```php
getValueForKey($options): \SplFileObject // Get object store key value.
```

Get the value associated with a key.

### Example
```php
    $options['store_id'] = 'store_id_example'; // string
$options['key_name'] = 'key_name_example'; // string

try {
    $result = $apiInstance->getValueForKey($options);
} catch (Exception $e) {
    echo 'Exception when calling ObjectStoreApi->getValueForKey: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**store_id** | **string** |  |
**key_name** | **string** |  |

### Return type

**\SplFileObject**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `setValueForKey()`

```php
setValueForKey($options): \SplFileObject // Insert object store key-value.
```

Insert a new key-value pair into an object store.

### Example
```php
    $options['store_id'] = 'store_id_example'; // string
$options['key_name'] = 'key_name_example'; // string
$options['body'] = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->setValueForKey($options);
} catch (Exception $e) {
    echo 'Exception when calling ObjectStoreApi->setValueForKey: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**store_id** | **string** |  |
**key_name** | **string** |  |
**body** | **\SplFileObject****\SplFileObject** |  | [optional]

### Return type

**\SplFileObject**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
