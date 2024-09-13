# # ServiceListResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**deleted_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**updated_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**comment** | **string** | A freeform descriptive note. | [optional] 
**name** | **string** | The name of the service. | [optional] 
**customer_id** | **string** | Alphanumeric string identifying the customer. | [optional] 
**type** | **string** | The type of this service. | [optional]  [one of: 'vcl', 'wasm']
**id** | **string** |  | [optional] [readonly] 
**version** | **int** | Current [version](https://www.fastly.com/documentation/reference/api/services/version/) of the service. | [optional] 
**versions** | [**\Fastly\Model\SchemasVersionResponse[]**](SchemasVersionResponse.md) | A list of [versions](https://www.fastly.com/documentation/reference/api/services/version/) associated with the service. | [optional] 
**environments** | [**\Fastly\Model\Environment[]**](Environment.md) | A list of environments where the service has been deployed. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
