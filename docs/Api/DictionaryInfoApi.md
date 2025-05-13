# Fastly\Api\DictionaryInfoApi


```php
$apiInstance = new Fastly\Api\DictionaryInfoApi(
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
[**getDictionaryInfo()**](DictionaryInfoApi.md#getDictionaryInfo) | **GET** /service/{service_id}/version/{version_id}/dictionary/{dictionary_id}/info | Get dictionary metadata


## `getDictionaryInfo()`

```php
getDictionaryInfo($options): \Fastly\Model\DictionaryInfoResponse // Get dictionary metadata
```

Retrieve metadata for a single dictionary by ID for a version and service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['dictionary_id'] = 'dictionary_id_example'; // string | Alphanumeric string identifying a Dictionary.

try {
    $result = $apiInstance->getDictionaryInfo($options);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryInfoApi->getDictionaryInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**dictionary_id** | **string** | Alphanumeric string identifying a Dictionary. |

### Return type

[**\Fastly\Model\DictionaryInfoResponse**](../Model/DictionaryInfoResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
