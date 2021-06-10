# # EntryDataModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**recorded** | **int** | The Unix timestamp at which this record&#39;s data was generated. | [optional]
**aggregated** | **object** | Groups [measurements](#measurements-data-model) by backend name and then by IP address. | [optional]
**datacenter** | **object** | Groups [measurements](#measurements-data-model) by data center, then backend name, and then IP address. See the [data centers API](/reference/api/utils/datacenter/) for details of data center identifiers. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
