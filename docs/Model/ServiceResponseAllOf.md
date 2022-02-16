# # ServiceResponseAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly] 
**publish_key** | **string** | Unused at this time. | [optional] 
**paused** | **bool** | Whether the service is paused. Services are paused due to a lack of traffic for an extended period of time. Services are resumed either when a draft version is activated or a locked version is cloned and reactivated. | [optional] 
**versions** | [**\Fastly\Model\SchemasVersionResponse[]**](SchemasVersionResponse.md) | A list of [versions](/reference/api/services/version/) associated with the service. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
