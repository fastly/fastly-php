# Fastly\Api\ProductLogExplorerInsightsApi


```php
$apiInstance = new Fastly\Api\ProductLogExplorerInsightsApi(
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
[**disableProductLogExplorerInsights()**](ProductLogExplorerInsightsApi.md#disableProductLogExplorerInsights) | **DELETE** /enabled-products/v1/log_explorer_insights/services/{service_id} | Disable product
[**enableProductLogExplorerInsights()**](ProductLogExplorerInsightsApi.md#enableProductLogExplorerInsights) | **PUT** /enabled-products/v1/log_explorer_insights/services/{service_id} | Enable product
[**getProductLogExplorerInsights()**](ProductLogExplorerInsightsApi.md#getProductLogExplorerInsights) | **GET** /enabled-products/v1/log_explorer_insights/services/{service_id} | Get product enablement status
[**getServicesProductLogExplorerInsights()**](ProductLogExplorerInsightsApi.md#getServicesProductLogExplorerInsights) | **GET** /enabled-products/v1/log_explorer_insights/services | Get services with product enabled


## `disableProductLogExplorerInsights()`

```php
disableProductLogExplorerInsights($options) // Disable product
```

Disable the Log Explorer & Insights product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $apiInstance->disableProductLogExplorerInsights($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductLogExplorerInsightsApi->disableProductLogExplorerInsights: ', $e->getMessage(), PHP_EOL;
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

## `enableProductLogExplorerInsights()`

```php
enableProductLogExplorerInsights($options): \Fastly\Model\LogExplorerInsightsResponseBodyEnable // Enable product
```

Enable the Log Explorer & Insights product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $result = $apiInstance->enableProductLogExplorerInsights($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductLogExplorerInsightsApi->enableProductLogExplorerInsights: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

[**\Fastly\Model\LogExplorerInsightsResponseBodyEnable**](../Model/LogExplorerInsightsResponseBodyEnable.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getProductLogExplorerInsights()`

```php
getProductLogExplorerInsights($options): \Fastly\Model\LogExplorerInsightsResponseBodyEnable // Get product enablement status
```

Get the enablement status of the Log Explorer & Insights product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $result = $apiInstance->getProductLogExplorerInsights($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductLogExplorerInsightsApi->getProductLogExplorerInsights: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

[**\Fastly\Model\LogExplorerInsightsResponseBodyEnable**](../Model/LogExplorerInsightsResponseBodyEnable.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getServicesProductLogExplorerInsights()`

```php
getServicesProductLogExplorerInsights($options): \Fastly\Model\LogExplorerInsightsResponseBodyGetAllServices // Get services with product enabled
```

Get all the services which have the Log Explorer & Insights product enabled.

### Example
```php
    
try {
    $result = $apiInstance->getServicesProductLogExplorerInsights($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductLogExplorerInsightsApi->getServicesProductLogExplorerInsights: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\LogExplorerInsightsResponseBodyGetAllServices**](../Model/LogExplorerInsightsResponseBodyGetAllServices.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
