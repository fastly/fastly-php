# # ModelMeasurements

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Whether or not we were able to successfully execute the query. | [optional]
**meta** | **object** | Meta information about the scope of the query in a human readable format. | [optional]
**msg** | **string** | If the query was not successful, this will provide a string that explains why. | [optional]
**data** | **object** | The [results](#results-data-model) of the query, grouped by service (and optionally, region), and aggregated over the appropriate time span. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
