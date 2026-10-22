# Fastly\Api\AiRuntimeControlVirtualKeysApi


```php
$apiInstance = new Fastly\Api\AiRuntimeControlVirtualKeysApi(
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
[**arcCreateVirtualKey()**](AiRuntimeControlVirtualKeysApi.md#arcCreateVirtualKey) | **POST** /ai-runtime-control/v1/keys | Create a virtual key
[**arcDeleteVirtualKey()**](AiRuntimeControlVirtualKeysApi.md#arcDeleteVirtualKey) | **DELETE** /ai-runtime-control/v1/keys/{key_id} | Delete a virtual key
[**arcGetVirtualKey()**](AiRuntimeControlVirtualKeysApi.md#arcGetVirtualKey) | **GET** /ai-runtime-control/v1/keys/{key_id} | Get a virtual key
[**arcGetVirtualKeyFailover()**](AiRuntimeControlVirtualKeysApi.md#arcGetVirtualKeyFailover) | **GET** /ai-runtime-control/v1/keys/{key_id}/failover | Get a virtual key&#39;s failover policy
[**arcListVirtualKeys()**](AiRuntimeControlVirtualKeysApi.md#arcListVirtualKeys) | **GET** /ai-runtime-control/v1/keys | List virtual keys
[**arcRotateVirtualKey()**](AiRuntimeControlVirtualKeysApi.md#arcRotateVirtualKey) | **POST** /ai-runtime-control/v1/keys/{key_id}/rotate | Rotate a virtual key
[**arcUpdateVirtualKey()**](AiRuntimeControlVirtualKeysApi.md#arcUpdateVirtualKey) | **PATCH** /ai-runtime-control/v1/keys/{key_id} | Update a virtual key
[**arcUpdateVirtualKeyFailover()**](AiRuntimeControlVirtualKeysApi.md#arcUpdateVirtualKeyFailover) | **PUT** /ai-runtime-control/v1/keys/{key_id}/failover | Update a virtual key&#39;s failover policy


## `arcCreateVirtualKey()`

```php
arcCreateVirtualKey($options): \Fastly\Model\ArcCreateVirtualKeyResponse // Create a virtual key
```

Create a new virtual key for authenticating requests through the AI Runtime Control gateway.

### Example
```php
    $options['arc_virtual_key'] = new \Fastly\Model\ArcVirtualKey(); // \Fastly\Model\ArcVirtualKey

