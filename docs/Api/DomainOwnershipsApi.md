# Fastly\Api\DomainOwnershipsApi


```php
$apiInstance = new Fastly\Api\DomainOwnershipsApi(
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
[**listDomainOwnerships()**](DomainOwnershipsApi.md#listDomainOwnerships) | **GET** /domain-ownerships | List domain-ownerships


## `listDomainOwnerships()`

```php
listDomainOwnerships($options): \Fastly\Model\InlineResponse2002 // List domain-ownerships
```

List all domain-ownerships.

### Example
```php
    
try {
    $result = $apiInstance->listDomainOwnerships($options);
} catch (Exception $e) {
    echo 'Exception when calling DomainOwnershipsApi->listDomainOwnerships: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
