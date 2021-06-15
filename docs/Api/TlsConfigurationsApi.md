# OpenAPI\Client\TlsConfigurationsApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTlsConfig()**](TlsConfigurationsApi.md#getTlsConfig) | **GET** /tls/configurations/{tls_configuration_id} | Get a TLS configuration
[**listTlsConfigs()**](TlsConfigurationsApi.md#listTlsConfigs) | **GET** /tls/configurations | List TLS configurations
[**updateTlsConfig()**](TlsConfigurationsApi.md#updateTlsConfig) | **PATCH** /tls/configurations/{tls_configuration_id} | Update a TLS configuration


## `getTlsConfig()`

```php
getTlsConfig($tls_configuration_id, $include): object
```

Get a TLS configuration

Show a TLS configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TlsConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tls_configuration_id = 'tls_configuration_id_example'; // string
$include = dns_records; // string | Include related objects. Optional, comma-separated values. Permitted values: `dns_records`.

try {
    $result = $apiInstance->getTlsConfig($tls_configuration_id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TlsConfigurationsApi->getTlsConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tls_configuration_id** | **string**|  |
 **include** | **string**| Include related objects. Optional, comma-separated values. Permitted values: &#x60;dns_records&#x60;. | [optional]

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

## `listTlsConfigs()`

```php
listTlsConfigs($filter_bulk, $include, $page_number, $page_size): object
```

List TLS configurations

List all TLS configurations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TlsConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_bulk = 'filter_bulk_example'; // string | Optionally filters by the bulk attribute.
$include = dns_records; // string | Include related objects. Optional, comma-separated values. Permitted values: `dns_records`.
$page_number = 56; // int | Current page.
$page_size = 20; // int | Number of records per page.

try {
    $result = $apiInstance->listTlsConfigs($filter_bulk, $include, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TlsConfigurationsApi->listTlsConfigs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_bulk** | **string**| Optionally filters by the bulk attribute. | [optional]
 **include** | **string**| Include related objects. Optional, comma-separated values. Permitted values: &#x60;dns_records&#x60;. | [optional]
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

## `updateTlsConfig()`

```php
updateTlsConfig($tls_configuration_id, $body): object
```

Update a TLS configuration

Update a TLS configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TlsConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tls_configuration_id = 'tls_configuration_id_example'; // string
$body = {"data":{"type":"tls_configuration","attributes":{"name":"New TLS configuration name"}}}; // object

try {
    $result = $apiInstance->updateTlsConfig($tls_configuration_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TlsConfigurationsApi->updateTlsConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tls_configuration_id** | **string**|  |
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
