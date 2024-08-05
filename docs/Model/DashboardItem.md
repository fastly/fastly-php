# # DashboardItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | A human-readable title for the dashboard item | 
**subtitle** | **string** | A human-readable subtitle for the dashboard item. Often a description of the visualization. | 
**data_source** | [**\Fastly\Model\DashboardItemPropertyDataSource**](DashboardItemPropertyDataSource.md) |  | 
**visualization** | [**\Fastly\Model\DashboardItemPropertyVisualization**](DashboardItemPropertyVisualization.md) |  | 
**id** | **string** | Dashboard item identifier (UUID) | [optional] [readonly] 
**span** | **int** | The number of columns for the dashboard item to span. Dashboards are rendered on a 12-column grid on \&quot;desktop\&quot; screen sizes. | [optional]  [defaults to 4]


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
