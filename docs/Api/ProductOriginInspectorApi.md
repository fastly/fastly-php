# Fastly\Api\ProductOriginInspectorApi


```php
$apiInstance = new Fastly\Api\ProductOriginInspectorApi(
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
[**disableProductOriginInspector()**](ProductOriginInspectorApi.md#disableProductOriginInspector) | **DELETE** /enabled-products/v1/origin_inspector/services/{service_id} | Disable product
[**enableProductOriginInspector()**](ProductOriginInspectorApi.md#enableProductOriginInspector) | **PUT** /enabled-products/v1/origin_inspector/services/{service_id} | Enable product
[**getProductOriginInspector()**](ProductOriginInspectorApi.md#getProductOriginInspector) | **GET** /enabled-products/v1/origin_inspector/services/{service_id} | Get product enablement status
[**getServicesProductOriginInspector()**](ProductOriginInspectorApi.md#getServicesProductOriginInspector) | **GET** /enabled-products/v1/origin_inspector/services | Get services with product enabled


## `disableProductOriginInspector()`

```php
disableProductOriginInspector($options) // Disable product
```

Disable the Origin Inspector product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $apiInstance->disableProductOriginInspector($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductOriginInspectorApi->disableProductOriginInspector: ', $e->getMessage(), PHP_EOL;
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

## `enableProductOriginInspector()`

```php
enableProductOriginInspector($options): \Fastly\Model\OriginInspectorResponseBodyEnable // Enable product
```

Enable the Origin Inspector product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $result = $apiInstance->enableProductOriginInspector($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductOriginInspectorApi->enableProductOriginInspector: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

[**\Fastly\Model\OriginInspectorResponseBodyEnable**](../Model/OriginInspectorResponseBodyEnable.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getProductOriginInspector()`

```php
getProductOriginInspector($options): \Fastly\Model\OriginInspectorResponseBodyEnable // Get product enablement status
```

Get the enablement status of the Origin Inspector product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $result = $apiInstance->getProductOriginInspector($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductOriginInspectorApi->getProductOriginInspector: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

[**\Fastly\Model\OriginInspectorResponseBodyEnable**](../Model/OriginInspectorResponseBodyEnable.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getServicesProductOriginInspector()`

```php
getServicesProductOriginInspector($options): \Fastly\Model\OriginInspectorResponseBodyGetAllServices // Get services with product enabled
```

Get all the services which have the Origin Inspector product enabled.

### Example
```php
    
try {
    $result = $apiInstance->getServicesProductOriginInspector($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductOriginInspectorApi->getServicesProductOriginInspector: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\OriginInspectorResponseBodyGetAllServices**](../Model/OriginInspectorResponseBodyGetAllServices.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
