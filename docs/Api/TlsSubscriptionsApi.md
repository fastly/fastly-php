# Fastly\Api\TlsSubscriptionsApi


```php
$apiInstance = new Fastly\Api\TlsSubscriptionsApi(
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
[**createGlobalsignEmailChallenge()**](TlsSubscriptionsApi.md#createGlobalsignEmailChallenge) | **POST** /tls/subscriptions/{tls_subscription_id}/authorizations/{tls_authorization_id}/globalsign_email_challenges | Creates a GlobalSign email challenge.
[**createTlsSub()**](TlsSubscriptionsApi.md#createTlsSub) | **POST** /tls/subscriptions | Create a TLS subscription
[**deleteGlobalsignEmailChallenge()**](TlsSubscriptionsApi.md#deleteGlobalsignEmailChallenge) | **DELETE** /tls/subscriptions/{tls_subscription_id}/authorizations/{tls_authorization_id}/globalsign_email_challenges/{globalsign_email_challenge_id} | Delete a GlobalSign email challenge
[**deleteTlsSub()**](TlsSubscriptionsApi.md#deleteTlsSub) | **DELETE** /tls/subscriptions/{tls_subscription_id} | Delete a TLS subscription
[**getTlsSub()**](TlsSubscriptionsApi.md#getTlsSub) | **GET** /tls/subscriptions/{tls_subscription_id} | Get a TLS subscription
[**listTlsSubs()**](TlsSubscriptionsApi.md#listTlsSubs) | **GET** /tls/subscriptions | List TLS subscriptions
[**patchTlsSub()**](TlsSubscriptionsApi.md#patchTlsSub) | **PATCH** /tls/subscriptions/{tls_subscription_id} | Update a TLS subscription


## `createGlobalsignEmailChallenge()`

```php
createGlobalsignEmailChallenge($options): object // Creates a GlobalSign email challenge.
```

Creates an email challenge for a domain on a GlobalSign subscription. An email challenge will generate an email that can be used to validate domain ownership. If this challenge is created, then the domain can only be validated using email for the given subscription.

### Example
```php
    $options['tls_subscription_id'] = 'tls_subscription_id_example'; // string | Alphanumeric string identifying a TLS subscription.
$options['tls_authorization_id'] = 'tls_authorization_id_example'; // string | Alphanumeric string identifying a TLS subscription.
$options['request_body'] = {"data":{"type":"globalsign_email_challenge","attributes":{"preferred_email":"admin@example.com"}}}; // array<string,object>

