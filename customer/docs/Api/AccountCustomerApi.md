# OpenAPI\Client\AccountCustomerApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCustomer()**](AccountCustomerApi.md#deleteCustomer) | **DELETE** /customer/{customer_id} | Delete a customer
[**getCustomer()**](AccountCustomerApi.md#getCustomer) | **GET** /customer/{customer_id} | Get a customer
[**getLoggedInCustomer()**](AccountCustomerApi.md#getLoggedInCustomer) | **GET** /current_customer | Get the logged in customer
[**listUsers()**](AccountCustomerApi.md#listUsers) | **GET** /customer/{customer_id}/users | List users
[**updateCustomer()**](AccountCustomerApi.md#updateCustomer) | **PUT** /customer/{customer_id} | Update a customer


## `deleteCustomer()`

```php
deleteCustomer($customer_id): object
```

Delete a customer

Delete a customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: session_or_token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AccountCustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = x4xCwxxJxGCx123Rx5xTx; // string

try {
    $result = $apiInstance->deleteCustomer($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountCustomerApi->deleteCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |

### Return type

**object**

### Authorization

[session_or_token](../../README.md#session_or_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomer()`

```php
getCustomer($customer_id): \OpenAPI\Client\Model\InlineResponse2001
```

Get a customer

Get a specific customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: session_or_token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AccountCustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = x4xCwxxJxGCx123Rx5xTx; // string

try {
    $result = $apiInstance->getCustomer($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountCustomerApi->getCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[session_or_token](../../README.md#session_or_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLoggedInCustomer()`

```php
getLoggedInCustomer(): \OpenAPI\Client\Model\InlineResponse2001
```

Get the logged in customer

Get the logged in customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: session_or_token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AccountCustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getLoggedInCustomer();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountCustomerApi->getLoggedInCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[session_or_token](../../README.md#session_or_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUsers()`

```php
listUsers($customer_id): \OpenAPI\Client\Model\InlineResponse200[]
```

List users

List all users from a specified customer id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: session_or_token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AccountCustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = x4xCwxxJxGCx123Rx5xTx; // string

try {
    $result = $apiInstance->listUsers($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountCustomerApi->listUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse200[]**](../Model/InlineResponse200.md)

### Authorization

[session_or_token](../../README.md#session_or_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomer()`

```php
updateCustomer($customer_id, $created_at, $deleted_at, $updated_at, $billing_contact_id, $billing_network_type, $billing_ref, $can_configure_wordpress, $can_reset_passwords, $can_upload_vcl, $force_2fa, $force_sso, $has_account_panel, $has_improved_events, $has_improved_ssl_config, $has_openstack_logging, $has_pci, $has_pci_passwords, $id, $ip_whitelist, $legal_contact_id, $name, $owner_id, $phone_number, $postal_address, $pricing_plan, $pricing_plan_id, $security_contact_id, $technical_contact_id): \OpenAPI\Client\Model\InlineObject
```

Update a customer

Update a customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: session_or_token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AccountCustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = x4xCwxxJxGCx123Rx5xTx; // string
$created_at = 'created_at_example'; // string | Date and time in ISO 8601 format.
$deleted_at = 'deleted_at_example'; // string | Date and time in ISO 8601 format.
$updated_at = 'updated_at_example'; // string | Date and time in ISO 8601 format.
$billing_contact_id = 'billing_contact_id_example'; // string | The alphanumeric string representing the primary billing contact.
$billing_network_type = 'billing_network_type_example'; // string | Customer's current network revenue type. Can be `public` or `private`.
$billing_ref = 'billing_ref_example'; // string | Used for adding purchased orders to customer's account.
$can_configure_wordpress = True; // bool | Whether this customer can view or edit wordpress.
$can_reset_passwords = True; // bool | Whether this customer can reset passwords.
$can_upload_vcl = True; // bool | Whether this customer can upload VCL.
$force_2fa = True; // bool | Specifies whether 2FA is forced or not forced on the customer account. Logs out non-2FA users once 2FA is force enabled.
$force_sso = True; // bool | Specifies whether SSO is forced or not forced on the customer account.
$has_account_panel = True; // bool | Specifies whether the account has access or does not have access to the account panel.
$has_improved_events = True; // bool | Specifies whether the account has access or does not have access to the improved events.
$has_improved_ssl_config = True; // bool | Whether this customer can view or edit the SSL config.
$has_openstack_logging = True; // bool | Specifies whether the account has enabled or not enabled openstack logging.
$has_pci = True; // bool | Specifies whether the account can edit PCI for a service.
$has_pci_passwords = True; // bool | Specifies whether PCI passwords are required for the account.
$id = 'id_example'; // string | Alphanumeric string identifying the customer.
$ip_whitelist = 'ip_whitelist_example'; // string | The range of IP addresses authorized to access the customer account.
$legal_contact_id = 'legal_contact_id_example'; // string | The alphanumeric string identifying the account's legal contact.
$name = 'name_example'; // string | The name of the customer, generally the company name.
$owner_id = 'owner_id_example'; // string | The alphanumeric string identifying the account owner.
$phone_number = 'phone_number_example'; // string | The phone number associated with the account.
$postal_address = 'postal_address_example'; // string | The postal address associated with the account.
$pricing_plan = 'pricing_plan_example'; // string | The pricing plan this customer is under.
$pricing_plan_id = 'pricing_plan_id_example'; // string | The alphanumeric string identifying the pricing plan.
$security_contact_id = 'security_contact_id_example'; // string | The alphanumeric string identifying the account's security contact.
$technical_contact_id = 'technical_contact_id_example'; // string | The alphanumeric string identifying the account's technical contact.

try {
    $result = $apiInstance->updateCustomer($customer_id, $created_at, $deleted_at, $updated_at, $billing_contact_id, $billing_network_type, $billing_ref, $can_configure_wordpress, $can_reset_passwords, $can_upload_vcl, $force_2fa, $force_sso, $has_account_panel, $has_improved_events, $has_improved_ssl_config, $has_openstack_logging, $has_pci, $has_pci_passwords, $id, $ip_whitelist, $legal_contact_id, $name, $owner_id, $phone_number, $postal_address, $pricing_plan, $pricing_plan_id, $security_contact_id, $technical_contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountCustomerApi->updateCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **created_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **deleted_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **updated_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **billing_contact_id** | **string**| The alphanumeric string representing the primary billing contact. | [optional]
 **billing_network_type** | **string**| Customer&#39;s current network revenue type. Can be &#x60;public&#x60; or &#x60;private&#x60;. | [optional]
 **billing_ref** | **string**| Used for adding purchased orders to customer&#39;s account. | [optional]
 **can_configure_wordpress** | **bool**| Whether this customer can view or edit wordpress. | [optional]
 **can_reset_passwords** | **bool**| Whether this customer can reset passwords. | [optional]
 **can_upload_vcl** | **bool**| Whether this customer can upload VCL. | [optional]
 **force_2fa** | **bool**| Specifies whether 2FA is forced or not forced on the customer account. Logs out non-2FA users once 2FA is force enabled. | [optional]
 **force_sso** | **bool**| Specifies whether SSO is forced or not forced on the customer account. | [optional]
 **has_account_panel** | **bool**| Specifies whether the account has access or does not have access to the account panel. | [optional]
 **has_improved_events** | **bool**| Specifies whether the account has access or does not have access to the improved events. | [optional]
 **has_improved_ssl_config** | **bool**| Whether this customer can view or edit the SSL config. | [optional]
 **has_openstack_logging** | **bool**| Specifies whether the account has enabled or not enabled openstack logging. | [optional]
 **has_pci** | **bool**| Specifies whether the account can edit PCI for a service. | [optional]
 **has_pci_passwords** | **bool**| Specifies whether PCI passwords are required for the account. | [optional]
 **id** | **string**| Alphanumeric string identifying the customer. | [optional]
 **ip_whitelist** | **string**| The range of IP addresses authorized to access the customer account. | [optional]
 **legal_contact_id** | **string**| The alphanumeric string identifying the account&#39;s legal contact. | [optional]
 **name** | **string**| The name of the customer, generally the company name. | [optional]
 **owner_id** | **string**| The alphanumeric string identifying the account owner. | [optional]
 **phone_number** | **string**| The phone number associated with the account. | [optional]
 **postal_address** | **string**| The postal address associated with the account. | [optional]
 **pricing_plan** | **string**| The pricing plan this customer is under. | [optional]
 **pricing_plan_id** | **string**| The alphanumeric string identifying the pricing plan. | [optional]
 **security_contact_id** | **string**| The alphanumeric string identifying the account&#39;s security contact. | [optional]
 **technical_contact_id** | **string**| The alphanumeric string identifying the account&#39;s technical contact. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineObject**](../Model/InlineObject.md)

### Authorization

[session_or_token](../../README.md#session_or_token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
