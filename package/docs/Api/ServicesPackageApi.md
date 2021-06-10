# OpenAPI\Client\ServicesPackageApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPackage()**](ServicesPackageApi.md#getPackage) | **GET** /service/{service_id}/version/{version_id}/package | Get details of the service&#39;s Compute@Edge package.
[**putPackage()**](ServicesPackageApi.md#putPackage) | **PUT** /service/{service_id}/version/{version_id}/package | Upload a Compute@Edge package.


## `getPackage()`

```php
getPackage($service_id, $version_id): \OpenAPI\Client\Model\InlineResponse200
```

Get details of the service's Compute@Edge package.

List detailed information about the Compute@Edge package for the specified service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServicesPackageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int

try {
    $result = $apiInstance->getPackage($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesPackageApi->getPackage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putPackage()`

```php
putPackage($service_id, $version_id, $expect, $package): \OpenAPI\Client\Model\InlineResponse200
```

Upload a Compute@Edge package.

Upload a Compute@Edge package associated with the specified service version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServicesPackageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$expect = 100-continue; // string | We recommend using the Expect header because it may identify issues with the request based upon the headers alone instead of requiring you to wait until the entire binary package upload has completed.
$package = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->putPackage($service_id, $version_id, $expect, $package);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesPackageApi->putPackage: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
