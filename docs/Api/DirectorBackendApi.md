# OpenAPI\Client\DirectorBackendApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDirectorBackend()**](DirectorBackendApi.md#createDirectorBackend) | **POST** /service/{service_id}/version/{version_id}/director/{director_name}/backend/{backend_name} | Create a director-backend relationship
[**deleteDirectorBackend()**](DirectorBackendApi.md#deleteDirectorBackend) | **DELETE** /service/{service_id}/version/{version_id}/director/{director_name}/backend/{backend_name} | Delete a director-backend relationship
[**getDirectorBackend()**](DirectorBackendApi.md#getDirectorBackend) | **GET** /service/{service_id}/version/{version_id}/director/{director_name}/backend/{backend_name} | Get a director-backend relationship


## `createDirectorBackend()`

```php
createDirectorBackend($director_name, $service_id, $version_id, $backend_name): \OpenAPI\Client\Model\ModelDirectorBackend
```

Create a director-backend relationship

Establishes a relationship between a Backend and a Director. The Backend is then considered a member of the Director and can be used to balance traffic onto.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DirectorBackendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$director_name = 'director_name_example'; // string
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$backend_name = 'backend_name_example'; // string

try {
    $result = $apiInstance->createDirectorBackend($director_name, $service_id, $version_id, $backend_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectorBackendApi->createDirectorBackend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **director_name** | **string**|  |
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **backend_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelDirectorBackend**](../Model/ModelDirectorBackend.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDirectorBackend()`

```php
deleteDirectorBackend($director_name, $service_id, $version_id, $backend_name): object
```

Delete a director-backend relationship

Deletes the relationship between a Backend and a Director. The Backend is no longer considered a member of the Director and thus will not have traffic balanced onto it from this Director.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DirectorBackendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$director_name = 'director_name_example'; // string
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$backend_name = 'backend_name_example'; // string

try {
    $result = $apiInstance->deleteDirectorBackend($director_name, $service_id, $version_id, $backend_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectorBackendApi->deleteDirectorBackend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **director_name** | **string**|  |
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **backend_name** | **string**|  |

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

## `getDirectorBackend()`

```php
getDirectorBackend($director_name, $service_id, $version_id, $backend_name): \OpenAPI\Client\Model\ModelDirectorBackend
```

Get a director-backend relationship

Returns the relationship between a Backend and a Director. If the Backend has been associated with the Director, it returns a simple record indicating this. Otherwise, returns a 404.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DirectorBackendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$director_name = 'director_name_example'; // string
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$backend_name = 'backend_name_example'; // string

try {
    $result = $apiInstance->getDirectorBackend($director_name, $service_id, $version_id, $backend_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectorBackendApi->getDirectorBackend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **director_name** | **string**|  |
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **backend_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelDirectorBackend**](../Model/ModelDirectorBackend.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
