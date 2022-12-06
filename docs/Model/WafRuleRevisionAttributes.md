# # WafRuleRevisionAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message** | **string** | Message metadata for the rule. | [optional] [readonly] 
**modsec_rule_id** | **int** | Corresponding ModSecurity rule ID. | [optional] [readonly] 
**paranoia_level** | **int** | Paranoia level for the rule. | [optional] [readonly] 
**revision** | **int** | Revision number. | [optional] 
**severity** | **int** | Severity metadata for the rule. | [optional] [readonly] 
**source** | **string** | The ModSecurity rule logic. | [optional] [readonly] 
**state** | **string** | The state, indicating if the revision is the most recent version of the rule. | [optional] [readonly]  [one of: 'latest', 'outdated']
**vcl** | **string** | The VCL representation of the rule logic. | [optional] [readonly] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
