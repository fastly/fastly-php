# Fastly\Api\ProductBotManagementApi


```php
$apiInstance = new Fastly\Api\ProductBotManagementApi(
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
[**disableProductBotManagement()**](ProductBotManagementApi.md#disableProductBotManagement) | **DELETE** /enabled-products/v1/bot_management/services/{service_id} | Disable product
[**enableProductBotManagement()**](ProductBotManagementApi.md#enableProductBotManagement) | **PUT** /enabled-products/v1/bot_management/services/{service_id} | Enable product
[**getProductBotManagement()**](ProductBotManagementApi.md#getProductBotManagement) | **GET** /enabled-products/v1/bot_management/services/{service_id} | Get product enablement status
[**getProductBotManagementConfiguration()**](ProductBotManagementApi.md#getProductBotManagementConfiguration) | **GET** /enabled-products/v1/bot_management/services/{service_id}/configuration | Get configuration
[**getServicesProductBotManagement()**](ProductBotManagementApi.md#getServicesProductBotManagement) | **GET** /enabled-products/v1/bot_management/services | Get services with product enabled
[**setProductBotManagementConfiguration()**](ProductBotManagementApi.md#setProductBotManagementConfiguration) | **PATCH** /enabled-products/v1/bot_management/services/{service_id}/configuration | Update configuration


## `disableProductBotManagement()`

```php
disableProductBotManagement($options) // Disable product
```

Disable the Bot Management product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $apiInstance->disableProductBotManagement($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductBotManagementApi->disableProductBotManagement: ', $e->getMessage(), PHP_EOL;
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

## `enableProductBotManagement()`

```php
enableProductBotManagement($options): \Fastly\Model\BotManagementResponseBodyEnable // Enable product
```

Enable the Bot Management product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $result = $apiInstance->enableProductBotManagement($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductBotManagementApi->enableProductBotManagement: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

[**\Fastly\Model\BotManagementResponseBodyEnable**](../Model/BotManagementResponseBodyEnable.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getProductBotManagement()`

```php
getProductBotManagement($options): \Fastly\Model\BotManagementResponseBodyEnable // Get product enablement status
```

Get the enablement status of the Bot Management product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $result = $apiInstance->getProductBotManagement($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductBotManagementApi->getProductBotManagement: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

[**\Fastly\Model\BotManagementResponseBodyEnable**](../Model/BotManagementResponseBodyEnable.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getProductBotManagementConfiguration()`

```php
getProductBotManagementConfiguration($options): \Fastly\Model\BotManagementResponseConfigure // Get configuration
```

Get the configuration of the Bot Management product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $result = $apiInstance->getProductBotManagementConfiguration($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductBotManagementApi->getProductBotManagementConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

[**\Fastly\Model\BotManagementResponseConfigure**](../Model/BotManagementResponseConfigure.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getServicesProductBotManagement()`

```php
getServicesProductBotManagement($options): \Fastly\Model\BotManagementResponseBodyGetAllServices // Get services with product enabled
```

Get all the services which have the Bot Management product enabled.

### Example
```php
    
try {
    $result = $apiInstance->getServicesProductBotManagement($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductBotManagementApi->getServicesProductBotManagement: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\BotManagementResponseBodyGetAllServices**](../Model/BotManagementResponseBodyGetAllServices.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `setProductBotManagementConfiguration()`

```php
setProductBotManagementConfiguration($options): \Fastly\Model\BotManagementResponseConfigure // Update configuration
```

Update the configuration of the Bot Management product on a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['bot_management_request_update_configuration'] = {"contentguard":true}; // \Fastly\Model\BotManagementRequestUpdateConfiguration

try {
    $result = $apiInstance->setProductBotManagementConfiguration($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductBotManagementApi->setProductBotManagementConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**bot_management_request_update_configuration** | [**\Fastly\Model\BotManagementRequestUpdateConfiguration**](../Model/BotManagementRequestUpdateConfiguration.md) |  | [optional]

### Return type

[**\Fastly\Model\BotManagementResponseConfigure**](../Model/BotManagementResponseConfigure.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
