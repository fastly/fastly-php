# # RateLimiterResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | A human readable name for the rate limiting rule. | [optional] 
**uri_dictionary_name** | **string** | The name of an Edge Dictionary containing URIs as keys. If not defined or `null`, all origin URIs will be rate limited. | [optional] 
**http_methods** | **string[]** | Array of HTTP methods to apply rate limiting to. | [optional]  [one of: 'HEAD', 'OPTIONS', 'GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'TRACE']
**rps_limit** | **int** | Upper limit of requests per second allowed by the rate limiter. | [optional] 
**window_size** | **int** | Number of seconds during which the RPS limit must be exceeded in order to trigger a violation. | [optional]  [one of: 1, 10, 60]
**client_key** | **string[]** | Array of VCL variables used to generate a counter key to identify a client. Example variables include `req.http.Fastly-Client-IP`, `req.http.User-Agent`, or a custom header like `req.http.API-Key`. | [optional] 
**penalty_box_duration** | **int** | Length of time in minutes that the rate limiter is in effect after the initial violation is detected. | [optional] 
**action** | **string** | The action to take when a rate limiter violation is detected. | [optional]  [one of: 'response', 'response_object', 'log_only']
**response** | **array&lt;string,string&gt;** | Custom response to be sent when the rate limit is exceeded. Required if `action` is `response`. | [optional] 
**response_object_name** | **string** | Name of existing response object. Required if `action` is `response_object`. Note that the rate limiter response is only updated to reflect the response object content when saving the rate limiter configuration. | [optional] 
**logger_type** | **string** | Name of the type of logging endpoint to be used when action is `log_only`. The logging endpoint type is used to determine the appropriate log format to use when emitting log entries. | [optional]  [one of: 'azureblob', 'bigquery', 'cloudfiles', 'datadog', 'digitalocean', 'elasticsearch', 'ftp', 'gcs', 'googleanalytics', 'heroku', 'honeycomb', 'http', 'https', 'kafka', 'kinesis', 'logentries', 'loggly', 'logshuttle', 'newrelic', 'newrelicotlp', 'openstack', 'papertrail', 'pubsub', 's3', 'scalyr', 'sftp', 'splunk', 'stackdriver', 'sumologic', 'syslog']
**feature_revision** | **int** | Revision number of the rate limiting feature implementation. Defaults to the most recent revision. | [optional] 
**service_id** | **string** |  | [optional] [readonly] 
**version** | **int** |  | [optional] [readonly] 
**created_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**deleted_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**updated_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**id** | **string** | Alphanumeric string identifying the rate limiter. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
