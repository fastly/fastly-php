# Fastly\Api\ProductNgwafApi


```php
$apiInstance = new Fastly\Api\ProductNgwafApi(
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
[**disableProductNgwaf()**](ProductNgwafApi.md#disableProductNgwaf) | **DELETE** /enabled-products/v1/ngwaf/services/{service_id} | Disable product
[**enableProductNgwaf()**](ProductNgwafApi.md#enableProductNgwaf) | **PUT** /enabled-products/v1/ngwaf/services/{service_id} | Enable product
[**getProductNgwaf()**](ProductNgwafApi.md#getProductNgwaf) | **GET** /enabled-products/v1/ngwaf/services/{service_id} | Get product enablement status
[**getProductNgwafConfiguration()**](ProductNgwafApi.md#getProductNgwafConfiguration) | **GET** /enabled-products/v1/ngwaf/services/{service_id}/configuration | Get configuration
[**getServicesProductNgwaf()**](ProductNgwafApi.md#getServicesProductNgwaf) | **GET** /enabled-products/v1/ngwaf/services | Get services with product enabled
[**setProductNgwafConfiguration()**](ProductNgwafApi.md#setProductNgwafConfiguration) | **PATCH** /enabled-products/v1/ngwaf/services/{service_id}/configuration | Update configuration


## `disableProductNgwaf()`

```php
disableProductNgwaf($options) // Disable product
```

Disable the Next-Gen WAF product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $apiInstance->disableProductNgwaf($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductNgwafApi->disableProductNgwaf: ', $e->getMessage(), PHP_EOL;
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

## `enableProductNgwaf()`

```php
enableProductNgwaf($options): \Fastly\Model\NgwafResponseEnable // Enable product
```

Enable the Next-Gen WAF product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['ngwaf_request_enable'] = {"workspace_id":"7JFbo4RNA0OKdFWC04r6B3"}; // \Fastly\Model\NgwafRequestEnable

try {
    $result = $apiInstance->enableProductNgwaf($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductNgwafApi->enableProductNgwaf: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**ngwaf_request_enable** | [**\Fastly\Model\NgwafRequestEnable**](../Model/NgwafRequestEnable.md) |  | [optional]

### Return type

[**\Fastly\Model\NgwafResponseEnable**](../Model/NgwafResponseEnable.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getProductNgwaf()`

```php
getProductNgwaf($options): \Fastly\Model\NgwafResponseEnable // Get product enablement status
```

Get the enablement status of the Next-Gen WAF product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $result = $apiInstance->getProductNgwaf($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductNgwafApi->getProductNgwaf: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

[**\Fastly\Model\NgwafResponseEnable**](../Model/NgwafResponseEnable.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getProductNgwafConfiguration()`

```php
getProductNgwafConfiguration($options): \Fastly\Model\NgwafResponseConfigure // Get configuration
```

Get configuration of the Next-Gen WAF product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $result = $apiInstance->getProductNgwafConfiguration($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductNgwafApi->getProductNgwafConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

[**\Fastly\Model\NgwafResponseConfigure**](../Model/NgwafResponseConfigure.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getServicesProductNgwaf()`

```php
getServicesProductNgwaf($options): \Fastly\Model\NgwafResponseBodyGetAllServices // Get services with product enabled
```

Get all the services which have the Next-Gen WAF product enabled.

### Example
```php
    
try {
    $result = $apiInstance->getServicesProductNgwaf($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductNgwafApi->getServicesProductNgwaf: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\NgwafResponseBodyGetAllServices**](../Model/NgwafResponseBodyGetAllServices.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `setProductNgwafConfiguration()`

```php
setProductNgwafConfiguration($options): \Fastly\Model\NgwafResponseConfigure // Update configuration
```

Update configuration of the Next-Gen WAF product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['ngwaf_request_update_configuration'] = {"workspace_id":"7JFbo4RNA0OKdFWC04r6B3","traffic_ramp":"20"}; // \Fastly\Model\NgwafRequestUpdateConfiguration

try {
    $result = $apiInstance->setProductNgwafConfiguration($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductNgwafApi->setProductNgwafConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**ngwaf_request_update_configuration** | [**\Fastly\Model\NgwafRequestUpdateConfiguration**](../Model/NgwafRequestUpdateConfiguration.md) |  | [optional]

### Return type

[**\Fastly\Model\NgwafResponseConfigure**](../Model/NgwafResponseConfigure.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
