# # BotRequestMetricsMetadata

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | **\DateTime** | An RFC-8339-formatted date and time string indicating the inclusive start of the query time range. | [optional] 
**to** | **\DateTime** | An RFC-8339-formatted date and time indicating the exclusive end of the query time range. | [optional] 
**group_by** | **string** | List of dimensions (comma-separated) being summed over in the results. | [optional] 
**next_cursor** | **string** | Optional string that can be used to request the next page of results, if any. | [optional] 
**limit** | **int** | The maximum number of results to return. Defaults to 1000. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
