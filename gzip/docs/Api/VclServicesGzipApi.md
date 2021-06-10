# OpenAPI\Client\VclServicesGzipApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createGzipConfig()**](VclServicesGzipApi.md#createGzipConfig) | **POST** /service/{service_id}/version/{version_id}/gzip | Create a gzip configuration
[**deleteGzipConfig()**](VclServicesGzipApi.md#deleteGzipConfig) | **DELETE** /service/{service_id}/version/{version_id}/gzip/{gzip_name} | Delete a gzip configuration
[**getGzipConfigs()**](VclServicesGzipApi.md#getGzipConfigs) | **GET** /service/{service_id}/version/{version_id}/gzip/{gzip_name} | Get a gzip configuration
[**listGzipConfigs()**](VclServicesGzipApi.md#listGzipConfigs) | **GET** /service/{service_id}/version/{version_id}/gzip | List gzip configurations
[**updateGzipConfig()**](VclServicesGzipApi.md#updateGzipConfig) | **PUT** /service/{service_id}/version/{version_id}/gzip/{gzip_name} | Update a gzip configuration


## `createGzipConfig()`

```php
createGzipConfig($service_id, $version_id, $service_id2, $version, $cache_condition, $content_types, $extensions, $name): \OpenAPI\Client\Model\InlineObject
```

Create a gzip configuration

Create a named gzip configuration on a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclServicesGzipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$service_id2 = 'service_id_example'; // string | Alphanumeric string identifying the service.
$version = 56; // int | Integer identifying a service version.
$cache_condition = 'cache_condition_example'; // string | Name of the cache condition controlling when this configuration applies.
$content_types = 'content_types_example'; // string | Space-separated list of content types to compress. If you omit this field a default list will be used.
$extensions = 'extensions_example'; // string | Space-separated list of file extensions to compress. If you omit this field a default list will be used.
$name = 'name_example'; // string | Name of the gzip configuration.

try {
    $result = $apiInstance->createGzipConfig($service_id, $version_id, $service_id2, $version, $cache_condition, $content_types, $extensions, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclServicesGzipApi->createGzipConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **service_id2** | **string**| Alphanumeric string identifying the service. | [optional]
 **version** | **int**| Integer identifying a service version. | [optional]
 **cache_condition** | **string**| Name of the cache condition controlling when this configuration applies. | [optional]
 **content_types** | **string**| Space-separated list of content types to compress. If you omit this field a default list will be used. | [optional]
 **extensions** | **string**| Space-separated list of file extensions to compress. If you omit this field a default list will be used. | [optional]
 **name** | **string**| Name of the gzip configuration. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineObject**](../Model/InlineObject.md)

### Authorization

[token_engineer](../../README.md#token_engineer)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteGzipConfig()`

```php
deleteGzipConfig($service_id, $version_id, $gzip_name): object
```

Delete a gzip configuration

Delete a named gzip configuration on a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclServicesGzipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$gzip_name = gzip-config-name; // string

try {
    $result = $apiInstance->deleteGzipConfig($service_id, $version_id, $gzip_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclServicesGzipApi->deleteGzipConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **gzip_name** | **string**|  |

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

## `getGzipConfigs()`

```php
getGzipConfigs($service_id, $version_id, $gzip_name): \OpenAPI\Client\Model\InlineObject
```

Get a gzip configuration

Get the gzip configuration for a particular service, version, and name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclServicesGzipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$gzip_name = gzip-config-name; // string

try {
    $result = $apiInstance->getGzipConfigs($service_id, $version_id, $gzip_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclServicesGzipApi->getGzipConfigs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **gzip_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\InlineObject**](../Model/InlineObject.md)

### Authorization

[token_engineer](../../README.md#token_engineer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGzipConfigs()`

```php
listGzipConfigs($service_id, $version_id): \OpenAPI\Client\Model\InlineResponse200[]
```

List gzip configurations

List all gzip configurations for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclServicesGzipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int

try {
    $result = $apiInstance->listGzipConfigs($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclServicesGzipApi->listGzipConfigs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

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

## `updateGzipConfig()`

```php
updateGzipConfig($service_id, $version_id, $gzip_name, $service_id2, $version, $cache_condition, $content_types, $extensions, $name): \OpenAPI\Client\Model\InlineObject1
```

Update a gzip configuration

Update a named gzip configuration on a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclServicesGzipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$gzip_name = gzip-config-name; // string
$service_id2 = 'service_id_example'; // string | Alphanumeric string identifying the service.
$version = 56; // int | Integer identifying a service version.
$cache_condition = 'cache_condition_example'; // string | Name of the cache condition controlling when this configuration applies.
$content_types = 'content_types_example'; // string | Space-separated list of content types to compress. If you omit this field a default list will be used.
$extensions = 'extensions_example'; // string | Space-separated list of file extensions to compress. If you omit this field a default list will be used.
$name = 'name_example'; // string | Name of the gzip configuration.

try {
    $result = $apiInstance->updateGzipConfig($service_id, $version_id, $gzip_name, $service_id2, $version, $cache_condition, $content_types, $extensions, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclServicesGzipApi->updateGzipConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **gzip_name** | **string**|  |
 **service_id2** | **string**| Alphanumeric string identifying the service. | [optional]
 **version** | **int**| Integer identifying a service version. | [optional]
 **cache_condition** | **string**| Name of the cache condition controlling when this configuration applies. | [optional]
 **content_types** | **string**| Space-separated list of content types to compress. If you omit this field a default list will be used. | [optional]
 **extensions** | **string**| Space-separated list of file extensions to compress. If you omit this field a default list will be used. | [optional]
 **name** | **string**| Name of the gzip configuration. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineObject1**](../Model/InlineObject1.md)

### Authorization

[token_engineer](../../README.md#token_engineer)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
