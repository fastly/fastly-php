# Fastly\Api\PackageApi


```php
$apiInstance = new Fastly\Api\PackageApi(
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
[**getPackage()**](PackageApi.md#getPackage) | **GET** /service/{service_id}/version/{version_id}/package | Get details of the service&#39;s Compute package.
[**putPackage()**](PackageApi.md#putPackage) | **PUT** /service/{service_id}/version/{version_id}/package | Upload a Compute package.


## `getPackage()`

```php
getPackage($options): \Fastly\Model\PackageResponse // Get details of the service's Compute package.
```

List detailed information about the Compute package for the specified service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

try {
    $result = $apiInstance->getPackage($options);
} catch (Exception $e) {
    echo 'Exception when calling PackageApi->getPackage: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\PackageResponse**](../Model/PackageResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `putPackage()`

```php
putPackage($options): \Fastly\Model\PackageResponse // Upload a Compute package.
```

Upload a Compute package associated with the specified service version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['expect'] = 100-continue; // string | We recommend using the Expect header because it may identify issues with the request based upon the headers alone instead of requiring you to wait until the entire binary package upload has completed.
$options['package'] = "/path/to/file.txt"; // \SplFileObject | The content of the Wasm binary package.

try {
    $result = $apiInstance->putPackage($options);
} catch (Exception $e) {
    echo 'Exception when calling PackageApi->putPackage: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**expect** | **string** | We recommend using the Expect header because it may identify issues with the request based upon the headers alone instead of requiring you to wait until the entire binary package upload has completed. | [optional]
**package** | **\SplFileObject****\SplFileObject** | The content of the Wasm binary package. | [optional]

### Return type

[**\Fastly\Model\PackageResponse**](../Model/PackageResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
