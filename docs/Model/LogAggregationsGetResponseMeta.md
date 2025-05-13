# # LogAggregationsGetResponseMeta

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**service_id** | **string** | Specifies the ID of the service for which data should be returned. | [optional] 
**start** | **string** | Start time for the query as supplied in the request. | [optional] 
**end** | **string** | End time for the query as supplied in the request. | [optional] 
**limit** | **int** | Number of records per page. | [optional]  [defaults to 20]
**sort** | **string** | Comma-separated list of the series names whose values were used to sort the results. | [optional] 
**filters** | [**\Fastly\Model\LogAggregationsGetResponseMetaFilters**](LogAggregationsGetResponseMetaFilters.md) |  | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
