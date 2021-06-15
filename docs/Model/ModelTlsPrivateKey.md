# # ModelTlsPrivateKey

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **string** | Time-stamp (GMT) when the private key was created. | [optional] [readonly]
**name** | **string** | A customizable name for your private key. Optional. | [optional]
**key** | **string** | The contents of the private key. Must be a PEM-formatted key. Not returned in response body. Required. | [optional]
**key_length** | **int** | The key length used to generate the private key. | [optional] [readonly]
**key_type** | **string** | The algorithm used to generate the private key. Must be &#x60;RSA&#x60;. | [optional] [readonly]
**replace** | **bool** | A recommendation from Fastly to replace this private key and all associated certificates. | [optional] [readonly]
**public_key_sha1** | **string** | Useful for safely identifying the key. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
