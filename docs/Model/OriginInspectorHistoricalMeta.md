# # OriginInspectorHistoricalMeta

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start** | **string** | Start time that was used to perform the query as an ISO-8601-formatted date and time. | [optional] 
**end** | **string** | End time that was used to perform the query as an ISO-8601-formatted date and time. | [optional] 
**downsample** | **string** | Downsample that was used to perform the query. One of `minute`, `hour` or `day`. | [optional] 
**metrics** | **string** | A comma-separated list of the metrics that were requested. | [optional] 
**limit** | **float** | The maximum number of results shown per page. | [optional] 
**next_cursor** | **string** | A string that can be used to request the next page of results, if any. | [optional] 
**sort** | **string** | A comma-separated list of keys the results are sorted by. | [optional] 
**group_by** | **string** | A comma-separated list of dimensions being summed over in the query. | [optional] 
**filters** | [**\Fastly\Model\OriginInspectorHistoricalMetaFilters**](OriginInspectorHistoricalMetaFilters.md) |  | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
