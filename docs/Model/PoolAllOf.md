# # PoolAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**comment** | **string** | A freeform descriptive note. | [optional]
**connect_timeout** | **int** | How long to wait for a timeout in milliseconds. Optional. | [optional]
**first_byte_timeout** | **int** | How long to wait for the first byte in milliseconds. Optional. | [optional]
**healthcheck** | **string** | Name of the healthcheck to use with this pool. Can be empty and could be reused across multiple backend and pools. | [optional]
**max_conn_default** | **int** | Maximum number of connections. | [optional]
**max_tls_version** | **int** | Maximum allowed TLS version on connections to this server. Optional. | [optional]
**min_tls_version** | **int** | Minimum allowed TLS version on connections to this server. Optional. | [optional]
**name** | **string** | Name for the Pool. | [optional]
**override_host** | **string** | The hostname to [override the Host header](https://docs.fastly.com/en/guides/specifying-an-override-host). Defaults to &#x60;null&#x60; meaning no override of the Host header will occur. This setting can also be added to a Server definition. If the field is set on a Server definition it will override the Pool setting. | [optional] [default to 'null']
**quorum** | **int** | Percentage of capacity (&#x60;0-100&#x60;) that needs to be operationally available for a pool to be considered up. | [optional] [default to 75]
**request_condition** | **string** | Condition which, if met, will select this configuration during a request. Optional. | [optional]
**shield** | **string** | Selected POP to serve as a shield for the servers. Defaults to &#x60;null&#x60; meaning no origin shielding if not set. Refer to the [POPs API endpoint](/reference/api/utils/pops/) to get a list of available POPs used for shielding. | [optional] [default to 'null']
**tls_check_cert** | **int** | Be strict on checking TLS certs. Optional. | [optional]
**tls_ciphers** | **string** | List of OpenSSL ciphers (see the [openssl.org manpages](https://www.openssl.org/docs/man1.0.2/man1/ciphers) for details). Optional. | [optional]
**tls_sni_hostname** | **string** | SNI hostname. Optional. | [optional]
**type** | **string** | What type of load balance group to use. | [optional]

[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
