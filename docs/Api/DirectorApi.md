# Fastly\Api\DirectorApi


```php
$apiInstance = new Fastly\Api\DirectorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
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
**service_id** | **string** |  |
**version_id** | **int** |  |
**backends** | [**\Fastly\Model\Backend[]**](../Model/\Fastly\Model\Backend.md) | List of backends associated to a director. | [optional]
**capacity** | **int** | Unused. | [optional]
**comment** | **string** | A freeform descriptive note. | [optional]
**name** | **string** | Name for the Director. | [optional]
**quorum** | **int** | The percentage of capacity that needs to be up for a director to be considered up. &#x60;0&#x60; to &#x60;100&#x60;. | [optional] [default to 75]
**shield** | **string** | Selected POP to serve as a shield for the backends. Defaults to &#x60;null&#x60; meaning no origin shielding if not set. Refer to the [datacenters API endpoint](/reference/api/utils/datacenter/) to get a list of available POPs used for shielding. | [optional] [default to &#39;null&#39;]
**type** | **int** | What type of load balance group to use. | [optional] [default to 1]
**retries** | **int** | How many backends to search if it fails. | [optional] [default to 5]

### Return type

[**\Fastly\Model\DirectorResponse**](../Model/DirectorResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteDirector()`

```php
deleteDirector($options): object // Delete a director
```

Delete the director for a particular service and version.

### Example
```php
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
**service_id** | **string** |  |
**version_id** | **int** |  |
**director_name** | **string** |  |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getDirector()`

```php
getDirector($options): \Fastly\Model\DirectorResponse // Get a director
```

Get the director for a particular service and version.

### Example
```php
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
**service_id** | **string** |  |
**version_id** | **int** |  |
**director_name** | **string** |  |

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
**service_id** | **string** |  |
**version_id** | **int** |  |

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
**service_id** | **string** |  |
**version_id** | **int** |  |
**director_name** | **string** |  |

### Return type

[**\Fastly\Model\DirectorResponse**](../Model/DirectorResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
