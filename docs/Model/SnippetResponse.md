# # SnippetResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name for the snippet. | [optional]
**dynamic** | **string** | Sets the snippet version. | [optional]
**type** | **string** | The location in generated VCL where the snippet should be placed. | [optional]
**content** | **string** | The VCL code that specifies exactly what the snippet does. | [optional]
**priority** | **string** | Numeric string value. Priority determines execution order. Lower numbers execute first. | [optional] [default to '100']
**service_id** | **string** | Alphanumeric string identifying the service. | [optional] [readonly]
**version** | **int** | Integer identifying a service version. | [optional] [readonly]
**created_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**deleted_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**updated_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**id** | **string** | Alphanumeric string identifying a VCL Snippet. | [optional] [readonly]

[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
