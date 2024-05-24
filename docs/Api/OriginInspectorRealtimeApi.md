# Fastly\Api\OriginInspectorRealtimeApi


```php
$apiInstance = new Fastly\Api\OriginInspectorRealtimeApi(
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
[**getOriginInspectorLast120Seconds()**](OriginInspectorRealtimeApi.md#getOriginInspectorLast120Seconds) | **GET** /v1/origins/{service_id}/ts/h | Get real-time origin data for the last 120 seconds
[**getOriginInspectorLastMaxEntries()**](OriginInspectorRealtimeApi.md#getOriginInspectorLastMaxEntries) | **GET** /v1/origins/{service_id}/ts/h/limit/{max_entries} | Get a limited number of real-time origin data entries
[**getOriginInspectorLastSecond()**](OriginInspectorRealtimeApi.md#getOriginInspectorLastSecond) | **GET** /v1/origins/{service_id}/ts/{start_timestamp} | Get real-time origin data from specific time.


## `getOriginInspectorLast120Seconds()`

```php
getOriginInspectorLast120Seconds($options): \Fastly\Model\OriginInspector // Get real-time origin data for the last 120 seconds
```

Get data for the 120 seconds preceding the latest timestamp available for a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $result = $apiInstance->getOriginInspectorLast120Seconds($options);
} catch (Exception $e) {
    echo 'Exception when calling OriginInspectorRealtimeApi->getOriginInspectorLast120Seconds: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

[**\Fastly\Model\OriginInspector**](../Model/OriginInspector.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getOriginInspectorLastMaxEntries()`

```php
getOriginInspectorLastMaxEntries($options): \Fastly\Model\OriginInspector // Get a limited number of real-time origin data entries
```

Get data for the `max_entries` seconds preceding the latest timestamp available for a service, up to a maximum of 120 entries.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['max_entries'] = 1; // int | Maximum number of results to display.

try {
    $result = $apiInstance->getOriginInspectorLastMaxEntries($options);
} catch (Exception $e) {
    echo 'Exception when calling OriginInspectorRealtimeApi->getOriginInspectorLastMaxEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**max_entries** | **int** | Maximum number of results to display. |

### Return type

[**\Fastly\Model\OriginInspector**](../Model/OriginInspector.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getOriginInspectorLastSecond()`

```php
getOriginInspectorLastSecond($options): \Fastly\Model\OriginInspector // Get real-time origin data from specific time.
```

Get real-time origin data for the specified reporting period. Specify `0` to get a single entry for the last complete second. The `Timestamp` field included in the response provides the time index of the latest entry in the dataset and can be provided as the `start_timestamp` of the next request for a seamless continuation of the dataset from one request to the next. Due to processing latency, the earliest entry in the response dataset may be earlier than `start_timestamp` by the value of `AggregateDelay`.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['start_timestamp'] = 56; // int | Timestamp in seconds (Unix epoch time).

try {
    $result = $apiInstance->getOriginInspectorLastSecond($options);
} catch (Exception $e) {
    echo 'Exception when calling OriginInspectorRealtimeApi->getOriginInspectorLastSecond: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**start_timestamp** | **int** | Timestamp in seconds (Unix epoch time). |

### Return type

[**\Fastly\Model\OriginInspector**](../Model/OriginInspector.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
