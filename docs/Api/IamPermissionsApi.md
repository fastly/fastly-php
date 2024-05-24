# Fastly\Api\IamPermissionsApi


```php
$apiInstance = new Fastly\Api\IamPermissionsApi(
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
[**listPermissions()**](IamPermissionsApi.md#listPermissions) | **GET** /permissions | List permissions


## `listPermissions()`

```php
listPermissions($options): object // List permissions
```

List all permissions.

### Example
```php
    
try {
    $result = $apiInstance->listPermissions($options);
} catch (Exception $e) {
    echo 'Exception when calling IamPermissionsApi->listPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
