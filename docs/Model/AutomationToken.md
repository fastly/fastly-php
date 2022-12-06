# # AutomationToken

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the token. | [optional] 
**role** | **string** | The role on the token. | [optional]  [one of: 'billing', 'engineer', 'user']
**services** | **string[]** | (Optional) The service IDs of the services the token will have access to. Separate service IDs with a space. If no services are specified, the token will have access to all services on the account. | [optional] 
**scope** | **string** | A space-delimited list of authorization scope. | [optional]  [one of: 'global', 'purge_select', 'purge_all', 'global:read'] [defaults to 'global']
**expires_at** | **string** | A UTC time-stamp of when the token expires. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
