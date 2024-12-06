# # GetLogRecordsResponseMetaFilters

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**service_id** | **string** | Specifies the ID of the service for which data should be returned. | [optional] 
**start** | **string** | Start time for the query as supplied in the request. | [optional] 
**end** | **string** | End time for the query as supplied in the request. | [optional] 
**domain_exact_match** | **bool** | Value of the `domain_exact_match` filter as supplied in the request. | [optional] 
**limit** | **int** | Number of records per page. | [optional]  [defaults to 20]
**next_cursor** | **string** | A cursor to specify the next page of results, if any. | [optional] 
**filter_fields** | [**\Fastly\Model\FilterFieldItem[]**](FilterFieldItem.md) |  | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
