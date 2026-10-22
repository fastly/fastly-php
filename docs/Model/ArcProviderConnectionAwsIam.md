# # ArcProviderConnectionAwsIam

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The provider name. Must be `bedrock` for `aws-iam` connections. |  [one of: 'bedrock']
**models** | **string[]** | The Bedrock model identifiers this connection is allowed to use. | 
**auth_type** | **string** | The authentication type for this connection. |  [one of: 'aws-iam']
**customer_role_arn** | **string** | The ARN of the IAM role in your AWS account that AI Runtime Control assumes to access Bedrock. See [get Bedrock setup information](https://www.fastly.com/documentation/reference/api/ai-runtime-control/providers#arc-get-bedrock-setup) for the role ARN and external ID your trust policy must reference. | 
**region** | **string** | The AWS region for Bedrock API requests. | 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
