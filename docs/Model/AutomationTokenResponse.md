# # AutomationTokenResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the token. | [optional] 
**role** | **string** |  | [optional] 
**services** | **string[]** | (Optional) The service IDs of the services the token will have access to. Separate service IDs with a space. If no services are specified, the token will have access to all services on the account. | [optional] 
**scope** | **string** | A space-delimited list of authorization scope. | [optional]  [one of: 'global', 'purge_select', 'purge_all', 'global:read'] [defaults to 'global']
**expires_at** | **string** | (optional) A UTC time-stamp of when the token will expire. | [optional] 
**created_at** | **string** | A UTC time-stamp of when the token was created. | [optional] 
**deleted_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**updated_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**id** | [**\Fastly\Model\ReadOnlyId**](ReadOnlyId.md) |  | [optional] 
**customer_id** | [**\Fastly\Model\ReadOnlyCustomerId**](ReadOnlyCustomerId.md) |  | [optional] 
**ip** | **string** | The IP address of the client that last used the token. | [optional] 
**user_agent** | **string** | The User-Agent header of the client that last used the token. | [optional] 
**sudo_expires_at** | **string** |  | [optional] [readonly] 
**last_used_at** | **\DateTime** | A UTC time-stamp of when the token was last used. | [optional] [readonly] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
