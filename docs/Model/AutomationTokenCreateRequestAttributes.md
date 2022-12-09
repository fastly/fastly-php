# # AutomationTokenCreateRequestAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | name of the token | [optional] 
**role** | **string** |  | [optional]  [one of: 'engineer', 'billing', 'user']
**services** | **string[]** | List of service ids to limit the token | [optional] 
**scope** | **string** |  | [optional]  [one of: 'global', 'global:read', 'purge_all', 'purge_select'] [defaults to 'global']
**expires_at** | **\DateTime** | A UTC time-stamp of when the token will expire. | [optional] 
**tls_access** | **bool** | Indicates whether TLS access is enabled for the token. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
