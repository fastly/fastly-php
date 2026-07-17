# # RuleResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**updated_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**id** | **string** | Alphanumeric string identifying the rule. Stable across versions of the routing config. | [optional] [readonly] 
**is_default** | **bool** | Whether this is the default (catch-all) rule for the path. | [optional] [readonly] 
**action** | [**\Fastly\Model\Action**](Action.md) |  | [optional] 
**conditions** | [**\Fastly\Model\RoutingConfigCondition[]**](RoutingConfigCondition.md) | The conditions a request must satisfy for this rule to match. Empty for the default rule. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
