# Fastly\Api\DomainInspectorRealtimeApi


```php
$apiInstance = new Fastly\Api\DomainInspectorRealtimeApi(
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
[**getDomainInspectorLast120Seconds()**](DomainInspectorRealtimeApi.md#getDomainInspectorLast120Seconds) | **GET** /v1/domains/{service_id}/ts/h | Get real-time domain data for the last 120 seconds
[**getDomainInspectorLastMaxEntries()**](DomainInspectorRealtimeApi.md#getDomainInspectorLastMaxEntries) | **GET** /v1/domains/{service_id}/ts/h/limit/{max_entries} | Get a limited number of real-time domain data entries
[**getDomainInspectorLastSecond()**](DomainInspectorRealtimeApi.md#getDomainInspectorLastSecond) | **GET** /v1/domains/{service_id}/ts/{start_timestamp} | Get real-time domain data from a specified time


## `getDomainInspectorLast120Seconds()`

```php
getDomainInspectorLast120Seconds($options): \Fastly\Model\DomainInspector // Get real-time domain data for the last 120 seconds
```

Get data for the 120 seconds preceding the latest timestamp available for a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $result = $apiInstance->getDomainInspectorLast120Seconds($options);
} catch (Exception $e) {
    echo 'Exception when calling DomainInspectorRealtimeApi->getDomainInspectorLast120Seconds: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

[**\Fastly\Model\DomainInspector**](../Model/DomainInspector.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getDomainInspectorLastMaxEntries()`

```php
getDomainInspectorLastMaxEntries($options): \Fastly\Model\DomainInspector // Get a limited number of real-time domain data entries
```

Get data for the `max_entries` seconds preceding the latest timestamp available for a service, up to a maximum of 120 entries.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['max_entries'] = 1; // int | Maximum number of results to show.

try {
    $result = $apiInstance->getDomainInspectorLastMaxEntries($options);
} catch (Exception $e) {
    echo 'Exception when calling DomainInspectorRealtimeApi->getDomainInspectorLastMaxEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**max_entries** | **int** | Maximum number of results to show. |

### Return type

[**\Fastly\Model\DomainInspector**](../Model/DomainInspector.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getDomainInspectorLastSecond()`

```php
getDomainInspectorLastSecond($options): \Fastly\Model\DomainInspector // Get real-time domain data from a specified time
```

Get real-time domain data for the specified reporting period. Specify `0` to get a single entry for the last complete second. The `Timestamp` field included in the response provides the time index of the latest entry in the dataset and can be provided as the `start_timestamp` of the next request for a seamless continuation of the dataset from one request to the next. Due to processing latency, the earliest entry in the response dataset may be earlier than `start_timestamp` by the value of `AggregateDelay`.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['start_timestamp'] = 56; // int | Timestamp in seconds (Unix epoch time).

try {
    $result = $apiInstance->getDomainInspectorLastSecond($options);
} catch (Exception $e) {
    echo 'Exception when calling DomainInspectorRealtimeApi->getDomainInspectorLastSecond: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**start_timestamp** | **int** | Timestamp in seconds (Unix epoch time). |

### Return type

[**\Fastly\Model\DomainInspector**](../Model/DomainInspector.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
