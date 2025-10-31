# # SuccessfulResponseAsObjectAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Domain Identifier (UUID). | [optional] 
**fqdn** | **string** | The fully-qualified domain name for your domain. Can be created, but not updated. | [optional] 
**service_id** | **string** | The `service_id` associated with your domain or `null` if there is no association. | [optional] 
**description** | **string** | A freeform descriptive note. | [optional] 
**activated** | **bool** | Denotes if the domain has at least one TLS activation or not. | [optional] [readonly] 
**verified** | **bool** | Denotes that the customer has proven ownership over the domain by obtaining a Fastly-managed TLS certificate for it or by providing a their own TLS certificate from a publicly-trusted CA that includes the domain or matching wildcard. | [optional] [readonly] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
