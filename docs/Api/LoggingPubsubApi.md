# Fastly\Api\LoggingPubsubApi


```php
$apiInstance = new Fastly\Api\LoggingPubsubApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | HTTP request | Description
------------- | ------------- | -------------
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
**service_id** | **string** |  |
**version_id** | **int** |  |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | [**\Fastly\Model\LoggingPlacement**](../Model/LoggingPlacement.md) |  | [optional]
**format_version** | [**\Fastly\Model\LoggingFormatVersion**](../Model/LoggingFormatVersion.md) |  | [optional]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [default to &#39;%h %l %u %t &quot;%r&quot; %&amp;gt;s %b&#39;]
**user** | **string** | Your Google Cloud Platform service account email address. The &#x60;client_email&#x60; field in your service account authentication JSON. Required. | [optional]
**secret_key** | **string** | Your Google Cloud Platform account secret key. The &#x60;private_key&#x60; field in your service account authentication JSON. Required. | [optional]
**topic** | **string** | The Google Cloud Pub/Sub topic to which logs will be published. Required. | [optional]
**project_id** | **string** | Your Google Cloud Platform project ID. Required | [optional]

### Return type

[**\Fastly\Model\LoggingGooglePubsubResponse**](../Model/LoggingGooglePubsubResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogGcpPubsub()`

```php
deleteLogGcpPubsub($options): object // Delete a GCP Cloud Pub/Sub log endpoint
```

Delete a Pub/Sub logging object for a particular service and version.

### Example
```php
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
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_google_pubsub_name** | **string** |  |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogGcpPubsub()`

```php
getLogGcpPubsub($options): \Fastly\Model\LoggingGooglePubsubResponse // Get a GCP Cloud Pub/Sub log endpoint
```

Get the details for a Pub/Sub logging object for a particular service and version.

### Example
```php
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
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_google_pubsub_name** | **string** |  |

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
**service_id** | **string** |  |
**version_id** | **int** |  |

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
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_google_pubsub_name** | **string** |  |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | [**\Fastly\Model\LoggingPlacement**](../Model/LoggingPlacement.md) |  | [optional]
**format_version** | [**\Fastly\Model\LoggingFormatVersion**](../Model/LoggingFormatVersion.md) |  | [optional]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [default to &#39;%h %l %u %t &quot;%r&quot; %&amp;gt;s %b&#39;]
**user** | **string** | Your Google Cloud Platform service account email address. The &#x60;client_email&#x60; field in your service account authentication JSON. Required. | [optional]
**secret_key** | **string** | Your Google Cloud Platform account secret key. The &#x60;private_key&#x60; field in your service account authentication JSON. Required. | [optional]
**topic** | **string** | The Google Cloud Pub/Sub topic to which logs will be published. Required. | [optional]
**project_id** | **string** | Your Google Cloud Platform project ID. Required | [optional]

### Return type

[**\Fastly\Model\LoggingGooglePubsubResponse**](../Model/LoggingGooglePubsubResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
