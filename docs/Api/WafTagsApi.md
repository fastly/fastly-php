# Fastly\Api\WafTagsApi


```php
$apiInstance = new Fastly\Api\WafTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**listWafTags()**](WafTagsApi.md#listWafTags) | **GET** /waf/tags | List tags


## `listWafTags()`

```php
listWafTags($options): \Fastly\Model\WafTagsResponse // List tags
```

List all tags.

### Example
```php
try {
    $result = $apiInstance->listWafTags($options);
} catch (Exception $e) {
    echo 'Exception when calling WafTagsApi->listWafTags: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**filter_name** | **string** | Limit the returned tags to a specific name. | [optional]
**page_number** | **int** | Current page. | [optional]
**page_size** | **int** | Number of records per page. | [optional] [default to 20]
**include** | **string** | Include relationships. Optional. | [optional] [default to &#39;waf_rules&#39;]

### Return type

[**\Fastly\Model\WafTagsResponse**](../Model/WafTagsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
