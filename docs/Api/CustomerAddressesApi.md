# Fastly\Api\CustomerAddressesApi


```php
$apiInstance = new Fastly\Api\CustomerAddressesApi(
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
[**createCustomerAddress()**](CustomerAddressesApi.md#createCustomerAddress) | **POST** /billing/v3/customer-addresses | Creates an address associated with a customer account.
[**listCustomerAddresses()**](CustomerAddressesApi.md#listCustomerAddresses) | **GET** /billing/v3/customer-addresses | Return the list of addresses associated with a customer account.
[**updateCustomerAddress()**](CustomerAddressesApi.md#updateCustomerAddress) | **PUT** /billing/v3/customer-addresses/{type} | Updates an address associated with a customer account.


## `createCustomerAddress()`

```php
createCustomerAddress($options): \Fastly\Model\InlineResponse201 // Creates an address associated with a customer account.
```

Creates an address associated with a customer account.

### Example
```php
    $options['customer_address'] = new \Fastly\Model\CustomerAddress(); // \Fastly\Model\CustomerAddress

try {
    $result = $apiInstance->createCustomerAddress($options);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressesApi->createCustomerAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**customer_address** | [**\Fastly\Model\CustomerAddress**](../Model/CustomerAddress.md) |  |

### Return type

[**\Fastly\Model\InlineResponse201**](../Model/InlineResponse201.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listCustomerAddresses()`

```php
listCustomerAddresses($options): \Fastly\Model\ListCustomerAddressesResponse // Return the list of addresses associated with a customer account.
```

Return the list of addresses associated with a customer account.

### Example
```php
    
try {
    $result = $apiInstance->listCustomerAddresses($options);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressesApi->listCustomerAddresses: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\ListCustomerAddressesResponse**](../Model/ListCustomerAddressesResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateCustomerAddress()`

```php
updateCustomerAddress($options) // Updates an address associated with a customer account.
```

Updates an address associated with a customer account.

### Example
```php
    $options['type'] = 'type_example'; // string | Alphanumeric type of the address being modified.
$options['customer_address'] = new \Fastly\Model\CustomerAddress(); // \Fastly\Model\CustomerAddress

try {
    $apiInstance->updateCustomerAddress($options);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressesApi->updateCustomerAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**type** | **string** | Alphanumeric type of the address being modified. |
**customer_address** | [**\Fastly\Model\CustomerAddress**](../Model/CustomerAddress.md) |  |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
