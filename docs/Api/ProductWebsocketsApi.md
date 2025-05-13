# Fastly\Api\ProductWebsocketsApi


```php
$apiInstance = new Fastly\Api\ProductWebsocketsApi(
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
[**disableProductWebsockets()**](ProductWebsocketsApi.md#disableProductWebsockets) | **DELETE** /enabled-products/v1/websockets/services/{service_id} | Disable product
[**enableProductWebsockets()**](ProductWebsocketsApi.md#enableProductWebsockets) | **PUT** /enabled-products/v1/websockets/services/{service_id} | Enable product
[**getProductWebsockets()**](ProductWebsocketsApi.md#getProductWebsockets) | **GET** /enabled-products/v1/websockets/services/{service_id} | Get product enablement status
[**getServicesProductWebsockets()**](ProductWebsocketsApi.md#getServicesProductWebsockets) | **GET** /enabled-products/v1/websockets/services | Get services with product enabled


## `disableProductWebsockets()`

```php
disableProductWebsockets($options) // Disable product
```

Disable the Websockets product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $apiInstance->disableProductWebsockets($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductWebsocketsApi->disableProductWebsockets: ', $e->getMessage(), PHP_EOL;
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

## `enableProductWebsockets()`

```php
enableProductWebsockets($options): \Fastly\Model\WebsocketsResponseBodyEnable // Enable product
```

Enable the WebSockets product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $result = $apiInstance->enableProductWebsockets($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductWebsocketsApi->enableProductWebsockets: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

[**\Fastly\Model\WebsocketsResponseBodyEnable**](../Model/WebsocketsResponseBodyEnable.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getProductWebsockets()`

```php
getProductWebsockets($options): \Fastly\Model\WebsocketsResponseBodyEnable // Get product enablement status
```

Get the enablement status of the WebSockets product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $result = $apiInstance->getProductWebsockets($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductWebsocketsApi->getProductWebsockets: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

[**\Fastly\Model\WebsocketsResponseBodyEnable**](../Model/WebsocketsResponseBodyEnable.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getServicesProductWebsockets()`

```php
getServicesProductWebsockets($options): \Fastly\Model\WebsocketsResponseBodyGetAllServices // Get services with product enabled
```

Get all the services which have the Websockets product enabled.

### Example
```php
    
try {
    $result = $apiInstance->getServicesProductWebsockets($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductWebsocketsApi->getServicesProductWebsockets: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\WebsocketsResponseBodyGetAllServices**](../Model/WebsocketsResponseBodyGetAllServices.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
