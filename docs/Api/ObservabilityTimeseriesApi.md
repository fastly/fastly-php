# Fastly\Api\ObservabilityTimeseriesApi


```php
$apiInstance = new Fastly\Api\ObservabilityTimeseriesApi(
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
[**timeseriesGet()**](ObservabilityTimeseriesApi.md#timeseriesGet) | **GET** /observability/timeseries | Retrieve observability data as a time series


## `timeseriesGet()`

```php
timeseriesGet($options): \Fastly\Model\TimeseriesGetResponse // Retrieve observability data as a time series
```

Retrieves observability data as a time series.

### Example
```php
    $options['source'] = logs; // string
$options['from'] = 2024-01-03T16:00:00Z; // string
$options['to'] = 2024-01-03T18:00:00Z; // string
$options['granularity'] = hour; // string
$options['dimensions'] = 'dimensions_example'; // string
$options['filter'] = filter[response_status]=200; // string
$options['series'] = avg[response_time],p99[response_time]; // string

try {
    $result = $apiInstance->timeseriesGet($options);
} catch (Exception $e) {
    echo 'Exception when calling ObservabilityTimeseriesApi->timeseriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**source** | **string** |  | [one of: 'logs', 'sustainability']
**from** | **string** |  |
**to** | **string** |  |
**granularity** | **string** |  |
**dimensions** | **string** |  | [optional]
**filter** | **string** |  | [optional]
**series** | **string** |  |

### Return type

[**\Fastly\Model\TimeseriesGetResponse**](../Model/TimeseriesGetResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
