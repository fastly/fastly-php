# # LoggingBigqueryAdditional

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the BigQuery logging object. Used as a primary key for API access. | [optional] 
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). Must produce JSON that matches the schema of your BigQuery table. | [optional] 
**dataset** | **string** | Your BigQuery dataset. | [optional] 
**table** | **string** | Your BigQuery table. | [optional] 
**template_suffix** | **string** | BigQuery table name suffix template. Optional. | [optional] 
**project_id** | **string** | Your Google Cloud Platform project ID. Required | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
