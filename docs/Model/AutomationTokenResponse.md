# # AutomationTokenResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the token. | [optional] 
**role** | **string** |  | [optional] 
**services** | **string[]** | (Optional) The service IDs of the services the token will have access to. Separate service IDs with a space. If no services are specified, the token will have access to all services on the account. | [optional] 
**scope** | **string** | A space-delimited list of authorization scope. | [optional]  [one of: 'global', 'purge_select', 'purge_all', 'global:read'] [defaults to 'global']
**expires_at** | **string** | (optional) A UTC timestamp of when the token will expire. | [optional] 
**id** | [**\Fastly\Model\ReadOnlyId**](ReadOnlyId.md) |  | [optional] 
**customer_id** | [**\Fastly\Model\ReadOnlyCustomerId**](ReadOnlyCustomerId.md) |  | [optional] 
**ip** | **string** | The IP address of the client that last used the token. | [optional] 
**user_agent** | **string** | The User-Agent header of the client that last used the token. | [optional] 
**tls_access** | **bool** | Indicates whether TLS access is enabled for the token. | [optional] 
**last_used_at** | **\DateTime** | A UTC timestamp of when the token was last used. | [optional] [readonly] 
**created_at** | **string** | A UTC timestamp of when the token was created. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
