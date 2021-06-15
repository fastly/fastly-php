# OpenAPI\Client\StatsApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getServiceStats()**](StatsApi.md#getServiceStats) | **GET** /service/{service_id}/stats/summary | Get stats for a service


## `getServiceStats()`

```php
getServiceStats($service_id, $month, $year, $start_time, $end_time)
```

Get stats for a service

Get the stats from a service for a block of time. This lists all stats by PoP location, starting with AMS. This call requires parameters to select block of time to query. Use either a timestamp range (using start_time and end_time) or a specified month/year combo (using month and year).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$month = 05; // string | 2-digit month.
$year = 2020; // string | 4-digit year.
$start_time = 56; // int | Epoch timestamp. Limits the results returned.
$end_time = 56; // int | Epoch timestamp. Limits the results returned.

try {
    $apiInstance->getServiceStats($service_id, $month, $year, $start_time, $end_time);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->getServiceStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **month** | **string**| 2-digit month. | [optional]
 **year** | **string**| 4-digit year. | [optional]
 **start_time** | **int**| Epoch timestamp. Limits the results returned. | [optional]
 **end_time** | **int**| Epoch timestamp. Limits the results returned. | [optional]

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
