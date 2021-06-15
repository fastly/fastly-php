# # ModelRateLimiterAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | A human readable name for the rate limiting rule. |
**http_methods** | **string[]** | Array of HTTP methods to apply rate limiting to. |
**rps_limit** | **int** | Upper limit of requests per second allowed by the rate limiter. |
**window_size** | **int** | Number of seconds during which the RPS limit must be exceeded in order to trigger a violation. |
**client_key** | **string[]** | Array of VCL variables used to generate a counter key to identify a client. Examples variables include &#x60;req.http.Fastly-Client-IP&#x60;, &#x60;req.http.User-Agent&#x60;, or a custom header like &#x60;req.http.API-Key&#x60;. |
**penalty_box_duration** | **int** | Length of time in seconds that the rate limiter is in effect after the initial violation is detected. |
**action** | **string** | The action to take when a rate limiter violation is detected. \&quot;response\&quot; and \&quot;response_object\&quot; prevent an origin request; \&quot;log_only\&quot; logs the violation but allows the origin request to continue. |
**uri_dictionary_name** | **string** | The name of an Edge Dictionary containing URIs as keys. If not defined or null, all origin URIs will be rate limited. | [optional]
**response** | [**\OpenAPI\Client\Model\ModelRateLimiterAllOfResponse**](ModelRateLimiterAllOfResponse.md) |  | [optional]
**response_object_name** | **string** | Name of existing response object. Required if &#x60;action&#x60; is \&quot;response_object\&quot;. Note that the rate limiter response is only updated to reflect the response object content when saving the rate limiter configuration. | [optional]
**logger_type** | **string** | Name of the type of logging endpoint to be used when action is \&quot;log_only\&quot;. The logging endpoint type is used to determine the appropriate log format to use when emitting log entries. | [optional]
**feature_revision** | **int** | Revision number of the rate limiting feature implementation. Defaults to the most recent revision. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
