# # InlineObject1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. | [optional] [readonly]
**version** | **int** | Integer identifying a service version. | [optional] [readonly]
**comment** | **string** | A freeform descriptive note. | [optional] [default to '']
**name** | **string** | Name of the condition. Required. | [optional]
**priority** | **int** | Priority determines execution order. Lower numbers execute first. | [optional] [default to 100]
**statement** | **string** | A conditional expression in VCL used to determine if the condition is met. | [optional]
**type** | **string** | Type of the condition. Required. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
