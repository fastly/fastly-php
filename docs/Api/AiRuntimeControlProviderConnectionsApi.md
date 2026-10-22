# Fastly\Api\AiRuntimeControlProviderConnectionsApi


```php
$apiInstance = new Fastly\Api\AiRuntimeControlProviderConnectionsApi(
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
[**arcCreateProviderConnection()**](AiRuntimeControlProviderConnectionsApi.md#arcCreateProviderConnection) | **POST** /ai-runtime-control/v1/provider-connections | Create a provider connection
[**arcDeleteProviderConnection()**](AiRuntimeControlProviderConnectionsApi.md#arcDeleteProviderConnection) | **DELETE** /ai-runtime-control/v1/provider-connections/{id} | Delete a provider connection
[**arcGetProviderConnection()**](AiRuntimeControlProviderConnectionsApi.md#arcGetProviderConnection) | **GET** /ai-runtime-control/v1/provider-connections/{id} | Get a provider connection
[**arcListProviderConnections()**](AiRuntimeControlProviderConnectionsApi.md#arcListProviderConnections) | **GET** /ai-runtime-control/v1/provider-connections | List provider connections
[**arcUpdateProviderConnection()**](AiRuntimeControlProviderConnectionsApi.md#arcUpdateProviderConnection) | **PATCH** /ai-runtime-control/v1/provider-connections/{id} | Update a provider connection


## `arcCreateProviderConnection()`

```php
arcCreateProviderConnection($options): \Fastly\Model\ArcProviderConnectionResponse // Create a provider connection
```

Create a provider connection. Set `auth_type` to `api-key` (the default) to connect with a provider's own API key, or to `aws-iam` to connect to Amazon Bedrock using an AWS IAM role.  Accounts are limited to 25 provider connections. Creating a 26th connection returns a 409 response.

### Example
```php
    $options['arc_provider_connection_request'] = new \Fastly\Model\ArcProviderConnectionRequest(); // \Fastly\Model\ArcProviderConnectionRequest

try {
    $result = $apiInstance->arcCreateProviderConnection($options);
} catch (Exception $e) {
    echo 'Exception when calling AiRuntimeControlProviderConnectionsApi->arcCreateProviderConnection: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**arc_provider_connection_request** | [**\Fastly\Model\ArcProviderConnectionRequest**](../Model/ArcProviderConnectionRequest.md) |  |

### Return type

[**\Fastly\Model\ArcProviderConnectionResponse**](../Model/ArcProviderConnectionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `arcDeleteProviderConnection()`

```php
arcDeleteProviderConnection($options) // Delete a provider connection
```

Delete a provider connection. Returns a 409 response if the connection is still referenced by a virtual key's failover policy.

### Example
```php
    $options['id'] = pTfnUUBcU1yv8SoRJn5PZ2; // string | The ID of the provider connection.

try {
    $apiInstance->arcDeleteProviderConnection($options);
} catch (Exception $e) {
    echo 'Exception when calling AiRuntimeControlProviderConnectionsApi->arcDeleteProviderConnection: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**id** | **string** | The ID of the provider connection. |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `arcGetProviderConnection()`

```php
arcGetProviderConnection($options): \Fastly\Model\ArcGetProviderConnectionResponse // Get a provider connection
```

Retrieve a single provider connection.

### Example
```php
    $options['id'] = pTfnUUBcU1yv8SoRJn5PZ2; // string | The ID of the provider connection.

try {
    $result = $apiInstance->arcGetProviderConnection($options);
} catch (Exception $e) {
    echo 'Exception when calling AiRuntimeControlProviderConnectionsApi->arcGetProviderConnection: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**id** | **string** | The ID of the provider connection. |

### Return type

[**\Fastly\Model\ArcGetProviderConnectionResponse**](../Model/ArcGetProviderConnectionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `arcListProviderConnections()`

```php
arcListProviderConnections($options): \Fastly\Model\ArcProviderConnectionsResponse // List provider connections
```

List the provider connections belonging to your account.

### Example
```php
    $options['include_deleted'] = false; // bool | Include deleted provider connections in the results. Deleted connections have a `deleted_at` value.
$options['sort'] = created_at; // string | Sort field. Prefix with `-` for descending order (e.g., `sort=-name`).

try {
    $result = $apiInstance->arcListProviderConnections($options);
} catch (Exception $e) {
    echo 'Exception when calling AiRuntimeControlProviderConnectionsApi->arcListProviderConnections: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**include_deleted** | **bool** | Include deleted provider connections in the results. Deleted connections have a `deleted_at` value. | [optional] [defaults to false]
**sort** | **string** | Sort field. Prefix with `-` for descending order (e.g., `sort&#x3D;-name`). | [optional] [one of: 'created_at', '-created_at', 'updated_at', '-updated_at', 'name', '-name'] [defaults to 'created_at']

### Return type

[**\Fastly\Model\ArcProviderConnectionsResponse**](../Model/ArcProviderConnectionsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `arcUpdateProviderConnection()`

```php
arcUpdateProviderConnection($options): \Fastly\Model\ArcProviderConnectionResponse // Update a provider connection
```

Update the attributes of a provider connection. Only the fields you include are changed. Which fields you can set depends on the connection's existing `auth_type`: `base_url` and `api_key` apply only to `api-key` connections, and `customer_role_arn` and `region` apply only to `aws-iam` connections. `auth_type` itself cannot be changed.

### Example
```php
    $options['id'] = pTfnUUBcU1yv8SoRJn5PZ2; // string | The ID of the provider connection.
$options['arc_update_provider_connection_request'] = new \Fastly\Model\ArcUpdateProviderConnectionRequest(); // \Fastly\Model\ArcUpdateProviderConnectionRequest

try {
    $result = $apiInstance->arcUpdateProviderConnection($options);
} catch (Exception $e) {
    echo 'Exception when calling AiRuntimeControlProviderConnectionsApi->arcUpdateProviderConnection: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**id** | **string** | The ID of the provider connection. |
**arc_update_provider_connection_request** | [**\Fastly\Model\ArcUpdateProviderConnectionRequest**](../Model/ArcUpdateProviderConnectionRequest.md) |  |

### Return type

[**\Fastly\Model\ArcProviderConnectionResponse**](../Model/ArcProviderConnectionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
