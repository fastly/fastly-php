# # DiscoveredOperationGet

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**method** | **string** | The HTTP method for the operation. |  [one of: 'GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'HEAD', 'OPTIONS', 'CONNECT', 'TRACE']
**domain** | **string** | The domain for the operation. | 
**path** | **string** | The path for the operation, which may include path parameters. | 
**id** | **string** | The unique identifier of the discovered operation. | [readonly] 
**updated_at** | **\DateTime** | The timestamp when the operation was last updated. | [optional] [readonly] 
**last_seen_at** | **\DateTime** | The timestamp when the operation was last seen in traffic. | [optional] [readonly] 
**rps** | **float** | Requests per second observed for this operation. | [optional] [readonly] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
