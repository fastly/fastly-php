# OpenAPI\Client\CacheSettingsApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCacheSettings()**](CacheSettingsApi.md#createCacheSettings) | **POST** /service/{service_id}/version/{version_id}/cache_settings | Create a cache settings object
[**deleteCacheSettings()**](CacheSettingsApi.md#deleteCacheSettings) | **DELETE** /service/{service_id}/version/{version_id}/cache_settings/{cache_settings_name} | Delete a cache settings object
[**getCacheSettings()**](CacheSettingsApi.md#getCacheSettings) | **GET** /service/{service_id}/version/{version_id}/cache_settings/{cache_settings_name} | Get a cache settings object
[**listCacheSettings()**](CacheSettingsApi.md#listCacheSettings) | **GET** /service/{service_id}/version/{version_id}/cache_settings | List cache settings objects
[**updateCacheSettings()**](CacheSettingsApi.md#updateCacheSettings) | **PUT** /service/{service_id}/version/{version_id}/cache_settings/{cache_settings_name} | Update a cache settings object


## `createCacheSettings()`

```php
createCacheSettings($service_id, $version_id, $service_id2, $version, $action, $cache_condition, $name, $stale_ttl, $ttl): \OpenAPI\Client\Model\ModelCacheSettings
```

Create a cache settings object

Create a cache settings object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CacheSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$service_id2 = 'service_id_example'; // string | Alphanumeric string identifying the service.
$version = 56; // int | Integer identifying a service version.
$action = 'action_example'; // string | If set, will cause vcl_fetch to terminate after processing this rule with the return state specified. If not set, other configuration logic in vcl_fetch with a lower priority will run after this rule.
$cache_condition = 'cache_condition_example'; // string | Name of the cache condition controlling when this configuration applies.
$name = 'name_example'; // string | Name for the cache settings object.
$stale_ttl = 56; // int | Maximum time in seconds to continue to use a stale version of the object if future requests to your backend server fail (also known as 'stale if error').
$ttl = 56; // int | Maximum time to consider the object fresh in the cache (the cache 'time to live').

try {
    $result = $apiInstance->createCacheSettings($service_id, $version_id, $service_id2, $version, $action, $cache_condition, $name, $stale_ttl, $ttl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CacheSettingsApi->createCacheSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **service_id2** | **string**| Alphanumeric string identifying the service. | [optional]
 **version** | **int**| Integer identifying a service version. | [optional]
 **action** | **string**| If set, will cause vcl_fetch to terminate after processing this rule with the return state specified. If not set, other configuration logic in vcl_fetch with a lower priority will run after this rule. | [optional]
 **cache_condition** | **string**| Name of the cache condition controlling when this configuration applies. | [optional]
 **name** | **string**| Name for the cache settings object. | [optional]
 **stale_ttl** | **int**| Maximum time in seconds to continue to use a stale version of the object if future requests to your backend server fail (also known as &#39;stale if error&#39;). | [optional]
 **ttl** | **int**| Maximum time to consider the object fresh in the cache (the cache &#39;time to live&#39;). | [optional]

### Return type

[**\OpenAPI\Client\Model\ModelCacheSettings**](../Model/ModelCacheSettings.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCacheSettings()`

```php
deleteCacheSettings($service_id, $version_id, $cache_settings_name): object
```

Delete a cache settings object

Delete a specific cache settings object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CacheSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$cache_settings_name = 'cache_settings_name_example'; // string

try {
    $result = $apiInstance->deleteCacheSettings($service_id, $version_id, $cache_settings_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CacheSettingsApi->deleteCacheSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **cache_settings_name** | **string**|  |

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

## `getCacheSettings()`

```php
getCacheSettings($service_id, $version_id, $cache_settings_name): \OpenAPI\Client\Model\ModelCacheSettings
```

Get a cache settings object

Get a specific cache settings object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CacheSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$cache_settings_name = 'cache_settings_name_example'; // string

try {
    $result = $apiInstance->getCacheSettings($service_id, $version_id, $cache_settings_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CacheSettingsApi->getCacheSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **cache_settings_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelCacheSettings**](../Model/ModelCacheSettings.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCacheSettings()`

```php
listCacheSettings($service_id, $version_id): \OpenAPI\Client\Model\ModelCacheSettings[]
```

List cache settings objects

Get a list of all cache settings for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CacheSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int

try {
    $result = $apiInstance->listCacheSettings($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CacheSettingsApi->listCacheSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ModelCacheSettings[]**](../Model/ModelCacheSettings.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCacheSettings()`

```php
updateCacheSettings($service_id, $version_id, $cache_settings_name, $service_id2, $version, $action, $cache_condition, $name, $stale_ttl, $ttl): \OpenAPI\Client\Model\ModelCacheSettings
```

Update a cache settings object

Update a specific cache settings object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CacheSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$cache_settings_name = 'cache_settings_name_example'; // string
$service_id2 = 'service_id_example'; // string | Alphanumeric string identifying the service.
$version = 56; // int | Integer identifying a service version.
$action = 'action_example'; // string | If set, will cause vcl_fetch to terminate after processing this rule with the return state specified. If not set, other configuration logic in vcl_fetch with a lower priority will run after this rule.
$cache_condition = 'cache_condition_example'; // string | Name of the cache condition controlling when this configuration applies.
$name = 'name_example'; // string | Name for the cache settings object.
$stale_ttl = 56; // int | Maximum time in seconds to continue to use a stale version of the object if future requests to your backend server fail (also known as 'stale if error').
$ttl = 56; // int | Maximum time to consider the object fresh in the cache (the cache 'time to live').

try {
    $result = $apiInstance->updateCacheSettings($service_id, $version_id, $cache_settings_name, $service_id2, $version, $action, $cache_condition, $name, $stale_ttl, $ttl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CacheSettingsApi->updateCacheSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **cache_settings_name** | **string**|  |
 **service_id2** | **string**| Alphanumeric string identifying the service. | [optional]
 **version** | **int**| Integer identifying a service version. | [optional]
 **action** | **string**| If set, will cause vcl_fetch to terminate after processing this rule with the return state specified. If not set, other configuration logic in vcl_fetch with a lower priority will run after this rule. | [optional]
 **cache_condition** | **string**| Name of the cache condition controlling when this configuration applies. | [optional]
 **name** | **string**| Name for the cache settings object. | [optional]
 **stale_ttl** | **int**| Maximum time in seconds to continue to use a stale version of the object if future requests to your backend server fail (also known as &#39;stale if error&#39;). | [optional]
 **ttl** | **int**| Maximum time to consider the object fresh in the cache (the cache &#39;time to live&#39;). | [optional]

### Return type

[**\OpenAPI\Client\Model\ModelCacheSettings**](../Model/ModelCacheSettings.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
