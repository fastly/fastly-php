# # TlsDnsRecord

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**region** | **string** | Specifies the regions that will be used to route traffic. Select DNS records with a `global` region to route traffic to the most performant point of presence (POP) worldwide (global pricing will apply). Select DNS records with a `na/eu` region to exclusively land traffic on North American and European POPs. | [optional]  [one of: 'custom', 'global', 'na/eu']
**record_type** | **string** | The type of the DNS record. `A` specifies an IPv4 address to be used for an A record to be used for apex domains (e.g., `example.com`). `AAAA` specifies an IPv6 address for use in an A record for apex domains. `CNAME` specifies the hostname to be used for a CNAME record for subdomains or wildcard domains (e.g., `www.example.com` or `*.example.com`). | [optional]  [one of: 'CNAME', 'A', 'AAAA']


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
