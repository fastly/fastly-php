# OpenAPI\Client\VclDiffApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**vclDiffServiceVersions()**](VclDiffApi.md#vclDiffServiceVersions) | **GET** /service/{service_id}/vcl/diff/from/{from_version_id}/to/{to_version_id} | Get a comparison of the VCL changes between two service versions


## `vclDiffServiceVersions()`

```php
vclDiffServiceVersions($service_id, $from_version_id, $to_version_id, $format)
```

Get a comparison of the VCL changes between two service versions

Get a comparison of the VCL changes between two service versions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclDiffApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$from_version_id = 1; // int | The version number of the service to which changes in the generated VCL are being compared. Can either be a positive number from 1 to your maximum version or a negative number from -1 down (-1 is latest version etc).
$to_version_id = 2; // int | The version number of the service from which changes in the generated VCL are being compared. Uses same numbering scheme as `from`.
$format = 'text'; // string | Optional method to format the diff field.

try {
    $apiInstance->vclDiffServiceVersions($service_id, $from_version_id, $to_version_id, $format);
} catch (Exception $e) {
    echo 'Exception when calling VclDiffApi->vclDiffServiceVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **from_version_id** | **int**| The version number of the service to which changes in the generated VCL are being compared. Can either be a positive number from 1 to your maximum version or a negative number from -1 down (-1 is latest version etc). |
 **to_version_id** | **int**| The version number of the service from which changes in the generated VCL are being compared. Uses same numbering scheme as &#x60;from&#x60;. |
 **format** | **string**| Optional method to format the diff field. | [optional] [default to &#39;text&#39;]

### Return type

void (empty response body)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
