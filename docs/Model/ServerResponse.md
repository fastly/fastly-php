# # ServerResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**weight** | **int** | Weight (`1-100`) used to load balance this server against others. | [optional]  [defaults to 100]
**max_conn** | **int** | Maximum number of connections. If the value is `0`, it inherits the value from pool&#39;s `max_conn_default`. | [optional]  [defaults to 0]
**port** | **int** | Port number. Setting port `443` does not force TLS. Set `use_tls` in pool to force TLS. | [optional]  [defaults to 80]
**address** | **string** | A hostname, IPv4, or IPv6 address for the server. Required. | [optional] 
**comment** | **string** | A freeform descriptive note. | [optional] 
**disabled** | **bool** | Allows servers to be enabled and disabled in a pool. | [optional]  [defaults to false]
**override_host** | **string** | The hostname to override the Host header. Defaults to `null` meaning no override of the Host header if not set. This setting can also be added to a Pool definition. However, the server setting will override the Pool setting. | [optional]  [defaults to 'null']
**created_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**deleted_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**updated_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**service_id** | **string** |  | [optional] [readonly] 
**id** | **string** |  | [optional] [readonly] 
**pool_id** | **string** |  | [optional] [readonly] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
