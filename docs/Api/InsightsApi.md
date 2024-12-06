# Fastly\Api\InsightsApi


```php
$apiInstance = new Fastly\Api\InsightsApi(
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
[**getLogInsights()**](InsightsApi.md#getLogInsights) | **GET** /observability/log-insights | Retrieve log insights


## `getLogInsights()`

```php
getLogInsights($options): \Fastly\Model\GetLogInsightsResponse // Retrieve log insights
```

Retrieves statistics from sampled log records.

### Example
```php
    $options['visualization'] = 'visualization_example'; // string
$options['service_id'] = 'service_id_example'; // string
$options['start'] = 'start_example'; // string
$options['end'] = 'end_example'; // string
$options['pops'] = 'pops_example'; // string
$options['domain'] = 'domain_example'; // string
$options['domain_exact_match'] = True; // bool
$options['limit'] = 3.4; // float

try {
    $result = $apiInstance->getLogInsights($options);
} catch (Exception $e) {
    echo 'Exception when calling InsightsApi->getLogInsights: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**visualization** | **string** |  | [one of: 'top-url-by-bandwidth', 'bottom-url-by-cache-hit-ratio', 'top-url-by-cache-hit-ratio', 'country-statistics', 'top-url-by-duration-sum', 'top-4xx-urls', 'top-5xx-urls', 'top-url-by-misses', 'top-url-by-requests', 'top-browser-by-requests', 'top-content-type-by-requests', 'top-device-by-requests', 'top-os-by-requests', 'response-status-codes', 'top-503-responses']
**service_id** | **string** |  |
**start** | **string** |  |
**end** | **string** |  |
**pops** | **string** |  | [optional]
**domain** | **string** |  | [optional]
**domain_exact_match** | **bool** |  | [optional]
**limit** | **float** |  | [optional]

### Return type

[**\Fastly\Model\GetLogInsightsResponse**](../Model/GetLogInsightsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
