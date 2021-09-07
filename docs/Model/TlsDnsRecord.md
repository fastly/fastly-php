# # TlsDnsRecord

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The IP address or hostname of the DNS record. | [optional]
**record_type** | **string** | The type of the DNS record. &#x60;A&#x60; specifies an IPv4 address to be used for an A record to be used for apex domains (e.g., &#x60;example.com&#x60;). &#x60;AAAA&#x60; specifies an IPv6 address for use in an A record for apex domains. &#x60;CNAME&#x60; specifies the hostname to be used for a CNAME record for subdomains or wildcard domains (e.g., &#x60;www.example.com&#x60; or &#x60;*.example.com&#x60;). | [optional]
**region** | **string** | Specifies the regions that will be used to route traffic. Select DNS Records with a &#x60;global&#x60; region to route traffic to the most performant point of presence (POP) worldwide (global pricing will apply). Select DNS records with a &#x60;us-eu&#x60; region to exclusively land traffic on North American and European POPs. | [optional]

[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
