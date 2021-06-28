# # VersionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Whether this is the active version or not. | [optional] [default to false]
**comment** | **string** | A freeform descriptive note. | [optional]
**deployed** | **bool** | Unused at this time. | [optional]
**locked** | **bool** | Whether this version is locked or not. Objects can not be added or edited on locked versions. | [optional] [default to false]
**number** | **int** | The number of this version. | [optional] [readonly]
**staging** | **bool** | Unused at this time. | [optional] [default to false]
**testing** | **bool** | Unused at this time. | [optional] [default to false]
**created_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**deleted_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**updated_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**service_id** | **string** | Alphanumeric string identifying the service. | [optional] [readonly]

[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
