# Fastly\Api\LoggingEndpointErrorsApi


```php
$apiInstance = new Fastly\Api\LoggingEndpointErrorsApi(
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
[**getLogEndpointErrors()**](LoggingEndpointErrorsApi.md#getLogEndpointErrors) | **GET** /observability/service/{service_id}/logging/errors | Stream Log Endpoint Errors


## `getLogEndpointErrors()`

```php
getLogEndpointErrors($options): string // Stream Log Endpoint Errors
```

Provides a near real-time stream of log errors through a hybrid short-polling model. A client should make an initial request using the `from` parameter to specify a start time. The `to` parameter should be used alongside the `from` parameter since the default bucket is 10 seconds.  For pagination, use the URLs provided in the Link header of the response. These contain updated `from` timestamps for retrieving the next or previous page of logs.  Defaults to `application/x-ndjson` format. Use `Accept: application/json` header to request standard JSON array format instead.

### Example
```php
    $options['service_id'] = SU1Z0isxPaozGVKXdv0eY; // string
$options['from'] = 1756123200; // int
$options['to'] = 1756209600; // int
$options['filter_endpoint'] = MyS3,BigQuery; // string

try {
    $result = $apiInstance->getLogEndpointErrors($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingEndpointErrorsApi->getLogEndpointErrors: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**from** | **int** |  | [optional]
**to** | **int** |  | [optional]
**filter_endpoint** | **string** |  | [optional]

### Return type

**string**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
