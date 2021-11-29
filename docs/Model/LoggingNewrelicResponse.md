# # LoggingNewrelicResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name for the real-time logging configuration. | [optional] 
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional]  [one of: 'none', 'waf_debug', 'null']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional]  [one of: 1, 2]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional] 
**format** | **mixed** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). Must produce valid JSON that New Relic Logs can ingest. | [optional] 
**token** | **string** | The Insert API key from the Account page of your New Relic account. Required. | [optional] 
**region** | **string** | The region to which to stream logs. | [optional]  [one of: 'US', 'EU'] [defaults to REGION_US]
**created_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly] 
**deleted_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly] 
**updated_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly] 
**service_id** | **string** | Alphanumeric string identifying the service. | [optional] [readonly] 
**version** | **int** | Integer identifying a service version. | [optional] [readonly] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
