# # LoggingAzureblobResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name for the real-time logging configuration. | [optional] 
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional]  [one of: 'none', 'null']
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional] 
**format** | **string** | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). | [optional]  [defaults to '%h %l %u %t "%r" %&gt;s %b']
**log_processing_region** | **string** | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global. | [optional]  [one of: 'none', 'eu', 'us'] [defaults to 'none']
**format_version** | **string** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional]  [one of: '1', '2'] [defaults to '2']
**message_type** | **string** | How the message should be formatted. | [optional]  [one of: 'classic', 'loggly', 'logplex', 'blank'] [defaults to 'classic']
**timestamp_format** | **string** | A timestamp format | [optional] [readonly] 
**compression_codec** | **string** | The codec used for compressing your logs. Valid values are `zstd`, `snappy`, and `gzip`. Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error. | [optional]  [one of: 'zstd', 'snappy', 'gzip']
**period** | **string** | How frequently log files are finalized so they can be available for reading (in seconds). | [optional]  [defaults to '3600']
**gzip_level** | **string** | The level of gzip encoding when sending logs (default `0`, no compression). Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error. | [optional]  [defaults to '0']
**created_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**deleted_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**updated_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**service_id** | **string** |  | [optional] [readonly] 
**version** | **string** |  | [optional] [readonly] 
**path** | **string** | The path to upload logs to. | [optional]  [defaults to 'null']
**account_name** | **string** | The unique Azure Blob Storage namespace in which your data objects are stored. Required. | [optional] 
**container** | **string** | The name of the Azure Blob Storage container in which to store logs. Required. | [optional] 
**sas_token** | **string** | The Azure shared access signature providing write access to the blob service objects. Be sure to update your token before it expires or the logging functionality will not work. Required. | [optional] 
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional]  [defaults to 'null']
**file_max_bytes** | **int** | The maximum number of bytes for each uploaded file. A value of 0 can be used to indicate there is no limit on the size of uploaded files, otherwise the minimum value is 1048576 bytes (1 MiB). Note that Microsoft Azure Storage has [block size limits](https://learn.microsoft.com/en-us/rest/api/storageservices/put-block?tabs&#x3D;microsoft-entra-id#remarks). | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
