# # Script

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique script identifier | [optional] 
**page_id** | **string** | Parent page ID | [optional] 
**source** | **string** | Script source (inline or external URL) | [optional] 
**urls** | **string[]** | URLs where this script was observed | [optional] 
**first_seen_at** | **\DateTime** |  | [optional] 
**last_seen_at** | **\DateTime** |  | [optional] 
**justification** | **string** | Reason for authorization decision | [optional] 
**current_hash** | **string** | Current script content hash | [optional] 
**authorized_hash** | **string** | Hash of authorized script content | [optional] 
**authorization_status** | **string** | Script authorization status | [optional]  [one of: 'authorized', 'unauthorized']
**authorized_at** | **\DateTime** |  | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
