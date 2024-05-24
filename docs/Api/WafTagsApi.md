# Fastly\Api\WafTagsApi


```php
$apiInstance = new Fastly\Api\WafTagsApi(
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
[**listWafTags()**](WafTagsApi.md#listWafTags) | **GET** /waf/tags | List tags


## `listWafTags()`

```php
listWafTags($options): \Fastly\Model\WafTagsResponse // List tags
```

List all tags.

### Example
```php
    $options['filter_name'] = 'filter_name_example'; // string | Limit the returned tags to a specific name.
$options['page_number'] = 1; // int | Current page.
$options['page_size'] = 20; // int | Number of records per page.
$options['include'] = waf_rules; // string | Include relationships. Optional.

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
**page_size** | **int** | Number of records per page. | [optional] [defaults to 20]
**include** | **string** | Include relationships. Optional. | [optional] [one of: 'waf_rules'] [defaults to 'waf_rules']

### Return type

[**\Fastly\Model\WafTagsResponse**](../Model/WafTagsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
