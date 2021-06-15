# Fastly\Api\LoggingS3Api


```php
$apiInstance = new Fastly\Api\LoggingS3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLogAwsS3()**](LoggingS3Api.md#createLogAwsS3) | **POST** /service/{service_id}/version/{version_id}/logging/s3 | Create an AWS S3 log endpoint
[**deleteLogAwsS3()**](LoggingS3Api.md#deleteLogAwsS3) | **DELETE** /service/{service_id}/version/{version_id}/logging/s3/{logging_s3_name} | Delete an AWS S3 log endpoint
[**getLogAwsS3()**](LoggingS3Api.md#getLogAwsS3) | **GET** /service/{service_id}/version/{version_id}/logging/s3/{logging_s3_name} | Get an AWS S3 log endpoint
[**listLogAwsS3()**](LoggingS3Api.md#listLogAwsS3) | **GET** /service/{service_id}/version/{version_id}/logging/s3 | List AWS S3 log endpoints
[**updateLogAwsS3()**](LoggingS3Api.md#updateLogAwsS3) | **PUT** /service/{service_id}/version/{version_id}/logging/s3/{logging_s3_name} | Update an AWS S3 log endpoint


## `createLogAwsS3()`

```php
createLogAwsS3($options): \Fastly\Model\LoggingS3Response // Create an AWS S3 log endpoint
```

Create a S3 for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->createLogAwsS3($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingS3Api->createLogAwsS3: ', $e->getMessage(), PHP_EOL;
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
**message_type** | [**\Fastly\Model\LoggingMessageType**](../Model/LoggingMessageType.md) |  | [optional]
**timestamp_format** | **string** | Date and time in ISO 8601 format. | [optional]
**period** | **int** | How frequently log files are finalized so they can be available for reading (in seconds). | [optional] [default to 3600]
**gzip_level** | **int** | What level of gzip encoding to have when sending logs (default &#x60;0&#x60;, no compression). If an explicit non-zero value is set, then &#x60;compression_codec&#x60; will default to \\\&quot;gzip.\\\&quot; Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. | [optional] [default to 0]
**compression_codec** | [**\Fastly\Model\LoggingCompressionCodec**](../Model/LoggingCompressionCodec.md) |  | [optional]
**access_key** | **string** | The access key for your S3 account. Not required if &#x60;iam_role&#x60; is provided. | [optional]
**acl** | **string** | The access control list (ACL) specific request header. See the AWS documentation for [Access Control List (ACL) Specific Request Headers](https://docs.aws.amazon.com/AmazonS3/latest/API/mpUploadInitiate.html#initiate-mpu-acl-specific-request-headers) for more information. | [optional]
**bucket_name** | **string** | The bucket name for S3 account. | [optional]
**domain** | **string** | The domain of the Amazon S3 endpoint. | [optional]
**iam_role** | **string** | The Amazon Resource Name (ARN) for the IAM role granting Fastly access to S3. Not required if &#x60;access_key&#x60; and &#x60;secret_key&#x60; are provided. | [optional]
**path** | **string** | The path to upload logs to. | [optional] [default to &#39;null&#39;]
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [default to &#39;null&#39;]
**redundancy** | **string** | The S3 redundancy level. | [optional] [default to &#39;null&#39;]
**secret_key** | **string** | The secret key for your S3 account. Not required if &#x60;iam_role&#x60; is provided. | [optional]
**server_side_encryption_kms_key_id** | **string** | Optional server-side KMS Key Id. Must be set if &#x60;server_side_encryption&#x60; is set to &#x60;aws:kms&#x60; or &#x60;AES256&#x60;. | [optional] [default to &#39;null&#39;]
**server_side_encryption** | **string** | Set this to &#x60;AES256&#x60; or &#x60;aws:kms&#x60; to enable S3 Server Side Encryption. | [optional] [default to &#39;null&#39;]

### Return type

[**\Fastly\Model\LoggingS3Response**](../Model/LoggingS3Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogAwsS3()`

