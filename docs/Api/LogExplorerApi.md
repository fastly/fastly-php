# Fastly\Api\LogExplorerApi


```php
$apiInstance = new Fastly\Api\LogExplorerApi(
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
[**getLogRecords()**](LogExplorerApi.md#getLogRecords) | **GET** /observability/log-explorer | Retrieve log records


## `getLogRecords()`

```php
getLogRecords($options): \Fastly\Model\GetLogRecordsResponse // Retrieve log records
```

Retrieves log records.

### Example
```php
    $options['service_id'] = 1jlmtMz1ncwA0KC3TBGD0X; // string
$options['start'] = 'start_example'; // string
$options['end'] = 'end_example'; // string
$options['limit'] = 3.4; // float
$options['next_cursor'] = 'next_cursor_example'; // string
$options['filter'] = 'filter_example'; // string

try {
    $result = $apiInstance->getLogRecords($options);
} catch (Exception $e) {
    echo 'Exception when calling LogExplorerApi->getLogRecords: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**start** | **string** |  |
**end** | **string** |  |
**limit** | **float** |  | [optional]
**next_cursor** | **string** |  | [optional]
**filter** | **string** |  | [optional]

### Return type

[**\Fastly\Model\GetLogRecordsResponse**](../Model/GetLogRecordsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
