# OpenAPI\Client\TlsActivationsApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTlsActivation()**](TlsActivationsApi.md#createTlsActivation) | **POST** /tls/activations | Enable TLS for a domain using a custom certificate
[**deleteTlsActivation()**](TlsActivationsApi.md#deleteTlsActivation) | **DELETE** /tls/activations/{tls_activation_id} | Disable TLS on a domain
[**getTlsActivation()**](TlsActivationsApi.md#getTlsActivation) | **GET** /tls/activations/{tls_activation_id} | Get a TLS activation
[**listTlsActivations()**](TlsActivationsApi.md#listTlsActivations) | **GET** /tls/activations | List TLS activations
[**updateTlsActivation()**](TlsActivationsApi.md#updateTlsActivation) | **PATCH** /tls/activations/{tls_activation_id} | Update a certificate


## `createTlsActivation()`

```php
createTlsActivation($body): object
```

Enable TLS for a domain using a custom certificate

Enable TLS for a particular TLS domain and certificate combination. These relationships must be specified to create the TLS activation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TlsActivationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = {"data":{"type":"tls_activation","relationships":{"tls_certificate":{"data":{"type":"tls_certificate","id":"cRTguUGZzb2W9Euo4moOr"}},"tls_configuration":{"data":{"type":"tls_configuration","id":"t7CguUGZzb2W9Euo5FoKa"}},"tls_domain":{"data":{"type":"tls_domain","id":"DOMAIN_NAME"}}}}}; // object

try {
    $result = $apiInstance->createTlsActivation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TlsActivationsApi->createTlsActivation: ', $e->getMessage(), PHP_EOL;
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

## `deleteTlsActivation()`

```php
deleteTlsActivation($tls_activation_id)
```

Disable TLS on a domain

Disable TLS on the domain associated with this TLS activation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TlsActivationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tls_activation_id = 'tls_activation_id_example'; // string

try {
    $apiInstance->deleteTlsActivation($tls_activation_id);
} catch (Exception $e) {
    echo 'Exception when calling TlsActivationsApi->deleteTlsActivation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tls_activation_id** | **string**|  |

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

## `getTlsActivation()`

```php
getTlsActivation($tls_activation_id, $include): object
```

Get a TLS activation

Show a TLS activation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TlsActivationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tls_activation_id = 'tls_activation_id_example'; // string
$include = tls_certificate,tls_configuration,tls_domain; // string | Include related objects. Optional, comma-separated values. Permitted values: `tls_certificate`, `tls_configuration`, and `tls_domain`.

try {
    $result = $apiInstance->getTlsActivation($tls_activation_id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TlsActivationsApi->getTlsActivation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tls_activation_id** | **string**|  |
 **include** | **string**| Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_certificate&#x60;, &#x60;tls_configuration&#x60;, and &#x60;tls_domain&#x60;. | [optional]

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

## `listTlsActivations()`

```php
listTlsActivations($filter_tls_certificate_id, $filter_tls_configuration_id, $filter_tls_domain_id, $include, $page_number, $page_size): object
```

List TLS activations

List all TLS activations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TlsActivationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_tls_certificate_id = 'filter_tls_certificate_id_example'; // string | Limit the returned activations to a specific certificate.
$filter_tls_configuration_id = 'filter_tls_configuration_id_example'; // string | Limit the returned activations to a specific TLS configuration.
$filter_tls_domain_id = 'filter_tls_domain_id_example'; // string | Limit the returned rules to a specific domain name.
$include = tls_certificate,tls_configuration,tls_domain; // string | Include related objects. Optional, comma-separated values. Permitted values: `tls_certificate`, `tls_configuration`, and `tls_domain`.
$page_number = 56; // int | Current page.
$page_size = 20; // int | Number of records per page.

try {
    $result = $apiInstance->listTlsActivations($filter_tls_certificate_id, $filter_tls_configuration_id, $filter_tls_domain_id, $include, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TlsActivationsApi->listTlsActivations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_tls_certificate_id** | **string**| Limit the returned activations to a specific certificate. | [optional]
 **filter_tls_configuration_id** | **string**| Limit the returned activations to a specific TLS configuration. | [optional]
 **filter_tls_domain_id** | **string**| Limit the returned rules to a specific domain name. | [optional]
 **include** | **string**| Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_certificate&#x60;, &#x60;tls_configuration&#x60;, and &#x60;tls_domain&#x60;. | [optional]
 **page_number** | **int**| Current page. | [optional]
 **page_size** | **int**| Number of records per page. | [optional] [default to 20]

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

## `updateTlsActivation()`

```php
updateTlsActivation($tls_activation_id, $body): object
```

Update a certificate

Update the certificate used to terminate TLS traffic for the domain associated with this TLS activation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TlsActivationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tls_activation_id = 'tls_activation_id_example'; // string
$body = {"data":{"type":"tls_activation","relationships":{"tls_certificate":{"data":{"type":"tls_certificate","id":"cRTguUGZzb2W9Euo4moOr"}}}}}; // object

try {
    $result = $apiInstance->updateTlsActivation($tls_activation_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TlsActivationsApi->updateTlsActivation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tls_activation_id** | **string**|  |
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
