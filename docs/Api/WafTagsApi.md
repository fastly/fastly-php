# OpenAPI\Client\WafTagsApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listWafTags()**](WafTagsApi.md#listWafTags) | **GET** /waf/tags | List tags


## `listWafTags()`

```php
listWafTags($filter_name, $page_number, $page_size, $include): object
```

List tags

List all tags.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WafTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_name = 'filter_name_example'; // string | Limit the returned tags to a specific name.
$page_number = 56; // int | Current page.
$page_size = 20; // int | Number of records per page.
$include = waf_rules; // string | Include relationships. Optional, comma-separated values. Permitted values: `waf_rules`.

try {
    $result = $apiInstance->listWafTags($filter_name, $page_number, $page_size, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WafTagsApi->listWafTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_name** | **string**| Limit the returned tags to a specific name. | [optional]
 **page_number** | **int**| Current page. | [optional]
 **page_size** | **int**| Number of records per page. | [optional] [default to 20]
 **include** | **string**| Include relationships. Optional, comma-separated values. Permitted values: &#x60;waf_rules&#x60;. | [optional]

### Return type

**object**

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
