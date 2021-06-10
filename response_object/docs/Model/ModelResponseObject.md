# # ModelResponseObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. | [optional] [readonly]
**version** | **int** | Integer identifying a service version. | [optional] [readonly]
**cache_condition** | **string** | Name of the cache condition controlling when this configuration applies. | [optional]
**content** | **string** | The content to deliver for the response object, can be empty. | [optional]
**content_type** | **string** | The MIME type of the content, can be empty. | [optional]
**name** | **string** | Name for the request settings. | [optional]
**status** | **int** | The HTTP status code. | [optional] [default to 200]
**response** | **string** | The HTTP response. | [optional] [default to 'Ok']
**request_condition** | **string** | Condition which, if met, will select this configuration during a request. Optional. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
