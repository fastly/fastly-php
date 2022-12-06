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
    $options['filter_in_use'] = 'filter_in_use_example'; // string | Optional. Limit the returned domains to those currently using Fastly to terminate TLS with SNI (that is, domains considered \"in use\") Permitted values: true, false.
$options['filter_tls_certificates_id'] = 'filter_tls_certificates_id_example'; // string | Optional. Limit the returned domains to those listed in the given TLS certificate's SAN list.
$options['filter_tls_subscriptions_id'] = 'filter_tls_subscriptions_id_example'; // string | Optional. Limit the returned domains to those for a given TLS subscription.
$options['include'] = 'include_example'; // string | Include related objects. Optional, comma-separated values. Permitted values: `tls_activations`, `tls_certificates`, `tls_subscriptions`, `tls_subscriptions.tls_authorizations`, and `tls_authorizations.globalsign_email_challenge`.
$options['page_number'] = 1; // int | Current page.
$options['page_size'] = 20; // int | Number of records per page.
$options['sort'] = created_at; // string | The order in which to list the results by creation date.

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
**include** | **string** | Include related objects. Optional, comma-separated values. Permitted values: `tls_activations`, `tls_certificates`, `tls_subscriptions`, `tls_subscriptions.tls_authorizations`, and `tls_authorizations.globalsign_email_challenge`. | [optional]
**page_number** | **int** | Current page. | [optional]
**page_size** | **int** | Number of records per page. | [optional] [defaults to 20]
**sort** | **string** | The order in which to list the results by creation date. | [optional] [one of: 'created_at', '-created_at'] [defaults to 'created_at']

### Return type

[**\Fastly\Model\TlsDomainsResponse**](../Model/TlsDomainsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
