# Fastly\Api\ObjectStorageAccessKeysApi


```php
$apiInstance = new Fastly\Api\ObjectStorageAccessKeysApi(
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
[**createAccessKey()**](ObjectStorageAccessKeysApi.md#createAccessKey) | **POST** /resources/object-storage/access-keys | Create an access key
[**deleteAccessKey()**](ObjectStorageAccessKeysApi.md#deleteAccessKey) | **DELETE** /resources/object-storage/access-keys/{access_key} | Delete an access key
[**getAccessKey()**](ObjectStorageAccessKeysApi.md#getAccessKey) | **GET** /resources/object-storage/access-keys/{access_key} | Get an access key
[**listAccessKeys()**](ObjectStorageAccessKeysApi.md#listAccessKeys) | **GET** /resources/object-storage/access-keys | List access keys


## `createAccessKey()`

```php
createAccessKey($options): \Fastly\Model\AccessKeyResponse // Create an access key
```

Create an access key.

### Example
```php
    $options['access_key'] = new \Fastly\Model\AccessKey(); // \Fastly\Model\AccessKey

try {
    $result = $apiInstance->createAccessKey($options);
} catch (Exception $e) {
    echo 'Exception when calling ObjectStorageAccessKeysApi->createAccessKey: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**access_key** | [**\Fastly\Model\AccessKey**](../Model/AccessKey.md) |  | [optional]

### Return type

[**\Fastly\Model\AccessKeyResponse**](../Model/AccessKeyResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteAccessKey()`

```php
deleteAccessKey($options) // Delete an access key
```

Delete an access key.

### Example
```php
    $options['access_key'] = 'access_key_example'; // string

try {
    $apiInstance->deleteAccessKey($options);
} catch (Exception $e) {
    echo 'Exception when calling ObjectStorageAccessKeysApi->deleteAccessKey: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**access_key** | **string** |  |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getAccessKey()`

```php
getAccessKey($options): \Fastly\Model\AccessKey // Get an access key
```

Get an access key by its identifier.

### Example
```php
    $options['access_key'] = 'access_key_example'; // string

try {
    $result = $apiInstance->getAccessKey($options);
} catch (Exception $e) {
    echo 'Exception when calling ObjectStorageAccessKeysApi->getAccessKey: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**access_key** | **string** |  |

### Return type

[**\Fastly\Model\AccessKey**](../Model/AccessKey.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listAccessKeys()`

```php
listAccessKeys($options): \Fastly\Model\AccessKeyResponse // List access keys
```

List access keys.

### Example
```php
    
try {
    $result = $apiInstance->listAccessKeys($options);
} catch (Exception $e) {
    echo 'Exception when calling ObjectStorageAccessKeysApi->listAccessKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\AccessKeyResponse**](../Model/AccessKeyResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
