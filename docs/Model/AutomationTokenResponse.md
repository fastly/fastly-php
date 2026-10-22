# # AutomationTokenResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the token. | [optional] 
**role** | **string** |  | [optional] 
**roles** | [**\Fastly\Model\AutomationTokenRole[]**](AutomationTokenRole.md) | All roles assigned to the token. Each role includes an `id` and `name`. | [optional] 
**services** | **string[]** | The service IDs of the services the token has access to. Empty when `limit_services` is `false` (full access) or when the token has no service access. | [optional] 
**limit_services** | **bool** | When `true`, the token is restricted to only the services in the `services` array. When `false`, the token has access to all services. | [optional] 
**limit_workspaces** | **bool** | When `true`, the token is restricted to only the workspaces in the `workspaces` array. When `false`, the token has access to all workspaces. Only applies to roles that support workspace access. | [optional] 
**workspaces** | **string[]** | The workspace IDs of the workspaces the token has access to. Returns an empty array for tokens without workspace access. | [optional] 
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
