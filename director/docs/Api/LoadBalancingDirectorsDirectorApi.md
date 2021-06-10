# OpenAPI\Client\LoadBalancingDirectorsDirectorApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDirector()**](LoadBalancingDirectorsDirectorApi.md#createDirector) | **POST** /service/{service_id}/version/{version_id}/director | Create a director
[**deleteDirector()**](LoadBalancingDirectorsDirectorApi.md#deleteDirector) | **DELETE** /service/{service_id}/version/{version_id}/director/{director_name} | Delete a director
[**getDirector()**](LoadBalancingDirectorsDirectorApi.md#getDirector) | **GET** /service/{service_id}/version/{version_id}/director/{director_name} | Get a director
[**listDirectors()**](LoadBalancingDirectorsDirectorApi.md#listDirectors) | **GET** /service/{service_id}/version/{version_id}/director | List directors
[**updateDirector()**](LoadBalancingDirectorsDirectorApi.md#updateDirector) | **PUT** /service/{service_id}/version/{version_id}/director/{director_name} | Update a director


## `createDirector()`

```php
createDirector($service_id, $version_id, $created_at, $deleted_at, $updated_at, $service_id2, $version, $backends, $capacity, $comment, $name, $quorum, $shield, $type, $retries): \OpenAPI\Client\Model\InlineObject
```

Create a director

Create a director for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoadBalancingDirectorsDirectorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$created_at = 'created_at_example'; // string | Date and time in ISO 8601 format.
$deleted_at = 'deleted_at_example'; // string | Date and time in ISO 8601 format.
$updated_at = 'updated_at_example'; // string | Date and time in ISO 8601 format.
$service_id2 = 'service_id_example'; // string | Alphanumeric string identifying the service.
$version = 56; // int | Integer identifying a service version.
$backends = new \OpenAPI\Client\Model\ServiceServiceIdVersionVersionIdDirectorBackends(); // \OpenAPI\Client\Model\ServiceServiceIdVersionVersionIdDirectorBackends[] | List of backends associated to a director.
$capacity = 56; // int | Unused.
$comment = ''; // string | A freeform descriptive note.
$name = 'name_example'; // string | Name for the Director.
$quorum = 75; // int | The percentage of capacity that needs to be up for a director to be considered up. `0` to `100`.
$shield = 'null'; // string | Selected POP to serve as a shield for the backends. Defaults to `null` meaning no origin shielding if not set. Refer to the [datacenters API endpoint](/reference/api/utils/datacenter/) to get a list of available POPs used for shielding.
$type = 1; // int | What type of load balance group to use.
$retries = 5; // int | How many backends to search if it fails.

try {
    $result = $apiInstance->createDirector($service_id, $version_id, $created_at, $deleted_at, $updated_at, $service_id2, $version, $backends, $capacity, $comment, $name, $quorum, $shield, $type, $retries);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoadBalancingDirectorsDirectorApi->createDirector: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **created_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **deleted_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **updated_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **service_id2** | **string**| Alphanumeric string identifying the service. | [optional]
 **version** | **int**| Integer identifying a service version. | [optional]
 **backends** | [**\OpenAPI\Client\Model\ServiceServiceIdVersionVersionIdDirectorBackends[]**](../Model/\OpenAPI\Client\Model\ServiceServiceIdVersionVersionIdDirectorBackends.md)| List of backends associated to a director. | [optional]
 **capacity** | **int**| Unused. | [optional]
 **comment** | **string**| A freeform descriptive note. | [optional] [default to &#39;&#39;]
 **name** | **string**| Name for the Director. | [optional]
 **quorum** | **int**| The percentage of capacity that needs to be up for a director to be considered up. &#x60;0&#x60; to &#x60;100&#x60;. | [optional] [default to 75]
 **shield** | **string**| Selected POP to serve as a shield for the backends. Defaults to &#x60;null&#x60; meaning no origin shielding if not set. Refer to the [datacenters API endpoint](/reference/api/utils/datacenter/) to get a list of available POPs used for shielding. | [optional] [default to &#39;null&#39;]
 **type** | **int**| What type of load balance group to use. | [optional] [default to 1]
 **retries** | **int**| How many backends to search if it fails. | [optional] [default to 5]

### Return type

[**\OpenAPI\Client\Model\InlineObject**](../Model/InlineObject.md)

### Authorization

[token_engineer](../../README.md#token_engineer)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDirector()`

```php
deleteDirector($service_id, $version_id, $director_name): object
```

Delete a director

Delete the director for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoadBalancingDirectorsDirectorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$director_name = director-name; // string

try {
    $result = $apiInstance->deleteDirector($service_id, $version_id, $director_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoadBalancingDirectorsDirectorApi->deleteDirector: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **director_name** | **string**|  |

### Return type

**object**

### Authorization

[token_engineer](../../README.md#token_engineer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDirector()`

```php
getDirector($service_id, $version_id, $director_name): \OpenAPI\Client\Model\InlineObject
```

Get a director

Get the director for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoadBalancingDirectorsDirectorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$director_name = director-name; // string

try {
    $result = $apiInstance->getDirector($service_id, $version_id, $director_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoadBalancingDirectorsDirectorApi->getDirector: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **director_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\InlineObject**](../Model/InlineObject.md)

### Authorization

[token_engineer](../../README.md#token_engineer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDirectors()`

```php
listDirectors($service_id, $version_id): \OpenAPI\Client\Model\InlineResponse200[]
```

List directors

List the directors for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoadBalancingDirectorsDirectorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int

try {
    $result = $apiInstance->listDirectors($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoadBalancingDirectorsDirectorApi->listDirectors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse200[]**](../Model/InlineResponse200.md)

### Authorization

[token_engineer](../../README.md#token_engineer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDirector()`

```php
updateDirector($service_id, $version_id, $director_name): \OpenAPI\Client\Model\InlineObject
```

Update a director

Update the director for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoadBalancingDirectorsDirectorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$director_name = director-name; // string

try {
    $result = $apiInstance->updateDirector($service_id, $version_id, $director_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoadBalancingDirectorsDirectorApi->updateDirector: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **director_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\InlineObject**](../Model/InlineObject.md)

### Authorization

[token_engineer](../../README.md#token_engineer)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
