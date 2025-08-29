# Fastly\Api\BackendApi


```php
$apiInstance = new Fastly\Api\BackendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
```

## Methods

> [!NOTE]
> All URIs are relative to `https://api.fastly.com`

Method | HTTP request | Description
------ | ------------ | -----------
[**createBackend()**](BackendApi.md#createBackend) | **POST** /service/{service_id}/version/{version_id}/backend | Create a backend
[**deleteBackend()**](BackendApi.md#deleteBackend) | **DELETE** /service/{service_id}/version/{version_id}/backend/{backend_name} | Delete a backend
[**getBackend()**](BackendApi.md#getBackend) | **GET** /service/{service_id}/version/{version_id}/backend/{backend_name} | Describe a backend
[**listBackends()**](BackendApi.md#listBackends) | **GET** /service/{service_id}/version/{version_id}/backend | List backends
[**updateBackend()**](BackendApi.md#updateBackend) | **PUT** /service/{service_id}/version/{version_id}/backend/{backend_name} | Update a backend


## `createBackend()`

```php
createBackend($options): \Fastly\Model\BackendResponse // Create a backend
```

Create a backend for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['address'] = 'address_example'; // string | A hostname, IPv4, or IPv6 address for the backend. This is the preferred way to specify the location of your backend.
$options['auto_loadbalance'] = True; // bool | Whether or not this backend should be automatically load balanced. If true, all backends with this setting that don't have a `request_condition` will be selected based on their `weight`.
$options['between_bytes_timeout'] = 56; // int | Maximum duration in milliseconds that Fastly will wait while receiving no data on a download from a backend. If exceeded, for Delivery services, the response received so far will be considered complete and the fetch will end. For Compute services, timeout expiration is treated as a failure of the backend connection, and an error is generated. May be set at runtime using `bereq.between_bytes_timeout`.
$options['client_cert'] = 'client_cert_example'; // string | Unused.
$options['comment'] = 'comment_example'; // string | A freeform descriptive note.
$options['connect_timeout'] = 56; // int | Maximum duration in milliseconds to wait for a connection to this backend to be established. If exceeded, the connection is aborted and a synthetic `503` response will be presented instead. May be set at runtime using `bereq.connect_timeout`.
$options['first_byte_timeout'] = 56; // int | Maximum duration in milliseconds to wait for the server response to begin after a TCP connection is established and the request has been sent. If exceeded, the connection is aborted and a synthetic `503` response will be presented instead. May be set at runtime using `bereq.first_byte_timeout`.
$options['healthcheck'] = 'healthcheck_example'; // string | The name of the healthcheck to use with this backend.
$options['hostname'] = 'hostname_example'; // string | The hostname of the backend. May be used as an alternative to `address` to set the backend location.
$options['ipv4'] = 'ipv4_example'; // string | IPv4 address of the backend. May be used as an alternative to `address` to set the backend location.
$options['ipv6'] = 'ipv6_example'; // string | IPv6 address of the backend. May be used as an alternative to `address` to set the backend location.
$options['keepalive_time'] = 56; // int | How long in seconds to keep a persistent connection to the backend between requests. By default, Varnish keeps connections open as long as it can.
$options['max_conn'] = 56; // int | Maximum number of concurrent connections this backend will accept.
$options['max_tls_version'] = 'max_tls_version_example'; // string | Maximum allowed TLS version on SSL connections to this backend. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic `503` error response will be generated.
$options['min_tls_version'] = 'min_tls_version_example'; // string | Minimum allowed TLS version on SSL connections to this backend. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic `503` error response will be generated.
$options['name'] = 'name_example'; // string | The name of the backend.
$options['override_host'] = 'override_host_example'; // string | If set, will replace the client-supplied HTTP `Host` header on connections to this backend. Applied after VCL has been processed, so this setting will take precedence over changing `bereq.http.Host` in VCL.
$options['port'] = 56; // int | Port on which the backend server is listening for connections from Fastly. Setting `port` to 80 or 443 will also set `use_ssl` automatically (to false and true respectively), unless explicitly overridden by setting `use_ssl` in the same request.
$options['prefer_ipv6'] = True; // bool | Prefer IPv6 connections to origins for hostname backends. Default is 'false' for Delivery services and 'true' for Compute services.
$options['request_condition'] = 'request_condition_example'; // string | Name of a Condition, which if satisfied, will select this backend during a request. If set, will override any `auto_loadbalance` setting. By default, the first backend added to a service is selected for all requests.
$options['share_key'] = 'share_key_example'; // string | Value that when shared across backends will enable those backends to share the same health check.
$options['shield'] = 'shield_example'; // string | Identifier of the POP to use as a [shield](https://www.fastly.com/documentation/guides/getting-started/hosts/shielding/).
$options['ssl_ca_cert'] = 'ssl_ca_cert_example'; // string | CA certificate attached to origin.
$options['ssl_cert_hostname'] = 'ssl_cert_hostname_example'; // string | Overrides `ssl_hostname`, but only for cert verification. Does not affect SNI at all.
$options['ssl_check_cert'] = true; // bool | Be strict on checking SSL certs.
$options['ssl_ciphers'] = 'ssl_ciphers_example'; // string | List of [OpenSSL ciphers](https://www.openssl.org/docs/man1.1.1/man1/ciphers.html) to support for connections to this origin. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic `503` error response will be generated.
$options['ssl_client_cert'] = 'ssl_client_cert_example'; // string | Client certificate attached to origin.
$options['ssl_client_key'] = 'ssl_client_key_example'; // string | Client key attached to origin.
$options['ssl_hostname'] = 'ssl_hostname_example'; // string | Use `ssl_cert_hostname` and `ssl_sni_hostname` to configure certificate validation.
$options['ssl_sni_hostname'] = 'ssl_sni_hostname_example'; // string | Overrides `ssl_hostname`, but only for SNI in the handshake. Does not affect cert validation at all.
$options['tcp_keepalive_enable'] = True; // bool | Whether to enable TCP keepalives for backend connections. Varnish defaults to using keepalives if this is unspecified.
$options['tcp_keepalive_interval'] = 10; // int | Interval in seconds between subsequent keepalive probes.
$options['tcp_keepalive_probes'] = 3; // int | Number of unacknowledged probes to send before considering the connection dead.
$options['tcp_keepalive_time'] = 300; // int | Interval in seconds between the last data packet sent and the first keepalive probe.
$options['use_ssl'] = True; // bool | Whether or not to require TLS for connections to this backend.
$options['weight'] = 56; // int | Weight used to load balance this backend against others. May be any positive integer. If `auto_loadbalance` is true, the chance of this backend being selected is equal to its own weight over the sum of all weights for backends that have `auto_loadbalance` set to true.

try {
    $result = $apiInstance->createBackend($options);
} catch (Exception $e) {
    echo 'Exception when calling BackendApi->createBackend: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**address** | **string** | A hostname, IPv4, or IPv6 address for the backend. This is the preferred way to specify the location of your backend. | [optional]
**auto_loadbalance** | **bool** | Whether or not this backend should be automatically load balanced. If true, all backends with this setting that don&#39;t have a `request_condition` will be selected based on their `weight`. | [optional]
**between_bytes_timeout** | **int** | Maximum duration in milliseconds that Fastly will wait while receiving no data on a download from a backend. If exceeded, for Delivery services, the response received so far will be considered complete and the fetch will end. For Compute services, timeout expiration is treated as a failure of the backend connection, and an error is generated. May be set at runtime using `bereq.between_bytes_timeout`. | [optional]
**client_cert** | **string** | Unused. | [optional]
**comment** | **string** | A freeform descriptive note. | [optional]
**connect_timeout** | **int** | Maximum duration in milliseconds to wait for a connection to this backend to be established. If exceeded, the connection is aborted and a synthetic `503` response will be presented instead. May be set at runtime using `bereq.connect_timeout`. | [optional]
**first_byte_timeout** | **int** | Maximum duration in milliseconds to wait for the server response to begin after a TCP connection is established and the request has been sent. If exceeded, the connection is aborted and a synthetic `503` response will be presented instead. May be set at runtime using `bereq.first_byte_timeout`. | [optional]
**healthcheck** | **string** | The name of the healthcheck to use with this backend. | [optional]
**hostname** | **string** | The hostname of the backend. May be used as an alternative to `address` to set the backend location. | [optional]
**ipv4** | **string** | IPv4 address of the backend. May be used as an alternative to `address` to set the backend location. | [optional]
**ipv6** | **string** | IPv6 address of the backend. May be used as an alternative to `address` to set the backend location. | [optional]
**keepalive_time** | **int** | How long in seconds to keep a persistent connection to the backend between requests. By default, Varnish keeps connections open as long as it can. | [optional]
**max_conn** | **int** | Maximum number of concurrent connections this backend will accept. | [optional]
**max_tls_version** | **string** | Maximum allowed TLS version on SSL connections to this backend. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic `503` error response will be generated. | [optional]
**min_tls_version** | **string** | Minimum allowed TLS version on SSL connections to this backend. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic `503` error response will be generated. | [optional]
**name** | **string** | The name of the backend. | [optional]
**override_host** | **string** | If set, will replace the client-supplied HTTP `Host` header on connections to this backend. Applied after VCL has been processed, so this setting will take precedence over changing `bereq.http.Host` in VCL. | [optional]
**port** | **int** | Port on which the backend server is listening for connections from Fastly. Setting `port` to 80 or 443 will also set `use_ssl` automatically (to false and true respectively), unless explicitly overridden by setting `use_ssl` in the same request. | [optional]
**prefer_ipv6** | **bool** | Prefer IPv6 connections to origins for hostname backends. Default is &#39;false&#39; for Delivery services and &#39;true&#39; for Compute services. | [optional]
**request_condition** | **string** | Name of a Condition, which if satisfied, will select this backend during a request. If set, will override any `auto_loadbalance` setting. By default, the first backend added to a service is selected for all requests. | [optional]
**share_key** | **string** | Value that when shared across backends will enable those backends to share the same health check. | [optional]
**shield** | **string** | Identifier of the POP to use as a [shield](https://www.fastly.com/documentation/guides/getting-started/hosts/shielding/). | [optional]
**ssl_ca_cert** | **string** | CA certificate attached to origin. | [optional]
**ssl_cert_hostname** | **string** | Overrides `ssl_hostname`, but only for cert verification. Does not affect SNI at all. | [optional]
**ssl_check_cert** | **bool** | Be strict on checking SSL certs. | [optional] [defaults to true]
**ssl_ciphers** | **string** | List of [OpenSSL ciphers](https://www.openssl.org/docs/man1.1.1/man1/ciphers.html) to support for connections to this origin. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic `503` error response will be generated. | [optional]
**ssl_client_cert** | **string** | Client certificate attached to origin. | [optional]
**ssl_client_key** | **string** | Client key attached to origin. | [optional]
**ssl_hostname** | **string** | Use `ssl_cert_hostname` and `ssl_sni_hostname` to configure certificate validation. | [optional]
**ssl_sni_hostname** | **string** | Overrides `ssl_hostname`, but only for SNI in the handshake. Does not affect cert validation at all. | [optional]
**tcp_keepalive_enable** | **bool** | Whether to enable TCP keepalives for backend connections. Varnish defaults to using keepalives if this is unspecified. | [optional]
**tcp_keepalive_interval** | **int** | Interval in seconds between subsequent keepalive probes. | [optional] [defaults to 10]
**tcp_keepalive_probes** | **int** | Number of unacknowledged probes to send before considering the connection dead. | [optional] [defaults to 3]
**tcp_keepalive_time** | **int** | Interval in seconds between the last data packet sent and the first keepalive probe. | [optional] [defaults to 300]
**use_ssl** | **bool** | Whether or not to require TLS for connections to this backend. | [optional]
**weight** | **int** | Weight used to load balance this backend against others. May be any positive integer. If `auto_loadbalance` is true, the chance of this backend being selected is equal to its own weight over the sum of all weights for backends that have `auto_loadbalance` set to true. | [optional]

### Return type

[**\Fastly\Model\BackendResponse**](../Model/BackendResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteBackend()`

```php
deleteBackend($options): \Fastly\Model\InlineResponse200 // Delete a backend
```

Delete the backend for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['backend_name'] = 'backend_name_example'; // string | The name of the backend.

try {
    $result = $apiInstance->deleteBackend($options);
} catch (Exception $e) {
    echo 'Exception when calling BackendApi->deleteBackend: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**backend_name** | **string** | The name of the backend. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getBackend()`

```php
getBackend($options): \Fastly\Model\BackendResponse // Describe a backend
```

Get the backend for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['backend_name'] = 'backend_name_example'; // string | The name of the backend.

try {
    $result = $apiInstance->getBackend($options);
} catch (Exception $e) {
    echo 'Exception when calling BackendApi->getBackend: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**backend_name** | **string** | The name of the backend. |

### Return type

[**\Fastly\Model\BackendResponse**](../Model/BackendResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listBackends()`

```php
listBackends($options): \Fastly\Model\BackendResponse[] // List backends
```

List all backends for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

try {
    $result = $apiInstance->listBackends($options);
} catch (Exception $e) {
    echo 'Exception when calling BackendApi->listBackends: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\BackendResponse[]**](../Model/BackendResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateBackend()`

```php
updateBackend($options): \Fastly\Model\BackendResponse // Update a backend
```

Update the backend for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['backend_name'] = 'backend_name_example'; // string | The name of the backend.
$options['address'] = 'address_example'; // string | A hostname, IPv4, or IPv6 address for the backend. This is the preferred way to specify the location of your backend.
$options['auto_loadbalance'] = True; // bool | Whether or not this backend should be automatically load balanced. If true, all backends with this setting that don't have a `request_condition` will be selected based on their `weight`.
$options['between_bytes_timeout'] = 56; // int | Maximum duration in milliseconds that Fastly will wait while receiving no data on a download from a backend. If exceeded, for Delivery services, the response received so far will be considered complete and the fetch will end. For Compute services, timeout expiration is treated as a failure of the backend connection, and an error is generated. May be set at runtime using `bereq.between_bytes_timeout`.
$options['client_cert'] = 'client_cert_example'; // string | Unused.
$options['comment'] = 'comment_example'; // string | A freeform descriptive note.
$options['connect_timeout'] = 56; // int | Maximum duration in milliseconds to wait for a connection to this backend to be established. If exceeded, the connection is aborted and a synthetic `503` response will be presented instead. May be set at runtime using `bereq.connect_timeout`.
$options['first_byte_timeout'] = 56; // int | Maximum duration in milliseconds to wait for the server response to begin after a TCP connection is established and the request has been sent. If exceeded, the connection is aborted and a synthetic `503` response will be presented instead. May be set at runtime using `bereq.first_byte_timeout`.
$options['healthcheck'] = 'healthcheck_example'; // string | The name of the healthcheck to use with this backend.
$options['hostname'] = 'hostname_example'; // string | The hostname of the backend. May be used as an alternative to `address` to set the backend location.
$options['ipv4'] = 'ipv4_example'; // string | IPv4 address of the backend. May be used as an alternative to `address` to set the backend location.
$options['ipv6'] = 'ipv6_example'; // string | IPv6 address of the backend. May be used as an alternative to `address` to set the backend location.
$options['keepalive_time'] = 56; // int | How long in seconds to keep a persistent connection to the backend between requests. By default, Varnish keeps connections open as long as it can.
$options['max_conn'] = 56; // int | Maximum number of concurrent connections this backend will accept.
$options['max_tls_version'] = 'max_tls_version_example'; // string | Maximum allowed TLS version on SSL connections to this backend. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic `503` error response will be generated.
$options['min_tls_version'] = 'min_tls_version_example'; // string | Minimum allowed TLS version on SSL connections to this backend. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic `503` error response will be generated.
$options['name'] = 'name_example'; // string | The name of the backend.
$options['override_host'] = 'override_host_example'; // string | If set, will replace the client-supplied HTTP `Host` header on connections to this backend. Applied after VCL has been processed, so this setting will take precedence over changing `bereq.http.Host` in VCL.
$options['port'] = 56; // int | Port on which the backend server is listening for connections from Fastly. Setting `port` to 80 or 443 will also set `use_ssl` automatically (to false and true respectively), unless explicitly overridden by setting `use_ssl` in the same request.
$options['prefer_ipv6'] = True; // bool | Prefer IPv6 connections to origins for hostname backends. Default is 'false' for Delivery services and 'true' for Compute services.
$options['request_condition'] = 'request_condition_example'; // string | Name of a Condition, which if satisfied, will select this backend during a request. If set, will override any `auto_loadbalance` setting. By default, the first backend added to a service is selected for all requests.
$options['share_key'] = 'share_key_example'; // string | Value that when shared across backends will enable those backends to share the same health check.
$options['shield'] = 'shield_example'; // string | Identifier of the POP to use as a [shield](https://www.fastly.com/documentation/guides/getting-started/hosts/shielding/).
$options['ssl_ca_cert'] = 'ssl_ca_cert_example'; // string | CA certificate attached to origin.
$options['ssl_cert_hostname'] = 'ssl_cert_hostname_example'; // string | Overrides `ssl_hostname`, but only for cert verification. Does not affect SNI at all.
$options['ssl_check_cert'] = true; // bool | Be strict on checking SSL certs.
$options['ssl_ciphers'] = 'ssl_ciphers_example'; // string | List of [OpenSSL ciphers](https://www.openssl.org/docs/man1.1.1/man1/ciphers.html) to support for connections to this origin. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic `503` error response will be generated.
$options['ssl_client_cert'] = 'ssl_client_cert_example'; // string | Client certificate attached to origin.
$options['ssl_client_key'] = 'ssl_client_key_example'; // string | Client key attached to origin.
$options['ssl_hostname'] = 'ssl_hostname_example'; // string | Use `ssl_cert_hostname` and `ssl_sni_hostname` to configure certificate validation.
$options['ssl_sni_hostname'] = 'ssl_sni_hostname_example'; // string | Overrides `ssl_hostname`, but only for SNI in the handshake. Does not affect cert validation at all.
$options['tcp_keepalive_enable'] = True; // bool | Whether to enable TCP keepalives for backend connections. Varnish defaults to using keepalives if this is unspecified.
$options['tcp_keepalive_interval'] = 10; // int | Interval in seconds between subsequent keepalive probes.
$options['tcp_keepalive_probes'] = 3; // int | Number of unacknowledged probes to send before considering the connection dead.
$options['tcp_keepalive_time'] = 300; // int | Interval in seconds between the last data packet sent and the first keepalive probe.
$options['use_ssl'] = True; // bool | Whether or not to require TLS for connections to this backend.
$options['weight'] = 56; // int | Weight used to load balance this backend against others. May be any positive integer. If `auto_loadbalance` is true, the chance of this backend being selected is equal to its own weight over the sum of all weights for backends that have `auto_loadbalance` set to true.

try {
    $result = $apiInstance->updateBackend($options);
} catch (Exception $e) {
    echo 'Exception when calling BackendApi->updateBackend: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**backend_name** | **string** | The name of the backend. |
**address** | **string** | A hostname, IPv4, or IPv6 address for the backend. This is the preferred way to specify the location of your backend. | [optional]
**auto_loadbalance** | **bool** | Whether or not this backend should be automatically load balanced. If true, all backends with this setting that don&#39;t have a `request_condition` will be selected based on their `weight`. | [optional]
**between_bytes_timeout** | **int** | Maximum duration in milliseconds that Fastly will wait while receiving no data on a download from a backend. If exceeded, for Delivery services, the response received so far will be considered complete and the fetch will end. For Compute services, timeout expiration is treated as a failure of the backend connection, and an error is generated. May be set at runtime using `bereq.between_bytes_timeout`. | [optional]
**client_cert** | **string** | Unused. | [optional]
**comment** | **string** | A freeform descriptive note. | [optional]
**connect_timeout** | **int** | Maximum duration in milliseconds to wait for a connection to this backend to be established. If exceeded, the connection is aborted and a synthetic `503` response will be presented instead. May be set at runtime using `bereq.connect_timeout`. | [optional]
**first_byte_timeout** | **int** | Maximum duration in milliseconds to wait for the server response to begin after a TCP connection is established and the request has been sent. If exceeded, the connection is aborted and a synthetic `503` response will be presented instead. May be set at runtime using `bereq.first_byte_timeout`. | [optional]
**healthcheck** | **string** | The name of the healthcheck to use with this backend. | [optional]
**hostname** | **string** | The hostname of the backend. May be used as an alternative to `address` to set the backend location. | [optional]
**ipv4** | **string** | IPv4 address of the backend. May be used as an alternative to `address` to set the backend location. | [optional]
**ipv6** | **string** | IPv6 address of the backend. May be used as an alternative to `address` to set the backend location. | [optional]
**keepalive_time** | **int** | How long in seconds to keep a persistent connection to the backend between requests. By default, Varnish keeps connections open as long as it can. | [optional]
**max_conn** | **int** | Maximum number of concurrent connections this backend will accept. | [optional]
**max_tls_version** | **string** | Maximum allowed TLS version on SSL connections to this backend. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic `503` error response will be generated. | [optional]
**min_tls_version** | **string** | Minimum allowed TLS version on SSL connections to this backend. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic `503` error response will be generated. | [optional]
**name** | **string** | The name of the backend. | [optional]
**override_host** | **string** | If set, will replace the client-supplied HTTP `Host` header on connections to this backend. Applied after VCL has been processed, so this setting will take precedence over changing `bereq.http.Host` in VCL. | [optional]
**port** | **int** | Port on which the backend server is listening for connections from Fastly. Setting `port` to 80 or 443 will also set `use_ssl` automatically (to false and true respectively), unless explicitly overridden by setting `use_ssl` in the same request. | [optional]
**prefer_ipv6** | **bool** | Prefer IPv6 connections to origins for hostname backends. Default is &#39;false&#39; for Delivery services and &#39;true&#39; for Compute services. | [optional]
**request_condition** | **string** | Name of a Condition, which if satisfied, will select this backend during a request. If set, will override any `auto_loadbalance` setting. By default, the first backend added to a service is selected for all requests. | [optional]
**share_key** | **string** | Value that when shared across backends will enable those backends to share the same health check. | [optional]
**shield** | **string** | Identifier of the POP to use as a [shield](https://www.fastly.com/documentation/guides/getting-started/hosts/shielding/). | [optional]
**ssl_ca_cert** | **string** | CA certificate attached to origin. | [optional]
**ssl_cert_hostname** | **string** | Overrides `ssl_hostname`, but only for cert verification. Does not affect SNI at all. | [optional]
**ssl_check_cert** | **bool** | Be strict on checking SSL certs. | [optional] [defaults to true]
**ssl_ciphers** | **string** | List of [OpenSSL ciphers](https://www.openssl.org/docs/man1.1.1/man1/ciphers.html) to support for connections to this origin. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic `503` error response will be generated. | [optional]
**ssl_client_cert** | **string** | Client certificate attached to origin. | [optional]
**ssl_client_key** | **string** | Client key attached to origin. | [optional]
**ssl_hostname** | **string** | Use `ssl_cert_hostname` and `ssl_sni_hostname` to configure certificate validation. | [optional]
**ssl_sni_hostname** | **string** | Overrides `ssl_hostname`, but only for SNI in the handshake. Does not affect cert validation at all. | [optional]
**tcp_keepalive_enable** | **bool** | Whether to enable TCP keepalives for backend connections. Varnish defaults to using keepalives if this is unspecified. | [optional]
**tcp_keepalive_interval** | **int** | Interval in seconds between subsequent keepalive probes. | [optional] [defaults to 10]
**tcp_keepalive_probes** | **int** | Number of unacknowledged probes to send before considering the connection dead. | [optional] [defaults to 3]
**tcp_keepalive_time** | **int** | Interval in seconds between the last data packet sent and the first keepalive probe. | [optional] [defaults to 300]
**use_ssl** | **bool** | Whether or not to require TLS for connections to this backend. | [optional]
**weight** | **int** | Weight used to load balance this backend against others. May be any positive integer. If `auto_loadbalance` is true, the chance of this backend being selected is equal to its own weight over the sum of all weights for backends that have `auto_loadbalance` set to true. | [optional]

### Return type

[**\Fastly\Model\BackendResponse**](../Model/BackendResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
