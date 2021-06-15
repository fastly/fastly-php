# OpenAPI\Client\BillingApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInvoice()**](BillingApi.md#getInvoice) | **GET** /billing/v2/year/{year}/month/{month} | Get an invoice
[**getInvoiceMtd()**](BillingApi.md#getInvoiceMtd) | **GET** /billing/v2/account_customers/{customer_id}/mtd_invoice | Get month-to-date billing estimate


## `getInvoice()`

```php
getInvoice($month, $year)
```

Get an invoice

Get the invoice for a given year and month. Can be any month from when the Customer was created to the current month.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$month = 05; // string | 2-digit month.
$year = 2020; // string | 4-digit year.

try {
    $apiInstance->getInvoice($month, $year);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **month** | **string**| 2-digit month. |
 **year** | **string**| 4-digit year. |

### Return type

void (empty response body)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoiceMtd()`

```php
getInvoiceMtd($customer_id, $month, $year)
```

Get month-to-date billing estimate

Get the current month-to-date estimate. This endpoint has two different responses. Under normal circumstances, it generally takes less than 5 seconds to generate but in certain cases can take up to 60 seconds. Once generated the month-to-date estimate is cached for 4 hours, and is available the next request will return the JSON representation of the month-to-date estimate. While a report is being generated in the background, this endpoint will return a `202 Accepted` response. The full format of which can be found in detail in our [billing calculation guide](https://docs.fastly.com/en/guides/how-we-calculate-your-bill). There are certain accounts for which we are unable to generate a month-to-date estimate. For example, accounts who have parent-pay are unable to generate an MTD estimate. The parent accounts are able to generate a month-to-date estimate but that estimate will not include the child accounts amounts at this time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 'customer_id_example'; // string
$month = 05; // string | 2-digit month.
$year = 2020; // string | 4-digit year.

try {
    $apiInstance->getInvoiceMtd($customer_id, $month, $year);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getInvoiceMtd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **month** | **string**| 2-digit month. | [optional]
 **year** | **string**| 4-digit year. | [optional]

### Return type

void (empty response body)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