```php
deleteLogAwsS3($options): object // Delete an AWS S3 log endpoint
```

Delete the S3 for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->deleteLogAwsS3($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingS3Api->deleteLogAwsS3: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_s3_name** | **string** |  |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogAwsS3()`

```php
getLogAwsS3($options): \Fastly\Model\LoggingS3Response // Get an AWS S3 log endpoint
```

Get the S3 for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->getLogAwsS3($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingS3Api->getLogAwsS3: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_s3_name** | **string** |  |

### Return type

[**\Fastly\Model\LoggingS3Response**](../Model/LoggingS3Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLogAwsS3()`

```php
listLogAwsS3($options): \Fastly\Model\LoggingS3Response[] // List AWS S3 log endpoints
```

List all of the S3s for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->listLogAwsS3($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingS3Api->listLogAwsS3: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |

### Return type

[**\Fastly\Model\LoggingS3Response[]**](../Model/LoggingS3Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateLogAwsS3()`

```php
updateLogAwsS3($options): \Fastly\Model\LoggingS3Response // Update an AWS S3 log endpoint
```

Update the S3 for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->updateLogAwsS3($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingS3Api->updateLogAwsS3: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_s3_name** | **string** |  |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | [**\Fastly\Model\LoggingPlacement**](../Model/LoggingPlacement.md) |  | [optional]
**format_version** | [**\Fastly\Model\LoggingFormatVersion**](../Model/LoggingFormatVersion.md) |  | [optional]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [default to &#39;%h %l %u %t &quot;%r&quot; %&amp;gt;s %b&#39;]
**message_type** | [**\Fastly\Model\LoggingMessageType**](../Model/LoggingMessageType.md) |  | [optional]
**timestamp_format** | **string** | Date and time in ISO 8601 format. | [optional]
**period** | **int** | How frequently log files are finalized so they can be available for reading (in seconds). | [optional] [default to 3600]
**gzip_level** | **int** | What level of gzip encoding to have when sending logs (default &#x60;0&#x60;, no compression). If an explicit non-zero value is set, then &#x60;compression_codec&#x60; will default to \\\&quot;gzip.\\\&quot; Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. | [optional] [default to 0]
**compression_codec** | [**\Fastly\Model\LoggingCompressionCodec**](../Model/LoggingCompressionCodec.md) |  | [optional]
**access_key** | **string** | The access key for your S3 account. Not required if &#x60;iam_role&#x60; is provided. | [optional]
**acl** | **string** | The access control list (ACL) specific request header. See the AWS documentation for [Access Control List (ACL) Specific Request Headers](https://docs.aws.amazon.com/AmazonS3/latest/API/mpUploadInitiate.html#initiate-mpu-acl-specific-request-headers) for more information. | [optional]
**bucket_name** | **string** | The bucket name for S3 account. | [optional]
**domain** | **string** | The domain of the Amazon S3 endpoint. | [optional]
**iam_role** | **string** | The Amazon Resource Name (ARN) for the IAM role granting Fastly access to S3. Not required if &#x60;access_key&#x60; and &#x60;secret_key&#x60; are provided. | [optional]
**path** | **string** | The path to upload logs to. | [optional] [default to &#39;null&#39;]
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [default to &#39;null&#39;]
**redundancy** | **string** | The S3 redundancy level. | [optional] [default to &#39;null&#39;]
**secret_key** | **string** | The secret key for your S3 account. Not required if &#x60;iam_role&#x60; is provided. | [optional]
**server_side_encryption_kms_key_id** | **string** | Optional server-side KMS Key Id. Must be set if &#x60;server_side_encryption&#x60; is set to &#x60;aws:kms&#x60; or &#x60;AES256&#x60;. | [optional] [default to &#39;null&#39;]
**server_side_encryption** | **string** | Set this to &#x60;AES256&#x60; or &#x60;aws:kms&#x60; to enable S3 Server Side Encryption. | [optional] [default to &#39;null&#39;]

### Return type

[**\Fastly\Model\LoggingS3Response**](../Model/LoggingS3Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
