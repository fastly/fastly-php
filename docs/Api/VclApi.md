# Fastly\Api\VclApi


```php
$apiInstance = new Fastly\Api\VclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**createCustomVcl()**](VclApi.md#createCustomVcl) | **POST** /service/{service_id}/version/{version_id}/vcl | Create a custom VCL file
[**deleteCustomVcl()**](VclApi.md#deleteCustomVcl) | **DELETE** /service/{service_id}/version/{version_id}/vcl/{vcl_name} | Delete a custom VCL file
[**getCustomVcl()**](VclApi.md#getCustomVcl) | **GET** /service/{service_id}/version/{version_id}/vcl/{vcl_name} | Get a custom VCL file
[**getCustomVclBoilerplate()**](VclApi.md#getCustomVclBoilerplate) | **GET** /service/{service_id}/version/{version_id}/boilerplate | Get boilerplate VCL
[**getCustomVclGenerated()**](VclApi.md#getCustomVclGenerated) | **GET** /service/{service_id}/version/{version_id}/generated_vcl | Get the generated VCL for a service
[**getCustomVclGeneratedHighlighted()**](VclApi.md#getCustomVclGeneratedHighlighted) | **GET** /service/{service_id}/version/{version_id}/generated_vcl/content | Get the generated VCL with syntax highlighting
[**getCustomVclHighlighted()**](VclApi.md#getCustomVclHighlighted) | **GET** /service/{service_id}/version/{version_id}/vcl/{vcl_name}/content | Get a custom VCL file with syntax highlighting
[**getCustomVclRaw()**](VclApi.md#getCustomVclRaw) | **GET** /service/{service_id}/version/{version_id}/vcl/{vcl_name}/download | Download a custom VCL file
[**listCustomVcl()**](VclApi.md#listCustomVcl) | **GET** /service/{service_id}/version/{version_id}/vcl | List custom VCL files
[**setCustomVclMain()**](VclApi.md#setCustomVclMain) | **PUT** /service/{service_id}/version/{version_id}/vcl/{vcl_name}/main | Set a custom VCL file as main
[**updateCustomVcl()**](VclApi.md#updateCustomVcl) | **PUT** /service/{service_id}/version/{version_id}/vcl/{vcl_name} | Update a custom VCL file


## `createCustomVcl()`

```php
createCustomVcl($options): \Fastly\Model\VclResponse // Create a custom VCL file
```

Upload a VCL for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->createCustomVcl($options);
} catch (Exception $e) {
    echo 'Exception when calling VclApi->createCustomVcl: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**content** | **string** | The VCL code to be included. | [optional]
**main** | **bool** | Set to `true` when this is the main VCL, otherwise `false`. | [optional]
**name** | **string** | The name of this VCL. | [optional]

### Return type

[**\Fastly\Model\VclResponse**](../Model/VclResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteCustomVcl()`

```php
deleteCustomVcl($options): object // Delete a custom VCL file
```

Delete the uploaded VCL for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->deleteCustomVcl($options);
} catch (Exception $e) {
    echo 'Exception when calling VclApi->deleteCustomVcl: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**vcl_name** | **string** | The name of this VCL. |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getCustomVcl()`

```php
getCustomVcl($options): \Fastly\Model\VclResponse // Get a custom VCL file
```

Get the uploaded VCL for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->getCustomVcl($options);
} catch (Exception $e) {
    echo 'Exception when calling VclApi->getCustomVcl: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**vcl_name** | **string** | The name of this VCL. |
**no_content** | **string** | Omit VCL content. | [optional] [defaults to '0']

### Return type

[**\Fastly\Model\VclResponse**](../Model/VclResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getCustomVclBoilerplate()`

```php
getCustomVclBoilerplate($options): string // Get boilerplate VCL
```

Return boilerplate VCL with the service's TTL from the [settings](/reference/api/vcl-services/settings/).

### Example
```php
try {
    $result = $apiInstance->getCustomVclBoilerplate($options);
} catch (Exception $e) {
    echo 'Exception when calling VclApi->getCustomVclBoilerplate: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

**string**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getCustomVclGenerated()`

```php
getCustomVclGenerated($options): \Fastly\Model\VclResponse // Get the generated VCL for a service
```

Display the generated VCL for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->getCustomVclGenerated($options);
} catch (Exception $e) {
    echo 'Exception when calling VclApi->getCustomVclGenerated: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\VclResponse**](../Model/VclResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getCustomVclGeneratedHighlighted()`

```php
getCustomVclGeneratedHighlighted($options) // Get the generated VCL with syntax highlighting
```

Display the content of generated VCL with HTML syntax highlighting. Include line numbers by sending `lineno=true` as a request parameter.

### Example
```php
try {
    $apiInstance->getCustomVclGeneratedHighlighted($options);
} catch (Exception $e) {
    echo 'Exception when calling VclApi->getCustomVclGeneratedHighlighted: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getCustomVclHighlighted()`

```php
getCustomVclHighlighted($options) // Get a custom VCL file with syntax highlighting
```

Get the uploaded VCL for a particular service and version with HTML syntax highlighting. Include line numbers by sending `lineno=true` as a request parameter.

### Example
```php
try {
    $apiInstance->getCustomVclHighlighted($options);
} catch (Exception $e) {
    echo 'Exception when calling VclApi->getCustomVclHighlighted: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**vcl_name** | **string** | The name of this VCL. |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getCustomVclRaw()`

```php
getCustomVclRaw($options): string // Download a custom VCL file
```

Download the specified VCL.

### Example
```php
try {
    $result = $apiInstance->getCustomVclRaw($options);
} catch (Exception $e) {
    echo 'Exception when calling VclApi->getCustomVclRaw: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**vcl_name** | **string** | The name of this VCL. |

### Return type

**string**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listCustomVcl()`

```php
listCustomVcl($options): \Fastly\Model\VclResponse[] // List custom VCL files
```

List the uploaded VCLs for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->listCustomVcl($options);
} catch (Exception $e) {
    echo 'Exception when calling VclApi->listCustomVcl: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\VclResponse[]**](../Model/VclResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `setCustomVclMain()`

```php
setCustomVclMain($options): \Fastly\Model\VclResponse // Set a custom VCL file as main
```

Set the specified VCL as the main.

### Example
```php
try {
    $result = $apiInstance->setCustomVclMain($options);
} catch (Exception $e) {
    echo 'Exception when calling VclApi->setCustomVclMain: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**vcl_name** | **string** | The name of this VCL. |

### Return type

[**\Fastly\Model\VclResponse**](../Model/VclResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateCustomVcl()`

```php
updateCustomVcl($options): \Fastly\Model\VclResponse // Update a custom VCL file
```

Update the uploaded VCL for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->updateCustomVcl($options);
} catch (Exception $e) {
    echo 'Exception when calling VclApi->updateCustomVcl: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**vcl_name** | **string** | The name of this VCL. |
**content** | **string** | The VCL code to be included. | [optional]
**main** | **bool** | Set to `true` when this is the main VCL, otherwise `false`. | [optional]
**name** | **string** | The name of this VCL. | [optional]

### Return type

[**\Fastly\Model\VclResponse**](../Model/VclResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
