# # AclEntryResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**negated** | **int** | Whether to negate the match. Useful primarily when creating individual exceptions to larger subnets. | [optional]  [one of: 0, 1]
**comment** | **string** | A freeform descriptive note. | [optional] 
**ip** | **string** | An IP address. | [optional] 
**subnet** | **int** | Number of bits for the subnet mask applied to the IP address. For IPv4 addresses, a value of 32 represents the smallest subnet mask (1 address), 24 represents a class C subnet mask (256 addresses), 16 represents a class B subnet mask (65k addresses), and 8 is class A subnet mask (16m addresses). If not provided, no mask is applied. | [optional] 
**created_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**deleted_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**updated_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**acl_id** | **string** |  | [optional] [readonly] 
**id** | **string** |  | [optional] [readonly] 
**service_id** | **string** |  | [optional] [readonly] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
