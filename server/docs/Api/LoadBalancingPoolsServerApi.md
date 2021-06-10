# OpenAPI\Client\LoadBalancingPoolsServerApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPoolServer()**](LoadBalancingPoolsServerApi.md#createPoolServer) | **POST** /service/{service_id}/pool/{pool_id}/server | Add a server to a pool
[**deletePoolServer()**](LoadBalancingPoolsServerApi.md#deletePoolServer) | **DELETE** /service/{service_id}/pool/{pool_id}/server/{server_id} | Delete a server from a pool
[**getPoolServer()**](LoadBalancingPoolsServerApi.md#getPoolServer) | **GET** /service/{service_id}/pool/{pool_id}/server/{server_id} | Get a pool server
[**listPoolServers()**](LoadBalancingPoolsServerApi.md#listPoolServers) | **GET** /service/{service_id}/pool/{pool_id}/servers | List servers in a pool
[**updatePoolServer()**](LoadBalancingPoolsServerApi.md#updatePoolServer) | **PUT** /service/{service_id}/pool/{pool_id}/server/{server_id} | Update a server


## `createPoolServer()`

```php
createPoolServer($service_id, $pool_id): \OpenAPI\Client\Model\InlineResponse200
```

Add a server to a pool

Creates a single server for a particular service and pool.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoadBalancingPoolsServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$pool_id = 2Yd1WfiCBPENLloXfXmlO; // string

try {
    $result = $apiInstance->createPoolServer($service_id, $pool_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoadBalancingPoolsServerApi->createPoolServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **pool_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[token_engineer](../../README.md#token_engineer)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePoolServer()`

```php
deletePoolServer($service_id, $pool_id, $server_id): object
```

Delete a server from a pool

Deletes a single server for a particular service and pool.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoadBalancingPoolsServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$pool_id = 2Yd1WfiCBPENLloXfXmlO; // string
$server_id = 6kEuoknxiaDBCLiAjKqyXq; // string

try {
    $result = $apiInstance->deletePoolServer($service_id, $pool_id, $server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoadBalancingPoolsServerApi->deletePoolServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **pool_id** | **string**|  |
 **server_id** | **string**|  |

### Return type

**object**

### Authorization

[token_engineer](../../README.md#token_engineer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPoolServer()`

```php
getPoolServer($service_id, $pool_id, $server_id): \OpenAPI\Client\Model\InlineResponse200
```

Get a pool server

Gets a single server for a particular service and pool.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoadBalancingPoolsServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$pool_id = 2Yd1WfiCBPENLloXfXmlO; // string
$server_id = 6kEuoknxiaDBCLiAjKqyXq; // string

try {
    $result = $apiInstance->getPoolServer($service_id, $pool_id, $server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoadBalancingPoolsServerApi->getPoolServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **pool_id** | **string**|  |
 **server_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[token_engineer](../../README.md#token_engineer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPoolServers()`

```php
listPoolServers($service_id, $pool_id): \OpenAPI\Client\Model\InlineResponse200[]
```

List servers in a pool

Lists all servers for a particular service and pool.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoadBalancingPoolsServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$pool_id = 2Yd1WfiCBPENLloXfXmlO; // string

try {
    $result = $apiInstance->listPoolServers($service_id, $pool_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoadBalancingPoolsServerApi->listPoolServers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **pool_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse200[]**](../Model/InlineResponse200.md)

### Authorization

[token_engineer](../../README.md#token_engineer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePoolServer()`

```php
updatePoolServer($service_id, $pool_id, $server_id): \OpenAPI\Client\Model\InlineResponse200
```

Update a server

Updates a single server for a particular service and pool.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoadBalancingPoolsServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$pool_id = 2Yd1WfiCBPENLloXfXmlO; // string
$server_id = 6kEuoknxiaDBCLiAjKqyXq; // string

try {
    $result = $apiInstance->updatePoolServer($service_id, $pool_id, $server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoadBalancingPoolsServerApi->updatePoolServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **pool_id** | **string**|  |
 **server_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[token_engineer](../../README.md#token_engineer)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
