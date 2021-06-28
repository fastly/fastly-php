# Fastly\Api\VersionApi


```php
$apiInstance = new Fastly\Api\VersionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**activateServiceVersion()**](VersionApi.md#activateServiceVersion) | **PUT** /service/{service_id}/version/{version_id}/activate | Activate a service version
[**cloneServiceVersion()**](VersionApi.md#cloneServiceVersion) | **PUT** /service/{service_id}/version/{version_id}/clone | Clone a service version
[**createServiceVersion()**](VersionApi.md#createServiceVersion) | **POST** /service/{service_id}/version | Create a service version
[**deactivateServiceVersion()**](VersionApi.md#deactivateServiceVersion) | **PUT** /service/{service_id}/version/{version_id}/deactivate | Deactivate a service version
[**getServiceVersion()**](VersionApi.md#getServiceVersion) | **GET** /service/{service_id}/version/{version_id} | Get a version of a service
[**listServiceVersions()**](VersionApi.md#listServiceVersions) | **GET** /service/{service_id}/version | List versions of a service
[**lockServiceVersion()**](VersionApi.md#lockServiceVersion) | **PUT** /service/{service_id}/version/{version_id}/lock | Lock a service version
[**updateServiceVersion()**](VersionApi.md#updateServiceVersion) | **PUT** /service/{service_id}/version/{version_id} | Update a service version
[**validateServiceVersion()**](VersionApi.md#validateServiceVersion) | **GET** /service/{service_id}/version/{version_id}/validate | Validate a service version


## `activateServiceVersion()`

```php
activateServiceVersion($options): \Fastly\Model\VersionResponse // Activate a service version
```

Activate the current version.

### Example
```php
try {
    $result = $apiInstance->activateServiceVersion($options);
} catch (Exception $e) {
    echo 'Exception when calling VersionApi->activateServiceVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |

### Return type

[**\Fastly\Model\VersionResponse**](../Model/VersionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `cloneServiceVersion()`

```php
cloneServiceVersion($options): \Fastly\Model\Version // Clone a service version
```

Clone the current configuration into a new version.

### Example
```php
try {
    $result = $apiInstance->cloneServiceVersion($options);
} catch (Exception $e) {
    echo 'Exception when calling VersionApi->cloneServiceVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |

### Return type

[**\Fastly\Model\Version**](../Model/Version.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createServiceVersion()`

```php
createServiceVersion($options): \Fastly\Model\VersionCreateResponse // Create a service version
```

Create a version for a particular service.

### Example
```php
try {
    $result = $apiInstance->createServiceVersion($options);
} catch (Exception $e) {
    echo 'Exception when calling VersionApi->createServiceVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |

### Return type

[**\Fastly\Model\VersionCreateResponse**](../Model/VersionCreateResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deactivateServiceVersion()`

```php
deactivateServiceVersion($options): \Fastly\Model\VersionResponse // Deactivate a service version
```

Deactivate the current version.

### Example
```php
try {
    $result = $apiInstance->deactivateServiceVersion($options);
} catch (Exception $e) {
    echo 'Exception when calling VersionApi->deactivateServiceVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |

### Return type

[**\Fastly\Model\VersionResponse**](../Model/VersionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getServiceVersion()`

```php
getServiceVersion($options): \Fastly\Model\VersionResponse // Get a version of a service
```

Get the version for a particular service.

### Example
```php
try {
    $result = $apiInstance->getServiceVersion($options);
} catch (Exception $e) {
    echo 'Exception when calling VersionApi->getServiceVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |

### Return type

[**\Fastly\Model\VersionResponse**](../Model/VersionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listServiceVersions()`

```php
listServiceVersions($options): \Fastly\Model\VersionResponse[] // List versions of a service
```

List the versions for a particular service.

### Example
```php
try {
    $result = $apiInstance->listServiceVersions($options);
} catch (Exception $e) {
    echo 'Exception when calling VersionApi->listServiceVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |

### Return type

[**\Fastly\Model\VersionResponse[]**](../Model/VersionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `lockServiceVersion()`

```php
lockServiceVersion($options): \Fastly\Model\Version // Lock a service version
```

Locks the specified version.

### Example
```php
try {
    $result = $apiInstance->lockServiceVersion($options);
} catch (Exception $e) {
    echo 'Exception when calling VersionApi->lockServiceVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |

### Return type

[**\Fastly\Model\Version**](../Model/Version.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateServiceVersion()`

```php
updateServiceVersion($options): \Fastly\Model\VersionResponse // Update a service version
```

Update a particular version for a particular service.

### Example
```php
try {
    $result = $apiInstance->updateServiceVersion($options);
} catch (Exception $e) {
    echo 'Exception when calling VersionApi->updateServiceVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**active** | **bool** | Whether this is the active version or not. | [optional] [default to false]
**comment** | **string** | A freeform descriptive note. | [optional]
**deployed** | **bool** | Unused at this time. | [optional]
**locked** | **bool** | Whether this version is locked or not. Objects can not be added or edited on locked versions. | [optional] [default to false]
**number** | **int** | The number of this version. | [optional]
**staging** | **bool** | Unused at this time. | [optional] [default to false]
**testing** | **bool** | Unused at this time. | [optional] [default to false]

### Return type

[**\Fastly\Model\VersionResponse**](../Model/VersionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `validateServiceVersion()`

```php
validateServiceVersion($options): object // Validate a service version
```

Validate the version for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->validateServiceVersion($options);
} catch (Exception $e) {
    echo 'Exception when calling VersionApi->validateServiceVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
