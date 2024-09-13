# Fastly\Api\TlsDomainsApi


```php
$apiInstance = new Fastly\Api\TlsDomainsApi(
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
[**listTlsDomains()**](TlsDomainsApi.md#listTlsDomains) | **GET** /tls/domains | List TLS domains


## `listTlsDomains()`

```php
listTlsDomains($options): \Fastly\Model\TlsDomainsResponse // List TLS domains
```

List all TLS domains.

### Example
```php
    $options['filter_in_use'] = 'filter_in_use_example'; // string | Optional. Limit the returned domains to those currently using Fastly to terminate TLS with SNI (that is, domains considered \"in use\") Permitted values: true, false.
$options['filter_tls_certificates_id'] = 'filter_tls_certificates_id_example'; // string | Optional. Limit the returned domains to those listed in the given TLS certificate's SAN list.
$options['filter_tls_subscriptions_id'] = 'filter_tls_subscriptions_id_example'; // string | Optional. Limit the returned domains to those for a given TLS subscription.
$options['include'] = 'include_example'; // string | Include related objects. Optional, comma-separated values. Permitted values: `tls_activations`, `tls_certificates`, `tls_subscriptions`, `tls_subscriptions.tls_authorizations`, `tls_authorizations.globalsign_email_challenge`, and `tls_authorizations.self_managed_http_challenge`.
$options['sort'] = 'id'; // string | The order in which to list the results.
$options['page_number'] = 1; // int | Current page.
$options['page_size'] = 20; // int | Number of records per page.

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
**include** | **string** | Include related objects. Optional, comma-separated values. Permitted values: `tls_activations`, `tls_certificates`, `tls_subscriptions`, `tls_subscriptions.tls_authorizations`, `tls_authorizations.globalsign_email_challenge`, and `tls_authorizations.self_managed_http_challenge`. | [optional]
**sort** | **string** | The order in which to list the results. | [optional] [one of: 'tls_activations.created_at', '-tls_activations.created_at', 'id', '-id'] [defaults to 'id']
**page_number** | **int** | Current page. | [optional]
**page_size** | **int** | Number of records per page. | [optional] [defaults to 20]

### Return type

[**\Fastly\Model\TlsDomainsResponse**](../Model/TlsDomainsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
