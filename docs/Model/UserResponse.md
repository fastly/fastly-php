# # UserResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**login** | **string** |  | [optional] [readonly] 
**name** | **string** | The real life name of the user. | [optional] 
**limit_services** | **bool** | Indicates that the user has limited access to the customer&#39;s services. | [optional] 
**locked** | **bool** | Indicates whether the is account is locked for editing or not. | [optional] 
**require_new_password** | **bool** | Indicates if a new password is required at next login. | [optional] 
**role** | [**\Fastly\Model\RoleUser**](RoleUser.md) |  | [optional] 
**two_factor_auth_enabled** | **bool** | Indicates if 2FA is enabled on the user. | [optional] 
**two_factor_setup_required** | **bool** | Indicates if 2FA is required by the user&#39;s customer account. | [optional] 
**created_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**deleted_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**updated_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**id** | **string** |  | [optional] [readonly] 
**email_hash** | **string** | The alphanumeric string identifying a email login. | [optional] [readonly] 
**customer_id** | **string** |  | [optional] [readonly] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
