# OpenAPI\Client\UtilsContentApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**contentCheck()**](UtilsContentApi.md#contentCheck) | **GET** /content/edge_check | Check status of content in each data center cache


## `contentCheck()`

```php
contentCheck($url)
```

Check status of content in each data center cache

Retrieve headers and MD5 hash of the content for a particular URL from each Fastly edge server. This API is limited to 200 requests per hour.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: edge_check
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UtilsContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$url = https://www.example.com/foo/bar; // string | Full URL (host and path) to check on all nodes. if protocol is omitted, http will be assumed.

try {
    $apiInstance->contentCheck($url);
} catch (Exception $e) {
    echo 'Exception when calling UtilsContentApi->contentCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **url** | **string**| Full URL (host and path) to check on all nodes. if protocol is omitted, http will be assumed. | [optional]

### Return type

void (empty response body)

### Authorization

[edge_check](../../README.md#edge_check)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
