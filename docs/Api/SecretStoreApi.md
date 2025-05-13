# Fastly\Api\SecretStoreApi


```php
$apiInstance = new Fastly\Api\SecretStoreApi(
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
[**clientKey()**](SecretStoreApi.md#clientKey) | **POST** /resources/stores/secret/client-key | Create new client key
[**createSecretStore()**](SecretStoreApi.md#createSecretStore) | **POST** /resources/stores/secret | Create new secret store
[**deleteSecretStore()**](SecretStoreApi.md#deleteSecretStore) | **DELETE** /resources/stores/secret/{store_id} | Delete secret store
[**getSecretStore()**](SecretStoreApi.md#getSecretStore) | **GET** /resources/stores/secret/{store_id} | Get secret store by ID
[**getSecretStores()**](SecretStoreApi.md#getSecretStores) | **GET** /resources/stores/secret | Get all secret stores
[**signingKey()**](SecretStoreApi.md#signingKey) | **GET** /resources/stores/secret/signing-key | Get public key


## `clientKey()`

```php
clientKey($options): \Fastly\Model\ClientKey // Create new client key
```

Create a new client key for encrypting secrets locally before uploading.

### Example
```php
    
try {
    $result = $apiInstance->clientKey($options);
} catch (Exception $e) {
    echo 'Exception when calling SecretStoreApi->clientKey: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\ClientKey**](../Model/ClientKey.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createSecretStore()`

```php
createSecretStore($options): \Fastly\Model\SecretStoreResponse // Create new secret store
```

Create a new secret store.

### Example
```php
    $options['secret_store'] = new \Fastly\Model\SecretStore(); // \Fastly\Model\SecretStore

try {
    $result = $apiInstance->createSecretStore($options);
} catch (Exception $e) {
    echo 'Exception when calling SecretStoreApi->createSecretStore: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**secret_store** | [**\Fastly\Model\SecretStore**](../Model/SecretStore.md) |  | [optional]

### Return type

[**\Fastly\Model\SecretStoreResponse**](../Model/SecretStoreResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteSecretStore()`

```php
deleteSecretStore($options) // Delete secret store
```

Delete a secret store and all of its contents.

### Example
```php
    $options['store_id'] = 'store_id_example'; // string

try {
    $apiInstance->deleteSecretStore($options);
} catch (Exception $e) {
    echo 'Exception when calling SecretStoreApi->deleteSecretStore: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**store_id** | **string** |  |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getSecretStore()`

```php
getSecretStore($options): \Fastly\Model\SecretStoreResponse // Get secret store by ID
```

Get a secret store by ID.

### Example
```php
    $options['store_id'] = 'store_id_example'; // string

try {
    $result = $apiInstance->getSecretStore($options);
} catch (Exception $e) {
    echo 'Exception when calling SecretStoreApi->getSecretStore: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**store_id** | **string** |  |

### Return type

[**\Fastly\Model\SecretStoreResponse**](../Model/SecretStoreResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getSecretStores()`

```php
getSecretStores($options): \Fastly\Model\InlineResponse2007 // Get all secret stores
```

Get all secret stores.

### Example
```php
    $options['cursor'] = 'cursor_example'; // string | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty.
$options['limit'] = '100'; // string | Number of results per page. The maximum is 200.
$options['name'] = 'name_example'; // string | Returns a one-element array containing the details for the named secret store.

try {
    $result = $apiInstance->getSecretStores($options);
} catch (Exception $e) {
    echo 'Exception when calling SecretStoreApi->getSecretStores: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**cursor** | **string** | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty. | [optional]
**limit** | **string** | Number of results per page. The maximum is 200. | [optional] [defaults to '100']
**name** | **string** | Returns a one-element array containing the details for the named secret store. | [optional]

### Return type

[**\Fastly\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `signingKey()`

```php
signingKey($options): \Fastly\Model\SigningKey // Get public key
```

Get the public key used for signing client keys.

### Example
```php
    
try {
    $result = $apiInstance->signingKey($options);
} catch (Exception $e) {
    echo 'Exception when calling SecretStoreApi->signingKey: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\SigningKey**](../Model/SigningKey.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
