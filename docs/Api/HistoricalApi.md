# Fastly\Api\HistoricalApi


```php
$apiInstance = new Fastly\Api\HistoricalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**getHistStats()**](HistoricalApi.md#getHistStats) | **GET** /stats | Get historical stats
[**getHistStatsAggregated()**](HistoricalApi.md#getHistStatsAggregated) | **GET** /stats/aggregate | Get aggregated historical stats
[**getHistStatsField()**](HistoricalApi.md#getHistStatsField) | **GET** /stats/field/{field} | Get historical stats for a single field
[**getHistStatsService()**](HistoricalApi.md#getHistStatsService) | **GET** /stats/service/{service_id} | Get historical stats for a single service
[**getHistStatsServiceField()**](HistoricalApi.md#getHistStatsServiceField) | **GET** /stats/service/{service_id}/field/{field} | Get historical stats for a single service/field combination
[**getRegions()**](HistoricalApi.md#getRegions) | **GET** /stats/regions | Get region codes
[**getUsage()**](HistoricalApi.md#getUsage) | **GET** /stats/usage | Get usage statistics
[**getUsageMonth()**](HistoricalApi.md#getUsageMonth) | **GET** /stats/usage_by_month | Get month-to-date usage statistics
[**getUsageService()**](HistoricalApi.md#getUsageService) | **GET** /stats/usage_by_service | Get usage statistics per service


## `getHistStats()`

```php
getHistStats($options): \Fastly\Model\HistoricalResponse // Get historical stats
```

Fetches historical stats for each of your Fastly services and groups the results by service ID.

### Example
```php
try {
    $result = $apiInstance->getHistStats($options);
} catch (Exception $e) {
    echo 'Exception when calling HistoricalApi->getHistStats: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**from** | **string** | Absolute, relative or epoch timestamp. Limits the results returned. | [optional]
**to** | **string** | Absolute, relative or epoch timestamp. Limits the results returned. | [optional]
**by** | **string** | Duration of sample windows. One of:    * &#x60;hour&#x60; - Group data by hour.   * &#x60;minute&#x60; - Group data by minute.   * &#x60;day&#x60; - Group data by day. | [optional] [default to &#39;day&#39;]
**region** | **string** | Limit query to a specific geographic region. One of:    * &#x60;usa&#x60; - North America.   * &#x60;europe&#x60; - Europe.   * &#x60;anzac&#x60; - Australia and New Zealand.   * &#x60;asia&#x60; - Asia.   * &#x60;asia_india&#x60; - India.   * &#x60;asia_southkorea&#x60; - South Korea ([from Aug 2, 2021](https://status.fastly.com/incidents/f83m70cqm258))   * &#x60;africa_std&#x60; - Africa.   * &#x60;southamerica_std&#x60; - South America. | [optional]

### Return type

[**\Fastly\Model\HistoricalResponse**](../Model/HistoricalResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getHistStatsAggregated()`

```php
getHistStatsAggregated($options): \Fastly\Model\HistoricalAggregateResponse // Get aggregated historical stats
```

Fetches historical stats information aggregated across all of your Fastly services.

### Example
```php
try {
    $result = $apiInstance->getHistStatsAggregated($options);
} catch (Exception $e) {
    echo 'Exception when calling HistoricalApi->getHistStatsAggregated: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**from** | **string** | Absolute, relative or epoch timestamp. Limits the results returned. | [optional]
**to** | **string** | Absolute, relative or epoch timestamp. Limits the results returned. | [optional]
**by** | **string** | Duration of sample windows. One of:    * &#x60;hour&#x60; - Group data by hour.   * &#x60;minute&#x60; - Group data by minute.   * &#x60;day&#x60; - Group data by day. | [optional] [default to &#39;day&#39;]
**region** | **string** | Limit query to a specific geographic region. One of:    * &#x60;usa&#x60; - North America.   * &#x60;europe&#x60; - Europe.   * &#x60;anzac&#x60; - Australia and New Zealand.   * &#x60;asia&#x60; - Asia.   * &#x60;asia_india&#x60; - India.   * &#x60;asia_southkorea&#x60; - South Korea ([from Aug 2, 2021](https://status.fastly.com/incidents/f83m70cqm258))   * &#x60;africa_std&#x60; - Africa.   * &#x60;southamerica_std&#x60; - South America. | [optional]

### Return type

[**\Fastly\Model\HistoricalAggregateResponse**](../Model/HistoricalAggregateResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getHistStatsField()`

```php
getHistStatsField($options): \Fastly\Model\HistoricalFieldResponse // Get historical stats for a single field
```

Fetches the specified field from the historical stats for each of your services and groups the results by service ID.

### Example
```php
try {
    $result = $apiInstance->getHistStatsField($options);
} catch (Exception $e) {
    echo 'Exception when calling HistoricalApi->getHistStatsField: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**field** | **string** | Name of the stats field. |
**from** | **string** | Absolute, relative or epoch timestamp. Limits the results returned. | [optional]
**to** | **string** | Absolute, relative or epoch timestamp. Limits the results returned. | [optional]
**by** | **string** | Duration of sample windows. One of:    * &#x60;hour&#x60; - Group data by hour.   * &#x60;minute&#x60; - Group data by minute.   * &#x60;day&#x60; - Group data by day. | [optional] [default to &#39;day&#39;]
**region** | **string** | Limit query to a specific geographic region. One of:    * &#x60;usa&#x60; - North America.   * &#x60;europe&#x60; - Europe.   * &#x60;anzac&#x60; - Australia and New Zealand.   * &#x60;asia&#x60; - Asia.   * &#x60;asia_india&#x60; - India.   * &#x60;asia_southkorea&#x60; - South Korea ([from Aug 2, 2021](https://status.fastly.com/incidents/f83m70cqm258))   * &#x60;africa_std&#x60; - Africa.   * &#x60;southamerica_std&#x60; - South America. | [optional]

### Return type

[**\Fastly\Model\HistoricalFieldResponse**](../Model/HistoricalFieldResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getHistStatsService()`

```php
getHistStatsService($options): \Fastly\Model\HistoricalAggregateResponse // Get historical stats for a single service
```

Fetches historical stats for a given service.

### Example
```php
try {
    $result = $apiInstance->getHistStatsService($options);
} catch (Exception $e) {
    echo 'Exception when calling HistoricalApi->getHistStatsService: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**from** | **string** | Absolute, relative or epoch timestamp. Limits the results returned. | [optional]
**to** | **string** | Absolute, relative or epoch timestamp. Limits the results returned. | [optional]
**by** | **string** | Duration of sample windows. One of:    * &#x60;hour&#x60; - Group data by hour.   * &#x60;minute&#x60; - Group data by minute.   * &#x60;day&#x60; - Group data by day. | [optional] [default to &#39;day&#39;]
**region** | **string** | Limit query to a specific geographic region. One of:    * &#x60;usa&#x60; - North America.   * &#x60;europe&#x60; - Europe.   * &#x60;anzac&#x60; - Australia and New Zealand.   * &#x60;asia&#x60; - Asia.   * &#x60;asia_india&#x60; - India.   * &#x60;asia_southkorea&#x60; - South Korea ([from Aug 2, 2021](https://status.fastly.com/incidents/f83m70cqm258))   * &#x60;africa_std&#x60; - Africa.   * &#x60;southamerica_std&#x60; - South America. | [optional]

### Return type

[**\Fastly\Model\HistoricalAggregateResponse**](../Model/HistoricalAggregateResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getHistStatsServiceField()`

```php
getHistStatsServiceField($options): \Fastly\Model\HistoricalFieldAggregateResponse // Get historical stats for a single service/field combination
```

Fetches the specified field from the historical stats for a given service.

### Example
```php
try {
    $result = $apiInstance->getHistStatsServiceField($options);
} catch (Exception $e) {
    echo 'Exception when calling HistoricalApi->getHistStatsServiceField: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**field** | **string** | Name of the stats field. |
**from** | **string** | Absolute, relative or epoch timestamp. Limits the results returned. | [optional]
**to** | **string** | Absolute, relative or epoch timestamp. Limits the results returned. | [optional]
**by** | **string** | Duration of sample windows. One of:    * &#x60;hour&#x60; - Group data by hour.   * &#x60;minute&#x60; - Group data by minute.   * &#x60;day&#x60; - Group data by day. | [optional] [default to &#39;day&#39;]
**region** | **string** | Limit query to a specific geographic region. One of:    * &#x60;usa&#x60; - North America.   * &#x60;europe&#x60; - Europe.   * &#x60;anzac&#x60; - Australia and New Zealand.   * &#x60;asia&#x60; - Asia.   * &#x60;asia_india&#x60; - India.   * &#x60;asia_southkorea&#x60; - South Korea ([from Aug 2, 2021](https://status.fastly.com/incidents/f83m70cqm258))   * &#x60;africa_std&#x60; - Africa.   * &#x60;southamerica_std&#x60; - South America. | [optional]

### Return type

[**\Fastly\Model\HistoricalFieldAggregateResponse**](../Model/HistoricalFieldAggregateResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getRegions()`

```php
getRegions($options): \Fastly\Model\HistoricalRegionsResponse // Get region codes
```

Fetches the list of codes for regions that are covered by the Fastly CDN service.

### Example
```php
try {
    $result = $apiInstance->getRegions($options);
} catch (Exception $e) {
    echo 'Exception when calling HistoricalApi->getRegions: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameter.

### Return type

[**\Fastly\Model\HistoricalRegionsResponse**](../Model/HistoricalRegionsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getUsage()`

```php
getUsage($options): \Fastly\Model\HistoricalUsageAggregateResponse // Get usage statistics
```

Returns usage information aggregated across all Fastly services and grouped by region.

### Example
```php
try {
    $result = $apiInstance->getUsage($options);
} catch (Exception $e) {
    echo 'Exception when calling HistoricalApi->getUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**from** | **string** | Absolute, relative or epoch timestamp. Limits the results returned. | [optional]
**to** | **string** | Absolute, relative or epoch timestamp. Limits the results returned. | [optional]
**by** | **string** | Duration of sample windows. One of:    * &#x60;hour&#x60; - Group data by hour.   * &#x60;minute&#x60; - Group data by minute.   * &#x60;day&#x60; - Group data by day. | [optional] [default to &#39;day&#39;]
**region** | **string** | Limit query to a specific geographic region. One of:    * &#x60;usa&#x60; - North America.   * &#x60;europe&#x60; - Europe.   * &#x60;anzac&#x60; - Australia and New Zealand.   * &#x60;asia&#x60; - Asia.   * &#x60;asia_india&#x60; - India.   * &#x60;asia_southkorea&#x60; - South Korea ([from Aug 2, 2021](https://status.fastly.com/incidents/f83m70cqm258))   * &#x60;africa_std&#x60; - Africa.   * &#x60;southamerica_std&#x60; - South America. | [optional]

### Return type

[**\Fastly\Model\HistoricalUsageAggregateResponse**](../Model/HistoricalUsageAggregateResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getUsageMonth()`

```php
getUsageMonth($options): \Fastly\Model\HistoricalUsageMonthResponse // Get month-to-date usage statistics
```

Returns month-to-date usage details for a given month and year. Usage details are aggregated by service and across all Fastly services, and then grouped by region. This endpoint does not use the `from` or `to` fields for selecting the date for which data is requested. Instead, it uses `month` and `year` integer fields. Both fields are optional and default to the current month and year respectively. When set, an optional `billable_units` field will convert bandwidth to GB and divide requests by 10,000.

### Example
```php
try {
    $result = $apiInstance->getUsageMonth($options);
} catch (Exception $e) {
    echo 'Exception when calling HistoricalApi->getUsageMonth: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**year** | **string** | 4-digit year. | [optional]
**month** | **string** | 2-digit month. | [optional]
**billable_units** | **bool** | If &#x60;true&#x60;, return results as billable units. | [optional]
**region** | **string** | Limit query to a specific geographic region. One of:    * &#x60;usa&#x60; - North America.   * &#x60;europe&#x60; - Europe.   * &#x60;anzac&#x60; - Australia and New Zealand.   * &#x60;asia&#x60; - Asia.   * &#x60;asia_india&#x60; - India.   * &#x60;asia_southkorea&#x60; - South Korea ([from Aug 2, 2021](https://status.fastly.com/incidents/f83m70cqm258))   * &#x60;africa_std&#x60; - Africa.   * &#x60;southamerica_std&#x60; - South America. | [optional]

### Return type

[**\Fastly\Model\HistoricalUsageMonthResponse**](../Model/HistoricalUsageMonthResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getUsageService()`

```php
getUsageService($options): \Fastly\Model\HistoricalUsageServiceResponse // Get usage statistics per service
```

Returns usage information aggregated by service and grouped by service and region.

### Example
```php
try {
    $result = $apiInstance->getUsageService($options);
} catch (Exception $e) {
    echo 'Exception when calling HistoricalApi->getUsageService: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**from** | **string** | Absolute, relative or epoch timestamp. Limits the results returned. | [optional]
**to** | **string** | Absolute, relative or epoch timestamp. Limits the results returned. | [optional]
**by** | **string** | Duration of sample windows. One of:    * &#x60;hour&#x60; - Group data by hour.   * &#x60;minute&#x60; - Group data by minute.   * &#x60;day&#x60; - Group data by day. | [optional] [default to &#39;day&#39;]
**region** | **string** | Limit query to a specific geographic region. One of:    * &#x60;usa&#x60; - North America.   * &#x60;europe&#x60; - Europe.   * &#x60;anzac&#x60; - Australia and New Zealand.   * &#x60;asia&#x60; - Asia.   * &#x60;asia_india&#x60; - India.   * &#x60;asia_southkorea&#x60; - South Korea ([from Aug 2, 2021](https://status.fastly.com/incidents/f83m70cqm258))   * &#x60;africa_std&#x60; - Africa.   * &#x60;southamerica_std&#x60; - South America. | [optional]

### Return type

[**\Fastly\Model\HistoricalUsageServiceResponse**](../Model/HistoricalUsageServiceResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
