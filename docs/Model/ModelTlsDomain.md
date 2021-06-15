# # ModelTlsDomain

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The domain name. | [optional] [readonly]
**tls_certificates** | **object[]** | The list of all the [TLS certificates](#tls_certificates) that include this domain in their SAN list. | [optional]
**tls_activations** | **object[]** | The list of [TLS activations](#tls_activations) that exist for the domain. If empty, then this domain is not enabled to serve TLS traffic. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
