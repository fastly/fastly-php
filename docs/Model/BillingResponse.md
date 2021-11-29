# # BillingResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**end_time** | **string** | Date and time in ISO 8601 format. | [optional] [readonly] 
**start_time** | **string** | Date and time in ISO 8601 format. | [optional] [readonly] 
**invoice_id** | **string** | Alphanumeric string identifying the invoice. | [optional] [readonly] 
**customer_id** | **string** | Alphanumeric string identifying the customer. | [optional] [readonly] 
**status** | [**\Fastly\Model\BillingStatus**](BillingStatus.md) |  | [optional] 
**total** | [**\Fastly\Model\BillingTotal**](BillingTotal.md) |  | [optional] 
**regions** | [**array&lt;string,array&lt;string,object&gt;&gt;**](array.md) |  | [optional] 
**line_items** | [**Timestamps[]**](Timestamps.md) |  | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
