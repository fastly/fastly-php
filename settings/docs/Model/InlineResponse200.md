# # InlineResponse200

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. | [optional] [readonly]
**version** | **int** | Integer identifying a service version. | [optional] [readonly]
**general_default_host** | **string** | The default host name for the version. | [optional]
**general_default_ttl** | **int** | The default time-to-live (TTL) for the version. | [optional]
**general_stale_if_error** | **bool** | Enables serving a stale object if there is an error. | [optional] [default to false]
**general_stale_if_error_ttl** | **int** | The default time-to-live (TTL) for serving the stale object for the version. | [optional] [default to 43200]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
