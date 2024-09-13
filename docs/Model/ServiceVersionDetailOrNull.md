# # ServiceVersionDetailOrNull

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Whether this is the active version or not. | [optional]  [defaults to false]
**comment** | **string** | A freeform descriptive note. | [optional] 
**deployed** | **bool** | Unused at this time. | [optional] 
**locked** | **bool** | Whether this version is locked or not. Objects can not be added or edited on locked versions. | [optional]  [defaults to false]
**number** | **int** | The number of this version. | [optional] [readonly] 
**staging** | **bool** | Unused at this time. | [optional]  [defaults to false]
**testing** | **bool** | Unused at this time. | [optional]  [defaults to false]
**created_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**deleted_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**updated_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**service_id** | **string** |  | [optional] [readonly] 
**environments** | [**\Fastly\Model\Environment[]**](Environment.md) | A list of environments where the service has been deployed. | [optional] 
**backends** | [**\Fastly\Model\BackendResponse[]**](BackendResponse.md) | List of backends associated to this service. | [optional] 
**cache_settings** | [**\Fastly\Model\CacheSettingResponse[]**](CacheSettingResponse.md) | List of cache settings associated to this service. | [optional] 
**conditions** | [**\Fastly\Model\ConditionResponse[]**](ConditionResponse.md) | List of conditions associated to this service. | [optional] 
**directors** | [**\Fastly\Model\Director[]**](Director.md) | List of directors associated to this service. | [optional] 
**domains** | [**\Fastly\Model\DomainResponse[]**](DomainResponse.md) | List of domains associated to this service. | [optional] 
**gzips** | [**\Fastly\Model\GzipResponse[]**](GzipResponse.md) | List of gzip rules associated to this service. | [optional] 
**headers** | [**\Fastly\Model\HeaderResponse[]**](HeaderResponse.md) | List of headers associated to this service. | [optional] 
**healthchecks** | [**\Fastly\Model\HealthcheckResponse[]**](HealthcheckResponse.md) | List of healthchecks associated to this service. | [optional] 
**request_settings** | [**\Fastly\Model\RequestSettingsResponse[]**](RequestSettingsResponse.md) | List of request settings for this service. | [optional] 
**response_objects** | [**\Fastly\Model\ResponseObjectResponse[]**](ResponseObjectResponse.md) | List of response objects for this service. | [optional] 
**settings** | [**\Fastly\Model\VersionDetailSettings**](VersionDetailSettings.md) |  | [optional] 
**snippets** | [**\Fastly\Model\SchemasSnippetResponse[]**](SchemasSnippetResponse.md) | List of VCL snippets for this service. | [optional] 
**vcls** | [**\Fastly\Model\SchemasVclResponse[]**](SchemasVclResponse.md) | List of VCL files for this service. | [optional] 
**wordpress** | **object[]** | A list of Wordpress rules with this service. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
