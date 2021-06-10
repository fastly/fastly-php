# OpenAPI\Client\ServicesDomainApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkDomain()**](ServicesDomainApi.md#checkDomain) | **GET** /service/{service_id}/version/{version_id}/domain/{domain_name}/check | Validate DNS configuration for a single domain on a service
[**checkDomains()**](ServicesDomainApi.md#checkDomains) | **GET** /service/{service_id}/version/{version_id}/domain/check_all | Validate DNS configuration for all domains on a service
[**createDomain()**](ServicesDomainApi.md#createDomain) | **POST** /service/{service_id}/version/{version_id}/domain | Add a domain name to a service
[**deleteDomain()**](ServicesDomainApi.md#deleteDomain) | **DELETE** /service/{service_id}/version/{version_id}/domain/{domain_name} | Remove a domain from a service
[**getDomain()**](ServicesDomainApi.md#getDomain) | **GET** /service/{service_id}/version/{version_id}/domain/{domain_name} | Describe a domain
[**listDomains()**](ServicesDomainApi.md#listDomains) | **GET** /service/{service_id}/version/{version_id}/domain | List domains
[**updateDomain()**](ServicesDomainApi.md#updateDomain) | **PUT** /service/{service_id}/version/{version_id}/domain/{domain_name} | Update a domain


## `checkDomain()`

```php
checkDomain($service_id, $version_id, $domain_name): OneOfObjectStringBoolean[]
```

Validate DNS configuration for a single domain on a service

Checks the status of a specific domain's DNS record for a Service Version. Returns an array in the same format as domain/check_all.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServicesDomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$domain_name = www.example.com; // string

try {
    $result = $apiInstance->checkDomain($service_id, $version_id, $domain_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesDomainApi->checkDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **domain_name** | **string**|  |

### Return type

[**OneOfObjectStringBoolean[]**](../Model/OneOfObjectStringBoolean.md)

### Authorization

[token_engineer](../../README.md#token_engineer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkDomains()`

```php
checkDomains($service_id, $version_id): OneOfObjectStringBoolean[][]
```

Validate DNS configuration for all domains on a service

Checks the status of all domains' DNS records for a Service Version. Returns an array of 3 items. The first is the details for the domain, the second is the current CNAME of the domain, and the third is a boolean indicating whether or not it has been properly setup to use Fastly.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServicesDomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int

try {
    $result = $apiInstance->checkDomains($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesDomainApi->checkDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

[**OneOfObjectStringBoolean[][]**](../Model/array.md)

### Authorization

[token_engineer](../../README.md#token_engineer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDomain()`

```php
createDomain($service_id, $version_id, $service_id2, $version, $created_at, $deleted_at, $updated_at, $comment, $name): \OpenAPI\Client\Model\InlineObject
```

Add a domain name to a service

Create a domain for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServicesDomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$service_id2 = 'service_id_example'; // string | Alphanumeric string identifying the service.
$version = 56; // int | Integer identifying a service version.
$created_at = 'created_at_example'; // string | Date and time in ISO 8601 format.
$deleted_at = 'deleted_at_example'; // string | Date and time in ISO 8601 format.
$updated_at = 'updated_at_example'; // string | Date and time in ISO 8601 format.
$comment = ''; // string | A freeform descriptive note.
$name = 'name_example'; // string | The name of the domain or domains associated with this service.

try {
    $result = $apiInstance->createDomain($service_id, $version_id, $service_id2, $version, $created_at, $deleted_at, $updated_at, $comment, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesDomainApi->createDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **service_id2** | **string**| Alphanumeric string identifying the service. | [optional]
 **version** | **int**| Integer identifying a service version. | [optional]
 **created_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **deleted_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **updated_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **comment** | **string**| A freeform descriptive note. | [optional] [default to &#39;&#39;]
 **name** | **string**| The name of the domain or domains associated with this service. | [optional]

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

## `deleteDomain()`

```php
deleteDomain($service_id, $version_id, $domain_name): object
```

Remove a domain from a service

Delete the domain for a particular service and versions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServicesDomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$domain_name = www.example.com; // string

try {
    $result = $apiInstance->deleteDomain($service_id, $version_id, $domain_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesDomainApi->deleteDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **domain_name** | **string**|  |

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

## `getDomain()`

```php
getDomain($service_id, $version_id, $domain_name): \OpenAPI\Client\Model\InlineObject
```

Describe a domain

Get the domain for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServicesDomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$domain_name = www.example.com; // string

try {
    $result = $apiInstance->getDomain($service_id, $version_id, $domain_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesDomainApi->getDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **domain_name** | **string**|  |

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

## `listDomains()`

```php
listDomains($service_id, $version_id): \OpenAPI\Client\Model\InlineResponse200
```

List domains

List all the domains for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServicesDomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int

try {
    $result = $apiInstance->listDomains($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesDomainApi->listDomains: ', $e->getMessage(), PHP_EOL;
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

## `updateDomain()`

```php
updateDomain($service_id, $version_id, $domain_name, $service_id2, $version, $created_at, $deleted_at, $updated_at, $comment, $name): \OpenAPI\Client\Model\InlineObject1
```

Update a domain

Update the domain for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServicesDomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$domain_name = www.example.com; // string
$service_id2 = 'service_id_example'; // string | Alphanumeric string identifying the service.
$version = 56; // int | Integer identifying a service version.
$created_at = 'created_at_example'; // string | Date and time in ISO 8601 format.
$deleted_at = 'deleted_at_example'; // string | Date and time in ISO 8601 format.
$updated_at = 'updated_at_example'; // string | Date and time in ISO 8601 format.
$comment = ''; // string | A freeform descriptive note.
$name = 'name_example'; // string | The name of the domain or domains associated with this service.

try {
    $result = $apiInstance->updateDomain($service_id, $version_id, $domain_name, $service_id2, $version, $created_at, $deleted_at, $updated_at, $comment, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesDomainApi->updateDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **domain_name** | **string**|  |
 **service_id2** | **string**| Alphanumeric string identifying the service. | [optional]
 **version** | **int**| Integer identifying a service version. | [optional]
 **created_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **deleted_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **updated_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **comment** | **string**| A freeform descriptive note. | [optional] [default to &#39;&#39;]
 **name** | **string**| The name of the domain or domains associated with this service. | [optional]

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
