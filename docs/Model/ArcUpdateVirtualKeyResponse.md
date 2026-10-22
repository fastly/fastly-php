# # ArcUpdateVirtualKeyResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the virtual key. | [readonly] 
**customer_id** | **string** | The ID of the customer account that owns the key. | [readonly] 
**name** | **string** | The display name of the virtual key. | 
**user_id** | **string** | The ID of the user who created the key. | [readonly] 
**created_at** | **\DateTime** | The date and time the key was created, in RFC 3339 format. | [readonly] 
**updated_at** | **\DateTime** | The date and time the key was last updated, in RFC 3339 format. | [readonly] 
**expires_at** | **\DateTime** | The date and time the key expires, in RFC 3339 format. `null` if the key doesn&#39;t expire. | [optional] 
**rpm_limit** | **int** | The requests-per-minute limit for this key. `null` if there is no limit. | [optional] 
**tpm_limit** | **int** | The tokens-per-minute limit for this key. `null` if there is no limit. | [optional] 
**spend_limit_enabled** | **bool** | Whether a spend limit is enabled for this key. | [optional] [readonly] 
**spend_limit_enabled_on** | **\DateTime** | The date and time `spend_limit_enabled` was last set to `true`, in RFC 3339 format. `null` if the spend limit has never been enabled. This timestamp is not cleared when `spend_limit_enabled` is later set back to `false`, so it can be non-null even when the spend limit is currently disabled. | [optional] [readonly] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
