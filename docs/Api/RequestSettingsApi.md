# OpenAPI\Client\RequestSettingsApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRequestSettings()**](RequestSettingsApi.md#createRequestSettings) | **POST** /service/{service_id}/version/{version_id}/request_settings | Create a Request Settings object
[**deleteRequestSettings()**](RequestSettingsApi.md#deleteRequestSettings) | **DELETE** /service/{service_id}/version/{version_id}/request_settings/{request_settings_name} | Delete a Request Settings object
[**getRequestSettings()**](RequestSettingsApi.md#getRequestSettings) | **GET** /service/{service_id}/version/{version_id}/request_settings/{request_settings_name} | Get a Request Settings object
[**listRequestSettings()**](RequestSettingsApi.md#listRequestSettings) | **GET** /service/{service_id}/version/{version_id}/request_settings | List Request Settings objects
[**updateRequestSettings()**](RequestSettingsApi.md#updateRequestSettings) | **PUT** /service/{service_id}/version/{version_id}/request_settings/{request_settings_name} | Update a Request Settings object


## `createRequestSettings()`

```php
createRequestSettings($service_id, $version_id): \OpenAPI\Client\Model\ModelRequestSettings
```

Create a Request Settings object

Creates a new Request Settings object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RequestSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int

try {
    $result = $apiInstance->createRequestSettings($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestSettingsApi->createRequestSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ModelRequestSettings**](../Model/ModelRequestSettings.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRequestSettings()`

```php
deleteRequestSettings($service_id, $version_id, $request_settings_name): object
```

Delete a Request Settings object

Removes the specified Request Settings object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RequestSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$request_settings_name = 'request_settings_name_example'; // string

try {
    $result = $apiInstance->deleteRequestSettings($service_id, $version_id, $request_settings_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestSettingsApi->deleteRequestSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **request_settings_name** | **string**|  |

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

## `getRequestSettings()`

```php
getRequestSettings($service_id, $version_id, $request_settings_name): \OpenAPI\Client\Model\ModelRequestSettings
```

Get a Request Settings object

Gets the specified Request Settings object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RequestSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$request_settings_name = 'request_settings_name_example'; // string

try {
    $result = $apiInstance->getRequestSettings($service_id, $version_id, $request_settings_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestSettingsApi->getRequestSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **request_settings_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelRequestSettings**](../Model/ModelRequestSettings.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRequestSettings()`

```php
listRequestSettings($service_id, $version_id): \OpenAPI\Client\Model\ModelRequestSettings[]
```

List Request Settings objects

Returns a list of all Request Settings objects for the given service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RequestSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int

try {
    $result = $apiInstance->listRequestSettings($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestSettingsApi->listRequestSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ModelRequestSettings[]**](../Model/ModelRequestSettings.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRequestSettings()`

```php
updateRequestSettings($service_id, $version_id, $request_settings_name): \OpenAPI\Client\Model\ModelRequestSettings
```

Update a Request Settings object

Updates the specified Request Settings object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RequestSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$request_settings_name = 'request_settings_name_example'; // string

try {
    $result = $apiInstance->updateRequestSettings($service_id, $version_id, $request_settings_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestSettingsApi->updateRequestSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **request_settings_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelRequestSettings**](../Model/ModelRequestSettings.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
