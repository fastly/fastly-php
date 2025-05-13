# Fastly\Api\ProductBrotliCompressionApi


```php
$apiInstance = new Fastly\Api\ProductBrotliCompressionApi(
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
[**disableProductBrotliCompression()**](ProductBrotliCompressionApi.md#disableProductBrotliCompression) | **DELETE** /enabled-products/v1/brotli_compression/services/{service_id} | Disable product
[**enableProductBrotliCompression()**](ProductBrotliCompressionApi.md#enableProductBrotliCompression) | **PUT** /enabled-products/v1/brotli_compression/services/{service_id} | Enable product
[**getProductBrotliCompression()**](ProductBrotliCompressionApi.md#getProductBrotliCompression) | **GET** /enabled-products/v1/brotli_compression/services/{service_id} | Get product enablement status
[**getServicesProductBrotliCompression()**](ProductBrotliCompressionApi.md#getServicesProductBrotliCompression) | **GET** /enabled-products/v1/brotli_compression/services | Get services with product enabled


## `disableProductBrotliCompression()`

```php
disableProductBrotliCompression($options) // Disable product
```

Disable the Brotli Compression product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $apiInstance->disableProductBrotliCompression($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductBrotliCompressionApi->disableProductBrotliCompression: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `enableProductBrotliCompression()`

```php
enableProductBrotliCompression($options): \Fastly\Model\BrotliCompressionResponseBodyEnable // Enable product
```

Enable the Brotli Compression product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $result = $apiInstance->enableProductBrotliCompression($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductBrotliCompressionApi->enableProductBrotliCompression: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

[**\Fastly\Model\BrotliCompressionResponseBodyEnable**](../Model/BrotliCompressionResponseBodyEnable.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getProductBrotliCompression()`

```php
getProductBrotliCompression($options): \Fastly\Model\BrotliCompressionResponseBodyEnable // Get product enablement status
```

Get the enablement status of the Brotli Compression product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $result = $apiInstance->getProductBrotliCompression($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductBrotliCompressionApi->getProductBrotliCompression: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

[**\Fastly\Model\BrotliCompressionResponseBodyEnable**](../Model/BrotliCompressionResponseBodyEnable.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getServicesProductBrotliCompression()`

```php
getServicesProductBrotliCompression($options): \Fastly\Model\BrotliCompressionResponseBodyGetAllServices // Get services with product enabled
```

Get all the services which have the Brotli Compression product enabled.

### Example
```php
    
try {
    $result = $apiInstance->getServicesProductBrotliCompression($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductBrotliCompressionApi->getServicesProductBrotliCompression: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\BrotliCompressionResponseBodyGetAllServices**](../Model/BrotliCompressionResponseBodyGetAllServices.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
