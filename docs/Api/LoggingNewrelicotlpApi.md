# Fastly\Api\LoggingNewrelicotlpApi


```php
$apiInstance = new Fastly\Api\LoggingNewrelicotlpApi(
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
[**createLogNewrelicotlp()**](LoggingNewrelicotlpApi.md#createLogNewrelicotlp) | **POST** /service/{service_id}/version/{version_id}/logging/newrelicotlp | Create a New Relic OTLP endpoint
[**deleteLogNewrelicotlp()**](LoggingNewrelicotlpApi.md#deleteLogNewrelicotlp) | **DELETE** /service/{service_id}/version/{version_id}/logging/newrelicotlp/{logging_newrelicotlp_name} | Delete a New Relic OTLP endpoint
[**getLogNewrelicotlp()**](LoggingNewrelicotlpApi.md#getLogNewrelicotlp) | **GET** /service/{service_id}/version/{version_id}/logging/newrelicotlp/{logging_newrelicotlp_name} | Get a New Relic OTLP endpoint
[**listLogNewrelicotlp()**](LoggingNewrelicotlpApi.md#listLogNewrelicotlp) | **GET** /service/{service_id}/version/{version_id}/logging/newrelicotlp | List New Relic OTLP endpoints
[**updateLogNewrelicotlp()**](LoggingNewrelicotlpApi.md#updateLogNewrelicotlp) | **PUT** /service/{service_id}/version/{version_id}/logging/newrelicotlp/{logging_newrelicotlp_name} | Update a New Relic log endpoint


## `createLogNewrelicotlp()`

```php
createLogNewrelicotlp($options): \Fastly\Model\LoggingNewrelicotlpResponse // Create a New Relic OTLP endpoint
```

Create a New Relic OTLP logging object for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['name'] = 'name_example'; // string | The name for the real-time logging configuration.
$options['placement'] = 'placement_example'; // string | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
$options['response_condition'] = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$options['format'] = '{\"timestamp\":\"%{begin:%Y-%m-%dT%H:%M:%S}t\",\"time_elapsed\":\"%{time.elapsed.usec}V\",\"is_tls\":\"%{if(req.is_ssl, \\\"true\\\", \\\"false\\\")}V\",\"client_ip\":\"%{req.http.Fastly-Client-IP}V\",\"geo_city\":\"%{client.geo.city}V\",\"geo_country_code\":\"%{client.geo.country_code}V\",\"request\":\"%{req.request}V\",\"host\":\"%{req.http.Fastly-Orig-Host}V\",\"url\":\"%{json.escape(req.url)}V\",\"request_referer\":\"%{json.escape(req.http.Referer)}V\",\"request_user_agent\":\"%{json.escape(req.http.User-Agent)}V\",\"request_accept_language\":\"%{json.escape(req.http.Accept-Language)}V\",\"request_accept_charset\":\"%{json.escape(req.http.Accept-Charset)}V\",\"cache_status\":\"%{regsub(fastly_info.state, \\\"^(HIT-(SYNTH)|(HITPASS|HIT|MISS|PASS|ERROR|PIPE)).*\\\", \\\"\\\\2\\\\3\\\") }V\"}'; // string | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats).
$options['format_version'] = self::FORMAT_VERSION_v2; // int | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
$options['token'] = 'token_example'; // string | The Insert API key from the Account page of your New Relic account. Required.
$options['region'] = 'US'; // string | The region to which to stream logs.
$options['url'] = 'null'; // string | (Optional) URL of the New Relic Trace Observer, if you are using New Relic Infinite Tracing.

try {
    $result = $apiInstance->createLogNewrelicotlp($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingNewrelicotlpApi->createLogNewrelicotlp: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional] [one of: 'none', 'waf_debug', 'null']
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [defaults to '{"timestamp":"%{begin:%Y-%m-%dT%H:%M:%S}t","time_elapsed":"%{time.elapsed.usec}V","is_tls":"%{if(req.is_ssl, \"true\", \"false\")}V","client_ip":"%{req.http.Fastly-Client-IP}V","geo_city":"%{client.geo.city}V","geo_country_code":"%{client.geo.country_code}V","request":"%{req.request}V","host":"%{req.http.Fastly-Orig-Host}V","url":"%{json.escape(req.url)}V","request_referer":"%{json.escape(req.http.Referer)}V","request_user_agent":"%{json.escape(req.http.User-Agent)}V","request_accept_language":"%{json.escape(req.http.Accept-Language)}V","request_accept_charset":"%{json.escape(req.http.Accept-Charset)}V","cache_status":"%{regsub(fastly_info.state, \"^(HIT-(SYNTH)|(HITPASS|HIT|MISS|PASS|ERROR|PIPE)).*\", \"\\2\\3\") }V"}']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**token** | **string** | The Insert API key from the Account page of your New Relic account. Required. | [optional]
**region** | **string** | The region to which to stream logs. | [optional] [one of: 'US', 'EU'] [defaults to 'US']
**url** | **string** | (Optional) URL of the New Relic Trace Observer, if you are using New Relic Infinite Tracing. | [optional] [defaults to 'null']

### Return type

[**\Fastly\Model\LoggingNewrelicotlpResponse**](../Model/LoggingNewrelicotlpResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogNewrelicotlp()`

```php
deleteLogNewrelicotlp($options): \Fastly\Model\InlineResponse200 // Delete a New Relic OTLP endpoint
```

