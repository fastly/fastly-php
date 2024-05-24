# Fastly\Api\TlsCsrsApi


```php
$apiInstance = new Fastly\Api\TlsCsrsApi(
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
[**createCsr()**](TlsCsrsApi.md#createCsr) | **POST** /tls/certificate_signing_requests | Create CSR


## `createCsr()`

```php
createCsr($options): \Fastly\Model\TlsCsrResponse // Create CSR
```

Creates a certificate signing request (CSR).

### Example
```php
    $options['tls_csr'] = {"data":{"type":"csr","attributes":{"sans":["DOMAIN_NAME"],"common_name":"DOMAIN_NAME","key_type":"RSA2048","country":"US","state":"California","city":"San Francisco","organization":"Fastly, Inc.","organizational_unit":"Engineering"},"relationships":{"tls_private_key":{"data":{"type":"tls_private_key","id":"KeYguUGZzb2W9Euo4moOR"}}}}}; // \Fastly\Model\TlsCsr

try {
    $result = $apiInstance->createCsr($options);
} catch (Exception $e) {
    echo 'Exception when calling TlsCsrsApi->createCsr: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**tls_csr** | [**\Fastly\Model\TlsCsr**](../Model/TlsCsr.md) |  | [optional]

### Return type

[**\Fastly\Model\TlsCsrResponse**](../Model/TlsCsrResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
