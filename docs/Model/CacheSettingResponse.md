# # CacheSettingResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action** | **string** | If set, will cause vcl_fetch to terminate after processing this rule with the return state specified. If not set, other configuration logic in vcl_fetch with a lower priority will run after this rule. | [optional]  [one of: 'pass', 'deliver', 'restart']
**cache_condition** | **string** | Name of the cache condition controlling when this configuration applies. | [optional] 
**name** | **string** | Name for the cache settings object. | [optional] 
**stale_ttl** | **int** | Maximum time in seconds to continue to use a stale version of the object if future requests to your backend server fail (also known as &#39;stale if error&#39;). | [optional] 
**ttl** | **int** | Maximum time to consider the object fresh in the cache (the cache &#39;time to live&#39;). | [optional] 
**service_id** | **string** | Alphanumeric string identifying the service. | [optional] [readonly] 
**version** | **int** | Integer identifying a service version. | [optional] [readonly] 
**created_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly] 
**deleted_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly] 
**updated_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
