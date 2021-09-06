# Fastly\Api\TlsDomainsApi


```php
$apiInstance = new Fastly\Api\TlsDomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**listTlsDomains()**](TlsDomainsApi.md#listTlsDomains) | **GET** /tls/domains | List TLS domains


## `listTlsDomains()`

```php
listTlsDomains($options): \Fastly\Model\TlsDomainsResponse // List TLS domains
```

List all TLS domains.

### Example
```php
try {
    $result = $apiInstance->listTlsDomains($options);
} catch (Exception $e) {
    echo 'Exception when calling TlsDomainsApi->listTlsDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**filter_in_use** | **string** | Optional. Limit the returned domains to those currently using Fastly to terminate TLS with SNI (that is, domains considered \&quot;in use\&quot;) Permitted values: true, false. | [optional]
**filter_tls_certificates_id** | **string** | Optional. Limit the returned domains to those listed in the given TLS certificate&#39;s SAN list. | [optional]
**filter_tls_subscriptions_id** | **string** | Optional. Limit the returned domains to those for a given TLS subscription. | [optional]
**include** | **string** | Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_activations&#x60;, &#x60;tls_certificates&#x60;, &#x60;tls_subscriptions&#x60;, &#x60;tls_subscriptions.tls_authorizations&#x60;, and &#x60;tls_authorizations.globalsign_email_challenge&#x60;. | [optional]
**page_number** | **int** | Current page. | [optional]
**page_size** | **int** | Number of records per page. | [optional] [default to 20]
**sort** | **string** | The order in which to list the results by creation date. | [optional] [default to &#39;created_at&#39;]

### Return type

[**\Fastly\Model\TlsDomainsResponse**](../Model/TlsDomainsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
