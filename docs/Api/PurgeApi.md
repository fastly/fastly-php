# Fastly\Api\PurgeApi


```php
$apiInstance = new Fastly\Api\PurgeApi(
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
[**bulkPurgeTag()**](PurgeApi.md#bulkPurgeTag) | **POST** /service/{service_id}/purge | Purge multiple surrogate key tags
[**purgeAll()**](PurgeApi.md#purgeAll) | **POST** /service/{service_id}/purge_all | Purge everything from a service
[**purgeSingleUrl()**](PurgeApi.md#purgeSingleUrl) | **POST** /purge/{cached_url} | Purge a URL
[**purgeTag()**](PurgeApi.md#purgeTag) | **POST** /service/{service_id}/purge/{surrogate_key} | Purge by surrogate key tag


## `bulkPurgeTag()`

```php
bulkPurgeTag($options): array<string,string> // Purge multiple surrogate key tags
```

Instant Purge a particular service of items tagged with surrogate keys. Up to 256 surrogate keys can be purged in one batch request. As an alternative to sending the keys in a JSON object in the body of the request, this endpoint also supports listing keys in a <code>Surrogate-Key</code> request header, e.g. <code>Surrogate-Key: key_1 key_2 key_3</code>.

### Example
```php
    $options['fastly_soft_purge'] = 1; // int | If present, this header triggers the purge to be 'soft', which marks the affected object as stale rather than making it inaccessible.  Typically set to \"1\" when used, but the value is not important.
$options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['surrogate_key'] = key_1 key_2 key_3; // string | Purge multiple surrogate key tags using a request header. Not required if a JSON POST body is specified.
$options['purge_response'] = {"surrogate_keys":["key_1","key_2","key_3"]}; // \Fastly\Model\PurgeResponse

try {
    $result = $apiInstance->bulkPurgeTag($options);
} catch (Exception $e) {
    echo 'Exception when calling PurgeApi->bulkPurgeTag: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**fastly_soft_purge** | **int** | If present, this header triggers the purge to be &#39;soft&#39;, which marks the affected object as stale rather than making it inaccessible.  Typically set to \&quot;1\&quot; when used, but the value is not important. | [optional]
**service_id** | **string** | Alphanumeric string identifying the service. |
**surrogate_key** | **string** | Purge multiple surrogate key tags using a request header. Not required if a JSON POST body is specified. | [optional]
**purge_response** | [**\Fastly\Model\PurgeResponse**](../Model/PurgeResponse.md) |  | [optional]

### Return type

**array<string,string>**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `purgeAll()`

```php
purgeAll($options): \Fastly\Model\InlineResponse200 // Purge everything from a service
```

Instant Purge everything from a service.  Purge-all requests cannot be done in soft mode and will always immediately invalidate all cached content associated with the service. To do a soft-purge-all, consider applying a constant [surrogate key](https://docs.fastly.com/en/guides/getting-started-with-surrogate-keys) tag (e.g., `\"all\"`) to all objects.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $result = $apiInstance->purgeAll($options);
} catch (Exception $e) {
    echo 'Exception when calling PurgeApi->purgeAll: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `purgeSingleUrl()`

```php
purgeSingleUrl($options): \Fastly\Model\PurgeResponse // Purge a URL
```

Instant Purge an individual URL.

### Example
```php
    $options['fastly_soft_purge'] = 1; // int | If present, this header triggers the purge to be 'soft', which marks the affected object as stale rather than making it inaccessible.  Typically set to \"1\" when used, but the value is not important.
$options['cached_url'] = www.example.com/path/to/object-to-purge; // string | URL of object in cache to be purged.

try {
    $result = $apiInstance->purgeSingleUrl($options);
} catch (Exception $e) {
    echo 'Exception when calling PurgeApi->purgeSingleUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**fastly_soft_purge** | **int** | If present, this header triggers the purge to be &#39;soft&#39;, which marks the affected object as stale rather than making it inaccessible.  Typically set to \&quot;1\&quot; when used, but the value is not important. | [optional]
**cached_url** | **string** | URL of object in cache to be purged. |

### Return type

[**\Fastly\Model\PurgeResponse**](../Model/PurgeResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `purgeTag()`

```php
purgeTag($options): \Fastly\Model\PurgeResponse // Purge by surrogate key tag
```

Instant Purge a particular service of items tagged with a Surrogate Key. Only one surrogate key can be purged at a time. Multiple keys can be purged using a batch surrogate key purge request.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['surrogate_key'] = key_1; // string | Surrogate keys are used to efficiently purge content from cache. Instead of purging your entire site or individual URLs, you can tag related assets (like all images and descriptions associated with a single product) with surrogate keys, and these grouped URLs can be purged in a single request.
$options['fastly_soft_purge'] = 1; // int | If present, this header triggers the purge to be 'soft', which marks the affected object as stale rather than making it inaccessible.  Typically set to \"1\" when used, but the value is not important.

try {
    $result = $apiInstance->purgeTag($options);
} catch (Exception $e) {
    echo 'Exception when calling PurgeApi->purgeTag: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**surrogate_key** | **string** | Surrogate keys are used to efficiently purge content from cache. Instead of purging your entire site or individual URLs, you can tag related assets (like all images and descriptions associated with a single product) with surrogate keys, and these grouped URLs can be purged in a single request. |
**fastly_soft_purge** | **int** | If present, this header triggers the purge to be &#39;soft&#39;, which marks the affected object as stale rather than making it inaccessible.  Typically set to \&quot;1\&quot; when used, but the value is not important. | [optional]

### Return type

[**\Fastly\Model\PurgeResponse**](../Model/PurgeResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
