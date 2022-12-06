# # DirectorResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**backends** | [**\Fastly\Model\Backend[]**](Backend.md) | List of backends associated to a director. | [optional] 
**capacity** | **int** | Unused. | [optional] 
**comment** | **string** | A freeform descriptive note. | [optional] 
**name** | **string** | Name for the Director. | [optional] 
**quorum** | **int** | The percentage of capacity that needs to be up for a director to be considered up. `0` to `100`. | [optional]  [defaults to 75]
**shield** | **string** | Selected POP to serve as a shield for the backends. Defaults to `null` meaning no origin shielding if not set. Refer to the [POPs API endpoint](/reference/api/utils/pops/) to get a list of available POPs used for shielding. | [optional]  [defaults to 'null']
**type** | **int** | What type of load balance group to use. | [optional]  [one of: 1, 3, 4]
**retries** | **int** | How many backends to search if it fails. | [optional]  [defaults to 5]
**service_id** | **string** |  | [optional] [readonly] 
**version** | **int** |  | [optional] [readonly] 
**created_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**deleted_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**updated_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
