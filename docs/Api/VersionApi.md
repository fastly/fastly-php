# Fastly\Api\VersionApi


```php
$apiInstance = new Fastly\Api\VersionApi(
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
[**activateServiceVersion()**](VersionApi.md#activateServiceVersion) | **PUT** /service/{service_id}/version/{version_id}/activate | Activate a service version
[**activateServiceVersionEnvironment()**](VersionApi.md#activateServiceVersionEnvironment) | **PUT** /service/{service_id}/version/{version_id}/activate/{environment_name} | Activate a service version on the specified environment
[**cloneServiceVersion()**](VersionApi.md#cloneServiceVersion) | **PUT** /service/{service_id}/version/{version_id}/clone | Clone a service version
[**createServiceVersion()**](VersionApi.md#createServiceVersion) | **POST** /service/{service_id}/version | Create a service version
[**deactivateServiceVersion()**](VersionApi.md#deactivateServiceVersion) | **PUT** /service/{service_id}/version/{version_id}/deactivate | Deactivate a service version
[**deactivateServiceVersionEnvironment()**](VersionApi.md#deactivateServiceVersionEnvironment) | **PUT** /service/{service_id}/version/{version_id}/deactivate/{environment_name} | Deactivate a service version on an environment
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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\VersionResponse**](../Model/VersionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `activateServiceVersionEnvironment()`

```php
activateServiceVersionEnvironment($options): \Fastly\Model\VersionResponse // Activate a service version on the specified environment
```

Activate a version on a given environment, i.e. \"staging\"

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['environment_name'] = new \Fastly\Model\\Fastly\Model\EnvironmentName(); // \Fastly\Model\EnvironmentName

try {
    $result = $apiInstance->activateServiceVersionEnvironment($options);
} catch (Exception $e) {
    echo 'Exception when calling VersionApi->activateServiceVersionEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**environment_name** | [**\Fastly\Model\EnvironmentName**](../Model/.md) |  |

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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

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
**service_id** | **string** | Alphanumeric string identifying the service. |

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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\VersionResponse**](../Model/VersionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deactivateServiceVersionEnvironment()`

```php
deactivateServiceVersionEnvironment($options): \Fastly\Model\VersionResponse // Deactivate a service version on an environment
```

Deactivate the current version on a given environment, i.e. \"staging\"

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['environment_name'] = new \Fastly\Model\\Fastly\Model\EnvironmentName(); // \Fastly\Model\EnvironmentName

try {
    $result = $apiInstance->deactivateServiceVersionEnvironment($options);
} catch (Exception $e) {
    echo 'Exception when calling VersionApi->deactivateServiceVersionEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**environment_name** | [**\Fastly\Model\EnvironmentName**](../Model/.md) |  |

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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.

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
**service_id** | **string** | Alphanumeric string identifying the service. |

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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['active'] = false; // bool | Whether this is the active version or not.
$options['comment'] = 'comment_example'; // string | A freeform descriptive note.
$options['deployed'] = True; // bool | Unused at this time.
$options['locked'] = false; // bool | Whether this version is locked or not. Objects can not be added or edited on locked versions.
$options['number'] = 56; // int | The number of this version.
$options['staging'] = false; // bool | Unused at this time.
$options['testing'] = false; // bool | Unused at this time.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**active** | **bool** | Whether this is the active version or not. | [optional] [defaults to false]
**comment** | **string** | A freeform descriptive note. | [optional]
**deployed** | **bool** | Unused at this time. | [optional]
**locked** | **bool** | Whether this version is locked or not. Objects can not be added or edited on locked versions. | [optional] [defaults to false]
**number** | **int** | The number of this version. | [optional]
**staging** | **bool** | Unused at this time. | [optional] [defaults to false]
**testing** | **bool** | Unused at this time. | [optional] [defaults to false]

### Return type

[**\Fastly\Model\VersionResponse**](../Model/VersionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `validateServiceVersion()`

```php
validateServiceVersion($options): \Fastly\Model\InlineResponse200 // Validate a service version
```

Validate the version for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
