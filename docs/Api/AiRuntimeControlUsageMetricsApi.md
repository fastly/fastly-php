# Fastly\Api\AiRuntimeControlUsageMetricsApi


```php
$apiInstance = new Fastly\Api\AiRuntimeControlUsageMetricsApi(
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
[**arcExportUsageMetrics()**](AiRuntimeControlUsageMetricsApi.md#arcExportUsageMetrics) | **GET** /ai-runtime-control/v1/usage-metrics/export | Export usage metrics
[**arcGetUsageMetrics()**](AiRuntimeControlUsageMetricsApi.md#arcGetUsageMetrics) | **GET** /ai-runtime-control/v1/usage-metrics | Get usage metrics


## `arcExportUsageMetrics()`

```php
arcExportUsageMetrics($options): \Fastly\Model\ArcUsageMetricsResponse // Export usage metrics
```

Returns usage metrics for AI Runtime Control requests. Accepts the same filter parameters as [get usage metrics](#arc-get-usage-metrics), except `sort` and `granularity`, which aren't supported here.  Set the `Accept` header to `text/csv` to receive a CSV file download instead of a JSON response. In the CSV output, the column named `time` corresponds to the `date` field in the JSON response.

### Example
```php
    $options['key'] = 7fVVQb1nZaJgnzCn4B4v3B; // string | Filter results to a specific virtual key ID.
$options['provider'] = pTfnUUBcU1yv8SoRJn5PZ2; // string | Filter results by AI provider connection ID.
$options['model'] = claude-sonnet-4-20250514; // string | Filter results by AI model identifier.
$options['from'] = 2026-09-01T00:00Z; // \DateTime | The start of the time range, in RFC 3339 format.
$options['to'] = 2026-09-22T00:00Z; // \DateTime | The end of the time range, in RFC 3339 format. Defaults to now.

try {
    $result = $apiInstance->arcExportUsageMetrics($options);
} catch (Exception $e) {
    echo 'Exception when calling AiRuntimeControlUsageMetricsApi->arcExportUsageMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**key** | **string** | Filter results to a specific virtual key ID. | [optional]
**provider** | **string** | Filter results by AI provider connection ID. | [optional]
**model** | **string** | Filter results by AI model identifier. | [optional]
**from** | **\DateTime** | The start of the time range, in RFC 3339 format. | [optional]
**to** | **\DateTime** | The end of the time range, in RFC 3339 format. Defaults to now. | [optional]

### Return type

[**\Fastly\Model\ArcUsageMetricsResponse**](../Model/ArcUsageMetricsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `arcGetUsageMetrics()`

```php
arcGetUsageMetrics($options): \Fastly\Model\ArcUsageMetricsResponse // Get usage metrics
```

Returns usage metrics for AI Runtime Control requests, including request counts, session counts, input token counts, and output token counts.

### Example
```php
    $options['key'] = 7fVVQb1nZaJgnzCn4B4v3B; // string | Filter results to a specific virtual key ID.
$options['provider'] = pTfnUUBcU1yv8SoRJn5PZ2; // string | Filter results by AI provider connection ID.
$options['model'] = claude-sonnet-4-20250514; // string | Filter results by AI model identifier.
$options['from'] = 2026-09-01T00:00Z; // \DateTime | The start of the time range, in RFC 3339 format.
$options['to'] = 2026-09-22T00:00Z; // \DateTime | The end of the time range, in RFC 3339 format. Defaults to now.
$options['granularity'] = daily; // string | The time granularity to aggregate usage by.
$options['sort'] = date; // string | Sort field. Prefix with `-` for descending order (e.g., `sort=-date`).

try {
    $result = $apiInstance->arcGetUsageMetrics($options);
} catch (Exception $e) {
    echo 'Exception when calling AiRuntimeControlUsageMetricsApi->arcGetUsageMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**key** | **string** | Filter results to a specific virtual key ID. | [optional]
**provider** | **string** | Filter results by AI provider connection ID. | [optional]
**model** | **string** | Filter results by AI model identifier. | [optional]
**from** | **\DateTime** | The start of the time range, in RFC 3339 format. | [optional]
**to** | **\DateTime** | The end of the time range, in RFC 3339 format. Defaults to now. | [optional]
**granularity** | **string** | The time granularity to aggregate usage by. | [optional] [one of: 'daily', 'hourly'] [defaults to 'daily']
**sort** | **string** | Sort field. Prefix with `-` for descending order (e.g., `sort&#x3D;-date`). | [optional] [one of: 'date', '-date'] [defaults to 'date']

### Return type

[**\Fastly\Model\ArcUsageMetricsResponse**](../Model/ArcUsageMetricsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
