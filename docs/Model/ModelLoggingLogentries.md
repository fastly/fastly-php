# # ModelLoggingLogentries

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
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [default to '%h %l %u %t "%r" %&gt;s %b']
**port** | **int** | The port number. | [optional] [default to 20000]
**token** | **string** | Use token based authentication ([https://logentries.com/doc/input-token/](https://logentries.com/doc/input-token/)). | [optional]
**use_tls** | [**\OpenAPI\Client\Model\LoggingUseTls**](LoggingUseTls.md) |  | [optional]
**region** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
