# # RequestSettingsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**deleted_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**updated_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**service_id** | **string** |  | [optional] [readonly] 
**version** | **string** |  | [optional] [readonly] 
**action** | **string** | Allows you to terminate request handling and immediately perform an action. | [optional]  [one of: 'lookup', 'pass']
**default_host** | **string** | Sets the host header. | [optional] 
**hash_keys** | **string** | Comma separated list of varnish request object fields that should be in the hash key. | [optional] 
**name** | **string** | Name for the request settings. | [optional] 
**request_condition** | **string** | Condition which, if met, will select this configuration during a request. Optional. | [optional] 
**xff** | **string** | Short for X-Forwarded-For. | [optional]  [one of: 'clear', 'leave', 'append', 'append_all', 'overwrite']
**bypass_busy_wait** | **string** | Disable collapsed forwarding, so you don&#39;t wait for other objects to origin. | [optional] 
**force_miss** | **string** | Allows you to force a cache miss for the request. Replaces the item in the cache if the content is cacheable. | [optional] 
**force_ssl** | **string** | Forces the request use SSL (redirects a non-SSL to SSL). | [optional] 
**geo_headers** | **string** | Injects Fastly-Geo-Country, Fastly-Geo-City, and Fastly-Geo-Region into the request headers. | [optional] 
**max_stale_age** | **string** | How old an object is allowed to be to serve stale-if-error or stale-while-revalidate. | [optional] 
**timer_support** | **string** | Injects the X-Timer info into the request for viewing origin fetch durations. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
