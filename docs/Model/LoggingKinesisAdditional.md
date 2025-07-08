# # LoggingKinesisAdditional

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name for the real-time logging configuration. | [optional] 
**placement** | [**\Fastly\Model\LoggingPlacement**](LoggingPlacement.md) |  | [optional] 
**format** | **string** | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). | [optional]  [defaults to '{"timestamp":"%{begin:%Y-%m-%dT%H:%M:%S}t","time_elapsed":"%{time.elapsed.usec}V","is_tls":"%{if(req.is_ssl, \"true\", \"false\")}V","client_ip":"%{req.http.Fastly-Client-IP}V","geo_city":"%{client.geo.city}V","geo_country_code":"%{client.geo.country_code}V","request":"%{req.request}V","host":"%{req.http.Fastly-Orig-Host}V","url":"%{json.escape(req.url)}V","request_referer":"%{json.escape(req.http.Referer)}V","request_user_agent":"%{json.escape(req.http.User-Agent)}V","request_accept_language":"%{json.escape(req.http.Accept-Language)}V","request_accept_charset":"%{json.escape(req.http.Accept-Charset)}V","cache_status":"%{regsub(fastly_info.state, \"^(HIT-(SYNTH)|(HITPASS|HIT|MISS|PASS|ERROR|PIPE)).*\", \"\\2\\3\") }V"}']
**topic** | **string** | The Amazon Kinesis stream to send logs to. Required. | [optional] 
**region** | [**\Fastly\Model\AwsRegion**](AwsRegion.md) |  | [optional] 
**secret_key** | **string** | The secret key associated with the target Amazon Kinesis stream. Not required if `iam_role` is specified. | [optional] 
**access_key** | **string** | The access key associated with the target Amazon Kinesis stream. Not required if `iam_role` is specified. | [optional] 
**iam_role** | **string** | The ARN for an IAM role granting Fastly access to the target Amazon Kinesis stream. Not required if `access_key` and `secret_key` are provided. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
