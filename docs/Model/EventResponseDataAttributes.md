# # EventResponseDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**admin** | **bool** | Indicates if event was performed by Fastly. | [optional]
**created_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**customer_id** | **string** | Alphanumeric string identifying the customer. | [optional] [readonly]
**description** | **string** | Description of the event. | [optional]
**event_type** | **string** | Type of event. Can be used with &#x60;filter[event_type]&#x60; | [optional]
**ip** | **string** | IP addresses that the event was requested from. | [optional]
**metadata** | **object** | Hash of key value pairs of additional information. | [optional]
**service_id** | **string** | Alphanumeric string identifying the service. | [optional] [readonly]
**user_id** | **string** | Alphanumeric string identifying the user. | [optional] [readonly]

[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
