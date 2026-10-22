# # ArcVirtualKeyFailoverResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**targets** | [**\Fastly\Model\ArcFailoverTarget[]**](ArcFailoverTarget.md) | The provider connections to retry against, in order. | 
**timeout_enabled** | **bool** | Whether a request timeout triggers failover. | 
**rate_limit_429_enabled** | **bool** | Whether a `429 Too Many Requests` response from the provider triggers failover. | 
**server_error_5xx_enabled** | **bool** | Whether a `5xx` server error response from the provider triggers failover. | 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
