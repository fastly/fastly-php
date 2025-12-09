# Fastly\Api\ProductDomainResearchApi


```php
$apiInstance = new Fastly\Api\ProductDomainResearchApi(
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
[**disableProductDomainResearch()**](ProductDomainResearchApi.md#disableProductDomainResearch) | **DELETE** /enabled-products/v1/domain_research | Disable product
[**enableDomainResearch()**](ProductDomainResearchApi.md#enableDomainResearch) | **PUT** /enabled-products/v1/domain_research | Enable product
[**getDomainResearch()**](ProductDomainResearchApi.md#getDomainResearch) | **GET** /enabled-products/v1/domain_research | Get product enablement status


## `disableProductDomainResearch()`

```php
disableProductDomainResearch($options) // Disable product
```

Disable the Domain Research product.

### Example
```php
    
try {
    $apiInstance->disableProductDomainResearch($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductDomainResearchApi->disableProductDomainResearch: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `enableDomainResearch()`

```php
enableDomainResearch($options): \Fastly\Model\DomainResearchResponseBodyEnable // Enable product
```

Enable the Domain Research product.

### Example
```php
    
try {
    $result = $apiInstance->enableDomainResearch($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductDomainResearchApi->enableDomainResearch: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\DomainResearchResponseBodyEnable**](../Model/DomainResearchResponseBodyEnable.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getDomainResearch()`

```php
getDomainResearch($options): \Fastly\Model\DomainResearchResponseBodyEnable // Get product enablement status
```

Get the enablement status of the Domain Research product.

### Example
```php
    
try {
    $result = $apiInstance->getDomainResearch($options);
} catch (Exception $e) {
    echo 'Exception when calling ProductDomainResearchApi->getDomainResearch: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\DomainResearchResponseBodyEnable**](../Model/DomainResearchResponseBodyEnable.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
