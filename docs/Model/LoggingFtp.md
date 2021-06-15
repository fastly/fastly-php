# # LoggingFtp

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | [**\Fastly\Model\LoggingPlacement**](LoggingPlacement.md) |  | [optional]
**format_version** | [**\Fastly\Model\LoggingFormatVersion**](LoggingFormatVersion.md) |  | [optional]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [default to '%h %l %u %t "%r" %&gt;s %b']
**message_type** | [**\Fastly\Model\LoggingMessageType**](LoggingMessageType.md) |  | [optional]
**timestamp_format** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**period** | **int** | How frequently log files are finalized so they can be available for reading (in seconds). | [optional] [default to 3600]
**gzip_level** | **int** | What level of gzip encoding to have when sending logs (default &#x60;0&#x60;, no compression). If an explicit non-zero value is set, then &#x60;compression_codec&#x60; will default to \&quot;gzip.\&quot; Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. | [optional] [default to 0]
**compression_codec** | [**\Fastly\Model\LoggingCompressionCodec**](LoggingCompressionCodec.md) |  | [optional]
**address** | **string** | An hostname or IPv4 address. | [optional]
**hostname** | **string** | Hostname used. | [optional]
**ipv4** | **string** | IPv4 address of the host. | [optional]
**password** | **string** | The password for the server. For anonymous use an email address. | [optional]
**path** | **string** | The path to upload log files to. If the path ends in &#x60;/&#x60; then it is treated as a directory. | [optional]
**port** | **int** | The port number. | [optional] [default to 21]
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [default to 'null']
**user** | **string** | The username for the server. Can be anonymous. | [optional]

[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
