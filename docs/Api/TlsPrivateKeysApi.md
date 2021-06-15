# OpenAPI\Client\TlsPrivateKeysApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTlsKey()**](TlsPrivateKeysApi.md#createTlsKey) | **POST** /tls/private_keys | Create a TLS private key
[**deleteTlsKey()**](TlsPrivateKeysApi.md#deleteTlsKey) | **DELETE** /tls/private_keys/{tls_private_key_id} | Delete a TLS private key
[**getTlsKey()**](TlsPrivateKeysApi.md#getTlsKey) | **GET** /tls/private_keys/{tls_private_key_id} | Get a TLS private key
[**listTlsKeys()**](TlsPrivateKeysApi.md#listTlsKeys) | **GET** /tls/private_keys | List TLS private keys


## `createTlsKey()`

```php
createTlsKey($body): object
```

Create a TLS private key

Create a TLS private key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TlsPrivateKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = {"data":{"type":"tls_private_key","attributes":{"key":"-----BEGIN PRIVATE KEY-----\n...\n-----END PRIVATE KEY-----\n","name":"My private key"}}}; // object

try {
    $result = $apiInstance->createTlsKey($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TlsPrivateKeysApi->createTlsKey: ', $e->getMessage(), PHP_EOL;
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

## `deleteTlsKey()`

```php
deleteTlsKey($tls_private_key_id)
```

Delete a TLS private key

Destroy a TLS private key. Only private keys not already matched to any certificates can be deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TlsPrivateKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tls_private_key_id = 'tls_private_key_id_example'; // string

try {
    $apiInstance->deleteTlsKey($tls_private_key_id);
} catch (Exception $e) {
    echo 'Exception when calling TlsPrivateKeysApi->deleteTlsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tls_private_key_id** | **string**|  |

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

## `getTlsKey()`

```php
getTlsKey($tls_private_key_id): object
```

Get a TLS private key

Show a TLS private key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TlsPrivateKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tls_private_key_id = 'tls_private_key_id_example'; // string

try {
    $result = $apiInstance->getTlsKey($tls_private_key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TlsPrivateKeysApi->getTlsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tls_private_key_id** | **string**|  |

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

## `listTlsKeys()`

```php
listTlsKeys($filter_in_use, $page_number, $page_size): object
```

List TLS private keys

List all TLS private keys.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TlsPrivateKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_in_use = 'filter_in_use_example'; // string | Limit the returned keys to those without any matching TLS certificates. The only valid value is false.
$page_number = 56; // int | Current page.
$page_size = 20; // int | Number of records per page.

try {
    $result = $apiInstance->listTlsKeys($filter_in_use, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TlsPrivateKeysApi->listTlsKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_in_use** | **string**| Limit the returned keys to those without any matching TLS certificates. The only valid value is false. | [optional]
 **page_number** | **int**| Current page. | [optional]
 **page_size** | **int**| Number of records per page. | [optional] [default to 20]

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
