# # BotManagementWorkspaceResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The display name of the workspace. | 
**protection_mode** | [**\Fastly\Model\BotManagementProtectionMode**](BotManagementProtectionMode.md) |  | 
**id** | **string** | A UUID used to uniquely identify the workspace. | [readonly] 
**created_at** | **\DateTime** | The date and time the workspace was created, in RFC 3339 format. | [readonly] 
**updated_at** | **\DateTime** | The date and time the workspace was last updated, in RFC 3339 format. | [readonly] 
**description** | **string** | A description of the workspace. | [optional] 
**services** | **string[]** | The IDs of the services attached to this workspace. | [optional] [readonly] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
