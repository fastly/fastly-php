# Fastly\Api\RateLimiterApi


```php
$apiInstance = new Fastly\Api\RateLimiterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**createRateLimiter()**](RateLimiterApi.md#createRateLimiter) | **POST** /service/{service_id}/version/{version_id}/rate-limiters | Create a rate limiter
[**deleteRateLimiter()**](RateLimiterApi.md#deleteRateLimiter) | **DELETE** /rate-limiters/{rate_limiter_id} | Delete a rate limiter
[**getRateLimiter()**](RateLimiterApi.md#getRateLimiter) | **GET** /rate-limiters/{rate_limiter_id} | Get a rate limiter
[**listRateLimiters()**](RateLimiterApi.md#listRateLimiters) | **GET** /service/{service_id}/version/{version_id}/rate-limiters | List rate limiters
[**updateRateLimiter()**](RateLimiterApi.md#updateRateLimiter) | **PUT** /rate-limiters/{rate_limiter_id} | Update a rate limiter


## `createRateLimiter()`

```php
createRateLimiter($options): \Fastly\Model\RateLimiterResponse // Create a rate limiter
```

Create a rate limiter for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->createRateLimiter($options);
} catch (Exception $e) {
    echo 'Exception when calling RateLimiterApi->createRateLimiter: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**action** | **string** | The action to take when a rate limiter violation is detected. | [optional]
**client_key** | [**string[]**](../Model/string.md) | Array of VCL variables used to generate a counter key to identify a client. Example variables include &#x60;req.http.Fastly-Client-IP&#x60;, &#x60;req.http.User-Agent&#x60;, or a custom header like &#x60;req.http.API-Key&#x60;. | [optional]
**feature_revision** | **int** | Revision number of the rate limiting feature implementation. Defaults to the most recent revision. | [optional]
**http_methods** | [**string[]**](../Model/string.md) | Array of HTTP methods to apply rate limiting to. | [optional]
**logger_type** | **string** | Name of the type of logging endpoint to be used when action is &#x60;log_only&#x60;. The logging endpoint type is used to determine the appropriate log format to use when emitting log entries. | [optional]
**name** | **string** | A human readable name for the rate limiting rule. | [optional]
**penalty_box_duration** | **int** | Length of time in seconds that the rate limiter is in effect after the initial violation is detected. | [optional]
**response** | [**\Fastly\Model\RateLimiterResponse1**](../Model/RateLimiterResponse1.md) |  | [optional]
**response_object_name** | **string** | Name of existing response object. Required if &#x60;action&#x60; is &#x60;response_object&#x60;. Note that the rate limiter response is only updated to reflect the response object content when saving the rate limiter configuration. | [optional]
**rps_limit** | **int** | Upper limit of requests per second allowed by the rate limiter. | [optional]
**uri_dictionary_name** | **string** | The name of an Edge Dictionary containing URIs as keys. If not defined or &#x60;null&#x60;, all origin URIs will be rate limited. | [optional]
**window_size** | **int** | Number of seconds during which the RPS limit must be exceeded in order to trigger a violation. | [optional]

### Return type

[**\Fastly\Model\RateLimiterResponse**](../Model/RateLimiterResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteRateLimiter()`

```php
deleteRateLimiter($options): object // Delete a rate limiter
```

Delete a rate limiter by its ID.

### Example
```php
try {
    $result = $apiInstance->deleteRateLimiter($options);
} catch (Exception $e) {
    echo 'Exception when calling RateLimiterApi->deleteRateLimiter: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**rate_limiter_id** | **string** |  |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getRateLimiter()`

```php
getRateLimiter($options): \Fastly\Model\RateLimiterResponse // Get a rate limiter
```

Get a rate limiter by its ID.

### Example
```php
try {
    $result = $apiInstance->getRateLimiter($options);
} catch (Exception $e) {
    echo 'Exception when calling RateLimiterApi->getRateLimiter: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**rate_limiter_id** | **string** |  |

### Return type

[**\Fastly\Model\RateLimiterResponse**](../Model/RateLimiterResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listRateLimiters()`

```php
listRateLimiters($options): \Fastly\Model\RateLimiterResponse[] // List rate limiters
```

List all rate limiters for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->listRateLimiters($options);
} catch (Exception $e) {
    echo 'Exception when calling RateLimiterApi->listRateLimiters: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |

### Return type

[**\Fastly\Model\RateLimiterResponse[]**](../Model/RateLimiterResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateRateLimiter()`

```php
updateRateLimiter($options): \Fastly\Model\RateLimiterResponse // Update a rate limiter
```

Update a rate limiter by its ID.

### Example
```php
try {
    $result = $apiInstance->updateRateLimiter($options);
} catch (Exception $e) {
    echo 'Exception when calling RateLimiterApi->updateRateLimiter: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**rate_limiter_id** | **string** |  |
**action** | **string** | The action to take when a rate limiter violation is detected. | [optional]
**client_key** | [**string[]**](../Model/string.md) | Array of VCL variables used to generate a counter key to identify a client. Example variables include &#x60;req.http.Fastly-Client-IP&#x60;, &#x60;req.http.User-Agent&#x60;, or a custom header like &#x60;req.http.API-Key&#x60;. | [optional]
**feature_revision** | **int** | Revision number of the rate limiting feature implementation. Defaults to the most recent revision. | [optional]
**http_methods** | [**string[]**](../Model/string.md) | Array of HTTP methods to apply rate limiting to. | [optional]
**logger_type** | **string** | Name of the type of logging endpoint to be used when action is &#x60;log_only&#x60;. The logging endpoint type is used to determine the appropriate log format to use when emitting log entries. | [optional]
**name** | **string** | A human readable name for the rate limiting rule. | [optional]
**penalty_box_duration** | **int** | Length of time in seconds that the rate limiter is in effect after the initial violation is detected. | [optional]
**response** | [**\Fastly\Model\RateLimiterResponse1**](../Model/RateLimiterResponse1.md) |  | [optional]
**response_object_name** | **string** | Name of existing response object. Required if &#x60;action&#x60; is &#x60;response_object&#x60;. Note that the rate limiter response is only updated to reflect the response object content when saving the rate limiter configuration. | [optional]
**rps_limit** | **int** | Upper limit of requests per second allowed by the rate limiter. | [optional]
**uri_dictionary_name** | **string** | The name of an Edge Dictionary containing URIs as keys. If not defined or &#x60;null&#x60;, all origin URIs will be rate limited. | [optional]
**window_size** | **int** | Number of seconds during which the RPS limit must be exceeded in order to trigger a violation. | [optional]

### Return type

[**\Fastly\Model\RateLimiterResponse**](../Model/RateLimiterResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
