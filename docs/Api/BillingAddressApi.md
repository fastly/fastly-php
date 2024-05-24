# Fastly\Api\BillingAddressApi


```php
$apiInstance = new Fastly\Api\BillingAddressApi(
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
[**addBillingAddr()**](BillingAddressApi.md#addBillingAddr) | **POST** /customer/{customer_id}/billing_address | Add a billing address to a customer
[**deleteBillingAddr()**](BillingAddressApi.md#deleteBillingAddr) | **DELETE** /customer/{customer_id}/billing_address | Delete a billing address
[**getBillingAddr()**](BillingAddressApi.md#getBillingAddr) | **GET** /customer/{customer_id}/billing_address | Get a billing address
[**updateBillingAddr()**](BillingAddressApi.md#updateBillingAddr) | **PATCH** /customer/{customer_id}/billing_address | Update a billing address


## `addBillingAddr()`

```php
addBillingAddr($options): \Fastly\Model\BillingAddressResponse // Add a billing address to a customer
```

Add a billing address to a customer.

### Example
```php
    $options['customer_id'] = 'customer_id_example'; // string | Alphanumeric string identifying the customer.
$options['billing_address_request'] = {"skip_verification":false,"data":{"type":"billing_address","attributes":{"address_1":"80719 Dorothea Mountain","address_2":"Apt. 652","city":"New Rasheedville","state":"DE","country":"US","postal_code":"53538-5902"}}}; // \Fastly\Model\BillingAddressRequest | Billing address

try {
    $result = $apiInstance->addBillingAddr($options);
} catch (Exception $e) {
    echo 'Exception when calling BillingAddressApi->addBillingAddr: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**customer_id** | **string** | Alphanumeric string identifying the customer. |
**billing_address_request** | [**\Fastly\Model\BillingAddressRequest**](../Model/BillingAddressRequest.md) | Billing address | [optional]

### Return type

[**\Fastly\Model\BillingAddressResponse**](../Model/BillingAddressResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteBillingAddr()`

```php
deleteBillingAddr($options) // Delete a billing address
```

Delete a customer's billing address.

### Example
```php
    $options['customer_id'] = 'customer_id_example'; // string | Alphanumeric string identifying the customer.

try {
    $apiInstance->deleteBillingAddr($options);
} catch (Exception $e) {
    echo 'Exception when calling BillingAddressApi->deleteBillingAddr: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**customer_id** | **string** | Alphanumeric string identifying the customer. |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBillingAddr()`

```php
getBillingAddr($options): \Fastly\Model\BillingAddressResponse // Get a billing address
```

Get a customer's billing address.

### Example
```php
    $options['customer_id'] = 'customer_id_example'; // string | Alphanumeric string identifying the customer.

try {
    $result = $apiInstance->getBillingAddr($options);
} catch (Exception $e) {
    echo 'Exception when calling BillingAddressApi->getBillingAddr: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**customer_id** | **string** | Alphanumeric string identifying the customer. |

### Return type

[**\Fastly\Model\BillingAddressResponse**](../Model/BillingAddressResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateBillingAddr()`

```php
updateBillingAddr($options): \Fastly\Model\BillingAddressResponse // Update a billing address
```

Update a customer's billing address. You may update only part of the customer's billing address.

### Example
```php
    $options['customer_id'] = 'customer_id_example'; // string | Alphanumeric string identifying the customer.
$options['update_billing_address_request'] = {"skip_verification":false,"data":{"type":"billing_address","id":"3DTWpamEUGISvrUiDWkesQ","attributes":{"state":"DE"}}}; // \Fastly\Model\UpdateBillingAddressRequest | One or more billing address attributes

try {
    $result = $apiInstance->updateBillingAddr($options);
} catch (Exception $e) {
    echo 'Exception when calling BillingAddressApi->updateBillingAddr: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**customer_id** | **string** | Alphanumeric string identifying the customer. |
**update_billing_address_request** | [**\Fastly\Model\UpdateBillingAddressRequest**](../Model/UpdateBillingAddressRequest.md) | One or more billing address attributes | [optional]

### Return type

[**\Fastly\Model\BillingAddressResponse**](../Model/BillingAddressResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
