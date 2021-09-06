# # LoggingHttpsAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**content_type** | **string** | Content type of the header sent with the request. | [optional] [default to 'null']
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [default to '%h %l %u %t "%r" %&gt;s %b']
**header_name** | **string** | Name of the custom header sent with the request. | [optional] [default to 'null']
**header_value** | **string** | Value of the custom header sent with the request. | [optional] [default to 'null']
**json_format** | **string** | Enforces valid JSON formatting for log entries. | [optional]
**message_type** | [**\Fastly\Model\LoggingMessageType**](LoggingMessageType.md) |  | [optional]
**method** | **string** | HTTP method used for request. | [optional] [default to METHOD_POST]
**request_max_bytes** | **int** | The maximum number of bytes sent in one request. Defaults &#x60;0&#x60; (no limit). | [optional] [default to 0]
**request_max_entries** | **int** | The maximum number of logs sent in one request. Defaults &#x60;0&#x60; (no limit). | [optional] [default to 0]
**url** | **string** | The URL to send logs to. Must use HTTPS. Required. | [optional]

[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
