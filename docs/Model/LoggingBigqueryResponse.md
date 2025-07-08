# # LoggingBigqueryResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the BigQuery logging object. Used as a primary key for API access. | [optional] 
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional]  [one of: 'none', 'null']
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional] 
**format** | **string** | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). Must produce JSON that matches the schema of your BigQuery table. | [optional] 
**log_processing_region** | **string** | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global. | [optional]  [one of: 'none', 'eu', 'us'] [defaults to 'none']
**format_version** | **string** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional]  [one of: '1', '2'] [defaults to '2']
**user** | **string** | Your Google Cloud Platform service account email address. The `client_email` field in your service account authentication JSON. Not required if `account_name` is specified. | [optional] 
**secret_key** | **string** | Your Google Cloud Platform account secret key. The `private_key` field in your service account authentication JSON. Not required if `account_name` is specified. | [optional] 
**account_name** | **string** | The name of the Google Cloud Platform service account associated with the target log collection service. Not required if `user` and `secret_key` are provided. | [optional] 
**dataset** | **string** | Your BigQuery dataset. | [optional] 
**table** | **string** | Your BigQuery table. | [optional] 
**template_suffix** | **string** | BigQuery table name suffix template. Optional. | [optional] 
**project_id** | **string** | Your Google Cloud Platform project ID. Required | [optional] 
**created_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**deleted_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**updated_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**service_id** | **string** |  | [optional] [readonly] 
**version** | **string** |  | [optional] [readonly] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
