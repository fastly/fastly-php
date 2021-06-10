# OpenAPI\Client\VclServicesConditionApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCondition()**](VclServicesConditionApi.md#createCondition) | **POST** /service/{service_id}/version/{version_id}/condition | Create a condition
[**deleteCondition()**](VclServicesConditionApi.md#deleteCondition) | **DELETE** /service/{service_id}/version/{version_id}/condition/{condition_name} | Delete a condition
[**getCondition()**](VclServicesConditionApi.md#getCondition) | **GET** /service/{service_id}/version/{version_id}/condition/{condition_name} | Describe a condition
[**listConditions()**](VclServicesConditionApi.md#listConditions) | **GET** /service/{service_id}/version/{version_id}/condition | List conditions
[**updateCondition()**](VclServicesConditionApi.md#updateCondition) | **PUT** /service/{service_id}/version/{version_id}/condition/{condition_name} | Update a condition


## `createCondition()`

```php
createCondition($service_id, $version_id, $service_id2, $version, $comment, $name, $priority, $statement, $type): \OpenAPI\Client\Model\InlineObject
```

Create a condition

Creates a new condition.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclServicesConditionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$service_id2 = 'service_id_example'; // string | Alphanumeric string identifying the service.
$version = 56; // int | Integer identifying a service version.
$comment = ''; // string | A freeform descriptive note.
$name = 'name_example'; // string | Name of the condition. Required.
$priority = 100; // int | Priority determines execution order. Lower numbers execute first.
$statement = 'statement_example'; // string | A conditional expression in VCL used to determine if the condition is met.
$type = 'type_example'; // string | Type of the condition. Required.

try {
    $result = $apiInstance->createCondition($service_id, $version_id, $service_id2, $version, $comment, $name, $priority, $statement, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclServicesConditionApi->createCondition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **service_id2** | **string**| Alphanumeric string identifying the service. | [optional]
 **version** | **int**| Integer identifying a service version. | [optional]
 **comment** | **string**| A freeform descriptive note. | [optional] [default to &#39;&#39;]
 **name** | **string**| Name of the condition. Required. | [optional]
 **priority** | **int**| Priority determines execution order. Lower numbers execute first. | [optional] [default to 100]
 **statement** | **string**| A conditional expression in VCL used to determine if the condition is met. | [optional]
 **type** | **string**| Type of the condition. Required. | [optional]

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

## `deleteCondition()`

```php
deleteCondition($service_id, $version_id, $condition_name): object
```

Delete a condition

Deletes the specified condition.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclServicesConditionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$condition_name = my-condition; // string

try {
    $result = $apiInstance->deleteCondition($service_id, $version_id, $condition_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclServicesConditionApi->deleteCondition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **condition_name** | **string**|  |

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

## `getCondition()`

```php
getCondition($service_id, $version_id, $condition_name): \OpenAPI\Client\Model\InlineObject
```

Describe a condition

Gets the specified condition.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclServicesConditionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$condition_name = my-condition; // string

try {
    $result = $apiInstance->getCondition($service_id, $version_id, $condition_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclServicesConditionApi->getCondition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **condition_name** | **string**|  |

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

## `listConditions()`

```php
listConditions($service_id, $version_id): \OpenAPI\Client\Model\InlineResponse200
```

List conditions

Gets all conditions for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclServicesConditionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int

try {
    $result = $apiInstance->listConditions($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclServicesConditionApi->listConditions: ', $e->getMessage(), PHP_EOL;
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

## `updateCondition()`

```php
updateCondition($service_id, $version_id, $condition_name, $service_id2, $version, $comment, $name, $priority, $statement, $type): \OpenAPI\Client\Model\InlineObject1
```

Update a condition

Updates the specified condition.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclServicesConditionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$condition_name = my-condition; // string
$service_id2 = 'service_id_example'; // string | Alphanumeric string identifying the service.
$version = 56; // int | Integer identifying a service version.
$comment = ''; // string | A freeform descriptive note.
$name = 'name_example'; // string | Name of the condition. Required.
$priority = 100; // int | Priority determines execution order. Lower numbers execute first.
$statement = 'statement_example'; // string | A conditional expression in VCL used to determine if the condition is met.
$type = 'type_example'; // string | Type of the condition. Required.

try {
    $result = $apiInstance->updateCondition($service_id, $version_id, $condition_name, $service_id2, $version, $comment, $name, $priority, $statement, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclServicesConditionApi->updateCondition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **condition_name** | **string**|  |
 **service_id2** | **string**| Alphanumeric string identifying the service. | [optional]
 **version** | **int**| Integer identifying a service version. | [optional]
 **comment** | **string**| A freeform descriptive note. | [optional] [default to &#39;&#39;]
 **name** | **string**| Name of the condition. Required. | [optional]
 **priority** | **int**| Priority determines execution order. Lower numbers execute first. | [optional] [default to 100]
 **statement** | **string**| A conditional expression in VCL used to determine if the condition is met. | [optional]
 **type** | **string**| Type of the condition. Required. | [optional]

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
