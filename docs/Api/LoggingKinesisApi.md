# Fastly\Api\LoggingKinesisApi


```php
$apiInstance = new Fastly\Api\LoggingKinesisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
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
**format_version** | [**\Fastly\Model\LoggingFormatVersion**](../Model/LoggingFormatVersion.md) |  | [optional]
**format** | [**string**](../Model/string.md) |  | [optional]
**topic** | **string** | The Amazon Kinesis stream to send logs to. Required. | [optional]
**region** | **string** | The [AWS region](https://docs.aws.amazon.com/general/latest/gr/rande.html#regional-endpoints) to stream logs to. | [optional] [one of: 'us-east-1', 'us-east-2', 'us-west-1', 'us-west-2', 'af-south-1', 'ap-east-1', 'ap-south-1', 'ap-northeast-3', 'ap-northeast-2', 'ap-southeast-1', 'ap-southeast-2', 'ap-northeast-1', 'ca-central-1', 'cn-north-1', 'cn-northwest-1', 'eu-central-1', 'eu-west-1', 'eu-west-2', 'eu-south-1', 'eu-west-3', 'eu-north-1', 'me-south-1', 'sa-east-1']
**secret_key** | **string** | The secret key associated with the target Amazon Kinesis stream. Not required if `iam_role` is specified. | [optional]
**access_key** | **string** | The access key associated with the target Amazon Kinesis stream. Not required if `iam_role` is specified. | [optional]
**iam_role** | **string** | The ARN for an IAM role granting Fastly access to the target Amazon Kinesis stream. Not required if `access_key` and `secret_key` are provided. | [optional]

### Return type

[**\Fastly\Model\LoggingKinesisResponse**](../Model/LoggingKinesisResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogKinesis()`

```php
deleteLogKinesis($options): object // Delete the Amazon Kinesis log endpoint
```

Delete an Amazon Kinesis Data Streams logging object for a particular service and version.

### Example
```php
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

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogKinesis()`

```php
getLogKinesis($options): \Fastly\Model\LoggingKinesisResponse // Get an Amazon Kinesis log endpoint
```

Get the details for an Amazon Kinesis Data Streams logging object for a particular service and version.

### Example
```php
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
