# # LoggingSyslog

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | [**\Fastly\Model\LoggingPlacement**](LoggingPlacement.md) |  | [optional]
**format_version** | [**\Fastly\Model\LoggingFormatVersion**](LoggingFormatVersion.md) |  | [optional]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [default to '%h %l %u %t "%r" %&gt;s %b']
**tls_ca_cert** | **string** | A secure certificate to authenticate a server with. Must be in PEM format. | [optional] [default to 'null']
**tls_client_cert** | **string** | The client certificate used to make authenticated requests. Must be in PEM format. | [optional] [default to 'null']
**tls_client_key** | **string** | The client private key used to make authenticated requests. Must be in PEM format. | [optional] [default to 'null']
**tls_hostname** | **string** | The hostname to verify the server&#39;s certificate. This should be one of the Subject Alternative Name (SAN) fields for the certificate. Common Names (CN) are not supported. | [optional] [default to 'null']
**address** | **string** | A hostname or IPv4 address. | [optional]
**port** | **int** | The port number. | [optional] [default to 514]
**message_type** | [**\Fastly\Model\LoggingMessageType**](LoggingMessageType.md) |  | [optional]
**hostname** | **string** | The hostname used for the syslog endpoint. | [optional]
**ipv4** | **string** | The IPv4 address used for the syslog endpoint. | [optional]
**token** | **string** | Whether to prepend each message with a specific token. | [optional] [default to 'null']
**use_tls** | [**\Fastly\Model\LoggingUseTls**](LoggingUseTls.md) |  | [optional]

[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
