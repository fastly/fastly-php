# Fastly\Api\ApisecurityOperationsApi


```php
$apiInstance = new Fastly\Api\ApisecurityOperationsApi(
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
[**apiSecurityBulkAddTagsToOperations()**](ApisecurityOperationsApi.md#apiSecurityBulkAddTagsToOperations) | **POST** /api-security/v1/services/{service_id}/operations-bulk-tags | Bulk add tags to operations
[**apiSecurityBulkCreateOperations()**](ApisecurityOperationsApi.md#apiSecurityBulkCreateOperations) | **POST** /api-security/v1/services/{service_id}/operations-bulk | Bulk create operations
[**apiSecurityBulkDeleteOperations()**](ApisecurityOperationsApi.md#apiSecurityBulkDeleteOperations) | **DELETE** /api-security/v1/services/{service_id}/operations-bulk | Bulk delete operations
[**apiSecurityCreateOperation()**](ApisecurityOperationsApi.md#apiSecurityCreateOperation) | **POST** /api-security/v1/services/{service_id}/operations | Create operation
[**apiSecurityCreateOperationTag()**](ApisecurityOperationsApi.md#apiSecurityCreateOperationTag) | **POST** /api-security/v1/services/{service_id}/tags | Create operation tag
[**apiSecurityDeleteOperation()**](ApisecurityOperationsApi.md#apiSecurityDeleteOperation) | **DELETE** /api-security/v1/services/{service_id}/operations/{operation_id} | Delete operation
[**apiSecurityDeleteOperationTag()**](ApisecurityOperationsApi.md#apiSecurityDeleteOperationTag) | **DELETE** /api-security/v1/services/{service_id}/tags/{tag_id} | Delete operation tag
[**apiSecurityGetOperation()**](ApisecurityOperationsApi.md#apiSecurityGetOperation) | **GET** /api-security/v1/services/{service_id}/operations/{operation_id} | Retrieve operation
[**apiSecurityGetOperationTag()**](ApisecurityOperationsApi.md#apiSecurityGetOperationTag) | **GET** /api-security/v1/services/{service_id}/tags/{tag_id} | Retrieve operation tag
[**apiSecurityListDiscoveredOperations()**](ApisecurityOperationsApi.md#apiSecurityListDiscoveredOperations) | **GET** /api-security/v1/services/{service_id}/discovered-operations | List discovered operations
[**apiSecurityListOperationTags()**](ApisecurityOperationsApi.md#apiSecurityListOperationTags) | **GET** /api-security/v1/services/{service_id}/tags | List operation tags
[**apiSecurityListOperations()**](ApisecurityOperationsApi.md#apiSecurityListOperations) | **GET** /api-security/v1/services/{service_id}/operations | List operations
[**apiSecurityUpdateOperation()**](ApisecurityOperationsApi.md#apiSecurityUpdateOperation) | **PATCH** /api-security/v1/services/{service_id}/operations/{operation_id} | Update operation
[**apiSecurityUpdateOperationTag()**](ApisecurityOperationsApi.md#apiSecurityUpdateOperationTag) | **PATCH** /api-security/v1/services/{service_id}/tags/{tag_id} | Update operation tag


## `apiSecurityBulkAddTagsToOperations()`

```php
apiSecurityBulkAddTagsToOperations($options): \Fastly\Model\InlineResponse2071 // Bulk add tags to operations
```

Add tags to multiple operations in a single request.

### Example
```php
    $options['service_id'] = 3NeCFuZNP1v0iyJ2vmYQI6; // string | The unique identifier of the service.
$options['operation_bulk_add_tags'] = new \Fastly\Model\OperationBulkAddTags(); // \Fastly\Model\OperationBulkAddTags

