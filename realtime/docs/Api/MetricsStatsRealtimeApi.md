# OpenAPI\Client\MetricsStatsRealtimeApi

All URIs are relative to https://rt.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStatsLast120Seconds()**](MetricsStatsRealtimeApi.md#getStatsLast120Seconds) | **GET** /v1/channel/{service_id}/ts/h | Get real-time data for the last 120 seconds
[**getStatsLast120SecondsLimitEntries()**](MetricsStatsRealtimeApi.md#getStatsLast120SecondsLimitEntries) | **GET** /v1/channel/{service_id}/ts/h/limit/{max_entries} | Get a limited number of real-time data entries
[**getStatsLastSecond()**](MetricsStatsRealtimeApi.md#getStatsLastSecond) | **GET** /v1/channel/{service_id}/ts/{timestamp_in_seconds} | Get real-time data for the last second


## `getStatsLast120Seconds()`

```php
getStatsLast120Seconds($service_id)
```

Get real-time data for the last 120 seconds

Get data for the 120 seconds preceding the latest timestamp available for a service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: session_or_token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MetricsStatsRealtimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string

try {
    $apiInstance->getStatsLast120Seconds($service_id);
} catch (Exception $e) {
    echo 'Exception when calling MetricsStatsRealtimeApi->getStatsLast120Seconds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[session_or_token](../../README.md#session_or_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStatsLast120SecondsLimitEntries()`

```php
getStatsLast120SecondsLimitEntries($service_id, $max_entries)
```

Get a limited number of real-time data entries

Get data for the 120 seconds preceding the latest timestamp available for a service, up to a maximum of `max_entries` entries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: session_or_token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MetricsStatsRealtimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$max_entries = 1; // int | Maximum number of results to show.

try {
    $apiInstance->getStatsLast120SecondsLimitEntries($service_id, $max_entries);
} catch (Exception $e) {
    echo 'Exception when calling MetricsStatsRealtimeApi->getStatsLast120SecondsLimitEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **max_entries** | **int**| Maximum number of results to show. |

### Return type

void (empty response body)

### Authorization

[session_or_token](../../README.md#session_or_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStatsLastSecond()`

```php
getStatsLastSecond($service_id, $timestamp_in_seconds)
```

Get real-time data for the last second

Get real-time data for the last second. For the first request, the timestamp can be `0`. The response will then return a new timestamp field, which should be used for the next request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: session_or_token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MetricsStatsRealtimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$timestamp_in_seconds = 1608560817; // int | Timestamp in seconds (Unix epoch time).

try {
    $apiInstance->getStatsLastSecond($service_id, $timestamp_in_seconds);
} catch (Exception $e) {
    echo 'Exception when calling MetricsStatsRealtimeApi->getStatsLastSecond: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **timestamp_in_seconds** | **int**| Timestamp in seconds (Unix epoch time). |

### Return type

void (empty response body)

### Authorization

[session_or_token](../../README.md#session_or_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
