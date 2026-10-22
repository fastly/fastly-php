# # NetworkProtectNetworkCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | A human-readable name, unique within the customer. | 
**prefix** | **string** | The CIDR block to protect, masked to its network address. It cannot be changed after creation. | 
**description** | **string** | Optional descriptive text for the network. This metadata does not change traffic handling. Null clears it on update. | [optional] 
**rule_set_id** | **string** | Custom rule-set attachment is unavailable. Omit this value or send an empty string to use the backend-assigned default rule set. | [optional] 
**endpoint_policies** | [**\Fastly\Model\NetworkProtectEndpointPolicy[]**](NetworkProtectEndpointPolicy.md) | Complete endpoint policy configuration. A network has at most one policy per region and may have no policies. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
