# # Billing

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**end_time** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**start_time** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**customer_id** | **string** |  | [optional] [readonly] 
**vendor_state** | **string** | The current state of our third-party billing vendor. One of `up` or `down`. | [optional] [readonly] 
**status** | [**\Fastly\Model\BillingStatus**](BillingStatus.md) |  | [optional] 
**total** | [**\Fastly\Model\BillingTotal**](BillingTotal.md) |  | [optional] 
**regions** | [**array&lt;string,\Fastly\Model\BillingRegions&gt;**](BillingRegions.md) | Breakdown of regional data for products that are region based. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
