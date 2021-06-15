# # LoggingNewrelic

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | [**\Fastly\Model\LoggingPlacement**](LoggingPlacement.md) |  | [optional]
**format_version** | [**\Fastly\Model\LoggingFormatVersion**](LoggingFormatVersion.md) |  | [optional]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **mixed** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). Must produce valid JSON that New Relic Logs can ingest. | [optional]
**token** | **string** | The Insert API key from the Account page of your New Relic account. Required. | [optional]

[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
