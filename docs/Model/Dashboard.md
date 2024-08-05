# # Dashboard

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Dashboard identifier (UUID) | [optional] [readonly] 
**name** | **string** | A human-readable name | [optional] 
**description** | **string** | A short description of the dashboard | [optional] 
**items** | [**\Fastly\Model\DashboardItem[]**](DashboardItem.md) | A list of [dashboard items](#dashboard-item). | [optional] 
**created_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**updated_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**created_by** | [**\Fastly\Model\DashboardPropertyCreatedBy**](DashboardPropertyCreatedBy.md) |  | [optional] 
**updated_by** | [**\Fastly\Model\DashboardPropertyUpdatedBy**](DashboardPropertyUpdatedBy.md) |  | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
