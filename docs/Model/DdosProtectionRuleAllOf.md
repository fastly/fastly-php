# # DdosProtectionRuleAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique ID of the rule. | [optional] 
**name** | **string** | A human-readable name for the rule. | [optional] 
**action** | [**\Fastly\Model\DdosProtectionAction**](DdosProtectionAction.md) |  | [optional] 
**customer_id** | **string** | Alphanumeric string identifying the customer. | [optional] 
**service_id** | **string** | Alphanumeric string identifying the service. | [optional] 
**source_ip** | **string** | Source IP address attribute. | [optional] 
**country_code** | **string** | Country code attribute. | [optional] 
**host** | **string** | Host attribute. | [optional] 
**asn** | **string** | ASN attribute. | [optional] 
**source_ip_prefix** | **string** | Source IP prefix attribute. | [optional] 
**additional_attributes** | **string[]** | Attribute category for additional, unlisted attributes used in a rule. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
