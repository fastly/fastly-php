# # BotRequestMetricsDataItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timestamp** | **\DateTime** | Timestamp for the time series being reported. | [optional] 
**bot** | **string** | Bot identifier for which data was recorded. Present only when grouped by bot. | [optional] 
**datacenter** | **string** | Datacenter (POP) for which data was recorded. Present only when grouped by datacenter. | [optional] 
**bot_edge_requests_allowed_count** | **int** | Count of edge requests where a bot was detected and the request was allowed by the configured policy. | [optional] 
**bot_edge_requests_challenged_count** | **int** | Count of edge requests where a bot was detected and a client challenge was issued for the request by the configured policy. | [optional] 
**bot_edge_requests_blocked_count** | **int** | Count of edge requests where a bot was detected and the request was blocked by the configured policy. | [optional] 
**bot_edge_requests_challenge_token_valid_count** | **int** | Count of edge requests where a bot was detected and the client making the request has already solved a challenge issued by the configured policy. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
