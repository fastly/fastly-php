# # ServiceDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly] 
**deleted_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly] 
**updated_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly] 
**comment** | **string** | A freeform descriptive note. | [optional] 
**name** | **string** | The name of the service. | [optional] 
**customer_id** | **string** | Alphanumeric string identifying the customer. | [optional] [readonly] 
**type** | **string** | The type of this service. | [optional]  [one of: 'vcl', 'wasm']
**id** | **string** | Alphanumeric string identifying the service. | [optional] [readonly] 
**publish_key** | **string** | Unused at this time. | [optional] 
**paused** | **bool** | Whether the service is paused. Services are paused due to a lack of traffic for an extended period of time. Services are resumed either when a draft version is activated or a locked version is cloned and reactivated. | [optional] 
**versions** | [**\Fastly\Model\SchemasVersionResponse[]**](SchemasVersionResponse.md) | A list of [versions](/reference/api/services/version/) associated with the service. | [optional] 
**active_version** | [**\Fastly\Model\NestedVersion**](NestedVersion.md) |  | [optional] 
**version** | [**\Fastly\Model\NestedVersion**](NestedVersion.md) |  | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
