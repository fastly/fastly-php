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
[**getServiceLevelUsage()**](BillingUsageMetricsApi.md#getServiceLevelUsage) | **GET** /billing/v3/service-usage-metrics | Retrieve service-level usage metrics for a product.
[**getUsageMetrics()**](BillingUsageMetricsApi.md#getUsageMetrics) | **GET** /billing/v3/usage-metrics | Get monthly usage metrics


## `getServiceLevelUsage()`

```php
getServiceLevelUsage($options): \Fastly\Model\Serviceusagemetrics // Retrieve service-level usage metrics for a product.
```

Returns product usage, broken down by service.

### Example
```php
    $options['product_id'] = 'product_id_example'; // string | The product identifier for the metrics returned (e.g., `cdn_usage`). This field is not required for CSV requests.
$options['usage_type_name'] = 'usage_type_name_example'; // string | The usage type name for the metrics returned (e.g., `North America Requests`). This field is not required for CSV requests.
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
**product_id** | **string** | The product identifier for the metrics returned (e.g., `cdn_usage`). This field is not required for CSV requests. |
**usage_type_name** | **string** | The usage type name for the metrics returned (e.g., `North America Requests`). This field is not required for CSV requests. |
**start_month** | **string** |  | [optional]
**end_month** | **string** |  | [optional]
**limit** | **string** | Number of results per page. The maximum is 100. | [optional] [defaults to '5']
**cursor** | **string** | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty. | [optional]

### Return type

[**\Fastly\Model\Serviceusagemetrics**](../Model/Serviceusagemetrics.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getUsageMetrics()`

```php
getUsageMetrics($options): \Fastly\Model\Usagemetric // Get monthly usage metrics
```

Returns monthly usage metrics for customer by product.

### Example
```php
    $options['start_month'] = 2023-01; // string
$options['end_month'] = 2023-03; // string

try {
    $result = $apiInstance->getUsageMetrics($options);
} catch (Exception $e) {
    echo 'Exception when calling BillingUsageMetricsApi->getUsageMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**start_month** | **string** |  | [optional]
**end_month** | **string** |  | [optional]

### Return type

[**\Fastly\Model\Usagemetric**](../Model/Usagemetric.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
