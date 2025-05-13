# Fastly\Api\ProductDdosProtectionApi


```php
$apiInstance = new Fastly\Api\ProductDdosProtectionApi(
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
[**disableProductDdosProtection()**](ProductDdosProtectionApi.md#disableProductDdosProtection) | **DELETE** /enabled-products/v1/ddos_protection/services/{service_id} | Disable product
[**enableProductDdosProtection()**](ProductDdosProtectionApi.md#enableProductDdosProtection) | **PUT** /enabled-products/v1/ddos_protection/services/{service_id} | Enable product
[**getProductDdosProtection()**](ProductDdosProtectionApi.md#getProductDdosProtection) | **GET** /enabled-products/v1/ddos_protection/services/{service_id} | Get product enablement status
[**getProductDdosProtectionConfiguration()**](ProductDdosProtectionApi.md#getProductDdosProtectionConfiguration) | **GET** /enabled-products/v1/ddos_protection/services/{service_id}/configuration | Get configuration
[**getServicesProductDdosProtection()**](ProductDdosProtectionApi.md#getServicesProductDdosProtection) | **GET** /enabled-products/v1/ddos_protection/services | Get services with product enabled
[**setProductDdosProtectionConfiguration()**](ProductDdosProtectionApi.md#setProductDdosProtectionConfiguration) | **PATCH** /enabled-products/v1/ddos_protection/services/{service_id}/configuration | Update configuration


## `disableProductDdosProtection()`

```php
disableProductDdosProtection($options) // Disable product
```

Disable the DDoS Protection product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $apiInstance->disableProductDdosProtection($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductDdosProtectionApi->disableProductDdosProtection: ', $e->getMessage(), PHP_EOL;
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

## `enableProductDdosProtection()`

```php
enableProductDdosProtection($options): \Fastly\Model\DdosProtectionResponseEnable // Enable product
```

Enable the DDoS Protection product on a service in 'log' mode.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $result = $apiInstance->enableProductDdosProtection($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductDdosProtectionApi->enableProductDdosProtection: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

[**\Fastly\Model\DdosProtectionResponseEnable**](../Model/DdosProtectionResponseEnable.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getProductDdosProtection()`

```php
getProductDdosProtection($options): \Fastly\Model\DdosProtectionResponseEnable // Get product enablement status
```

Get the enablement status of the DDoS Protection product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $result = $apiInstance->getProductDdosProtection($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductDdosProtectionApi->getProductDdosProtection: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

[**\Fastly\Model\DdosProtectionResponseEnable**](../Model/DdosProtectionResponseEnable.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getProductDdosProtectionConfiguration()`

```php
getProductDdosProtectionConfiguration($options): \Fastly\Model\DdosProtectionResponseConfigure // Get configuration
```

Get configuration of the DDoS Protection product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $result = $apiInstance->getProductDdosProtectionConfiguration($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductDdosProtectionApi->getProductDdosProtectionConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

[**\Fastly\Model\DdosProtectionResponseConfigure**](../Model/DdosProtectionResponseConfigure.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getServicesProductDdosProtection()`

```php
getServicesProductDdosProtection($options): \Fastly\Model\DdosProtectionResponseBodyGetAllServices // Get services with product enabled
```

Get all the services which have the DDoS Protection product enabled.

### Example
```php
    
try {
    $result = $apiInstance->getServicesProductDdosProtection($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductDdosProtectionApi->getServicesProductDdosProtection: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\DdosProtectionResponseBodyGetAllServices**](../Model/DdosProtectionResponseBodyGetAllServices.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `setProductDdosProtectionConfiguration()`

```php
setProductDdosProtectionConfiguration($options): \Fastly\Model\DdosProtectionResponseConfigure // Update configuration
```

Update configuration of the DDoS Protection product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['ddos_protection_request_update_configuration'] = {"mode":"log"}; // \Fastly\Model\DdosProtectionRequestUpdateConfiguration

try {
    $result = $apiInstance->setProductDdosProtectionConfiguration($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductDdosProtectionApi->setProductDdosProtectionConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**ddos_protection_request_update_configuration** | [**\Fastly\Model\DdosProtectionRequestUpdateConfiguration**](../Model/DdosProtectionRequestUpdateConfiguration.md) |  | [optional]

### Return type

[**\Fastly\Model\DdosProtectionResponseConfigure**](../Model/DdosProtectionResponseConfigure.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
