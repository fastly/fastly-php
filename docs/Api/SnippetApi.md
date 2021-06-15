# OpenAPI\Client\SnippetApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSnippet()**](SnippetApi.md#createSnippet) | **POST** /service/{service_id}/version/{version_id}/snippet | Create a snippet
[**deleteSnippet()**](SnippetApi.md#deleteSnippet) | **DELETE** /service/{service_id}/version/{version_id}/snippet/{snippet_name} | Delete a snippet
[**getSnippet()**](SnippetApi.md#getSnippet) | **GET** /service/{service_id}/version/{version_id}/snippet/{snippet_name} | Get a versioned snippet
[**getSnippetDynamic()**](SnippetApi.md#getSnippetDynamic) | **GET** /service/{service_id}/snippet/{snippet_id} | Get a dynamic snippet
[**listSnippets()**](SnippetApi.md#listSnippets) | **GET** /service/{service_id}/version/{version_id}/snippet | List snippets
[**updateSnippet()**](SnippetApi.md#updateSnippet) | **PUT** /service/{service_id}/version/{version_id}/snippet/{snippet_name} | Update a versioned snippet
[**updateSnippetDynamic()**](SnippetApi.md#updateSnippetDynamic) | **PUT** /service/{service_id}/snippet/{snippet_id} | Update a dynamic snippet


## `createSnippet()`

```php
createSnippet($service_id, $version_id): \OpenAPI\Client\Model\ModelSnippet
```

Create a snippet

Create a snippet for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SnippetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int

try {
    $result = $apiInstance->createSnippet($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetApi->createSnippet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ModelSnippet**](../Model/ModelSnippet.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSnippet()`

```php
deleteSnippet($service_id, $version_id, $snippet_name): object
```

Delete a snippet

Delete a specific snippet for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SnippetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$snippet_name = 'snippet_name_example'; // string

try {
    $result = $apiInstance->deleteSnippet($service_id, $version_id, $snippet_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetApi->deleteSnippet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **snippet_name** | **string**|  |

### Return type

**object**

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSnippet()`

```php
getSnippet($service_id, $version_id, $snippet_name): \OpenAPI\Client\Model\ModelSnippet
```

Get a versioned snippet

Get a single snippet for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SnippetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$snippet_name = 'snippet_name_example'; // string

try {
    $result = $apiInstance->getSnippet($service_id, $version_id, $snippet_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetApi->getSnippet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **snippet_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelSnippet**](../Model/ModelSnippet.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSnippetDynamic()`

```php
getSnippetDynamic($service_id, $snippet_id): \OpenAPI\Client\Model\ModelSnippet
```

Get a dynamic snippet

Get a single dynamic snippet for a particular service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SnippetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$snippet_id = 'snippet_id_example'; // string

try {
    $result = $apiInstance->getSnippetDynamic($service_id, $snippet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetApi->getSnippetDynamic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **snippet_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelSnippet**](../Model/ModelSnippet.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSnippets()`

```php
listSnippets($service_id, $version_id): \OpenAPI\Client\Model\ModelSnippet[]
```

List snippets

List all snippets for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SnippetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int

try {
    $result = $apiInstance->listSnippets($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetApi->listSnippets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ModelSnippet[]**](../Model/ModelSnippet.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSnippet()`

```php
updateSnippet($service_id, $version_id, $snippet_name): \OpenAPI\Client\Model\ModelSnippet
```

Update a versioned snippet

Update a specific snippet for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SnippetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$snippet_name = 'snippet_name_example'; // string

try {
    $result = $apiInstance->updateSnippet($service_id, $version_id, $snippet_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetApi->updateSnippet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **snippet_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelSnippet**](../Model/ModelSnippet.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSnippetDynamic()`

```php
updateSnippetDynamic($service_id, $snippet_id): \OpenAPI\Client\Model\ModelSnippet
```

Update a dynamic snippet

Update a dynamic snippet for a particular service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SnippetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$snippet_id = 'snippet_id_example'; // string

try {
    $result = $apiInstance->updateSnippetDynamic($service_id, $snippet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetApi->updateSnippetDynamic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **snippet_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelSnippet**](../Model/ModelSnippet.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
