# # TlsBulkCertificateResponseAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**deleted_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**updated_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**not_after** | **\DateTime** | Time-stamp (GMT) when the certificate will expire. Must be in the future to be used to terminate TLS traffic. | [optional] [readonly] 
**not_before** | **\DateTime** | Time-stamp (GMT) when the certificate will become valid. Must be in the past to be used to terminate TLS traffic. | [optional] [readonly] 
**replace** | **bool** | A recommendation from Fastly indicating the key associated with this certificate is in need of rotation. | [optional] [readonly] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
