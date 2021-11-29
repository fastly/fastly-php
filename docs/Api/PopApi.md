# Fastly\Api\PopApi


```php
$apiInstance = new Fastly\Api\PopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**listPops()**](PopApi.md#listPops) | **GET** /datacenters | List Fastly POPs


## `listPops()`

```php
listPops($options): \Fastly\Model\Pop[] // List Fastly POPs
```

Get a list of all Fastly POPs.

### Example
```php
try {
    $result = $apiInstance->listPops($options);
} catch (Exception $e) {
    echo 'Exception when calling PopApi->listPops: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\Pop[]**](../Model/Pop.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
