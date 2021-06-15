# OpenAPI\Client\TokensApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkRevokeTokens()**](TokensApi.md#bulkRevokeTokens) | **DELETE** /tokens | Revoke multiple tokens
[**createToken()**](TokensApi.md#createToken) | **POST** /tokens | Create a token
[**getTokenCurrent()**](TokensApi.md#getTokenCurrent) | **GET** /tokens/self | Get the current token
[**listTokensCustomer()**](TokensApi.md#listTokensCustomer) | **GET** /customer/{customer_id}/tokens | List tokens for a customer
[**listTokensUser()**](TokensApi.md#listTokensUser) | **GET** /tokens | List tokens for the authenticated user
[**revokeToken()**](TokensApi.md#revokeToken) | **DELETE** /tokens/{token_id} | Revoke a token
[**revokeTokenCurrent()**](TokensApi.md#revokeTokenCurrent) | **DELETE** /tokens/self | Revoke the current token


## `bulkRevokeTokens()`

```php
bulkRevokeTokens($body)
```

Revoke multiple tokens

Revoke Tokens in bulk format. Users may only revoke their own tokens. Superusers may revoke tokens of others.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = {"data":[{"id":"3krg2uUGZzb2W9Euo4moOY","type":"token"},{"id":"71ZA6hv2FO6tGEQIE203Xj","type":"token"}]}; // object

try {
    $apiInstance->bulkRevokeTokens($body);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->bulkRevokeTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  | [optional]

### Return type

void (empty response body)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/vnd.api+json; ext=bulk`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createToken()`

```php
createToken(): \OpenAPI\Client\Model\ModelTokenCreated
```

Create a token

Create an API token. If two-factor authentication is enabled for your account, review [the instructions](/reference/api/auth/) for including a one-time password in the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->createToken();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->createToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ModelTokenCreated**](../Model/ModelTokenCreated.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTokenCurrent()`

```php
getTokenCurrent(): \OpenAPI\Client\Model\ModelToken
```

Get the current token

Get a single token based on the access_token used in the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTokenCurrent();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->getTokenCurrent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ModelToken**](../Model/ModelToken.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTokensCustomer()`

```php
listTokensCustomer($customer_id): \OpenAPI\Client\Model\ModelToken[]
```

List tokens for a customer

List all tokens belonging to a specific customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_id = 'customer_id_example'; // string

try {
    $result = $apiInstance->listTokensCustomer($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->listTokensCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelToken[]**](../Model/ModelToken.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTokensUser()`

```php
listTokensUser(): \OpenAPI\Client\Model\ModelToken[]
```

List tokens for the authenticated user

List all tokens belonging to the authenticated user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listTokensUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->listTokensUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ModelToken[]**](../Model/ModelToken.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revokeToken()`

```php
revokeToken($token_id)
```

Revoke a token

Revoke a specific token by its id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token_id = 'token_id_example'; // string

try {
    $apiInstance->revokeToken($token_id);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->revokeToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revokeTokenCurrent()`

```php
revokeTokenCurrent()
```

Revoke the current token

Revoke a token that is used to authenticate the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->revokeTokenCurrent();
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->revokeTokenCurrent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
