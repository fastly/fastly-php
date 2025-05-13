# Fastly\Api\ProductImageOptimizerApi


```php
$apiInstance = new Fastly\Api\ProductImageOptimizerApi(
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
[**disableProductImageOptimizer()**](ProductImageOptimizerApi.md#disableProductImageOptimizer) | **DELETE** /enabled-products/v1/image_optimizer/services/{service_id} | Disable product
[**enableProductImageOptimizer()**](ProductImageOptimizerApi.md#enableProductImageOptimizer) | **PUT** /enabled-products/v1/image_optimizer/services/{service_id} | Enable product
[**getProductImageOptimizer()**](ProductImageOptimizerApi.md#getProductImageOptimizer) | **GET** /enabled-products/v1/image_optimizer/services/{service_id} | Get product enablement status
[**getServicesProductImageOptimizer()**](ProductImageOptimizerApi.md#getServicesProductImageOptimizer) | **GET** /enabled-products/v1/image_optimizer/services | Get services with product enabled


## `disableProductImageOptimizer()`

```php
disableProductImageOptimizer($options) // Disable product
```

Disable the Image Optimizer product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $apiInstance->disableProductImageOptimizer($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductImageOptimizerApi->disableProductImageOptimizer: ', $e->getMessage(), PHP_EOL;
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

## `enableProductImageOptimizer()`

```php
enableProductImageOptimizer($options): \Fastly\Model\ImageOptimizerResponseBodyEnable // Enable product
```

Enable the Image Optimizer product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $result = $apiInstance->enableProductImageOptimizer($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductImageOptimizerApi->enableProductImageOptimizer: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

[**\Fastly\Model\ImageOptimizerResponseBodyEnable**](../Model/ImageOptimizerResponseBodyEnable.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getProductImageOptimizer()`

```php
getProductImageOptimizer($options): \Fastly\Model\ImageOptimizerResponseBodyEnable // Get product enablement status
```

Get the enablement status of the Image Optimizer product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $result = $apiInstance->getProductImageOptimizer($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductImageOptimizerApi->getProductImageOptimizer: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

[**\Fastly\Model\ImageOptimizerResponseBodyEnable**](../Model/ImageOptimizerResponseBodyEnable.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getServicesProductImageOptimizer()`

```php
getServicesProductImageOptimizer($options): \Fastly\Model\ImageOptimizerResponseBodyGetAllServices // Get services with product enabled
```

Get all the services which have the Image Optimizer product enabled.

### Example
```php
    
try {
    $result = $apiInstance->getServicesProductImageOptimizer($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductImageOptimizerApi->getServicesProductImageOptimizer: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\ImageOptimizerResponseBodyGetAllServices**](../Model/ImageOptimizerResponseBodyGetAllServices.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
