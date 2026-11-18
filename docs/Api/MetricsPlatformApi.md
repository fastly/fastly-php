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
[**getPlatformMetricsAggregateHistorical()**](MetricsPlatformApi.md#getPlatformMetricsAggregateHistorical) | **GET** /metrics/v2/platform/aggregate/{granularity} | Get aggregated historical time series metrics for all entities
[**getPlatformMetricsEntityHistorical()**](MetricsPlatformApi.md#getPlatformMetricsEntityHistorical) | **GET** /metrics/v2/platform/entities/{entity_id}/{granularity} | Get historical time series metrics for a single entity.


## `getPlatformMetricsAggregateHistorical()`

```php
getPlatformMetricsAggregateHistorical($options): \Fastly\Model\PlatformMetricsResponse // Get aggregated historical time series metrics for all entities
```

Fetches historical metrics for all entities for a customer for a given granularity. Entity in this context refers to an instance of a Fastly resource, such as a VCL service, Compute service, or NGWAF workspace.

### Example
```php
    $options['granularity'] = minutely; // string | Duration of sample windows.
$options['from'] = 2025-06-08T00:00:00.000Z; // string | A valid RFC-8339-formatted date and time indicating the inclusive start of the query time range. If not provided, a default is chosen based on the provided `granularity` value.
$options['to'] = 2025-08-02T00:00:00.000Z; // string | A valid RFC-8339-formatted date and time indicating the exclusive end of the query time range. If not provided, a default is chosen based on the provided `granularity` value.
$options['metric'] = status_4xx,status_5xx,ipv6,http3; // string | One or more metrics to retrieve. Multiple values should be comma-separated.
$options['metric_set'] = delivery_traffic_flow; // string | One or more metric sets to retrieve. Multiple values should be comma-separated. A metric set expands to a list of metrics; see the Metric Sets section above for the metrics in each set. A metric that appears in more than one requested set is returned once.
$options['group_by'] = region; // string | Field to group_by in the query. For example, `group_by=region` will return entries for grouped by timestamp and region.
$options['region'] = usa; // string | Limit query to one or more specific geographic regions. Values should be comma-separated.
$options['datacenter'] = SJC,STP; // string | Limit query to one or more specific POPs. Values should be comma-separated.
$options['cursor'] = 'cursor_example'; // string | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty.
$options['limit'] = '1000'; // string | Number of results per page. The maximum is 10000.

try {
    $result = $apiInstance->getPlatformMetricsAggregateHistorical($options);
} catch (Exception $e) {
    echo 'Exception when calling MetricsPlatformApi->getPlatformMetricsAggregateHistorical: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**granularity** | **string** | Duration of sample windows. | [one of: 'minutely', 'hourly', 'daily']
**from** | **string** | A valid RFC-8339-formatted date and time indicating the inclusive start of the query time range. If not provided, a default is chosen based on the provided `granularity` value. | [optional]
**to** | **string** | A valid RFC-8339-formatted date and time indicating the exclusive end of the query time range. If not provided, a default is chosen based on the provided `granularity` value. | [optional]
**metric** | **string** | One or more metrics to retrieve. Multiple values should be comma-separated. | [optional]
**metric_set** | **string** | One or more metric sets to retrieve. Multiple values should be comma-separated. A metric set expands to a list of metrics; see the Metric Sets section above for the metrics in each set. A metric that appears in more than one requested set is returned once. | [optional] [one of: 'delivery_traffic_flow', 'delivery_cache_performance', 'delivery_errors', 'compute_traffic_flow', 'compute_performance', 'compute_errors', 'content_guard', 'content_security', 'ddos', 'domain_api', 'fanout', 'image_opto', 'ngwaf', 'object_storage', 'websockets']
**group_by** | **string** | Field to group_by in the query. For example, `group_by&#x3D;region` will return entries for grouped by timestamp and region. | [optional] [one of: 'datacenter', 'region']
**region** | **string** | Limit query to one or more specific geographic regions. Values should be comma-separated. | [optional] [one of: 'africa_std', 'anzac', 'asia', 'asia_india', 'asia_southkorea', 'saudi_arabia', 'europe', 'mexico', 'southamerica_std', 'usa']
**datacenter** | **string** | Limit query to one or more specific POPs. Values should be comma-separated. | [optional]
**cursor** | **string** | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty. | [optional]
**limit** | **string** | Number of results per page. The maximum is 10000. | [optional] [defaults to '1000']

### Return type

[**\Fastly\Model\PlatformMetricsResponse**](../Model/PlatformMetricsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getPlatformMetricsEntityHistorical()`

```php
getPlatformMetricsEntityHistorical($options): \Fastly\Model\PlatformMetricsResponse // Get historical time series metrics for a single entity.
```

Fetches historical metrics for a single entity for a given granularity. Entity in this context refers to an instance of a Fastly resource, such as a VCL service, Compute service, or NGWAF workspace.

### Example
```php
    $options['entity_id'] = l4c2G719JnG5z0qbt512fG; // string | Alphanumeric string identifying the entity.
$options['granularity'] = minutely; // string | Duration of sample windows.
$options['from'] = 2025-06-08T00:00:00.000Z; // string | A valid RFC-8339-formatted date and time indicating the inclusive start of the query time range. If not provided, a default is chosen based on the provided `granularity` value.
$options['to'] = 2025-08-02T00:00:00.000Z; // string | A valid RFC-8339-formatted date and time indicating the exclusive end of the query time range. If not provided, a default is chosen based on the provided `granularity` value.
$options['metric'] = status_4xx,status_5xx,ipv6,http3; // string | One or more metrics to retrieve. Multiple values should be comma-separated.
$options['metric_set'] = delivery_traffic_flow; // string | One or more metric sets to retrieve. Multiple values should be comma-separated. A metric set expands to a list of metrics; see the Metric Sets section above for the metrics in each set. A metric that appears in more than one requested set is returned once.
$options['group_by'] = region; // string | Field to group_by in the query. For example, `group_by=region` will return entries for grouped by timestamp and region.
$options['region'] = usa; // string | Limit query to one or more specific geographic regions. Values should be comma-separated.
$options['datacenter'] = SJC,STP; // string | Limit query to one or more specific POPs. Values should be comma-separated.
$options['cursor'] = 'cursor_example'; // string | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty.
$options['limit'] = '1000'; // string | Number of results per page. The maximum is 10000.

try {
    $result = $apiInstance->getPlatformMetricsEntityHistorical($options);
} catch (Exception $e) {
    echo 'Exception when calling MetricsPlatformApi->getPlatformMetricsEntityHistorical: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**entity_id** | **string** | Alphanumeric string identifying the entity. |
**granularity** | **string** | Duration of sample windows. | [one of: 'minutely', 'hourly', 'daily']
**from** | **string** | A valid RFC-8339-formatted date and time indicating the inclusive start of the query time range. If not provided, a default is chosen based on the provided `granularity` value. | [optional]
**to** | **string** | A valid RFC-8339-formatted date and time indicating the exclusive end of the query time range. If not provided, a default is chosen based on the provided `granularity` value. | [optional]
**metric** | **string** | One or more metrics to retrieve. Multiple values should be comma-separated. | [optional]
**metric_set** | **string** | One or more metric sets to retrieve. Multiple values should be comma-separated. A metric set expands to a list of metrics; see the Metric Sets section above for the metrics in each set. A metric that appears in more than one requested set is returned once. | [optional] [one of: 'delivery_traffic_flow', 'delivery_cache_performance', 'delivery_errors', 'compute_traffic_flow', 'compute_performance', 'compute_errors', 'content_guard', 'content_security', 'ddos', 'domain_api', 'fanout', 'image_opto', 'ngwaf', 'object_storage', 'websockets']
**group_by** | **string** | Field to group_by in the query. For example, `group_by&#x3D;region` will return entries for grouped by timestamp and region. | [optional] [one of: 'datacenter', 'region']
**region** | **string** | Limit query to one or more specific geographic regions. Values should be comma-separated. | [optional] [one of: 'africa_std', 'anzac', 'asia', 'asia_india', 'asia_southkorea', 'saudi_arabia', 'europe', 'mexico', 'southamerica_std', 'usa']
**datacenter** | **string** | Limit query to one or more specific POPs. Values should be comma-separated. | [optional]
**cursor** | **string** | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty. | [optional]
**limit** | **string** | Number of results per page. The maximum is 10000. | [optional] [defaults to '1000']

### Return type

[**\Fastly\Model\PlatformMetricsResponse**](../Model/PlatformMetricsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
