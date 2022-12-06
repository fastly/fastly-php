# # TlsCertificateResponseAttributesAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**issued_to** | **string** | The hostname for which a certificate was issued. | [optional] [readonly] 
**issuer** | **string** | The certificate authority that issued the certificate. | [optional] [readonly] 
**serial_number** | **string** | A value assigned by the issuer that is unique to a certificate. | [optional] [readonly] 
**signature_algorithm** | **string** | The algorithm used to sign the certificate. | [optional] [readonly] 
**not_after** | **\DateTime** | Time-stamp (GMT) when the certificate will expire. Must be in the future to be used to terminate TLS traffic. | [optional] [readonly] 
**not_before** | **\DateTime** | Time-stamp (GMT) when the certificate will become valid. Must be in the past to be used to terminate TLS traffic. | [optional] [readonly] 
**replace** | **bool** | A recommendation from Fastly indicating the key associated with this certificate is in need of rotation. | [optional] [readonly] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
