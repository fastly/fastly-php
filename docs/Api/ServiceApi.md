# OpenAPI\Client\ServiceApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createService()**](ServiceApi.md#createService) | **POST** /service | Create a service
[**deleteService()**](ServiceApi.md#deleteService) | **DELETE** /service/{service_id} | Delete a service
[**getService()**](ServiceApi.md#getService) | **GET** /service/{service_id} | Get a service
[**getServiceDetail()**](ServiceApi.md#getServiceDetail) | **GET** /service/{service_id}/details | Get service details
[**listServiceDomains()**](ServiceApi.md#listServiceDomains) | **GET** /service/{service_id}/domain | List the domains within a service
[**listServices()**](ServiceApi.md#listServices) | **GET** /service | List services
[**searchService()**](ServiceApi.md#searchService) | **GET** /service/search | Search for a service by name
[**updateService()**](ServiceApi.md#updateService) | **PUT** /service/{service_id} | Update a service


## `createService()`

```php
createService($created_at, $deleted_at, $updated_at, $comment, $customer_id, $name, $paused, $type, $publish_key, $id, $version, $versions): \OpenAPI\Client\Model\ModelService
```

Create a service

Create a service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$created_at = 'created_at_example'; // string | Date and time in ISO 8601 format.
$deleted_at = 'deleted_at_example'; // string | Date and time in ISO 8601 format.
$updated_at = 'updated_at_example'; // string | Date and time in ISO 8601 format.
$comment = ''; // string | A freeform descriptive note.
$customer_id = 'customer_id_example'; // string | Alphanumeric string identifying the customer.
$name = 'name_example'; // string | The name of the service.
$paused = True; // bool | Whether the service is paused. Services are paused due to a lack of traffic for an extended period of time. Services are resumed either when a draft version is activated or a locked version is cloned and reactivated.
$type = 'type_example'; // string | The type of this service.
$publish_key = 'publish_key_example'; // string | Unused at this time.
$id = 'id_example'; // string | Alphanumeric string identifying the service.
$version = 56; // int | Current [version](/reference/api/services/version/) of the service.
$versions = new \OpenAPI\Client\Model\SchemasModelVersion(); // \OpenAPI\Client\Model\SchemasModelVersion[] | A list of [versions](/reference/api/services/version/) associated with the service.

try {
    $result = $apiInstance->createService($created_at, $deleted_at, $updated_at, $comment, $customer_id, $name, $paused, $type, $publish_key, $id, $version, $versions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->createService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **created_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **deleted_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **updated_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **comment** | **string**| A freeform descriptive note. | [optional] [default to &#39;&#39;]
 **customer_id** | **string**| Alphanumeric string identifying the customer. | [optional]
 **name** | **string**| The name of the service. | [optional]
 **paused** | **bool**| Whether the service is paused. Services are paused due to a lack of traffic for an extended period of time. Services are resumed either when a draft version is activated or a locked version is cloned and reactivated. | [optional]
 **type** | **string**| The type of this service. | [optional]
 **publish_key** | **string**| Unused at this time. | [optional]
 **id** | **string**| Alphanumeric string identifying the service. | [optional]
 **version** | **int**| Current [version](/reference/api/services/version/) of the service. | [optional]
 **versions** | [**\OpenAPI\Client\Model\SchemasModelVersion[]**](../Model/\OpenAPI\Client\Model\SchemasModelVersion.md)| A list of [versions](/reference/api/services/version/) associated with the service. | [optional]

### Return type

[**\OpenAPI\Client\Model\ModelService**](../Model/ModelService.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteService()`

```php
deleteService($service_id): object
```

Delete a service

Delete a service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string

try {
    $result = $apiInstance->deleteService($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->deleteService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |

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

## `getService()`

```php
getService($service_id): \OpenAPI\Client\Model\ModelService
```

Get a service

Get a specific service by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string

try {
    $result = $apiInstance->getService($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->getService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelService**](../Model/ModelService.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServiceDetail()`

```php
getServiceDetail($service_id): \OpenAPI\Client\Model\ModelServiceDetail
```

Get service details

List detailed information on a specified service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string

try {
    $result = $apiInstance->getServiceDetail($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->getServiceDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelServiceDetail**](../Model/ModelServiceDetail.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listServiceDomains()`

```php
listServiceDomains($service_id): \OpenAPI\Client\Model\ModelDomain[]
```

List the domains within a service

List the domains within a service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string

try {
    $result = $apiInstance->listServiceDomains($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->listServiceDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelDomain[]**](../Model/ModelDomain.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listServices()`

```php
listServices($page, $per_page, $sort, $direction): \OpenAPI\Client\Model\ModelService[]
```

List services

List services.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Current page.
$per_page = 20; // int | Number of records per page.
$sort = 'created'; // string | Field on which to sort.
$direction = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Direction(); // \OpenAPI\Client\Model\Direction | Direction in which to sort results.

try {
    $result = $apiInstance->listServices($page, $per_page, $sort, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->listServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Current page. | [optional]
 **per_page** | **int**| Number of records per page. | [optional] [default to 20]
 **sort** | **string**| Field on which to sort. | [optional] [default to &#39;created&#39;]
 **direction** | [**\OpenAPI\Client\Model\Direction**](../Model/.md)| Direction in which to sort results. | [optional]

### Return type

[**\OpenAPI\Client\Model\ModelService[]**](../Model/ModelService.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchService()`

```php
searchService($name): \OpenAPI\Client\Model\ModelService
```

Search for a service by name

Get a specific service by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string

try {
    $result = $apiInstance->searchService($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->searchService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelService**](../Model/ModelService.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateService()`

```php
updateService($service_id, $created_at, $deleted_at, $updated_at, $comment, $customer_id, $name, $paused, $type, $publish_key, $id, $version, $versions): \OpenAPI\Client\Model\ModelService
```

Update a service

Update a service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$created_at = 'created_at_example'; // string | Date and time in ISO 8601 format.
$deleted_at = 'deleted_at_example'; // string | Date and time in ISO 8601 format.
$updated_at = 'updated_at_example'; // string | Date and time in ISO 8601 format.
$comment = ''; // string | A freeform descriptive note.
$customer_id = 'customer_id_example'; // string | Alphanumeric string identifying the customer.
$name = 'name_example'; // string | The name of the service.
$paused = True; // bool | Whether the service is paused. Services are paused due to a lack of traffic for an extended period of time. Services are resumed either when a draft version is activated or a locked version is cloned and reactivated.
$type = 'type_example'; // string | The type of this service.
$publish_key = 'publish_key_example'; // string | Unused at this time.
$id = 'id_example'; // string | Alphanumeric string identifying the service.
$version = 56; // int | Current [version](/reference/api/services/version/) of the service.
$versions = new \OpenAPI\Client\Model\SchemasModelVersion(); // \OpenAPI\Client\Model\SchemasModelVersion[] | A list of [versions](/reference/api/services/version/) associated with the service.

try {
    $result = $apiInstance->updateService($service_id, $created_at, $deleted_at, $updated_at, $comment, $customer_id, $name, $paused, $type, $publish_key, $id, $version, $versions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->updateService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **created_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **deleted_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **updated_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **comment** | **string**| A freeform descriptive note. | [optional] [default to &#39;&#39;]
 **customer_id** | **string**| Alphanumeric string identifying the customer. | [optional]
 **name** | **string**| The name of the service. | [optional]
 **paused** | **bool**| Whether the service is paused. Services are paused due to a lack of traffic for an extended period of time. Services are resumed either when a draft version is activated or a locked version is cloned and reactivated. | [optional]
 **type** | **string**| The type of this service. | [optional]
 **publish_key** | **string**| Unused at this time. | [optional]
 **id** | **string**| Alphanumeric string identifying the service. | [optional]
 **version** | **int**| Current [version](/reference/api/services/version/) of the service. | [optional]
 **versions** | [**\OpenAPI\Client\Model\SchemasModelVersion[]**](../Model/\OpenAPI\Client\Model\SchemasModelVersion.md)| A list of [versions](/reference/api/services/version/) associated with the service. | [optional]

### Return type

[**\OpenAPI\Client\Model\ModelService**](../Model/ModelService.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
