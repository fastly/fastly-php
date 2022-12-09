# Fastly\Api\RateLimiterApi


```php
$apiInstance = new Fastly\Api\RateLimiterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**deleteRateLimiter()**](RateLimiterApi.md#deleteRateLimiter) | **DELETE** /rate-limiters/{rate_limiter_id} | Delete a rate limiter
[**getRateLimiter()**](RateLimiterApi.md#getRateLimiter) | **GET** /rate-limiters/{rate_limiter_id} | Get a rate limiter
[**listRateLimiters()**](RateLimiterApi.md#listRateLimiters) | **GET** /service/{service_id}/version/{version_id}/rate-limiters | List rate limiters


## `deleteRateLimiter()`

```php
deleteRateLimiter($options): \Fastly\Model\InlineResponse200 // Delete a rate limiter
```

Delete a rate limiter by its ID.

### Example
```php
    $options['rate_limiter_id'] = 'rate_limiter_id_example'; // string | Alphanumeric string identifying the rate limiter.

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
**rate_limiter_id** | **string** | Alphanumeric string identifying the rate limiter. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getRateLimiter()`

```php
getRateLimiter($options): \Fastly\Model\RateLimiterResponse // Get a rate limiter
```

Get a rate limiter by its ID.

### Example
```php
    $options['rate_limiter_id'] = 'rate_limiter_id_example'; // string | Alphanumeric string identifying the rate limiter.

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
**rate_limiter_id** | **string** | Alphanumeric string identifying the rate limiter. |

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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\RateLimiterResponse[]**](../Model/RateLimiterResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
