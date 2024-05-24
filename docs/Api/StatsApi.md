# Fastly\Api\StatsApi


```php
$apiInstance = new Fastly\Api\StatsApi(
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
[**getServiceStats()**](StatsApi.md#getServiceStats) | **GET** /service/{service_id}/stats/summary | Get stats for a service


## `getServiceStats()`

```php
getServiceStats($options): \Fastly\Model\Stats // Get stats for a service
```

Get the stats from a service for a block of time. This lists all stats by PoP location, starting with AMS. This call requires parameters to select block of time to query. Use either a timestamp range (using start_time and end_time) or a specified month/year combo (using month and year).

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['month'] = 05; // string | 2-digit month.
$options['year'] = 2020; // string | 4-digit year.
$options['start_time'] = 1608560817; // int | Epoch timestamp. Limits the results returned.
$options['end_time'] = 1608560817; // int | Epoch timestamp. Limits the results returned.

try {
    $result = $apiInstance->getServiceStats($options);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->getServiceStats: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**month** | **string** | 2-digit month. | [optional]
**year** | **string** | 4-digit year. | [optional]
**start_time** | **int** | Epoch timestamp. Limits the results returned. | [optional]
**end_time** | **int** | Epoch timestamp. Limits the results returned. | [optional]

### Return type

[**\Fastly\Model\Stats**](../Model/Stats.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
