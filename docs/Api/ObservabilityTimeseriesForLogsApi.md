# Fastly\Api\ObservabilityTimeseriesForLogsApi


```php
$apiInstance = new Fastly\Api\ObservabilityTimeseriesForLogsApi(
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
[**logTimeseriesGet()**](ObservabilityTimeseriesForLogsApi.md#logTimeseriesGet) | **GET** /observability/timeseries | Retrieve log data as time series


## `logTimeseriesGet()`

```php
logTimeseriesGet($options): \Fastly\Model\LogTimeseriesGetResponse // Retrieve log data as time series
```

Retrieves log data as time series.

### Example
```php
    $options['source'] = 'source_example'; // string
$options['service_id'] = 'service_id_example'; // string
$options['start'] = 'start_example'; // string
$options['end'] = 'end_example'; // string
$options['granularity'] = 'granularity_example'; // string
$options['filter'] = 'filter_example'; // string
$options['series'] = 'series_example'; // string

try {
    $result = $apiInstance->logTimeseriesGet($options);
} catch (Exception $e) {
    echo 'Exception when calling ObservabilityTimeseriesForLogsApi->logTimeseriesGet: ', $e->getMessage(), PHP_EOL;
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
**granularity** | **string** |  | [one of: 'second', 'minute', 'hour', 'day']
**filter** | **string** |  | [optional]
**series** | **string** |  |

### Return type

[**\Fastly\Model\LogTimeseriesGetResponse**](../Model/LogTimeseriesGetResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
