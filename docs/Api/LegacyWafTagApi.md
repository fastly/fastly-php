# Fastly\Api\LegacyWafTagApi


```php
$apiInstance = new Fastly\Api\LegacyWafTagApi(
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
[**listLegacyWafTags()**](LegacyWafTagApi.md#listLegacyWafTags) | **GET** /wafs/tags | List WAF tags


## `listLegacyWafTags()`

```php
listLegacyWafTags($options): object // List WAF tags
```

List all tags.

### Example
```php
    $options['filter_name'] = 'filter_name_example'; // string | Limit the returned tags to a specific name.
$options['page_number'] = 1; // int | Current page.
$options['page_size'] = 20; // int | Number of records per page.
$options['include'] = rules; // string | Include relationships. Optional, comma separated values. Permitted values: `rules`.

try {
    $result = $apiInstance->listLegacyWafTags($options);
} catch (Exception $e) {
    echo 'Exception when calling LegacyWafTagApi->listLegacyWafTags: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**filter_name** | **string** | Limit the returned tags to a specific name. | [optional]
**page_number** | **int** | Current page. | [optional]
**page_size** | **int** | Number of records per page. | [optional] [defaults to 20]
**include** | **string** | Include relationships. Optional, comma separated values. Permitted values: `rules`. | [optional]

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
