# # AutomationTokenCreateResponseAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | [**\Fastly\Model\ReadOnlyId**](ReadOnlyId.md) |  | [optional] 
**user_id** | [**\Fastly\Model\ReadOnlyUserId**](ReadOnlyUserId.md) |  | [optional] 
**customer_id** | [**\Fastly\Model\ReadOnlyCustomerId**](ReadOnlyCustomerId.md) |  | [optional] 
**created_at** | **\DateTime** | A UTC timestamp of when the token was created. | [optional] [readonly] 
**access_token** | **string** |  | [optional] [readonly] 
**tls_access** | **bool** | Indicates whether TLS access is enabled for the token. | [optional] 
**last_used_at** | **\DateTime** | A UTC timestamp of when the token was last used. | [optional] [readonly] 
**user_agent** | **string** | The User-Agent header of the client that last used the token. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
