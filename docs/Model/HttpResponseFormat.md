# # HttpResponseFormat

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **int** | The HTTP status code. | [optional]  [defaults to 200]
**reason** | **string** | The HTTP status string. Defaults to a string appropriate for `code`. | [optional] 
**headers** | **array&lt;string,string&gt;** | A map of arbitrary HTTP response headers to include in the response. | [optional] 
**body** | **string** | The response body as a string. | [optional] 
**body_bin** | **string** | The response body as a base64-encoded binary blob. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
