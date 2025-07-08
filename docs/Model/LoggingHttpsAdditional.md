# # LoggingHttpsAdditional

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The URL to send logs to. Must use HTTPS. Required. | [optional] 
**request_max_entries** | **int** | The maximum number of logs sent in one request. Defaults `0` (10k). | [optional]  [defaults to 0]
**request_max_bytes** | **int** | The maximum number of bytes sent in one request. Defaults `0` (100MB). | [optional]  [defaults to 0]
**content_type** | **string** | Content type of the header sent with the request. | [optional]  [defaults to 'null']
**header_name** | **string** | Name of the custom header sent with the request. | [optional]  [defaults to 'null']
**message_type** | [**\Fastly\Model\LoggingMessageType**](LoggingMessageType.md) |  | [optional] 
**header_value** | **string** | Value of the custom header sent with the request. | [optional]  [defaults to 'null']
**method** | **string** | HTTP method used for request. | [optional]  [one of: 'POST', 'PUT'] [defaults to 'POST']
**json_format** | **string** | Enforces valid JSON formatting for log entries. | [optional]  [one of: '0', '1', '2']
**format** | **string** | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). | [optional]  [defaults to '%h %l %u %t "%r" %&gt;s %b']


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
