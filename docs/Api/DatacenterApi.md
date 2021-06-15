# Fastly\Api\DatacenterApi


```php
$apiInstance = new Fastly\Api\DatacenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | HTTP request | Description
------------- | ------------- | -------------
[**listDatacenters()**](DatacenterApi.md#listDatacenters) | **GET** /datacenters | List Fastly datacenters


## `listDatacenters()`

```php
listDatacenters($options): \Fastly\Model\Datacenter[] // List Fastly datacenters
```

Get a list of all Fastly datacenters (POPs).

### Example
```php
try {
    $result = $apiInstance->listDatacenters($options);
} catch (Exception $e) {
    echo 'Exception when calling DatacenterApi->listDatacenters: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameter.

### Return type

[**\Fastly\Model\Datacenter[]**](../Model/Datacenter.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
