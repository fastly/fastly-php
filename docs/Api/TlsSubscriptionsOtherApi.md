# Fastly\Api\TlsSubscriptionsOtherApi


```php
$apiInstance = new Fastly\Api\TlsSubscriptionsOtherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**deleteTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesGlobalsignEmailChallengeId()**](TlsSubscriptionsOtherApi.md#deleteTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesGlobalsignEmailChallengeId) | **DELETE** /tls/subscriptions/{tls_subscription_id}/authorizations/{tls_authorization_id}/globalsign_email_challenges/{globalsign_email_challenge_id} | Delete a GlobalSign email challenge
[**postTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallenges()**](TlsSubscriptionsOtherApi.md#postTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallenges) | **POST** /tls/subscriptions/{tls_subscription_id}/authorizations/{tls_authorization_id}/globalsign_email_challenges | Creates a GlobalSign email challenge.


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
    echo 'Exception when calling TlsSubscriptionsOtherApi->deleteTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesGlobalsignEmailChallengeId: ', $e->getMessage(), PHP_EOL;
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
    echo 'Exception when calling TlsSubscriptionsOtherApi->postTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallenges: ', $e->getMessage(), PHP_EOL;
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
