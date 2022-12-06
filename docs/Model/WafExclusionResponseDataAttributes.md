# # WafExclusionResponseDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**deleted_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**updated_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**condition** | **string** | A conditional expression in VCL used to determine if the condition is met. | [optional] 
**exclusion_type** | **string** | The type of exclusion. | [optional]  [one of: 'rule', 'variable', 'waf']
**logging** | **bool** | Whether to generate a log upon matching. | [optional]  [defaults to true]
**name** | **string** | Name of the exclusion. | [optional] 
**number** | **int** | A numeric ID identifying a WAF exclusion. | [optional] 
**variable** | **string** | The variable to exclude. An optional selector can be specified after the variable separated by a colon (`:`) to restrict the variable to a particular parameter. Required for `exclusion_type&#x3D;variable`. | [optional]  [one of: 'req.cookies', 'req.headers', 'req.post', 'req.post_filename', 'req.qs', 'null']


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
