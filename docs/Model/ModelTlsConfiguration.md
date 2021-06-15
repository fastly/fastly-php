# # ModelTlsConfiguration

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **string** | Time-stamp (GMT) when the configuration was created. | [optional] [readonly]
**default** | **bool** | Signifies whether or not Fastly will use this configuration as a default when creating a new [TLS Activation](/reference/api/tls/custom-certs/activations/). | [optional] [readonly]
**http_protocols** | **string[]** | HTTP protocols available on your configuration. | [optional] [readonly]
**name** | **string** | A custom name for your TLS configuration. | [optional]
**relationships** | [**\OpenAPI\Client\Model\ModelTlsConfigurationRelationships**](ModelTlsConfigurationRelationships.md) |  | [optional]
**tls_protocols** | **float[]** | TLS protocols available on your configuration. | [optional] [readonly]
**updated_at** | **string** | Time-stamp (GMT) when the configuration was last updated. | [optional] [readonly]
**bulk** | **bool** | Signifies whether the configuration is used for Platform TLS or not. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
