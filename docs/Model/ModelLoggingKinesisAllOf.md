# # ModelLoggingKinesisAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | [**\OpenAPI\Client\Model\LoggingPlacement**](LoggingPlacement.md) |  | [optional]
**format_version** | [**\OpenAPI\Client\Model\LoggingFormatVersion**](LoggingFormatVersion.md) |  | [optional]
**format** | **string** |  | [optional]
**topic** | **string** | The Amazon Kinesis stream to send logs to. Required. | [optional]
**region** | **string** | The [AWS region](https://docs.aws.amazon.com/general/latest/gr/rande.html#regional-endpoints) to stream logs to. | [optional]
**secret_key** | **string** | The secret key associated with the target Amazon Kinesis stream. Not required if &#x60;iam_role&#x60; is specified. | [optional]
**access_key** | **string** | The access key associated with the target Amazon Kinesis stream. Not required if &#x60;iam_role&#x60; is specified. | [optional]
**iam_role** | **string** | The ARN for an IAM role granting Fastly access to the target Amazon Kinesis stream. Not required if &#x60;access_key&#x60; and &#x60;secret_key&#x60; are provided. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
