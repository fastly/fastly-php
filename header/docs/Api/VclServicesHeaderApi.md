# OpenAPI\Client\VclServicesHeaderApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createHeaderObject()**](VclServicesHeaderApi.md#createHeaderObject) | **POST** /service/{service_id}/version/{version_id}/header | Create a Header object
[**deleteHeaderObject()**](VclServicesHeaderApi.md#deleteHeaderObject) | **DELETE** /service/{service_id}/version/{version_id}/header/{header_name} | Delete a Header object
[**getHeaderObject()**](VclServicesHeaderApi.md#getHeaderObject) | **GET** /service/{service_id}/version/{version_id}/header/{header_name} | Get a Header object
[**listHeaderObjects()**](VclServicesHeaderApi.md#listHeaderObjects) | **GET** /service/{service_id}/version/{version_id}/header | List Header objects
[**updateHeaderObject()**](VclServicesHeaderApi.md#updateHeaderObject) | **PUT** /service/{service_id}/version/{version_id}/header/{header_name} | Update a Header object


## `createHeaderObject()`

```php
createHeaderObject($service_id, $version_id): \OpenAPI\Client\Model\InlineResponse200
```

Create a Header object

Creates a new Header object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclServicesHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int

try {
    $result = $apiInstance->createHeaderObject($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclServicesHeaderApi->createHeaderObject: ', $e->getMessage(), PHP_EOL;
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

## `deleteHeaderObject()`

```php
deleteHeaderObject($service_id, $version_id, $header_name): object
```

Delete a Header object

Deletes a Header object by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclServicesHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$header_name = test-header; // string

try {
    $result = $apiInstance->deleteHeaderObject($service_id, $version_id, $header_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclServicesHeaderApi->deleteHeaderObject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **header_name** | **string**|  |

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

## `getHeaderObject()`

```php
getHeaderObject($service_id, $version_id, $header_name): \OpenAPI\Client\Model\InlineResponse200
```

Get a Header object

Retrieves a Header object by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclServicesHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$header_name = test-header; // string

try {
    $result = $apiInstance->getHeaderObject($service_id, $version_id, $header_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclServicesHeaderApi->getHeaderObject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **header_name** | **string**|  |

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

## `listHeaderObjects()`

```php
listHeaderObjects($service_id, $version_id): \OpenAPI\Client\Model\InlineResponse200[]
```

List Header objects

Retrieves all Header objects for a particular Version of a Service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclServicesHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int

try {
    $result = $apiInstance->listHeaderObjects($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclServicesHeaderApi->listHeaderObjects: ', $e->getMessage(), PHP_EOL;
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

## `updateHeaderObject()`

```php
updateHeaderObject($service_id, $version_id, $header_name, $service_id2, $version, $action, $cache_condition, $dst, $ignore_if_set, $name, $priority, $regex, $request_condition, $response_condition, $src, $substitution, $type): \OpenAPI\Client\Model\InlineObject
```

Update a Header object

Modifies an existing Header object by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclServicesHeaderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$header_name = test-header; // string
$service_id2 = 'service_id_example'; // string | Alphanumeric string identifying the service.
$version = 56; // int | Integer identifying a service version.
$action = 'action_example'; // string | Accepts a string value.
$cache_condition = 'cache_condition_example'; // string | Name of the cache condition controlling when this configuration applies.
$dst = 'dst_example'; // string | Header to set.
$ignore_if_set = 56; // int | Don't add the header if it is added already. (Only applies to 'set' action).
$name = 'name_example'; // string | A handle to refer to this Header object.
$priority = 100; // int | Priority determines execution order. Lower numbers execute first.
$regex = 'regex_example'; // string | Regular expression to use. Only applies to `regex` and `regex_repeat` actions.
$request_condition = 'request_condition_example'; // string | Condition which, if met, will select this configuration during a request. Optional.
$response_condition = 'response_condition_example'; // string | Optional name of a response condition to apply.
$src = 'src_example'; // string | Variable to be used as a source for the header content. Does not apply to `delete` action.
$substitution = 'substitution_example'; // string | Value to substitute in place of regular expression. Only applies to `regex` and `regex_repeat` actions.
$type = 'type_example'; // string | Accepts a string value.

try {
    $result = $apiInstance->updateHeaderObject($service_id, $version_id, $header_name, $service_id2, $version, $action, $cache_condition, $dst, $ignore_if_set, $name, $priority, $regex, $request_condition, $response_condition, $src, $substitution, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclServicesHeaderApi->updateHeaderObject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **header_name** | **string**|  |
 **service_id2** | **string**| Alphanumeric string identifying the service. | [optional]
 **version** | **int**| Integer identifying a service version. | [optional]
 **action** | **string**| Accepts a string value. | [optional]
 **cache_condition** | **string**| Name of the cache condition controlling when this configuration applies. | [optional]
 **dst** | **string**| Header to set. | [optional]
 **ignore_if_set** | **int**| Don&#39;t add the header if it is added already. (Only applies to &#39;set&#39; action). | [optional]
 **name** | **string**| A handle to refer to this Header object. | [optional]
 **priority** | **int**| Priority determines execution order. Lower numbers execute first. | [optional] [default to 100]
 **regex** | **string**| Regular expression to use. Only applies to &#x60;regex&#x60; and &#x60;regex_repeat&#x60; actions. | [optional]
 **request_condition** | **string**| Condition which, if met, will select this configuration during a request. Optional. | [optional]
 **response_condition** | **string**| Optional name of a response condition to apply. | [optional]
 **src** | **string**| Variable to be used as a source for the header content. Does not apply to &#x60;delete&#x60; action. | [optional]
 **substitution** | **string**| Value to substitute in place of regular expression. Only applies to &#x60;regex&#x60; and &#x60;regex_repeat&#x60; actions. | [optional]
 **type** | **string**| Accepts a string value. | [optional]

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