try {
    $result = $apiInstance->apiSecurityBulkAddTagsToOperations($options);
} catch (Exception $e) {
    echo 'Exception when calling ApisecurityOperationsApi->apiSecurityBulkAddTagsToOperations: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | The unique identifier of the service. |
**operation_bulk_add_tags** | [**\Fastly\Model\OperationBulkAddTags**](../Model/OperationBulkAddTags.md) |  | [optional]

### Return type

[**\Fastly\Model\InlineResponse2071**](../Model/InlineResponse2071.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `apiSecurityBulkCreateOperations()`

```php
apiSecurityBulkCreateOperations($options): \Fastly\Model\InlineResponse207 // Bulk create operations
```

Create multiple operations associated with a specific service in a single request.

### Example
```php
    $options['service_id'] = 3NeCFuZNP1v0iyJ2vmYQI6; // string | The unique identifier of the service.
$options['operation_bulk_create'] = new \Fastly\Model\OperationBulkCreate(); // \Fastly\Model\OperationBulkCreate

try {
    $result = $apiInstance->apiSecurityBulkCreateOperations($options);
} catch (Exception $e) {
    echo 'Exception when calling ApisecurityOperationsApi->apiSecurityBulkCreateOperations: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | The unique identifier of the service. |
**operation_bulk_create** | [**\Fastly\Model\OperationBulkCreate**](../Model/OperationBulkCreate.md) |  | [optional]

### Return type

[**\Fastly\Model\InlineResponse207**](../Model/InlineResponse207.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `apiSecurityBulkDeleteOperations()`

```php
apiSecurityBulkDeleteOperations($options): \Fastly\Model\InlineResponse2071 // Bulk delete operations
```

Delete multiple operations in a single request.

### Example
```php
    $options['service_id'] = 3NeCFuZNP1v0iyJ2vmYQI6; // string | The unique identifier of the service.
$options['operation_bulk_delete'] = new \Fastly\Model\OperationBulkDelete(); // \Fastly\Model\OperationBulkDelete

try {
    $result = $apiInstance->apiSecurityBulkDeleteOperations($options);
} catch (Exception $e) {
    echo 'Exception when calling ApisecurityOperationsApi->apiSecurityBulkDeleteOperations: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | The unique identifier of the service. |
**operation_bulk_delete** | [**\Fastly\Model\OperationBulkDelete**](../Model/OperationBulkDelete.md) |  | [optional]

### Return type

[**\Fastly\Model\InlineResponse2071**](../Model/InlineResponse2071.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `apiSecurityCreateOperation()`

```php
apiSecurityCreateOperation($options): \Fastly\Model\OperationGet // Create operation
```

Create a new operation associated with a specific service.

### Example
```php
    $options['service_id'] = 3NeCFuZNP1v0iyJ2vmYQI6; // string | The unique identifier of the service.
$options['operation_create'] = new \Fastly\Model\OperationCreate(); // \Fastly\Model\OperationCreate

try {
    $result = $apiInstance->apiSecurityCreateOperation($options);
} catch (Exception $e) {
    echo 'Exception when calling ApisecurityOperationsApi->apiSecurityCreateOperation: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | The unique identifier of the service. |
**operation_create** | [**\Fastly\Model\OperationCreate**](../Model/OperationCreate.md) |  | [optional]

### Return type

[**\Fastly\Model\OperationGet**](../Model/OperationGet.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `apiSecurityCreateOperationTag()`

```php
apiSecurityCreateOperationTag($options): \Fastly\Model\TagGet // Create operation tag
```

Create a new operation tag associated with a specific service.

### Example
```php
    $options['service_id'] = 3NeCFuZNP1v0iyJ2vmYQI6; // string | The unique identifier of the service.
$options['tag_create'] = new \Fastly\Model\TagCreate(); // \Fastly\Model\TagCreate

try {
    $result = $apiInstance->apiSecurityCreateOperationTag($options);
} catch (Exception $e) {
    echo 'Exception when calling ApisecurityOperationsApi->apiSecurityCreateOperationTag: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | The unique identifier of the service. |
**tag_create** | [**\Fastly\Model\TagCreate**](../Model/TagCreate.md) |  | [optional]

### Return type

[**\Fastly\Model\TagGet**](../Model/TagGet.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `apiSecurityDeleteOperation()`

```php
apiSecurityDeleteOperation($options) // Delete operation
```

Delete an existing operation associated with a specific service.

### Example
```php
    $options['service_id'] = 3NeCFuZNP1v0iyJ2vmYQI6; // string | The unique identifier of the service.
$options['operation_id'] = op_abc123def456; // string | The unique identifier of the operation.

try {
    $apiInstance->apiSecurityDeleteOperation($options);
} catch (Exception $e) {
    echo 'Exception when calling ApisecurityOperationsApi->apiSecurityDeleteOperation: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | The unique identifier of the service. |
**operation_id** | **string** | The unique identifier of the operation. |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `apiSecurityDeleteOperationTag()`

```php
apiSecurityDeleteOperationTag($options) // Delete operation tag
```

Delete an existing operation tag.

### Example
```php
    $options['service_id'] = 3NeCFuZNP1v0iyJ2vmYQI6; // string | The unique identifier of the service.
$options['tag_id'] = tag_abc123def456; // string | The unique identifier of the operation tag.

try {
    $apiInstance->apiSecurityDeleteOperationTag($options);
} catch (Exception $e) {
    echo 'Exception when calling ApisecurityOperationsApi->apiSecurityDeleteOperationTag: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | The unique identifier of the service. |
**tag_id** | **string** | The unique identifier of the operation tag. |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `apiSecurityGetOperation()`

```php
apiSecurityGetOperation($options): \Fastly\Model\OperationGet // Retrieve operation
```

Get a specific operation associated with a service.

### Example
```php
    $options['service_id'] = 3NeCFuZNP1v0iyJ2vmYQI6; // string | The unique identifier of the service.
$options['operation_id'] = op_abc123def456; // string | The unique identifier of the operation.

try {
    $result = $apiInstance->apiSecurityGetOperation($options);
} catch (Exception $e) {
    echo 'Exception when calling ApisecurityOperationsApi->apiSecurityGetOperation: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | The unique identifier of the service. |
**operation_id** | **string** | The unique identifier of the operation. |

### Return type

[**\Fastly\Model\OperationGet**](../Model/OperationGet.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `apiSecurityGetOperationTag()`

```php
apiSecurityGetOperationTag($options): \Fastly\Model\TagGet // Retrieve operation tag
```

Get a specific operation tag by its unique identifier.

### Example
```php
    $options['service_id'] = 3NeCFuZNP1v0iyJ2vmYQI6; // string | The unique identifier of the service.
$options['tag_id'] = tag_abc123def456; // string | The unique identifier of the operation tag.

try {
    $result = $apiInstance->apiSecurityGetOperationTag($options);
} catch (Exception $e) {
    echo 'Exception when calling ApisecurityOperationsApi->apiSecurityGetOperationTag: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | The unique identifier of the service. |
**tag_id** | **string** | The unique identifier of the operation tag. |

### Return type

[**\Fastly\Model\TagGet**](../Model/TagGet.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `apiSecurityListDiscoveredOperations()`

```php
apiSecurityListDiscoveredOperations($options): \Fastly\Model\InlineResponse2001 // List discovered operations
```

List all discovered operations associated with a specific service. Optionally filter operations by status.

### Example
```php
    $options['service_id'] = 3NeCFuZNP1v0iyJ2vmYQI6; // string | The unique identifier of the service.
$options['method'] = ["GET","POST"]; // string[] | Filter operations by HTTP method.
$options['domain'] = ["example.com","api.example.com"]; // string[] | Filter operations by fully-qualified domain name (exact match).
$options['path'] = /api/v1/users; // string | Filter operations by path (exact match).
$options['limit'] = 100; // int | The maximum number of operations to return per page.
$options['page'] = 1; // int | The page number to return.

try {
    $result = $apiInstance->apiSecurityListDiscoveredOperations($options);
} catch (Exception $e) {
    echo 'Exception when calling ApisecurityOperationsApi->apiSecurityListDiscoveredOperations: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | The unique identifier of the service. |
**method** | [**string[]**](../Model/string.md) | Filter operations by HTTP method. | [optional] [one of: 'GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'HEAD', 'OPTIONS', 'CONNECT', 'TRACE']
**domain** | [**string[]**](../Model/string.md) | Filter operations by fully-qualified domain name (exact match). | [optional]
**path** | **string** | Filter operations by path (exact match). | [optional]
**limit** | **int** | The maximum number of operations to return per page. | [optional] [defaults to 100]
**page** | **int** | The page number to return. | [optional] [defaults to 0]

### Return type

[**\Fastly\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `apiSecurityListOperationTags()`

```php
apiSecurityListOperationTags($options): \Fastly\Model\InlineResponse2003 // List operation tags
```

List all operation tags associated with a specific service.

### Example
```php
    $options['service_id'] = 3NeCFuZNP1v0iyJ2vmYQI6; // string | The unique identifier of the service.
$options['limit'] = 100; // int | The maximum number of operations to return per page.
$options['page'] = 1; // int | The page number to return.

try {
    $result = $apiInstance->apiSecurityListOperationTags($options);
} catch (Exception $e) {
    echo 'Exception when calling ApisecurityOperationsApi->apiSecurityListOperationTags: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | The unique identifier of the service. |
**limit** | **int** | The maximum number of operations to return per page. | [optional] [defaults to 100]
**page** | **int** | The page number to return. | [optional] [defaults to 0]

### Return type

[**\Fastly\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `apiSecurityListOperations()`

```php
apiSecurityListOperations($options): \Fastly\Model\InlineResponse2002 // List operations
```

List all operations associated with a specific service. Optionally filter operations by tag ID.

### Example
```php
    $options['service_id'] = 3NeCFuZNP1v0iyJ2vmYQI6; // string | The unique identifier of the service.
$options['tag_id'] = tag_abc123def456; // string | Filter operations by operation tag ID. Only operations associated with this operation tag will be returned.
$options['status'] = SAVED; // string | Filter operations by status. Defaults to SAVED if omitted.
$options['method'] = ["GET","POST"]; // string[] | Filter operations by HTTP method.
$options['domain'] = ["example.com","api.example.com"]; // string[] | Filter operations by fully-qualified domain name (exact match).
$options['path'] = /api/v1/users; // string | Filter operations by path (exact match).
$options['limit'] = 100; // int | The maximum number of operations to return per page.
$options['page'] = 1; // int | The page number to return.

try {
    $result = $apiInstance->apiSecurityListOperations($options);
} catch (Exception $e) {
    echo 'Exception when calling ApisecurityOperationsApi->apiSecurityListOperations: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | The unique identifier of the service. |
**tag_id** | **string** | Filter operations by operation tag ID. Only operations associated with this operation tag will be returned. | [optional]
**status** | **string** | Filter operations by status. Defaults to SAVED if omitted. | [optional] [one of: 'SAVED', 'IGNORED'] [defaults to 'SAVED']
**method** | [**string[]**](../Model/string.md) | Filter operations by HTTP method. | [optional] [one of: 'GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'HEAD', 'OPTIONS', 'CONNECT', 'TRACE']
**domain** | [**string[]**](../Model/string.md) | Filter operations by fully-qualified domain name (exact match). | [optional]
**path** | **string** | Filter operations by path (exact match). | [optional]
**limit** | **int** | The maximum number of operations to return per page. | [optional] [defaults to 100]
**page** | **int** | The page number to return. | [optional] [defaults to 0]

### Return type

[**\Fastly\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `apiSecurityUpdateOperation()`

```php
apiSecurityUpdateOperation($options): \Fastly\Model\OperationGet // Update operation
```

Partially update an existing operation associated with a specific service.

### Example
```php
    $options['service_id'] = 3NeCFuZNP1v0iyJ2vmYQI6; // string | The unique identifier of the service.
$options['operation_id'] = op_abc123def456; // string | The unique identifier of the operation.
$options['operation_update'] = new \Fastly\Model\OperationUpdate(); // \Fastly\Model\OperationUpdate

try {
    $result = $apiInstance->apiSecurityUpdateOperation($options);
} catch (Exception $e) {
    echo 'Exception when calling ApisecurityOperationsApi->apiSecurityUpdateOperation: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | The unique identifier of the service. |
**operation_id** | **string** | The unique identifier of the operation. |
**operation_update** | [**\Fastly\Model\OperationUpdate**](../Model/OperationUpdate.md) |  | [optional]

### Return type

[**\Fastly\Model\OperationGet**](../Model/OperationGet.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `apiSecurityUpdateOperationTag()`

```php
apiSecurityUpdateOperationTag($options): \Fastly\Model\TagGet // Update operation tag
```

Partially update an existing operation tag.

### Example
```php
    $options['service_id'] = 3NeCFuZNP1v0iyJ2vmYQI6; // string | The unique identifier of the service.
$options['tag_id'] = tag_abc123def456; // string | The unique identifier of the operation tag.
$options['body'] = new \Fastly\Model\TagBase(); // \Fastly\Model\TagBase

try {
    $result = $apiInstance->apiSecurityUpdateOperationTag($options);
} catch (Exception $e) {
    echo 'Exception when calling ApisecurityOperationsApi->apiSecurityUpdateOperationTag: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | The unique identifier of the service. |
**tag_id** | **string** | The unique identifier of the operation tag. |
**body** | **\Fastly\Model\TagBase** |  | [optional]

### Return type

[**\Fastly\Model\TagGet**](../Model/TagGet.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
