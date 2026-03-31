# # OperationGetExtra

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the operation. | [readonly] 
**updated_at** | **\DateTime** | The timestamp when the operation was last updated. | [readonly] 
**created_at** | **\DateTime** | The timestamp when the operation was created. | [optional] [readonly] 
**last_seen_at** | **\DateTime** | The timestamp when the operation was last seen in traffic. | [optional] [readonly] 
**rps** | **float** | Requests per second observed for this operation. | [optional] [readonly] 
**status** | **string** | The status of the operation. | [optional] [readonly]  [one of: 'SAVED', 'IGNORED']


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
