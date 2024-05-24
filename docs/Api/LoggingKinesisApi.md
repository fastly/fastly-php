# Fastly\Api\LoggingKinesisApi


```php
$apiInstance = new Fastly\Api\LoggingKinesisApi(
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
[**createLogKinesis()**](LoggingKinesisApi.md#createLogKinesis) | **POST** /service/{service_id}/version/{version_id}/logging/kinesis | Create  an Amazon Kinesis log endpoint
[**deleteLogKinesis()**](LoggingKinesisApi.md#deleteLogKinesis) | **DELETE** /service/{service_id}/version/{version_id}/logging/kinesis/{logging_kinesis_name} | Delete the Amazon Kinesis log endpoint
[**getLogKinesis()**](LoggingKinesisApi.md#getLogKinesis) | **GET** /service/{service_id}/version/{version_id}/logging/kinesis/{logging_kinesis_name} | Get an Amazon Kinesis log endpoint
[**listLogKinesis()**](LoggingKinesisApi.md#listLogKinesis) | **GET** /service/{service_id}/version/{version_id}/logging/kinesis | List Amazon Kinesis log endpoints
[**updateLogKinesis()**](LoggingKinesisApi.md#updateLogKinesis) | **PUT** /service/{service_id}/version/{version_id}/logging/kinesis/{logging_kinesis_name} | Update the Amazon Kinesis log endpoint


## `createLogKinesis()`

```php
createLogKinesis($options): \Fastly\Model\LoggingKinesisResponse // Create  an Amazon Kinesis log endpoint
```

Create an Amazon Kinesis Data Streams logging object for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['name'] = 'name_example'; // string | The name for the real-time logging configuration.
$options['placement'] = new \Fastly\Model\LoggingPlacement(); // \Fastly\Model\LoggingPlacement
$options['format'] = '{\"timestamp\":\"%{begin:%Y-%m-%dT%H:%M:%S}t\",\"time_elapsed\":\"%{time.elapsed.usec}V\",\"is_tls\":\"%{if(req.is_ssl, \\\"true\\\", \\\"false\\\")}V\",\"client_ip\":\"%{req.http.Fastly-Client-IP}V\",\"geo_city\":\"%{client.geo.city}V\",\"geo_country_code\":\"%{client.geo.country_code}V\",\"request\":\"%{req.request}V\",\"host\":\"%{req.http.Fastly-Orig-Host}V\",\"url\":\"%{json.escape(req.url)}V\",\"request_referer\":\"%{json.escape(req.http.Referer)}V\",\"request_user_agent\":\"%{json.escape(req.http.User-Agent)}V\",\"request_accept_language\":\"%{json.escape(req.http.Accept-Language)}V\",\"request_accept_charset\":\"%{json.escape(req.http.Accept-Charset)}V\",\"cache_status\":\"%{regsub(fastly_info.state, \\\"^(HIT-(SYNTH)|(HITPASS|HIT|MISS|PASS|ERROR|PIPE)).*\\\", \\\"\\\\2\\\\3\\\") }V\"}'; // string | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats).
$options['topic'] = 'topic_example'; // string | The Amazon Kinesis stream to send logs to. Required.
$options['region'] = new \Fastly\Model\AwsRegion(); // \Fastly\Model\AwsRegion
$options['secret_key'] = 'secret_key_example'; // string | The secret key associated with the target Amazon Kinesis stream. Not required if `iam_role` is specified.
$options['access_key'] = 'access_key_example'; // string | The access key associated with the target Amazon Kinesis stream. Not required if `iam_role` is specified.
$options['iam_role'] = 'iam_role_example'; // string | The ARN for an IAM role granting Fastly access to the target Amazon Kinesis stream. Not required if `access_key` and `secret_key` are provided.
$options['format_version'] = self::FORMAT_VERSION_v2; // int | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.

try {
    $result = $apiInstance->createLogKinesis($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingKinesisApi->createLogKinesis: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | [**\Fastly\Model\LoggingPlacement**](../Model/LoggingPlacement.md) |  | [optional]
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [defaults to '{"timestamp":"%{begin:%Y-%m-%dT%H:%M:%S}t","time_elapsed":"%{time.elapsed.usec}V","is_tls":"%{if(req.is_ssl, \"true\", \"false\")}V","client_ip":"%{req.http.Fastly-Client-IP}V","geo_city":"%{client.geo.city}V","geo_country_code":"%{client.geo.country_code}V","request":"%{req.request}V","host":"%{req.http.Fastly-Orig-Host}V","url":"%{json.escape(req.url)}V","request_referer":"%{json.escape(req.http.Referer)}V","request_user_agent":"%{json.escape(req.http.User-Agent)}V","request_accept_language":"%{json.escape(req.http.Accept-Language)}V","request_accept_charset":"%{json.escape(req.http.Accept-Charset)}V","cache_status":"%{regsub(fastly_info.state, \"^(HIT-(SYNTH)|(HITPASS|HIT|MISS|PASS|ERROR|PIPE)).*\", \"\\2\\3\") }V"}']
**topic** | **string** | The Amazon Kinesis stream to send logs to. Required. | [optional]
**region** | [**\Fastly\Model\AwsRegion**](../Model/AwsRegion.md) |  | [optional]
**secret_key** | **string** | The secret key associated with the target Amazon Kinesis stream. Not required if `iam_role` is specified. | [optional]
**access_key** | **string** | The access key associated with the target Amazon Kinesis stream. Not required if `iam_role` is specified. | [optional]
**iam_role** | **string** | The ARN for an IAM role granting Fastly access to the target Amazon Kinesis stream. Not required if `access_key` and `secret_key` are provided. | [optional]
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]

### Return type

[**\Fastly\Model\LoggingKinesisResponse**](../Model/LoggingKinesisResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogKinesis()`

```php
deleteLogKinesis($options): \Fastly\Model\InlineResponse200 // Delete the Amazon Kinesis log endpoint
```

Delete an Amazon Kinesis Data Streams logging object for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_kinesis_name'] = 'logging_kinesis_name_example'; // string | The name for the real-time logging configuration.

try {
    $result = $apiInstance->deleteLogKinesis($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingKinesisApi->deleteLogKinesis: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_kinesis_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogKinesis()`

```php
getLogKinesis($options): \Fastly\Model\LoggingKinesisResponse // Get an Amazon Kinesis log endpoint
```

Get the details for an Amazon Kinesis Data Streams logging object for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_kinesis_name'] = 'logging_kinesis_name_example'; // string | The name for the real-time logging configuration.

try {
    $result = $apiInstance->getLogKinesis($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingKinesisApi->getLogKinesis: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_kinesis_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\LoggingKinesisResponse**](../Model/LoggingKinesisResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLogKinesis()`

```php
listLogKinesis($options): \Fastly\Model\LoggingKinesisResponse[] // List Amazon Kinesis log endpoints
```

List all of the Amazon Kinesis Data Streams logging objects for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

try {
    $result = $apiInstance->listLogKinesis($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingKinesisApi->listLogKinesis: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\LoggingKinesisResponse[]**](../Model/LoggingKinesisResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateLogKinesis()`

```php
updateLogKinesis($options): \Fastly\Model\LoggingKinesisResponse // Update the Amazon Kinesis log endpoint
```

Update an Amazon Kinesis Data Streams logging object for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_kinesis_name'] = 'logging_kinesis_name_example'; // string | The name for the real-time logging configuration.

try {
    $result = $apiInstance->updateLogKinesis($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingKinesisApi->updateLogKinesis: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_kinesis_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\LoggingKinesisResponse**](../Model/LoggingKinesisResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
