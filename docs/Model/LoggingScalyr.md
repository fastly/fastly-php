# # LoggingScalyr

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | [**\Fastly\Model\LoggingPlacement**](LoggingPlacement.md) |  | [optional]
**format_version** | [**\Fastly\Model\LoggingFormatVersion**](LoggingFormatVersion.md) |  | [optional]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [default to '%h %l %u %t "%r" %&gt;s %b']
**region** | **string** | The region that log data will be sent to. | [optional] [default to REGION_US]
**token** | **string** | The token to use for authentication ([https://www.scalyr.com/keys](https://www.scalyr.com/keys)). | [optional]
**project_id** | **string** | The name of the logfile within Scalyr. | [optional] [default to 'logplex']

[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
