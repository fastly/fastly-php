# # TlsConfigurationResponseAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**deleted_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**updated_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**default** | **bool** | Signifies whether or not Fastly will use this configuration as a default when creating a new [TLS Activation](https://www.fastly.com/documentation/reference/api/tls/custom-certs/activations/). | [optional] [readonly] 
**http_protocols** | **string[]** | HTTP protocols available on your configuration. | [optional] [readonly] 
**tls_protocols** | **string[]** | TLS protocols available on your configuration. | [optional] [readonly] 
**bulk** | **bool** | Signifies whether the configuration is used for Platform TLS or not. | [optional] [readonly] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
