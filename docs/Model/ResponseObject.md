# # ResponseObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cache_condition** | **string** | Name of the cache condition controlling when this configuration applies. | [optional] 
**content** | **string** | The content to deliver for the response object, can be empty. | [optional] 
**content_type** | **string** | The MIME type of the content, can be empty. | [optional] 
**name** | **string** | Name for the request settings. | [optional] 
**status** | **string** | The HTTP status code. | [optional]  [defaults to '200']
**response** | **string** | The HTTP response. | [optional]  [defaults to 'Ok']
**request_condition** | **string** | Condition which, if met, will select this configuration during a request. Optional. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
