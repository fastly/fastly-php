# # LoggingKafkaAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**auth_method** | **string** | SASL authentication method. | [optional]
**brokers** | **string** | A comma-separated list of IP addresses or hostnames of Kafka brokers. Required. | [optional]
**compression_codec** | **string** | The codec used for compression of your logs. | [optional]
**parse_log_keyvals** | **bool** | Enables parsing of key&#x3D;value tuples from the beginning of a logline, turning them into [record headers](https://cwiki.apache.org/confluence/display/KAFKA/KIP-82+-+Add+Record+Headers). | [optional]
**password** | **string** | SASL password. | [optional]
**request_max_bytes** | **int** | The maximum number of bytes sent in one request. Defaults &#x60;0&#x60; (no limit). | [optional] [default to 0]
**required_acks** | **int** | The number of acknowledgements a leader must receive before a write is considered successful. | [optional] [default to REQUIRED_ACKS_one]
**topic** | **string** | The Kafka topic to send logs to. Required. | [optional]
**use_tls** | [**\Fastly\Model\LoggingUseTls**](LoggingUseTls.md) |  | [optional]
**user** | **string** | SASL user. | [optional]

[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
