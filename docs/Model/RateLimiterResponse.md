# # RateLimiterResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | A human readable name for the rate limiting rule. | [optional]
**uri_dictionary_name** | **string** | The name of an Edge Dictionary containing URIs as keys. If not defined or &#x60;null&#x60;, all origin URIs will be rate limited. | [optional]
**http_methods** | **string[]** | Array of HTTP methods to apply rate limiting to. | [optional]
**rps_limit** | **int** | Upper limit of requests per second allowed by the rate limiter. | [optional]
**window_size** | **int** | Number of seconds during which the RPS limit must be exceeded in order to trigger a violation. | [optional]
**client_key** | **string[]** | Array of VCL variables used to generate a counter key to identify a client. Example variables include &#x60;req.http.Fastly-Client-IP&#x60;, &#x60;req.http.User-Agent&#x60;, or a custom header like &#x60;req.http.API-Key&#x60;. | [optional]
**penalty_box_duration** | **int** | Length of time in seconds that the rate limiter is in effect after the initial violation is detected. | [optional]
**action** | **string** | The action to take when a rate limiter violation is detected. | [optional]
**response** | [**\Fastly\Model\RateLimiterResponse1**](RateLimiterResponse1.md) |  | [optional]
**response_object_name** | **string** | Name of existing response object. Required if &#x60;action&#x60; is &#x60;response_object&#x60;. Note that the rate limiter response is only updated to reflect the response object content when saving the rate limiter configuration. | [optional]
**logger_type** | **string** | Name of the type of logging endpoint to be used when action is &#x60;log_only&#x60;. The logging endpoint type is used to determine the appropriate log format to use when emitting log entries. | [optional]
**feature_revision** | **int** | Revision number of the rate limiting feature implementation. Defaults to the most recent revision. | [optional]
**service_id** | **string** | Alphanumeric string identifying the service. | [optional] [readonly]
**version** | **int** | Integer identifying a service version. | [optional] [readonly]
**created_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**deleted_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**updated_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**id** | **string** | Alphanumeric string identifying the rate limiter. | [optional]

[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
