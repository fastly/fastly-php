# # ModelLoggingBigquery

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**deleted_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**updated_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**service_id** | **string** | Alphanumeric string identifying the service. | [optional]
**version** | **int** | Integer identifying a service version. | [optional] [readonly]
**name** | **string** | The name of the BigQuery logging object. Used as a primary key for API access. | [optional]
**placement** | [**\OpenAPI\Client\Model\LoggingPlacement**](LoggingPlacement.md) |  | [optional]
**format_version** | [**\OpenAPI\Client\Model\LoggingFormatVersion**](LoggingFormatVersion.md) |  | [optional]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). Must produce JSON that matches the schema of your BigQuery table. | [optional]
**user** | **string** | Your Google Cloud Platform service account email address. The &#x60;client_email&#x60; field in your service account authentication JSON. Required. | [optional]
**secret_key** | **string** | Your Google Cloud Platform account secret key. The &#x60;private_key&#x60; field in your service account authentication JSON. Required. | [optional]
**dataset** | **string** | Your BigQuery dataset. | [optional]
**table** | **string** | Your BigQuery table. | [optional]
**template_suffix** | **string** | BigQuery table name suffix template. Optional. | [optional]
**project_id** | **string** | Your Google Cloud Platform project ID. Required | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
