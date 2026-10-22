# # ArcUsageMetric

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | **string** | The date (or hour) the usage was measured. Formatted as `YYYY-MM-DD` when `granularity` is `daily`, or `YYYY-MM-DD HH:00:00` when `granularity` is `hourly`. | 
**usage_type** | **string** | The type of usage being measured. |  [one of: 'requests', 'sessions', 'input_tokens', 'output_tokens']
**quantity** | **int** | The quantity of the usage type for this date. | 
**virtual_key_id** | **string** | The ID of the virtual key this usage is attributed to. | [optional] 
**virtual_key_name** | **string** | The display name of the virtual key this usage is attributed to. | [optional] 
**primary_provider** | **string** | The ID of the provider connection originally requested, before any failover occurred. | [optional] 
**provider** | **string** | The name of the provider connection that ultimately served the request. | [optional] 
**provider_connection_id** | **string** | The ID of the provider connection that ultimately served the request. | [optional] 
**model** | **string** | The AI model identifier used. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
