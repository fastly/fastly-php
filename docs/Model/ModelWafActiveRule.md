# # ModelWafActiveRule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**updated_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**modsec_rule_id** | **int** | The ModSecurity rule ID of the associated rule revision. | [optional]
**latest_revision** | **int** | The latest rule revision number that is available for the associated rule revision. | [optional] [readonly]
**outdated** | **bool** | Indicates if the associated rule revision is up to date or not. | [optional] [readonly]
**revision** | **int** | Revision number. | [optional]
**status** | **string** | Describes the behavior for the particular rule revision within this firewall version. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
