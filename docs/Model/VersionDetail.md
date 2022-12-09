# # VersionDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
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
