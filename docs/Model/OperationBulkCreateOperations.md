# # OperationBulkCreateOperations

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**method** | **string** | The HTTP method for the operation. |  [one of: 'GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'HEAD', 'OPTIONS', 'CONNECT', 'TRACE']
**domain** | **string** | The domain for the operation. | 
**path** | **string** | The path for the operation. | 
**description** | **string** | A description of what the operation does. | [optional] 
**tag_ids** | **string[]** | An array of tag IDs to associate with this operation. | [optional] 
**status** | **string** | The status to assign to the operation. Defaults to SAVED if omitted. | [optional]  [one of: 'SAVED', 'IGNORED'] [defaults to 'SAVED']


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
