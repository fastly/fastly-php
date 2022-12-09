# # RealtimeEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**recorded** | **int** | The Unix timestamp at which this record&#39;s data was generated. | [optional] 
**aggregated** | [**RealtimeMeasurements**](RealtimeMeasurements.md) | Aggregates [measurements](#measurements-data-model) across all Fastly POPs. | [optional] 
**datacenter** | [**array&lt;string,\Fastly\Model\RealtimeMeasurements&gt;**](RealtimeMeasurements.md) | Groups [measurements](#measurements-data-model) by POP. See the [POPs API](/reference/api/utils/pops/) for details of POP identifiers. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
