# # LoggingHoneycombResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | [**\Fastly\Model\LoggingPlacement**](LoggingPlacement.md) |  | [optional]
**format_version** | [**\Fastly\Model\LoggingFormatVersion**](LoggingFormatVersion.md) |  | [optional]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **mixed** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). Must produce valid JSON that Honeycomb can ingest. | [optional]
**dataset** | **string** | The Honeycomb Dataset you want to log to. | [optional]
**token** | **string** | The Write Key from the Account page of your Honeycomb account. | [optional]
**created_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**deleted_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**updated_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**service_id** | **string** | Alphanumeric string identifying the service. | [optional] [readonly]
**version** | **int** | Integer identifying a service version. | [optional] [readonly]

[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
