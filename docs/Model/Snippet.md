# # Snippet

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name for the snippet. | [optional] 
**dynamic** | **int** | Sets the snippet version. | [optional]  [one of: 0, 1]
**type** | **string** | The location in generated VCL where the snippet should be placed. | [optional]  [one of: 'init', 'recv', 'hash', 'hit', 'miss', 'pass', 'fetch', 'error', 'deliver', 'log', 'none']
**content** | **string** | The VCL code that specifies exactly what the snippet does. | [optional] 
**priority** | **int** | Priority determines execution order. Lower numbers execute first. | [optional]  [defaults to 100]


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
