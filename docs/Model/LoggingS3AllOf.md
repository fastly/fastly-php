# # LoggingS3AllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access_key** | **string** | The access key for your S3 account. Not required if &#x60;iam_role&#x60; is provided. | [optional]
**acl** | **string** | The access control list (ACL) specific request header. See the AWS documentation for [Access Control List (ACL) Specific Request Headers](https://docs.aws.amazon.com/AmazonS3/latest/API/mpUploadInitiate.html#initiate-mpu-acl-specific-request-headers) for more information. | [optional]
**bucket_name** | **string** | The bucket name for S3 account. | [optional]
**domain** | **string** | The domain of the Amazon S3 endpoint. | [optional]
**iam_role** | **string** | The Amazon Resource Name (ARN) for the IAM role granting Fastly access to S3. Not required if &#x60;access_key&#x60; and &#x60;secret_key&#x60; are provided. | [optional]
**path** | **string** | The path to upload logs to. | [optional] [default to 'null']
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [default to 'null']
**redundancy** | **string** | The S3 redundancy level. | [optional] [default to 'null']
**secret_key** | **string** | The secret key for your S3 account. Not required if &#x60;iam_role&#x60; is provided. | [optional]
**server_side_encryption_kms_key_id** | **string** | Optional server-side KMS Key Id. Must be set if &#x60;server_side_encryption&#x60; is set to &#x60;aws:kms&#x60; or &#x60;AES256&#x60;. | [optional] [default to 'null']
**server_side_encryption** | **string** | Set this to &#x60;AES256&#x60; or &#x60;aws:kms&#x60; to enable S3 Server Side Encryption. | [optional] [default to 'null']

[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
