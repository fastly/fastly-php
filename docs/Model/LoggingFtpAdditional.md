# # LoggingFtpAdditional

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | **string** | An hostname or IPv4 address. | [optional] 
**hostname** | **string** | Hostname used. | [optional] 
**ipv4** | **string** | IPv4 address of the host. | [optional] 
**password** | **string** | The password for the server. For anonymous use an email address. | [optional] 
**path** | **string** | The path to upload log files to. If the path ends in `/` then it is treated as a directory. | [optional] 
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional]  [defaults to 'null']
**user** | **string** | The username for the server. Can be anonymous. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
