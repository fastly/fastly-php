# # ModelWafExclusionsAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**condition** | **string** | A conditional expression in VCL used to determine if the condition is met. | [optional]
**exclusion_type** | **string** | The type of exclusion. | [optional]
**logging** | **bool** | Whether to generate a log upon matching. | [optional] [default to true]
**name** | **string** | Name of the exclusion. | [optional]
**number** | **int** | A numeric ID identifying a WAF exclusion. | [optional]
**variable** | **string** | The variable to exclude. An optional selector can be specified after the variable separated by a colon (&#x60;:&#x60;) to restrict the variable to a particular parameter. Required for &#x60;exclusion_type&#x3D;variable&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
