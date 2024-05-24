# Fastly\Api\DirectorApi


```php
$apiInstance = new Fastly\Api\DirectorApi(
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
[**createDirector()**](DirectorApi.md#createDirector) | **POST** /service/{service_id}/version/{version_id}/director | Create a director
[**deleteDirector()**](DirectorApi.md#deleteDirector) | **DELETE** /service/{service_id}/version/{version_id}/director/{director_name} | Delete a director
[**getDirector()**](DirectorApi.md#getDirector) | **GET** /service/{service_id}/version/{version_id}/director/{director_name} | Get a director
[**listDirectors()**](DirectorApi.md#listDirectors) | **GET** /service/{service_id}/version/{version_id}/director | List directors
[**updateDirector()**](DirectorApi.md#updateDirector) | **PUT** /service/{service_id}/version/{version_id}/director/{director_name} | Update a director


## `createDirector()`

```php
createDirector($options): \Fastly\Model\DirectorResponse // Create a director
```

Create a director for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['backends'] = array(new \Fastly\Model\\Fastly\Model\Backend()); // \Fastly\Model\Backend[] | List of backends associated to a director.
$options['capacity'] = 56; // int | Unused.
$options['comment'] = 'comment_example'; // string | A freeform descriptive note.
$options['name'] = 'name_example'; // string | Name for the Director.
$options['quorum'] = 75; // int | The percentage of capacity that needs to be up for a director to be considered up. `0` to `100`.
$options['shield'] = 'null'; // string | Selected POP to serve as a shield for the backends. Defaults to `null` meaning no origin shielding if not set. Refer to the [POPs API endpoint](https://www.fastly.com/documentation/reference/api/utils/pops/) to get a list of available POPs used for shielding.
$options['type'] = 1; // int | What type of load balance group to use.
$options['retries'] = 5; // int | How many backends to search if it fails.

try {
    $result = $apiInstance->createDirector($options);
} catch (Exception $e) {
    echo 'Exception when calling DirectorApi->createDirector: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**backends** | [**\Fastly\Model\Backend[]**](../Model/\Fastly\Model\Backend.md) | List of backends associated to a director. | [optional]
**capacity** | **int** | Unused. | [optional]
**comment** | **string** | A freeform descriptive note. | [optional]
**name** | **string** | Name for the Director. | [optional]
**quorum** | **int** | The percentage of capacity that needs to be up for a director to be considered up. `0` to `100`. | [optional] [defaults to 75]
**shield** | **string** | Selected POP to serve as a shield for the backends. Defaults to `null` meaning no origin shielding if not set. Refer to the [POPs API endpoint](https://www.fastly.com/documentation/reference/api/utils/pops/) to get a list of available POPs used for shielding. | [optional] [defaults to 'null']
**type** | **int** | What type of load balance group to use. | [optional] [one of: 1, 3, 4]
**retries** | **int** | How many backends to search if it fails. | [optional] [defaults to 5]

### Return type

[**\Fastly\Model\DirectorResponse**](../Model/DirectorResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteDirector()`

```php
deleteDirector($options): \Fastly\Model\InlineResponse200 // Delete a director
```

Delete the director for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['director_name'] = 'director_name_example'; // string | Name for the Director.

try {
    $result = $apiInstance->deleteDirector($options);
} catch (Exception $e) {
    echo 'Exception when calling DirectorApi->deleteDirector: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**director_name** | **string** | Name for the Director. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getDirector()`

```php
getDirector($options): \Fastly\Model\DirectorResponse // Get a director
```

Get the director for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['director_name'] = 'director_name_example'; // string | Name for the Director.

try {
    $result = $apiInstance->getDirector($options);
} catch (Exception $e) {
    echo 'Exception when calling DirectorApi->getDirector: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**director_name** | **string** | Name for the Director. |

### Return type

[**\Fastly\Model\DirectorResponse**](../Model/DirectorResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listDirectors()`

```php
listDirectors($options): \Fastly\Model\DirectorResponse[] // List directors
```

List the directors for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

try {
    $result = $apiInstance->listDirectors($options);
} catch (Exception $e) {
    echo 'Exception when calling DirectorApi->listDirectors: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\DirectorResponse[]**](../Model/DirectorResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateDirector()`

```php
updateDirector($options): \Fastly\Model\DirectorResponse // Update a director
```

Update the director for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['director_name'] = 'director_name_example'; // string | Name for the Director.

try {
    $result = $apiInstance->updateDirector($options);
} catch (Exception $e) {
    echo 'Exception when calling DirectorApi->updateDirector: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**director_name** | **string** | Name for the Director. |

### Return type

[**\Fastly\Model\DirectorResponse**](../Model/DirectorResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
