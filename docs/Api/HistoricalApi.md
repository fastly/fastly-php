# Fastly\Api\HistoricalApi


```php
$apiInstance = new Fastly\Api\HistoricalApi(
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
getHistStats($options): \Fastly\Model\HistoricalStatsByServiceResponse // Get historical stats
```

Fetches historical stats for each of your Fastly services and groups the results by service ID.

### Example
```php
    $options['from'] = 2020-04-09T18:14:30Z; // string | Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as 'yesterday', or 'two weeks ago'. Default varies based on the value of `by`.
$options['to'] = 2020-04-09T18:14:30Z; // string | Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as `from`.
$options['by'] = day; // string | Duration of sample windows. One of:   * `hour` - Group data by hour.   * `minute` - Group data by minute.   * `day` - Group data by day.
$options['region'] = usa; // string | Limit query to a specific geographic region. One of:   * `usa` - North America.   * `europe` - Europe.   * `anzac` - Australia and New Zealand.   * `asia` - Asia.   * `asia_india` - India.   * `asia_southkorea` - South Korea.   * `africa_std` - Africa.   * `southamerica_std` - South America.

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
**from** | **string** | Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of `by`. | [optional]
**to** | **string** | Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as `from`. | [optional] [defaults to 'now']
**by** | **string** | Duration of sample windows. One of:   * `hour` - Group data by hour.   * `minute` - Group data by minute.   * `day` - Group data by day. | [optional] [one of: 'hour', 'minute', 'day'] [defaults to 'day']
**region** | **string** | Limit query to a specific geographic region. One of:   * `usa` - North America.   * `europe` - Europe.   * `anzac` - Australia and New Zealand.   * `asia` - Asia.   * `asia_india` - India.   * `asia_southkorea` - South Korea.   * `africa_std` - Africa.   * `southamerica_std` - South America. | [optional] [one of: 'usa', 'europe', 'asia', 'asia_india', 'asia_southkorea', 'africa_std', 'southamerica_std']

### Return type

[**\Fastly\Model\HistoricalStatsByServiceResponse**](../Model/HistoricalStatsByServiceResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getHistStatsAggregated()`

```php
getHistStatsAggregated($options): \Fastly\Model\HistoricalStatsAggregatedResponse // Get aggregated historical stats
```

Fetches historical stats information aggregated across all of your Fastly services.

### Example
```php
    $options['from'] = 2020-04-09T18:14:30Z; // string | Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as 'yesterday', or 'two weeks ago'. Default varies based on the value of `by`.
$options['to'] = 2020-04-09T18:14:30Z; // string | Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as `from`.
$options['by'] = day; // string | Duration of sample windows. One of:   * `hour` - Group data by hour.   * `minute` - Group data by minute.   * `day` - Group data by day.
$options['region'] = usa; // string | Limit query to a specific geographic region. One of:   * `usa` - North America.   * `europe` - Europe.   * `anzac` - Australia and New Zealand.   * `asia` - Asia.   * `asia_india` - India.   * `asia_southkorea` - South Korea.   * `africa_std` - Africa.   * `southamerica_std` - South America.

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
**from** | **string** | Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of `by`. | [optional]
**to** | **string** | Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as `from`. | [optional] [defaults to 'now']
**by** | **string** | Duration of sample windows. One of:   * `hour` - Group data by hour.   * `minute` - Group data by minute.   * `day` - Group data by day. | [optional] [one of: 'hour', 'minute', 'day'] [defaults to 'day']
**region** | **string** | Limit query to a specific geographic region. One of:   * `usa` - North America.   * `europe` - Europe.   * `anzac` - Australia and New Zealand.   * `asia` - Asia.   * `asia_india` - India.   * `asia_southkorea` - South Korea.   * `africa_std` - Africa.   * `southamerica_std` - South America. | [optional] [one of: 'usa', 'europe', 'asia', 'asia_india', 'asia_southkorea', 'africa_std', 'southamerica_std']

### Return type

[**\Fastly\Model\HistoricalStatsAggregatedResponse**](../Model/HistoricalStatsAggregatedResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getHistStatsField()`

```php
getHistStatsField($options): \Fastly\Model\HistoricalStatsByServiceResponse // Get historical stats for a single field
```

