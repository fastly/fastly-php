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

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**createTlsSub()**](TlsSubscriptionsApi.md#createTlsSub) | **POST** /tls/subscriptions | Create a TLS subscription
[**deleteTlsSub()**](TlsSubscriptionsApi.md#deleteTlsSub) | **DELETE** /tls/subscriptions/{tls_subscription_id} | Delete a TLS subscription
[**deleteTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesGlobalsignEmailChallengeId()**](TlsSubscriptionsApi.md#deleteTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesGlobalsignEmailChallengeId) | **DELETE** /tls/subscriptions/{tls_subscription_id}/authorizations/{tls_authorization_id}/globalsign_email_challenges/{globalsign_email_challenge_id} | Delete a GlobalSign email challenge
[**getTlsSub()**](TlsSubscriptionsApi.md#getTlsSub) | **GET** /tls/subscriptions/{tls_subscription_id} | Get a TLS subscription
[**listTlsSubs()**](TlsSubscriptionsApi.md#listTlsSubs) | **GET** /tls/subscriptions | List TLS subscriptions
[**patchTlsSub()**](TlsSubscriptionsApi.md#patchTlsSub) | **PATCH** /tls/subscriptions/{tls_subscription_id} | Update a TLS subscription
[**postTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallenges()**](TlsSubscriptionsApi.md#postTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallenges) | **POST** /tls/subscriptions/{tls_subscription_id}/authorizations/{tls_authorization_id}/globalsign_email_challenges | Creates a GlobalSign email challenge.


## `createTlsSub()`

```php
createTlsSub($options): \Fastly\Model\TlsSubscriptionResponse // Create a TLS subscription
```

Create a new TLS subscription. This response includes a list of possible challenges to verify domain ownership.

### Example
```php
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
**force** | **bool** | A flag that allows you to edit and delete a subscription with active domains. Valid to use on PATCH and DELETE actions. As a warning, removing an active domain from a subscription or forcing the deletion of a subscription may result in breaking TLS termination to that domain. | [optional]
**tls_subscription** | [**\Fastly\Model\TlsSubscription**](../Model/TlsSubscription.md) |  | [optional]

### Return type

[**\Fastly\Model\TlsSubscriptionResponse**](../Model/TlsSubscriptionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteTlsSub()`

```php
deleteTlsSub($options) // Delete a TLS subscription
```

Destroy a TLS subscription. A subscription cannot be destroyed if there are domains in the TLS enabled state.

### Example
```php
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

## `deleteTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesGlobalsignEmailChallengeId()`

```php
deleteTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesGlobalsignEmailChallengeId($options) // Delete a GlobalSign email challenge
```

Deletes a GlobalSign email challenge. After a GlobalSign email challenge is deleted, the domain can use HTTP and DNS validation methods again.

### Example
```php
try {
    $apiInstance->deleteTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesGlobalsignEmailChallengeId($options);
} catch (Exception $e) {
    echo 'Exception when calling TlsSubscriptionsApi->deleteTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesGlobalsignEmailChallengeId: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**tls_subscription_id** | **string** |  |
**globalsign_email_challenge_id** | **string** |  |
**tls_authorization_id** | **string** |  |

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
**include** | **string** | Include related objects. Optional, comma-separated values. Permitted values: `tls_authorizations` and `tls_authorizations.globalsign_email_challenge`. | [optional]
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
**filter_state** | **string** | Limit the returned subscriptions by state. Valid values are `pending`, `processing`, `issued`, and `renewing`. Accepts parameters: `not` (e.g., `filter[state][not]&#x3D;renewing`). | [optional]
**filter_tls_domains_id** | **string** | Limit the returned subscriptions to those that include the specific domain. | [optional]
**filter_has_active_order** | **bool** | Limit the returned subscriptions to those that have currently active orders. Permitted values: `true`. | [optional]
**include** | **string** | Include related objects. Optional, comma-separated values. Permitted values: `tls_authorizations` and `tls_authorizations.globalsign_email_challenge`. | [optional]
**page_number** | **int** | Current page. | [optional]
**page_size** | **int** | Number of records per page. | [optional] [defaults to 20]
**sort** | **string** | The order in which to list the results by creation date. | [optional] [one of: 'created_at', '-created_at'] [defaults to 'created_at']

### Return type

[**\Fastly\Model\TlsSubscriptionsResponse**](../Model/TlsSubscriptionsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `patchTlsSub()`

```php
patchTlsSub($options): \Fastly\Model\TlsSubscriptionResponse // Update a TLS subscription
```

Change the TLS domains or common name associated with this subscription, or update the TLS configuration for this set of domains.

### Example
```php
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

## `postTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallenges()`

```php
postTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallenges($options): object // Creates a GlobalSign email challenge.
```

Creates an email challenge for domain on a GlobalSign subscription. An email challenge will generate an email that can be used to validate domain ownership. If this challenge is created, then the domain can only be validated using email for the given subscription.

### Example
```php
try {
    $result = $apiInstance->postTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallenges($options);
} catch (Exception $e) {
    echo 'Exception when calling TlsSubscriptionsApi->postTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallenges: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**tls_subscription_id** | **string** |  |
**tls_authorization_id** | **string** |  |
**body** | **object** |  | [optional]

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
