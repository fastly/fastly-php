# OpenAPI\Client\ServicesVersionApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**activateServiceVersion()**](ServicesVersionApi.md#activateServiceVersion) | **PUT** /service/{service_id}/version/{version_id}/activate | Activate a service version
[**cloneServiceVersion()**](ServicesVersionApi.md#cloneServiceVersion) | **PUT** /service/{service_id}/version/{version_id}/clone | Clone a service version
[**createServiceVersion()**](ServicesVersionApi.md#createServiceVersion) | **POST** /service/{service_id}/version | Create a service version
[**deactivateServiceVersion()**](ServicesVersionApi.md#deactivateServiceVersion) | **PUT** /service/{service_id}/version/{version_id}/deactivate | Deactivate a service version
[**getServiceVersion()**](ServicesVersionApi.md#getServiceVersion) | **GET** /service/{service_id}/version/{version_id} | Get a version of a service
[**listServiceVersions()**](ServicesVersionApi.md#listServiceVersions) | **GET** /service/{service_id}/version | List versions of a service
[**lockServiceVersion()**](ServicesVersionApi.md#lockServiceVersion) | **PUT** /service/{service_id}/version/{version_id}/lock | Lock a service version
[**updateServiceVersion()**](ServicesVersionApi.md#updateServiceVersion) | **PUT** /service/{service_id}/version/{version_id} | Update a service version
[**validateServiceVersion()**](ServicesVersionApi.md#validateServiceVersion) | **GET** /service/{service_id}/version/{version_id}/validate | Validate a service version


## `activateServiceVersion()`

```php
activateServiceVersion($service_id, $version_id): \OpenAPI\Client\Model\InlineResponse200
```

Activate a service version

Activate the current version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: session_or_token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServicesVersionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int

try {
    $result = $apiInstance->activateServiceVersion($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesVersionApi->activateServiceVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[session_or_token](../../README.md#session_or_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloneServiceVersion()`

```php
cloneServiceVersion($service_id, $version_id): \OpenAPI\Client\Model\InlineResponse200
```

Clone a service version

Clone the current configuration into a new version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: session_or_token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServicesVersionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int

try {
    $result = $apiInstance->cloneServiceVersion($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesVersionApi->cloneServiceVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[session_or_token](../../README.md#session_or_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createServiceVersion()`

```php
createServiceVersion($service_id): \OpenAPI\Client\Model\InlineResponse2001
```

Create a service version

Create a version for a particular service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: session_or_token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServicesVersionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string

try {
    $result = $apiInstance->createServiceVersion($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesVersionApi->createServiceVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[session_or_token](../../README.md#session_or_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deactivateServiceVersion()`

```php
deactivateServiceVersion($service_id, $version_id): \OpenAPI\Client\Model\InlineResponse200
```

Deactivate a service version

Deactivate the current version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: session_or_token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServicesVersionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int

try {
    $result = $apiInstance->deactivateServiceVersion($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesVersionApi->deactivateServiceVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[session_or_token](../../README.md#session_or_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServiceVersion()`

```php
getServiceVersion($service_id, $version_id): \OpenAPI\Client\Model\InlineResponse200
```

Get a version of a service

Get the version for a particular service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: session_or_token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServicesVersionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int

try {
    $result = $apiInstance->getServiceVersion($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesVersionApi->getServiceVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[session_or_token](../../README.md#session_or_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listServiceVersions()`

```php
listServiceVersions($service_id): \OpenAPI\Client\Model\InlineResponse200[]
```

List versions of a service

List the versions for a particular service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: session_or_token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServicesVersionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string

try {
    $result = $apiInstance->listServiceVersions($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesVersionApi->listServiceVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse200[]**](../Model/InlineResponse200.md)

### Authorization

[session_or_token](../../README.md#session_or_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `lockServiceVersion()`

```php
lockServiceVersion($service_id, $version_id): \OpenAPI\Client\Model\InlineResponse200
```

Lock a service version

Locks the specified version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: session_or_token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServicesVersionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int

try {
    $result = $apiInstance->lockServiceVersion($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesVersionApi->lockServiceVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[session_or_token](../../README.md#session_or_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateServiceVersion()`

```php
updateServiceVersion($service_id, $version_id): \OpenAPI\Client\Model\InlineResponse200
```

Update a service version

Update a particular version for a particular service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: session_or_token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServicesVersionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int

try {
    $result = $apiInstance->updateServiceVersion($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesVersionApi->updateServiceVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[session_or_token](../../README.md#session_or_token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateServiceVersion()`

```php
validateServiceVersion($service_id, $version_id): object
```

Validate a service version

Validate the version for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: session_or_token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServicesVersionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int

try {
    $result = $apiInstance->validateServiceVersion($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesVersionApi->validateServiceVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

**object**

### Authorization

[session_or_token](../../README.md#session_or_token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
