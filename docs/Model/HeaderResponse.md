# # HeaderResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action** | **string** | Accepts a string value. | [optional]  [one of: 'set', 'append', 'delete', 'regex', 'regex_repeat']
**cache_condition** | **string** | Name of the cache condition controlling when this configuration applies. | [optional] 
**dst** | **string** | Header to set. | [optional] 
**ignore_if_set** | **int** | Don&#39;t add the header if it is added already. Only applies to &#39;set&#39; action. | [optional] 
**name** | **string** | A handle to refer to this Header object. | [optional] 
**priority** | **int** | Priority determines execution order. Lower numbers execute first. | [optional]  [defaults to 100]
**regex** | **string** | Regular expression to use. Only applies to `regex` and `regex_repeat` actions. | [optional] 
**request_condition** | **string** | Condition which, if met, will select this configuration during a request. Optional. | [optional] 
**response_condition** | **string** | Optional name of a response condition to apply. | [optional] 
**src** | **string** | Variable to be used as a source for the header content. Does not apply to `delete` action. | [optional] 
**substitution** | **string** | Value to substitute in place of regular expression. Only applies to `regex` and `regex_repeat` actions. | [optional] 
**type** | **string** | Accepts a string value. | [optional]  [one of: 'request', 'cache', 'response']
**service_id** | **string** |  | [optional] [readonly] 
**version** | **int** |  | [optional] [readonly] 
**created_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**deleted_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**updated_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
