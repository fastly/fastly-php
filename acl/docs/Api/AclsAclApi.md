# OpenAPI\Client\AclsAclApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAcl()**](AclsAclApi.md#createAcl) | **POST** /service/{service_id}/version/{version_id}/acl | Create a new ACL
[**deleteAcl()**](AclsAclApi.md#deleteAcl) | **DELETE** /service/{service_id}/version/{version_id}/acl/{acl_name} | Delete an ACL
[**getAcl()**](AclsAclApi.md#getAcl) | **GET** /service/{service_id}/version/{version_id}/acl/{acl_name} | Describe an ACL
[**listAcls()**](AclsAclApi.md#listAcls) | **GET** /service/{service_id}/version/{version_id}/acl | List ACLs
[**updateAcl()**](AclsAclApi.md#updateAcl) | **PUT** /service/{service_id}/version/{version_id}/acl/{acl_name} | Update an ACL


## `createAcl()`

```php
createAcl($service_id, $version_id, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $id): \OpenAPI\Client\Model\InlineObject
```

Create a new ACL

Create a new ACL attached to the specified service version. A new, empty ACL must be attached to a draft version of a service. The version associated with the ACL must be activated to be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AclsAclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$created_at = 'created_at_example'; // string | Date and time in ISO 8601 format.
$deleted_at = 'deleted_at_example'; // string | Date and time in ISO 8601 format.
$updated_at = 'updated_at_example'; // string | Date and time in ISO 8601 format.
$service_id2 = 'service_id_example'; // string | Alphanumeric string identifying the service.
$version = 56; // int | Integer identifying a service version.
$name = 'name_example'; // string | Name for the ACL. Must start with an alphanumeric character and contain only alphanumeric characters, underscores, and whitespace. Required.
$id = 'id_example'; // string | Alphanumeric string identifying a ACL.

try {
    $result = $apiInstance->createAcl($service_id, $version_id, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AclsAclApi->createAcl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **created_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **deleted_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **updated_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **service_id2** | **string**| Alphanumeric string identifying the service. | [optional]
 **version** | **int**| Integer identifying a service version. | [optional]
 **name** | **string**| Name for the ACL. Must start with an alphanumeric character and contain only alphanumeric characters, underscores, and whitespace. Required. | [optional]
 **id** | **string**| Alphanumeric string identifying a ACL. | [optional]

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

## `deleteAcl()`

```php
deleteAcl($service_id, $version_id, $acl_name): object
```

Delete an ACL

Delete an ACL from the specified service version. To remove an ACL from use, the ACL must be deleted from a draft version and the version without the ACL must be activated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AclsAclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$acl_name = my_acl; // string

try {
    $result = $apiInstance->deleteAcl($service_id, $version_id, $acl_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AclsAclApi->deleteAcl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **acl_name** | **string**|  |

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

## `getAcl()`

```php
getAcl($service_id, $version_id, $acl_name): \OpenAPI\Client\Model\InlineObject
```

Describe an ACL

Retrieve a single ACL by name for the version and service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AclsAclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$acl_name = my_acl; // string

try {
    $result = $apiInstance->getAcl($service_id, $version_id, $acl_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AclsAclApi->getAcl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **acl_name** | **string**|  |

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

## `listAcls()`

```php
listAcls($service_id, $version_id): \OpenAPI\Client\Model\InlineResponse200[]
```

List ACLs

List ACLs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AclsAclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int

try {
    $result = $apiInstance->listAcls($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AclsAclApi->listAcls: ', $e->getMessage(), PHP_EOL;
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

## `updateAcl()`

```php
updateAcl($service_id, $version_id, $acl_name, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $id): \OpenAPI\Client\Model\InlineObject1
```

Update an ACL

Update an ACL for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AclsAclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$acl_name = my_acl; // string
$created_at = 'created_at_example'; // string | Date and time in ISO 8601 format.
$deleted_at = 'deleted_at_example'; // string | Date and time in ISO 8601 format.
$updated_at = 'updated_at_example'; // string | Date and time in ISO 8601 format.
$service_id2 = 'service_id_example'; // string | Alphanumeric string identifying the service.
$version = 56; // int | Integer identifying a service version.
$name = 'name_example'; // string | Name for the ACL. Must start with an alphanumeric character and contain only alphanumeric characters, underscores, and whitespace. Required.
$id = 'id_example'; // string | Alphanumeric string identifying a ACL.

try {
    $result = $apiInstance->updateAcl($service_id, $version_id, $acl_name, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AclsAclApi->updateAcl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **acl_name** | **string**|  |
 **created_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **deleted_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **updated_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **service_id2** | **string**| Alphanumeric string identifying the service. | [optional]
 **version** | **int**| Integer identifying a service version. | [optional]
 **name** | **string**| Name for the ACL. Must start with an alphanumeric character and contain only alphanumeric characters, underscores, and whitespace. Required. | [optional]
 **id** | **string**| Alphanumeric string identifying a ACL. | [optional]

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
