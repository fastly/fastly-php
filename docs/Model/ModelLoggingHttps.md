# # ModelLoggingHttps

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
**tls_ca_cert** | **string** | A secure certificate to authenticate a server with. Must be in PEM format. | [optional] [default to 'null']
**tls_client_cert** | **string** | The client certificate used to make authenticated requests. Must be in PEM format. | [optional] [default to 'null']
**tls_client_key** | **string** | The client private key used to make authenticated requests. Must be in PEM format. | [optional] [default to 'null']
**tls_hostname** | **string** | The hostname to verify the server&#39;s certificate. This should be one of the Subject Alternative Name (SAN) fields for the certificate. Common Names (CN) are not supported. | [optional] [default to 'null']
**request_max_entries** | **int** | The maximum number of logs sent in one request. Defaults &#x60;0&#x60; (no limit). | [optional] [default to 0]
**request_max_bytes** | **int** | The maximum number of bytes sent in one request. Defaults &#x60;0&#x60; (no limit). | [optional] [default to 0]
**url** | **string** | The URL to send logs to. Must use HTTPS. Required. | [optional]
**content_type** | **string** | Content type of the header sent with the request. | [optional] [default to 'null']
**header_name** | **string** | Name of the custom header sent with the request. | [optional] [default to 'null']
**message_type** | [**\OpenAPI\Client\Model\LoggingMessageType**](LoggingMessageType.md) |  | [optional]
**header_value** | **string** | Value of the custom header sent with the request. | [optional] [default to 'null']
**method** | **string** | HTTP method used for request. | [optional] [default to METHOD_POST]
**json_format** | **string** | Enforces valid JSON formatting for log entries. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
