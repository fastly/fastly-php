# Fastly\Api\LoggingPubsubApi


```php
$apiInstance = new Fastly\Api\LoggingPubsubApi(
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
[**createLogGcpPubsub()**](LoggingPubsubApi.md#createLogGcpPubsub) | **POST** /service/{service_id}/version/{version_id}/logging/pubsub | Create a GCP Cloud Pub/Sub log endpoint
[**deleteLogGcpPubsub()**](LoggingPubsubApi.md#deleteLogGcpPubsub) | **DELETE** /service/{service_id}/version/{version_id}/logging/pubsub/{logging_google_pubsub_name} | Delete a GCP Cloud Pub/Sub log endpoint
[**getLogGcpPubsub()**](LoggingPubsubApi.md#getLogGcpPubsub) | **GET** /service/{service_id}/version/{version_id}/logging/pubsub/{logging_google_pubsub_name} | Get a GCP Cloud Pub/Sub log endpoint
[**listLogGcpPubsub()**](LoggingPubsubApi.md#listLogGcpPubsub) | **GET** /service/{service_id}/version/{version_id}/logging/pubsub | List GCP Cloud Pub/Sub log endpoints
[**updateLogGcpPubsub()**](LoggingPubsubApi.md#updateLogGcpPubsub) | **PUT** /service/{service_id}/version/{version_id}/logging/pubsub/{logging_google_pubsub_name} | Update a GCP Cloud Pub/Sub log endpoint


## `createLogGcpPubsub()`

```php
createLogGcpPubsub($options): \Fastly\Model\LoggingGooglePubsubResponse // Create a GCP Cloud Pub/Sub log endpoint
```

Create a Pub/Sub logging object for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['name'] = 'name_example'; // string | The name for the real-time logging configuration.
$options['placement'] = 'placement_example'; // string | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
$options['response_condition'] = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$options['format'] = '%h %l %u %t \"%r\" %&gt;s %b'; // string | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/).
$options['log_processing_region'] = 'none'; // string | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global.
$options['format_version'] = self::FORMAT_VERSION_v2; // int | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
$options['user'] = 'user_example'; // string | Your Google Cloud Platform service account email address. The `client_email` field in your service account authentication JSON. Not required if `account_name` is specified.
$options['secret_key'] = 'secret_key_example'; // string | Your Google Cloud Platform account secret key. The `private_key` field in your service account authentication JSON. Not required if `account_name` is specified.
$options['account_name'] = 'account_name_example'; // string | The name of the Google Cloud Platform service account associated with the target log collection service. Not required if `user` and `secret_key` are provided.
$options['topic'] = 'topic_example'; // string | The Google Cloud Pub/Sub topic to which logs will be published. Required.
$options['project_id'] = 'project_id_example'; // string | Your Google Cloud Platform project ID. Required

try {
    $result = $apiInstance->createLogGcpPubsub($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingPubsubApi->createLogGcpPubsub: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional] [one of: 'none', 'null']
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). | [optional] [defaults to '%h %l %u %t "%r" %&gt;s %b']
**log_processing_region** | **string** | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global. | [optional] [one of: 'none', 'eu', 'us'] [defaults to 'none']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**user** | **string** | Your Google Cloud Platform service account email address. The `client_email` field in your service account authentication JSON. Not required if `account_name` is specified. | [optional]
**secret_key** | **string** | Your Google Cloud Platform account secret key. The `private_key` field in your service account authentication JSON. Not required if `account_name` is specified. | [optional]
**account_name** | **string** | The name of the Google Cloud Platform service account associated with the target log collection service. Not required if `user` and `secret_key` are provided. | [optional]
**topic** | **string** | The Google Cloud Pub/Sub topic to which logs will be published. Required. | [optional]
**project_id** | **string** | Your Google Cloud Platform project ID. Required | [optional]

### Return type

[**\Fastly\Model\LoggingGooglePubsubResponse**](../Model/LoggingGooglePubsubResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogGcpPubsub()`

```php
deleteLogGcpPubsub($options): \Fastly\Model\InlineResponse200 // Delete a GCP Cloud Pub/Sub log endpoint
```

