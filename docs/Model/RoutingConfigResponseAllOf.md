# # RoutingConfigResponseAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Alphanumeric string identifying the routing config. | [optional] [readonly] 
**name** | **string** | The user-defined name for the routing config. | [optional] 
**state** | [**\Fastly\Model\RoutingConfigState**](RoutingConfigState.md) |  | [optional] 
**activated_at** | **\DateTime** | Timestamp of when the version was most recently activated. `null` if the version has never been activated. | [optional] [readonly] 
**links** | **array&lt;string,string&gt;** | HATEOAS links to related resources. | [optional] [readonly] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
