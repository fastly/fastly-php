# Fastly\Api\BillingInvoicesApi


```php
$apiInstance = new Fastly\Api\BillingInvoicesApi(
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
[**getInvoiceByInvoiceId()**](BillingInvoicesApi.md#getInvoiceByInvoiceId) | **GET** /billing/v3/invoices/{invoice_id} | Get invoice by ID.
[**getMonthToDateInvoice()**](BillingInvoicesApi.md#getMonthToDateInvoice) | **GET** /billing/v3/invoices/month-to-date | Get month-to-date invoice.
[**listInvoices()**](BillingInvoicesApi.md#listInvoices) | **GET** /billing/v3/invoices | List of invoices.


## `getInvoiceByInvoiceId()`

```php
getInvoiceByInvoiceId($options): \Fastly\Model\EomInvoiceResponse // Get invoice by ID.
```

Returns invoice associated with the invoice id.

### Example
```php
    $options['invoice_id'] = 4183280; // int

try {
    $result = $apiInstance->getInvoiceByInvoiceId($options);
} catch (Exception $e) {
    echo 'Exception when calling BillingInvoicesApi->getInvoiceByInvoiceId: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**invoice_id** | **int** |  |

### Return type

[**\Fastly\Model\EomInvoiceResponse**](../Model/EomInvoiceResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getMonthToDateInvoice()`

```php
getMonthToDateInvoice($options): \Fastly\Model\MtdInvoiceResponse // Get month-to-date invoice.
```

Returns month-to-date invoice for the current month.

### Example
```php
    
try {
    $result = $apiInstance->getMonthToDateInvoice($options);
} catch (Exception $e) {
    echo 'Exception when calling BillingInvoicesApi->getMonthToDateInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\MtdInvoiceResponse**](../Model/MtdInvoiceResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listInvoices()`

```php
listInvoices($options): \Fastly\Model\ListEomInvoicesResponse // List of invoices.
```

Returns the list of invoices, sorted by billing start date (newest to oldest).

### Example
```php
    $options['billing_start_date'] = 2023-01-01; // string
$options['billing_end_date'] = 2023-01-31; // string
$options['limit'] = '100'; // string | Number of results per page. The maximum is 200.
$options['cursor'] = 'cursor_example'; // string | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty.

try {
    $result = $apiInstance->listInvoices($options);
} catch (Exception $e) {
    echo 'Exception when calling BillingInvoicesApi->listInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**billing_start_date** | **string** |  | [optional]
**billing_end_date** | **string** |  | [optional]
**limit** | **string** | Number of results per page. The maximum is 200. | [optional] [defaults to '100']
**cursor** | **string** | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty. | [optional]

### Return type

[**\Fastly\Model\ListEomInvoicesResponse**](../Model/ListEomInvoicesResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