Fetches the specified field from the historical stats for each of your services and groups the results by service ID.

### Example
```php
    $options['field'] = hit_ratio; // string | Name of the stats field.
$options['from'] = 2020-04-09T18:14:30Z; // string | Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as 'yesterday', or 'two weeks ago'. Default varies based on the value of `by`.
$options['to'] = 2020-04-09T18:14:30Z; // string | Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as `from`.
$options['by'] = day; // string | Duration of sample windows. One of:   * `hour` - Group data by hour.   * `minute` - Group data by minute.   * `day` - Group data by day.
$options['region'] = usa; // string | Limit query to a specific geographic region. One of:   * `usa` - North America.   * `europe` - Europe.   * `anzac` - Australia and New Zealand.   * `asia` - Asia.   * `asia_india` - India.   * `asia_southkorea` - South Korea.   * `africa_std` - Africa.   * `southamerica_std` - South America.

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
**from** | **string** | Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of `by`. | [optional]
**to** | **string** | Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as `from`. | [optional] [defaults to 'now']
**by** | **string** | Duration of sample windows. One of:   * `hour` - Group data by hour.   * `minute` - Group data by minute.   * `day` - Group data by day. | [optional] [one of: 'hour', 'minute', 'day'] [defaults to 'day']
**region** | **string** | Limit query to a specific geographic region. One of:   * `usa` - North America.   * `europe` - Europe.   * `anzac` - Australia and New Zealand.   * `asia` - Asia.   * `asia_india` - India.   * `asia_southkorea` - South Korea.   * `africa_std` - Africa.   * `southamerica_std` - South America. | [optional] [one of: 'usa', 'europe', 'asia', 'asia_india', 'asia_southkorea', 'africa_std', 'southamerica_std']

### Return type

[**\Fastly\Model\HistoricalStatsByServiceResponse**](../Model/HistoricalStatsByServiceResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getHistStatsService()`

```php
getHistStatsService($options): \Fastly\Model\HistoricalStatsAggregatedResponse // Get historical stats for a single service
```

Fetches historical stats for a given service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['from'] = 2020-04-09T18:14:30Z; // string | Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as 'yesterday', or 'two weeks ago'. Default varies based on the value of `by`.
$options['to'] = 2020-04-09T18:14:30Z; // string | Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as `from`.
$options['by'] = day; // string | Duration of sample windows. One of:   * `hour` - Group data by hour.   * `minute` - Group data by minute.   * `day` - Group data by day.
$options['region'] = usa; // string | Limit query to a specific geographic region. One of:   * `usa` - North America.   * `europe` - Europe.   * `anzac` - Australia and New Zealand.   * `asia` - Asia.   * `asia_india` - India.   * `asia_southkorea` - South Korea.   * `africa_std` - Africa.   * `southamerica_std` - South America.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**from** | **string** | Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of `by`. | [optional]
**to** | **string** | Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as `from`. | [optional] [defaults to 'now']
**by** | **string** | Duration of sample windows. One of:   * `hour` - Group data by hour.   * `minute` - Group data by minute.   * `day` - Group data by day. | [optional] [one of: 'hour', 'minute', 'day'] [defaults to 'day']
**region** | **string** | Limit query to a specific geographic region. One of:   * `usa` - North America.   * `europe` - Europe.   * `anzac` - Australia and New Zealand.   * `asia` - Asia.   * `asia_india` - India.   * `asia_southkorea` - South Korea.   * `africa_std` - Africa.   * `southamerica_std` - South America. | [optional] [one of: 'usa', 'europe', 'asia', 'asia_india', 'asia_southkorea', 'africa_std', 'southamerica_std']

### Return type

