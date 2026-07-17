# Fastly\Api\ProductKvStoreApi


```php
$apiInstance = new Fastly\Api\ProductKvStoreApi(
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
[**disableProductKvStore()**](ProductKvStoreApi.md#disableProductKvStore) | **DELETE** /enabled-products/v1/kv_store | Disable product
[**enableKvStore()**](ProductKvStoreApi.md#enableKvStore) | **PUT** /enabled-products/v1/kv_store | Enable product
[**getKvStore()**](ProductKvStoreApi.md#getKvStore) | **GET** /enabled-products/v1/kv_store | Get product enablement status


## `disableProductKvStore()`

```php
disableProductKvStore($options) // Disable product
```

Disable the KV Store product

### Example
```php
    
try {
    $apiInstance->disableProductKvStore($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductKvStoreApi->disableProductKvStore: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `enableKvStore()`

```php
enableKvStore($options): \Fastly\Model\KvStoreResponseBodyEnable // Enable product
```

Enable the KV Store product

### Example
```php
    
try {
    $result = $apiInstance->enableKvStore($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductKvStoreApi->enableKvStore: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\KvStoreResponseBodyEnable**](../Model/KvStoreResponseBodyEnable.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getKvStore()`

```php
getKvStore($options): \Fastly\Model\KvStoreResponseBodyEnable // Get product enablement status
```

Get the enablement status of the KV Store product

### Example
```php
    
try {
    $result = $apiInstance->getKvStore($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductKvStoreApi->getKvStore: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\KvStoreResponseBodyEnable**](../Model/KvStoreResponseBodyEnable.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
