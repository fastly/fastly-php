# OpenAPI\Client\VclServicesVclApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCustomVcl()**](VclServicesVclApi.md#createCustomVcl) | **POST** /service/{service_id}/version/{version_id}/vcl | Create a custom VCL file
[**deleteCustomVcl()**](VclServicesVclApi.md#deleteCustomVcl) | **DELETE** /service/{service_id}/version/{version_id}/vcl/{vcl_name} | Delete a custom VCL file
[**getCustomVcl()**](VclServicesVclApi.md#getCustomVcl) | **GET** /service/{service_id}/version/{version_id}/vcl/{vcl_name} | Get a custom VCL file
[**getCustomVclBoilerplate()**](VclServicesVclApi.md#getCustomVclBoilerplate) | **GET** /service/{service_id}/version/{version_id}/boilerplate | Get boilerplate VCL
[**getCustomVclGenerated()**](VclServicesVclApi.md#getCustomVclGenerated) | **GET** /service/{service_id}/version/{version_id}/generated_vcl | Get the generated VCL for a service
[**getCustomVclGeneratedHighlighted()**](VclServicesVclApi.md#getCustomVclGeneratedHighlighted) | **GET** /service/{service_id}/version/{version_id}/generated_vcl/content | Get the generated VCL with syntax highlighting
[**getCustomVclHighlighted()**](VclServicesVclApi.md#getCustomVclHighlighted) | **GET** /service/{service_id}/version/{version_id}/vcl/{vcl_name}/content | Get a custom VCL file with syntax highlighting
[**getCustomVclRaw()**](VclServicesVclApi.md#getCustomVclRaw) | **GET** /service/{service_id}/version/{version_id}/vcl/{vcl_name}/download | Download a custom VCL file
[**listCustomVcl()**](VclServicesVclApi.md#listCustomVcl) | **GET** /service/{service_id}/version/{version_id}/vcl | List custom VCL files
[**setCustomVclMain()**](VclServicesVclApi.md#setCustomVclMain) | **PUT** /service/{service_id}/version/{version_id}/vcl/{vcl_name}/main | Set a custom VCL file as main
[**updateCustomVcl()**](VclServicesVclApi.md#updateCustomVcl) | **PUT** /service/{service_id}/version/{version_id}/vcl/{vcl_name} | Update a custom VCL file


## `createCustomVcl()`

```php
createCustomVcl($service_id, $version_id): \OpenAPI\Client\Model\InlineResponse200
```

Create a custom VCL file

Upload a VCL for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclServicesVclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int

try {
    $result = $apiInstance->createCustomVcl($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclServicesVclApi->createCustomVcl: ', $e->getMessage(), PHP_EOL;
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

[token_engineer](../../README.md#token_engineer)

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


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclServicesVclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$vcl_name = test-vcl; // string

try {
    $result = $apiInstance->deleteCustomVcl($service_id, $version_id, $vcl_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclServicesVclApi->deleteCustomVcl: ', $e->getMessage(), PHP_EOL;
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

[token_engineer](../../README.md#token_engineer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomVcl()`

```php
getCustomVcl($service_id, $version_id, $vcl_name, $no_content): \OpenAPI\Client\Model\InlineResponse200
```

Get a custom VCL file

Get the uploaded VCL for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclServicesVclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$vcl_name = test-vcl; // string
$no_content = 'no_content_example'; // string | Omit VCL content (default 0).

try {
    $result = $apiInstance->getCustomVcl($service_id, $version_id, $vcl_name, $no_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclServicesVclApi->getCustomVcl: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[token_engineer](../../README.md#token_engineer)

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


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclServicesVclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int

try {
    $apiInstance->getCustomVclBoilerplate($service_id, $version_id);
} catch (Exception $e) {
    echo 'Exception when calling VclServicesVclApi->getCustomVclBoilerplate: ', $e->getMessage(), PHP_EOL;
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

[token_engineer](../../README.md#token_engineer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomVclGenerated()`

```php
getCustomVclGenerated($service_id, $version_id): \OpenAPI\Client\Model\InlineResponse200
```

Get the generated VCL for a service

Display the generated VCL for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclServicesVclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int

try {
    $result = $apiInstance->getCustomVclGenerated($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclServicesVclApi->getCustomVclGenerated: ', $e->getMessage(), PHP_EOL;
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

[token_engineer](../../README.md#token_engineer)

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


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclServicesVclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int

try {
    $apiInstance->getCustomVclGeneratedHighlighted($service_id, $version_id);
} catch (Exception $e) {
    echo 'Exception when calling VclServicesVclApi->getCustomVclGeneratedHighlighted: ', $e->getMessage(), PHP_EOL;
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

[token_engineer](../../README.md#token_engineer)

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


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclServicesVclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$vcl_name = test-vcl; // string

try {
    $apiInstance->getCustomVclHighlighted($service_id, $version_id, $vcl_name);
} catch (Exception $e) {
    echo 'Exception when calling VclServicesVclApi->getCustomVclHighlighted: ', $e->getMessage(), PHP_EOL;
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

[token_engineer](../../README.md#token_engineer)

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


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclServicesVclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$vcl_name = test-vcl; // string

try {
    $apiInstance->getCustomVclRaw($service_id, $version_id, $vcl_name);
} catch (Exception $e) {
    echo 'Exception when calling VclServicesVclApi->getCustomVclRaw: ', $e->getMessage(), PHP_EOL;
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

[token_engineer](../../README.md#token_engineer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCustomVcl()`

```php
listCustomVcl($service_id, $version_id): \OpenAPI\Client\Model\InlineResponse200[]
```

List custom VCL files

List the uploaded VCLs for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclServicesVclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int

try {
    $result = $apiInstance->listCustomVcl($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclServicesVclApi->listCustomVcl: ', $e->getMessage(), PHP_EOL;
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

## `setCustomVclMain()`

```php
setCustomVclMain($service_id, $version_id, $vcl_name): \OpenAPI\Client\Model\InlineResponse200
```

Set a custom VCL file as main

Set the specified VCL as the main.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclServicesVclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$vcl_name = test-vcl; // string

try {
    $result = $apiInstance->setCustomVclMain($service_id, $version_id, $vcl_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclServicesVclApi->setCustomVclMain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **vcl_name** | **string**|  |

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

## `updateCustomVcl()`

```php
updateCustomVcl($service_id, $version_id, $vcl_name): \OpenAPI\Client\Model\InlineResponse200
```

Update a custom VCL file

Update the uploaded VCL for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclServicesVclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$vcl_name = test-vcl; // string

try {
    $result = $apiInstance->updateCustomVcl($service_id, $version_id, $vcl_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclServicesVclApi->updateCustomVcl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **vcl_name** | **string**|  |

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
