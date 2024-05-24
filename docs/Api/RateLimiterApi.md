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

> [!NOTE]
> All URIs are relative to `https://api.fastly.com`

Method | HTTP request | Description
------ | ------------ | -----------
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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['name'] = 'name_example'; // string | A human readable name for the rate limiting rule.
$options['uri_dictionary_name'] = 'uri_dictionary_name_example'; // string | The name of an Edge Dictionary containing URIs as keys. If not defined or `null`, all origin URIs will be rate limited.
$options['http_methods'] = array('http_methods_example'); // string[] | Array of HTTP methods to apply rate limiting to.
$options['rps_limit'] = 56; // int | Upper limit of requests per second allowed by the rate limiter.
$options['window_size'] = 56; // int | Number of seconds during which the RPS limit must be exceeded in order to trigger a violation.
$options['client_key'] = array('client_key_example'); // string[] | Array of VCL variables used to generate a counter key to identify a client. Example variables include `req.http.Fastly-Client-IP`, `req.http.User-Agent`, or a custom header like `req.http.API-Key`.
$options['penalty_box_duration'] = 56; // int | Length of time in minutes that the rate limiter is in effect after the initial violation is detected.
$options['action'] = 'action_example'; // string | The action to take when a rate limiter violation is detected.
$options['response_object_name'] = 'response_object_name_example'; // string | Name of existing response object. Required if `action` is `response_object`. Note that the rate limiter response is only updated to reflect the response object content when saving the rate limiter configuration.
$options['logger_type'] = 'logger_type_example'; // string | Name of the type of logging endpoint to be used when action is `log_only`. The logging endpoint type is used to determine the appropriate log format to use when emitting log entries.
$options['feature_revision'] = 56; // int | Revision number of the rate limiting feature implementation. Defaults to the most recent revision.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**name** | **string** | A human readable name for the rate limiting rule. | [optional]
**uri_dictionary_name** | **string** | The name of an Edge Dictionary containing URIs as keys. If not defined or `null`, all origin URIs will be rate limited. | [optional]
**http_methods** | [**string[]**](../Model/string.md) | Array of HTTP methods to apply rate limiting to. | [optional] [one of: 'HEAD', 'OPTIONS', 'GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'TRACE']
**rps_limit** | **int** | Upper limit of requests per second allowed by the rate limiter. | [optional]
**window_size** | **int** | Number of seconds during which the RPS limit must be exceeded in order to trigger a violation. | [optional] [one of: 1, 10, 60]
**client_key** | [**string[]**](../Model/string.md) | Array of VCL variables used to generate a counter key to identify a client. Example variables include `req.http.Fastly-Client-IP`, `req.http.User-Agent`, or a custom header like `req.http.API-Key`. | [optional]
**penalty_box_duration** | **int** | Length of time in minutes that the rate limiter is in effect after the initial violation is detected. | [optional]
**action** | **string** | The action to take when a rate limiter violation is detected. | [optional] [one of: 'response', 'response_object', 'log_only']
**response_object_name** | **string** | Name of existing response object. Required if `action` is `response_object`. Note that the rate limiter response is only updated to reflect the response object content when saving the rate limiter configuration. | [optional]
**logger_type** | **string** | Name of the type of logging endpoint to be used when action is `log_only`. The logging endpoint type is used to determine the appropriate log format to use when emitting log entries. | [optional] [one of: 'azureblob', 'bigquery', 'cloudfiles', 'datadog', 'digitalocean', 'elasticsearch', 'ftp', 'gcs', 'googleanalytics', 'heroku', 'honeycomb', 'http', 'https', 'kafka', 'kinesis', 'logentries', 'loggly', 'logshuttle', 'newrelic', 'newrelicotlp', 'openstack', 'papertrail', 'pubsub', 's3', 'scalyr', 'sftp', 'splunk', 'stackdriver', 'sumologic', 'syslog']
**feature_revision** | **int** | Revision number of the rate limiting feature implementation. Defaults to the most recent revision. | [optional]

### Return type

[**\Fastly\Model\RateLimiterResponse**](../Model/RateLimiterResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

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

## `updateRateLimiter()`

```php
updateRateLimiter($options): \Fastly\Model\RateLimiterResponse // Update a rate limiter
```

Update a rate limiter by its ID.

### Example
```php
    $options['rate_limiter_id'] = 'rate_limiter_id_example'; // string | Alphanumeric string identifying the rate limiter.
$options['name'] = 'name_example'; // string | A human readable name for the rate limiting rule.
$options['uri_dictionary_name'] = 'uri_dictionary_name_example'; // string | The name of an Edge Dictionary containing URIs as keys. If not defined or `null`, all origin URIs will be rate limited.
$options['http_methods'] = array('http_methods_example'); // string[] | Array of HTTP methods to apply rate limiting to.
$options['rps_limit'] = 56; // int | Upper limit of requests per second allowed by the rate limiter.
$options['window_size'] = 56; // int | Number of seconds during which the RPS limit must be exceeded in order to trigger a violation.
$options['client_key'] = array('client_key_example'); // string[] | Array of VCL variables used to generate a counter key to identify a client. Example variables include `req.http.Fastly-Client-IP`, `req.http.User-Agent`, or a custom header like `req.http.API-Key`.
$options['penalty_box_duration'] = 56; // int | Length of time in minutes that the rate limiter is in effect after the initial violation is detected.
$options['action'] = 'action_example'; // string | The action to take when a rate limiter violation is detected.
$options['response_object_name'] = 'response_object_name_example'; // string | Name of existing response object. Required if `action` is `response_object`. Note that the rate limiter response is only updated to reflect the response object content when saving the rate limiter configuration.
$options['logger_type'] = 'logger_type_example'; // string | Name of the type of logging endpoint to be used when action is `log_only`. The logging endpoint type is used to determine the appropriate log format to use when emitting log entries.
$options['feature_revision'] = 56; // int | Revision number of the rate limiting feature implementation. Defaults to the most recent revision.

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
**rate_limiter_id** | **string** | Alphanumeric string identifying the rate limiter. |
**name** | **string** | A human readable name for the rate limiting rule. | [optional]
**uri_dictionary_name** | **string** | The name of an Edge Dictionary containing URIs as keys. If not defined or `null`, all origin URIs will be rate limited. | [optional]
**http_methods** | [**string[]**](../Model/string.md) | Array of HTTP methods to apply rate limiting to. | [optional] [one of: 'HEAD', 'OPTIONS', 'GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'TRACE']
**rps_limit** | **int** | Upper limit of requests per second allowed by the rate limiter. | [optional]
**window_size** | **int** | Number of seconds during which the RPS limit must be exceeded in order to trigger a violation. | [optional] [one of: 1, 10, 60]
**client_key** | [**string[]**](../Model/string.md) | Array of VCL variables used to generate a counter key to identify a client. Example variables include `req.http.Fastly-Client-IP`, `req.http.User-Agent`, or a custom header like `req.http.API-Key`. | [optional]
**penalty_box_duration** | **int** | Length of time in minutes that the rate limiter is in effect after the initial violation is detected. | [optional]
**action** | **string** | The action to take when a rate limiter violation is detected. | [optional] [one of: 'response', 'response_object', 'log_only']
**response_object_name** | **string** | Name of existing response object. Required if `action` is `response_object`. Note that the rate limiter response is only updated to reflect the response object content when saving the rate limiter configuration. | [optional]
**logger_type** | **string** | Name of the type of logging endpoint to be used when action is `log_only`. The logging endpoint type is used to determine the appropriate log format to use when emitting log entries. | [optional] [one of: 'azureblob', 'bigquery', 'cloudfiles', 'datadog', 'digitalocean', 'elasticsearch', 'ftp', 'gcs', 'googleanalytics', 'heroku', 'honeycomb', 'http', 'https', 'kafka', 'kinesis', 'logentries', 'loggly', 'logshuttle', 'newrelic', 'newrelicotlp', 'openstack', 'papertrail', 'pubsub', 's3', 'scalyr', 'sftp', 'splunk', 'stackdriver', 'sumologic', 'syslog']
**feature_revision** | **int** | Revision number of the rate limiting feature implementation. Defaults to the most recent revision. | [optional]

### Return type

[**\Fastly\Model\RateLimiterResponse**](../Model/RateLimiterResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
