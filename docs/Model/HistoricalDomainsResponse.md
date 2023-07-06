# # HistoricalDomainsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Whether or not we were able to successfully execute the query. | [optional] 
**meta** | [**\Fastly\Model\HistoricalDomainsMeta**](HistoricalDomainsMeta.md) |  | [optional] 
**msg** | **string** | If the query was not successful, this will provide a string that explains why. | [optional] 
**data** | [**\Fastly\Model\DomainInspectorEntry[]**](DomainInspectorEntry.md) | A list of timeseries. Each individual timeseries represents a unique combination of dimensions, such as domain, region or POP. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
