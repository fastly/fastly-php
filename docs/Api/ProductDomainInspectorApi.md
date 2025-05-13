# Fastly\Api\ProductDomainInspectorApi


```php
$apiInstance = new Fastly\Api\ProductDomainInspectorApi(
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
[**disableProductDomainInspector()**](ProductDomainInspectorApi.md#disableProductDomainInspector) | **DELETE** /enabled-products/v1/domain_inspector/services/{service_id} | Disable product
[**enableProductDomainInspector()**](ProductDomainInspectorApi.md#enableProductDomainInspector) | **PUT** /enabled-products/v1/domain_inspector/services/{service_id} | Enable product
[**getProductDomainInspector()**](ProductDomainInspectorApi.md#getProductDomainInspector) | **GET** /enabled-products/v1/domain_inspector/services/{service_id} | Get product enablement status
[**getServicesProductDomainInspector()**](ProductDomainInspectorApi.md#getServicesProductDomainInspector) | **GET** /enabled-products/v1/domain_inspector/services | Get services with product enabled


## `disableProductDomainInspector()`

```php
disableProductDomainInspector($options) // Disable product
```

Disable the Domain Inspector product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $apiInstance->disableProductDomainInspector($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductDomainInspectorApi->disableProductDomainInspector: ', $e->getMessage(), PHP_EOL;
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

## `enableProductDomainInspector()`

```php
enableProductDomainInspector($options): \Fastly\Model\DomainInspectorResponseBodyEnable // Enable product
```

Enable the Domain Inspector product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $result = $apiInstance->enableProductDomainInspector($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductDomainInspectorApi->enableProductDomainInspector: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

[**\Fastly\Model\DomainInspectorResponseBodyEnable**](../Model/DomainInspectorResponseBodyEnable.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getProductDomainInspector()`

```php
getProductDomainInspector($options): \Fastly\Model\DomainInspectorResponseBodyEnable // Get product enablement status
```

Get the enablement status of the Domain Inspector product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $result = $apiInstance->getProductDomainInspector($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductDomainInspectorApi->getProductDomainInspector: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

[**\Fastly\Model\DomainInspectorResponseBodyEnable**](../Model/DomainInspectorResponseBodyEnable.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getServicesProductDomainInspector()`

```php
getServicesProductDomainInspector($options): \Fastly\Model\DomainInspectorResponseBodyGetAllServices // Get services with product enabled
```

Get all the services which have the Domain Inspector product enabled.

### Example
```php
    
try {
    $result = $apiInstance->getServicesProductDomainInspector($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductDomainInspectorApi->getServicesProductDomainInspector: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\DomainInspectorResponseBodyGetAllServices**](../Model/DomainInspectorResponseBodyGetAllServices.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
