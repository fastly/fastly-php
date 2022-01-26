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

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**getDictionaryInfo()**](DictionaryInfoApi.md#getDictionaryInfo) | **GET** /service/{service_id}/version/{version_id}/dictionary/{dictionary_id}/info | Get edge dictionary metadata


## `getDictionaryInfo()`

```php
getDictionaryInfo($options): \Fastly\Model\DictionaryInfoResponse // Get edge dictionary metadata
```

Retrieve metadata for a single dictionary by ID for a version and service.

### Example
```php
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
