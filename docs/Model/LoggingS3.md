# # LoggingS3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name for the real-time logging configuration. | [optional] 
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional]  [one of: 'none', 'waf_debug', 'null']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional]  [one of: 1, 2]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional] 
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional]  [defaults to '%h %l %u %t "%r" %&gt;s %b']
**message_type** | **string** | How the message should be formatted. | [optional]  [one of: 'classic', 'loggly', 'logplex', 'blank'] [defaults to MESSAGE_TYPE_CLASSIC]
**timestamp_format** | **string** | Date and time in ISO 8601 format. | [optional] [readonly] 
**period** | **int** | How frequently log files are finalized so they can be available for reading (in seconds). | [optional]  [defaults to 3600]
**gzip_level** | **int** | What level of gzip encoding to have when sending logs (default `0`, no compression). If an explicit non-zero value is set, then `compression_codec` will default to \&quot;gzip.\&quot; Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error. | [optional]  [defaults to 0]
**compression_codec** | **string** | The codec used for compression of your logs. Valid values are `zstd`, `snappy`, and `gzip`. If the specified codec is \&quot;gzip\&quot;, `gzip_level` will default to 3. To specify a different level, leave `compression_codec` blank and explicitly set the level using `gzip_level`. Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error. | [optional]  [one of: 'zstd', 'snappy', 'gzip']
**access_key** | **string** | The access key for your S3 account. Not required if `iam_role` is provided. | [optional] 
**acl** | **string** | The access control list (ACL) specific request header. See the AWS documentation for [Access Control List (ACL) Specific Request Headers](https://docs.aws.amazon.com/AmazonS3/latest/API/mpUploadInitiate.html#initiate-mpu-acl-specific-request-headers) for more information. | [optional] 
**bucket_name** | **string** | The bucket name for S3 account. | [optional] 
**domain** | **string** | The domain of the Amazon S3 endpoint. | [optional] 
**iam_role** | **string** | The Amazon Resource Name (ARN) for the IAM role granting Fastly access to S3. Not required if `access_key` and `secret_key` are provided. | [optional] 
**path** | **string** | The path to upload logs to. | [optional]  [defaults to 'null']
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional]  [defaults to 'null']
**redundancy** | **string** | The S3 redundancy level. | [optional]  [defaults to 'null']
**secret_key** | **string** | The secret key for your S3 account. Not required if `iam_role` is provided. | [optional] 
**server_side_encryption_kms_key_id** | **string** | Optional server-side KMS Key Id. Must be set if `server_side_encryption` is set to `aws:kms` or `AES256`. | [optional]  [defaults to 'null']
**server_side_encryption** | **string** | Set this to `AES256` or `aws:kms` to enable S3 Server Side Encryption. | [optional]  [defaults to 'null']


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
