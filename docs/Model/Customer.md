# # Customer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billing_contact_id** | **string** | The alphanumeric string representing the primary billing contact. | [optional] 
**billing_network_type** | **string** | Customer&#39;s current network revenue type. | [optional]  [one of: 'public', 'private']
**billing_ref** | **string** | Used for adding purchased orders to customer&#39;s account. | [optional] 
**can_configure_wordpress** | **bool** | Whether this customer can view or edit wordpress. | [optional] [readonly] 
**can_reset_passwords** | **bool** | Whether this customer can reset passwords. | [optional] [readonly] 
**can_upload_vcl** | **bool** | Whether this customer can upload VCL. | [optional] [readonly] 
**force_2fa** | **bool** | Specifies whether 2FA is forced or not forced on the customer account. Logs out non-2FA users once 2FA is force enabled. | [optional] 
**force_sso** | **bool** | Specifies whether SSO is forced or not forced on the customer account. | [optional] 
**has_account_panel** | **bool** | Specifies whether the account has access or does not have access to the account panel. | [optional] 
**has_improved_events** | **bool** | Specifies whether the account has access or does not have access to the improved events. | [optional] 
**has_improved_ssl_config** | **bool** | Whether this customer can view or edit the SSL config. | [optional] [readonly] 
**has_openstack_logging** | **bool** | Specifies whether the account has enabled or not enabled openstack logging. | [optional] 
**has_pci** | **bool** | Specifies whether the account can edit PCI for a service. | [optional] 
**has_pci_passwords** | **bool** | Specifies whether PCI passwords are required for the account. | [optional] [readonly] 
**ip_whitelist** | **string** | The range of IP addresses authorized to access the customer account. | [optional] 
**legal_contact_id** | **string** | The alphanumeric string identifying the account&#39;s legal contact. | [optional] 
**name** | **string** | The name of the customer, generally the company name. | [optional] 
**owner_id** | **string** | The alphanumeric string identifying the account owner. | [optional] 
**phone_number** | **string** | The phone number associated with the account. | [optional] 
**postal_address** | **string** | The postal address associated with the account. | [optional] 
**pricing_plan** | **string** | The pricing plan this customer is under. | [optional] 
**pricing_plan_id** | **string** | The alphanumeric string identifying the pricing plan. | [optional] 
**security_contact_id** | **string** | The alphanumeric string identifying the account&#39;s security contact. | [optional] 
**technical_contact_id** | **string** | The alphanumeric string identifying the account&#39;s technical contact. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
