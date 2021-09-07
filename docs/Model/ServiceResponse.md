# # ServiceResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**deleted_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**updated_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**comment** | **string** | A freeform descriptive note. | [optional]
**customer_id** | **string** | Alphanumeric string identifying the customer. | [optional] [readonly]
**name** | **string** | The name of the service. | [optional]
**type** | **string** | The type of this service. | [optional]
**id** | **string** | Alphanumeric string identifying the service. | [optional] [readonly]
**paused** | **bool** | Whether the service is paused. Services are paused due to a lack of traffic for an extended period of time. Services are resumed either when a draft version is activated or a locked version is cloned and reactivated. | [optional]
**publish_key** | **string** | Unused at this time. | [optional]
**version** | **int** | Current [version](/reference/api/services/version/) of the service. | [optional]
**versions** | [**\Fastly\Model\SchemasVersionResponse[]**](SchemasVersionResponse.md) | A list of [versions](/reference/api/services/version/) associated with the service. | [optional]

[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
