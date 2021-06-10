# OpenAPI\Client\UtilsPublicIpListApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listFastlyIps()**](UtilsPublicIpListApi.md#listFastlyIps) | **GET** /public-ip-list | List Fastly&#39;s public IPs


## `listFastlyIps()`

```php
listFastlyIps()
```

List Fastly's public IPs

List the public IP addresses for the Fastly network.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UtilsPublicIpListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->listFastlyIps();
} catch (Exception $e) {
    echo 'Exception when calling UtilsPublicIpListApi->listFastlyIps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
