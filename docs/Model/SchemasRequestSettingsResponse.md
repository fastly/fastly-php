# # SchemasRequestSettingsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action** | **string** | Allows you to terminate request handling and immediately perform an action. | [optional]
**bypass_busy_wait** | **int** | Disable collapsed forwarding, so you don&#39;t wait for other objects to origin. | [optional]
**default_host** | **string** | Sets the host header. | [optional]
**force_miss** | **int** | Allows you to force a cache miss for the request. Replaces the item in the cache if the content is cacheable. | [optional]
**force_ssl** | **int** | Forces the request use SSL (redirects a non-SSL to SSL). | [optional]
**geo_headers** | **int** | Injects Fastly-Geo-Country, Fastly-Geo-City, and Fastly-Geo-Region into the request headers. | [optional]
**hash_keys** | **string** | Comma separated list of varnish request object fields that should be in the hash key. | [optional]
**max_stale_age** | **int** | How old an object is allowed to be to serve stale-if-error or stale-while-revalidate. | [optional]
**name** | **string** | Name for the request settings. | [optional]
**request_condition** | **string** | Condition which, if met, will select this configuration during a request. Optional. | [optional]
**timer_support** | **int** | Injects the X-Timer info into the request for viewing origin fetch durations. | [optional]
**xff** | **string** | Short for X-Forwarded-For. | [optional]
**service_id** | **string** | Alphanumeric string identifying the service. | [optional] [readonly]
**version** | **int** | Integer identifying a service version. | [optional] [readonly]
**created_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**deleted_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**updated_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]

[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
