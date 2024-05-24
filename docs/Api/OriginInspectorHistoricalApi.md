# Fastly\Api\OriginInspectorHistoricalApi


```php
$apiInstance = new Fastly\Api\OriginInspectorHistoricalApi(
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
[**getOriginInspectorHistorical()**](OriginInspectorHistoricalApi.md#getOriginInspectorHistorical) | **GET** /metrics/origins/services/{service_id} | Get historical origin data for a service


## `getOriginInspectorHistorical()`

```php
getOriginInspectorHistorical($options): \Fastly\Model\HistoricalOriginsResponse // Get historical origin data for a service
```

Fetches historical origin metrics for a given Fastly service, optionally filtering and grouping the results by origin host, region, or POP.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['start'] = 2021-08-01T00:00:00.000Z; // string | A valid ISO-8601-formatted date and time, or UNIX timestamp, indicating the inclusive start of the query time range. If not provided, a default is chosen based on the provided `downsample` value.
$options['end'] = 2020-08-02T00:00:00.000Z; // string | A valid ISO-8601-formatted date and time, or UNIX timestamp, indicating the exclusive end of the query time range. If not provided, a default is chosen based on the provided `downsample` value.
$options['downsample'] = hour; // string | Duration of sample windows.
$options['metric'] = resp_body_bytes,status_2xx; // string | The metrics to retrieve. Multiple values should be comma-separated.
$options['group_by'] = host; // string | Dimensions to return in the query. Multiple dimensions may be separated by commas. For example, `group_by=host` will return one timeseries for every origin host, as a total across all POPs.
$options['limit'] = '100'; // string | Number of results per page. The maximum is 200.
$options['cursor'] = 'cursor_example'; // string | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty.
$options['region'] = usa; // string | Limit query to one or more specific geographic regions. Values should be comma-separated.
$options['datacenter'] = SJC,STP; // string | Limit query to one or more specific POPs. Values should be comma-separated.
$options['host'] = origin_1,origin_2; // string | Limit query to one or more specific origin hosts. Values should be comma-separated.

try {
    $result = $apiInstance->getOriginInspectorHistorical($options);
} catch (Exception $e) {
    echo 'Exception when calling OriginInspectorHistoricalApi->getOriginInspectorHistorical: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**start** | **string** | A valid ISO-8601-formatted date and time, or UNIX timestamp, indicating the inclusive start of the query time range. If not provided, a default is chosen based on the provided `downsample` value. | [optional]
**end** | **string** | A valid ISO-8601-formatted date and time, or UNIX timestamp, indicating the exclusive end of the query time range. If not provided, a default is chosen based on the provided `downsample` value. | [optional]
**downsample** | **string** | Duration of sample windows. | [optional] [one of: 'hour', 'minute', 'day'] [defaults to 'hour']
**metric** | **string** | The metrics to retrieve. Multiple values should be comma-separated. | [optional] [defaults to 'responses']
**group_by** | **string** | Dimensions to return in the query. Multiple dimensions may be separated by commas. For example, `group_by&#x3D;host` will return one timeseries for every origin host, as a total across all POPs. | [optional] [one of: 'host', 'datacenter', 'region', 'none']
**limit** | **string** | Number of results per page. The maximum is 200. | [optional] [defaults to '100']
**cursor** | **string** | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty. | [optional]
**region** | **string** | Limit query to one or more specific geographic regions. Values should be comma-separated. | [optional] [one of: 'usa', 'europe', 'asia', 'asia_india', 'asia_southkorea', 'africa_std', 'southamerica_std']
**datacenter** | **string** | Limit query to one or more specific POPs. Values should be comma-separated. | [optional]
**host** | **string** | Limit query to one or more specific origin hosts. Values should be comma-separated. | [optional]

### Return type

[**\Fastly\Model\HistoricalOriginsResponse**](../Model/HistoricalOriginsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
