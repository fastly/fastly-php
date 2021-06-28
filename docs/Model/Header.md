# # Header

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action** | **string** | Accepts a string value. | [optional]
**cache_condition** | **string** | Name of the cache condition controlling when this configuration applies. | [optional]
**dst** | **string** | Header to set. | [optional]
**ignore_if_set** | **int** | Don&#39;t add the header if it is added already. Only applies to &#39;set&#39; action. | [optional]
**name** | **string** | A handle to refer to this Header object. | [optional]
**priority** | **int** | Priority determines execution order. Lower numbers execute first. | [optional] [default to 100]
**regex** | **string** | Regular expression to use. Only applies to &#x60;regex&#x60; and &#x60;regex_repeat&#x60; actions. | [optional]
**request_condition** | **string** | Condition which, if met, will select this configuration during a request. Optional. | [optional]
**response_condition** | **string** |  | [optional]
**src** | **string** | Variable to be used as a source for the header content. Does not apply to &#x60;delete&#x60; action. | [optional]
**substitution** | **string** | Value to substitute in place of regular expression. Only applies to &#x60;regex&#x60; and &#x60;regex_repeat&#x60; actions. | [optional]
**type** | **string** | Accepts a string value. | [optional]

[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
