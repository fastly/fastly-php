# # BillingResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**end_time** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**start_time** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**invoice_id** | **string** |  | [optional] [readonly] 
**customer_id** | **string** |  | [optional] [readonly] 
**status** | [**\Fastly\Model\BillingStatus**](BillingStatus.md) |  | [optional] 
**total** | [**\Fastly\Model\BillingTotal**](BillingTotal.md) |  | [optional] 
**regions** | **array&lt;string,array&lt;string,object&gt;&gt;** |  | [optional] 
**line_items** | [**\Fastly\Model\BillingResponseLineItem[]**](BillingResponseLineItem.md) |  | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
