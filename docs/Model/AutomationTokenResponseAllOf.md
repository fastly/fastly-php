# # AutomationTokenResponseAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | [**\Fastly\Model\ReadOnlyId**](ReadOnlyId.md) |  | [optional] 
**customer_id** | [**\Fastly\Model\ReadOnlyCustomerId**](ReadOnlyCustomerId.md) |  | [optional] 
**role** | **string** |  | [optional] 
**ip** | **string** | The IP address of the client that last used the token. | [optional] 
**user_agent** | **string** | The User-Agent header of the client that last used the token. | [optional] 
**sudo_expires_at** | **string** |  | [optional] [readonly] 
**last_used_at** | **\DateTime** | A UTC time-stamp of when the token was last used. | [optional] [readonly] 
**created_at** | **string** | A UTC time-stamp of when the token was created. | [optional] 
**expires_at** | **string** | (optional) A UTC time-stamp of when the token will expire. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
