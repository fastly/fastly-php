# # SchemasVersionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Whether this is the active version or not. | [optional]  [defaults to false]
**comment** | **string** | A freeform descriptive note. | [optional] 
**deployed** | **bool** | Unused at this time. | [optional] 
**locked** | **bool** | Whether this version is locked or not. Objects can not be added or edited on locked versions. | [optional]  [defaults to false]
**number** | **int** | The number of this version. | [optional] [readonly] 
**staging** | **bool** | Unused at this time. | [optional]  [defaults to false]
**testing** | **bool** | Unused at this time. | [optional]  [defaults to false]
**created_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**deleted_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**updated_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**service_id** | **string** |  | [optional] [readonly] 
**environments** | [**\Fastly\Model\Environment[]**](Environment.md) | A list of environments where the service has been deployed. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
