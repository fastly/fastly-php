# # ModelVersionDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
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
