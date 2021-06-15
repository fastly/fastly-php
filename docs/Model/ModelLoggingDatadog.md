# # ModelLoggingDatadog

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**deleted_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**updated_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**service_id** | **string** | Alphanumeric string identifying the service. | [optional]
**version** | **int** | Integer identifying a service version. | [optional] [readonly]
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | [**\OpenAPI\Client\Model\LoggingPlacement**](LoggingPlacement.md) |  | [optional]
**format_version** | [**\OpenAPI\Client\Model\LoggingFormatVersion**](LoggingFormatVersion.md) |  | [optional]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **mixed** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). Must produce valid JSON that Datadog can ingest. | [optional]
**region** | **string** | The region that log data will be sent to. | [optional] [default to REGION_US]
**token** | **string** | The API key from your Datadog account. Required. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
