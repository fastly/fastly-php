# Fastly\Api\HeaderApi


```php
$apiInstance = new Fastly\Api\HeaderApi(
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
[**createHeaderObject()**](HeaderApi.md#createHeaderObject) | **POST** /service/{service_id}/version/{version_id}/header | Create a Header object
[**deleteHeaderObject()**](HeaderApi.md#deleteHeaderObject) | **DELETE** /service/{service_id}/version/{version_id}/header/{header_name} | Delete a Header object
[**getHeaderObject()**](HeaderApi.md#getHeaderObject) | **GET** /service/{service_id}/version/{version_id}/header/{header_name} | Get a Header object
[**listHeaderObjects()**](HeaderApi.md#listHeaderObjects) | **GET** /service/{service_id}/version/{version_id}/header | List Header objects
[**updateHeaderObject()**](HeaderApi.md#updateHeaderObject) | **PUT** /service/{service_id}/version/{version_id}/header/{header_name} | Update a Header object


## `createHeaderObject()`

```php
createHeaderObject($options): \Fastly\Model\HeaderResponse // Create a Header object
```

Creates a new Header object.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['action'] = 'action_example'; // string | Accepts a string value.
$options['cache_condition'] = 'cache_condition_example'; // string | Name of the cache condition controlling when this configuration applies.
$options['dst'] = 'dst_example'; // string | Header to set.
$options['name'] = 'name_example'; // string | A handle to refer to this Header object.
$options['regex'] = 'regex_example'; // string | Regular expression to use. Only applies to `regex` and `regex_repeat` actions.
$options['request_condition'] = 'request_condition_example'; // string | Condition which, if met, will select this configuration during a request. Optional.
$options['response_condition'] = 'response_condition_example'; // string | Optional name of a response condition to apply.
$options['src'] = 'src_example'; // string | Variable to be used as a source for the header content. Does not apply to `delete` action.
$options['substitution'] = 'substitution_example'; // string | Value to substitute in place of regular expression. Only applies to `regex` and `regex_repeat` actions.
$options['type'] = 'type_example'; // string | Accepts a string value.
$options['ignore_if_set'] = 56; // int | Don't add the header if it is added already. Only applies to 'set' action.
$options['priority'] = 100; // int | Priority determines execution order. Lower numbers execute first.

try {
    $result = $apiInstance->createHeaderObject($options);
} catch (Exception $e) {
    echo 'Exception when calling HeaderApi->createHeaderObject: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**action** | **string** | Accepts a string value. | [optional] [one of: 'set', 'append', 'delete', 'regex', 'regex_repeat']
**cache_condition** | **string** | Name of the cache condition controlling when this configuration applies. | [optional]
**dst** | **string** | Header to set. | [optional]
**name** | **string** | A handle to refer to this Header object. | [optional]
**regex** | **string** | Regular expression to use. Only applies to `regex` and `regex_repeat` actions. | [optional]
**request_condition** | **string** | Condition which, if met, will select this configuration during a request. Optional. | [optional]
**response_condition** | **string** | Optional name of a response condition to apply. | [optional]
**src** | **string** | Variable to be used as a source for the header content. Does not apply to `delete` action. | [optional]
**substitution** | **string** | Value to substitute in place of regular expression. Only applies to `regex` and `regex_repeat` actions. | [optional]
**type** | **string** | Accepts a string value. | [optional] [one of: 'request', 'cache', 'response']
**ignore_if_set** | **int** | Don&#39;t add the header if it is added already. Only applies to &#39;set&#39; action. | [optional]
**priority** | **int** | Priority determines execution order. Lower numbers execute first. | [optional] [defaults to 100]

### Return type

[**\Fastly\Model\HeaderResponse**](../Model/HeaderResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteHeaderObject()`

```php
deleteHeaderObject($options): \Fastly\Model\InlineResponse200 // Delete a Header object
```

Deletes a Header object by name.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['header_name'] = 'header_name_example'; // string | A handle to refer to this Header object.

