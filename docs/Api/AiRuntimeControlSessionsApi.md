# Fastly\Api\AiRuntimeControlSessionsApi


```php
$apiInstance = new Fastly\Api\AiRuntimeControlSessionsApi(
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
[**arcGetSessionLogs()**](AiRuntimeControlSessionsApi.md#arcGetSessionLogs) | **GET** /ai-runtime-control/v1/sessions | Get session logs


## `arcGetSessionLogs()`

```php
arcGetSessionLogs($options): \Fastly\Model\ArcSessionsResponse // Get session logs
```

Returns session logs, including request and response data and metadata, for debugging and audit purposes.

### Example
```php
    $options['key'] = 7fVVQb1nZaJgnzCn4B4v3B; // string | Filter results to a specific virtual key ID.
$options['provider'] = pTfnUUBcU1yv8SoRJn5PZ2; // string | Filter results by AI provider connection ID.
$options['model'] = claude-sonnet-4-20250514; // string | Filter results by AI model identifier.
$options['from'] = 2026-09-01T00:00Z; // \DateTime | The start of the time range, in RFC 3339 format.
$options['to'] = 2026-09-22T00:00Z; // \DateTime | The end of the time range, in RFC 3339 format. Defaults to `now`.
$options['cursor'] = MTAwOjA; // string | Cursor for pagination. Use the `next_cursor` value from a previous response to request the next page of results, or the `prev_cursor` value to request the previous page.
$options['limit'] = 100; // int | Limit how many results are returned.
$options['sort'] = 'created_at'; // string | Sort field. Prefix with `-` for descending order (e.g., `sort=-created_at`).

try {
    $result = $apiInstance->arcGetSessionLogs($options);
} catch (Exception $e) {
    echo 'Exception when calling AiRuntimeControlSessionsApi->arcGetSessionLogs: ', $e->getMessage(), PHP_EOL;
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
**to** | **\DateTime** | The end of the time range, in RFC 3339 format. Defaults to `now`. | [optional]
**cursor** | **string** | Cursor for pagination. Use the `next_cursor` value from a previous response to request the next page of results, or the `prev_cursor` value to request the previous page. | [optional]
**limit** | **int** | Limit how many results are returned. | [optional] [defaults to 100]
**sort** | **string** | Sort field. Prefix with `-` for descending order (e.g., `sort&#x3D;-created_at`). | [optional] [one of: 'created_at', '-created_at'] [defaults to 'created_at']

### Return type

[**\Fastly\Model\ArcSessionsResponse**](../Model/ArcSessionsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
