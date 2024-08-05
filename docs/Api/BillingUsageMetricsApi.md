# Fastly\Api\BillingUsageMetricsApi


```php
$apiInstance = new Fastly\Api\BillingUsageMetricsApi(
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
[**getServiceLevelUsage()**](BillingUsageMetricsApi.md#getServiceLevelUsage) | **GET** /billing/v2/account_customers/{customer_id}/service-usage-metrics | Retrieve service-level usage metrics for a product.
[**getServiceLevelUsageTypes()**](BillingUsageMetricsApi.md#getServiceLevelUsageTypes) | **GET** /billing/v2/account_customers/{customer_id}/service-usage-types | Retrieve product usage types for a customer.


## `getServiceLevelUsage()`

```php
getServiceLevelUsage($options): \Fastly\Model\Serviceusagemetrics // Retrieve service-level usage metrics for a product.
```

Returns product usage, broken down by service.

### Example
```php
    $options['customer_id'] = 'customer_id_example'; // string | Alphanumeric string identifying the customer.
$options['product_id'] = 'product_id_example'; // string | The product identifier for the metrics returned (e.g., `cdn_usage`). This field is not required for CSV requests.
$options['usage_type_name'] = 'usage_type_name_example'; // string | The usage type name for the metrics returned (e.g., `North America Requests`). This field is not required for CSV requests.
$options['time_granularity'] = 'time_granularity_example'; // string
$options['start_date'] = 2023-01-01; // string
$options['end_date'] = 2023-01-31; // string
$options['start_month'] = 2023-01; // string
$options['end_month'] = 2023-03; // string
$options['limit'] = '5'; // string | Number of results per page. The maximum is 100.
$options['cursor'] = 'cursor_example'; // string | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty.

try {
    $result = $apiInstance->getServiceLevelUsage($options);
} catch (Exception $e) {
    echo 'Exception when calling BillingUsageMetricsApi->getServiceLevelUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**customer_id** | **string** | Alphanumeric string identifying the customer. |
**product_id** | **string** | The product identifier for the metrics returned (e.g., `cdn_usage`). This field is not required for CSV requests. |
**usage_type_name** | **string** | The usage type name for the metrics returned (e.g., `North America Requests`). This field is not required for CSV requests. |
**time_granularity** | **string** |  |
**start_date** | **string** |  | [optional]
**end_date** | **string** |  | [optional]
**start_month** | **string** |  | [optional]
**end_month** | **string** |  | [optional]
**limit** | **string** | Number of results per page. The maximum is 100. | [optional] [defaults to '5']
**cursor** | **string** | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty. | [optional]

### Return type

[**\Fastly\Model\Serviceusagemetrics**](../Model/Serviceusagemetrics.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getServiceLevelUsageTypes()`

```php
getServiceLevelUsageTypes($options): \Fastly\Model\Serviceusagetypes // Retrieve product usage types for a customer.
```

Returns product usage types reported by the customer's services.

### Example
```php
    $options['customer_id'] = 'customer_id_example'; // string | Alphanumeric string identifying the customer.

try {
    $result = $apiInstance->getServiceLevelUsageTypes($options);
} catch (Exception $e) {
    echo 'Exception when calling BillingUsageMetricsApi->getServiceLevelUsageTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**customer_id** | **string** | Alphanumeric string identifying the customer. |

### Return type

[**\Fastly\Model\Serviceusagetypes**](../Model/Serviceusagetypes.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
