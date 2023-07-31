# # LoggingCloudfilesAdditional

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access_key** | **string** | Your Cloud Files account access key. | [optional] 
**bucket_name** | **string** | The name of your Cloud Files container. | [optional] 
**path** | **string** | The path to upload logs to. | [optional]  [defaults to 'null']
**region** | **string** | The region to stream logs to. | [optional]  [one of: 'DFW', 'ORD', 'IAD', 'LON', 'SYD', 'HKG', 'null']
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional]  [defaults to 'null']
**user** | **string** | The username for your Cloud Files account. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
