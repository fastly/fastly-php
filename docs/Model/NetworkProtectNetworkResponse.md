# # NetworkProtectNetworkResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | A human-readable name, unique within the customer. | 
**prefix** | **string** | The CIDR block to protect, masked to its network address. It cannot be changed after creation. | 
**endpoint_policies** | [**\Fastly\Model\NetworkProtectEndpointPolicy[]**](NetworkProtectEndpointPolicy.md) | Complete endpoint policy configuration. A network has at most one policy per region and may have no policies. | 
**advertise** | **bool** | Desired advertisement state, which is not the same as observed route state. Enabling it requires approved LOA, valid ROA, and a ready default-region delivery policy. A later ROA failure does not turn an existing advertisement off; losing LOA approval or the last ready default endpoint does. |  [defaults to false]
**id** | **string** | A read-only unique identifier for a Network Protect resource. | [readonly] 
**created_at** | **\DateTime** | An ISO 8601 timestamp in UTC. | [readonly] 
**updated_at** | **\DateTime** | An ISO 8601 timestamp in UTC. | [readonly] 
**description** | **string** | Optional descriptive text for the network. This metadata does not change traffic handling. Null clears it on update. | [optional] 
**rule_set_id** | **string** | The backend-assigned rule set applied to this network. | [optional] 
**roa_status** | [**\Fastly\Model\NetworkProtectRoaStatus**](NetworkProtectRoaStatus.md) |  | [optional] 
**roa_checked_at** | **\DateTime** | When Fastly last completed a ROA check. Null while the status is pending. A failed check leaves this unchanged; an old value can indicate delayed or failing checks. Null also means the controller did not report a check time. | [optional] [readonly] 
**roa_data_as_of** | **\DateTime** | When the RPKI dataset used by the last check was built. This is not the same as `roa_checked_at`; a recent check can use an older dataset. Null while the status is pending or when no dataset build time was reported. | [optional] [readonly] 
**loa_status** | [**\Fastly\Model\NetworkProtectLoaStatus**](NetworkProtectLoaStatus.md) |  | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
