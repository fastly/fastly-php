# Fastly\Api\BillingApi


```php
$apiInstance = new Fastly\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**getInvoice()**](BillingApi.md#getInvoice) | **GET** /billing/v2/year/{year}/month/{month} | Get an invoice
[**getInvoiceMtd()**](BillingApi.md#getInvoiceMtd) | **GET** /billing/v2/account_customers/{customer_id}/mtd_invoice | Get month-to-date billing estimate


## `getInvoice()`

```php
getInvoice($options): \Fastly\Model\BillingResponse // Get an invoice
```

Get the invoice for a given year and month. Can be any month from when the Customer was created to the current month.

### Example
```php
try {
    $result = $apiInstance->getInvoice($options);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**month** | **string** | 2-digit month. |
**year** | **string** | 4-digit year. |

### Return type

[**\Fastly\Model\BillingResponse**](../Model/BillingResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getInvoiceMtd()`

```php
getInvoiceMtd($options): \Fastly\Model\BillingEstimateResponse // Get month-to-date billing estimate
```

Get the current month-to-date estimate. This endpoint has two different responses. Under normal circumstances, it generally takes less than 5 seconds to generate but in certain cases can take up to 60 seconds. Once generated the month-to-date estimate is cached for 4 hours, and is available the next request will return the JSON representation of the month-to-date estimate. While a report is being generated in the background, this endpoint will return a `202 Accepted` response. The full format of which can be found in detail in our [billing calculation guide](https://docs.fastly.com/en/guides/how-we-calculate-your-bill). There are certain accounts for which we are unable to generate a month-to-date estimate. For example, accounts who have parent-pay are unable to generate an MTD estimate. The parent accounts are able to generate a month-to-date estimate but that estimate will not include the child accounts amounts at this time.

### Example
```php
try {
    $result = $apiInstance->getInvoiceMtd($options);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getInvoiceMtd: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**customer_id** | **string** |  |
**month** | **string** | 2-digit month. | [optional]
**year** | **string** | 4-digit year. | [optional]

### Return type

[**\Fastly\Model\BillingEstimateResponse**](../Model/BillingEstimateResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
