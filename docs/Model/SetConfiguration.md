# # SetConfiguration

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**workspace_id** | **string** | The new workspace_id. Required in the `PUT` request body when `product_id` is `ngwaf`. Optional in the `PATCH` request body for `ngwaf`. | [optional] 
**traffic_ramp** | **string** | The new traffic ramp. Optional in the `PATCH` request body for `ngwaf`. | [optional] 
**mode** | **string** | The new mode to run the product in. One of `block`, `log`, or `off`. Optional in the `PATCH` request body for `ddos_protection`. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
