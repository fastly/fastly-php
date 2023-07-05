# # BatchErrors

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | The key that the error corresponds to. This field will be empty if the object or one of its fields was unable to be parsed. | [optional] 
**index** | **int** | The line number of the payload on which the error occurred (starting from 0 for the first line). | [optional] 
**code** | **string** | The HTTP response code for the request, or a 400 if the request was not able to be completed. | [optional] 
**reason** | **string** | A descriptor of this particular item&#39;s error. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
