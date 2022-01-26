# # Pool

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tls_ca_cert** | **string** | A secure certificate to authenticate a server with. Must be in PEM format. | [optional]  [defaults to 'null']
**tls_client_cert** | **string** | The client certificate used to make authenticated requests. Must be in PEM format. | [optional]  [defaults to 'null']
**tls_client_key** | **string** | The client private key used to make authenticated requests. Must be in PEM format. | [optional]  [defaults to 'null']
**tls_cert_hostname** | **string** | The hostname used to verify a server&#39;s certificate. It can either be the Common Name (CN) or a Subject Alternative Name (SAN). | [optional]  [defaults to 'null']
**use_tls** | **int** | Whether to use TLS. | [optional]  [one of: 0, 1]
**name** | **string** | Name for the Pool. | [optional] 
**shield** | **string** | Selected POP to serve as a shield for the servers. Defaults to `null` meaning no origin shielding if not set. Refer to the [POPs API endpoint](/reference/api/utils/pops/) to get a list of available POPs used for shielding. | [optional]  [defaults to 'null']
**request_condition** | **string** | Condition which, if met, will select this configuration during a request. Optional. | [optional] 
**max_conn_default** | **int** | Maximum number of connections. Optional. | [optional]  [defaults to 200]
**connect_timeout** | **int** | How long to wait for a timeout in milliseconds. Optional. | [optional] 
**first_byte_timeout** | **int** | How long to wait for the first byte in milliseconds. Optional. | [optional] 
**quorum** | **int** | Percentage of capacity (`0-100`) that needs to be operationally available for a pool to be considered up. | [optional]  [defaults to 75]
**tls_ciphers** | **string** | List of OpenSSL ciphers (see the [openssl.org manpages](https://www.openssl.org/docs/man1.1.1/man1/ciphers.html) for details). Optional. | [optional] 
**tls_sni_hostname** | **string** | SNI hostname. Optional. | [optional] 
**tls_check_cert** | **int** | Be strict on checking TLS certs. Optional. | [optional] 
**min_tls_version** | **int** | Minimum allowed TLS version on connections to this server. Optional. | [optional] 
**max_tls_version** | **int** | Maximum allowed TLS version on connections to this server. Optional. | [optional] 
**healthcheck** | **string** | Name of the healthcheck to use with this pool. Can be empty and could be reused across multiple backend and pools. | [optional] 
**comment** | **string** | A freeform descriptive note. | [optional] 
**type** | **string** | What type of load balance group to use. | [optional]  [one of: 'random', 'hash', 'client']
**override_host** | **string** | The hostname to [override the Host header](https://docs.fastly.com/en/guides/specifying-an-override-host). Defaults to `null` meaning no override of the Host header will occur. This setting can also be added to a Server definition. If the field is set on a Server definition it will override the Pool setting. | [optional]  [defaults to 'null']


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
