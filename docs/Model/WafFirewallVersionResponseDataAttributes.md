# # WafFirewallVersionResponseDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**deleted_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**updated_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**active** | **bool** | Whether a specific firewall version is currently deployed. | [optional] [readonly] 
**active_rules_fastly_block_count** | **int** | The number of active Fastly rules set to block. | [optional] [readonly] 
**active_rules_fastly_log_count** | **int** | The number of active Fastly rules set to log. | [optional] [readonly] 
**active_rules_fastly_score_count** | **int** | The number of active Fastly rules set to score. | [optional] [readonly] 
**active_rules_owasp_block_count** | **int** | The number of active OWASP rules set to block. | [optional] [readonly] 
**active_rules_owasp_log_count** | **int** | The number of active OWASP rules set to log. | [optional] [readonly] 
**active_rules_owasp_score_count** | **int** | The number of active OWASP rules set to score. | [optional] [readonly] 
**active_rules_trustwave_block_count** | **int** | The number of active Trustwave rules set to block. | [optional] [readonly] 
**active_rules_trustwave_log_count** | **int** | The number of active Trustwave rules set to log. | [optional] [readonly] 
**last_deployment_status** | **string** | The status of the last deployment of this firewall version. | [optional] [readonly]  [one of: 'null', 'pending', 'in progress', 'completed', 'failed']
**deployed_at** | **string** | Time-stamp (GMT) indicating when the firewall version was last deployed. | [optional] [readonly] 
**error** | **string** | Contains error message if the firewall version fails to deploy. | [optional] [readonly] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
