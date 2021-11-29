# Fastly\Api\ServerApi


```php
$apiInstance = new Fastly\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**createPoolServer()**](ServerApi.md#createPoolServer) | **POST** /service/{service_id}/pool/{pool_id}/server | Add a server to a pool
[**deletePoolServer()**](ServerApi.md#deletePoolServer) | **DELETE** /service/{service_id}/pool/{pool_id}/server/{server_id} | Delete a server from a pool
[**getPoolServer()**](ServerApi.md#getPoolServer) | **GET** /service/{service_id}/pool/{pool_id}/server/{server_id} | Get a pool server
[**listPoolServers()**](ServerApi.md#listPoolServers) | **GET** /service/{service_id}/pool/{pool_id}/servers | List servers in a pool
[**updatePoolServer()**](ServerApi.md#updatePoolServer) | **PUT** /service/{service_id}/pool/{pool_id}/server/{server_id} | Update a server


## `createPoolServer()`

```php
createPoolServer($options): \Fastly\Model\ServerResponse // Add a server to a pool
```

Creates a single server for a particular service and pool.

### Example
```php
try {
    $result = $apiInstance->createPoolServer($options);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->createPoolServer: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**pool_id** | **string** | Alphanumeric string identifying a Pool. |
**weight** | **int** | Weight (`1-100`) used to load balance this server against others. | [optional] [defaults to 100]
**max_conn** | **int** | Maximum number of connections. If the value is `0`, it inherits the value from pool&#39;s `max_conn_default`. | [optional] [defaults to 0]
**port** | **int** | Port number. Setting port `443` does not force TLS. Set `use_tls` in pool to force TLS. | [optional] [defaults to 80]
**address** | **string** | A hostname, IPv4, or IPv6 address for the server. Required. | [optional]
**comment** | **string** | A freeform descriptive note. | [optional]
**disabled** | **bool** | Allows servers to be enabled and disabled in a pool. | [optional] [defaults to false]
**override_host** | **string** | The hostname to override the Host header. Defaults to `null` meaning no override of the Host header if not set. This setting can also be added to a Pool definition. However, the server setting will override the Pool setting. | [optional] [defaults to 'null']

### Return type

[**\Fastly\Model\ServerResponse**](../Model/ServerResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deletePoolServer()`

```php
deletePoolServer($options): object // Delete a server from a pool
```

Deletes a single server for a particular service and pool.

### Example
```php
try {
    $result = $apiInstance->deletePoolServer($options);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->deletePoolServer: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**pool_id** | **string** | Alphanumeric string identifying a Pool. |
**server_id** | **string** | Alphanumeric string identifying a Server. |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getPoolServer()`

```php
getPoolServer($options): \Fastly\Model\ServerResponse // Get a pool server
```

Gets a single server for a particular service and pool.

### Example
```php
try {
    $result = $apiInstance->getPoolServer($options);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getPoolServer: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**pool_id** | **string** | Alphanumeric string identifying a Pool. |
**server_id** | **string** | Alphanumeric string identifying a Server. |

### Return type

[**\Fastly\Model\ServerResponse**](../Model/ServerResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listPoolServers()`

```php
listPoolServers($options): \Fastly\Model\ServerResponse[] // List servers in a pool
```

Lists all servers for a particular service and pool.

### Example
```php
try {
    $result = $apiInstance->listPoolServers($options);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->listPoolServers: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**pool_id** | **string** | Alphanumeric string identifying a Pool. |

### Return type

[**\Fastly\Model\ServerResponse[]**](../Model/ServerResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updatePoolServer()`

```php
updatePoolServer($options): \Fastly\Model\ServerResponse // Update a server
```

Updates a single server for a particular service and pool.

### Example
```php
try {
    $result = $apiInstance->updatePoolServer($options);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->updatePoolServer: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**pool_id** | **string** | Alphanumeric string identifying a Pool. |
**server_id** | **string** | Alphanumeric string identifying a Server. |
**weight** | **int** | Weight (`1-100`) used to load balance this server against others. | [optional] [defaults to 100]
**max_conn** | **int** | Maximum number of connections. If the value is `0`, it inherits the value from pool&#39;s `max_conn_default`. | [optional] [defaults to 0]
**port** | **int** | Port number. Setting port `443` does not force TLS. Set `use_tls` in pool to force TLS. | [optional] [defaults to 80]
**address** | **string** | A hostname, IPv4, or IPv6 address for the server. Required. | [optional]
**comment** | **string** | A freeform descriptive note. | [optional]
**disabled** | **bool** | Allows servers to be enabled and disabled in a pool. | [optional] [defaults to false]
**override_host** | **string** | The hostname to override the Host header. Defaults to `null` meaning no override of the Host header if not set. This setting can also be added to a Pool definition. However, the server setting will override the Pool setting. | [optional] [defaults to 'null']

### Return type

[**\Fastly\Model\ServerResponse**](../Model/ServerResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
