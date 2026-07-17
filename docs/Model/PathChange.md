# # PathChange

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**path_id** | **string** | Alphanumeric string identifying the path. Stable across versions of the routing config. | [optional] [readonly] 
**path** | **string** | The current path pattern. | [optional] 
**old_path** | **string** | The previous path pattern, if it changed. | [optional] 
**rules_added** | [**\Fastly\Model\RuleResponse[]**](RuleResponse.md) | Rules that were added to this path. | [optional] 
**rules_changed** | [**\Fastly\Model\RuleChange[]**](RuleChange.md) | Rules that were modified on this path. | [optional] 
**rules_deleted** | [**\Fastly\Model\RuleResponse[]**](RuleResponse.md) | Rules that were removed from this path. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
