# # BotRequestMetricsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data** | [**\Fastly\Model\BotRequestMetricsDataItem[]**](BotRequestMetricsDataItem.md) | An array of time series data items containing metric counts. Items are grouped by `timestamp` by default, or by a combination of `timestamp` and `bot` or `datacenter` or `region` when the `group_by` parameter is set. This dataset is sparse: only keys with non-zero values are included. | [optional] 
**meta** | [**\Fastly\Model\BotRequestMetricsMetadata**](BotRequestMetricsMetadata.md) |  | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
