# Fastly\Api\ProductAiRuntimeControlApi


```php
$apiInstance = new Fastly\Api\ProductAiRuntimeControlApi(
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
[**disableProductAiRuntimeControl()**](ProductAiRuntimeControlApi.md#disableProductAiRuntimeControl) | **DELETE** /enabled-products/v1/ai_runtime_control | Disable product
[**enableProductAiRuntimeControl()**](ProductAiRuntimeControlApi.md#enableProductAiRuntimeControl) | **PUT** /enabled-products/v1/ai_runtime_control | Enable product
[**getProductAiRuntimeControl()**](ProductAiRuntimeControlApi.md#getProductAiRuntimeControl) | **GET** /enabled-products/v1/ai_runtime_control | Get product enablement status


## `disableProductAiRuntimeControl()`

```php
disableProductAiRuntimeControl($options) // Disable product
```

Disable the AI Runtime Control product

### Example
```php
    
try {
    $apiInstance->disableProductAiRuntimeControl($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductAiRuntimeControlApi->disableProductAiRuntimeControl: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `enableProductAiRuntimeControl()`

```php
enableProductAiRuntimeControl($options): \Fastly\Model\AiRuntimeControlResponseBodyEnable // Enable product
```

Enable the AI Runtime Control product

### Example
```php
    
try {
    $result = $apiInstance->enableProductAiRuntimeControl($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductAiRuntimeControlApi->enableProductAiRuntimeControl: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\AiRuntimeControlResponseBodyEnable**](../Model/AiRuntimeControlResponseBodyEnable.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getProductAiRuntimeControl()`

```php
getProductAiRuntimeControl($options): \Fastly\Model\AiRuntimeControlResponseBodyEnable // Get product enablement status
```

Get the enablement status of the AI Runtime Control product

### Example
```php
    
try {
    $result = $apiInstance->getProductAiRuntimeControl($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductAiRuntimeControlApi->getProductAiRuntimeControl: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\AiRuntimeControlResponseBodyEnable**](../Model/AiRuntimeControlResponseBodyEnable.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
