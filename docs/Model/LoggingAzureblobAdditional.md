# # LoggingAzureblobAdditional

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**path** | **string** | The path to upload logs to. | [optional]  [defaults to 'null']
**account_name** | **string** | The unique Azure Blob Storage namespace in which your data objects are stored. Required. | [optional] 
**container** | **string** | The name of the Azure Blob Storage container in which to store logs. Required. | [optional] 
**sas_token** | **string** | The Azure shared access signature providing write access to the blob service objects. Be sure to update your token before it expires or the logging functionality will not work. Required. | [optional] 
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional]  [defaults to 'null']
**file_max_bytes** | **int** | The maximum number of bytes for each uploaded file. A value of 0 can be used to indicate there is no limit on the size of uploaded files, otherwise the minimum value is 1048576 bytes (1 MiB.) | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
