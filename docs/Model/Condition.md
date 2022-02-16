# # Condition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**comment** | **string** | A freeform descriptive note. | [optional] 
**name** | **string** | Name of the condition. Required. | [optional] 
**priority** | **string** | A numeric string. Priority determines execution order. Lower numbers execute first. | [optional]  [defaults to '100']
**statement** | **string** | A conditional expression in VCL used to determine if the condition is met. | [optional] 
**service_id** | **string** |  | [optional] [readonly] 
**version** | **string** | A numeric string that represents the service version. | [optional] 
**type** | **string** | Type of the condition. Required. | [optional]  [one of: 'REQUEST', 'CACHE', 'RESPONSE', 'PREFETCH']


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
