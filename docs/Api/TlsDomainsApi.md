# OpenAPI\Client\TlsDomainsApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listTlsDomains()**](TlsDomainsApi.md#listTlsDomains) | **GET** /tls/domains | List TLS domains


## `listTlsDomains()`

```php
listTlsDomains($filter_in_use, $filter_tls_certificates_id, $filter_tls_subscriptions_id, $include, $page_number, $page_size, $sort): object
```

List TLS domains

List all TLS domains.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TlsDomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_in_use = 'filter_in_use_example'; // string | Optional. Limit the returned domains to those currently using Fastly to terminate TLS with SNI (that is, domains considered \"in use\") Permitted values: true, false.
$filter_tls_certificates_id = 'filter_tls_certificates_id_example'; // string | Optional. Limit the returned domains to those listed in the given TLS certificate's SAN list.
$filter_tls_subscriptions_id = 'filter_tls_subscriptions_id_example'; // string | Optional. Limit the returned domains to those for a given TLS subscription.
$include = 'include_example'; // string | Include related objects. Optional, comma-separated values. Permitted values: `tls_activations`, `tls_certificates`, `tls_subscriptions`, and `tls_subscriptions.tls_authorizations`.
$page_number = 56; // int | Current page.
$page_size = 20; // int | Number of records per page.
$sort = created_at; // string | The order in which to list the results by creation date.

try {
    $result = $apiInstance->listTlsDomains($filter_in_use, $filter_tls_certificates_id, $filter_tls_subscriptions_id, $include, $page_number, $page_size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TlsDomainsApi->listTlsDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_in_use** | **string**| Optional. Limit the returned domains to those currently using Fastly to terminate TLS with SNI (that is, domains considered \&quot;in use\&quot;) Permitted values: true, false. | [optional]
 **filter_tls_certificates_id** | **string**| Optional. Limit the returned domains to those listed in the given TLS certificate&#39;s SAN list. | [optional]
 **filter_tls_subscriptions_id** | **string**| Optional. Limit the returned domains to those for a given TLS subscription. | [optional]
 **include** | **string**| Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_activations&#x60;, &#x60;tls_certificates&#x60;, &#x60;tls_subscriptions&#x60;, and &#x60;tls_subscriptions.tls_authorizations&#x60;. | [optional]
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