try {
    $result = $apiInstance->createGlobalsignEmailChallenge($options);
} catch (Exception $e) {
    echo 'Exception when calling TlsSubscriptionsApi->createGlobalsignEmailChallenge: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**tls_subscription_id** | **string** | Alphanumeric string identifying a TLS subscription. |
**tls_authorization_id** | **string** | Alphanumeric string identifying a TLS subscription. |
**request_body** | [**array<string,object>**](../Model/object.md) |  | [optional]

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createTlsSub()`

```php
createTlsSub($options): \Fastly\Model\TlsSubscriptionResponse // Create a TLS subscription
```

Create a new TLS subscription. This response includes a list of possible challenges to verify domain ownership.

### Example
```php
    $options['tls_subscription'] = {"data":{"type":"tls_subscription","attributes":{"certificate_authority":"certainly"},"relationships":{"tls_domains":{"data":[{"type":"tls_domain","id":"DOMAIN_NAME"}]},"tls_configuration":{"data":{"type":"tls_configuration","id":"t7CguUGZzb2W9Euo5FoKa"}}}}}; // \Fastly\Model\TlsSubscription

try {
    $result = $apiInstance->createTlsSub($options);
} catch (Exception $e) {
    echo 'Exception when calling TlsSubscriptionsApi->createTlsSub: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**tls_subscription** | [**\Fastly\Model\TlsSubscription**](../Model/TlsSubscription.md) |  | [optional]

### Return type

[**\Fastly\Model\TlsSubscriptionResponse**](../Model/TlsSubscriptionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteGlobalsignEmailChallenge()`

```php
deleteGlobalsignEmailChallenge($options) // Delete a GlobalSign email challenge
```

Deletes a GlobalSign email challenge. After a GlobalSign email challenge is deleted, the domain can use HTTP and DNS validation methods again.

### Example
```php
    $options['tls_subscription_id'] = 'tls_subscription_id_example'; // string | Alphanumeric string identifying a TLS subscription.
$options['tls_authorization_id'] = 'tls_authorization_id_example'; // string | Alphanumeric string identifying a TLS subscription.
$options['globalsign_email_challenge_id'] = gU3guUGZzb2W9Euo4Mo0r; // string | Alphanumeric string identifying a GlobalSign email challenge.

try {
    $apiInstance->deleteGlobalsignEmailChallenge($options);
} catch (Exception $e) {
    echo 'Exception when calling TlsSubscriptionsApi->deleteGlobalsignEmailChallenge: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**tls_subscription_id** | **string** | Alphanumeric string identifying a TLS subscription. |
**tls_authorization_id** | **string** | Alphanumeric string identifying a TLS subscription. |
**globalsign_email_challenge_id** | **string** | Alphanumeric string identifying a GlobalSign email challenge. |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteTlsSub()`

```php
deleteTlsSub($options) // Delete a TLS subscription
```

Destroy a TLS subscription. A subscription cannot be destroyed if there are domains in the TLS enabled state.

### Example
```php
    $options['tls_subscription_id'] = 'tls_subscription_id_example'; // string | Alphanumeric string identifying a TLS subscription.

try {
    $apiInstance->deleteTlsSub($options);
} catch (Exception $e) {
    echo 'Exception when calling TlsSubscriptionsApi->deleteTlsSub: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**tls_subscription_id** | **string** | Alphanumeric string identifying a TLS subscription. |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getTlsSub()`

```php
getTlsSub($options): \Fastly\Model\TlsSubscriptionResponse // Get a TLS subscription
```

Show a TLS subscription.

### Example
```php
    $options['include'] = tls_authorizations; // string | Include related objects. Optional, comma-separated values. Permitted values: `tls_authorizations`, `tls_authorizations.globalsign_email_challenge`, `tls_authorizations.self_managed_http_challenge`, and `tls_certificates`.
$options['tls_subscription_id'] = 'tls_subscription_id_example'; // string | Alphanumeric string identifying a TLS subscription.

try {
    $result = $apiInstance->getTlsSub($options);
} catch (Exception $e) {
    echo 'Exception when calling TlsSubscriptionsApi->getTlsSub: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**include** | **string** | Include related objects. Optional, comma-separated values. Permitted values: `tls_authorizations`, `tls_authorizations.globalsign_email_challenge`, `tls_authorizations.self_managed_http_challenge`, and `tls_certificates`. | [optional]
**tls_subscription_id** | **string** | Alphanumeric string identifying a TLS subscription. |

### Return type

[**\Fastly\Model\TlsSubscriptionResponse**](../Model/TlsSubscriptionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listTlsSubs()`

```php
listTlsSubs($options): \Fastly\Model\TlsSubscriptionsResponse // List TLS subscriptions
```

List all TLS subscriptions.

### Example
```php
    $options['filter_state'] = 'filter_state_example'; // string | Limit the returned subscriptions by state. Valid values are `pending`, `processing`, `issued`, `renewing`, and `failed`. Accepts parameters: `not` (e.g., `filter[state][not]=renewing`).
$options['filter_tls_domains_id'] = 'filter_tls_domains_id_example'; // string | Limit the returned subscriptions to those that include the specific domain.
$options['filter_has_active_order'] = True; // bool | Limit the returned subscriptions to those that have currently active orders. Permitted values: `true`.
$options['filter_certificate_authority'] = 'filter_certificate_authority_example'; // string | Limit the returned subscriptions to a specific certification authority. Values may include `certainly`, `lets-encrypt`, or `globalsign`.
$options['sort'] = '-created_at'; // string | The order in which to list the results.
$options['include'] = tls_authorizations; // string | Include related objects. Optional, comma-separated values. Permitted values: `tls_authorizations`, `tls_authorizations.globalsign_email_challenge`, `tls_authorizations.self_managed_http_challenge`, and `tls_certificates`.
$options['page_number'] = 1; // int | Current page.
$options['page_size'] = 20; // int | Number of records per page.

try {
    $result = $apiInstance->listTlsSubs($options);
} catch (Exception $e) {
    echo 'Exception when calling TlsSubscriptionsApi->listTlsSubs: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**filter_state** | **string** | Limit the returned subscriptions by state. Valid values are `pending`, `processing`, `issued`, `renewing`, and `failed`. Accepts parameters: `not` (e.g., `filter[state][not]&#x3D;renewing`). | [optional]
**filter_tls_domains_id** | **string** | Limit the returned subscriptions to those that include the specific domain. | [optional]
**filter_has_active_order** | **bool** | Limit the returned subscriptions to those that have currently active orders. Permitted values: `true`. | [optional]
**filter_certificate_authority** | **string** | Limit the returned subscriptions to a specific certification authority. Values may include `certainly`, `lets-encrypt`, or `globalsign`. | [optional]
**sort** | **string** | The order in which to list the results. | [optional] [one of: 'created_at', '-created_at', 'tls_certificates.not_after', '-tls_certificates.not_after'] [defaults to '-created_at']
**include** | **string** | Include related objects. Optional, comma-separated values. Permitted values: `tls_authorizations`, `tls_authorizations.globalsign_email_challenge`, `tls_authorizations.self_managed_http_challenge`, and `tls_certificates`. | [optional]
**page_number** | **int** | Current page. | [optional]
**page_size** | **int** | Number of records per page. | [optional] [defaults to 20]

### Return type

[**\Fastly\Model\TlsSubscriptionsResponse**](../Model/TlsSubscriptionsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `patchTlsSub()`

```php
patchTlsSub($options): \Fastly\Model\TlsSubscriptionResponse // Update a TLS subscription
```

Change the TLS domains or common name associated with this subscription, update the TLS configuration for this set of domains, or retry a subscription with state `failed` by setting the state to `retry`.

### Example
```php
    $options['tls_subscription_id'] = 'tls_subscription_id_example'; // string | Alphanumeric string identifying a TLS subscription.
$options['force'] = true; // bool | A flag that allows you to edit and delete a subscription with active domains. Valid to use on PATCH and DELETE actions. As a warning, removing an active domain from a subscription or forcing the deletion of a subscription may result in breaking TLS termination to that domain.
$options['tls_subscription'] = {"data":{"type":"tls_subscription","attributes":{"state":"retry"},"relationships":{"common_name":{"data":{"type":"tls_domain","id":"DOMAIN_NAME"}},"tls_domains":{"data":[{"type":"tls_domain","id":"DOMAIN_NAME"}]},"tls_configuration":{"data":{"type":"tls_configuration","id":"t7CguUGZzb2W9Euo5FoKa"}}}}}; // \Fastly\Model\TlsSubscription

try {
    $result = $apiInstance->patchTlsSub($options);
} catch (Exception $e) {
    echo 'Exception when calling TlsSubscriptionsApi->patchTlsSub: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**tls_subscription_id** | **string** | Alphanumeric string identifying a TLS subscription. |
**force** | **bool** | A flag that allows you to edit and delete a subscription with active domains. Valid to use on PATCH and DELETE actions. As a warning, removing an active domain from a subscription or forcing the deletion of a subscription may result in breaking TLS termination to that domain. | [optional]
**tls_subscription** | [**\Fastly\Model\TlsSubscription**](../Model/TlsSubscription.md) |  | [optional]

### Return type

[**\Fastly\Model\TlsSubscriptionResponse**](../Model/TlsSubscriptionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
