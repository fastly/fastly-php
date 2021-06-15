# # ModelTokenCreated

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Alphanumeric string identifying a token. | [optional] [readonly]
**user_id** | **string** | Alphanumeric string identifying the user. | [optional]
**services** | **string[]** | List of alphanumeric strings identifying services (optional). If no services are specified, the token will have access to all services on the account. | [optional]
**name** | **string** | Name of the token. | [optional]
**scope** | **string** | Space-delimited list of authorization scope. | [optional] [default to SCOPE__GLOBAL]
**created_at** | **string** | Time-stamp (UTC) of when the token was created. | [optional]
**last_used_at** | **string** | Time-stamp (UTC) of when the token was last used. | [optional] [readonly]
**expires_at** | **string** | Time-stamp (UTC) of when the token will expire (optional). | [optional]
**ip** | **string** | IP Address of the client that last used the token. | [optional]
**user_agent** | **string** | User-Agent header of the client that last used the token. | [optional]
**access_token** | **string** | The alphanumeric string for accessing the API (only available on token creation). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
