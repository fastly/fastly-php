# Fastly\Api\ProductObjectStorageApi


```php
$apiInstance = new Fastly\Api\ProductObjectStorageApi(
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
[**disableProductObjectStorage()**](ProductObjectStorageApi.md#disableProductObjectStorage) | **DELETE** /enabled-products/v1/object_storage | Disable product
[**enableObjectStorage()**](ProductObjectStorageApi.md#enableObjectStorage) | **PUT** /enabled-products/v1/object_storage | Enable product
[**getObjectStorage()**](ProductObjectStorageApi.md#getObjectStorage) | **GET** /enabled-products/v1/object_storage | Get product enablement status


## `disableProductObjectStorage()`

```php
disableProductObjectStorage($options) // Disable product
```

Disable the Object Storage product

### Example
```php
    
try {
    $apiInstance->disableProductObjectStorage($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductObjectStorageApi->disableProductObjectStorage: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `enableObjectStorage()`

```php
enableObjectStorage($options): \Fastly\Model\ObjectStorageResponseBodyEnable // Enable product
```

Enable the Object Storage product

### Example
```php
    
try {
    $result = $apiInstance->enableObjectStorage($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductObjectStorageApi->enableObjectStorage: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\ObjectStorageResponseBodyEnable**](../Model/ObjectStorageResponseBodyEnable.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getObjectStorage()`

```php
getObjectStorage($options): \Fastly\Model\ObjectStorageResponseBodyEnable // Get product enablement status
```

Get the enablement status of the Object Storage product

### Example
```php
    
try {
    $result = $apiInstance->getObjectStorage($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductObjectStorageApi->getObjectStorage: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\ObjectStorageResponseBodyEnable**](../Model/ObjectStorageResponseBodyEnable.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
