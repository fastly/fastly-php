# Fastly\Api\BotRequestsMetricsApi


```php
$apiInstance = new Fastly\Api\BotRequestsMetricsApi(
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
[**getBotRequestMetricsServiceHistorical()**](BotRequestsMetricsApi.md#getBotRequestMetricsServiceHistorical) | **GET** /metrics/bots/entities/{service_id}/{granularity} | Get per-service historical time series metrics for bot requests broken down by bot-type.


## `getBotRequestMetricsServiceHistorical()`

```php
getBotRequestMetricsServiceHistorical($options): \Fastly\Model\BotRequestMetricsResponse // Get per-service historical time series metrics for bot requests broken down by bot-type.
```

Return historical time series metrics for bot requests broken down by bot-type.

### Example
```php
    $options['granularity'] = minutely; // string | Duration of sample windows.
$options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['from'] = 2025-06-08T00:00:00.000Z; // string | A valid RFC-8339-formatted date and time indicating the inclusive start of the query time range. If not provided, a default is chosen based on the provided `granularity` value.
$options['to'] = 2025-08-02T00:00:00.000Z; // string | A valid RFC-8339-formatted date and time indicating the exclusive end of the query time range. If not provided, a default is chosen based on the provided `granularity` value.
$options['group_by'] = bot_id; // string | Field to group by in the query. For example, `group_by=bot_id` will return entries grouped by `timestamp` and `bot_id`.
$options['datacenter'] = SJC,STP; // string | Limit query to one or more specific POPs. Values should be comma-separated.
$options['bot'] = 'bot_example'; // string | Filter results based by Bot ID.
$options['region'] = usa; // string | Limit query to one or more specific geographic regions. Values should be comma-separated.
$options['cursor'] = 'cursor_example'; // string | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty.
$options['metric'] = status_4xx,status_5xx,ipv6,http3; // string | One or more metrics to retrieve. Multiple values should be comma-separated.
$options['metric_set'] = content_guard; // string | The metric set to retrieve.
$options['limit'] = '1000'; // string | Number of results per page. The maximum is 10000.

try {
    $result = $apiInstance->getBotRequestMetricsServiceHistorical($options);
} catch (Exception $e) {
    echo 'Exception when calling BotRequestsMetricsApi->getBotRequestMetricsServiceHistorical: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**granularity** | **string** | Duration of sample windows. | [one of: 'minutely', 'hourly', 'daily']
**service_id** | **string** | Alphanumeric string identifying the service. |
**from** | **string** | A valid RFC-8339-formatted date and time indicating the inclusive start of the query time range. If not provided, a default is chosen based on the provided `granularity` value. | [optional]
**to** | **string** | A valid RFC-8339-formatted date and time indicating the exclusive end of the query time range. If not provided, a default is chosen based on the provided `granularity` value. | [optional]
**group_by** | **string** | Field to group by in the query. For example, `group_by&#x3D;bot_id` will return entries grouped by `timestamp` and `bot_id`. | [optional] [one of: 'datacenter', 'bot_id']
**datacenter** | **string** | Limit query to one or more specific POPs. Values should be comma-separated. | [optional]
**bot** | **string** | Filter results based by Bot ID. | [optional]
**region** | **string** | Limit query to one or more specific geographic regions. Values should be comma-separated. | [optional] [one of: 'africa_std', 'anzac', 'asia', 'asia_india', 'asia_southkorea', 'europe', 'mexico', 'southamerica_std', 'usa']
**cursor** | **string** | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty. | [optional]
**metric** | **string** | One or more metrics to retrieve. Multiple values should be comma-separated. | [optional]
**metric_set** | **string** | The metric set to retrieve. | [optional] [one of: 'content_guard']
**limit** | **string** | Number of results per page. The maximum is 10000. | [optional] [defaults to '1000']

### Return type

[**\Fastly\Model\BotRequestMetricsResponse**](../Model/BotRequestMetricsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