[**\Fastly\Model\HistoricalStatsAggregatedResponse**](../Model/HistoricalStatsAggregatedResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getHistStatsServiceField()`

```php
getHistStatsServiceField($options): \Fastly\Model\HistoricalStatsAggregatedResponse // Get historical stats for a single service/field combination
```

Fetches the specified field from the historical stats for a given service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['field'] = hit_ratio; // string | Name of the stats field.
$options['from'] = 2020-04-09T18:14:30Z; // string | Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as 'yesterday', or 'two weeks ago'. Default varies based on the value of `by`.
$options['to'] = 2020-04-09T18:14:30Z; // string | Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as `from`.
$options['by'] = day; // string | Duration of sample windows. One of:   * `hour` - Group data by hour.   * `minute` - Group data by minute.   * `day` - Group data by day.
$options['region'] = usa; // string | Limit query to a specific geographic region. One of:   * `usa` - North America.   * `europe` - Europe.   * `anzac` - Australia and New Zealand.   * `asia` - Asia.   * `asia_india` - India.   * `asia_southkorea` - South Korea.   * `africa_std` - Africa.   * `southamerica_std` - South America.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**field** | **string** | Name of the stats field. |
**from** | **string** | Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of `by`. | [optional]
**to** | **string** | Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as `from`. | [optional] [defaults to 'now']
**by** | **string** | Duration of sample windows. One of:   * `hour` - Group data by hour.   * `minute` - Group data by minute.   * `day` - Group data by day. | [optional] [one of: 'hour', 'minute', 'day'] [defaults to 'day']
**region** | **string** | Limit query to a specific geographic region. One of:   * `usa` - North America.   * `europe` - Europe.   * `anzac` - Australia and New Zealand.   * `asia` - Asia.   * `asia_india` - India.   * `asia_southkorea` - South Korea.   * `africa_std` - Africa.   * `southamerica_std` - South America. | [optional] [one of: 'usa', 'europe', 'asia', 'asia_india', 'asia_southkorea', 'africa_std', 'southamerica_std']

### Return type

[**\Fastly\Model\HistoricalStatsAggregatedResponse**](../Model/HistoricalStatsAggregatedResponse.md)

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

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\HistoricalRegionsResponse**](../Model/HistoricalRegionsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getUsage()`

```php
getUsage($options): \Fastly\Model\HistoricalUsageAggregatedResponse // Get usage statistics
```

Returns usage information aggregated across all Fastly services and grouped by region. To aggregate across all Fastly services by time period, see [`/stats/aggregate`](#get-hist-stats-aggregated).

### Example
```php
    $options['from'] = 2020-04-09T18:14:30Z; // string | Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as 'yesterday', or 'two weeks ago'. Default varies based on the value of `by`.
$options['to'] = 2020-04-09T18:14:30Z; // string | Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as `from`.

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
**from** | **string** | Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of `by`. | [optional]
**to** | **string** | Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as `from`. | [optional] [defaults to 'now']

### Return type

[**\Fastly\Model\HistoricalUsageAggregatedResponse**](../Model/HistoricalUsageAggregatedResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getUsageMonth()`

```php
getUsageMonth($options): \Fastly\Model\HistoricalUsageMonthResponse // Get month-to-date usage statistics
```

Returns month-to-date usage details for a given month and year. Usage details are aggregated by service and across all Fastly services, and then grouped by region. This endpoint does not use the `from` or `to` fields for selecting the date for which data is requested. Instead, it uses `month` and `year` integer fields. Both fields are optional and default to the current month and year respectively. When set, an optional `billable_units` field will convert bandwidth to GB and divide requests by 10,000.

### Example
```php
    $options['year'] = 2020; // string | 4-digit year.
$options['month'] = 05; // string | 2-digit month.
$options['billable_units'] = true; // bool | If `true`, return results as billable units.

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
**billable_units** | **bool** | If `true`, return results as billable units. | [optional]

### Return type

[**\Fastly\Model\HistoricalUsageMonthResponse**](../Model/HistoricalUsageMonthResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getUsageService()`

```php
getUsageService($options): \Fastly\Model\HistoricalUsageServiceResponse // Get usage statistics per service
```

Returns usage information aggregated by service and grouped by service and region. For service stats by time period, see [`/stats`](#get-hist-stats) and [`/stats/field/:field`](#get-hist-stats-field).

### Example
```php
    $options['from'] = 2020-04-09T18:14:30Z; // string | Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as 'yesterday', or 'two weeks ago'. Default varies based on the value of `by`.
$options['to'] = 2020-04-09T18:14:30Z; // string | Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as `from`.

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
**from** | **string** | Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of `by`. | [optional]
**to** | **string** | Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as `from`. | [optional] [defaults to 'now']

### Return type

[**\Fastly\Model\HistoricalUsageServiceResponse**](../Model/HistoricalUsageServiceResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
