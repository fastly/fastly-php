# OpenAPI\Client\VclServicesRateLimiterApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRateLimiter()**](VclServicesRateLimiterApi.md#createRateLimiter) | **POST** /service/{service_id}/version/{version_id}/rate-limiters | Create a rate limiter
[**deleteRateLimiter()**](VclServicesRateLimiterApi.md#deleteRateLimiter) | **DELETE** /rate-limiters/{rate_limiter_id} | Delete a rate limiter
[**getRateLimiter()**](VclServicesRateLimiterApi.md#getRateLimiter) | **GET** /rate-limiters/{rate_limiter_id} | Get a rate limiter
[**listRateLimiters()**](VclServicesRateLimiterApi.md#listRateLimiters) | **GET** /service/{service_id}/version/{version_id}/rate-limiters | List rate limiters
[**updateRateLimiter()**](VclServicesRateLimiterApi.md#updateRateLimiter) | **PUT** /rate-limiters/{rate_limiter_id} | Update a rate limiter


## `createRateLimiter()`

```php
createRateLimiter($service_id, $version_id, $name, $http_methods, $rps_limit, $window_size, $client_key, $penalty_box_duration, $action, $service_id2, $version, $created_at, $deleted_at, $updated_at, $uri_dictionary_name, $response, $response_object_name, $logger_type, $feature_revision): \OpenAPI\Client\Model\InlineObject[]
```

Create a rate limiter

Create a rate limiter for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclServicesRateLimiterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int
$name = 'name_example'; // string | A human readable name for the rate limiting rule.
$http_methods = 'http_methods_example'; // string[] | Array of HTTP methods to apply rate limiting to.
$rps_limit = 56; // int | Upper limit of requests per second allowed by the rate limiter.
$window_size = 56; // int | Number of seconds during which the RPS limit must be exceeded in order to trigger a violation.
$client_key = 'client_key_example'; // string[] | Array of VCL variables used to generate a counter key to identify a client. Examples variables include `req.http.Fastly-Client-IP`, `req.http.User-Agent`, or a custom header like `req.http.API-Key`.
$penalty_box_duration = 56; // int | Length of time in seconds that the rate limiter is in effect after the initial violation is detected.
$action = 'action_example'; // string | The action to take when a rate limiter violation is detected. \\\"response\\\" and \\\"response_object\\\" prevent an origin request; \\\"log_only\\\" logs the violation but allows the origin request to continue.
$service_id2 = 'service_id_example'; // string | Alphanumeric string identifying the service.
$version = 56; // int | Integer identifying a service version.
$created_at = 'created_at_example'; // string | Date and time in ISO 8601 format.
$deleted_at = 'deleted_at_example'; // string | Date and time in ISO 8601 format.
$updated_at = 'updated_at_example'; // string | Date and time in ISO 8601 format.
$uri_dictionary_name = 'uri_dictionary_name_example'; // string | The name of an Edge Dictionary containing URIs as keys. If not defined or null, all origin URIs will be rate limited.
$response = new \OpenAPI\Client\Model\ServiceServiceIdVersionVersionIdRateLimitersResponse(); // \OpenAPI\Client\Model\ServiceServiceIdVersionVersionIdRateLimitersResponse
$response_object_name = 'response_object_name_example'; // string | Name of existing response object. Required if `action` is \\\"response_object\\\". Note that the rate limiter response is only updated to reflect the response object content when saving the rate limiter configuration.
$logger_type = 'logger_type_example'; // string | Name of the type of logging endpoint to be used when action is \\\"log_only\\\". The logging endpoint type is used to determine the appropriate log format to use when emitting log entries.
$feature_revision = 56; // int | Revision number of the rate limiting feature implementation. Defaults to the most recent revision.

try {
    $result = $apiInstance->createRateLimiter($service_id, $version_id, $name, $http_methods, $rps_limit, $window_size, $client_key, $penalty_box_duration, $action, $service_id2, $version, $created_at, $deleted_at, $updated_at, $uri_dictionary_name, $response, $response_object_name, $logger_type, $feature_revision);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclServicesRateLimiterApi->createRateLimiter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **name** | **string**| A human readable name for the rate limiting rule. |
 **http_methods** | [**string[]**](../Model/string.md)| Array of HTTP methods to apply rate limiting to. |
 **rps_limit** | **int**| Upper limit of requests per second allowed by the rate limiter. |
 **window_size** | **int**| Number of seconds during which the RPS limit must be exceeded in order to trigger a violation. |
 **client_key** | [**string[]**](../Model/string.md)| Array of VCL variables used to generate a counter key to identify a client. Examples variables include &#x60;req.http.Fastly-Client-IP&#x60;, &#x60;req.http.User-Agent&#x60;, or a custom header like &#x60;req.http.API-Key&#x60;. |
 **penalty_box_duration** | **int**| Length of time in seconds that the rate limiter is in effect after the initial violation is detected. |
 **action** | **string**| The action to take when a rate limiter violation is detected. \\\&quot;response\\\&quot; and \\\&quot;response_object\\\&quot; prevent an origin request; \\\&quot;log_only\\\&quot; logs the violation but allows the origin request to continue. |
 **service_id2** | **string**| Alphanumeric string identifying the service. | [optional]
 **version** | **int**| Integer identifying a service version. | [optional]
 **created_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **deleted_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **updated_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **uri_dictionary_name** | **string**| The name of an Edge Dictionary containing URIs as keys. If not defined or null, all origin URIs will be rate limited. | [optional]
 **response** | [**\OpenAPI\Client\Model\ServiceServiceIdVersionVersionIdRateLimitersResponse**](../Model/ServiceServiceIdVersionVersionIdRateLimitersResponse.md)|  | [optional]
 **response_object_name** | **string**| Name of existing response object. Required if &#x60;action&#x60; is \\\&quot;response_object\\\&quot;. Note that the rate limiter response is only updated to reflect the response object content when saving the rate limiter configuration. | [optional]
 **logger_type** | **string**| Name of the type of logging endpoint to be used when action is \\\&quot;log_only\\\&quot;. The logging endpoint type is used to determine the appropriate log format to use when emitting log entries. | [optional]
 **feature_revision** | **int**| Revision number of the rate limiting feature implementation. Defaults to the most recent revision. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineObject[]**](../Model/InlineObject.md)

### Authorization

[token_engineer](../../README.md#token_engineer)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRateLimiter()`

```php
deleteRateLimiter($rate_limiter_id): object
```

Delete a rate limiter

Delete a rate limiter by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclServicesRateLimiterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rate_limiter_id = 'rate_limiter_id_example'; // string

try {
    $result = $apiInstance->deleteRateLimiter($rate_limiter_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclServicesRateLimiterApi->deleteRateLimiter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rate_limiter_id** | **string**|  |

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

## `getRateLimiter()`

```php
getRateLimiter($rate_limiter_id): \OpenAPI\Client\Model\InlineObject[]
```

Get a rate limiter

Get a rate limiter by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclServicesRateLimiterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rate_limiter_id = 'rate_limiter_id_example'; // string

try {
    $result = $apiInstance->getRateLimiter($rate_limiter_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclServicesRateLimiterApi->getRateLimiter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rate_limiter_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\InlineObject[]**](../Model/InlineObject.md)

### Authorization

[token_engineer](../../README.md#token_engineer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRateLimiters()`

```php
listRateLimiters($service_id, $version_id): \OpenAPI\Client\Model\InlineResponse200[]
```

List rate limiters

List all rate limiters for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclServicesRateLimiterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = SU1Z0isxPaozGVKXdv0eY; // string
$version_id = 1; // int

try {
    $result = $apiInstance->listRateLimiters($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclServicesRateLimiterApi->listRateLimiters: ', $e->getMessage(), PHP_EOL;
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

## `updateRateLimiter()`

```php
updateRateLimiter($rate_limiter_id, $name, $http_methods, $rps_limit, $window_size, $client_key, $penalty_box_duration, $action, $service_id, $version, $created_at, $deleted_at, $updated_at, $uri_dictionary_name, $response, $response_object_name, $logger_type, $feature_revision): \OpenAPI\Client\Model\InlineObject1[]
```

Update a rate limiter

Update a rate limiter by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token_engineer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VclServicesRateLimiterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rate_limiter_id = 'rate_limiter_id_example'; // string
$name = 'name_example'; // string | A human readable name for the rate limiting rule.
$http_methods = 'http_methods_example'; // string[] | Array of HTTP methods to apply rate limiting to.
$rps_limit = 56; // int | Upper limit of requests per second allowed by the rate limiter.
$window_size = 56; // int | Number of seconds during which the RPS limit must be exceeded in order to trigger a violation.
$client_key = 'client_key_example'; // string[] | Array of VCL variables used to generate a counter key to identify a client. Examples variables include `req.http.Fastly-Client-IP`, `req.http.User-Agent`, or a custom header like `req.http.API-Key`.
$penalty_box_duration = 56; // int | Length of time in seconds that the rate limiter is in effect after the initial violation is detected.
$action = 'action_example'; // string | The action to take when a rate limiter violation is detected. \\\"response\\\" and \\\"response_object\\\" prevent an origin request; \\\"log_only\\\" logs the violation but allows the origin request to continue.
$service_id = 'service_id_example'; // string | Alphanumeric string identifying the service.
$version = 56; // int | Integer identifying a service version.
$created_at = 'created_at_example'; // string | Date and time in ISO 8601 format.
$deleted_at = 'deleted_at_example'; // string | Date and time in ISO 8601 format.
$updated_at = 'updated_at_example'; // string | Date and time in ISO 8601 format.
$uri_dictionary_name = 'uri_dictionary_name_example'; // string | The name of an Edge Dictionary containing URIs as keys. If not defined or null, all origin URIs will be rate limited.
$response = new \OpenAPI\Client\Model\ServiceServiceIdVersionVersionIdRateLimitersResponse(); // \OpenAPI\Client\Model\ServiceServiceIdVersionVersionIdRateLimitersResponse
$response_object_name = 'response_object_name_example'; // string | Name of existing response object. Required if `action` is \\\"response_object\\\". Note that the rate limiter response is only updated to reflect the response object content when saving the rate limiter configuration.
$logger_type = 'logger_type_example'; // string | Name of the type of logging endpoint to be used when action is \\\"log_only\\\". The logging endpoint type is used to determine the appropriate log format to use when emitting log entries.
$feature_revision = 56; // int | Revision number of the rate limiting feature implementation. Defaults to the most recent revision.

try {
    $result = $apiInstance->updateRateLimiter($rate_limiter_id, $name, $http_methods, $rps_limit, $window_size, $client_key, $penalty_box_duration, $action, $service_id, $version, $created_at, $deleted_at, $updated_at, $uri_dictionary_name, $response, $response_object_name, $logger_type, $feature_revision);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VclServicesRateLimiterApi->updateRateLimiter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rate_limiter_id** | **string**|  |
 **name** | **string**| A human readable name for the rate limiting rule. |
 **http_methods** | [**string[]**](../Model/string.md)| Array of HTTP methods to apply rate limiting to. |
 **rps_limit** | **int**| Upper limit of requests per second allowed by the rate limiter. |
 **window_size** | **int**| Number of seconds during which the RPS limit must be exceeded in order to trigger a violation. |
 **client_key** | [**string[]**](../Model/string.md)| Array of VCL variables used to generate a counter key to identify a client. Examples variables include &#x60;req.http.Fastly-Client-IP&#x60;, &#x60;req.http.User-Agent&#x60;, or a custom header like &#x60;req.http.API-Key&#x60;. |
 **penalty_box_duration** | **int**| Length of time in seconds that the rate limiter is in effect after the initial violation is detected. |
 **action** | **string**| The action to take when a rate limiter violation is detected. \\\&quot;response\\\&quot; and \\\&quot;response_object\\\&quot; prevent an origin request; \\\&quot;log_only\\\&quot; logs the violation but allows the origin request to continue. |
 **service_id** | **string**| Alphanumeric string identifying the service. | [optional]
 **version** | **int**| Integer identifying a service version. | [optional]
 **created_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **deleted_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **updated_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **uri_dictionary_name** | **string**| The name of an Edge Dictionary containing URIs as keys. If not defined or null, all origin URIs will be rate limited. | [optional]
 **response** | [**\OpenAPI\Client\Model\ServiceServiceIdVersionVersionIdRateLimitersResponse**](../Model/ServiceServiceIdVersionVersionIdRateLimitersResponse.md)|  | [optional]
 **response_object_name** | **string**| Name of existing response object. Required if &#x60;action&#x60; is \\\&quot;response_object\\\&quot;. Note that the rate limiter response is only updated to reflect the response object content when saving the rate limiter configuration. | [optional]
 **logger_type** | **string**| Name of the type of logging endpoint to be used when action is \\\&quot;log_only\\\&quot;. The logging endpoint type is used to determine the appropriate log format to use when emitting log entries. | [optional]
 **feature_revision** | **int**| Revision number of the rate limiting feature implementation. Defaults to the most recent revision. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineObject1[]**](../Model/InlineObject1.md)

### Authorization

[token_engineer](../../README.md#token_engineer)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
