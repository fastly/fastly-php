# OpenAPI\Client\AclEntryApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkUpdateAclEntries()**](AclEntryApi.md#bulkUpdateAclEntries) | **PATCH** /service/{service_id}/acl/{acl_id}/entries | Update multiple ACL entries
[**createAclEntry()**](AclEntryApi.md#createAclEntry) | **POST** /service/{service_id}/acl/{acl_id}/entry | Create an ACL entry
[**deleteAclEntry()**](AclEntryApi.md#deleteAclEntry) | **DELETE** /service/{service_id}/acl/{acl_id}/entry/{acl_entry_id} | Delete an ACL entry
[**getAclEntry()**](AclEntryApi.md#getAclEntry) | **GET** /service/{service_id}/acl/{acl_id}/entry/{acl_entry_id} | Describe an ACL entry
[**listAclEntries()**](AclEntryApi.md#listAclEntries) | **GET** /service/{service_id}/acl/{acl_id}/entries | List ACL entries
[**updateAclEntry()**](AclEntryApi.md#updateAclEntry) | **PATCH** /service/{service_id}/acl/{acl_id}/entry/{acl_entry_id} | Update an ACL entry


## `bulkUpdateAclEntries()`

```php
bulkUpdateAclEntries($service_id, $acl_id, $inline_object): object
```

Update multiple ACL entries

Update multiple ACL entries on the same ACL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AclEntryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$acl_id = 'acl_id_example'; // string
$inline_object = new \OpenAPI\Client\Model\InlineObject(); // \OpenAPI\Client\Model\InlineObject

try {
    $result = $apiInstance->bulkUpdateAclEntries($service_id, $acl_id, $inline_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AclEntryApi->bulkUpdateAclEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **acl_id** | **string**|  |
 **inline_object** | [**\OpenAPI\Client\Model\InlineObject**](../Model/InlineObject.md)|  | [optional]

### Return type

**object**

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAclEntry()`

```php
createAclEntry($service_id, $acl_id, $model_acl_entry): \OpenAPI\Client\Model\ModelAclEntry
```

Create an ACL entry

Add an ACL entry to an ACL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AclEntryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$acl_id = 'acl_id_example'; // string
$model_acl_entry = {"subnet":8,"ip":"127.0.0.1"}; // \OpenAPI\Client\Model\ModelAclEntry

try {
    $result = $apiInstance->createAclEntry($service_id, $acl_id, $model_acl_entry);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AclEntryApi->createAclEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **acl_id** | **string**|  |
 **model_acl_entry** | [**\OpenAPI\Client\Model\ModelAclEntry**](../Model/ModelAclEntry.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ModelAclEntry**](../Model/ModelAclEntry.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAclEntry()`

```php
deleteAclEntry($service_id, $acl_id, $acl_entry_id): object
```

Delete an ACL entry

Delete an ACL entry from a specified ACL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AclEntryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$acl_id = 'acl_id_example'; // string
$acl_entry_id = 'acl_entry_id_example'; // string

try {
    $result = $apiInstance->deleteAclEntry($service_id, $acl_id, $acl_entry_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AclEntryApi->deleteAclEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **acl_id** | **string**|  |
 **acl_entry_id** | **string**|  |

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

## `getAclEntry()`

```php
getAclEntry($service_id, $acl_id, $acl_entry_id): \OpenAPI\Client\Model\ModelAclEntry
```

Describe an ACL entry

Retrieve a single ACL entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AclEntryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$acl_id = 'acl_id_example'; // string
$acl_entry_id = 'acl_entry_id_example'; // string

try {
    $result = $apiInstance->getAclEntry($service_id, $acl_id, $acl_entry_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AclEntryApi->getAclEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **acl_id** | **string**|  |
 **acl_entry_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelAclEntry**](../Model/ModelAclEntry.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAclEntries()`

```php
listAclEntries($service_id, $acl_id, $page, $per_page, $sort, $direction): \OpenAPI\Client\Model\ModelAclEntry[]
```

List ACL entries

List ACL entries for a specified ACL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AclEntryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$acl_id = 'acl_id_example'; // string
$page = 56; // int | Current page.
$per_page = 20; // int | Number of records per page.
$sort = 'created'; // string | Field on which to sort.
$direction = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Direction(); // \OpenAPI\Client\Model\Direction | Direction in which to sort results.

try {
    $result = $apiInstance->listAclEntries($service_id, $acl_id, $page, $per_page, $sort, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AclEntryApi->listAclEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **acl_id** | **string**|  |
 **page** | **int**| Current page. | [optional]
 **per_page** | **int**| Number of records per page. | [optional] [default to 20]
 **sort** | **string**| Field on which to sort. | [optional] [default to &#39;created&#39;]
 **direction** | [**\OpenAPI\Client\Model\Direction**](../Model/.md)| Direction in which to sort results. | [optional]

### Return type

[**\OpenAPI\Client\Model\ModelAclEntry[]**](../Model/ModelAclEntry.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAclEntry()`

```php
updateAclEntry($service_id, $acl_id, $acl_entry_id, $model_acl_entry): \OpenAPI\Client\Model\ModelAclEntry
```

Update an ACL entry

Update an ACL entry for a specified ACL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AclEntryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$acl_id = 'acl_id_example'; // string
$acl_entry_id = 'acl_entry_id_example'; // string
$model_acl_entry = {"ip":"127.0.0.1"}; // \OpenAPI\Client\Model\ModelAclEntry

try {
    $result = $apiInstance->updateAclEntry($service_id, $acl_id, $acl_entry_id, $model_acl_entry);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AclEntryApi->updateAclEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **acl_id** | **string**|  |
 **acl_entry_id** | **string**|  |
 **model_acl_entry** | [**\OpenAPI\Client\Model\ModelAclEntry**](../Model/ModelAclEntry.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ModelAclEntry**](../Model/ModelAclEntry.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