Delete the New Relic OTLP logging object for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_newrelicotlp_name'] = 'logging_newrelicotlp_name_example'; // string | The name for the real-time logging configuration.

try {
    $result = $apiInstance->deleteLogNewrelicotlp($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingNewrelicotlpApi->deleteLogNewrelicotlp: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_newrelicotlp_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogNewrelicotlp()`

```php
getLogNewrelicotlp($options): \Fastly\Model\LoggingNewrelicotlpResponse // Get a New Relic OTLP endpoint
```

Get the details of a New Relic OTLP logging object for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_newrelicotlp_name'] = 'logging_newrelicotlp_name_example'; // string | The name for the real-time logging configuration.

try {
    $result = $apiInstance->getLogNewrelicotlp($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingNewrelicotlpApi->getLogNewrelicotlp: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_newrelicotlp_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\LoggingNewrelicotlpResponse**](../Model/LoggingNewrelicotlpResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLogNewrelicotlp()`

```php
listLogNewrelicotlp($options): \Fastly\Model\LoggingNewrelicotlpResponse[] // List New Relic OTLP endpoints
```

List all of the New Relic OTLP logging objects for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

try {
    $result = $apiInstance->listLogNewrelicotlp($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingNewrelicotlpApi->listLogNewrelicotlp: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\LoggingNewrelicotlpResponse[]**](../Model/LoggingNewrelicotlpResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateLogNewrelicotlp()`

```php
updateLogNewrelicotlp($options): \Fastly\Model\LoggingNewrelicotlpResponse // Update a New Relic log endpoint
```

Update a New Relic OTLP logging object for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_newrelicotlp_name'] = 'logging_newrelicotlp_name_example'; // string | The name for the real-time logging configuration.
$options['name'] = 'name_example'; // string | The name for the real-time logging configuration.
$options['placement'] = 'placement_example'; // string | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
$options['response_condition'] = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$options['format'] = '{\"timestamp\":\"%{begin:%Y-%m-%dT%H:%M:%S}t\",\"time_elapsed\":\"%{time.elapsed.usec}V\",\"is_tls\":\"%{if(req.is_ssl, \\\"true\\\", \\\"false\\\")}V\",\"client_ip\":\"%{req.http.Fastly-Client-IP}V\",\"geo_city\":\"%{client.geo.city}V\",\"geo_country_code\":\"%{client.geo.country_code}V\",\"request\":\"%{req.request}V\",\"host\":\"%{req.http.Fastly-Orig-Host}V\",\"url\":\"%{json.escape(req.url)}V\",\"request_referer\":\"%{json.escape(req.http.Referer)}V\",\"request_user_agent\":\"%{json.escape(req.http.User-Agent)}V\",\"request_accept_language\":\"%{json.escape(req.http.Accept-Language)}V\",\"request_accept_charset\":\"%{json.escape(req.http.Accept-Charset)}V\",\"cache_status\":\"%{regsub(fastly_info.state, \\\"^(HIT-(SYNTH)|(HITPASS|HIT|MISS|PASS|ERROR|PIPE)).*\\\", \\\"\\\\2\\\\3\\\") }V\"}'; // string | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats).
$options['format_version'] = self::FORMAT_VERSION_v2; // int | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
$options['token'] = 'token_example'; // string | The Insert API key from the Account page of your New Relic account. Required.
$options['region'] = 'US'; // string | The region to which to stream logs.
$options['url'] = 'null'; // string | (Optional) URL of the New Relic Trace Observer, if you are using New Relic Infinite Tracing.

try {
    $result = $apiInstance->updateLogNewrelicotlp($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingNewrelicotlpApi->updateLogNewrelicotlp: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_newrelicotlp_name** | **string** | The name for the real-time logging configuration. |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional] [one of: 'none', 'waf_debug', 'null']
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [defaults to '{"timestamp":"%{begin:%Y-%m-%dT%H:%M:%S}t","time_elapsed":"%{time.elapsed.usec}V","is_tls":"%{if(req.is_ssl, \"true\", \"false\")}V","client_ip":"%{req.http.Fastly-Client-IP}V","geo_city":"%{client.geo.city}V","geo_country_code":"%{client.geo.country_code}V","request":"%{req.request}V","host":"%{req.http.Fastly-Orig-Host}V","url":"%{json.escape(req.url)}V","request_referer":"%{json.escape(req.http.Referer)}V","request_user_agent":"%{json.escape(req.http.User-Agent)}V","request_accept_language":"%{json.escape(req.http.Accept-Language)}V","request_accept_charset":"%{json.escape(req.http.Accept-Charset)}V","cache_status":"%{regsub(fastly_info.state, \"^(HIT-(SYNTH)|(HITPASS|HIT|MISS|PASS|ERROR|PIPE)).*\", \"\\2\\3\") }V"}']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**token** | **string** | The Insert API key from the Account page of your New Relic account. Required. | [optional]
**region** | **string** | The region to which to stream logs. | [optional] [one of: 'US', 'EU'] [defaults to 'US']
**url** | **string** | (Optional) URL of the New Relic Trace Observer, if you are using New Relic Infinite Tracing. | [optional] [defaults to 'null']

### Return type

[**\Fastly\Model\LoggingNewrelicotlpResponse**](../Model/LoggingNewrelicotlpResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
