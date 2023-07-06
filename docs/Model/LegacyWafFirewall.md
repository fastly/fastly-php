# # LegacyWafFirewall

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**last_push** | **string** | Date and time that VCL was last pushed to cache nodes. | [optional] 
**prefetch_condition** | **string** | Name of the corresponding condition object. | [optional] 
**response** | **string** | Name of the corresponding response object. | [optional] 
**version** | [**\Fastly\Model\ReadOnlyVersion**](ReadOnlyVersion.md) |  | [optional] 
**service_id** | [**\Fastly\Model\ReadOnlyServiceId**](ReadOnlyServiceId.md) |  | [optional] 
**disabled** | **bool** | The status of the firewall. | [optional]  [defaults to false]
**rule_statuses_log_count** | **int** | The number of rule statuses set to log. | [optional] 
**rule_statuses_block_count** | **int** | The number of rule statuses set to block. | [optional] 
**rule_statuses_disabled_count** | **int** | The number of rule statuses set to disabled. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
