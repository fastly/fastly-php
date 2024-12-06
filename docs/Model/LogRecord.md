# # LogRecord

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_id** | **string** | The ID of the Fastly customer that owns the service. | [optional] [readonly] 
**service_id** | [**\Fastly\Model\LogPropertyServiceId**](LogPropertyServiceId.md) |  | [optional] 
**timestamp** | **\DateTime** | Timestamp of the request in ISO 8601 format. | [optional] 
**client_as_number** | **int** | The autonomous system (AS) number of the client. | [optional] [readonly] 
**client_region** | **string** | The client&#39;s country subdivision code as found in ISO 3166-2. | [optional] [readonly] 
**client_country_code** | **string** | The two-letter ISO 3166-1 country code for the client. | [optional] [readonly] 
**client_os_name** | **string** | The name of the operating system installed on the client device. | [optional] [readonly] 
**client_device_type** | **string** | The type of the client&#39;s device. | [optional] [readonly] 
**client_browser_name** | **string** | The name of the browser in use on the client device. | [optional] [readonly] 
**client_browser_version** | **string** | The version of the browser in use on client device. | [optional] [readonly] 
**fastly_pop** | **string** | The name of the Fastly POP that served this request. | [optional] [readonly] 
**origin_host** | **string** | The name of the origin host that served this request. | [optional] [readonly] 
**request_protocol** | **string** | HTTP protocol version in use for this request. For example, HTTP/1.1. | [optional] [readonly] 
**request_host** | **string** | The name of the request host used for this request. | [optional] [readonly] 
**request_path** | **string** | The URL path supplied for this request. | [optional] [readonly] 
**request_method** | **string** | HTTP method sent by the client such as \&quot;GET\&quot; or \&quot;POST\&quot;. | [optional] [readonly] 
**response_bytes_body** | **int** | Body bytes sent to the client in the response. | [optional] [readonly] 
**response_bytes_header** | **int** | Header bytes sent to the client in the response. | [optional] [readonly] 
**response_content_length** | **int** | Total bytes sent to the client in the response. | [optional] [readonly] 
**response_content_type** | **string** | The content type of the response sent to the client. | [optional] [readonly] 
**response_reason** | **string** | The HTTP reason phrase returned for this request, if any. | [optional] [readonly] 
**response_state** | **string** | The state of the request with optional suffixes describing special cases. | [optional] [readonly] 
**response_status** | **int** | The HTTP response code returned for this request. | [optional] [readonly] 
**response_time** | **float** | The time since the request started in seconds. | [optional] [readonly] 
**response_x_cache** | **string** | Indicates whether the request was a HIT or a MISS. | [optional] [readonly] 
**is_cache_hit** | **bool** | Indicates whether this request was fulfilled from cache. | [optional] [readonly] 
**is_edge** | **bool** | Indicates whether the request was handled by a Fastly edge POP. | [optional] [readonly] 
**is_shield** | **bool** | Indicates whether the request was handled by a Fastly shield POP. | [optional] [readonly] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
