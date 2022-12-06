# # LoggingS3AllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
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
