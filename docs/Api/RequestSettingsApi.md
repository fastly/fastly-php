# Fastly\Api\RequestSettingsApi


```php
$apiInstance = new Fastly\Api\RequestSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**createRequestSettings()**](RequestSettingsApi.md#createRequestSettings) | **POST** /service/{service_id}/version/{version_id}/request_settings | Create a Request Settings object
[**deleteRequestSettings()**](RequestSettingsApi.md#deleteRequestSettings) | **DELETE** /service/{service_id}/version/{version_id}/request_settings/{request_settings_name} | Delete a Request Settings object
[**getRequestSettings()**](RequestSettingsApi.md#getRequestSettings) | **GET** /service/{service_id}/version/{version_id}/request_settings/{request_settings_name} | Get a Request Settings object
[**listRequestSettings()**](RequestSettingsApi.md#listRequestSettings) | **GET** /service/{service_id}/version/{version_id}/request_settings | List Request Settings objects
[**updateRequestSettings()**](RequestSettingsApi.md#updateRequestSettings) | **PUT** /service/{service_id}/version/{version_id}/request_settings/{request_settings_name} | Update a Request Settings object


## `createRequestSettings()`

```php
createRequestSettings($options): \Fastly\Model\RequestSettingsResponse // Create a Request Settings object
```

Creates a new Request Settings object.

### Example
```php
try {
    $result = $apiInstance->createRequestSettings($options);
} catch (Exception $e) {
    echo 'Exception when calling RequestSettingsApi->createRequestSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\RequestSettingsResponse**](../Model/RequestSettingsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteRequestSettings()`

```php
deleteRequestSettings($options): object // Delete a Request Settings object
```

Removes the specified Request Settings object.

### Example
```php
try {
    $result = $apiInstance->deleteRequestSettings($options);
} catch (Exception $e) {
    echo 'Exception when calling RequestSettingsApi->deleteRequestSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**request_settings_name** | **string** | Name for the request settings. |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getRequestSettings()`

```php
getRequestSettings($options): \Fastly\Model\RequestSettingsResponse // Get a Request Settings object
```

Gets the specified Request Settings object.

### Example
```php
try {
    $result = $apiInstance->getRequestSettings($options);
} catch (Exception $e) {
    echo 'Exception when calling RequestSettingsApi->getRequestSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**request_settings_name** | **string** | Name for the request settings. |

### Return type

[**\Fastly\Model\RequestSettingsResponse**](../Model/RequestSettingsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listRequestSettings()`

```php
listRequestSettings($options): \Fastly\Model\RequestSettingsResponse[] // List Request Settings objects
```

Returns a list of all Request Settings objects for the given service and version.

### Example
```php
try {
    $result = $apiInstance->listRequestSettings($options);
} catch (Exception $e) {
    echo 'Exception when calling RequestSettingsApi->listRequestSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\RequestSettingsResponse[]**](../Model/RequestSettingsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateRequestSettings()`

```php
updateRequestSettings($options): \Fastly\Model\RequestSettingsResponse // Update a Request Settings object
```

Updates the specified Request Settings object.

### Example
```php
try {
    $result = $apiInstance->updateRequestSettings($options);
} catch (Exception $e) {
    echo 'Exception when calling RequestSettingsApi->updateRequestSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**request_settings_name** | **string** | Name for the request settings. |
**action** | **string** | Allows you to terminate request handling and immediately perform an action. | [optional] [one of: 'lookup', 'pass']
**bypass_busy_wait** | **int** | Disable collapsed forwarding, so you don&#39;t wait for other objects to origin. | [optional]
**default_host** | **string** | Sets the host header. | [optional]
**force_miss** | **int** | Allows you to force a cache miss for the request. Replaces the item in the cache if the content is cacheable. | [optional]
**force_ssl** | **int** | Forces the request use SSL (redirects a non-SSL to SSL). | [optional]
**geo_headers** | **int** | Injects Fastly-Geo-Country, Fastly-Geo-City, and Fastly-Geo-Region into the request headers. | [optional]
**hash_keys** | **string** | Comma separated list of varnish request object fields that should be in the hash key. | [optional]
**max_stale_age** | **int** | How old an object is allowed to be to serve stale-if-error or stale-while-revalidate. | [optional]
**name** | **string** | Name for the request settings. | [optional]
**request_condition** | **string** | Condition which, if met, will select this configuration during a request. Optional. | [optional]
**timer_support** | **int** | Injects the X-Timer info into the request for viewing origin fetch durations. | [optional]
**xff** | **string** | Short for X-Forwarded-For. | [optional] [one of: 'clear', 'leave', 'append', 'append_all', 'overwrite']

### Return type

[**\Fastly\Model\RequestSettingsResponse**](../Model/RequestSettingsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
