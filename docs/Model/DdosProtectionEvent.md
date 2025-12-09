# # DdosProtectionEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**updated_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**id** | **string** | Unique ID of the event. | [optional] 
**name** | **string** | A human-readable name for the event. | [optional] 
**requests_allowed** | **int** | Number of requests classified as non-attack traffic for an event. | [optional] 
**requests_detected** | **int** | Number of requests classified as DDoS attack traffic for an event. | [optional] 
**customer_id** | **string** | Alphanumeric string identifying the customer. | [optional] 
**service_id** | **string** | Alphanumeric string identifying the service. | [optional] 
**started_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**ended_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
