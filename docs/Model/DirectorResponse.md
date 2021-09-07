# # DirectorResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**backends** | [**\Fastly\Model\SchemasBackend[]**](SchemasBackend.md) | List of backends associated to a director. | [optional]
**capacity** | **int** | Unused. | [optional]
**comment** | **string** | A freeform descriptive note. | [optional]
**name** | **string** | Name for the Director. | [optional]
**quorum** | **int** | The percentage of capacity that needs to be up for a director to be considered up. &#x60;0&#x60; to &#x60;100&#x60;. | [optional] [default to 75]
**retries** | **int** | How many backends to search if it fails. | [optional] [default to 5]
**shield** | **string** | Selected POP to serve as a shield for the backends. Defaults to &#x60;null&#x60; meaning no origin shielding if not set. Refer to the [POPs API endpoint](/reference/api/utils/pops/) to get a list of available POPs used for shielding. | [optional] [default to 'null']
**type** | **int** | What type of load balance group to use. | [optional] [default to TYPE_random]
**service_id** | **string** | Alphanumeric string identifying the service. | [optional] [readonly]
**version** | **int** | Integer identifying a service version. | [optional] [readonly]
**created_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**deleted_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**updated_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]

[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
