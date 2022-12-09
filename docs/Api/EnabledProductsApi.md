# Fastly\Api\EnabledProductsApi


```php
$apiInstance = new Fastly\Api\EnabledProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**disableProduct()**](EnabledProductsApi.md#disableProduct) | **DELETE** /enabled-products/{product_id}/services/{service_id} | Disable a product
[**enableProduct()**](EnabledProductsApi.md#enableProduct) | **PUT** /enabled-products/{product_id}/services/{service_id} | Enable a product
[**getEnabledProduct()**](EnabledProductsApi.md#getEnabledProduct) | **GET** /enabled-products/{product_id}/services/{service_id} | Get enabled product


## `disableProduct()`

```php
disableProduct($options) // Disable a product
```

Disable a product on a service. Supported product IDs: `origin_inspector`,`domain_inspector`,`image_optimizer`, and `websockets`.

### Example
```php
    $options['product_id'] = origin_inspector; // string
$options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $apiInstance->disableProduct($options);
} catch (Exception $e) {
    echo 'Exception when calling EnabledProductsApi->disableProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**product_id** | **string** |  |
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `enableProduct()`

```php
enableProduct($options): \Fastly\Model\EnabledProduct // Enable a product
```

Enable a product on a service. Supported product IDs: `origin_inspector`,`domain_inspector`,`image_optimizer`, and `websockets`.

### Example
```php
    $options['product_id'] = origin_inspector; // string
$options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $result = $apiInstance->enableProduct($options);
} catch (Exception $e) {
    echo 'Exception when calling EnabledProductsApi->enableProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**product_id** | **string** |  |
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

[**\Fastly\Model\EnabledProduct**](../Model/EnabledProduct.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getEnabledProduct()`

```php
getEnabledProduct($options): \Fastly\Model\EnabledProduct // Get enabled product
```

Get enabled product on a service. Supported product IDs: `origin_inspector`,`domain_inspector`,`image_optimizer`, and `websockets`.

### Example
```php
    $options['product_id'] = origin_inspector; // string
$options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $result = $apiInstance->getEnabledProduct($options);
} catch (Exception $e) {
    echo 'Exception when calling EnabledProductsApi->getEnabledProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**product_id** | **string** |  |
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

[**\Fastly\Model\EnabledProduct**](../Model/EnabledProduct.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
