# OpenAPI\Client\VclApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCustomVcl()**](VclApi.md#createCustomVcl) | **POST** /service/{service_id}/version/{version_id}/vcl | Create a custom VCL file
[**deleteCustomVcl()**](VclApi.md#deleteCustomVcl) | **DELETE** /service/{service_id}/version/{version_id}/vcl/{vcl_name} | Delete a custom VCL file
[**getCustomVcl()**](VclApi.md#getCustomVcl) | **GET** /service/{service_id}/version/{version_id}/vcl/{vcl_name} | Get a custom VCL file
[**getCustomVclBoilerplate()**](VclApi.md#getCustomVclBoilerplate) | **GET** /service/{service_id}/version/{version_id}/boilerplate | Get boilerplate VCL
[**getCustomVclGenerated()**](VclApi.md#getCustomVclGenerated) | **GET** /service/{service_id}/version/{version_id}/generated_vcl | Get the generated VCL for a service
[**getCustomVclGeneratedHighlighted()**](VclApi.md#getCustomVclGeneratedHighlighted) | **GET** /service/{service_id}/version/{version_id}/generated_vcl/content | Get the generated VCL with syntax highlighting
[**getCustomVclHighlighted()**](VclApi.md#getCustomVclHighlighted) | **GET** /service/{service_id}/version/{version_id}/vcl/{vcl_name}/content | Get a custom VCL file with syntax highlighting
[**getCustomVclRaw()**](VclApi.md#getCustomVclRaw) | **GET** /service/{service_id}/version/{version_id}/vcl/{vcl_name}/download | Download a custom VCL file
[**listCustomVcl()**](VclApi.md#listCustomVcl) | **GET** /service/{service_id}/version/{version_id}/vcl | List custom VCL files
[**setCustomVclMain()**](VclApi.md#setCustomVclMain) | **PUT** /service/{service_id}/version/{version_id}/vcl/{vcl_name}/main | Set a custom VCL file as main
[**updateCustomVcl()**](VclApi.md#updateCustomVcl) | **PUT** /service/{service_id}/version/{version_id}/vcl/{vcl_name} | Update a custom VCL file


## `createCustomVcl()`

```php
createCustomVcl($service_id, $version_id): \OpenAPI\Client\Model\ModelVcl
```

Create a custom VCL file

Upload a VCL for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int

try {
    $result = $apiInstance->createCustomVcl($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclApi->createCustomVcl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ModelVcl**](../Model/ModelVcl.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCustomVcl()`

```php
deleteCustomVcl($service_id, $version_id, $vcl_name): object
```

Delete a custom VCL file

Delete the uploaded VCL for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$vcl_name = 'vcl_name_example'; // string

try {
    $result = $apiInstance->deleteCustomVcl($service_id, $version_id, $vcl_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclApi->deleteCustomVcl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **vcl_name** | **string**|  |

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

## `getCustomVcl()`

```php
getCustomVcl($service_id, $version_id, $vcl_name, $no_content): \OpenAPI\Client\Model\ModelVcl
```

Get a custom VCL file

Get the uploaded VCL for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$vcl_name = 'vcl_name_example'; // string
$no_content = 'no_content_example'; // string | Omit VCL content (default 0).

try {
    $result = $apiInstance->getCustomVcl($service_id, $version_id, $vcl_name, $no_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclApi->getCustomVcl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **vcl_name** | **string**|  |
 **no_content** | **string**| Omit VCL content (default 0). | [optional]

### Return type

[**\OpenAPI\Client\Model\ModelVcl**](../Model/ModelVcl.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomVclBoilerplate()`

```php
getCustomVclBoilerplate($service_id, $version_id)
```

Get boilerplate VCL

Return boilerplate VCL with the service's TTL from the [settings](/reference/api/vcl-services/settings/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int

try {
    $apiInstance->getCustomVclBoilerplate($service_id, $version_id);
} catch (Exception $e) {
    echo 'Exception when calling VclApi->getCustomVclBoilerplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomVclGenerated()`

```php
getCustomVclGenerated($service_id, $version_id): \OpenAPI\Client\Model\ModelVcl
```

Get the generated VCL for a service

Display the generated VCL for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int

try {
    $result = $apiInstance->getCustomVclGenerated($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclApi->getCustomVclGenerated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ModelVcl**](../Model/ModelVcl.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomVclGeneratedHighlighted()`

```php
getCustomVclGeneratedHighlighted($service_id, $version_id)
```

Get the generated VCL with syntax highlighting

Display the content of generated VCL with HTML syntax highlighting. Include line numbers by sending `lineno=true` as a request parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int

try {
    $apiInstance->getCustomVclGeneratedHighlighted($service_id, $version_id);
} catch (Exception $e) {
    echo 'Exception when calling VclApi->getCustomVclGeneratedHighlighted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomVclHighlighted()`

```php
getCustomVclHighlighted($service_id, $version_id, $vcl_name)
```

Get a custom VCL file with syntax highlighting

Get the uploaded VCL for a particular service and version with HTML syntax highlighting. Include line numbers by sending `lineno=true` as a request parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$vcl_name = 'vcl_name_example'; // string

try {
    $apiInstance->getCustomVclHighlighted($service_id, $version_id, $vcl_name);
} catch (Exception $e) {
    echo 'Exception when calling VclApi->getCustomVclHighlighted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **vcl_name** | **string**|  |

### Return type

void (empty response body)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomVclRaw()`

```php
getCustomVclRaw($service_id, $version_id, $vcl_name)
```

Download a custom VCL file

Download the specified VCL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$vcl_name = 'vcl_name_example'; // string

try {
    $apiInstance->getCustomVclRaw($service_id, $version_id, $vcl_name);
} catch (Exception $e) {
    echo 'Exception when calling VclApi->getCustomVclRaw: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **vcl_name** | **string**|  |

### Return type

void (empty response body)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCustomVcl()`

```php
listCustomVcl($service_id, $version_id): \OpenAPI\Client\Model\ModelVcl[]
```

List custom VCL files

List the uploaded VCLs for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int

try {
    $result = $apiInstance->listCustomVcl($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclApi->listCustomVcl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ModelVcl[]**](../Model/ModelVcl.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setCustomVclMain()`

```php
setCustomVclMain($service_id, $version_id, $vcl_name): \OpenAPI\Client\Model\ModelVcl
```

Set a custom VCL file as main

Set the specified VCL as the main.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$vcl_name = 'vcl_name_example'; // string

try {
    $result = $apiInstance->setCustomVclMain($service_id, $version_id, $vcl_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclApi->setCustomVclMain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **vcl_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelVcl**](../Model/ModelVcl.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomVcl()`

```php
updateCustomVcl($service_id, $version_id, $vcl_name): \OpenAPI\Client\Model\ModelVcl
```

Update a custom VCL file

Update the uploaded VCL for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$vcl_name = 'vcl_name_example'; // string

try {
    $result = $apiInstance->updateCustomVcl($service_id, $version_id, $vcl_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclApi->updateCustomVcl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **vcl_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelVcl**](../Model/ModelVcl.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
