# # PoolResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tls_ca_cert** | **string** | A secure certificate to authenticate a server with. Must be in PEM format. | [optional]  [defaults to 'null']
**tls_client_cert** | **string** | The client certificate used to make authenticated requests. Must be in PEM format. | [optional]  [defaults to 'null']
**tls_client_key** | **string** | The client private key used to make authenticated requests. Must be in PEM format. | [optional]  [defaults to 'null']
**tls_cert_hostname** | **string** | The hostname used to verify a server&#39;s certificate. It can either be the Common Name (CN) or a Subject Alternative Name (SAN). | [optional]  [defaults to 'null']
**use_tls** | **string** | Whether to use TLS. | [optional]  [one of: '0', '1'] [defaults to '0']
**created_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**deleted_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**updated_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**service_id** | **string** |  | [optional] [readonly] 
**version** | **string** |  | [optional] [readonly] 
**name** | **string** | Name for the Pool. | [optional] 
**shield** | **string** | Selected POP to serve as a shield for the servers. Defaults to `null` meaning no origin shielding if not set. Refer to the [POPs API endpoint](https://www.fastly.com/documentation/reference/api/utils/pops/) to get a list of available POPs used for shielding. | [optional]  [defaults to 'null']
**request_condition** | **string** | Condition which, if met, will select this configuration during a request. Optional. | [optional] 
**tls_ciphers** | **string** | List of OpenSSL ciphers (see the [openssl.org manpages](https://www.openssl.org/docs/man1.1.1/man1/ciphers.html) for details). Optional. | [optional] 
**tls_sni_hostname** | **string** | SNI hostname. Optional. | [optional] 
**min_tls_version** | **int** | Minimum allowed TLS version on connections to this server. Optional. | [optional] 
**max_tls_version** | **int** | Maximum allowed TLS version on connections to this server. Optional. | [optional] 
**healthcheck** | **string** | Name of the healthcheck to use with this pool. Can be empty and could be reused across multiple backend and pools. | [optional] 
**comment** | **string** | A freeform descriptive note. | [optional] 
**type** | **string** | What type of load balance group to use. | [optional]  [one of: 'random', 'hash', 'client']
**override_host** | **string** | The hostname to [override the Host header](https://www.fastly.com/documentation/guides/full-site-delivery/domains-and-origins/specifying-an-override-host/). Defaults to `null` meaning no override of the Host header will occur. This setting can also be added to a Server definition. If the field is set on a Server definition it will override the Pool setting. | [optional]  [defaults to 'null']
**between_bytes_timeout** | **string** | Maximum duration in milliseconds that Fastly will wait while receiving no data on a download from a backend. If exceeded, for Delivery services, the response received so far will be considered complete and the fetch will end. For Compute services, timeout expiration is treated as a failure of the backend connection, and an error is generated. May be set at runtime using `bereq.between_bytes_timeout`. | [optional] 
**connect_timeout** | **string** | How long to wait for a timeout in milliseconds. | [optional] 
**first_byte_timeout** | **string** | How long to wait for the first byte in milliseconds. | [optional] 
**max_conn_default** | **string** | Maximum number of connections. | [optional]  [defaults to '200']
**tls_check_cert** | **string** | Be strict on checking TLS certs. | [optional] 
**id** | **string** |  | [optional] [readonly] 
**quorum** | **string** | Percentage of capacity (`0-100`) that needs to be operationally available for a pool to be considered up. | [optional]  [defaults to '75']


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
