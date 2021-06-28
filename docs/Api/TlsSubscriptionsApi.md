# Fastly\Api\TlsSubscriptionsApi


```php
$apiInstance = new Fastly\Api\TlsSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**createTlsSub()**](TlsSubscriptionsApi.md#createTlsSub) | **POST** /tls/subscriptions | Create a TLS subscription
[**deleteTlsSub()**](TlsSubscriptionsApi.md#deleteTlsSub) | **DELETE** /tls/subscriptions/{tls_subscription_id} | Delete a TLS subscription
[**getTlsSub()**](TlsSubscriptionsApi.md#getTlsSub) | **GET** /tls/subscriptions/{tls_subscription_id} | Get a TLS subscription
[**listTlsSubs()**](TlsSubscriptionsApi.md#listTlsSubs) | **GET** /tls/subscriptions | List TLS subscriptions
[**patchTlsSub()**](TlsSubscriptionsApi.md#patchTlsSub) | **PATCH** /tls/subscriptions/{tls_subscription_id} | Update a TLS subscription


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
**tls_subscription_id** | **string** |  |

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
**tls_subscription_id** | **string** |  |
**include** | **string** | Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_authorizations&#x60;. | [optional]

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
**filter_state** | **string** | Limit the returned subscriptions by state. Valid values are pending, processing, issued, and renewing. Accepts parameters: not (e.g., filter[state][not]&#x3D;renewing). | [optional]
**filter_tls_domains_id** | **string** | Limit the returned subscriptions to those that include the specific domain. | [optional]
**include** | **string** | Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_authorizations&#x60;. | [optional]
**page_number** | **int** | Current page. | [optional]
**page_size** | **int** | Number of records per page. | [optional] [default to 20]
**sort** | **string** | The order in which to list the results by creation date. | [optional] [default to &#39;created_at&#39;]

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
**tls_subscription_id** | **string** |  |
**force** | **bool** | A flag that allows you to edit and delete a subscription with active domains. Valid to use on PATCH and DELETE actions. As a warning, removing an active domain from a subscription or forcing the deletion of a subscription may result in breaking TLS termination to that domain. | [optional]
**tls_subscription** | [**\Fastly\Model\TlsSubscription**](../Model/TlsSubscription.md) |  | [optional]

### Return type

[**\Fastly\Model\TlsSubscriptionResponse**](../Model/TlsSubscriptionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
