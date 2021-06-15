# # NestedModelVersion

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**deleted_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**updated_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**service_id** | **string** | Alphanumeric string identifying the service. | [optional]
**active** | **bool** | Whether this is the active version or not. | [optional] [default to false]
**comment** | **string** | A freeform descriptive note. | [optional] [default to '']
**deployed** | **bool** | Unused at this time. | [optional]
**locked** | **bool** | Whether this version is locked or not. Objects can not be added or edited on locked versions. | [optional] [default to false]
**number** | **int** | The number of this version. | [optional] [readonly]
**staging** | **bool** | Unused at this time. | [optional] [default to false]
**testing** | **bool** | Unused at this time. | [optional] [default to false]
**backends** | [**\OpenAPI\Client\Model\SchemasModelBackend[]**](SchemasModelBackend.md) | List of backends associated to this service. | [optional]
**cache_settings** | [**\OpenAPI\Client\Model\ModelCacheSettings[]**](ModelCacheSettings.md) | List of cache settings associated to this service. | [optional]
**conditions** | [**\OpenAPI\Client\Model\ModelCondition[]**](ModelCondition.md) | List of conditions associated to this service. | [optional]
**directors** | [**\OpenAPI\Client\Model\ModelDirector[]**](ModelDirector.md) | List of directors associated to this service. | [optional]
**domains** | [**\OpenAPI\Client\Model\ModelDomain[]**](ModelDomain.md) | List of domains associated to this service. | [optional]
**gzips** | [**\OpenAPI\Client\Model\ModelGzip[]**](ModelGzip.md) | List of gzip rules associated to this service. | [optional]
**headers** | [**\OpenAPI\Client\Model\SchemasModelHeader[]**](SchemasModelHeader.md) | List of headers associated to this service. | [optional]
**healthchecks** | [**\OpenAPI\Client\Model\ModelHealthcheck[]**](ModelHealthcheck.md) | List of healthchecks associated to this service. | [optional]
**request_settings** | [**\OpenAPI\Client\Model\ModelRequestSettings[]**](ModelRequestSettings.md) | List of request settings for this service. | [optional]
**response_objects** | [**\OpenAPI\Client\Model\ModelResponseObject[]**](ModelResponseObject.md) | List of response objects for this service. | [optional]
**settings** | [**\OpenAPI\Client\Model\SchemasModelSettings[]**](SchemasModelSettings.md) | List of default settings for this service. | [optional]
**snippets** | [**\OpenAPI\Client\Model\SchemasModelSnippet[]**](SchemasModelSnippet.md) | List of VCL snippets for this service. | [optional]
**vcls** | [**\OpenAPI\Client\Model\SchemasModelVcl[]**](SchemasModelVcl.md) | List of VCL files for this service. | [optional]
**wordpress** | **object[]** | A list of Wordpress rules with this service. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
