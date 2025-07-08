# Fastly\Api\LoggingS3Api


```php
$apiInstance = new Fastly\Api\LoggingS3Api(
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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['name'] = 'name_example'; // string | The name for the real-time logging configuration.
$options['placement'] = 'placement_example'; // string | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
$options['response_condition'] = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$options['format'] = '%h %l %u %t \"%r\" %&gt;s %b'; // string | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/).
$options['log_processing_region'] = 'none'; // string | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global.
$options['format_version'] = self::FORMAT_VERSION_v2; // int | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
$options['message_type'] = 'classic'; // string | How the message should be formatted.
$options['timestamp_format'] = 'timestamp_format_example'; // string | A timestamp format
$options['compression_codec'] = 'compression_codec_example'; // string | The codec used for compressing your logs. Valid values are `zstd`, `snappy`, and `gzip`. Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error.
$options['period'] = 3600; // int | How frequently log files are finalized so they can be available for reading (in seconds).
$options['gzip_level'] = 0; // int | The level of gzip encoding when sending logs (default `0`, no compression). Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error.
$options['access_key'] = 'access_key_example'; // string | The access key for your S3 account. Not required if `iam_role` is provided.
$options['acl'] = 'acl_example'; // string | The access control list (ACL) specific request header. See the AWS documentation for [Access Control List (ACL) Specific Request Headers](https://docs.aws.amazon.com/AmazonS3/latest/API/mpUploadInitiate.html#initiate-mpu-acl-specific-request-headers) for more information.
$options['bucket_name'] = 'bucket_name_example'; // string | The bucket name for S3 account.
$options['domain'] = 'domain_example'; // string | The domain of the Amazon S3 endpoint.
$options['iam_role'] = 'iam_role_example'; // string | The Amazon Resource Name (ARN) for the IAM role granting Fastly access to S3. Not required if `access_key` and `secret_key` are provided.
$options['path'] = 'null'; // string | The path to upload logs to.
$options['public_key'] = 'null'; // string | A PGP public key that Fastly will use to encrypt your log files before writing them to disk.
$options['redundancy'] = 'null'; // string | The S3 redundancy level.
$options['secret_key'] = 'secret_key_example'; // string | The secret key for your S3 account. Not required if `iam_role` is provided.
$options['server_side_encryption_kms_key_id'] = 'null'; // string | Optional server-side KMS Key Id. Must be set if `server_side_encryption` is set to `aws:kms` or `AES256`.
$options['server_side_encryption'] = 'null'; // string | Set this to `AES256` or `aws:kms` to enable S3 Server Side Encryption.
$options['file_max_bytes'] = 56; // int | The maximum number of bytes for each uploaded file. A value of 0 can be used to indicate there is no limit on the size of uploaded files, otherwise the minimum value is 1048576 bytes (1 MiB.)

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional] [one of: 'none', 'null']
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). | [optional] [defaults to '%h %l %u %t "%r" %&gt;s %b']
**log_processing_region** | **string** | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global. | [optional] [one of: 'none', 'eu', 'us'] [defaults to 'none']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**message_type** | **string** | How the message should be formatted. | [optional] [one of: 'classic', 'loggly', 'logplex', 'blank'] [defaults to 'classic']
**timestamp_format** | **string** | A timestamp format | [optional]
**compression_codec** | **string** | The codec used for compressing your logs. Valid values are `zstd`, `snappy`, and `gzip`. Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error. | [optional] [one of: 'zstd', 'snappy', 'gzip']
**period** | **int** | How frequently log files are finalized so they can be available for reading (in seconds). | [optional] [defaults to 3600]
**gzip_level** | **int** | The level of gzip encoding when sending logs (default `0`, no compression). Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error. | [optional] [defaults to 0]
**access_key** | **string** | The access key for your S3 account. Not required if `iam_role` is provided. | [optional]
**acl** | **string** | The access control list (ACL) specific request header. See the AWS documentation for [Access Control List (ACL) Specific Request Headers](https://docs.aws.amazon.com/AmazonS3/latest/API/mpUploadInitiate.html#initiate-mpu-acl-specific-request-headers) for more information. | [optional]
**bucket_name** | **string** | The bucket name for S3 account. | [optional]
**domain** | **string** | The domain of the Amazon S3 endpoint. | [optional]
**iam_role** | **string** | The Amazon Resource Name (ARN) for the IAM role granting Fastly access to S3. Not required if `access_key` and `secret_key` are provided. | [optional]
**path** | **string** | The path to upload logs to. | [optional] [defaults to 'null']
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [defaults to 'null']
**redundancy** | **string** | The S3 redundancy level. | [optional] [defaults to 'null']
**secret_key** | **string** | The secret key for your S3 account. Not required if `iam_role` is provided. | [optional]
**server_side_encryption_kms_key_id** | **string** | Optional server-side KMS Key Id. Must be set if `server_side_encryption` is set to `aws:kms` or `AES256`. | [optional] [defaults to 'null']
**server_side_encryption** | **string** | Set this to `AES256` or `aws:kms` to enable S3 Server Side Encryption. | [optional] [defaults to 'null']
**file_max_bytes** | **int** | The maximum number of bytes for each uploaded file. A value of 0 can be used to indicate there is no limit on the size of uploaded files, otherwise the minimum value is 1048576 bytes (1 MiB.) | [optional]

### Return type

[**\Fastly\Model\LoggingS3Response**](../Model/LoggingS3Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogAwsS3()`

```php
deleteLogAwsS3($options): \Fastly\Model\InlineResponse200 // Delete an AWS S3 log endpoint
```

Delete the S3 for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_s3_name'] = 'logging_s3_name_example'; // string | The name for the real-time logging configuration.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_s3_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogAwsS3()`

