# Fastly\Api\StarApi


```php
$apiInstance = new Fastly\Api\StarApi(
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
[**createServiceStar()**](StarApi.md#createServiceStar) | **POST** /stars | Create a star
[**deleteServiceStar()**](StarApi.md#deleteServiceStar) | **DELETE** /stars/{star_id} | Delete a star
[**getServiceStar()**](StarApi.md#getServiceStar) | **GET** /stars/{star_id} | Get a star
[**listServiceStars()**](StarApi.md#listServiceStars) | **GET** /stars | List stars


## `createServiceStar()`

```php
createServiceStar($options): \Fastly\Model\StarResponse // Create a star
```

Create star.

### Example
```php
    $options['star'] = {"data":{"type":"star","relationships":{"user":{"data":{"type":"user","id":"6c7kAlo4vACNchGOdQxP37"}},"service":{"data":{"type":"service","id":"SU1Z0isxPaozGVKXdv0eY"}}}}}; // \Fastly\Model\Star

try {
    $result = $apiInstance->createServiceStar($options);
} catch (Exception $e) {
    echo 'Exception when calling StarApi->createServiceStar: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**star** | [**\Fastly\Model\Star**](../Model/Star.md) |  | [optional]

### Return type

[**\Fastly\Model\StarResponse**](../Model/StarResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteServiceStar()`

```php
deleteServiceStar($options) // Delete a star
```

Delete star.

### Example
```php
    $options['star_id'] = 'star_id_example'; // string | Alphanumeric string identifying a star.

try {
    $apiInstance->deleteServiceStar($options);
} catch (Exception $e) {
    echo 'Exception when calling StarApi->deleteServiceStar: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**star_id** | **string** | Alphanumeric string identifying a star. |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getServiceStar()`

```php
getServiceStar($options): \Fastly\Model\StarResponse // Get a star
```

Show star.

### Example
```php
    $options['star_id'] = 'star_id_example'; // string | Alphanumeric string identifying a star.

try {
    $result = $apiInstance->getServiceStar($options);
} catch (Exception $e) {
    echo 'Exception when calling StarApi->getServiceStar: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**star_id** | **string** | Alphanumeric string identifying a star. |

### Return type

[**\Fastly\Model\StarResponse**](../Model/StarResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listServiceStars()`

```php
listServiceStars($options): Pagination // List stars
```

List stars.

### Example
```php
    
try {
    $result = $apiInstance->listServiceStars($options);
} catch (Exception $e) {
    echo 'Exception when calling StarApi->listServiceStars: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**Pagination**](../Model/Pagination.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
