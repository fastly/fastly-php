# Fastly\Api\ObservabilityAggregationsForLogsApi


```php
$apiInstance = new Fastly\Api\ObservabilityAggregationsForLogsApi(
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
[**logAggregationsGet()**](ObservabilityAggregationsForLogsApi.md#logAggregationsGet) | **GET** /observability/aggregations | Retrieve aggregated log results


## `logAggregationsGet()`

```php
logAggregationsGet($options): \Fastly\Model\LogAggregationsGetResponse // Retrieve aggregated log results
```

Retrieves aggregated log results.

### Example
```php
    $options['source'] = 'source_example'; // string
$options['service_id'] = 'service_id_example'; // string
$options['start'] = 'start_example'; // string
$options['end'] = 'end_example'; // string
$options['limit'] = 3.4; // float
$options['filter'] = 'filter_example'; // string
$options['series'] = 'series_example'; // string
$options['dimensions'] = 'dimensions_example'; // string
$options['sort'] = 'sort_example'; // string

try {
    $result = $apiInstance->logAggregationsGet($options);
} catch (Exception $e) {
    echo 'Exception when calling ObservabilityAggregationsForLogsApi->logAggregationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**source** | **string** |  |
**service_id** | **string** |  |
**start** | **string** |  |
**end** | **string** |  |
**limit** | **float** |  | [optional]
**filter** | **string** |  | [optional]
**series** | **string** |  |
**dimensions** | **string** |  | [optional]
**sort** | **string** |  | [optional]

### Return type

[**\Fastly\Model\LogAggregationsGetResponse**](../Model/LogAggregationsGetResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
