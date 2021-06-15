# OpenAPI\Client\LoggingPubsubApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLogGcpPubsub()**](LoggingPubsubApi.md#createLogGcpPubsub) | **POST** /service/{service_id}/version/{version_id}/logging/pubsub | Create a GCP Cloud Pub/Sub log endpoint
[**deleteLogGcpPubsub()**](LoggingPubsubApi.md#deleteLogGcpPubsub) | **DELETE** /service/{service_id}/version/{version_id}/logging/pubsub/{logging_google_pubsub_name} | Delete a GCP Cloud Pub/Sub log endpoint
[**getLogGcpPubsub()**](LoggingPubsubApi.md#getLogGcpPubsub) | **GET** /service/{service_id}/version/{version_id}/logging/pubsub/{logging_google_pubsub_name} | Get a GCP Cloud Pub/Sub log endpoint
[**listLogGcpPubsub()**](LoggingPubsubApi.md#listLogGcpPubsub) | **GET** /service/{service_id}/version/{version_id}/logging/pubsub | List GCP Cloud Pub/Sub log endpoints
[**updateLogGcpPubsub()**](LoggingPubsubApi.md#updateLogGcpPubsub) | **PUT** /service/{service_id}/version/{version_id}/logging/pubsub/{logging_google_pubsub_name} | Update a GCP Cloud Pub/Sub log endpoint


## `createLogGcpPubsub()`

```php
createLogGcpPubsub($service_id, $version_id, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $user, $secret_key, $topic, $project_id): \OpenAPI\Client\Model\ModelLoggingGooglePubsub
```

Create a GCP Cloud Pub/Sub log endpoint

Create a Pub/Sub logging object for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingPubsubApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$created_at = 'created_at_example'; // string | Date and time in ISO 8601 format.
$deleted_at = 'deleted_at_example'; // string | Date and time in ISO 8601 format.
$updated_at = 'updated_at_example'; // string | Date and time in ISO 8601 format.
$service_id2 = 'service_id_example'; // string | Alphanumeric string identifying the service.
$version = 56; // int | Integer identifying a service version.
$name = 'name_example'; // string | The name for the real-time logging configuration.
$placement = new \OpenAPI\Client\Model\LoggingPlacement(); // \OpenAPI\Client\Model\LoggingPlacement
$format_version = new \OpenAPI\Client\Model\LoggingFormatVersion(); // \OpenAPI\Client\Model\LoggingFormatVersion
$response_condition = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$format = '%h %l %u %t \"%r\" %&gt;s %b'; // string | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats).
$user = 'user_example'; // string | Your Google Cloud Platform service account email address. The `client_email` field in your service account authentication JSON. Required.
$secret_key = 'secret_key_example'; // string | Your Google Cloud Platform account secret key. The `private_key` field in your service account authentication JSON. Required.
$topic = 'topic_example'; // string | The Google Cloud Pub/Sub topic to which logs will be published. Required.
$project_id = 'project_id_example'; // string | Your Google Cloud Platform project ID. Required

try {
    $result = $apiInstance->createLogGcpPubsub($service_id, $version_id, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $user, $secret_key, $topic, $project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingPubsubApi->createLogGcpPubsub: ', $e->getMessage(), PHP_EOL;
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
 **name** | **string**| The name for the real-time logging configuration. | [optional]
 **placement** | [**\OpenAPI\Client\Model\LoggingPlacement**](../Model/LoggingPlacement.md)|  | [optional]
 **format_version** | [**\OpenAPI\Client\Model\LoggingFormatVersion**](../Model/LoggingFormatVersion.md)|  | [optional]
 **response_condition** | **string**| The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
 **format** | **string**| A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [default to &#39;%h %l %u %t &quot;%r&quot; %&amp;gt;s %b&#39;]
 **user** | **string**| Your Google Cloud Platform service account email address. The &#x60;client_email&#x60; field in your service account authentication JSON. Required. | [optional]
 **secret_key** | **string**| Your Google Cloud Platform account secret key. The &#x60;private_key&#x60; field in your service account authentication JSON. Required. | [optional]
 **topic** | **string**| The Google Cloud Pub/Sub topic to which logs will be published. Required. | [optional]
 **project_id** | **string**| Your Google Cloud Platform project ID. Required | [optional]

### Return type

[**\OpenAPI\Client\Model\ModelLoggingGooglePubsub**](../Model/ModelLoggingGooglePubsub.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLogGcpPubsub()`

```php
deleteLogGcpPubsub($service_id, $version_id, $logging_google_pubsub_name): object
```

Delete a GCP Cloud Pub/Sub log endpoint

Delete a Pub/Sub logging object for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingPubsubApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$logging_google_pubsub_name = 'logging_google_pubsub_name_example'; // string

try {
    $result = $apiInstance->deleteLogGcpPubsub($service_id, $version_id, $logging_google_pubsub_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingPubsubApi->deleteLogGcpPubsub: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **logging_google_pubsub_name** | **string**|  |

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

## `getLogGcpPubsub()`

```php
getLogGcpPubsub($service_id, $version_id, $logging_google_pubsub_name): \OpenAPI\Client\Model\ModelLoggingGooglePubsub
```

Get a GCP Cloud Pub/Sub log endpoint

Get the details for a Pub/Sub logging object for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingPubsubApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$logging_google_pubsub_name = 'logging_google_pubsub_name_example'; // string

try {
    $result = $apiInstance->getLogGcpPubsub($service_id, $version_id, $logging_google_pubsub_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingPubsubApi->getLogGcpPubsub: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **logging_google_pubsub_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelLoggingGooglePubsub**](../Model/ModelLoggingGooglePubsub.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLogGcpPubsub()`

```php
listLogGcpPubsub($service_id, $version_id): \OpenAPI\Client\Model\ModelLoggingGooglePubsub[]
```

List GCP Cloud Pub/Sub log endpoints

List all of the Pub/Sub logging objects for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingPubsubApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int

try {
    $result = $apiInstance->listLogGcpPubsub($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingPubsubApi->listLogGcpPubsub: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ModelLoggingGooglePubsub[]**](../Model/ModelLoggingGooglePubsub.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLogGcpPubsub()`

```php
updateLogGcpPubsub($service_id, $version_id, $logging_google_pubsub_name, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $user, $secret_key, $topic, $project_id): \OpenAPI\Client\Model\ModelLoggingGooglePubsub
```

Update a GCP Cloud Pub/Sub log endpoint

Update a Pub/Sub logging object for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingPubsubApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$logging_google_pubsub_name = 'logging_google_pubsub_name_example'; // string
$created_at = 'created_at_example'; // string | Date and time in ISO 8601 format.
$deleted_at = 'deleted_at_example'; // string | Date and time in ISO 8601 format.
$updated_at = 'updated_at_example'; // string | Date and time in ISO 8601 format.
$service_id2 = 'service_id_example'; // string | Alphanumeric string identifying the service.
$version = 56; // int | Integer identifying a service version.
$name = 'name_example'; // string | The name for the real-time logging configuration.
$placement = new \OpenAPI\Client\Model\LoggingPlacement(); // \OpenAPI\Client\Model\LoggingPlacement
$format_version = new \OpenAPI\Client\Model\LoggingFormatVersion(); // \OpenAPI\Client\Model\LoggingFormatVersion
$response_condition = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$format = '%h %l %u %t \"%r\" %&gt;s %b'; // string | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats).
$user = 'user_example'; // string | Your Google Cloud Platform service account email address. The `client_email` field in your service account authentication JSON. Required.
$secret_key = 'secret_key_example'; // string | Your Google Cloud Platform account secret key. The `private_key` field in your service account authentication JSON. Required.
$topic = 'topic_example'; // string | The Google Cloud Pub/Sub topic to which logs will be published. Required.
$project_id = 'project_id_example'; // string | Your Google Cloud Platform project ID. Required

try {
    $result = $apiInstance->updateLogGcpPubsub($service_id, $version_id, $logging_google_pubsub_name, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $user, $secret_key, $topic, $project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingPubsubApi->updateLogGcpPubsub: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **logging_google_pubsub_name** | **string**|  |
 **created_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **deleted_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **updated_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **service_id2** | **string**| Alphanumeric string identifying the service. | [optional]
 **version** | **int**| Integer identifying a service version. | [optional]
 **name** | **string**| The name for the real-time logging configuration. | [optional]
 **placement** | [**\OpenAPI\Client\Model\LoggingPlacement**](../Model/LoggingPlacement.md)|  | [optional]
 **format_version** | [**\OpenAPI\Client\Model\LoggingFormatVersion**](../Model/LoggingFormatVersion.md)|  | [optional]
 **response_condition** | **string**| The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
 **format** | **string**| A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [default to &#39;%h %l %u %t &quot;%r&quot; %&amp;gt;s %b&#39;]
 **user** | **string**| Your Google Cloud Platform service account email address. The &#x60;client_email&#x60; field in your service account authentication JSON. Required. | [optional]
 **secret_key** | **string**| Your Google Cloud Platform account secret key. The &#x60;private_key&#x60; field in your service account authentication JSON. Required. | [optional]
 **topic** | **string**| The Google Cloud Pub/Sub topic to which logs will be published. Required. | [optional]
 **project_id** | **string**| Your Google Cloud Platform project ID. Required | [optional]

### Return type

[**\OpenAPI\Client\Model\ModelLoggingGooglePubsub**](../Model/ModelLoggingGooglePubsub.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
