# # CreateResponseObjectRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the response object to create. | [optional] 
**status** | **string** | The status code the response will have. Defaults to 200. | [optional] 
**response** | **string** | The status text the response will have. Defaults to &#39;OK&#39;. | [optional] 
**content** | **string** | The content the response will deliver. | [optional] 
**content_type** | **string** | The MIME type of your response content. | [optional] 
**request_condition** | **string** | Condition which, if met, will select this configuration during a request. Optional. | [optional] 
**cache_condition** | **string** | Name of the cache condition controlling when this configuration applies. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
