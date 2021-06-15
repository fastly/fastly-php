# # ModelBackendAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | **string** | A hostname, IPv4, or IPv6 address for the backend. This is the preferred way to specify the location of your backend. | [optional]
**auto_loadbalance** | **bool** | Whether or not this backend should be automatically load balanced. If true, all backends with this setting that don&#39;t have a &#x60;request_condition&#x60; will be selected based on their &#x60;weight&#x60;. | [optional]
**between_bytes_timeout** | **int** | Maximum duration in milliseconds that Fastly will wait while receiving no data on a download from a backend. If exceeded, the response received so far will be considered complete and the fetch will end. May be set at runtime using &#x60;bereq.between_bytes_timeout&#x60;. | [optional]
**client_cert** | **string** | Unused. | [optional]
**comment** | **string** | A freeform descriptive note. | [optional] [default to '']
**connect_timeout** | **int** | Maximum duration in milliseconds to wait for a connection to this backend to be established. If exceeded, the connection is aborted and a synthethic &#x60;503&#x60; response will be presented instead. May be set at runtime using &#x60;bereq.connect_timeout&#x60;. | [optional]
**first_byte_timeout** | **int** | Maximum duration in milliseconds to wait for the server response to begin after a TCP connection is established and the request has been sent. If exceeded, the connection is aborted and a synthethic &#x60;503&#x60; response will be presented instead. May be set at runtime using &#x60;bereq.first_byte_timeout&#x60;. | [optional]
**healthcheck** | **string** | The name of the healthcheck to use with this backend. | [optional]
**hostname** | **string** | The hostname of the backend. May be used as an alternative to &#x60;address&#x60; to set the backend location. | [optional]
**ipv4** | **string** | IPv4 address of the backend. May be used as an alternative to &#x60;address&#x60; to set the backend location. | [optional]
**ipv6** | **string** | IPv6 address of the backend. May be used as an alternative to &#x60;address&#x60; to set the backend location. | [optional]
**locked** | **bool** | Indicates whether the version of the service this backend is attached to accepts edits. | [optional] [readonly]
**max_conn** | **int** | Maximum number of concurrent connections this backend will accept. | [optional]
**max_tls_version** | **string** | Maximum allowed TLS version on SSL connections to this backend. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic &#x60;503&#x60; error response will be generated. | [optional]
**min_tls_version** | **string** | Minimum allowed TLS version on SSL connections to this backend. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic &#x60;503&#x60; error response will be generated. | [optional]
**name** | **string** | The name of the backend. | [optional]
**override_host** | **string** | If set, will replace the client-supplied HTTP &#x60;Host&#x60; header on connections to this backend. Applied after VCL has been processed, so this setting will take precedence over changing &#x60;bereq.http.Host&#x60; in VCL. | [optional]
**port** | **int** | Port on which the backend server is listening for connections from Fastly. Setting &#x60;port&#x60; to 80 or 443 will also set &#x60;use_ssl&#x60; automatically (to false and true respectively), unless explicitly overridden by setting &#x60;use_ssl&#x60; in the same request. | [optional]
**request_condition** | **string** | Name of a Condition, which if satisfied, will select this backend during a request. If set, will override any &#x60;auto_loadbalance&#x60; setting. By default, the first backend added to a service is selected for all requests. | [optional]
**shield** | **string** | Data center POP code of the data center to use as a [shield](https://docs.fastly.com/en/guides/shielding). | [optional]
**ssl_ca_cert** | **string** | CA certificate attached to origin. | [optional]
**ssl_cert_hostname** | **string** | Overrides &#x60;ssl_hostname&#x60;, but only for cert verification. Does not affect SNI at all. | [optional]
**ssl_check_cert** | **bool** | Be strict on checking SSL certs. | [optional] [default to true]
**ssl_ciphers** | **string** | List of [OpenSSL ciphers](https://www.openssl.org/docs/manmaster/man1/ciphers.html) to support for connections to this origin. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic &#x60;503&#x60; error response will be generated. | [optional]
**ssl_client_cert** | **string** | Client certificate attached to origin. | [optional]
**ssl_client_key** | **string** | Client key attached to origin. | [optional]
**ssl_hostname** | **string** | Use &#x60;ssl_cert_hostname&#x60; and &#x60;ssl_sni_hostname&#x60; to configure certificate validation. | [optional]
**ssl_sni_hostname** | **string** | Overrides &#x60;ssl_hostname&#x60;, but only for SNI in the handshake. Does not affect cert validation at all. | [optional]
**use_ssl** | **bool** | Whether or not to require TLS for connections to this backend. | [optional]
**weight** | **int** | Weight used to load balance this backend against others. May be any positive integer. If &#x60;auto_loadbalance&#x60; is true, the chance of this backend being selected is equal to its own weight over the sum of all weights for backends that have &#x60;auto_loadbalance&#x60; set to true. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
