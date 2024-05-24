# Fastly\Api\WholePlatformDdosHistoricalApi


```php
$apiInstance = new Fastly\Api\WholePlatformDdosHistoricalApi(
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
[**getPlatformDdosHistorical()**](WholePlatformDdosHistoricalApi.md#getPlatformDdosHistorical) | **GET** /metrics/platform/ddos | Get historical DDoS metrics for the entire Fastly platform


## `getPlatformDdosHistorical()`

```php
getPlatformDdosHistorical($options): \Fastly\Model\PlatformDdosResponse // Get historical DDoS metrics for the entire Fastly platform
```

Fetches historical DDoS metrics for the entire Fastly platform.

### Example
```php
    $options['start'] = 2021-08-01T00:00:00.000Z; // string | A valid ISO-8601-formatted date and time, or UNIX timestamp, indicating the inclusive start of the query time range. If not provided, a default is chosen based on the provided `downsample` value.
$options['end'] = 2020-08-02T00:00:00.000Z; // string | A valid ISO-8601-formatted date and time, or UNIX timestamp, indicating the exclusive end of the query time range. If not provided, a default is chosen based on the provided `downsample` value.
$options['downsample'] = hour; // string | Duration of sample windows.

try {
    $result = $apiInstance->getPlatformDdosHistorical($options);
} catch (Exception $e) {
    echo 'Exception when calling WholePlatformDdosHistoricalApi->getPlatformDdosHistorical: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**start** | **string** | A valid ISO-8601-formatted date and time, or UNIX timestamp, indicating the inclusive start of the query time range. If not provided, a default is chosen based on the provided `downsample` value. | [optional]
**end** | **string** | A valid ISO-8601-formatted date and time, or UNIX timestamp, indicating the exclusive end of the query time range. If not provided, a default is chosen based on the provided `downsample` value. | [optional]
**downsample** | **string** | Duration of sample windows. | [optional] [one of: 'hour', 'day'] [defaults to 'hour']

### Return type

[**\Fastly\Model\PlatformDdosResponse**](../Model/PlatformDdosResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
