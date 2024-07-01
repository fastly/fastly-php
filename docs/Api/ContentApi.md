# Fastly\Api\ContentApi


```php
$apiInstance = new Fastly\Api\ContentApi(
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
[**contentCheck()**](ContentApi.md#contentCheck) | **GET** /content/edge_check | Check status of content in each POP&#39;s cache


## `contentCheck()`

```php
contentCheck($options): \Fastly\Model\Content[] // Check status of content in each POP's cache
```

Retrieve headers and MD5 hash of the content for a particular URL from each Fastly edge server. This API is limited to 200 requests per hour. If the content takes too long to download, the hash will be set to `error-timeout-$pop`. If the response is too large, it will be set to `warning-too-large-$pop`.

### Example
```php
    $options['url'] = https://www.example.com/foo/bar; // string | Full URL (host and path) to check on all nodes. if protocol is omitted, http will be assumed.

try {
    $result = $apiInstance->contentCheck($options);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->contentCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**url** | **string** | Full URL (host and path) to check on all nodes. if protocol is omitted, http will be assumed. | [optional]

### Return type

[**\Fastly\Model\Content[]**](../Model/Content.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
