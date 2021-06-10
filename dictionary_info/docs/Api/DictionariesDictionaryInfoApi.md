# OpenAPI\Client\DictionariesDictionaryInfoApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDictionaryInfo()**](DictionariesDictionaryInfoApi.md#getDictionaryInfo) | **GET** /service/{service_id}/version/{version_id}/dictionary/{dictionary_id}/info | Get edge dictionary metadata


## `getDictionaryInfo()`

```php
getDictionaryInfo($service_id, $version_id, $dictionary_id): \OpenAPI\Client\Model\InlineResponse200
```

Get edge dictionary metadata

Retrieve metadata for a single dictionary by ID for a version and service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DictionariesDictionaryInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$dictionary_id = 3vjTN8v1O7nOAY7aNDGOL; // string

try {
    $result = $apiInstance->getDictionaryInfo($service_id, $version_id, $dictionary_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionariesDictionaryInfoApi->getDictionaryInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **dictionary_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[token_engineer](../../README.md#token_engineer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
