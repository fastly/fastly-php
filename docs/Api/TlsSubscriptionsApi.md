# OpenAPI\Client\TlsSubscriptionsApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTlsSub()**](TlsSubscriptionsApi.md#createTlsSub) | **POST** /tls/subscriptions | Create a TLS subscription
[**deleteTlsSub()**](TlsSubscriptionsApi.md#deleteTlsSub) | **DELETE** /tls/subscriptions/{tls_subscription_id} | Delete a TLS subscription
[**getTlsSub()**](TlsSubscriptionsApi.md#getTlsSub) | **GET** /tls/subscriptions/{tls_subscription_id} | Get a TLS subscription
[**listTlsSubs()**](TlsSubscriptionsApi.md#listTlsSubs) | **GET** /tls/subscriptions | List TLS subscriptions
[**patchTlsSub()**](TlsSubscriptionsApi.md#patchTlsSub) | **PATCH** /tls/subscriptions/{tls_subscription_id} | Update a TLS subscription


## `createTlsSub()`

```php
createTlsSub($body): object
```

Create a TLS subscription

Create a new TLS subscription. This response includes a list of possible challenges to verify domain ownership.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TlsSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = {"data":{"type":"tls_subscription","attributes":{"certificate_authority":"lets-encrypt"},"relationships":{"tls_domains":{"data":[{"type":"tls_domain","id":"DOMAIN_NAME"}]},"tls_configuration":{"data":{"type":"tls_configuration","id":"t7CguUGZzb2W9Euo5FoKa"}}}}}; // object

try {
    $result = $apiInstance->createTlsSub($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TlsSubscriptionsApi->createTlsSub: ', $e->getMessage(), PHP_EOL;
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

## `deleteTlsSub()`

```php
deleteTlsSub($tls_subscription_id)
```

Delete a TLS subscription

Destroy a TLS subscription. A subscription cannot be destroyed if there are domains in the TLS enabled state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TlsSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tls_subscription_id = 'tls_subscription_id_example'; // string

try {
    $apiInstance->deleteTlsSub($tls_subscription_id);
} catch (Exception $e) {
    echo 'Exception when calling TlsSubscriptionsApi->deleteTlsSub: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tls_subscription_id** | **string**|  |

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

## `getTlsSub()`

```php
getTlsSub($tls_subscription_id, $include): object
```

Get a TLS subscription

Show a TLS subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TlsSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tls_subscription_id = 'tls_subscription_id_example'; // string
$include = tls_authorizations; // string | Include related objects. Optional, comma-separated values. Permitted values: `tls_authorizations`.

try {
    $result = $apiInstance->getTlsSub($tls_subscription_id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TlsSubscriptionsApi->getTlsSub: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tls_subscription_id** | **string**|  |
 **include** | **string**| Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_authorizations&#x60;. | [optional]

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

## `listTlsSubs()`

```php
listTlsSubs($filter_state, $filter_tls_domains_id, $include, $page_number, $page_size, $sort): object
```

List TLS subscriptions

List all TLS subscriptions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TlsSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_state = 'filter_state_example'; // string | Limit the returned subscriptions by state. Valid values are pending, processing, issued, and renewing. Accepts parameters: not (e.g., filter[state][not]=renewing).
$filter_tls_domains_id = 'filter_tls_domains_id_example'; // string | Limit the returned subscriptions to those that include the specific domain.
$include = tls_authorizations; // string | Include related objects. Optional, comma-separated values. Permitted values: `tls_authorizations`.
$page_number = 56; // int | Current page.
$page_size = 20; // int | Number of records per page.
$sort = created_at; // string | The order in which to list the results by creation date.

try {
    $result = $apiInstance->listTlsSubs($filter_state, $filter_tls_domains_id, $include, $page_number, $page_size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TlsSubscriptionsApi->listTlsSubs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_state** | **string**| Limit the returned subscriptions by state. Valid values are pending, processing, issued, and renewing. Accepts parameters: not (e.g., filter[state][not]&#x3D;renewing). | [optional]
 **filter_tls_domains_id** | **string**| Limit the returned subscriptions to those that include the specific domain. | [optional]
 **include** | **string**| Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_authorizations&#x60;. | [optional]
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

## `patchTlsSub()`

```php
patchTlsSub($tls_subscription_id, $body): object
```

Update a TLS subscription

Change the TLS domains or common name associated with this subscription, or update the TLS configuration for this set of domains.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TlsSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tls_subscription_id = 'tls_subscription_id_example'; // string
$body = {"data":{"type":"tls_subscription","relationships":{"common_name":{"data":{"type":"tls_domain","id":"DOMAIN_NAME"}},"tls_domains":{"data":[{"type":"tls_domain","id":"DOMAIN_NAME"}]},"tls_configuration":{"data":{"type":"tls_configuration","id":"t7CguUGZzb2W9Euo5FoKa"}}}}}; // object

try {
    $result = $apiInstance->patchTlsSub($tls_subscription_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TlsSubscriptionsApi->patchTlsSub: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tls_subscription_id** | **string**|  |
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
