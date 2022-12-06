# # LoggingHttps

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name for the real-time logging configuration. | [optional] 
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional]  [one of: 'none', 'waf_debug', 'null']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional]  [one of: 1, 2]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional] 
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional]  [defaults to '%h %l %u %t "%r" %&gt;s %b']
**tls_ca_cert** | **string** | A secure certificate to authenticate a server with. Must be in PEM format. | [optional]  [defaults to 'null']
**tls_client_cert** | **string** | The client certificate used to make authenticated requests. Must be in PEM format. | [optional]  [defaults to 'null']
**tls_client_key** | **string** | The client private key used to make authenticated requests. Must be in PEM format. | [optional]  [defaults to 'null']
**tls_hostname** | **string** | The hostname to verify the server&#39;s certificate. This should be one of the Subject Alternative Name (SAN) fields for the certificate. Common Names (CN) are not supported. | [optional]  [defaults to 'null']
**request_max_entries** | **int** | The maximum number of logs sent in one request. Defaults `0` (10k). | [optional]  [defaults to 0]
**request_max_bytes** | **int** | The maximum number of bytes sent in one request. Defaults `0` (100MB). | [optional]  [defaults to 0]
**url** | **string** | The URL to send logs to. Must use HTTPS. Required. | [optional] 
**content_type** | **string** | Content type of the header sent with the request. | [optional]  [defaults to 'null']
**header_name** | **string** | Name of the custom header sent with the request. | [optional]  [defaults to 'null']
**message_type** | [**\Fastly\Model\LoggingMessageType**](LoggingMessageType.md) |  | [optional] 
**header_value** | **string** | Value of the custom header sent with the request. | [optional]  [defaults to 'null']
**method** | **string** | HTTP method used for request. | [optional]  [one of: 'POST', 'PUT'] [defaults to 'POST']
**json_format** | **string** | Enforces valid JSON formatting for log entries. | [optional]  [one of: '0', '1', '2']


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
