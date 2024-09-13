# # DomainInspectorRealtimeEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**recorded** | **int** | The Unix timestamp at which this record&#39;s data was generated. | [optional] 
**aggregated** | [**array&lt;string,DomainInspectorMeasurements&gt;**](DomainInspectorMeasurements.md) | Groups [measurements](#measurements-data-model) by backend name and then by IP address. | [optional] 
**datacenter** | **array&lt;string,array&lt;string,DomainInspectorMeasurements&gt;&gt;** | Groups [measurements](#measurements-data-model) by POP, then backend name, and then IP address. See the [POPs API](https://www.fastly.com/documentation/reference/api/utils/pops/) for details about POP identifiers. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