```php
getLogAwsS3($options): \Fastly\Model\LoggingS3Response // Get an AWS S3 log endpoint
```

Get the S3 for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_s3_name'] = 'logging_s3_name_example'; // string | The name for the real-time logging configuration.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_s3_name** | **string** | The name for the real-time logging configuration. |

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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_s3_name'] = 'logging_s3_name_example'; // string | The name for the real-time logging configuration.
$options['name'] = 'name_example'; // string | The name for the real-time logging configuration.
$options['placement'] = 'placement_example'; // string | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
$options['response_condition'] = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$options['format'] = '%h %l %u %t \"%r\" %&gt;s %b'; // string | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/).
$options['log_processing_region'] = 'none'; // string | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global.
$options['format_version'] = self::FORMAT_VERSION_v2; // int | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
$options['message_type'] = 'classic'; // string | How the message should be formatted.
$options['timestamp_format'] = 'timestamp_format_example'; // string | A timestamp format
$options['compression_codec'] = 'compression_codec_example'; // string | The codec used for compressing your logs. Valid values are `zstd`, `snappy`, and `gzip`. Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error.
$options['period'] = 3600; // int | How frequently log files are finalized so they can be available for reading (in seconds).
$options['gzip_level'] = 0; // int | The level of gzip encoding when sending logs (default `0`, no compression). Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error.
$options['access_key'] = 'access_key_example'; // string | The access key for your S3 account. Not required if `iam_role` is provided.
$options['acl'] = 'acl_example'; // string | The access control list (ACL) specific request header. See the AWS documentation for [Access Control List (ACL) Specific Request Headers](https://docs.aws.amazon.com/AmazonS3/latest/API/mpUploadInitiate.html#initiate-mpu-acl-specific-request-headers) for more information.
$options['bucket_name'] = 'bucket_name_example'; // string | The bucket name for S3 account.
$options['domain'] = 'domain_example'; // string | The domain of the Amazon S3 endpoint.
$options['iam_role'] = 'iam_role_example'; // string | The Amazon Resource Name (ARN) for the IAM role granting Fastly access to S3. Not required if `access_key` and `secret_key` are provided.
$options['path'] = 'null'; // string | The path to upload logs to.
$options['public_key'] = 'null'; // string | A PGP public key that Fastly will use to encrypt your log files before writing them to disk.
$options['redundancy'] = 'null'; // string | The S3 redundancy level.
$options['secret_key'] = 'secret_key_example'; // string | The secret key for your S3 account. Not required if `iam_role` is provided.
$options['server_side_encryption_kms_key_id'] = 'null'; // string | Optional server-side KMS Key Id. Must be set if `server_side_encryption` is set to `aws:kms` or `AES256`.
$options['server_side_encryption'] = 'null'; // string | Set this to `AES256` or `aws:kms` to enable S3 Server Side Encryption.
$options['file_max_bytes'] = 56; // int | The maximum number of bytes for each uploaded file. A value of 0 can be used to indicate there is no limit on the size of uploaded files, otherwise the minimum value is 1048576 bytes (1 MiB.)

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
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_s3_name** | **string** | The name for the real-time logging configuration. |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional] [one of: 'none', 'null']
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). | [optional] [defaults to '%h %l %u %t "%r" %&gt;s %b']
**log_processing_region** | **string** | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global. | [optional] [one of: 'none', 'eu', 'us'] [defaults to 'none']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**message_type** | **string** | How the message should be formatted. | [optional] [one of: 'classic', 'loggly', 'logplex', 'blank'] [defaults to 'classic']
**timestamp_format** | **string** | A timestamp format | [optional]
**compression_codec** | **string** | The codec used for compressing your logs. Valid values are `zstd`, `snappy`, and `gzip`. Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error. | [optional] [one of: 'zstd', 'snappy', 'gzip']
**period** | **int** | How frequently log files are finalized so they can be available for reading (in seconds). | [optional] [defaults to 3600]
**gzip_level** | **int** | The level of gzip encoding when sending logs (default `0`, no compression). Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error. | [optional] [defaults to 0]
**access_key** | **string** | The access key for your S3 account. Not required if `iam_role` is provided. | [optional]
**acl** | **string** | The access control list (ACL) specific request header. See the AWS documentation for [Access Control List (ACL) Specific Request Headers](https://docs.aws.amazon.com/AmazonS3/latest/API/mpUploadInitiate.html#initiate-mpu-acl-specific-request-headers) for more information. | [optional]
**bucket_name** | **string** | The bucket name for S3 account. | [optional]
**domain** | **string** | The domain of the Amazon S3 endpoint. | [optional]
**iam_role** | **string** | The Amazon Resource Name (ARN) for the IAM role granting Fastly access to S3. Not required if `access_key` and `secret_key` are provided. | [optional]
**path** | **string** | The path to upload logs to. | [optional] [defaults to 'null']
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [defaults to 'null']
**redundancy** | **string** | The S3 redundancy level. | [optional] [defaults to 'null']
**secret_key** | **string** | The secret key for your S3 account. Not required if `iam_role` is provided. | [optional]
**server_side_encryption_kms_key_id** | **string** | Optional server-side KMS Key Id. Must be set if `server_side_encryption` is set to `aws:kms` or `AES256`. | [optional] [defaults to 'null']
**server_side_encryption** | **string** | Set this to `AES256` or `aws:kms` to enable S3 Server Side Encryption. | [optional] [defaults to 'null']
**file_max_bytes** | **int** | The maximum number of bytes for each uploaded file. A value of 0 can be used to indicate there is no limit on the size of uploaded files, otherwise the minimum value is 1048576 bytes (1 MiB.) | [optional]

### Return type

[**\Fastly\Model\LoggingS3Response**](../Model/LoggingS3Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
