# # PoolResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tls_ca_cert** | **string** | A secure certificate to authenticate a server with. Must be in PEM format. | [optional] [default to 'null']
**tls_client_cert** | **string** | The client certificate used to make authenticated requests. Must be in PEM format. | [optional] [default to 'null']
**tls_client_key** | **string** | The client private key used to make authenticated requests. Must be in PEM format. | [optional] [default to 'null']
**tls_cert_hostname** | **string** | The hostname used to verify a server&#39;s certificate. It can either be the Common Name (CN) or a Subject Alternative Name (SAN). | [optional] [default to 'null']
**use_tls** | **int** | Whether to use TLS. | [optional] [default to USE_TLS_no_tls]
**name** | **string** | Name for the Pool. | [optional]
**shield** | **string** | Selected POP to serve as a shield for the servers. Defaults to &#x60;null&#x60; meaning no origin shielding if not set. Refer to the [datacenters API endpoint](/reference/api/utils/datacenter/) to get a list of available POPs used for shielding. | [optional] [default to 'null']
**request_condition** | **string** | Condition which, if met, will select this configuration during a request. Optional. | [optional]
**max_conn_default** | **int** | Maximum number of connections. | [optional]
**connect_timeout** | **int** | How long to wait for a timeout in milliseconds. Optional. | [optional]
**first_byte_timeout** | **int** | How long to wait for the first byte in milliseconds. Optional. | [optional]
**quorum** | **int** | Percentage of capacity (&#x60;0-100&#x60;) that needs to be operationally available for a pool to be considered up. | [optional] [default to 75]
**tls_ciphers** | **string** | List of OpenSSL ciphers (see the [openssl.org manpages](https://www.openssl.org/docs/man1.0.2/man1/ciphers) for details). Optional. | [optional]
**tls_sni_hostname** | **string** | SNI hostname. Optional. | [optional]
**tls_check_cert** | **int** | Be strict on checking TLS certs. Optional. | [optional]
**min_tls_version** | **int** | Minimum allowed TLS version on connections to this server. Optional. | [optional]
**max_tls_version** | **int** | Maximum allowed TLS version on connections to this server. Optional. | [optional]
**healthcheck** | **string** | Name of the healthcheck to use with this pool. Can be empty and could be reused across multiple backend and pools. | [optional]
**comment** | **string** | A freeform descriptive note. | [optional]
**type** | **string** | What type of load balance group to use. | [optional]
**override_host** | **string** | The hostname to [override the Host header](https://docs.fastly.com/en/guides/specifying-an-override-host). Defaults to &#x60;null&#x60; meaning no override of the Host header will occur. This setting can also be added to a Server definition. If the field is set on a Server definition it will override the Pool setting. | [optional] [default to 'null']
**created_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**deleted_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**updated_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly]
**service_id** | **string** | Alphanumeric string identifying the service. | [optional] [readonly]
**version** | **int** | Integer identifying a service version. | [optional] [readonly]
**id** | **string** | Alphanumeric string identifying a Pool. | [optional] [readonly]

[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
