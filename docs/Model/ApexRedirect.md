# # ApexRedirect

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**service_id** | **string** |  | [optional] [readonly] 
**version** | **int** |  | [optional] [readonly] 
**created_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**deleted_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**updated_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**status_code** | **int** | HTTP status code used to redirect the client. | [optional]  [one of: 301, 302, 307, 308]
**domains** | **string[]** | Array of apex domains that should redirect to their WWW subdomain. | [optional] 
**feature_revision** | **int** | Revision number of the apex redirect feature implementation. Defaults to the most recent revision. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
