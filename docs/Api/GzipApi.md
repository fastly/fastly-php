# Fastly\Api\GzipApi


```php
$apiInstance = new Fastly\Api\GzipApi(
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
[**createGzipConfig()**](GzipApi.md#createGzipConfig) | **POST** /service/{service_id}/version/{version_id}/gzip | Create a gzip configuration
[**deleteGzipConfig()**](GzipApi.md#deleteGzipConfig) | **DELETE** /service/{service_id}/version/{version_id}/gzip/{gzip_name} | Delete a gzip configuration
[**getGzipConfigs()**](GzipApi.md#getGzipConfigs) | **GET** /service/{service_id}/version/{version_id}/gzip/{gzip_name} | Get a gzip configuration
[**listGzipConfigs()**](GzipApi.md#listGzipConfigs) | **GET** /service/{service_id}/version/{version_id}/gzip | List gzip configurations
[**updateGzipConfig()**](GzipApi.md#updateGzipConfig) | **PUT** /service/{service_id}/version/{version_id}/gzip/{gzip_name} | Update a gzip configuration


## `createGzipConfig()`

```php
createGzipConfig($options): \Fastly\Model\GzipResponse // Create a gzip configuration
```

Create a named gzip configuration on a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['cache_condition'] = 'cache_condition_example'; // string | Name of the cache condition controlling when this configuration applies.
$options['content_types'] = 'content_types_example'; // string | Space-separated list of content types to compress. If you omit this field a default list will be used.
$options['extensions'] = 'extensions_example'; // string | Space-separated list of file extensions to compress. If you omit this field a default list will be used.
$options['name'] = 'name_example'; // string | Name of the gzip configuration.

try {
    $result = $apiInstance->createGzipConfig($options);
} catch (Exception $e) {
    echo 'Exception when calling GzipApi->createGzipConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**cache_condition** | **string** | Name of the cache condition controlling when this configuration applies. | [optional]
**content_types** | **string** | Space-separated list of content types to compress. If you omit this field a default list will be used. | [optional]
**extensions** | **string** | Space-separated list of file extensions to compress. If you omit this field a default list will be used. | [optional]
**name** | **string** | Name of the gzip configuration. | [optional]

### Return type

[**\Fastly\Model\GzipResponse**](../Model/GzipResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteGzipConfig()`

```php
deleteGzipConfig($options): \Fastly\Model\InlineResponse200 // Delete a gzip configuration
```

Delete a named gzip configuration on a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['gzip_name'] = 'gzip_name_example'; // string | Name of the gzip configuration.

try {
    $result = $apiInstance->deleteGzipConfig($options);
} catch (Exception $e) {
    echo 'Exception when calling GzipApi->deleteGzipConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**gzip_name** | **string** | Name of the gzip configuration. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getGzipConfigs()`

```php
getGzipConfigs($options): \Fastly\Model\GzipResponse // Get a gzip configuration
```

Get the gzip configuration for a particular service, version, and name.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['gzip_name'] = 'gzip_name_example'; // string | Name of the gzip configuration.

try {
    $result = $apiInstance->getGzipConfigs($options);
} catch (Exception $e) {
    echo 'Exception when calling GzipApi->getGzipConfigs: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**gzip_name** | **string** | Name of the gzip configuration. |

### Return type

[**\Fastly\Model\GzipResponse**](../Model/GzipResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listGzipConfigs()`

```php
listGzipConfigs($options): \Fastly\Model\GzipResponse[] // List gzip configurations
```

List all gzip configurations for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

try {
    $result = $apiInstance->listGzipConfigs($options);
} catch (Exception $e) {
    echo 'Exception when calling GzipApi->listGzipConfigs: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\GzipResponse[]**](../Model/GzipResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateGzipConfig()`

```php
updateGzipConfig($options): \Fastly\Model\GzipResponse // Update a gzip configuration
```

Update a named gzip configuration on a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['gzip_name'] = 'gzip_name_example'; // string | Name of the gzip configuration.
$options['cache_condition'] = 'cache_condition_example'; // string | Name of the cache condition controlling when this configuration applies.
$options['content_types'] = 'content_types_example'; // string | Space-separated list of content types to compress. If you omit this field a default list will be used.
$options['extensions'] = 'extensions_example'; // string | Space-separated list of file extensions to compress. If you omit this field a default list will be used.
$options['name'] = 'name_example'; // string | Name of the gzip configuration.

try {
    $result = $apiInstance->updateGzipConfig($options);
} catch (Exception $e) {
    echo 'Exception when calling GzipApi->updateGzipConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**gzip_name** | **string** | Name of the gzip configuration. |
**cache_condition** | **string** | Name of the cache condition controlling when this configuration applies. | [optional]
**content_types** | **string** | Space-separated list of content types to compress. If you omit this field a default list will be used. | [optional]
**extensions** | **string** | Space-separated list of file extensions to compress. If you omit this field a default list will be used. | [optional]
**name** | **string** | Name of the gzip configuration. | [optional]

### Return type

[**\Fastly\Model\GzipResponse**](../Model/GzipResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