try {
    $result = $apiInstance->arcCreateVirtualKey($options);
} catch (Exception $e) {
    echo 'Exception when calling AiRuntimeControlVirtualKeysApi->arcCreateVirtualKey: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**arc_virtual_key** | [**\Fastly\Model\ArcVirtualKey**](../Model/ArcVirtualKey.md) |  |

### Return type

[**\Fastly\Model\ArcCreateVirtualKeyResponse**](../Model/ArcCreateVirtualKeyResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `arcDeleteVirtualKey()`

```php
arcDeleteVirtualKey($options) // Delete a virtual key
```

Delete a virtual key. This also deletes any security configuration associated with the key.

### Example
```php
    $options['key_id'] = 7fVVQb1nZaJgnzCn4B4v3B; // string | The ID of the virtual key.

try {
    $apiInstance->arcDeleteVirtualKey($options);
} catch (Exception $e) {
    echo 'Exception when calling AiRuntimeControlVirtualKeysApi->arcDeleteVirtualKey: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**key_id** | **string** | The ID of the virtual key. |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `arcGetVirtualKey()`

```php
arcGetVirtualKey($options): \Fastly\Model\ArcVirtualKeyResponse // Get a virtual key
```

Retrieve a single virtual key.

### Example
```php
    $options['key_id'] = 7fVVQb1nZaJgnzCn4B4v3B; // string | The ID of the virtual key.

try {
    $result = $apiInstance->arcGetVirtualKey($options);
} catch (Exception $e) {
    echo 'Exception when calling AiRuntimeControlVirtualKeysApi->arcGetVirtualKey: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**key_id** | **string** | The ID of the virtual key. |

### Return type

[**\Fastly\Model\ArcVirtualKeyResponse**](../Model/ArcVirtualKeyResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `arcGetVirtualKeyFailover()`

```php
arcGetVirtualKeyFailover($options): \Fastly\Model\ArcVirtualKeyFailoverResponse // Get a virtual key's failover policy
```

Retrieve the failover policy for a virtual key. A failover policy lists alternate provider connections to retry a request against, and which error conditions trigger a retry.  Failover is a per-account feature. If it isn't enabled on your account, this endpoint returns a 404 response.

### Example
```php
    $options['key_id'] = 7fVVQb1nZaJgnzCn4B4v3B; // string | The ID of the virtual key.

try {
    $result = $apiInstance->arcGetVirtualKeyFailover($options);
} catch (Exception $e) {
    echo 'Exception when calling AiRuntimeControlVirtualKeysApi->arcGetVirtualKeyFailover: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**key_id** | **string** | The ID of the virtual key. |

### Return type

[**\Fastly\Model\ArcVirtualKeyFailoverResponse**](../Model/ArcVirtualKeyFailoverResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `arcListVirtualKeys()`

```php
arcListVirtualKeys($options): \Fastly\Model\ArcVirtualKeysResponse // List virtual keys
```

List the virtual keys belonging to your account.

### Example
```php
    $options['include_deleted'] = false; // bool | Include deleted virtual keys in the results.
$options['search'] = production; // string | Filter results to virtual keys whose name contains this substring.
$options['cursor'] = MTA6MA; // string | Cursor for pagination. Use the `next_cursor` value from a previous response to request the next page of results, or the `prev_cursor` value to request the previous page.
$options['limit'] = 10; // int | Limit how many results are returned.
$options['sort'] = created_at; // string | Sort field. Prefix with `-` for descending order (e.g., `sort=-created_at`).

try {
    $result = $apiInstance->arcListVirtualKeys($options);
} catch (Exception $e) {
    echo 'Exception when calling AiRuntimeControlVirtualKeysApi->arcListVirtualKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**include_deleted** | **bool** | Include deleted virtual keys in the results. | [optional] [defaults to false]
**search** | **string** | Filter results to virtual keys whose name contains this substring. | [optional]
**cursor** | **string** | Cursor for pagination. Use the `next_cursor` value from a previous response to request the next page of results, or the `prev_cursor` value to request the previous page. | [optional]
**limit** | **int** | Limit how many results are returned. | [optional] [defaults to 10]
**sort** | **string** | Sort field. Prefix with `-` for descending order (e.g., `sort&#x3D;-created_at`). | [optional] [one of: 'created_at', '-created_at', 'updated_at', '-updated_at', 'name', '-name', 'expires_at', '-expires_at', 'user_name', '-user_name', 'last_used_at', '-last_used_at'] [defaults to 'created_at']

### Return type

[**\Fastly\Model\ArcVirtualKeysResponse**](../Model/ArcVirtualKeysResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `arcRotateVirtualKey()`

```php
arcRotateVirtualKey($options): \Fastly\Model\ArcRotateVirtualKeyResponse // Rotate a virtual key
```

Issue a new access token for a virtual key, invalidating the previous one.

### Example
```php
    $options['key_id'] = 7fVVQb1nZaJgnzCn4B4v3B; // string | The ID of the virtual key.
$options['arc_rotate_virtual_key_request'] = new \Fastly\Model\ArcRotateVirtualKeyRequest(); // \Fastly\Model\ArcRotateVirtualKeyRequest

try {
    $result = $apiInstance->arcRotateVirtualKey($options);
} catch (Exception $e) {
    echo 'Exception when calling AiRuntimeControlVirtualKeysApi->arcRotateVirtualKey: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**key_id** | **string** | The ID of the virtual key. |
**arc_rotate_virtual_key_request** | [**\Fastly\Model\ArcRotateVirtualKeyRequest**](../Model/ArcRotateVirtualKeyRequest.md) |  | [optional]

### Return type

[**\Fastly\Model\ArcRotateVirtualKeyResponse**](../Model/ArcRotateVirtualKeyResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `arcUpdateVirtualKey()`

```php
arcUpdateVirtualKey($options): \Fastly\Model\ArcUpdateVirtualKeyResponse // Update a virtual key
```

Update the attributes of a virtual key. Only the fields you include are changed.

### Example
```php
    $options['key_id'] = 7fVVQb1nZaJgnzCn4B4v3B; // string | The ID of the virtual key.
$options['arc_update_virtual_key_request'] = new \Fastly\Model\ArcUpdateVirtualKeyRequest(); // \Fastly\Model\ArcUpdateVirtualKeyRequest

try {
    $result = $apiInstance->arcUpdateVirtualKey($options);
} catch (Exception $e) {
    echo 'Exception when calling AiRuntimeControlVirtualKeysApi->arcUpdateVirtualKey: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**key_id** | **string** | The ID of the virtual key. |
**arc_update_virtual_key_request** | [**\Fastly\Model\ArcUpdateVirtualKeyRequest**](../Model/ArcUpdateVirtualKeyRequest.md) |  |

### Return type

[**\Fastly\Model\ArcUpdateVirtualKeyResponse**](../Model/ArcUpdateVirtualKeyResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `arcUpdateVirtualKeyFailover()`

```php
arcUpdateVirtualKeyFailover($options): \Fastly\Model\ArcVirtualKeyFailoverResponse // Update a virtual key's failover policy
```

Replace the failover policy for a virtual key.  Failover is a per-account feature. If it isn't enabled on your account, this endpoint returns a 404 response.

### Example
```php
    $options['key_id'] = 7fVVQb1nZaJgnzCn4B4v3B; // string | The ID of the virtual key.
$options['arc_virtual_key_failover_request'] = new \Fastly\Model\ArcVirtualKeyFailoverRequest(); // \Fastly\Model\ArcVirtualKeyFailoverRequest

try {
    $result = $apiInstance->arcUpdateVirtualKeyFailover($options);
} catch (Exception $e) {
    echo 'Exception when calling AiRuntimeControlVirtualKeysApi->arcUpdateVirtualKeyFailover: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**key_id** | **string** | The ID of the virtual key. |
**arc_virtual_key_failover_request** | [**\Fastly\Model\ArcVirtualKeyFailoverRequest**](../Model/ArcVirtualKeyFailoverRequest.md) |  |

### Return type

[**\Fastly\Model\ArcVirtualKeyFailoverResponse**](../Model/ArcVirtualKeyFailoverResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
