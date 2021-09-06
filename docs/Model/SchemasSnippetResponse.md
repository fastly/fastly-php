# # SchemasSnippetResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**content** | **string** | The VCL code that specifies exactly what the snippet does. | [optional]
**dynamic** | **string** | Sets the snippet version. | [optional]
**name** | **string** | The name for the snippet. | [optional]
**priority** | **string** | Numeric string value. Priority determines execution order. Lower numbers execute first. | [optional] [default to '100']
**type** | **string** | The location in generated VCL where the snippet should be placed. | [optional]
**service_id** | **string** | Alphanumeric string identifying the service. | [optional] [readonly]
**version** | **int** | Integer identifying a service version. | [optional] [readonly]
**created_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**deleted_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**updated_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**id** | **string** | Alphanumeric string identifying a VCL Snippet. | [optional] [readonly]

[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
