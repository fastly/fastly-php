# Fastly\Api\TlsBulkCertificatesApi


```php
$apiInstance = new Fastly\Api\TlsBulkCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**deleteBulkTlsCert()**](TlsBulkCertificatesApi.md#deleteBulkTlsCert) | **DELETE** /tls/bulk/certificates/{certificate_id} | Delete a certificate
[**getTlsBulkCert()**](TlsBulkCertificatesApi.md#getTlsBulkCert) | **GET** /tls/bulk/certificates/{certificate_id} | Get a certificate
[**listTlsBulkCerts()**](TlsBulkCertificatesApi.md#listTlsBulkCerts) | **GET** /tls/bulk/certificates | List certificates
[**updateBulkTlsCert()**](TlsBulkCertificatesApi.md#updateBulkTlsCert) | **PATCH** /tls/bulk/certificates/{certificate_id} | Update a certificate
[**uploadTlsBulkCert()**](TlsBulkCertificatesApi.md#uploadTlsBulkCert) | **POST** /tls/bulk/certificates | Upload a certificate


## `deleteBulkTlsCert()`

```php
deleteBulkTlsCert($options) // Delete a certificate
```

Destroy a certificate. This disables TLS for all domains listed as SAN entries.

### Example
```php
try {
    $apiInstance->deleteBulkTlsCert($options);
} catch (Exception $e) {
    echo 'Exception when calling TlsBulkCertificatesApi->deleteBulkTlsCert: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**certificate_id** | **string** |  |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getTlsBulkCert()`

```php
getTlsBulkCert($options): \Fastly\Model\TlsBulkCertificateResponse // Get a certificate
```

Retrieve a single certificate.

### Example
```php
try {
    $result = $apiInstance->getTlsBulkCert($options);
} catch (Exception $e) {
    echo 'Exception when calling TlsBulkCertificatesApi->getTlsBulkCert: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**certificate_id** | **string** |  |

### Return type

[**\Fastly\Model\TlsBulkCertificateResponse**](../Model/TlsBulkCertificateResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listTlsBulkCerts()`

```php
listTlsBulkCerts($options): \Fastly\Model\TlsBulkCertificatesResponse // List certificates
```

List all certificates.

### Example
```php
try {
    $result = $apiInstance->listTlsBulkCerts($options);
} catch (Exception $e) {
    echo 'Exception when calling TlsBulkCertificatesApi->listTlsBulkCerts: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**filter_tls_domain_id_match** | **string** | Filter certificates by their matching, fully-qualified domain name. Returns all partial matches. Must provide a value longer than 3 characters. | [optional]
**page_number** | **int** | Current page. | [optional]
**page_size** | **int** | Number of records per page. | [optional] [default to 20]
**sort** | **string** | The order in which to list the results by creation date. | [optional] [default to &#39;created_at&#39;]

### Return type

[**\Fastly\Model\TlsBulkCertificatesResponse**](../Model/TlsBulkCertificatesResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateBulkTlsCert()`

```php
updateBulkTlsCert($options): \Fastly\Model\TlsBulkCertificateResponse // Update a certificate
```

Replace a certificate with a newly reissued certificate. By using this endpoint, the original certificate will cease to be used for future TLS handshakes. Thus, only SAN entries that appear in the replacement certificate will become TLS enabled. Any SAN entries that are missing in the replacement certificate will become disabled.

### Example
```php
try {
    $result = $apiInstance->updateBulkTlsCert($options);
} catch (Exception $e) {
    echo 'Exception when calling TlsBulkCertificatesApi->updateBulkTlsCert: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**certificate_id** | **string** |  |
**tls_bulk_certificate** | [**\Fastly\Model\TlsBulkCertificate**](../Model/TlsBulkCertificate.md) |  | [optional]

### Return type

[**\Fastly\Model\TlsBulkCertificateResponse**](../Model/TlsBulkCertificateResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `uploadTlsBulkCert()`

```php
uploadTlsBulkCert($options): \Fastly\Model\TlsBulkCertificateResponse // Upload a certificate
```

Upload a new certificate. TLS domains are automatically enabled upon certificate creation. If a domain is already enabled on a previously uploaded certificate, that domain will be updated to use the new certificate for all future TLS handshake requests.

### Example
```php
try {
    $result = $apiInstance->uploadTlsBulkCert($options);
} catch (Exception $e) {
    echo 'Exception when calling TlsBulkCertificatesApi->uploadTlsBulkCert: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**tls_bulk_certificate** | [**\Fastly\Model\TlsBulkCertificate**](../Model/TlsBulkCertificate.md) |  | [optional]

### Return type

[**\Fastly\Model\TlsBulkCertificateResponse**](../Model/TlsBulkCertificateResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
