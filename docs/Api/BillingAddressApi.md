# OpenAPI\Client\BillingAddressApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addBillingAddr()**](BillingAddressApi.md#addBillingAddr) | **POST** /customer/{customer_id}/billing_address | Add a billing address to a customer
[**deleteBillingAddr()**](BillingAddressApi.md#deleteBillingAddr) | **DELETE** /customer/{customer_id}/billing_address | Delete a billing address
[**getBillingAddr()**](BillingAddressApi.md#getBillingAddr) | **GET** /customer/{customer_id}/billing_address | Get a billing address
[**updateBillingAddr()**](BillingAddressApi.md#updateBillingAddr) | **PATCH** /customer/{customer_id}/billing_address | Update a billing address


## `addBillingAddr()`

```php
addBillingAddr($customer_id, $inline_object4): \OpenAPI\Client\Model\ResourceBillingAddress
```

Add a billing address to a customer

Add a billing address to a customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BillingAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 'customer_id_example'; // string
$inline_object4 = new \OpenAPI\Client\Model\InlineObject4(); // \OpenAPI\Client\Model\InlineObject4

try {
    $result = $apiInstance->addBillingAddr($customer_id, $inline_object4);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingAddressApi->addBillingAddr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **inline_object4** | [**\OpenAPI\Client\Model\InlineObject4**](../Model/InlineObject4.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ResourceBillingAddress**](../Model/ResourceBillingAddress.md)

### Authorization

[token](../../README.md#token)

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


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BillingAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 'customer_id_example'; // string

try {
    $apiInstance->deleteBillingAddr($customer_id);
} catch (Exception $e) {
    echo 'Exception when calling BillingAddressApi->deleteBillingAddr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBillingAddr()`

```php
getBillingAddr($customer_id): \OpenAPI\Client\Model\ResourceBillingAddress
```

Get a billing address

Get a customer's billing address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BillingAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 'customer_id_example'; // string

try {
    $result = $apiInstance->getBillingAddr($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingAddressApi->getBillingAddr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ResourceBillingAddress**](../Model/ResourceBillingAddress.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBillingAddr()`

```php
updateBillingAddr($customer_id, $inline_object5): \OpenAPI\Client\Model\ResourceBillingAddress
```

Update a billing address

Update a customer's billing address. You may update only part of the customer's billing address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BillingAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 'customer_id_example'; // string
$inline_object5 = new \OpenAPI\Client\Model\InlineObject5(); // \OpenAPI\Client\Model\InlineObject5

try {
    $result = $apiInstance->updateBillingAddr($customer_id, $inline_object5);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingAddressApi->updateBillingAddr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **inline_object5** | [**\OpenAPI\Client\Model\InlineObject5**](../Model/InlineObject5.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ResourceBillingAddress**](../Model/ResourceBillingAddress.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/vnd.api+json`
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
