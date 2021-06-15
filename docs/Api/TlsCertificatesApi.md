# OpenAPI\Client\TlsCertificatesApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTlsCert()**](TlsCertificatesApi.md#createTlsCert) | **POST** /tls/certificates | Create a TLS certificate
[**deleteTlsCert()**](TlsCertificatesApi.md#deleteTlsCert) | **DELETE** /tls/certificates/{tls_certificate_id} | Delete a TLS certificate
[**getTlsCert()**](TlsCertificatesApi.md#getTlsCert) | **GET** /tls/certificates/{tls_certificate_id} | Get a TLS certificate
[**listTlsCerts()**](TlsCertificatesApi.md#listTlsCerts) | **GET** /tls/certificates | List TLS certificates
[**updateTlsCert()**](TlsCertificatesApi.md#updateTlsCert) | **PATCH** /tls/certificates/{tls_certificate_id} | Update a TLS certificate


## `createTlsCert()`

```php
createTlsCert($body): object
```

Create a TLS certificate

Create a TLS certificate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TlsCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = {"data":{"type":"tls_certificate","attributes":{"cert_blob":"-----BEGIN CERTIFICATE-----\n...\n-----END CERTIFICATE-----\n","name":"My certificate"}}}; // object

try {
    $result = $apiInstance->createTlsCert($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TlsCertificatesApi->createTlsCert: ', $e->getMessage(), PHP_EOL;
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

## `deleteTlsCert()`

```php
deleteTlsCert($tls_certificate_id)
```

Delete a TLS certificate

Destroy a TLS certificate. TLS certificates already enabled for a domain cannot be destroyed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TlsCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tls_certificate_id = 'tls_certificate_id_example'; // string

try {
    $apiInstance->deleteTlsCert($tls_certificate_id);
} catch (Exception $e) {
    echo 'Exception when calling TlsCertificatesApi->deleteTlsCert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tls_certificate_id** | **string**|  |

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

## `getTlsCert()`

```php
getTlsCert($tls_certificate_id): object
```

Get a TLS certificate

Show a TLS certificate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TlsCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tls_certificate_id = 'tls_certificate_id_example'; // string

try {
    $result = $apiInstance->getTlsCert($tls_certificate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TlsCertificatesApi->getTlsCert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tls_certificate_id** | **string**|  |

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

## `listTlsCerts()`

```php
listTlsCerts($filter_not_after, $filter_tls_domains_id, $include, $page_number, $page_size, $sort): object
```

List TLS certificates

List all TLS certificates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TlsCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_not_after = 'filter_not_after_example'; // string | Limit the returned certificates to those that expire prior to the specified date in UTC. Accepts parameters: lte (e.g., filter[not_after][lte]=2020-05-05).
$filter_tls_domains_id = 'filter_tls_domains_id_example'; // string | Limit the returned certificates to those that include the specific domain.
$include = 'include_example'; // string | Include related objects. Optional, comma-separated values. Permitted values: `tls_activations`.
$page_number = 56; // int | Current page.
$page_size = 20; // int | Number of records per page.
$sort = created_at; // string | The order in which to list the results by creation date.

try {
    $result = $apiInstance->listTlsCerts($filter_not_after, $filter_tls_domains_id, $include, $page_number, $page_size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TlsCertificatesApi->listTlsCerts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_not_after** | **string**| Limit the returned certificates to those that expire prior to the specified date in UTC. Accepts parameters: lte (e.g., filter[not_after][lte]&#x3D;2020-05-05). | [optional]
 **filter_tls_domains_id** | **string**| Limit the returned certificates to those that include the specific domain. | [optional]
 **include** | **string**| Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_activations&#x60;. | [optional]
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

## `updateTlsCert()`

```php
updateTlsCert($tls_certificate_id, $body): object
```

Update a TLS certificate

Replace a TLS certificate with a newly reissued TLS certificate, or update a TLS certificate's name. If replacing a TLS certificate, the new TLS certificate must contain all SAN entries as the current TLS certificate. It must either have an exact matching list or contain a superset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TlsCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tls_certificate_id = 'tls_certificate_id_example'; // string
$body = {"data":{"type":"tls_certificate","attributes":{"cert_blob":"-----BEGIN CERTIFICATE-----\n...\n-----END CERTIFICATE-----\n","name":"My certificate"}}}; // object

try {
    $result = $apiInstance->updateTlsCert($tls_certificate_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TlsCertificatesApi->updateTlsCert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tls_certificate_id** | **string**|  |
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
