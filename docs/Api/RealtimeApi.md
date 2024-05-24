# Fastly\Api\RealtimeApi


```php
$apiInstance = new Fastly\Api\RealtimeApi(
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
[**getStatsLast120Seconds()**](RealtimeApi.md#getStatsLast120Seconds) | **GET** /v1/channel/{service_id}/ts/h | Get real-time data for the last 120 seconds
[**getStatsLast120SecondsLimitEntries()**](RealtimeApi.md#getStatsLast120SecondsLimitEntries) | **GET** /v1/channel/{service_id}/ts/h/limit/{max_entries} | Get a limited number of real-time data entries
[**getStatsLastSecond()**](RealtimeApi.md#getStatsLastSecond) | **GET** /v1/channel/{service_id}/ts/{timestamp_in_seconds} | Get real-time data from specified time


## `getStatsLast120Seconds()`

```php
getStatsLast120Seconds($options): \Fastly\Model\Realtime // Get real-time data for the last 120 seconds
```

Get data for the 120 seconds preceding the latest timestamp available for a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $result = $apiInstance->getStatsLast120Seconds($options);
} catch (Exception $e) {
    echo 'Exception when calling RealtimeApi->getStatsLast120Seconds: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

[**\Fastly\Model\Realtime**](../Model/Realtime.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getStatsLast120SecondsLimitEntries()`

```php
getStatsLast120SecondsLimitEntries($options): \Fastly\Model\Realtime // Get a limited number of real-time data entries
```

Get data for the 120 seconds preceding the latest timestamp available for a service, up to a maximum of `max_entries` entries.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['max_entries'] = 1; // int | Maximum number of results to show.

try {
    $result = $apiInstance->getStatsLast120SecondsLimitEntries($options);
} catch (Exception $e) {
    echo 'Exception when calling RealtimeApi->getStatsLast120SecondsLimitEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**max_entries** | **int** | Maximum number of results to show. |

### Return type

[**\Fastly\Model\Realtime**](../Model/Realtime.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getStatsLastSecond()`

```php
getStatsLastSecond($options): \Fastly\Model\Realtime // Get real-time data from specified time
```

Get real-time data for the specified reporting period. Specify `0` to get a single entry for the last complete second. The `Timestamp` field included in the response provides the time index of the latest entry in the dataset and can be provided as the `start_timestamp` of the next request for a seamless continuation of the dataset from one request to the next.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['timestamp_in_seconds'] = 56; // int | Timestamp in seconds (Unix epoch time).

try {
    $result = $apiInstance->getStatsLastSecond($options);
} catch (Exception $e) {
    echo 'Exception when calling RealtimeApi->getStatsLastSecond: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**timestamp_in_seconds** | **int** | Timestamp in seconds (Unix epoch time). |

### Return type

[**\Fastly\Model\Realtime**](../Model/Realtime.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
