# # SchemasModelSnippet

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**deleted_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**updated_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**service_id** | **string** | Alphanumeric string identifying the service. | [optional]
**version** | **string** | Numeric string value identifying a service version. | [optional]
**name** | **string** | The name for the snippet. | [optional]
**id** | **string** | Alphanumeric string identifying a VCL Snippet. | [optional] [readonly]
**dynamic** | **string** | Sets the snippet version to regular (&#x60;\&quot;0\&quot;&#x60;) or dynamic (&#x60;\&quot;1\&quot;&#x60;). | [optional]
**type** | **string** | The location in generated VCL where the snippet should be placed. | [optional]
**content** | **string** | The VCL code that specifies exactly what the snippet does. | [optional]
**priority** | **string** | Numeric string value. Priority determines execution order. Lower numbers execute first. | [optional] [default to '100']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