Delete a Pub/Sub logging object for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_google_pubsub_name'] = 'logging_google_pubsub_name_example'; // string | The name for the real-time logging configuration.

try {
    $result = $apiInstance->deleteLogGcpPubsub($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingPubsubApi->deleteLogGcpPubsub: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_google_pubsub_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogGcpPubsub()`

```php
getLogGcpPubsub($options): \Fastly\Model\LoggingGooglePubsubResponse // Get a GCP Cloud Pub/Sub log endpoint
```

Get the details for a Pub/Sub logging object for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_google_pubsub_name'] = 'logging_google_pubsub_name_example'; // string | The name for the real-time logging configuration.

try {
    $result = $apiInstance->getLogGcpPubsub($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingPubsubApi->getLogGcpPubsub: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_google_pubsub_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\LoggingGooglePubsubResponse**](../Model/LoggingGooglePubsubResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLogGcpPubsub()`

```php
listLogGcpPubsub($options): \Fastly\Model\LoggingGooglePubsubResponse[] // List GCP Cloud Pub/Sub log endpoints
```

List all of the Pub/Sub logging objects for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

try {
    $result = $apiInstance->listLogGcpPubsub($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingPubsubApi->listLogGcpPubsub: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\LoggingGooglePubsubResponse[]**](../Model/LoggingGooglePubsubResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateLogGcpPubsub()`

```php
updateLogGcpPubsub($options): \Fastly\Model\LoggingGooglePubsubResponse // Update a GCP Cloud Pub/Sub log endpoint
```

Update a Pub/Sub logging object for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_google_pubsub_name'] = 'logging_google_pubsub_name_example'; // string | The name for the real-time logging configuration.
$options['name'] = 'name_example'; // string | The name for the real-time logging configuration.
$options['placement'] = 'placement_example'; // string | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
$options['response_condition'] = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$options['format'] = '%h %l %u %t \"%r\" %&gt;s %b'; // string | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/).
$options['log_processing_region'] = 'none'; // string | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global.
$options['format_version'] = self::FORMAT_VERSION_v2; // int | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
$options['user'] = 'user_example'; // string | Your Google Cloud Platform service account email address. The `client_email` field in your service account authentication JSON. Not required if `account_name` is specified.
$options['secret_key'] = 'secret_key_example'; // string | Your Google Cloud Platform account secret key. The `private_key` field in your service account authentication JSON. Not required if `account_name` is specified.
$options['account_name'] = 'account_name_example'; // string | The name of the Google Cloud Platform service account associated with the target log collection service. Not required if `user` and `secret_key` are provided.
$options['topic'] = 'topic_example'; // string | The Google Cloud Pub/Sub topic to which logs will be published. Required.
$options['project_id'] = 'project_id_example'; // string | Your Google Cloud Platform project ID. Required

try {
    $result = $apiInstance->updateLogGcpPubsub($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingPubsubApi->updateLogGcpPubsub: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_google_pubsub_name** | **string** | The name for the real-time logging configuration. |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional] [one of: 'none', 'null']
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). | [optional] [defaults to '%h %l %u %t "%r" %&gt;s %b']
**log_processing_region** | **string** | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global. | [optional] [one of: 'none', 'eu', 'us'] [defaults to 'none']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**user** | **string** | Your Google Cloud Platform service account email address. The `client_email` field in your service account authentication JSON. Not required if `account_name` is specified. | [optional]
**secret_key** | **string** | Your Google Cloud Platform account secret key. The `private_key` field in your service account authentication JSON. Not required if `account_name` is specified. | [optional]
**account_name** | **string** | The name of the Google Cloud Platform service account associated with the target log collection service. Not required if `user` and `secret_key` are provided. | [optional]
**topic** | **string** | The Google Cloud Pub/Sub topic to which logs will be published. Required. | [optional]
**project_id** | **string** | Your Google Cloud Platform project ID. Required | [optional]

### Return type

[**\Fastly\Model\LoggingGooglePubsubResponse**](../Model/LoggingGooglePubsubResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
