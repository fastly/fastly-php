# # LoggingGenericCommonResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message_type** | **string** | How the message should be formatted. | [optional]  [one of: 'classic', 'loggly', 'logplex', 'blank'] [defaults to 'classic']
**timestamp_format** | **string** | A timestamp format | [optional] [readonly] 
**compression_codec** | **string** | The codec used for compressing your logs. Valid values are `zstd`, `snappy`, and `gzip`. Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error. | [optional]  [one of: 'zstd', 'snappy', 'gzip']
**period** | **string** | How frequently log files are finalized so they can be available for reading (in seconds). | [optional]  [defaults to '3600']
**gzip_level** | **string** | The level of gzip encoding when sending logs (default `0`, no compression). Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error. | [optional]  [defaults to '0']


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
