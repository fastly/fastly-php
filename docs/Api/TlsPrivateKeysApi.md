# Fastly\Api\TlsPrivateKeysApi


```php
$apiInstance = new Fastly\Api\TlsPrivateKeysApi(
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
[**createTlsKey()**](TlsPrivateKeysApi.md#createTlsKey) | **POST** /tls/private_keys | Create a TLS private key
[**deleteTlsKey()**](TlsPrivateKeysApi.md#deleteTlsKey) | **DELETE** /tls/private_keys/{tls_private_key_id} | Delete a TLS private key
[**getTlsKey()**](TlsPrivateKeysApi.md#getTlsKey) | **GET** /tls/private_keys/{tls_private_key_id} | Get a TLS private key
[**listTlsKeys()**](TlsPrivateKeysApi.md#listTlsKeys) | **GET** /tls/private_keys | List TLS private keys


## `createTlsKey()`

```php
createTlsKey($options): \Fastly\Model\TlsPrivateKeyResponse // Create a TLS private key
```

Create a TLS private key.

### Example
```php
    $options['tls_private_key'] = {"data":{"type":"tls_private_key","attributes":{"key":"-----BEGIN PRIVATE KEY-----\n...\n-----END PRIVATE KEY-----\n","name":"My private key"}}}; // \Fastly\Model\TlsPrivateKey

try {
    $result = $apiInstance->createTlsKey($options);
} catch (Exception $e) {
    echo 'Exception when calling TlsPrivateKeysApi->createTlsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**tls_private_key** | [**\Fastly\Model\TlsPrivateKey**](../Model/TlsPrivateKey.md) |  | [optional]

### Return type

[**\Fastly\Model\TlsPrivateKeyResponse**](../Model/TlsPrivateKeyResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteTlsKey()`

```php
deleteTlsKey($options) // Delete a TLS private key
```

Destroy a TLS private key. Only private keys not already matched to any certificates can be deleted.

### Example
```php
    $options['tls_private_key_id'] = 'tls_private_key_id_example'; // string | Alphanumeric string identifying a private Key.

try {
    $apiInstance->deleteTlsKey($options);
} catch (Exception $e) {
    echo 'Exception when calling TlsPrivateKeysApi->deleteTlsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**tls_private_key_id** | **string** | Alphanumeric string identifying a private Key. |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getTlsKey()`

```php
getTlsKey($options): \Fastly\Model\TlsPrivateKeyResponse // Get a TLS private key
```

Show a TLS private key.

### Example
```php
    $options['tls_private_key_id'] = 'tls_private_key_id_example'; // string | Alphanumeric string identifying a private Key.

try {
    $result = $apiInstance->getTlsKey($options);
} catch (Exception $e) {
    echo 'Exception when calling TlsPrivateKeysApi->getTlsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**tls_private_key_id** | **string** | Alphanumeric string identifying a private Key. |

### Return type

[**\Fastly\Model\TlsPrivateKeyResponse**](../Model/TlsPrivateKeyResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listTlsKeys()`

```php
listTlsKeys($options): \Fastly\Model\TlsPrivateKeysResponse // List TLS private keys
```

List all TLS private keys.

### Example
```php
    $options['filter_in_use'] = 'filter_in_use_example'; // string | Limit the returned keys to those without any matching TLS certificates. The only valid value is false.
$options['page_number'] = 1; // int | Current page.
$options['page_size'] = 20; // int | Number of records per page.

try {
    $result = $apiInstance->listTlsKeys($options);
} catch (Exception $e) {
    echo 'Exception when calling TlsPrivateKeysApi->listTlsKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**filter_in_use** | **string** | Limit the returned keys to those without any matching TLS certificates. The only valid value is false. | [optional]
**page_number** | **int** | Current page. | [optional]
**page_size** | **int** | Number of records per page. | [optional] [defaults to 20]

### Return type

[**\Fastly\Model\TlsPrivateKeysResponse**](../Model/TlsPrivateKeysResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
