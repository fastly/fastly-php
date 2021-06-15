# # ModelTlsCertificate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cert_blob** | **string** | The PEM-formatted certificate blob. Required. | [optional]
**created_at** | **string** | Time-stamp (GMT) when the certificate was created. | [optional] [readonly]
**issued_to** | **string** | The hostname for which a certificate was issued. | [optional] [readonly]
**issuer** | **string** | The certificate authority that issued the certificate. | [optional] [readonly]
**name** | **string** | A customizable name for your certificate. Defaults to the certificate&#39;s Common Name or first Subject Alternative Names (SAN) entry. Optional. | [optional]
**not_after** | **string** | Time-stamp (GMT) when the certificate will expire. Must be in the future to be used to terminate TLS traffic. | [optional] [readonly]
**not_before** | **string** | Time-stamp (GMT) when the certificate will become valid. Must be in the past to be used to terminate TLS traffic. | [optional] [readonly]
**replace** | **bool** | A recommendation from Fastly indicating the key associated with this certificate is in need of rotation. | [optional] [readonly]
**serial_number** | **string** | A value assigned by the issuer that is unique to a certificate. | [optional] [readonly]
**signature_algorithm** | **string** | The algorithm used to sign the certificate. | [optional] [readonly]
**updated_at** | **string** | Time-stamp (GMT) when the certificate was last updated. | [optional] [readonly]
**tls_domains** | **object[]** | All the domains (including wildcard domains) that are listed in any certificate&#39;s Subject Alternative Names (SAN) list. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
