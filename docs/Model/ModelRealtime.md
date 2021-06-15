# # ModelRealtime

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timestamp** | **int** |  | [optional]
**aggregate_delay** | **int** | How long the system will wait before aggregating messages for each second. The most recent data returned will have happened at the moment of the request, minus the aggregation delay. | [optional]
**data** | [**\OpenAPI\Client\Model\ModelRealtimeEntry[]**](ModelRealtimeEntry.md) | A list of [records](#record-data-model), each representing one second of time. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
