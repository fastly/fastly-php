# # PathResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**updated_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**id** | **string** | Alphanumeric string identifying the path. Stable across versions of the routing config. | [optional] [readonly] 
**path** | **string** | The URL path pattern, beginning with `/`. Maximum 2048 characters. | [optional] 
**links** | **array&lt;string,string&gt;** | HATEOAS links to related resources. | [optional] [readonly] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
