# OpenAPI\Client\LoggingKinesisApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLogKinesis()**](LoggingKinesisApi.md#createLogKinesis) | **POST** /service/{service_id}/version/{version_id}/logging/kinesis | Create  an Amazon Kinesis log endpoint
[**deleteLogKinesis()**](LoggingKinesisApi.md#deleteLogKinesis) | **DELETE** /service/{service_id}/version/{version_id}/logging/kinesis/{logging_kinesis_name} | Delete the Amazon Kinesis log endpoint
[**getLogKinesis()**](LoggingKinesisApi.md#getLogKinesis) | **GET** /service/{service_id}/version/{version_id}/logging/kinesis/{logging_kinesis_name} | Get an Amazon Kinesis log endpoint
[**listLogKinesis()**](LoggingKinesisApi.md#listLogKinesis) | **GET** /service/{service_id}/version/{version_id}/logging/kinesis | List Amazon Kinesis log endpoints
[**updateLogKinesis()**](LoggingKinesisApi.md#updateLogKinesis) | **PUT** /service/{service_id}/version/{version_id}/logging/kinesis/{logging_kinesis_name} | Update the Amazon Kinesis log endpoint


## `createLogKinesis()`

```php
createLogKinesis($service_id, $version_id, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $format, $topic, $region, $secret_key, $access_key, $iam_role): \OpenAPI\Client\Model\ModelLoggingKinesis
```

Create  an Amazon Kinesis log endpoint

Create an Amazon Kinesis Data Streams logging object for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingKinesisApi(
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
$format = 'format_example'; // string
$topic = 'topic_example'; // string | The Amazon Kinesis stream to send logs to. Required.
$region = 'region_example'; // string | The [AWS region](https://docs.aws.amazon.com/general/latest/gr/rande.html#regional-endpoints) to stream logs to.
$secret_key = 'secret_key_example'; // string | The secret key associated with the target Amazon Kinesis stream. Not required if `iam_role` is specified.
$access_key = 'access_key_example'; // string | The access key associated with the target Amazon Kinesis stream. Not required if `iam_role` is specified.
$iam_role = 'iam_role_example'; // string | The ARN for an IAM role granting Fastly access to the target Amazon Kinesis stream. Not required if `access_key` and `secret_key` are provided.

try {
    $result = $apiInstance->createLogKinesis($service_id, $version_id, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $format, $topic, $region, $secret_key, $access_key, $iam_role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingKinesisApi->createLogKinesis: ', $e->getMessage(), PHP_EOL;
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
 **format** | [**string**](../Model/string.md)|  | [optional]
 **topic** | **string**| The Amazon Kinesis stream to send logs to. Required. | [optional]
 **region** | **string**| The [AWS region](https://docs.aws.amazon.com/general/latest/gr/rande.html#regional-endpoints) to stream logs to. | [optional]
 **secret_key** | **string**| The secret key associated with the target Amazon Kinesis stream. Not required if &#x60;iam_role&#x60; is specified. | [optional]
 **access_key** | **string**| The access key associated with the target Amazon Kinesis stream. Not required if &#x60;iam_role&#x60; is specified. | [optional]
 **iam_role** | **string**| The ARN for an IAM role granting Fastly access to the target Amazon Kinesis stream. Not required if &#x60;access_key&#x60; and &#x60;secret_key&#x60; are provided. | [optional]

### Return type

[**\OpenAPI\Client\Model\ModelLoggingKinesis**](../Model/ModelLoggingKinesis.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLogKinesis()`

```php
deleteLogKinesis($service_id, $version_id, $logging_kinesis_name): object
```

Delete the Amazon Kinesis log endpoint

Delete an Amazon Kinesis Data Streams logging object for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingKinesisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$logging_kinesis_name = 'logging_kinesis_name_example'; // string

try {
    $result = $apiInstance->deleteLogKinesis($service_id, $version_id, $logging_kinesis_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingKinesisApi->deleteLogKinesis: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **logging_kinesis_name** | **string**|  |

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

## `getLogKinesis()`

```php
getLogKinesis($service_id, $version_id, $logging_kinesis_name): \OpenAPI\Client\Model\ModelLoggingKinesis
```

Get an Amazon Kinesis log endpoint

Get the details for an Amazon Kinesis Data Streams logging object for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingKinesisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$logging_kinesis_name = 'logging_kinesis_name_example'; // string

try {
    $result = $apiInstance->getLogKinesis($service_id, $version_id, $logging_kinesis_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingKinesisApi->getLogKinesis: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **logging_kinesis_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelLoggingKinesis**](../Model/ModelLoggingKinesis.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLogKinesis()`

```php
listLogKinesis($service_id, $version_id): \OpenAPI\Client\Model\ModelLoggingKinesis[]
```

List Amazon Kinesis log endpoints

List all of the Amazon Kinesis Data Streams logging objects for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingKinesisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int

try {
    $result = $apiInstance->listLogKinesis($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingKinesisApi->listLogKinesis: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ModelLoggingKinesis[]**](../Model/ModelLoggingKinesis.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLogKinesis()`

```php
updateLogKinesis($service_id, $version_id, $logging_kinesis_name): \OpenAPI\Client\Model\ModelLoggingKinesis
```

Update the Amazon Kinesis log endpoint

Update an Amazon Kinesis Data Streams logging object for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingKinesisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$logging_kinesis_name = 'logging_kinesis_name_example'; // string

try {
    $result = $apiInstance->updateLogKinesis($service_id, $version_id, $logging_kinesis_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingKinesisApi->updateLogKinesis: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **logging_kinesis_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelLoggingKinesis**](../Model/ModelLoggingKinesis.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
