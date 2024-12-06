# # LoggingGrafanacloudlogsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name for the real-time logging configuration. | [optional] 
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional]  [one of: 'none', 'waf_debug', 'null']
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional] 
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] 
**format_version** | **string** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional]  [one of: '1', '2'] [defaults to '2']
**user** | **string** | The Grafana Cloud Logs Dataset you want to log to. | [optional] 
**url** | **string** | The URL of the Loki instance in your Grafana stack. | [optional] 
**token** | **string** | The Grafana Access Policy token with `logs:write` access scoped to your Loki instance. | [optional] 
**index** | **string** | The Stream Labels, a JSON string used to identify the stream. | [optional] 
**created_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**deleted_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**updated_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**service_id** | **string** |  | [optional] [readonly] 
**version** | **string** |  | [optional] [readonly] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
