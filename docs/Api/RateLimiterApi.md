# OpenAPI\Client\RateLimiterApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRateLimiter()**](RateLimiterApi.md#createRateLimiter) | **POST** /service/{service_id}/version/{version_id}/rate-limiters | Create a rate limiter
[**deleteRateLimiter()**](RateLimiterApi.md#deleteRateLimiter) | **DELETE** /rate-limiters/{rate_limiter_id} | Delete a rate limiter
[**getRateLimiter()**](RateLimiterApi.md#getRateLimiter) | **GET** /rate-limiters/{rate_limiter_id} | Get a rate limiter
[**listRateLimiters()**](RateLimiterApi.md#listRateLimiters) | **GET** /service/{service_id}/version/{version_id}/rate-limiters | List rate limiters
[**updateRateLimiter()**](RateLimiterApi.md#updateRateLimiter) | **PUT** /rate-limiters/{rate_limiter_id} | Update a rate limiter


## `createRateLimiter()`

```php
createRateLimiter($service_id, $version_id, $service_id2, $version, $created_at, $deleted_at, $updated_at, $name, $uri_dictionary_name, $http_methods, $rps_limit, $window_size, $client_key, $penalty_box_duration, $action, $response, $response_object_name, $logger_type, $feature_revision): \OpenAPI\Client\Model\ModelRateLimiter[]
```

Create a rate limiter

Create a rate limiter for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RateLimiterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$service_id2 = 'service_id_example'; // string | Alphanumeric string identifying the service.
$version = 56; // int | Integer identifying a service version.
$created_at = 'created_at_example'; // string | Date and time in ISO 8601 format.
$deleted_at = 'deleted_at_example'; // string | Date and time in ISO 8601 format.
$updated_at = 'updated_at_example'; // string | Date and time in ISO 8601 format.
$name = 'name_example'; // string | A human readable name for the rate limiting rule.
$uri_dictionary_name = 'uri_dictionary_name_example'; // string | The name of an Edge Dictionary containing URIs as keys. If not defined or null, all origin URIs will be rate limited.
$http_methods = 'http_methods_example'; // string[] | Array of HTTP methods to apply rate limiting to.
$rps_limit = 56; // int | Upper limit of requests per second allowed by the rate limiter.
$window_size = 56; // int | Number of seconds during which the RPS limit must be exceeded in order to trigger a violation.
$client_key = 'client_key_example'; // string[] | Array of VCL variables used to generate a counter key to identify a client. Examples variables include `req.http.Fastly-Client-IP`, `req.http.User-Agent`, or a custom header like `req.http.API-Key`.
$penalty_box_duration = 56; // int | Length of time in seconds that the rate limiter is in effect after the initial violation is detected.
$action = 'action_example'; // string | The action to take when a rate limiter violation is detected. \\\"response\\\" and \\\"response_object\\\" prevent an origin request; \\\"log_only\\\" logs the violation but allows the origin request to continue.
$response = new \OpenAPI\Client\Model\ModelRateLimiterAllOfResponse(); // \OpenAPI\Client\Model\ModelRateLimiterAllOfResponse
$response_object_name = 'response_object_name_example'; // string | Name of existing response object. Required if `action` is \\\"response_object\\\". Note that the rate limiter response is only updated to reflect the response object content when saving the rate limiter configuration.
$logger_type = 'logger_type_example'; // string | Name of the type of logging endpoint to be used when action is \\\"log_only\\\". The logging endpoint type is used to determine the appropriate log format to use when emitting log entries.
$feature_revision = 56; // int | Revision number of the rate limiting feature implementation. Defaults to the most recent revision.

try {
    $result = $apiInstance->createRateLimiter($service_id, $version_id, $service_id2, $version, $created_at, $deleted_at, $updated_at, $name, $uri_dictionary_name, $http_methods, $rps_limit, $window_size, $client_key, $penalty_box_duration, $action, $response, $response_object_name, $logger_type, $feature_revision);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RateLimiterApi->createRateLimiter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **service_id2** | **string**| Alphanumeric string identifying the service. | [optional]
 **version** | **int**| Integer identifying a service version. | [optional]
 **created_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **deleted_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **updated_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **name** | **string**| A human readable name for the rate limiting rule. | [optional]
 **uri_dictionary_name** | **string**| The name of an Edge Dictionary containing URIs as keys. If not defined or null, all origin URIs will be rate limited. | [optional]
 **http_methods** | [**string[]**](../Model/string.md)| Array of HTTP methods to apply rate limiting to. | [optional]
 **rps_limit** | **int**| Upper limit of requests per second allowed by the rate limiter. | [optional]
 **window_size** | **int**| Number of seconds during which the RPS limit must be exceeded in order to trigger a violation. | [optional]
 **client_key** | [**string[]**](../Model/string.md)| Array of VCL variables used to generate a counter key to identify a client. Examples variables include &#x60;req.http.Fastly-Client-IP&#x60;, &#x60;req.http.User-Agent&#x60;, or a custom header like &#x60;req.http.API-Key&#x60;. | [optional]
 **penalty_box_duration** | **int**| Length of time in seconds that the rate limiter is in effect after the initial violation is detected. | [optional]
 **action** | **string**| The action to take when a rate limiter violation is detected. \\\&quot;response\\\&quot; and \\\&quot;response_object\\\&quot; prevent an origin request; \\\&quot;log_only\\\&quot; logs the violation but allows the origin request to continue. | [optional]
 **response** | [**\OpenAPI\Client\Model\ModelRateLimiterAllOfResponse**](../Model/ModelRateLimiterAllOfResponse.md)|  | [optional]
 **response_object_name** | **string**| Name of existing response object. Required if &#x60;action&#x60; is \\\&quot;response_object\\\&quot;. Note that the rate limiter response is only updated to reflect the response object content when saving the rate limiter configuration. | [optional]
 **logger_type** | **string**| Name of the type of logging endpoint to be used when action is \\\&quot;log_only\\\&quot;. The logging endpoint type is used to determine the appropriate log format to use when emitting log entries. | [optional]
 **feature_revision** | **int**| Revision number of the rate limiting feature implementation. Defaults to the most recent revision. | [optional]

### Return type

[**\OpenAPI\Client\Model\ModelRateLimiter[]**](../Model/ModelRateLimiter.md)

### Authorization

[token](../../README.md#token)

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


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RateLimiterApi(
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
    echo 'Exception when calling RateLimiterApi->deleteRateLimiter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rate_limiter_id** | **string**|  |

### Return type

**object**

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRateLimiter()`

```php
getRateLimiter($rate_limiter_id): \OpenAPI\Client\Model\ModelRateLimiter[]
```

Get a rate limiter

Get a rate limiter by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RateLimiterApi(
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
    echo 'Exception when calling RateLimiterApi->getRateLimiter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rate_limiter_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelRateLimiter[]**](../Model/ModelRateLimiter.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRateLimiters()`

```php
listRateLimiters($service_id, $version_id): \OpenAPI\Client\Model\ModelRateLimiter[]
```

List rate limiters

List all rate limiters for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RateLimiterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int

try {
    $result = $apiInstance->listRateLimiters($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RateLimiterApi->listRateLimiters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ModelRateLimiter[]**](../Model/ModelRateLimiter.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRateLimiter()`

```php
updateRateLimiter($rate_limiter_id, $service_id, $version, $created_at, $deleted_at, $updated_at, $name, $uri_dictionary_name, $http_methods, $rps_limit, $window_size, $client_key, $penalty_box_duration, $action, $response, $response_object_name, $logger_type, $feature_revision): \OpenAPI\Client\Model\ModelRateLimiter[]
```

Update a rate limiter

Update a rate limiter by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RateLimiterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rate_limiter_id = 'rate_limiter_id_example'; // string
$service_id = 'service_id_example'; // string | Alphanumeric string identifying the service.
$version = 56; // int | Integer identifying a service version.
$created_at = 'created_at_example'; // string | Date and time in ISO 8601 format.
$deleted_at = 'deleted_at_example'; // string | Date and time in ISO 8601 format.
$updated_at = 'updated_at_example'; // string | Date and time in ISO 8601 format.
$name = 'name_example'; // string | A human readable name for the rate limiting rule.
$uri_dictionary_name = 'uri_dictionary_name_example'; // string | The name of an Edge Dictionary containing URIs as keys. If not defined or null, all origin URIs will be rate limited.
$http_methods = 'http_methods_example'; // string[] | Array of HTTP methods to apply rate limiting to.
$rps_limit = 56; // int | Upper limit of requests per second allowed by the rate limiter.
$window_size = 56; // int | Number of seconds during which the RPS limit must be exceeded in order to trigger a violation.
$client_key = 'client_key_example'; // string[] | Array of VCL variables used to generate a counter key to identify a client. Examples variables include `req.http.Fastly-Client-IP`, `req.http.User-Agent`, or a custom header like `req.http.API-Key`.
$penalty_box_duration = 56; // int | Length of time in seconds that the rate limiter is in effect after the initial violation is detected.
$action = 'action_example'; // string | The action to take when a rate limiter violation is detected. \\\"response\\\" and \\\"response_object\\\" prevent an origin request; \\\"log_only\\\" logs the violation but allows the origin request to continue.
$response = new \OpenAPI\Client\Model\ModelRateLimiterAllOfResponse(); // \OpenAPI\Client\Model\ModelRateLimiterAllOfResponse
$response_object_name = 'response_object_name_example'; // string | Name of existing response object. Required if `action` is \\\"response_object\\\". Note that the rate limiter response is only updated to reflect the response object content when saving the rate limiter configuration.
$logger_type = 'logger_type_example'; // string | Name of the type of logging endpoint to be used when action is \\\"log_only\\\". The logging endpoint type is used to determine the appropriate log format to use when emitting log entries.
$feature_revision = 56; // int | Revision number of the rate limiting feature implementation. Defaults to the most recent revision.

try {
    $result = $apiInstance->updateRateLimiter($rate_limiter_id, $service_id, $version, $created_at, $deleted_at, $updated_at, $name, $uri_dictionary_name, $http_methods, $rps_limit, $window_size, $client_key, $penalty_box_duration, $action, $response, $response_object_name, $logger_type, $feature_revision);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RateLimiterApi->updateRateLimiter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rate_limiter_id** | **string**|  |
 **service_id** | **string**| Alphanumeric string identifying the service. | [optional]
 **version** | **int**| Integer identifying a service version. | [optional]
 **created_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **deleted_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **updated_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **name** | **string**| A human readable name for the rate limiting rule. | [optional]
 **uri_dictionary_name** | **string**| The name of an Edge Dictionary containing URIs as keys. If not defined or null, all origin URIs will be rate limited. | [optional]
 **http_methods** | [**string[]**](../Model/string.md)| Array of HTTP methods to apply rate limiting to. | [optional]
 **rps_limit** | **int**| Upper limit of requests per second allowed by the rate limiter. | [optional]
 **window_size** | **int**| Number of seconds during which the RPS limit must be exceeded in order to trigger a violation. | [optional]
 **client_key** | [**string[]**](../Model/string.md)| Array of VCL variables used to generate a counter key to identify a client. Examples variables include &#x60;req.http.Fastly-Client-IP&#x60;, &#x60;req.http.User-Agent&#x60;, or a custom header like &#x60;req.http.API-Key&#x60;. | [optional]
 **penalty_box_duration** | **int**| Length of time in seconds that the rate limiter is in effect after the initial violation is detected. | [optional]
 **action** | **string**| The action to take when a rate limiter violation is detected. \\\&quot;response\\\&quot; and \\\&quot;response_object\\\&quot; prevent an origin request; \\\&quot;log_only\\\&quot; logs the violation but allows the origin request to continue. | [optional]
 **response** | [**\OpenAPI\Client\Model\ModelRateLimiterAllOfResponse**](../Model/ModelRateLimiterAllOfResponse.md)|  | [optional]
 **response_object_name** | **string**| Name of existing response object. Required if &#x60;action&#x60; is \\\&quot;response_object\\\&quot;. Note that the rate limiter response is only updated to reflect the response object content when saving the rate limiter configuration. | [optional]
 **logger_type** | **string**| Name of the type of logging endpoint to be used when action is \\\&quot;log_only\\\&quot;. The logging endpoint type is used to determine the appropriate log format to use when emitting log entries. | [optional]
 **feature_revision** | **int**| Revision number of the rate limiting feature implementation. Defaults to the most recent revision. | [optional]

### Return type

[**\OpenAPI\Client\Model\ModelRateLimiter[]**](../Model/ModelRateLimiter.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
