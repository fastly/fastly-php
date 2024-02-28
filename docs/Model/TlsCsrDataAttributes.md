# # TlsCsrDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sans** | **string[]** | Subject Alternate Names - An array of one or more fully qualified domain names or public IP addresses to be secured by this certificate. Required. | 
**common_name** | **string** | Common Name (CN) - The fully qualified domain name (FQDN) to be secured by this certificate. The common name should be one of the entries in the SANs parameter. | [optional] 
**country** | **string** | Country (C) - The two-letter ISO country code where the organization is located. | [optional] 
**state** | **string** | State (S) - The state, province, region, or county where the organization is located. This should not be abbreviated. | [optional] 
**city** | **string** | Locality (L) - The locality, city, town, or village where the organization is located. | [optional] 
**postal_code** | **string** | Postal Code - The postal code where the organization is located. | [optional] 
**street_address** | **string** | Street Address - The street address where the organization is located. | [optional] 
**organization** | **string** | Organization (O) - The legal name of the organization, including any suffixes. This should not be abbreviated. | [optional] 
**organizational_unit** | **string** | Organizational Unit (OU) - The internal division of the organization managing the certificate. | [optional] 
**email** | **string** | Email Address (EMAIL) - The organizational contact for this. | [optional] 
**key_type** | **string** | CSR Key Type. | [optional]  [one of: 'RSA2048', 'ECDSA256']


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
