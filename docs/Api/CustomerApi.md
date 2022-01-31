# Fastly\Api\CustomerApi


```php
$apiInstance = new Fastly\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**deleteCustomer()**](CustomerApi.md#deleteCustomer) | **DELETE** /customer/{customer_id} | Delete a customer
[**getCustomer()**](CustomerApi.md#getCustomer) | **GET** /customer/{customer_id} | Get a customer
[**getLoggedInCustomer()**](CustomerApi.md#getLoggedInCustomer) | **GET** /current_customer | Get the logged in customer
[**listUsers()**](CustomerApi.md#listUsers) | **GET** /customer/{customer_id}/users | List users
[**updateCustomer()**](CustomerApi.md#updateCustomer) | **PUT** /customer/{customer_id} | Update a customer


## `deleteCustomer()`

```php
deleteCustomer($options): object // Delete a customer
```

Delete a customer.

### Example
```php
try {
    $result = $apiInstance->deleteCustomer($options);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->deleteCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**customer_id** | **string** | Alphanumeric string identifying the customer. |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getCustomer()`

```php
getCustomer($options): \Fastly\Model\CustomerResponse // Get a customer
```

Get a specific customer.

### Example
```php
try {
    $result = $apiInstance->getCustomer($options);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**customer_id** | **string** | Alphanumeric string identifying the customer. |

### Return type

[**\Fastly\Model\CustomerResponse**](../Model/CustomerResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLoggedInCustomer()`

```php
getLoggedInCustomer($options): \Fastly\Model\CustomerResponse // Get the logged in customer
```

Get the logged in customer.

### Example
```php
try {
    $result = $apiInstance->getLoggedInCustomer($options);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getLoggedInCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\CustomerResponse**](../Model/CustomerResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listUsers()`

```php
listUsers($options): \Fastly\Model\SchemasUserResponse[] // List users
```

List all users from a specified customer id.

### Example
```php
try {
    $result = $apiInstance->listUsers($options);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->listUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**customer_id** | **string** | Alphanumeric string identifying the customer. |

### Return type

[**\Fastly\Model\SchemasUserResponse[]**](../Model/SchemasUserResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateCustomer()`

```php
updateCustomer($options): \Fastly\Model\CustomerResponse // Update a customer
```

Update a customer.

### Example
```php
try {
    $result = $apiInstance->updateCustomer($options);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->updateCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**customer_id** | **string** | Alphanumeric string identifying the customer. |
**billing_contact_id** | **string** | The alphanumeric string representing the primary billing contact. | [optional]
**billing_network_type** | **string** | Customer&#39;s current network revenue type. | [optional] [one of: 'public', 'private']
**billing_ref** | **string** | Used for adding purchased orders to customer&#39;s account. | [optional]
**can_configure_wordpress** | **bool** | Whether this customer can view or edit wordpress. | [optional]
**can_reset_passwords** | **bool** | Whether this customer can reset passwords. | [optional]
**can_upload_vcl** | **bool** | Whether this customer can upload VCL. | [optional]
**force_2fa** | **bool** | Specifies whether 2FA is forced or not forced on the customer account. Logs out non-2FA users once 2FA is force enabled. | [optional]
**force_sso** | **bool** | Specifies whether SSO is forced or not forced on the customer account. | [optional]
**has_account_panel** | **bool** | Specifies whether the account has access or does not have access to the account panel. | [optional]
**has_improved_events** | **bool** | Specifies whether the account has access or does not have access to the improved events. | [optional]
**has_improved_ssl_config** | **bool** | Whether this customer can view or edit the SSL config. | [optional]
**has_openstack_logging** | **bool** | Specifies whether the account has enabled or not enabled openstack logging. | [optional]
**has_pci** | **bool** | Specifies whether the account can edit PCI for a service. | [optional]
**has_pci_passwords** | **bool** | Specifies whether PCI passwords are required for the account. | [optional]
**ip_whitelist** | **string** | The range of IP addresses authorized to access the customer account. | [optional]
**legal_contact_id** | **string** | The alphanumeric string identifying the account&#39;s legal contact. | [optional]
**name** | **string** | The name of the customer, generally the company name. | [optional]
**owner_id** | **string** | The alphanumeric string identifying the account owner. | [optional]
**phone_number** | **string** | The phone number associated with the account. | [optional]
**postal_address** | **string** | The postal address associated with the account. | [optional]
**pricing_plan** | **string** | The pricing plan this customer is under. | [optional]
**pricing_plan_id** | **string** | The alphanumeric string identifying the pricing plan. | [optional]
**security_contact_id** | **string** | The alphanumeric string identifying the account&#39;s security contact. | [optional]
**technical_contact_id** | **string** | The alphanumeric string identifying the account&#39;s technical contact. | [optional]

### Return type

[**\Fastly\Model\CustomerResponse**](../Model/CustomerResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
