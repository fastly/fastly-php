# OpenAPI\Client\PublicIpListApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listFastlyIps()**](PublicIpListApi.md#listFastlyIps) | **GET** /public-ip-list | List Fastly&#39;s public IPs


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


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PublicIpListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->listFastlyIps();
} catch (Exception $e) {
    echo 'Exception when calling PublicIpListApi->listFastlyIps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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
