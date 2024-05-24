# Fastly\Api\ConditionApi


```php
$apiInstance = new Fastly\Api\ConditionApi(
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
[**createCondition()**](ConditionApi.md#createCondition) | **POST** /service/{service_id}/version/{version_id}/condition | Create a condition
[**deleteCondition()**](ConditionApi.md#deleteCondition) | **DELETE** /service/{service_id}/version/{version_id}/condition/{condition_name} | Delete a condition
[**getCondition()**](ConditionApi.md#getCondition) | **GET** /service/{service_id}/version/{version_id}/condition/{condition_name} | Describe a condition
[**listConditions()**](ConditionApi.md#listConditions) | **GET** /service/{service_id}/version/{version_id}/condition | List conditions
[**updateCondition()**](ConditionApi.md#updateCondition) | **PUT** /service/{service_id}/version/{version_id}/condition/{condition_name} | Update a condition


## `createCondition()`

```php
createCondition($options): \Fastly\Model\ConditionResponse // Create a condition
```

Creates a new condition.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['comment'] = 'comment_example'; // string | A freeform descriptive note.
$options['name'] = 'name_example'; // string | Name of the condition. Required.
$options['priority'] = '100'; // string | A numeric string. Priority determines execution order. Lower numbers execute first.
$options['statement'] = 'statement_example'; // string | A conditional expression in VCL used to determine if the condition is met.
$options['service_id'] = 'service_id_example'; // string
$options['version'] = 'version_example'; // string | A numeric string that represents the service version.
$options['type'] = 'type_example'; // string | Type of the condition. Required.

try {
    $result = $apiInstance->createCondition($options);
} catch (Exception $e) {
    echo 'Exception when calling ConditionApi->createCondition: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**comment** | **string** | A freeform descriptive note. | [optional]
**name** | **string** | Name of the condition. Required. | [optional]
**priority** | **string** | A numeric string. Priority determines execution order. Lower numbers execute first. | [optional] [defaults to '100']
**statement** | **string** | A conditional expression in VCL used to determine if the condition is met. | [optional]
**service_id** | **string** |  | [optional]
**version** | **string** | A numeric string that represents the service version. | [optional]
**type** | **string** | Type of the condition. Required. | [optional] [one of: 'REQUEST', 'CACHE', 'RESPONSE', 'PREFETCH']

### Return type

[**\Fastly\Model\ConditionResponse**](../Model/ConditionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteCondition()`

```php
deleteCondition($options): \Fastly\Model\InlineResponse200 // Delete a condition
```

Deletes the specified condition.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['condition_name'] = 'condition_name_example'; // string | Name of the condition. Required.

try {
    $result = $apiInstance->deleteCondition($options);
} catch (Exception $e) {
    echo 'Exception when calling ConditionApi->deleteCondition: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**condition_name** | **string** | Name of the condition. Required. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getCondition()`

```php
getCondition($options): \Fastly\Model\ConditionResponse // Describe a condition
```

Gets the specified condition.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['condition_name'] = 'condition_name_example'; // string | Name of the condition. Required.

try {
    $result = $apiInstance->getCondition($options);
} catch (Exception $e) {
    echo 'Exception when calling ConditionApi->getCondition: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**condition_name** | **string** | Name of the condition. Required. |

### Return type

[**\Fastly\Model\ConditionResponse**](../Model/ConditionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listConditions()`

```php
listConditions($options): \Fastly\Model\ConditionResponse[] // List conditions
```

Gets all conditions for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

try {
    $result = $apiInstance->listConditions($options);
} catch (Exception $e) {
    echo 'Exception when calling ConditionApi->listConditions: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\ConditionResponse[]**](../Model/ConditionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateCondition()`

```php
updateCondition($options): \Fastly\Model\ConditionResponse // Update a condition
```

Updates the specified condition.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['condition_name'] = 'condition_name_example'; // string | Name of the condition. Required.
$options['comment'] = 'comment_example'; // string | A freeform descriptive note.
$options['name'] = 'name_example'; // string | Name of the condition. Required.
$options['priority'] = '100'; // string | A numeric string. Priority determines execution order. Lower numbers execute first.
$options['statement'] = 'statement_example'; // string | A conditional expression in VCL used to determine if the condition is met.
$options['service_id'] = 'service_id_example'; // string
$options['version'] = 'version_example'; // string | A numeric string that represents the service version.
$options['type'] = 'type_example'; // string | Type of the condition. Required.

try {
    $result = $apiInstance->updateCondition($options);
} catch (Exception $e) {
    echo 'Exception when calling ConditionApi->updateCondition: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**condition_name** | **string** | Name of the condition. Required. |
**comment** | **string** | A freeform descriptive note. | [optional]
**name** | **string** | Name of the condition. Required. | [optional]
**priority** | **string** | A numeric string. Priority determines execution order. Lower numbers execute first. | [optional] [defaults to '100']
**statement** | **string** | A conditional expression in VCL used to determine if the condition is met. | [optional]
**service_id** | **string** |  | [optional]
**version** | **string** | A numeric string that represents the service version. | [optional]
**type** | **string** | Type of the condition. Required. | [optional] [one of: 'REQUEST', 'CACHE', 'RESPONSE', 'PREFETCH']

### Return type

[**\Fastly\Model\ConditionResponse**](../Model/ConditionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
