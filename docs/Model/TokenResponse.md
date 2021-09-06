# # TokenResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the token. | [optional]
**scope** | **string** | Space-delimited list of authorization scope. | [optional] [default to SCOPE__GLOBAL]
**services** | **string[]** | List of alphanumeric strings identifying services (optional). If no services are specified, the token will have access to all services on the account. | [optional]
**created_at** | **string** | Time-stamp (UTC) of when the token was created. | [optional]
**deleted_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**updated_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**expires_at** | **string** | Time-stamp (UTC) of when the token will expire (optional). | [optional]
**id** | **string** | Alphanumeric string identifying a token. | [optional] [readonly]
**ip** | **string** | IP Address of the client that last used the token. | [optional]
**last_used_at** | **string** | Time-stamp (UTC) of when the token was last used. | [optional] [readonly]
**user_agent** | **string** | User-Agent header of the client that last used the token. | [optional]
**user_id** | **string** | Alphanumeric string identifying the user. | [optional] [readonly]

[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
