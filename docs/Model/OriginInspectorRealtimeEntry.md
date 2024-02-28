# # OriginInspectorRealtimeEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**recorded** | [**\Fastly\Model\OriginInspectorRealtimeEntryRecorded**](OriginInspectorRealtimeEntryRecorded.md) |  | [optional] 
**aggregated** | [**array&lt;string,\Fastly\Model\OriginInspectorMeasurements&gt;**](OriginInspectorMeasurements.md) | Groups [measurements](#measurements-data-model) by backend name. | [optional] 
**datacenter** | **array&lt;string,array&lt;string,\Fastly\Model\OriginInspectorMeasurements&gt;&gt;** | Groups [measurements](#measurements-data-model) by POP, then backend name. See the [POPs API](https://www.fastly.com/documentation/reference/api/utils/pops/) for details about POP identifiers. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
