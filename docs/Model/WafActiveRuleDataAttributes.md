# # WafActiveRuleDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**modsec_rule_id** | **int** | The ModSecurity rule ID of the associated rule revision. | [optional] 
**revision** | [**\Fastly\Model\WafRuleRevisionOrLatest**](WafRuleRevisionOrLatest.md) |  | [optional] 
**status** | **string** | Describes the behavior for the particular rule revision within this firewall version. | [optional]  [one of: 'log', 'block', 'score']


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
