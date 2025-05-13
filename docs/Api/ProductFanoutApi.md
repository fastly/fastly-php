# Fastly\Api\ProductFanoutApi


```php
$apiInstance = new Fastly\Api\ProductFanoutApi(
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
[**disableProductFanout()**](ProductFanoutApi.md#disableProductFanout) | **DELETE** /enabled-products/v1/fanout/services/{service_id} | Disable product
[**enableProductFanout()**](ProductFanoutApi.md#enableProductFanout) | **PUT** /enabled-products/v1/fanout/services/{service_id} | Enable product
[**getProductFanout()**](ProductFanoutApi.md#getProductFanout) | **GET** /enabled-products/v1/fanout/services/{service_id} | Get product enablement status
[**getServicesProductFanout()**](ProductFanoutApi.md#getServicesProductFanout) | **GET** /enabled-products/v1/fanout/services | Get services with product enabled


## `disableProductFanout()`

```php
disableProductFanout($options) // Disable product
```

Disable the Fanout product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $apiInstance->disableProductFanout($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductFanoutApi->disableProductFanout: ', $e->getMessage(), PHP_EOL;
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

## `enableProductFanout()`

```php
enableProductFanout($options): \Fastly\Model\FanoutResponseBodyEnable // Enable product
```

Enable the Fanout product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $result = $apiInstance->enableProductFanout($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductFanoutApi->enableProductFanout: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

[**\Fastly\Model\FanoutResponseBodyEnable**](../Model/FanoutResponseBodyEnable.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getProductFanout()`

```php
getProductFanout($options): \Fastly\Model\FanoutResponseBodyEnable // Get product enablement status
```

Get the enablement status of the Fanout product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $result = $apiInstance->getProductFanout($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductFanoutApi->getProductFanout: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

[**\Fastly\Model\FanoutResponseBodyEnable**](../Model/FanoutResponseBodyEnable.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getServicesProductFanout()`

```php
getServicesProductFanout($options): \Fastly\Model\FanoutResponseBodyGetAllServices // Get services with product enabled
```

Get all the services which have the Fanout product enabled.

### Example
```php
    
try {
    $result = $apiInstance->getServicesProductFanout($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductFanoutApi->getServicesProductFanout: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\FanoutResponseBodyGetAllServices**](../Model/FanoutResponseBodyGetAllServices.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
