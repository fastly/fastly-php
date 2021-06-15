# # ModelServiceAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**comment** | **string** | A freeform descriptive note. | [optional] [default to '']
**customer_id** | **string** | Alphanumeric string identifying the customer. | [optional]
**name** | **string** | The name of the service. | [optional]
**paused** | **bool** | Whether the service is paused. Services are paused due to a lack of traffic for an extended period of time. Services are resumed either when a draft version is activated or a locked version is cloned and reactivated. | [optional]
**type** | **string** | The type of this service. | [optional]
**publish_key** | **string** | Unused at this time. | [optional]
**id** | **string** | Alphanumeric string identifying the service. | [optional]
**version** | **int** | Current [version](/reference/api/services/version/) of the service. | [optional]
**versions** | [**\OpenAPI\Client\Model\SchemasModelVersion[]**](SchemasModelVersion.md) | A list of [versions](/reference/api/services/version/) associated with the service. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