try {
    $result = $apiInstance->deleteHeaderObject($options);
} catch (Exception $e) {
    echo 'Exception when calling HeaderApi->deleteHeaderObject: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**header_name** | **string** | A handle to refer to this Header object. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getHeaderObject()`

```php
getHeaderObject($options): \Fastly\Model\HeaderResponse // Get a Header object
```

Retrieves a Header object by name.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['header_name'] = 'header_name_example'; // string | A handle to refer to this Header object.

try {
    $result = $apiInstance->getHeaderObject($options);
} catch (Exception $e) {
    echo 'Exception when calling HeaderApi->getHeaderObject: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**header_name** | **string** | A handle to refer to this Header object. |

### Return type

[**\Fastly\Model\HeaderResponse**](../Model/HeaderResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listHeaderObjects()`

```php
listHeaderObjects($options): \Fastly\Model\HeaderResponse[] // List Header objects
```

Retrieves all Header objects for a particular Version of a Service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

try {
    $result = $apiInstance->listHeaderObjects($options);
} catch (Exception $e) {
    echo 'Exception when calling HeaderApi->listHeaderObjects: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\HeaderResponse[]**](../Model/HeaderResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateHeaderObject()`

```php
updateHeaderObject($options): \Fastly\Model\HeaderResponse // Update a Header object
```

Modifies an existing Header object by name.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['header_name'] = 'header_name_example'; // string | A handle to refer to this Header object.
$options['action'] = 'action_example'; // string | Accepts a string value.
$options['cache_condition'] = 'cache_condition_example'; // string | Name of the cache condition controlling when this configuration applies.
$options['dst'] = 'dst_example'; // string | Header to set.
$options['name'] = 'name_example'; // string | A handle to refer to this Header object.
$options['regex'] = 'regex_example'; // string | Regular expression to use. Only applies to `regex` and `regex_repeat` actions.
$options['request_condition'] = 'request_condition_example'; // string | Condition which, if met, will select this configuration during a request. Optional.
$options['response_condition'] = 'response_condition_example'; // string | Optional name of a response condition to apply.
$options['src'] = 'src_example'; // string | Variable to be used as a source for the header content. Does not apply to `delete` action.
$options['substitution'] = 'substitution_example'; // string | Value to substitute in place of regular expression. Only applies to `regex` and `regex_repeat` actions.
$options['type'] = 'type_example'; // string | Accepts a string value.
$options['ignore_if_set'] = 56; // int | Don't add the header if it is added already. Only applies to 'set' action.
$options['priority'] = 100; // int | Priority determines execution order. Lower numbers execute first.

try {
    $result = $apiInstance->updateHeaderObject($options);
} catch (Exception $e) {
    echo 'Exception when calling HeaderApi->updateHeaderObject: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**header_name** | **string** | A handle to refer to this Header object. |
**action** | **string** | Accepts a string value. | [optional] [one of: 'set', 'append', 'delete', 'regex', 'regex_repeat']
**cache_condition** | **string** | Name of the cache condition controlling when this configuration applies. | [optional]
**dst** | **string** | Header to set. | [optional]
**name** | **string** | A handle to refer to this Header object. | [optional]
**regex** | **string** | Regular expression to use. Only applies to `regex` and `regex_repeat` actions. | [optional]
**request_condition** | **string** | Condition which, if met, will select this configuration during a request. Optional. | [optional]
**response_condition** | **string** | Optional name of a response condition to apply. | [optional]
**src** | **string** | Variable to be used as a source for the header content. Does not apply to `delete` action. | [optional]
**substitution** | **string** | Value to substitute in place of regular expression. Only applies to `regex` and `regex_repeat` actions. | [optional]
**type** | **string** | Accepts a string value. | [optional] [one of: 'request', 'cache', 'response']
**ignore_if_set** | **int** | Don&#39;t add the header if it is added already. Only applies to &#39;set&#39; action. | [optional]
**priority** | **int** | Priority determines execution order. Lower numbers execute first. | [optional] [defaults to 100]

### Return type

[**\Fastly\Model\HeaderResponse**](../Model/HeaderResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
