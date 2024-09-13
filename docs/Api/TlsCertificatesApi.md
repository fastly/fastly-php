# Fastly\Api\TlsCertificatesApi


```php
$apiInstance = new Fastly\Api\TlsCertificatesApi(
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
[**createTlsCert()**](TlsCertificatesApi.md#createTlsCert) | **POST** /tls/certificates | Create a TLS certificate
[**deleteTlsCert()**](TlsCertificatesApi.md#deleteTlsCert) | **DELETE** /tls/certificates/{tls_certificate_id} | Delete a TLS certificate
[**getTlsCert()**](TlsCertificatesApi.md#getTlsCert) | **GET** /tls/certificates/{tls_certificate_id} | Get a TLS certificate
[**getTlsCertBlob()**](TlsCertificatesApi.md#getTlsCertBlob) | **GET** /tls/certificates/{tls_certificate_id}/blob | Get a TLS certificate blob (Limited Availability)
[**listTlsCerts()**](TlsCertificatesApi.md#listTlsCerts) | **GET** /tls/certificates | List TLS certificates
[**updateTlsCert()**](TlsCertificatesApi.md#updateTlsCert) | **PATCH** /tls/certificates/{tls_certificate_id} | Update a TLS certificate


## `createTlsCert()`

```php
createTlsCert($options): object // Create a TLS certificate
```

Create a TLS certificate.

### Example
```php
    $options['tls_certificate'] = {"data":{"type":"tls_certificate","attributes":{"cert_blob":"-----BEGIN CERTIFICATE-----\n...\n-----END CERTIFICATE-----\n","name":"My certificate"}}}; // \Fastly\Model\TlsCertificate

try {
    $result = $apiInstance->createTlsCert($options);
} catch (Exception $e) {
    echo 'Exception when calling TlsCertificatesApi->createTlsCert: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**tls_certificate** | [**\Fastly\Model\TlsCertificate**](../Model/TlsCertificate.md) |  | [optional]

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteTlsCert()`

```php
deleteTlsCert($options) // Delete a TLS certificate
```

Destroy a TLS certificate. TLS certificates already enabled for a domain cannot be destroyed.

### Example
```php
    $options['tls_certificate_id'] = 'tls_certificate_id_example'; // string | Alphanumeric string identifying a TLS certificate.

try {
    $apiInstance->deleteTlsCert($options);
} catch (Exception $e) {
    echo 'Exception when calling TlsCertificatesApi->deleteTlsCert: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**tls_certificate_id** | **string** | Alphanumeric string identifying a TLS certificate. |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getTlsCert()`

```php
getTlsCert($options): \Fastly\Model\TlsCertificateResponse // Get a TLS certificate
```

Show a TLS certificate.

### Example
```php
    $options['tls_certificate_id'] = 'tls_certificate_id_example'; // string | Alphanumeric string identifying a TLS certificate.

try {
    $result = $apiInstance->getTlsCert($options);
} catch (Exception $e) {
    echo 'Exception when calling TlsCertificatesApi->getTlsCert: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**tls_certificate_id** | **string** | Alphanumeric string identifying a TLS certificate. |

### Return type

[**\Fastly\Model\TlsCertificateResponse**](../Model/TlsCertificateResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getTlsCertBlob()`

```php
getTlsCertBlob($options): \Fastly\Model\TlsCertificateBlobResponse // Get a TLS certificate blob (Limited Availability)
```

Retrieve a TLS certificate blob. This feature is part of a [limited availability](https://docs.fastly.com/products/fastly-product-lifecycle#limited-availability) release.

### Example
```php
    $options['tls_certificate_id'] = 'tls_certificate_id_example'; // string | Alphanumeric string identifying a TLS certificate.

try {
    $result = $apiInstance->getTlsCertBlob($options);
} catch (Exception $e) {
    echo 'Exception when calling TlsCertificatesApi->getTlsCertBlob: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**tls_certificate_id** | **string** | Alphanumeric string identifying a TLS certificate. |

### Return type

[**\Fastly\Model\TlsCertificateBlobResponse**](../Model/TlsCertificateBlobResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listTlsCerts()`

```php
listTlsCerts($options): \Fastly\Model\TlsCertificatesResponse // List TLS certificates
```

List all TLS certificates.

### Example
```php
    $options['filter_in_use'] = 'filter_in_use_example'; // string | Optional. Limit the returned certificates to those currently using Fastly to terminate TLS (that is, certificates associated with an activation). Permitted values: true, false.
$options['filter_not_after'] = 'filter_not_after_example'; // string | Limit the returned certificates to those that expire prior to the specified date in UTC. Accepts parameters: lte (e.g., filter[not_after][lte]=2020-05-05).
$options['filter_tls_domains_id'] = 'filter_tls_domains_id_example'; // string | Limit the returned certificates to those that include the specific domain.
$options['include'] = 'include_example'; // string | Include related objects. Optional, comma-separated values. Permitted values: `tls_activations`.
$options['sort'] = '-created_at'; // string | The order in which to list the results.
$options['page_number'] = 1; // int | Current page.
$options['page_size'] = 20; // int | Number of records per page.

try {
    $result = $apiInstance->listTlsCerts($options);
} catch (Exception $e) {
    echo 'Exception when calling TlsCertificatesApi->listTlsCerts: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**filter_in_use** | **string** | Optional. Limit the returned certificates to those currently using Fastly to terminate TLS (that is, certificates associated with an activation). Permitted values: true, false. | [optional]
**filter_not_after** | **string** | Limit the returned certificates to those that expire prior to the specified date in UTC. Accepts parameters: lte (e.g., filter[not_after][lte]&#x3D;2020-05-05). | [optional]
**filter_tls_domains_id** | **string** | Limit the returned certificates to those that include the specific domain. | [optional]
**include** | **string** | Include related objects. Optional, comma-separated values. Permitted values: `tls_activations`. | [optional]
**sort** | **string** | The order in which to list the results. | [optional] [one of: 'created_at', '-created_at', 'not_before', '-not_before', 'not_after', '-not_after', 'tls_activations.created_at', '-tls_activations.created_at'] [defaults to '-created_at']
**page_number** | **int** | Current page. | [optional]
**page_size** | **int** | Number of records per page. | [optional] [defaults to 20]

### Return type

[**\Fastly\Model\TlsCertificatesResponse**](../Model/TlsCertificatesResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateTlsCert()`

```php
updateTlsCert($options): \Fastly\Model\TlsCertificateResponse // Update a TLS certificate
```

Replace a TLS certificate with a newly reissued TLS certificate, or update a TLS certificate's name. If replacing a TLS certificate, the new TLS certificate must contain all SAN entries as the current TLS certificate. It must either have an exact matching list or contain a superset.

### Example
```php
    $options['tls_certificate_id'] = 'tls_certificate_id_example'; // string | Alphanumeric string identifying a TLS certificate.
$options['tls_certificate'] = {"data":{"type":"tls_certificate","attributes":{"cert_blob":"-----BEGIN CERTIFICATE-----\n...\n-----END CERTIFICATE-----\n","name":"My certificate"}}}; // \Fastly\Model\TlsCertificate

try {
    $result = $apiInstance->updateTlsCert($options);
} catch (Exception $e) {
    echo 'Exception when calling TlsCertificatesApi->updateTlsCert: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**tls_certificate_id** | **string** | Alphanumeric string identifying a TLS certificate. |
**tls_certificate** | [**\Fastly\Model\TlsCertificate**](../Model/TlsCertificate.md) |  | [optional]

### Return type

[**\Fastly\Model\TlsCertificateResponse**](../Model/TlsCertificateResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
