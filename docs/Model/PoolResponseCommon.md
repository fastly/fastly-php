# # PoolResponseCommon

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**between_bytes_timeout** | **string** | Maximum duration in milliseconds that Fastly will wait while receiving no data on a download from a backend. If exceeded, the response received so far will be considered complete and the fetch will end. May be set at runtime using `bereq.between_bytes_timeout`. | [optional] 
**connect_timeout** | **string** | How long to wait for a timeout in milliseconds. | [optional] 
**first_byte_timeout** | **string** | How long to wait for the first byte in milliseconds. | [optional] 
**max_conn_default** | **string** | Maximum number of connections. | [optional]  [defaults to '200']
**tls_check_cert** | **string** | Be strict on checking TLS certs. | [optional] 
**id** | **string** |  | [optional] [readonly] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
