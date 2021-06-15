# # ModelAclEntryAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**acl_id** | **string** | Alphanumeric string identifying a ACL. | [optional] [readonly]
**negated** | **int** | Whether to negate the match. Useful primarily when creating individual exceptions to larger subnets. | [optional] [default to NEGATED_0]
**comment** | **string** | A freeform descriptive note. | [optional] [default to '']
**ip** | **string** | An IP address. | [optional]
**subnet** | **int** | Number of bits for the subnet mask applied to the IP address.  For IPv4 addresses, a value of 32 represents the smallest subnet mask (1 address), 24 represents a class C subnet mask (256 addresses), 16 represents a class B subnet mask (65k addresses),  and 8 is class A subnet mask (16m addresses). If not provided, no mask is applied. | [optional]
**id** | **string** | Alphanumeric string identifying an ACL Entry. | [optional] [readonly]
**service_id** | **string** | Alphanumeric string identifying the service. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
