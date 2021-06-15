# OpenAPI\Client\OriginInsightsApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOriginInsightsLast120Seconds()**](OriginInsightsApi.md#getOriginInsightsLast120Seconds) | **GET** /v1/channel/{service_id}/ts/h?kind&#x3D;origin_insights | Get real-time origin data for the last 120 seconds
[**getOriginInsightsLastMaxEntries()**](OriginInsightsApi.md#getOriginInsightsLastMaxEntries) | **GET** /v1/channel/{service_id}/ts/h/limit/{max_entries}?kind&#x3D;origin_insights | Get a limited number of real-time origin data entries
[**getOriginInsightsLastSecond()**](OriginInsightsApi.md#getOriginInsightsLastSecond) | **GET** /v1/channel/{service_id}/ts/{start_timestamp}?kind&#x3D;origin_insights | Get real-time origin data for the last second


## `getOriginInsightsLast120Seconds()`

```php
getOriginInsightsLast120Seconds($service_id)
```

Get real-time origin data for the last 120 seconds

Get data for the 120 seconds preceding the latest timestamp available for a service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OriginInsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string

try {
    $apiInstance->getOriginInsightsLast120Seconds($service_id);
} catch (Exception $e) {
    echo 'Exception when calling OriginInsightsApi->getOriginInsightsLast120Seconds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOriginInsightsLastMaxEntries()`

```php
getOriginInsightsLastMaxEntries($service_id, $max_entries)
```

Get a limited number of real-time origin data entries

Get data for the `max_entries` seconds preceding the latest timestamp available for a service, up to a maximum of 120 entries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OriginInsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$max_entries = 1; // int | Maximum number of results to show.

try {
    $apiInstance->getOriginInsightsLastMaxEntries($service_id, $max_entries);
} catch (Exception $e) {
    echo 'Exception when calling OriginInsightsApi->getOriginInsightsLastMaxEntries: ', $e->getMessage(), PHP_EOL;
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

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOriginInsightsLastSecond()`

```php
getOriginInsightsLastSecond($service_id, $start_timestamp)
```

Get real-time origin data for the last second

Get real-time origin data beginning at the specified reporting period. Specify `0` to get a single entry for the last complete second. The `Timestamp` field included in the response provides the time index of the latest entry in the dataset and can be provided as the `start_timestamp` of the next request for a seamless continuation of the data set from one request to the next. Due to processing latency, the earliest entry in the response dataset may be earlier than `start_timestamp` by the value of `AggregateDelay`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OriginInsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$start_timestamp = 56; // int | Timestamp in seconds (Unix epoch time).

try {
    $apiInstance->getOriginInsightsLastSecond($service_id, $start_timestamp);
} catch (Exception $e) {
    echo 'Exception when calling OriginInsightsApi->getOriginInsightsLastSecond: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **start_timestamp** | **int**| Timestamp in seconds (Unix epoch time). |

### Return type

void (empty response body)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
