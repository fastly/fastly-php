# # LoggingHoneycomb

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**format** | **mixed** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). Must produce valid JSON that Honeycomb can ingest. | [optional]
**format_version** | [**\Fastly\Model\LoggingFormatVersion**](LoggingFormatVersion.md) |  | [optional]
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | [**\Fastly\Model\LoggingPlacement**](LoggingPlacement.md) |  | [optional]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**dataset** | **string** | The Honeycomb Dataset you want to log to. | [optional]
**token** | **string** | The Write Key from the Account page of your Honeycomb account. | [optional]

[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
