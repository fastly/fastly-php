# # Batch

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | A descriptor for the response of the entire batch | [optional] 
**type** | **string** | If an error is present in any of the requests, this field will describe that error | [optional] 
**errors** | [**\Fastly\Model\BatchErrors[]**](BatchErrors.md) | Per-key errors which failed to parse, validate, or otherwise transmit | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
