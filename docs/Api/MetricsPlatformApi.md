# Fastly\Api\MetricsPlatformApi


```php
$apiInstance = new Fastly\Api\MetricsPlatformApi(
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
[**getPlatformMetricsServiceHistorical()**](MetricsPlatformApi.md#getPlatformMetricsServiceHistorical) | **GET** /metrics/platform/services/{service_id}/{granularity} | Get historical time series metrics for a single service


## `getPlatformMetricsServiceHistorical()`

```php
getPlatformMetricsServiceHistorical($options): \Fastly\Model\PlatformMetricsResponse // Get historical time series metrics for a single service
```

Fetches historical metrics for a single service for a given granularity.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['granularity'] = daily; // string | Duration of sample windows.
$options['from'] = 2025-06-08T00:00:00.000Z; // string | A valid RFC-8339-formatted date and time indicating the inclusive start of the query time range. If not provided, a default is chosen based on the provided `granularity` value.
$options['to'] = 2025-08-02T00:00:00.000Z; // string | A valid RFC-8339-formatted date and time indicating the exclusive end of the query time range. If not provided, a default is chosen based on the provided `granularity` value.
$options['metric'] = ttfb_edge_p95_us,ttfb_edge_p99_us; // string | The metric(s) to retrieve. Multiple values should be comma-separated.
$options['metric_set'] = ttfb; // string | The metric set(s) to retrieve. Multiple values should be comma-separated.
$options['group_by'] = region; // string | Field to group_by in the query. For example, `group_by=region` will return entries for grouped by timestamp and region.
$options['region'] = usa; // string | Limit query to one or more specific geographic regions. Values should be comma-separated.
$options['datacenter'] = SJC,STP; // string | Limit query to one or more specific POPs. Values should be comma-separated.
$options['cursor'] = 'cursor_example'; // string | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty.
$options['limit'] = '1000'; // string | Number of results per page. The maximum is 10000.

try {
    $result = $apiInstance->getPlatformMetricsServiceHistorical($options);
} catch (Exception $e) {
    echo 'Exception when calling MetricsPlatformApi->getPlatformMetricsServiceHistorical: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**granularity** | **string** | Duration of sample windows. | [one of: 'minutely', 'hourly', 'daily']
**from** | **string** | A valid RFC-8339-formatted date and time indicating the inclusive start of the query time range. If not provided, a default is chosen based on the provided `granularity` value. | [optional]
**to** | **string** | A valid RFC-8339-formatted date and time indicating the exclusive end of the query time range. If not provided, a default is chosen based on the provided `granularity` value. | [optional]
**metric** | **string** | The metric(s) to retrieve. Multiple values should be comma-separated. | [optional]
**metric_set** | **string** | The metric set(s) to retrieve. Multiple values should be comma-separated. | [optional] [one of: 'ttfb']
**group_by** | **string** | Field to group_by in the query. For example, `group_by&#x3D;region` will return entries for grouped by timestamp and region. | [optional] [one of: 'datacenter', 'region']
**region** | **string** | Limit query to one or more specific geographic regions. Values should be comma-separated. | [optional] [one of: 'africa_std', 'anzac', 'asia', 'asia_india', 'asia_southkorea', 'europe', 'mexico', 'southamerica_std', 'usa']
**datacenter** | **string** | Limit query to one or more specific POPs. Values should be comma-separated. | [optional]
**cursor** | **string** | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty. | [optional]
**limit** | **string** | Number of results per page. The maximum is 10000. | [optional] [defaults to '1000']

### Return type

[**\Fastly\Model\PlatformMetricsResponse**](../Model/PlatformMetricsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
