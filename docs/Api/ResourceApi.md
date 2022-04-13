# Fastly\Api\ResourceApi


```php
$apiInstance = new Fastly\Api\ResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**createResource()**](ResourceApi.md#createResource) | **POST** /service/{service_id}/version/{version_id}/resource | Create a resource
[**deleteResource()**](ResourceApi.md#deleteResource) | **DELETE** /service/{service_id}/version/{version_id}/resource/{resource_id} | Delete a resource
[**getResource()**](ResourceApi.md#getResource) | **GET** /service/{service_id}/version/{version_id}/resource/{resource_id} | Display a resource
[**listResources()**](ResourceApi.md#listResources) | **GET** /service/{service_id}/version/{version_id}/resource | List resources
[**updateResource()**](ResourceApi.md#updateResource) | **PUT** /service/{service_id}/version/{version_id}/resource/{resource_id} | Update a resource


## `createResource()`

```php
createResource($options): \Fastly\Model\ResourceResponse // Create a resource
```

Create a resource.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['name'] = 'name_example'; // string | The name of the resource.
$options['resource_id'] = 'resource_id_example'; // string | The ID of the linked resource.

try {
    $result = $apiInstance->createResource($options);
} catch (Exception $e) {
    echo 'Exception when calling ResourceApi->createResource: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**name** | **string** | The name of the resource. | [optional]
**resource_id** | **string** | The ID of the linked resource. | [optional]

### Return type

[**\Fastly\Model\ResourceResponse**](../Model/ResourceResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteResource()`

```php
deleteResource($options): \Fastly\Model\InlineResponse200 // Delete a resource
```

Delete a resource.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['resource_id'] = 'resource_id_example'; // string | An alphanumeric string identifying the resource.

try {
    $result = $apiInstance->deleteResource($options);
} catch (Exception $e) {
    echo 'Exception when calling ResourceApi->deleteResource: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**resource_id** | **string** | An alphanumeric string identifying the resource. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getResource()`

```php
getResource($options): \Fastly\Model\ResourceResponse // Display a resource
```

Display a resource by its identifier.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['resource_id'] = 'resource_id_example'; // string | An alphanumeric string identifying the resource.

try {
    $result = $apiInstance->getResource($options);
} catch (Exception $e) {
    echo 'Exception when calling ResourceApi->getResource: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**resource_id** | **string** | An alphanumeric string identifying the resource. |

### Return type

[**\Fastly\Model\ResourceResponse**](../Model/ResourceResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listResources()`

```php
listResources($options): \Fastly\Model\ResourceResponse[] // List resources
```

List resources.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

try {
    $result = $apiInstance->listResources($options);
} catch (Exception $e) {
    echo 'Exception when calling ResourceApi->listResources: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\ResourceResponse[]**](../Model/ResourceResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateResource()`

```php
updateResource($options): \Fastly\Model\ResourceResponse // Update a resource
```

Update a resource.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['resource_id'] = 'resource_id_example'; // string | An alphanumeric string identifying the resource.
$options['name'] = 'name_example'; // string | The name of the resource.

try {
    $result = $apiInstance->updateResource($options);
} catch (Exception $e) {
    echo 'Exception when calling ResourceApi->updateResource: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**resource_id** | **string** | An alphanumeric string identifying the resource. |
**name** | **string** | The name of the resource. | [optional]

### Return type

[**\Fastly\Model\ResourceResponse**](../Model/ResourceResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
