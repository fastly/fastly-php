# # Header

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action** | **string** | Accepts a string value. | [optional]  [one of: 'set', 'append', 'delete', 'regex', 'regex_repeat']
**cache_condition** | **string** | Name of the cache condition controlling when this configuration applies. | [optional] 
**dst** | **string** | Header to set. | [optional] 
**name** | **string** | A handle to refer to this Header object. | [optional] 
**regex** | **string** | Regular expression to use. Only applies to `regex` and `regex_repeat` actions. | [optional] 
**request_condition** | **string** | Condition which, if met, will select this configuration during a request. Optional. | [optional] 
**response_condition** | **string** | Optional name of a response condition to apply. | [optional] 
**src** | **string** | Variable to be used as a source for the header content. Does not apply to `delete` action. | [optional] 
**substitution** | **string** | Value to substitute in place of regular expression. Only applies to `regex` and `regex_repeat` actions. | [optional] 
**type** | **string** | Accepts a string value. | [optional]  [one of: 'request', 'cache', 'response']
**ignore_if_set** | **string** | Don&#39;t add the header if it is added already. Only applies to &#39;set&#39; action. Numerical value (\&quot;0\&quot; &#x3D; false, \&quot;1\&quot; &#x3D; true) | [optional] 
**priority** | **string** | Priority determines execution order. Lower numbers execute first. | [optional]  [defaults to '100']


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
