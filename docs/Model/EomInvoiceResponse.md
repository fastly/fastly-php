# # EomInvoiceResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_id** | **string** | Customer ID associated with the invoice. | [optional] 
**invoice_id** | **string** | Numeric string identifying the invoice. | [optional] 
**invoice_posted_on** | **\DateTime** | Date and time invoice was posted on, in ISO 8601 format. | [optional] 
**billing_start_date** | **\DateTime** | Date and time (in ISO 8601 format) for initiation point of a billing cycle, signifying the start of charges for a service or subscription. | [optional] 
**billing_end_date** | **\DateTime** | Date and time (in ISO 8601 format) for termination point of a billing cycle, signifying the end of charges for a service or subscription. | [optional] 
**statement_number** | **string** | Alphanumeric string identifying the statement number. | [optional] 
**currency_code** | **string** | Three-letter code representing a specific currency used for financial transactions. | [optional] 
**monthly_transaction_amount** | **float** | Total billable amount for invoiced services charged within a single month. | [optional] 
**transaction_line_items** | [**\Fastly\Model\Invoicelineitems[]**](Invoicelineitems.md) |  | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
