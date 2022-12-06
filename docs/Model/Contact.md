# # Contact

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **string** | The alphanumeric string representing the user for this customer contact. | [optional] 
**contact_type** | **string** | The type of contact. | [optional]  [one of: 'primary', 'billing', 'technical', 'security', 'emergency', 'general compliance']
**name** | **string** | The name of this contact, when user_id is not provided. | [optional] 
**email** | **string** | The email of this contact, when a user_id is not provided. | [optional] 
**phone** | **string** | The phone number for this contact. Required for primary, technical, and security contact types. | [optional] 
**customer_id** | **string** | The alphanumeric string representing the customer for this customer contact. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
