# Fastly\Api\PublicIpListApi


```php
$apiInstance = new Fastly\Api\PublicIpListApi(
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
[**listFastlyIps()**](PublicIpListApi.md#listFastlyIps) | **GET** /public-ip-list | List Fastly&#39;s public IPs


## `listFastlyIps()`

```php
listFastlyIps($options): \Fastly\Model\PublicIpList // List Fastly's public IPs
```

List the public IP addresses for the Fastly network.

### Example
```php
    
try {
    $result = $apiInstance->listFastlyIps($options);
} catch (Exception $e) {
    echo 'Exception when calling PublicIpListApi->listFastlyIps: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\PublicIpList**](../Model/PublicIpList.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
