# # HistoricalStatsByServiceResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Whether or not we were able to successfully execute the query. | [optional] 
**meta** | [**\Fastly\Model\HistoricalMeta**](HistoricalMeta.md) |  | [optional] 
**msg** | **string** | If the query was not successful, this will provide a string that explains why. | [optional] 
**data** | **array&lt;string,array&gt;** | Contains the results of the query, organized by *service ID*, into arrays where each element describes one service over a *time span*. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
