# Fastly\Api\SnippetApi


```php
$apiInstance = new Fastly\Api\SnippetApi(
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
[**createSnippet()**](SnippetApi.md#createSnippet) | **POST** /service/{service_id}/version/{version_id}/snippet | Create a snippet
[**deleteSnippet()**](SnippetApi.md#deleteSnippet) | **DELETE** /service/{service_id}/version/{version_id}/snippet/{name} | Delete a snippet
[**getSnippet()**](SnippetApi.md#getSnippet) | **GET** /service/{service_id}/version/{version_id}/snippet/{name} | Get a versioned snippet
[**getSnippetDynamic()**](SnippetApi.md#getSnippetDynamic) | **GET** /service/{service_id}/snippet/{id} | Get a dynamic snippet
[**listSnippets()**](SnippetApi.md#listSnippets) | **GET** /service/{service_id}/version/{version_id}/snippet | List snippets
[**updateSnippet()**](SnippetApi.md#updateSnippet) | **PUT** /service/{service_id}/version/{version_id}/snippet/{name} | Update a versioned snippet
[**updateSnippetDynamic()**](SnippetApi.md#updateSnippetDynamic) | **PUT** /service/{service_id}/snippet/{id} | Update a dynamic snippet


## `createSnippet()`

```php
createSnippet($options): \Fastly\Model\SnippetResponse // Create a snippet
```

Create a snippet for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['name'] = 'name_example'; // string | The name for the snippet.
$options['type'] = 'type_example'; // string | The location in generated VCL where the snippet should be placed.
$options['content'] = 'content_example'; // string | The VCL code that specifies exactly what the snippet does.
$options['priority'] = '100'; // string | Priority determines execution order. Lower numbers execute first.
$options['dynamic'] = 'dynamic_example'; // string | Sets the snippet version.

try {
    $result = $apiInstance->createSnippet($options);
} catch (Exception $e) {
    echo 'Exception when calling SnippetApi->createSnippet: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**name** | **string** | The name for the snippet. | [optional]
**type** | **string** | The location in generated VCL where the snippet should be placed. | [optional] [one of: 'init', 'recv', 'hash', 'hit', 'miss', 'pass', 'fetch', 'error', 'deliver', 'log', 'none']
**content** | **string** | The VCL code that specifies exactly what the snippet does. | [optional]
**priority** | **string** | Priority determines execution order. Lower numbers execute first. | [optional] [defaults to '100']
**dynamic** | **string** | Sets the snippet version. | [optional] [one of: '0', '1']

### Return type

[**\Fastly\Model\SnippetResponse**](../Model/SnippetResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteSnippet()`

```php
deleteSnippet($options): \Fastly\Model\InlineResponse200 // Delete a snippet
```

Delete a specific snippet for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['name'] = 'name_example'; // string | The name for the snippet.

try {
    $result = $apiInstance->deleteSnippet($options);
} catch (Exception $e) {
    echo 'Exception when calling SnippetApi->deleteSnippet: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**name** | **string** | The name for the snippet. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getSnippet()`

```php
getSnippet($options): \Fastly\Model\SnippetResponse // Get a versioned snippet
```

Get a single snippet for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['name'] = 'name_example'; // string | The name for the snippet.

try {
    $result = $apiInstance->getSnippet($options);
} catch (Exception $e) {
    echo 'Exception when calling SnippetApi->getSnippet: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**name** | **string** | The name for the snippet. |

### Return type

[**\Fastly\Model\SnippetResponse**](../Model/SnippetResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getSnippetDynamic()`

```php
getSnippetDynamic($options): \Fastly\Model\SnippetResponse // Get a dynamic snippet
```

Get a single dynamic snippet for a particular service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['id'] = 'id_example'; // string | Alphanumeric string identifying a VCL Snippet.

try {
    $result = $apiInstance->getSnippetDynamic($options);
} catch (Exception $e) {
    echo 'Exception when calling SnippetApi->getSnippetDynamic: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**id** | **string** | Alphanumeric string identifying a VCL Snippet. |

### Return type

[**\Fastly\Model\SnippetResponse**](../Model/SnippetResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listSnippets()`

```php
listSnippets($options): \Fastly\Model\SnippetResponse[] // List snippets
```

List all snippets for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

try {
    $result = $apiInstance->listSnippets($options);
} catch (Exception $e) {
    echo 'Exception when calling SnippetApi->listSnippets: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\SnippetResponse[]**](../Model/SnippetResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateSnippet()`

```php
updateSnippet($options): \Fastly\Model\SnippetResponse // Update a versioned snippet
```

Update a specific snippet for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['name'] = 'name_example'; // string | The name for the snippet.

try {
    $result = $apiInstance->updateSnippet($options);
} catch (Exception $e) {
    echo 'Exception when calling SnippetApi->updateSnippet: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**name** | **string** | The name for the snippet. |

### Return type

[**\Fastly\Model\SnippetResponse**](../Model/SnippetResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateSnippetDynamic()`

```php
updateSnippetDynamic($options): \Fastly\Model\SnippetResponse // Update a dynamic snippet
```

Update a dynamic snippet for a particular service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['id'] = 'id_example'; // string | Alphanumeric string identifying a VCL Snippet.
$options['name'] = 'name_example'; // string | The name for the snippet.
$options['type'] = 'type_example'; // string | The location in generated VCL where the snippet should be placed.
$options['content'] = 'content_example'; // string | The VCL code that specifies exactly what the snippet does.
$options['priority'] = '100'; // string | Priority determines execution order. Lower numbers execute first.
$options['dynamic'] = 'dynamic_example'; // string | Sets the snippet version.

try {
    $result = $apiInstance->updateSnippetDynamic($options);
} catch (Exception $e) {
    echo 'Exception when calling SnippetApi->updateSnippetDynamic: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**id** | **string** | Alphanumeric string identifying a VCL Snippet. |
**name** | **string** | The name for the snippet. | [optional]
**type** | **string** | The location in generated VCL where the snippet should be placed. | [optional] [one of: 'init', 'recv', 'hash', 'hit', 'miss', 'pass', 'fetch', 'error', 'deliver', 'log', 'none']
**content** | **string** | The VCL code that specifies exactly what the snippet does. | [optional]
**priority** | **string** | Priority determines execution order. Lower numbers execute first. | [optional] [defaults to '100']
**dynamic** | **string** | Sets the snippet version. | [optional] [one of: '0', '1']

### Return type

[**\Fastly\Model\SnippetResponse**](../Model/SnippetResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
