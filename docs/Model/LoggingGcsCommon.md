# # LoggingGcsCommon

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user** | **string** | Your Google Cloud Platform service account email address. The `client_email` field in your service account authentication JSON. Not required if `account_name` is specified. | [optional] 
**secret_key** | **string** | Your Google Cloud Platform account secret key. The `private_key` field in your service account authentication JSON. Not required if `account_name` is specified. | [optional] 
**account_name** | **string** | The name of the Google Cloud Platform service account associated with the target log collection service. Not required if `user` and `secret_key` are provided. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
