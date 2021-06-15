# # ModelLoggingKafka

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
**topic** | **string** | The Kafka topic to send logs to. Required. | [optional]
**brokers** | **string** | A comma-separated list of IP addresses or hostnames of Kafka brokers. Required. | [optional]
**compression_codec** | **string** | The codec used for compression of your logs. | [optional]
**required_acks** | **int** | The number of acknowledgements a leader must receive before a write is considered successful. | [optional] [default to REQUIRED_ACKS_1]
**request_max_bytes** | **int** | The maximum number of bytes sent in one request. Defaults &#x60;0&#x60; (no limit). | [optional] [default to 0]
**parse_log_keyvals** | **bool** | Enables parsing of key&#x3D;value tuples from the beginning of a logline, turning them into [record headers](https://cwiki.apache.org/confluence/display/KAFKA/KIP-82+-+Add+Record+Headers). | [optional]
**auth_method** | **string** | SASL authentication method. | [optional]
**user** | **string** | SASL user. | [optional]
**password** | **string** | SASL password. | [optional]
**use_tls** | [**\OpenAPI\Client\Model\LoggingUseTls**](LoggingUseTls.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
