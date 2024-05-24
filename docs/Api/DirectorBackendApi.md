# Fastly\Api\DirectorBackendApi


```php
$apiInstance = new Fastly\Api\DirectorBackendApi(
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
[**createDirectorBackend()**](DirectorBackendApi.md#createDirectorBackend) | **POST** /service/{service_id}/version/{version_id}/director/{director_name}/backend/{backend_name} | Create a director-backend relationship
[**deleteDirectorBackend()**](DirectorBackendApi.md#deleteDirectorBackend) | **DELETE** /service/{service_id}/version/{version_id}/director/{director_name}/backend/{backend_name} | Delete a director-backend relationship
[**getDirectorBackend()**](DirectorBackendApi.md#getDirectorBackend) | **GET** /service/{service_id}/version/{version_id}/director/{director_name}/backend/{backend_name} | Get a director-backend relationship


## `createDirectorBackend()`

```php
createDirectorBackend($options): \Fastly\Model\DirectorBackend // Create a director-backend relationship
```

Establishes a relationship between a Backend and a Director. The Backend is then considered a member of the Director and can be used to balance traffic onto.

### Example
```php
    $options['director_name'] = 'director_name_example'; // string | Name for the Director.
$options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['backend_name'] = 'backend_name_example'; // string | The name of the backend.

try {
    $result = $apiInstance->createDirectorBackend($options);
} catch (Exception $e) {
    echo 'Exception when calling DirectorBackendApi->createDirectorBackend: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**director_name** | **string** | Name for the Director. |
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**backend_name** | **string** | The name of the backend. |

### Return type

[**\Fastly\Model\DirectorBackend**](../Model/DirectorBackend.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteDirectorBackend()`

```php
deleteDirectorBackend($options): \Fastly\Model\InlineResponse200 // Delete a director-backend relationship
```

Deletes the relationship between a Backend and a Director. The Backend is no longer considered a member of the Director and thus will not have traffic balanced onto it from this Director.

### Example
```php
    $options['director_name'] = 'director_name_example'; // string | Name for the Director.
$options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['backend_name'] = 'backend_name_example'; // string | The name of the backend.

try {
    $result = $apiInstance->deleteDirectorBackend($options);
} catch (Exception $e) {
    echo 'Exception when calling DirectorBackendApi->deleteDirectorBackend: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**director_name** | **string** | Name for the Director. |
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**backend_name** | **string** | The name of the backend. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getDirectorBackend()`

```php
getDirectorBackend($options): \Fastly\Model\DirectorBackend // Get a director-backend relationship
```

Returns the relationship between a Backend and a Director. If the Backend has been associated with the Director, it returns a simple record indicating this. Otherwise, returns a 404.

### Example
```php
    $options['director_name'] = 'director_name_example'; // string | Name for the Director.
$options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['backend_name'] = 'backend_name_example'; // string | The name of the backend.

try {
    $result = $apiInstance->getDirectorBackend($options);
} catch (Exception $e) {
    echo 'Exception when calling DirectorBackendApi->getDirectorBackend: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**director_name** | **string** | Name for the Director. |
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**backend_name** | **string** | The name of the backend. |

### Return type

[**\Fastly\Model\DirectorBackend**](../Model/DirectorBackend.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
