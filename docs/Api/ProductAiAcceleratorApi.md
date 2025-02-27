# Fastly\Api\ProductAiAcceleratorApi


```php
$apiInstance = new Fastly\Api\ProductAiAcceleratorApi(
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
[**disableProductAiAccelerator()**](ProductAiAcceleratorApi.md#disableProductAiAccelerator) | **DELETE** /enabled-products/v1/ai_accelerator | Disable product
[**enableAiAccelerator()**](ProductAiAcceleratorApi.md#enableAiAccelerator) | **PUT** /enabled-products/v1/ai_accelerator | Enable product
[**getAiAccelerator()**](ProductAiAcceleratorApi.md#getAiAccelerator) | **GET** /enabled-products/v1/ai_accelerator | Get product enablement status


## `disableProductAiAccelerator()`

```php
disableProductAiAccelerator($options) // Disable product
```

Disable the AI Accelerator product

### Example
```php
    
try {
    $apiInstance->disableProductAiAccelerator($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductAiAcceleratorApi->disableProductAiAccelerator: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `enableAiAccelerator()`

```php
enableAiAccelerator($options): \Fastly\Model\AiAcceleratorResponseBodyEnable // Enable product
```

Enable the AI Accelerator product

### Example
```php
    
try {
    $result = $apiInstance->enableAiAccelerator($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductAiAcceleratorApi->enableAiAccelerator: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\AiAcceleratorResponseBodyEnable**](../Model/AiAcceleratorResponseBodyEnable.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getAiAccelerator()`

```php
getAiAccelerator($options): \Fastly\Model\AiAcceleratorResponseBodyEnable // Get product enablement status
```

Get the enablement status of the AI Accelerator product

### Example
```php
    
try {
    $result = $apiInstance->getAiAccelerator($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductAiAcceleratorApi->getAiAccelerator: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\AiAcceleratorResponseBodyEnable**](../Model/AiAcceleratorResponseBodyEnable.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
