# Fastly\Api\ServiceApi


```php
$apiInstance = new Fastly\Api\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
```

## Methods

> [!NOTE]
> All URIs are relative to `https://api.fastly.com`

Method | HTTP request | Description
------ | ------------ | -----------
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
createService($options): \Fastly\Model\ServiceResponse // Create a service
```

Create a service.

### Example
```php
    $options['comment'] = 'comment_example'; // string | A freeform descriptive note.
$options['name'] = 'name_example'; // string | The name of the service.
$options['customer_id'] = 'customer_id_example'; // string | Alphanumeric string identifying the customer.
$options['type'] = 'type_example'; // string | The type of this service.

try {
    $result = $apiInstance->createService($options);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->createService: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**comment** | **string** | A freeform descriptive note. | [optional]
**name** | **string** | The name of the service. | [optional]
**customer_id** | **string** | Alphanumeric string identifying the customer. | [optional]
**type** | **string** | The type of this service. | [optional] [one of: 'vcl', 'wasm']

### Return type

[**\Fastly\Model\ServiceResponse**](../Model/ServiceResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteService()`

```php
deleteService($options): \Fastly\Model\InlineResponse200 // Delete a service
```

Delete a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $result = $apiInstance->deleteService($options);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->deleteService: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getService()`

```php
getService($options): \Fastly\Model\ServiceResponse // Get a service
```

Get a specific service by id.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $result = $apiInstance->getService($options);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->getService: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

[**\Fastly\Model\ServiceResponse**](../Model/ServiceResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getServiceDetail()`

```php
getServiceDetail($options): \Fastly\Model\ServiceDetail // Get service details
```

List detailed information on a specified service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version'] = 56; // int | Number identifying a version of the service.
$options['filter_versions_active'] = True; // bool | Limits the versions array to the active versions. Accepts `true` or `false` (defaults to false).

try {
    $result = $apiInstance->getServiceDetail($options);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->getServiceDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version** | **int** | Number identifying a version of the service. | [optional]
**filter_versions_active** | **bool** | Limits the versions array to the active versions. Accepts `true` or `false` (defaults to false). | [optional]

### Return type

[**\Fastly\Model\ServiceDetail**](../Model/ServiceDetail.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listServiceDomains()`

```php
listServiceDomains($options): \Fastly\Model\DomainResponse[] // List the domains within a service
```

List the domains within a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

try {
    $result = $apiInstance->listServiceDomains($options);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->listServiceDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |

### Return type

[**\Fastly\Model\DomainResponse[]**](../Model/DomainResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listServices()`

```php
listServices($options): \Fastly\Model\ServiceListResponse[] // List services
```

List services.

### Example
```php
    $options['page'] = 1; // int | Current page.
$options['per_page'] = 20; // int | Number of records per page.
$options['sort'] = created; // string | Field on which to sort.
$options['direction'] = ascend; // string | Direction in which to sort results.

try {
    $result = $apiInstance->listServices($options);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->listServices: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**page** | **int** | Current page. | [optional]
**per_page** | **int** | Number of records per page. | [optional] [defaults to 20]
**sort** | **string** | Field on which to sort. | [optional] [defaults to 'created']
**direction** | **string** | Direction in which to sort results. | [optional] [one of: 'ascend', 'descend'] [defaults to 'ascend']

### Return type

[**\Fastly\Model\ServiceListResponse[]**](../Model/ServiceListResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `searchService()`

```php
searchService($options): \Fastly\Model\ServiceResponse // Search for a service by name
```

Get a specific service by name.

### Example
```php
    $options['name'] = 'name_example'; // string | The name of the service.

try {
    $result = $apiInstance->searchService($options);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->searchService: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**name** | **string** | The name of the service. |

### Return type

[**\Fastly\Model\ServiceResponse**](../Model/ServiceResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateService()`

```php
updateService($options): \Fastly\Model\ServiceResponse // Update a service
```

Update a service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['comment'] = 'comment_example'; // string | A freeform descriptive note.
$options['name'] = 'name_example'; // string | The name of the service.
$options['customer_id'] = 'customer_id_example'; // string | Alphanumeric string identifying the customer.

try {
    $result = $apiInstance->updateService($options);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->updateService: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**comment** | **string** | A freeform descriptive note. | [optional]
**name** | **string** | The name of the service. | [optional]
**customer_id** | **string** | Alphanumeric string identifying the customer. | [optional]

### Return type

[**\Fastly\Model\ServiceResponse**](../Model/ServiceResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
