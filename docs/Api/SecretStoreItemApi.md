# Fastly\Api\SecretStoreItemApi


```php
$apiInstance = new Fastly\Api\SecretStoreItemApi(
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
[**createSecret()**](SecretStoreItemApi.md#createSecret) | **POST** /resources/stores/secret/{store_id}/secrets | Create a new secret in a store.
[**deleteSecret()**](SecretStoreItemApi.md#deleteSecret) | **DELETE** /resources/stores/secret/{store_id}/secrets/{secret_name} | Delete a secret from a store.
[**getSecret()**](SecretStoreItemApi.md#getSecret) | **GET** /resources/stores/secret/{store_id}/secrets/{secret_name} | Get secret metadata.
[**getSecrets()**](SecretStoreItemApi.md#getSecrets) | **GET** /resources/stores/secret/{store_id}/secrets | List secrets within a store.
[**mustRecreateSecret()**](SecretStoreItemApi.md#mustRecreateSecret) | **PATCH** /resources/stores/secret/{store_id}/secrets | Recreate a secret in a store.
[**recreateSecret()**](SecretStoreItemApi.md#recreateSecret) | **PUT** /resources/stores/secret/{store_id}/secrets | Create or recreate a secret in a store.


## `createSecret()`

```php
createSecret($options): \Fastly\Model\SecretResponse // Create a new secret in a store.
```

Create a new secret in a store. Returns an error if a secret already exists with the same name. See `PUT` and `PATCH` methods for ways to recreate an existing secret.  The `secret` field must be Base64-encoded because a secret can contain binary data. In the example below, the unencoded secret is \"Hello, world!\"

### Example
```php
    $options['store_id'] = 'store_id_example'; // string
$options['secret'] = new \Fastly\Model\Secret(); // \Fastly\Model\Secret

try {
    $result = $apiInstance->createSecret($options);
} catch (Exception $e) {
    echo 'Exception when calling SecretStoreItemApi->createSecret: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**store_id** | **string** |  |
**secret** | [**\Fastly\Model\Secret**](../Model/Secret.md) |  | [optional]

### Return type

[**\Fastly\Model\SecretResponse**](../Model/SecretResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteSecret()`

```php
deleteSecret($options) // Delete a secret from a store.
```

Delete a secret from a store by name.

### Example
```php
    $options['store_id'] = 'store_id_example'; // string
$options['secret_name'] = 'secret_name_example'; // string

try {
    $apiInstance->deleteSecret($options);
} catch (Exception $e) {
    echo 'Exception when calling SecretStoreItemApi->deleteSecret: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**store_id** | **string** |  |
**secret_name** | **string** |  |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getSecret()`

```php
getSecret($options): \Fastly\Model\SecretResponse // Get secret metadata.
```

Get metadata about a secret by name.

### Example
```php
    $options['store_id'] = 'store_id_example'; // string
$options['secret_name'] = 'secret_name_example'; // string

try {
    $result = $apiInstance->getSecret($options);
} catch (Exception $e) {
    echo 'Exception when calling SecretStoreItemApi->getSecret: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**store_id** | **string** |  |
**secret_name** | **string** |  |

### Return type

[**\Fastly\Model\SecretResponse**](../Model/SecretResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getSecrets()`

```php
getSecrets($options): \Fastly\Model\InlineResponse2008 // List secrets within a store.
```

List all secrets within a store.

### Example
```php
    $options['store_id'] = 'store_id_example'; // string
$options['cursor'] = 'cursor_example'; // string | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty.
$options['limit'] = '100'; // string | Number of results per page. The maximum is 200.

try {
    $result = $apiInstance->getSecrets($options);
} catch (Exception $e) {
    echo 'Exception when calling SecretStoreItemApi->getSecrets: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**store_id** | **string** |  |
**cursor** | **string** | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty. | [optional]
**limit** | **string** | Number of results per page. The maximum is 200. | [optional] [defaults to '100']

### Return type

[**\Fastly\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `mustRecreateSecret()`

```php
mustRecreateSecret($options): \Fastly\Model\SecretResponse // Recreate a secret in a store.
```

Recreate a secret based on the secret's name. Returns an error if there is no existing secret with the same name.  The `secret` field must be Base64-encoded because a secret can contain binary data. In the example below, the unencoded secret is \"Hello, world!\"

### Example
```php
    $options['store_id'] = 'store_id_example'; // string
$options['secret'] = new \Fastly\Model\Secret(); // \Fastly\Model\Secret

try {
    $result = $apiInstance->mustRecreateSecret($options);
} catch (Exception $e) {
    echo 'Exception when calling SecretStoreItemApi->mustRecreateSecret: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**store_id** | **string** |  |
**secret** | [**\Fastly\Model\Secret**](../Model/Secret.md) |  | [optional]

### Return type

[**\Fastly\Model\SecretResponse**](../Model/SecretResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `recreateSecret()`

```php
recreateSecret($options): \Fastly\Model\SecretResponse // Create or recreate a secret in a store.
```

Create or recreate a secret based on the secret's name. The response object's `recreated` field will be true if the secret was recreated.  The `secret` field must be Base64-encoded because a secret can contain binary data. In the example below, the unencoded secret is \"Hello, world!\"

### Example
```php
    $options['store_id'] = 'store_id_example'; // string
$options['secret'] = new \Fastly\Model\Secret(); // \Fastly\Model\Secret

try {
    $result = $apiInstance->recreateSecret($options);
} catch (Exception $e) {
    echo 'Exception when calling SecretStoreItemApi->recreateSecret: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**store_id** | **string** |  |
**secret** | [**\Fastly\Model\Secret**](../Model/Secret.md) |  | [optional]

### Return type

[**\Fastly\Model\SecretResponse**](../Model/SecretResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
