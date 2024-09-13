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

> [!NOTE]
> All URIs are relative to `https://api.fastly.com`

Method | HTTP request | Description
------ | ------------ | -----------
[**disableProduct()**](EnabledProductsApi.md#disableProduct) | **DELETE** /enabled-products/v1/{product_id}/services/{service_id} | Disable a product
[**enableProduct()**](EnabledProductsApi.md#enableProduct) | **PUT** /enabled-products/v1/{product_id}/services/{service_id} | Enable a product
[**getEnabledProduct()**](EnabledProductsApi.md#getEnabledProduct) | **GET** /enabled-products/v1/{product_id}/services/{service_id} | Get enabled product
[**getProductConfiguration()**](EnabledProductsApi.md#getProductConfiguration) | **GET** /enabled-products/v1/{product_id}/services/{service_id}/configuration | Get configuration for a product
[**setProductConfiguration()**](EnabledProductsApi.md#setProductConfiguration) | **PATCH** /enabled-products/v1/{product_id}/services/{service_id}/configuration | Update configuration for a product


## `disableProduct()`

```php
disableProduct($options) // Disable a product
```

Disable a product on a service. Supported product IDs: `brotli_compression`,`domain_inspector`,`fanout`,`image_optimizer`,`origin_inspector`, `websockets`, `bot_management`, and `ngwaf`.

### Example
```php
    $options['product_id'] = ngwaf; // string
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
enableProduct($options): \Fastly\Model\EnabledProductResponse // Enable a product
```

Enable a product on a service. Supported product IDs: `brotli_compression`,`domain_inspector`,`fanout`,`image_optimizer`,`origin_inspector`, `websockets`, `bot_management`, and `ngwaf`.

### Example
```php
    $options['product_id'] = ngwaf; // string
$options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['set_workspace_id'] = {"workspace_id":"7JFbo4RNA0OKdFWC04r6B3"}; // \Fastly\Model\SetWorkspaceId

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
**set_workspace_id** | [**\Fastly\Model\SetWorkspaceId**](../Model/SetWorkspaceId.md) |  | [optional]

### Return type

[**\Fastly\Model\EnabledProductResponse**](../Model/EnabledProductResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getEnabledProduct()`

```php
getEnabledProduct($options): \Fastly\Model\EnabledProductResponse // Get enabled product
```

Get enabled product on a service. Supported product IDs: `brotli_compression`,`domain_inspector`,`fanout`,`image_optimizer`,`origin_inspector`, `websockets`, `bot_management`, and `ngwaf`.

### Example
```php
    $options['product_id'] = ngwaf; // string
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

[**\Fastly\Model\EnabledProductResponse**](../Model/EnabledProductResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getProductConfiguration()`

```php
getProductConfiguration($options): \Fastly\Model\ConfiguredProductResponse // Get configuration for a product
```

Get configuration for an enabled product on a service. Supported product IDs: `ngwaf`.

### Example
```php
    $options['product_id'] = ngwaf; // string
$options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $result = $apiInstance->getProductConfiguration($options);
} catch (Exception $e) {
    echo 'Exception when calling EnabledProductsApi->getProductConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**product_id** | **string** |  |
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

[**\Fastly\Model\ConfiguredProductResponse**](../Model/ConfiguredProductResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `setProductConfiguration()`

```php
setProductConfiguration($options): \Fastly\Model\ConfiguredProductResponse // Update configuration for a product
```

Update configuration for an enabled product on a service. Supported product IDs: `ngwaf`.

### Example
```php
    $options['product_id'] = ngwaf; // string
$options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['set_configuration'] = {"workspace_id":"7JFbo4RNA0OKdFWC04r6B3","traffic_ramp":"20"}; // \Fastly\Model\SetConfiguration

try {
    $result = $apiInstance->setProductConfiguration($options);
} catch (Exception $e) {
    echo 'Exception when calling EnabledProductsApi->setProductConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**product_id** | **string** |  |
**service_id** | **string** | Alphanumeric string identifying the service. |
**set_configuration** | [**\Fastly\Model\SetConfiguration**](../Model/SetConfiguration.md) |  | [optional]

### Return type

[**\Fastly\Model\ConfiguredProductResponse**](../Model/ConfiguredProductResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
