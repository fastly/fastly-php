# Fastly\Api\CacheSettingsApi


```php
$apiInstance = new Fastly\Api\CacheSettingsApi(
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
[**createCacheSettings()**](CacheSettingsApi.md#createCacheSettings) | **POST** /service/{service_id}/version/{version_id}/cache_settings | Create a cache settings object
[**deleteCacheSettings()**](CacheSettingsApi.md#deleteCacheSettings) | **DELETE** /service/{service_id}/version/{version_id}/cache_settings/{cache_settings_name} | Delete a cache settings object
[**getCacheSettings()**](CacheSettingsApi.md#getCacheSettings) | **GET** /service/{service_id}/version/{version_id}/cache_settings/{cache_settings_name} | Get a cache settings object
[**listCacheSettings()**](CacheSettingsApi.md#listCacheSettings) | **GET** /service/{service_id}/version/{version_id}/cache_settings | List cache settings objects
[**updateCacheSettings()**](CacheSettingsApi.md#updateCacheSettings) | **PUT** /service/{service_id}/version/{version_id}/cache_settings/{cache_settings_name} | Update a cache settings object


## `createCacheSettings()`

```php
createCacheSettings($options): \Fastly\Model\CacheSettingResponse // Create a cache settings object
```

Create a cache settings object.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['action'] = 'action_example'; // string | If set, will cause vcl_fetch to terminate after processing this rule with the return state specified. If not set, other configuration logic in vcl_fetch with a lower priority will run after this rule.
$options['cache_condition'] = 'cache_condition_example'; // string | Name of the cache condition controlling when this configuration applies.
$options['name'] = 'name_example'; // string | Name for the cache settings object.
$options['stale_ttl'] = 'stale_ttl_example'; // string | Maximum time in seconds to continue to use a stale version of the object if future requests to your backend server fail (also known as 'stale if error').
$options['ttl'] = 'ttl_example'; // string | Maximum time to consider the object fresh in the cache (the cache 'time to live').

try {
    $result = $apiInstance->createCacheSettings($options);
} catch (Exception $e) {
    echo 'Exception when calling CacheSettingsApi->createCacheSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**action** | **string** | If set, will cause vcl_fetch to terminate after processing this rule with the return state specified. If not set, other configuration logic in vcl_fetch with a lower priority will run after this rule. | [optional] [one of: 'pass', 'cache', 'restart']
**cache_condition** | **string** | Name of the cache condition controlling when this configuration applies. | [optional]
**name** | **string** | Name for the cache settings object. | [optional]
**stale_ttl** | **string** | Maximum time in seconds to continue to use a stale version of the object if future requests to your backend server fail (also known as &#39;stale if error&#39;). | [optional]
**ttl** | **string** | Maximum time to consider the object fresh in the cache (the cache &#39;time to live&#39;). | [optional]

### Return type

[**\Fastly\Model\CacheSettingResponse**](../Model/CacheSettingResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteCacheSettings()`

```php
deleteCacheSettings($options): \Fastly\Model\InlineResponse200 // Delete a cache settings object
```

Delete a specific cache settings object.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['cache_settings_name'] = 'cache_settings_name_example'; // string | Name for the cache settings object.

try {
    $result = $apiInstance->deleteCacheSettings($options);
} catch (Exception $e) {
    echo 'Exception when calling CacheSettingsApi->deleteCacheSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**cache_settings_name** | **string** | Name for the cache settings object. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getCacheSettings()`

```php
getCacheSettings($options): \Fastly\Model\CacheSettingResponse // Get a cache settings object
```

Get a specific cache settings object.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['cache_settings_name'] = 'cache_settings_name_example'; // string | Name for the cache settings object.

try {
    $result = $apiInstance->getCacheSettings($options);
} catch (Exception $e) {
    echo 'Exception when calling CacheSettingsApi->getCacheSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**cache_settings_name** | **string** | Name for the cache settings object. |

### Return type

[**\Fastly\Model\CacheSettingResponse**](../Model/CacheSettingResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listCacheSettings()`

```php
listCacheSettings($options): \Fastly\Model\CacheSettingResponse[] // List cache settings objects
```

Get a list of all cache settings for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

try {
    $result = $apiInstance->listCacheSettings($options);
} catch (Exception $e) {
    echo 'Exception when calling CacheSettingsApi->listCacheSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\CacheSettingResponse[]**](../Model/CacheSettingResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateCacheSettings()`

```php
updateCacheSettings($options): \Fastly\Model\CacheSettingResponse // Update a cache settings object
```

Update a specific cache settings object.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['cache_settings_name'] = 'cache_settings_name_example'; // string | Name for the cache settings object.
$options['action'] = 'action_example'; // string | If set, will cause vcl_fetch to terminate after processing this rule with the return state specified. If not set, other configuration logic in vcl_fetch with a lower priority will run after this rule.
$options['cache_condition'] = 'cache_condition_example'; // string | Name of the cache condition controlling when this configuration applies.
$options['name'] = 'name_example'; // string | Name for the cache settings object.
$options['stale_ttl'] = 'stale_ttl_example'; // string | Maximum time in seconds to continue to use a stale version of the object if future requests to your backend server fail (also known as 'stale if error').
$options['ttl'] = 'ttl_example'; // string | Maximum time to consider the object fresh in the cache (the cache 'time to live').

try {
    $result = $apiInstance->updateCacheSettings($options);
} catch (Exception $e) {
    echo 'Exception when calling CacheSettingsApi->updateCacheSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**cache_settings_name** | **string** | Name for the cache settings object. |
**action** | **string** | If set, will cause vcl_fetch to terminate after processing this rule with the return state specified. If not set, other configuration logic in vcl_fetch with a lower priority will run after this rule. | [optional] [one of: 'pass', 'cache', 'restart']
**cache_condition** | **string** | Name of the cache condition controlling when this configuration applies. | [optional]
**name** | **string** | Name for the cache settings object. | [optional]
**stale_ttl** | **string** | Maximum time in seconds to continue to use a stale version of the object if future requests to your backend server fail (also known as &#39;stale if error&#39;). | [optional]
**ttl** | **string** | Maximum time to consider the object fresh in the cache (the cache &#39;time to live&#39;). | [optional]

### Return type

[**\Fastly\Model\CacheSettingResponse**](../Model/CacheSettingResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
