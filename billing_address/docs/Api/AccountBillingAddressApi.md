# OpenAPI\Client\AccountBillingAddressApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addBillingAddr()**](AccountBillingAddressApi.md#addBillingAddr) | **POST** /customer/{customer_id}/billing_address | Add a billing address to a customer
[**deleteBillingAddr()**](AccountBillingAddressApi.md#deleteBillingAddr) | **DELETE** /customer/{customer_id}/billing_address | Delete a billing address
[**getBillingAddr()**](AccountBillingAddressApi.md#getBillingAddr) | **GET** /customer/{customer_id}/billing_address | Get a billing address
[**updateBillingAddr()**](AccountBillingAddressApi.md#updateBillingAddr) | **PATCH** /customer/{customer_id}/billing_address | Update a billing address


## `addBillingAddr()`

```php
addBillingAddr($customer_id, $inline_object): \OpenAPI\Client\Model\InlineResponse200
```

Add a billing address to a customer

Add a billing address to a customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: session_or_token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AccountBillingAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = x4xCwxxJxGCx123Rx5xTx; // string
$inline_object = new \OpenAPI\Client\Model\InlineObject(); // \OpenAPI\Client\Model\InlineObject

try {
    $result = $apiInstance->addBillingAddr($customer_id, $inline_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountBillingAddressApi->addBillingAddr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **inline_object** | [**\OpenAPI\Client\Model\InlineObject**](../Model/InlineObject.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[session_or_token](../../README.md#session_or_token)

### HTTP request headers

- **Content-Type**: `application/vnd.api+json`
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBillingAddr()`

```php
deleteBillingAddr($customer_id)
```

Delete a billing address

Delete a customer's billing address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: session_or_token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AccountBillingAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = x4xCwxxJxGCx123Rx5xTx; // string

try {
    $apiInstance->deleteBillingAddr($customer_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountBillingAddressApi->deleteBillingAddr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[session_or_token](../../README.md#session_or_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBillingAddr()`

```php
getBillingAddr($customer_id): \OpenAPI\Client\Model\InlineResponse200
```

Get a billing address

Get a customer's billing address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: session_or_token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AccountBillingAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = x4xCwxxJxGCx123Rx5xTx; // string

try {
    $result = $apiInstance->getBillingAddr($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountBillingAddressApi->getBillingAddr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[session_or_token](../../README.md#session_or_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBillingAddr()`

```php
updateBillingAddr($customer_id, $inline_object1): \OpenAPI\Client\Model\InlineResponse200
```

Update a billing address

Update a customer's billing address. You may update only part of the customer's billing address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: session_or_token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AccountBillingAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = x4xCwxxJxGCx123Rx5xTx; // string
$inline_object1 = new \OpenAPI\Client\Model\InlineObject1(); // \OpenAPI\Client\Model\InlineObject1

try {
    $result = $apiInstance->updateBillingAddr($customer_id, $inline_object1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountBillingAddressApi->updateBillingAddr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **inline_object1** | [**\OpenAPI\Client\Model\InlineObject1**](../Model/InlineObject1.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[session_or_token](../../README.md#session_or_token)

### HTTP request headers

- **Content-Type**: `application/vnd.api+json`
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
