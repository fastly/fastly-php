# # LoggingKafkaAdditional

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**topic** | **string** | The Kafka topic to send logs to. Required. | [optional] 
**brokers** | **string** | A comma-separated list of IP addresses or hostnames of Kafka brokers. Required. | [optional] 
**compression_codec** | **string** | The codec used for compression of your logs. | [optional]  [one of: 'gzip', 'snappy', 'lz4', 'null']
**required_acks** | **int** | The number of acknowledgements a leader must receive before a write is considered successful. | [optional]  [one of: 1, 0, -1]
**request_max_bytes** | **int** | The maximum number of bytes sent in one request. Defaults `0` (no limit). | [optional]  [defaults to 0]
**parse_log_keyvals** | **bool** | Enables parsing of key&#x3D;value tuples from the beginning of a logline, turning them into [record headers](https://cwiki.apache.org/confluence/display/KAFKA/KIP-82+-+Add+Record+Headers). | [optional] 
**auth_method** | **string** | SASL authentication method. | [optional]  [one of: 'plain', 'scram-sha-256', 'scram-sha-512']
**user** | **string** | SASL user. | [optional] 
**password** | **string** | SASL password. | [optional] 
**use_tls** | [**\Fastly\Model\LoggingUseTlsString**](LoggingUseTlsString.md) |  | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
