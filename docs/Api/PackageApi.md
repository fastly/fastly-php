# OpenAPI\Client\PackageApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPackage()**](PackageApi.md#getPackage) | **GET** /service/{service_id}/version/{version_id}/package | Get details of the service&#39;s Compute@Edge package.
[**putPackage()**](PackageApi.md#putPackage) | **PUT** /service/{service_id}/version/{version_id}/package | Upload a Compute@Edge package.


## `getPackage()`

```php
getPackage($service_id, $version_id): \OpenAPI\Client\Model\ModelPackage
```

Get details of the service's Compute@Edge package.

List detailed information about the Compute@Edge package for the specified service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PackageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int

try {
    $result = $apiInstance->getPackage($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackageApi->getPackage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ModelPackage**](../Model/ModelPackage.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putPackage()`

```php
putPackage($service_id, $version_id, $expect, $package): \OpenAPI\Client\Model\ModelPackage
```

Upload a Compute@Edge package.

Upload a Compute@Edge package associated with the specified service version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PackageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$expect = 100-continue; // string | We recommend using the Expect header because it may identify issues with the request based upon the headers alone instead of requiring you to wait until the entire binary package upload has completed.
$package = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->putPackage($service_id, $version_id, $expect, $package);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackageApi->putPackage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **expect** | **string**| We recommend using the Expect header because it may identify issues with the request based upon the headers alone instead of requiring you to wait until the entire binary package upload has completed. | [optional]
 **package** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ModelPackage**](../Model/ModelPackage.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
