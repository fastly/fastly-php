# Fastly\Api\StarApi


```php
$apiInstance = new Fastly\Api\StarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | HTTP request | Description
------------- | ------------- | -------------
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
**star_data** | [**\Fastly\Model\StarData**](../Model/StarData.md) |  | [optional]

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
**star_id** | **string** |  |

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
**star_id** | **string** |  |

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

This endpoint does not need any parameter.

### Return type

[**Pagination**](../Model/Pagination.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
