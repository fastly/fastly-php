# OpenAPI\Client\TlsBulkCertificatesApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteBulkTlsCert()**](TlsBulkCertificatesApi.md#deleteBulkTlsCert) | **DELETE** /tls/bulk/certificates/{certificate_id} | Delete a certificate
[**getTlsBulkCert()**](TlsBulkCertificatesApi.md#getTlsBulkCert) | **GET** /tls/bulk/certificates/{certificate_id} | Get a certificate
[**listTlsBulkCerts()**](TlsBulkCertificatesApi.md#listTlsBulkCerts) | **GET** /tls/bulk/certificates | List certificates
[**updateBulkTlsCert()**](TlsBulkCertificatesApi.md#updateBulkTlsCert) | **PATCH** /tls/bulk/certificates/{certificate_id} | Update a certificate
[**uploadTlsBulkCert()**](TlsBulkCertificatesApi.md#uploadTlsBulkCert) | **POST** /tls/bulk/certificates | Upload a certificate


## `deleteBulkTlsCert()`

```php
deleteBulkTlsCert($certificate_id)
```

Delete a certificate

Destroy a certificate. This disables TLS for all domains listed as SAN entries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TlsBulkCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$certificate_id = 'certificate_id_example'; // string

try {
    $apiInstance->deleteBulkTlsCert($certificate_id);
} catch (Exception $e) {
    echo 'Exception when calling TlsBulkCertificatesApi->deleteBulkTlsCert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **certificate_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTlsBulkCert()`

```php
getTlsBulkCert($certificate_id): object
```

Get a certificate

Retrieve a single certificate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TlsBulkCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$certificate_id = 'certificate_id_example'; // string

try {
    $result = $apiInstance->getTlsBulkCert($certificate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TlsBulkCertificatesApi->getTlsBulkCert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **certificate_id** | **string**|  |

### Return type

**object**

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTlsBulkCerts()`

```php
listTlsBulkCerts($filter_tls_domain_id_match, $page_number, $page_size, $sort): object
```

List certificates

List all certificates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TlsBulkCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_tls_domain_id_match = 'filter_tls_domain_id_match_example'; // string | Filter certificates by their matching, fully-qualified domain name. Returns all partial matches. Must provide a value longer than 3 characters.
$page_number = 56; // int | Current page.
$page_size = 20; // int | Number of records per page.
$sort = created_at; // string | The order in which to list the results by creation date.

try {
    $result = $apiInstance->listTlsBulkCerts($filter_tls_domain_id_match, $page_number, $page_size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TlsBulkCertificatesApi->listTlsBulkCerts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_tls_domain_id_match** | **string**| Filter certificates by their matching, fully-qualified domain name. Returns all partial matches. Must provide a value longer than 3 characters. | [optional]
 **page_number** | **int**| Current page. | [optional]
 **page_size** | **int**| Number of records per page. | [optional] [default to 20]
 **sort** | **string**| The order in which to list the results by creation date. | [optional] [default to &#39;created_at&#39;]

### Return type

**object**

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBulkTlsCert()`

```php
updateBulkTlsCert($certificate_id, $body): object
```

Update a certificate

Replace a certificate with a newly reissued certificate. By using this endpoint, the original certificate will cease to be used for future TLS handshakes. Thus, only SAN entries that appear in the replacement certificate will become TLS enabled. Any SAN entries that are missing in the replacement certificate will become disabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TlsBulkCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$certificate_id = 'certificate_id_example'; // string
$body = {"data":{"id":"cRTguUGZzb2W9Euo4moOr","type":"tls_bulk_certificate","attributes":{"allow_untrusted_root":false,"cert_blob":"-----BEGIN CERTIFICATE-----\n...\n-----END CERTIFICATE-----\n","intermediates_blob":"-----BEGIN CERTIFICATE-----\n...\n-----END CERTIFICATE-----\n"}}}; // object

try {
    $result = $apiInstance->updateBulkTlsCert($certificate_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TlsBulkCertificatesApi->updateBulkTlsCert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **certificate_id** | **string**|  |
 **body** | **object**|  | [optional]

### Return type

**object**

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/vnd.api+json`
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadTlsBulkCert()`

```php
uploadTlsBulkCert($body): object
```

Upload a certificate

Upload a new certificate. TLS domains are automatically enabled upon certificate creation. If a domain is already enabled on a previously uploaded certificate, that domain will be updated to use the new certificate for all future TLS handshake requests.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TlsBulkCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = {"data":{"type":"tls_bulk_certificate","attributes":{"allow_untrusted_root":false,"cert_blob":"-----BEGIN CERTIFICATE-----\n...\n-----END CERTIFICATE-----\n","intermediates_blob":"-----BEGIN CERTIFICATE-----\n...\n-----END CERTIFICATE-----\n"},"relationships":{"tls_configurations":{"data":[{"type":"tls_configuration","id":"t7CguUGZzb2W9Euo5FoKa"}]}}}}; // object

try {
    $result = $apiInstance->uploadTlsBulkCert($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TlsBulkCertificatesApi->uploadTlsBulkCert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  | [optional]

### Return type

**object**

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/vnd.api+json`
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
