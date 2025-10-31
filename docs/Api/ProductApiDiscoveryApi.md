# Fastly\Api\ProductApiDiscoveryApi


```php
$apiInstance = new Fastly\Api\ProductApiDiscoveryApi(
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
[**disableProductApiDiscovery()**](ProductApiDiscoveryApi.md#disableProductApiDiscovery) | **DELETE** /enabled-products/v1/api_discovery/services/{service_id} | Disable product
[**enableProductApiDiscovery()**](ProductApiDiscoveryApi.md#enableProductApiDiscovery) | **PUT** /enabled-products/v1/api_discovery/services/{service_id} | Enable product
[**getProductApiDiscovery()**](ProductApiDiscoveryApi.md#getProductApiDiscovery) | **GET** /enabled-products/v1/api_discovery/services/{service_id} | Get product enablement status
[**getServicesProductApiDiscovery()**](ProductApiDiscoveryApi.md#getServicesProductApiDiscovery) | **GET** /enabled-products/v1/api_discovery/services | Get services with product enabled


## `disableProductApiDiscovery()`

```php
disableProductApiDiscovery($options) // Disable product
```

Disable the API Discovery product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $apiInstance->disableProductApiDiscovery($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductApiDiscoveryApi->disableProductApiDiscovery: ', $e->getMessage(), PHP_EOL;
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

## `enableProductApiDiscovery()`

```php
enableProductApiDiscovery($options): \Fastly\Model\ApiDiscoveryResponseEnable // Enable product
```

Enable the API Discovery product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $result = $apiInstance->enableProductApiDiscovery($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductApiDiscoveryApi->enableProductApiDiscovery: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

[**\Fastly\Model\ApiDiscoveryResponseEnable**](../Model/ApiDiscoveryResponseEnable.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getProductApiDiscovery()`

```php
getProductApiDiscovery($options): \Fastly\Model\ApiDiscoveryResponseEnable // Get product enablement status
```

Get the enablement status of the API Discovery product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $result = $apiInstance->getProductApiDiscovery($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductApiDiscoveryApi->getProductApiDiscovery: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

[**\Fastly\Model\ApiDiscoveryResponseEnable**](../Model/ApiDiscoveryResponseEnable.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getServicesProductApiDiscovery()`

```php
getServicesProductApiDiscovery($options): \Fastly\Model\ApiDiscoveryResponseBodyGetAllServices // Get services with product enabled
```

Get all the services for a customer that has the API Discovery product enabled.

### Example
```php
    
try {
    $result = $apiInstance->getServicesProductApiDiscovery($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductApiDiscoveryApi->getServicesProductApiDiscovery: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\ApiDiscoveryResponseBodyGetAllServices**](../Model/ApiDiscoveryResponseBodyGetAllServices.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
