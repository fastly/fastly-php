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

> [!NOTE]
> All URIs are relative to `https://api.fastly.com`

Method | HTTP request | Description
------ | ------------ | -----------
[**createResource()**](ResourceApi.md#createResource) | **POST** /service/{service_id}/version/{version_id}/resource | Create a resource link
[**deleteResource()**](ResourceApi.md#deleteResource) | **DELETE** /service/{service_id}/version/{version_id}/resource/{id} | Delete a resource link
[**getResource()**](ResourceApi.md#getResource) | **GET** /service/{service_id}/version/{version_id}/resource/{id} | Display a resource link
[**listResources()**](ResourceApi.md#listResources) | **GET** /service/{service_id}/version/{version_id}/resource | List resource links
[**updateResource()**](ResourceApi.md#updateResource) | **PUT** /service/{service_id}/version/{version_id}/resource/{id} | Update a resource link


## `createResource()`

```php
createResource($options): \Fastly\Model\ResourceResponse // Create a resource link
```

Create a link between a resource and a service version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['resource_id'] = 'resource_id_example'; // string | The ID of the underlying linked resource.
$options['name'] = 'name_example'; // string | The name of the resource link. Note this is separate from the resource store name and might not match the store name.

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
**resource_id** | **string** | The ID of the underlying linked resource. | [optional]
**name** | **string** | The name of the resource link. Note this is separate from the resource store name and might not match the store name. | [optional]

### Return type

[**\Fastly\Model\ResourceResponse**](../Model/ResourceResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteResource()`

```php
deleteResource($options): \Fastly\Model\InlineResponse200 // Delete a resource link
```

Delete a link between a resource and a service version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['id'] = 'id_example'; // string | An alphanumeric string identifying the resource link.

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
**id** | **string** | An alphanumeric string identifying the resource link. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getResource()`

```php
getResource($options): \Fastly\Model\ResourceResponse // Display a resource link
```

Display a resource link by its identifier.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['id'] = 'id_example'; // string | An alphanumeric string identifying the resource link.

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
**id** | **string** | An alphanumeric string identifying the resource link. |

### Return type

[**\Fastly\Model\ResourceResponse**](../Model/ResourceResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listResources()`

```php
listResources($options): \Fastly\Model\ResourceResponse[] // List resource links
```

List links between resources and services

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
updateResource($options): \Fastly\Model\ResourceResponse // Update a resource link
```

Update a link between a resource and a service version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['id'] = 'id_example'; // string | An alphanumeric string identifying the resource link.
$options['resource_id'] = 'resource_id_example'; // string | The ID of the underlying linked resource.
$options['name'] = 'name_example'; // string | The name of the resource link. Note this is separate from the resource store name and might not match the store name.

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
**id** | **string** | An alphanumeric string identifying the resource link. |
**resource_id** | **string** | The ID of the underlying linked resource. | [optional]
**name** | **string** | The name of the resource link. Note this is separate from the resource store name and might not match the store name. | [optional]

### Return type

[**\Fastly\Model\ResourceResponse**](../Model/ResourceResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
