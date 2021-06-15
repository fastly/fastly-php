# # TlsCommon

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tls_ca_cert** | **string** | A secure certificate to authenticate a server with. Must be in PEM format. | [optional] [default to 'null']
**tls_client_cert** | **string** | The client certificate used to make authenticated requests. Must be in PEM format. | [optional] [default to 'null']
**tls_client_key** | **string** | The client private key used to make authenticated requests. Must be in PEM format. | [optional] [default to 'null']
**tls_cert_hostname** | **string** | The hostname used to verify a server&#39;s certificate. It can either be the Common Name (CN) or a Subject Alternative Name (SAN). | [optional] [default to 'null']
**use_tls** | **int** | Whether to use TLS. | [optional] [default to USE_TLS_0]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
