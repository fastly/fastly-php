# # PlatformDdosResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Whether or not we were able to successfully execute the query. | [optional] 
**meta** | [**\Fastly\Model\HistoricalDdosMeta**](HistoricalDdosMeta.md) |  | [optional] 
**msg** | **string** | If the query was not successful, this will provide a string that explains why. | [optional] 
**data** | [**\Fastly\Model\PlatformDdosEntry[]**](PlatformDdosEntry.md) | A list of timeseries. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
