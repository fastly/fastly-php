# Fastly\Api\DomainInspectorHistoricalApi


```php
$apiInstance = new Fastly\Api\DomainInspectorHistoricalApi(
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
[**getDomainInspectorHistorical()**](DomainInspectorHistoricalApi.md#getDomainInspectorHistorical) | **GET** /metrics/domains/services/{service_id} | Get historical domain data for a service


## `getDomainInspectorHistorical()`

```php
getDomainInspectorHistorical($options): \Fastly\Model\HistoricalDomainsResponse // Get historical domain data for a service
```

Fetches historical domain metrics for a given Fastly service, optionally filtering and grouping the results by domain, region, or POP.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['start'] = 2021-08-01T00:00:00.000Z; // string | A valid ISO-8601-formatted date and time, or UNIX timestamp, indicating the inclusive start of the query time range. If not provided, a default is chosen based on the provided `downsample` value.
$options['end'] = 2020-08-02T00:00:00.000Z; // string | A valid ISO-8601-formatted date and time, or UNIX timestamp, indicating the exclusive end of the query time range. If not provided, a default is chosen based on the provided `downsample` value.
$options['downsample'] = hour; // string | Duration of sample windows.
$options['metric'] = resp_body_bytes,status_2xx; // string | The metrics to retrieve. Multiple values should be comma-separated.
$options['group_by'] = domain; // string | Dimensions to return in the query. Multiple dimensions may be separated by commas. For example, `group_by=domain` will return one timeseries for every domain, as a total across all datacenters (POPs).
$options['limit'] = '100'; // string | Number of results per page. The maximum is 200.
$options['cursor'] = 'cursor_example'; // string | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty.
$options['region'] = usa; // string | Limit query to one or more specific geographic regions. Values should be comma-separated.
$options['datacenter'] = SJC,STP; // string | Limit query to one or more specific POPs. Values should be comma-separated.
$options['domain'] = domain_1.com,domain_2.com; // string | Limit query to one or more specific domains. Values should be comma-separated.

try {
    $result = $apiInstance->getDomainInspectorHistorical($options);
} catch (Exception $e) {
    echo 'Exception when calling DomainInspectorHistoricalApi->getDomainInspectorHistorical: ', $e->getMessage(), PHP_EOL;
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
**metric** | **string** | The metrics to retrieve. Multiple values should be comma-separated. | [optional] [defaults to 'edge_requests']
**group_by** | **string** | Dimensions to return in the query. Multiple dimensions may be separated by commas. For example, `group_by&#x3D;domain` will return one timeseries for every domain, as a total across all datacenters (POPs). | [optional] [one of: 'domain', 'datacenter', 'region', 'none']
**limit** | **string** | Number of results per page. The maximum is 200. | [optional] [defaults to '100']
**cursor** | **string** | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty. | [optional]
**region** | **string** | Limit query to one or more specific geographic regions. Values should be comma-separated. | [optional] [one of: 'usa', 'europe', 'asia', 'asia_india', 'asia_southkorea', 'africa_std', 'southamerica_std']
**datacenter** | **string** | Limit query to one or more specific POPs. Values should be comma-separated. | [optional]
**domain** | **string** | Limit query to one or more specific domains. Values should be comma-separated. | [optional]

### Return type

[**\Fastly\Model\HistoricalDomainsResponse**](../Model/HistoricalDomainsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
