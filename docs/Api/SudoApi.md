# Fastly\Api\SudoApi


```php
$apiInstance = new Fastly\Api\SudoApi(
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
[**requestSudoAccess()**](SudoApi.md#requestSudoAccess) | **POST** /sudo | Request Sudo access


## `requestSudoAccess()`

```php
requestSudoAccess($options): \Fastly\Model\SudoResponse // Request Sudo access
```

Re-authenticate to allow the provided user to obtain sudo access.

### Example
```php
    $options['sudo_request'] = new \Fastly\Model\SudoRequest(); // \Fastly\Model\SudoRequest

try {
    $result = $apiInstance->requestSudoAccess($options);
} catch (Exception $e) {
    echo 'Exception when calling SudoApi->requestSudoAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**sudo_request** | [**\Fastly\Model\SudoRequest**](../Model/SudoRequest.md) |  | [optional]

### Return type

[**\Fastly\Model\SudoResponse**](../Model/SudoResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
