# OpenAPI\Client\LoggingS3Api

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLogAwsS3()**](LoggingS3Api.md#createLogAwsS3) | **POST** /service/{service_id}/version/{version_id}/logging/s3 | Create an AWS S3 log endpoint
[**deleteLogAwsS3()**](LoggingS3Api.md#deleteLogAwsS3) | **DELETE** /service/{service_id}/version/{version_id}/logging/s3/{logging_s3_name} | Delete an AWS S3 log endpoint
[**getLogAwsS3()**](LoggingS3Api.md#getLogAwsS3) | **GET** /service/{service_id}/version/{version_id}/logging/s3/{logging_s3_name} | Get an AWS S3 log endpoint
[**listLogAwsS3()**](LoggingS3Api.md#listLogAwsS3) | **GET** /service/{service_id}/version/{version_id}/logging/s3 | List AWS S3 log endpoints
[**updateLogAwsS3()**](LoggingS3Api.md#updateLogAwsS3) | **PUT** /service/{service_id}/version/{version_id}/logging/s3/{logging_s3_name} | Update an AWS S3 log endpoint


## `createLogAwsS3()`

```php
createLogAwsS3($service_id, $version_id, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $message_type, $timestamp_format, $period, $gzip_level, $compression_codec, $access_key, $acl, $bucket_name, $domain, $iam_role, $path, $public_key, $redundancy, $secret_key, $server_side_encryption_kms_key_id, $server_side_encryption): \OpenAPI\Client\Model\ModelLoggingS3
```

Create an AWS S3 log endpoint

Create a S3 for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingS3Api(
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
$message_type = new \OpenAPI\Client\Model\LoggingMessageType(); // \OpenAPI\Client\Model\LoggingMessageType
$timestamp_format = 'timestamp_format_example'; // string | Date and time in ISO 8601 format.
$period = 3600; // int | How frequently log files are finalized so they can be available for reading (in seconds).
$gzip_level = 0; // int | What level of gzip encoding to have when sending logs (default `0`, no compression). If an explicit non-zero value is set, then `compression_codec` will default to \\\"gzip.\\\" Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error.
$compression_codec = new \OpenAPI\Client\Model\LoggingCompressionCodec(); // \OpenAPI\Client\Model\LoggingCompressionCodec
$access_key = 'access_key_example'; // string | The access key for your S3 account. Not required if `iam_role` is provided.
$acl = 'acl_example'; // string | The access control list (ACL) specific request header. See the AWS documentation for [Access Control List (ACL) Specific Request Headers](https://docs.aws.amazon.com/AmazonS3/latest/API/mpUploadInitiate.html#initiate-mpu-acl-specific-request-headers) for more information.
$bucket_name = 'bucket_name_example'; // string | The bucket name for S3 account.
$domain = 'domain_example'; // string | The domain of the Amazon S3 endpoint.
$iam_role = 'iam_role_example'; // string | The Amazon Resource Name (ARN) for the IAM role granting Fastly access to S3. Not required if `access_key` and `secret_key` are provided.
$path = 'null'; // string | The path to upload logs to.
$public_key = 'null'; // string | A PGP public key that Fastly will use to encrypt your log files before writing them to disk.
$redundancy = 'null'; // string | The S3 redundancy level.
$secret_key = 'secret_key_example'; // string | The secret key for your S3 account. Not required if `iam_role` is provided.
$server_side_encryption_kms_key_id = 'null'; // string | Optional server-side KMS Key Id. Must be set if `server_side_encryption` is set to `aws:kms` or `AES256`.
$server_side_encryption = 'null'; // string | Set this to `AES256` or `aws:kms` to enable S3 Server Side Encryption.

try {
    $result = $apiInstance->createLogAwsS3($service_id, $version_id, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $message_type, $timestamp_format, $period, $gzip_level, $compression_codec, $access_key, $acl, $bucket_name, $domain, $iam_role, $path, $public_key, $redundancy, $secret_key, $server_side_encryption_kms_key_id, $server_side_encryption);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingS3Api->createLogAwsS3: ', $e->getMessage(), PHP_EOL;
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
 **message_type** | [**\OpenAPI\Client\Model\LoggingMessageType**](../Model/LoggingMessageType.md)|  | [optional]
 **timestamp_format** | **string**| Date and time in ISO 8601 format. | [optional]
 **period** | **int**| How frequently log files are finalized so they can be available for reading (in seconds). | [optional] [default to 3600]
 **gzip_level** | **int**| What level of gzip encoding to have when sending logs (default &#x60;0&#x60;, no compression). If an explicit non-zero value is set, then &#x60;compression_codec&#x60; will default to \\\&quot;gzip.\\\&quot; Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. | [optional] [default to 0]
 **compression_codec** | [**\OpenAPI\Client\Model\LoggingCompressionCodec**](../Model/LoggingCompressionCodec.md)|  | [optional]
 **access_key** | **string**| The access key for your S3 account. Not required if &#x60;iam_role&#x60; is provided. | [optional]
 **acl** | **string**| The access control list (ACL) specific request header. See the AWS documentation for [Access Control List (ACL) Specific Request Headers](https://docs.aws.amazon.com/AmazonS3/latest/API/mpUploadInitiate.html#initiate-mpu-acl-specific-request-headers) for more information. | [optional]
 **bucket_name** | **string**| The bucket name for S3 account. | [optional]
 **domain** | **string**| The domain of the Amazon S3 endpoint. | [optional]
 **iam_role** | **string**| The Amazon Resource Name (ARN) for the IAM role granting Fastly access to S3. Not required if &#x60;access_key&#x60; and &#x60;secret_key&#x60; are provided. | [optional]
 **path** | **string**| The path to upload logs to. | [optional] [default to &#39;null&#39;]
 **public_key** | **string**| A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [default to &#39;null&#39;]
 **redundancy** | **string**| The S3 redundancy level. | [optional] [default to &#39;null&#39;]
 **secret_key** | **string**| The secret key for your S3 account. Not required if &#x60;iam_role&#x60; is provided. | [optional]
 **server_side_encryption_kms_key_id** | **string**| Optional server-side KMS Key Id. Must be set if &#x60;server_side_encryption&#x60; is set to &#x60;aws:kms&#x60; or &#x60;AES256&#x60;. | [optional] [default to &#39;null&#39;]
 **server_side_encryption** | **string**| Set this to &#x60;AES256&#x60; or &#x60;aws:kms&#x60; to enable S3 Server Side Encryption. | [optional] [default to &#39;null&#39;]

### Return type

[**\OpenAPI\Client\Model\ModelLoggingS3**](../Model/ModelLoggingS3.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLogAwsS3()`

```php
deleteLogAwsS3($service_id, $version_id, $logging_s3_name): object
```

Delete an AWS S3 log endpoint

Delete the S3 for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingS3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$logging_s3_name = 'logging_s3_name_example'; // string

try {
    $result = $apiInstance->deleteLogAwsS3($service_id, $version_id, $logging_s3_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingS3Api->deleteLogAwsS3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **logging_s3_name** | **string**|  |

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

## `getLogAwsS3()`

```php
getLogAwsS3($service_id, $version_id, $logging_s3_name): \OpenAPI\Client\Model\ModelLoggingS3
```

Get an AWS S3 log endpoint

Get the S3 for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingS3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$logging_s3_name = 'logging_s3_name_example'; // string

try {
    $result = $apiInstance->getLogAwsS3($service_id, $version_id, $logging_s3_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingS3Api->getLogAwsS3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **logging_s3_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelLoggingS3**](../Model/ModelLoggingS3.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLogAwsS3()`

```php
listLogAwsS3($service_id, $version_id): \OpenAPI\Client\Model\ModelLoggingS3[]
```

List AWS S3 log endpoints

List all of the S3s for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingS3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int

try {
    $result = $apiInstance->listLogAwsS3($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingS3Api->listLogAwsS3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ModelLoggingS3[]**](../Model/ModelLoggingS3.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLogAwsS3()`

```php
updateLogAwsS3($service_id, $version_id, $logging_s3_name, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $message_type, $timestamp_format, $period, $gzip_level, $compression_codec, $access_key, $acl, $bucket_name, $domain, $iam_role, $path, $public_key, $redundancy, $secret_key, $server_side_encryption_kms_key_id, $server_side_encryption): \OpenAPI\Client\Model\ModelLoggingS3
```

Update an AWS S3 log endpoint

Update the S3 for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingS3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$logging_s3_name = 'logging_s3_name_example'; // string
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
$message_type = new \OpenAPI\Client\Model\LoggingMessageType(); // \OpenAPI\Client\Model\LoggingMessageType
$timestamp_format = 'timestamp_format_example'; // string | Date and time in ISO 8601 format.
$period = 3600; // int | How frequently log files are finalized so they can be available for reading (in seconds).
$gzip_level = 0; // int | What level of gzip encoding to have when sending logs (default `0`, no compression). If an explicit non-zero value is set, then `compression_codec` will default to \\\"gzip.\\\" Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error.
$compression_codec = new \OpenAPI\Client\Model\LoggingCompressionCodec(); // \OpenAPI\Client\Model\LoggingCompressionCodec
$access_key = 'access_key_example'; // string | The access key for your S3 account. Not required if `iam_role` is provided.
$acl = 'acl_example'; // string | The access control list (ACL) specific request header. See the AWS documentation for [Access Control List (ACL) Specific Request Headers](https://docs.aws.amazon.com/AmazonS3/latest/API/mpUploadInitiate.html#initiate-mpu-acl-specific-request-headers) for more information.
$bucket_name = 'bucket_name_example'; // string | The bucket name for S3 account.
$domain = 'domain_example'; // string | The domain of the Amazon S3 endpoint.
$iam_role = 'iam_role_example'; // string | The Amazon Resource Name (ARN) for the IAM role granting Fastly access to S3. Not required if `access_key` and `secret_key` are provided.
$path = 'null'; // string | The path to upload logs to.
$public_key = 'null'; // string | A PGP public key that Fastly will use to encrypt your log files before writing them to disk.
$redundancy = 'null'; // string | The S3 redundancy level.
$secret_key = 'secret_key_example'; // string | The secret key for your S3 account. Not required if `iam_role` is provided.
$server_side_encryption_kms_key_id = 'null'; // string | Optional server-side KMS Key Id. Must be set if `server_side_encryption` is set to `aws:kms` or `AES256`.
$server_side_encryption = 'null'; // string | Set this to `AES256` or `aws:kms` to enable S3 Server Side Encryption.

try {
    $result = $apiInstance->updateLogAwsS3($service_id, $version_id, $logging_s3_name, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $message_type, $timestamp_format, $period, $gzip_level, $compression_codec, $access_key, $acl, $bucket_name, $domain, $iam_role, $path, $public_key, $redundancy, $secret_key, $server_side_encryption_kms_key_id, $server_side_encryption);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingS3Api->updateLogAwsS3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **logging_s3_name** | **string**|  |
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
 **message_type** | [**\OpenAPI\Client\Model\LoggingMessageType**](../Model/LoggingMessageType.md)|  | [optional]
 **timestamp_format** | **string**| Date and time in ISO 8601 format. | [optional]
 **period** | **int**| How frequently log files are finalized so they can be available for reading (in seconds). | [optional] [default to 3600]
 **gzip_level** | **int**| What level of gzip encoding to have when sending logs (default &#x60;0&#x60;, no compression). If an explicit non-zero value is set, then &#x60;compression_codec&#x60; will default to \\\&quot;gzip.\\\&quot; Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. | [optional] [default to 0]
 **compression_codec** | [**\OpenAPI\Client\Model\LoggingCompressionCodec**](../Model/LoggingCompressionCodec.md)|  | [optional]
 **access_key** | **string**| The access key for your S3 account. Not required if &#x60;iam_role&#x60; is provided. | [optional]
 **acl** | **string**| The access control list (ACL) specific request header. See the AWS documentation for [Access Control List (ACL) Specific Request Headers](https://docs.aws.amazon.com/AmazonS3/latest/API/mpUploadInitiate.html#initiate-mpu-acl-specific-request-headers) for more information. | [optional]
 **bucket_name** | **string**| The bucket name for S3 account. | [optional]
 **domain** | **string**| The domain of the Amazon S3 endpoint. | [optional]
 **iam_role** | **string**| The Amazon Resource Name (ARN) for the IAM role granting Fastly access to S3. Not required if &#x60;access_key&#x60; and &#x60;secret_key&#x60; are provided. | [optional]
 **path** | **string**| The path to upload logs to. | [optional] [default to &#39;null&#39;]
 **public_key** | **string**| A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [default to &#39;null&#39;]
 **redundancy** | **string**| The S3 redundancy level. | [optional] [default to &#39;null&#39;]
 **secret_key** | **string**| The secret key for your S3 account. Not required if &#x60;iam_role&#x60; is provided. | [optional]
 **server_side_encryption_kms_key_id** | **string**| Optional server-side KMS Key Id. Must be set if &#x60;server_side_encryption&#x60; is set to &#x60;aws:kms&#x60; or &#x60;AES256&#x60;. | [optional] [default to &#39;null&#39;]
 **server_side_encryption** | **string**| Set this to &#x60;AES256&#x60; or &#x60;aws:kms&#x60; to enable S3 Server Side Encryption. | [optional] [default to &#39;null&#39;]

### Return type

[**\OpenAPI\Client\Model\ModelLoggingS3**](../Model/ModelLoggingS3.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
