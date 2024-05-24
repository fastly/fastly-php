# Fastly\Api\PoolApi


```php
$apiInstance = new Fastly\Api\PoolApi(
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
[**createServerPool()**](PoolApi.md#createServerPool) | **POST** /service/{service_id}/version/{version_id}/pool | Create a server pool
[**deleteServerPool()**](PoolApi.md#deleteServerPool) | **DELETE** /service/{service_id}/version/{version_id}/pool/{pool_name} | Delete a server pool
[**getServerPool()**](PoolApi.md#getServerPool) | **GET** /service/{service_id}/version/{version_id}/pool/{pool_name} | Get a server pool
[**listServerPools()**](PoolApi.md#listServerPools) | **GET** /service/{service_id}/version/{version_id}/pool | List server pools
[**updateServerPool()**](PoolApi.md#updateServerPool) | **PUT** /service/{service_id}/version/{version_id}/pool/{pool_name} | Update a server pool


## `createServerPool()`

```php
createServerPool($options): \Fastly\Model\PoolResponsePost // Create a server pool
```

Creates a pool for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['tls_ca_cert'] = 'null'; // string | A secure certificate to authenticate a server with. Must be in PEM format.
$options['tls_client_cert'] = 'null'; // string | The client certificate used to make authenticated requests. Must be in PEM format.
$options['tls_client_key'] = 'null'; // string | The client private key used to make authenticated requests. Must be in PEM format.
$options['tls_cert_hostname'] = 'null'; // string | The hostname used to verify a server's certificate. It can either be the Common Name (CN) or a Subject Alternative Name (SAN).
$options['use_tls'] = 0; // int | Whether to use TLS.
$options['created_at'] = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date and time in ISO 8601 format.
$options['deleted_at'] = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date and time in ISO 8601 format.
$options['updated_at'] = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date and time in ISO 8601 format.
$options['service_id'] = 'service_id_example'; // string
$options['version'] = 'version_example'; // string
$options['name'] = 'name_example'; // string | Name for the Pool.
$options['shield'] = 'null'; // string | Selected POP to serve as a shield for the servers. Defaults to `null` meaning no origin shielding if not set. Refer to the [POPs API endpoint](https://www.fastly.com/documentation/reference/api/utils/pops/) to get a list of available POPs used for shielding.
$options['request_condition'] = 'request_condition_example'; // string | Condition which, if met, will select this configuration during a request. Optional.
$options['tls_ciphers'] = 'tls_ciphers_example'; // string | List of OpenSSL ciphers (see the [openssl.org manpages](https://www.openssl.org/docs/man1.1.1/man1/ciphers.html) for details). Optional.
$options['tls_sni_hostname'] = 'tls_sni_hostname_example'; // string | SNI hostname. Optional.
$options['min_tls_version'] = 56; // int | Minimum allowed TLS version on connections to this server. Optional.
$options['max_tls_version'] = 56; // int | Maximum allowed TLS version on connections to this server. Optional.
$options['healthcheck'] = 'healthcheck_example'; // string | Name of the healthcheck to use with this pool. Can be empty and could be reused across multiple backend and pools.
$options['comment'] = 'comment_example'; // string | A freeform descriptive note.
$options['type'] = 'type_example'; // string | What type of load balance group to use.
$options['override_host'] = 'null'; // string | The hostname to [override the Host header](https://docs.fastly.com/en/guides/specifying-an-override-host). Defaults to `null` meaning no override of the Host header will occur. This setting can also be added to a Server definition. If the field is set on a Server definition it will override the Pool setting.
$options['between_bytes_timeout'] = 10000; // int | Maximum duration in milliseconds that Fastly will wait while receiving no data on a download from a backend. If exceeded, the response received so far will be considered complete and the fetch will end. May be set at runtime using `bereq.between_bytes_timeout`.
$options['connect_timeout'] = 56; // int | How long to wait for a timeout in milliseconds. Optional.
$options['first_byte_timeout'] = 56; // int | How long to wait for the first byte in milliseconds. Optional.
$options['max_conn_default'] = 200; // int | Maximum number of connections. Optional.
$options['quorum'] = 75; // int | Percentage of capacity (`0-100`) that needs to be operationally available for a pool to be considered up.
$options['tls_check_cert'] = 56; // int | Be strict on checking TLS certs. Optional.

try {
    $result = $apiInstance->createServerPool($options);
} catch (Exception $e) {
    echo 'Exception when calling PoolApi->createServerPool: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**tls_ca_cert** | **string** | A secure certificate to authenticate a server with. Must be in PEM format. | [optional] [defaults to 'null']
**tls_client_cert** | **string** | The client certificate used to make authenticated requests. Must be in PEM format. | [optional] [defaults to 'null']
**tls_client_key** | **string** | The client private key used to make authenticated requests. Must be in PEM format. | [optional] [defaults to 'null']
**tls_cert_hostname** | **string** | The hostname used to verify a server&#39;s certificate. It can either be the Common Name (CN) or a Subject Alternative Name (SAN). | [optional] [defaults to 'null']
**use_tls** | **int** | Whether to use TLS. | [optional] [one of: 0, 1]
**created_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional]
**deleted_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional]
**updated_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional]
**service_id** | **string** |  | [optional]
**version** | **string** |  | [optional]
**name** | **string** | Name for the Pool. | [optional]
**shield** | **string** | Selected POP to serve as a shield for the servers. Defaults to `null` meaning no origin shielding if not set. Refer to the [POPs API endpoint](https://www.fastly.com/documentation/reference/api/utils/pops/) to get a list of available POPs used for shielding. | [optional] [defaults to 'null']
**request_condition** | **string** | Condition which, if met, will select this configuration during a request. Optional. | [optional]
**tls_ciphers** | **string** | List of OpenSSL ciphers (see the [openssl.org manpages](https://www.openssl.org/docs/man1.1.1/man1/ciphers.html) for details). Optional. | [optional]
**tls_sni_hostname** | **string** | SNI hostname. Optional. | [optional]
**min_tls_version** | **int** | Minimum allowed TLS version on connections to this server. Optional. | [optional]
**max_tls_version** | **int** | Maximum allowed TLS version on connections to this server. Optional. | [optional]
**healthcheck** | **string** | Name of the healthcheck to use with this pool. Can be empty and could be reused across multiple backend and pools. | [optional]
**comment** | **string** | A freeform descriptive note. | [optional]
**type** | **string** | What type of load balance group to use. | [optional] [one of: 'random', 'hash', 'client']
**override_host** | **string** | The hostname to [override the Host header](https://docs.fastly.com/en/guides/specifying-an-override-host). Defaults to `null` meaning no override of the Host header will occur. This setting can also be added to a Server definition. If the field is set on a Server definition it will override the Pool setting. | [optional] [defaults to 'null']
**between_bytes_timeout** | **int** | Maximum duration in milliseconds that Fastly will wait while receiving no data on a download from a backend. If exceeded, the response received so far will be considered complete and the fetch will end. May be set at runtime using `bereq.between_bytes_timeout`. | [optional] [defaults to 10000]
**connect_timeout** | **int** | How long to wait for a timeout in milliseconds. Optional. | [optional]
**first_byte_timeout** | **int** | How long to wait for the first byte in milliseconds. Optional. | [optional]
**max_conn_default** | **int** | Maximum number of connections. Optional. | [optional] [defaults to 200]
**quorum** | **int** | Percentage of capacity (`0-100`) that needs to be operationally available for a pool to be considered up. | [optional] [defaults to 75]
**tls_check_cert** | **int** | Be strict on checking TLS certs. Optional. | [optional]

### Return type

[**\Fastly\Model\PoolResponsePost**](../Model/PoolResponsePost.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteServerPool()`

```php
deleteServerPool($options): \Fastly\Model\InlineResponse200 // Delete a server pool
```

Deletes a specific pool for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['pool_name'] = 'pool_name_example'; // string | Name for the Pool.

try {
    $result = $apiInstance->deleteServerPool($options);
} catch (Exception $e) {
    echo 'Exception when calling PoolApi->deleteServerPool: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**pool_name** | **string** | Name for the Pool. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getServerPool()`

```php
getServerPool($options): \Fastly\Model\PoolResponse // Get a server pool
```

Gets a single pool for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['pool_name'] = 'pool_name_example'; // string | Name for the Pool.

try {
    $result = $apiInstance->getServerPool($options);
} catch (Exception $e) {
    echo 'Exception when calling PoolApi->getServerPool: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**pool_name** | **string** | Name for the Pool. |

### Return type

[**\Fastly\Model\PoolResponse**](../Model/PoolResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listServerPools()`

```php
listServerPools($options): \Fastly\Model\PoolResponse[] // List server pools
```

Lists all pools for a particular service and pool.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

try {
    $result = $apiInstance->listServerPools($options);
} catch (Exception $e) {
    echo 'Exception when calling PoolApi->listServerPools: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\PoolResponse[]**](../Model/PoolResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateServerPool()`

```php
updateServerPool($options): \Fastly\Model\PoolResponse // Update a server pool
```

Updates a specific pool for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['pool_name'] = 'pool_name_example'; // string | Name for the Pool.
$options['tls_ca_cert'] = 'null'; // string | A secure certificate to authenticate a server with. Must be in PEM format.
$options['tls_client_cert'] = 'null'; // string | The client certificate used to make authenticated requests. Must be in PEM format.
$options['tls_client_key'] = 'null'; // string | The client private key used to make authenticated requests. Must be in PEM format.
$options['tls_cert_hostname'] = 'null'; // string | The hostname used to verify a server's certificate. It can either be the Common Name (CN) or a Subject Alternative Name (SAN).
$options['use_tls'] = self::USE_TLS_no_tls; // int | Whether to use TLS.
$options['created_at'] = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date and time in ISO 8601 format.
$options['deleted_at'] = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date and time in ISO 8601 format.
$options['updated_at'] = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date and time in ISO 8601 format.
$options['service_id'] = 'service_id_example'; // string
$options['version'] = 'version_example'; // string
$options['name'] = 'name_example'; // string | Name for the Pool.
$options['shield'] = 'null'; // string | Selected POP to serve as a shield for the servers. Defaults to `null` meaning no origin shielding if not set. Refer to the [POPs API endpoint](https://www.fastly.com/documentation/reference/api/utils/pops/) to get a list of available POPs used for shielding.
$options['request_condition'] = 'request_condition_example'; // string | Condition which, if met, will select this configuration during a request. Optional.
$options['tls_ciphers'] = 'tls_ciphers_example'; // string | List of OpenSSL ciphers (see the [openssl.org manpages](https://www.openssl.org/docs/man1.1.1/man1/ciphers.html) for details). Optional.
$options['tls_sni_hostname'] = 'tls_sni_hostname_example'; // string | SNI hostname. Optional.
$options['min_tls_version'] = 56; // int | Minimum allowed TLS version on connections to this server. Optional.
$options['max_tls_version'] = 56; // int | Maximum allowed TLS version on connections to this server. Optional.
$options['healthcheck'] = 'healthcheck_example'; // string | Name of the healthcheck to use with this pool. Can be empty and could be reused across multiple backend and pools.
$options['comment'] = 'comment_example'; // string | A freeform descriptive note.
$options['type'] = 'type_example'; // string | What type of load balance group to use.
$options['override_host'] = 'null'; // string | The hostname to [override the Host header](https://docs.fastly.com/en/guides/specifying-an-override-host). Defaults to `null` meaning no override of the Host header will occur. This setting can also be added to a Server definition. If the field is set on a Server definition it will override the Pool setting.
$options['between_bytes_timeout'] = 10000; // int | Maximum duration in milliseconds that Fastly will wait while receiving no data on a download from a backend. If exceeded, the response received so far will be considered complete and the fetch will end. May be set at runtime using `bereq.between_bytes_timeout`.
$options['connect_timeout'] = 56; // int | How long to wait for a timeout in milliseconds. Optional.
$options['first_byte_timeout'] = 56; // int | How long to wait for the first byte in milliseconds. Optional.
$options['max_conn_default'] = 200; // int | Maximum number of connections. Optional.
$options['quorum'] = 75; // int | Percentage of capacity (`0-100`) that needs to be operationally available for a pool to be considered up.
$options['tls_check_cert'] = 56; // int | Be strict on checking TLS certs. Optional.

try {
    $result = $apiInstance->updateServerPool($options);
} catch (Exception $e) {
    echo 'Exception when calling PoolApi->updateServerPool: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**pool_name** | **string** | Name for the Pool. |
**tls_ca_cert** | **string** | A secure certificate to authenticate a server with. Must be in PEM format. | [optional] [defaults to 'null']
**tls_client_cert** | **string** | The client certificate used to make authenticated requests. Must be in PEM format. | [optional] [defaults to 'null']
**tls_client_key** | **string** | The client private key used to make authenticated requests. Must be in PEM format. | [optional] [defaults to 'null']
**tls_cert_hostname** | **string** | The hostname used to verify a server&#39;s certificate. It can either be the Common Name (CN) or a Subject Alternative Name (SAN). | [optional] [defaults to 'null']
**use_tls** | **int** | Whether to use TLS. | [optional] [one of: 0, 1]
**created_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional]
**deleted_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional]
**updated_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional]
**service_id** | **string** |  | [optional]
**version** | **string** |  | [optional]
**name** | **string** | Name for the Pool. | [optional]
**shield** | **string** | Selected POP to serve as a shield for the servers. Defaults to `null` meaning no origin shielding if not set. Refer to the [POPs API endpoint](https://www.fastly.com/documentation/reference/api/utils/pops/) to get a list of available POPs used for shielding. | [optional] [defaults to 'null']
**request_condition** | **string** | Condition which, if met, will select this configuration during a request. Optional. | [optional]
**tls_ciphers** | **string** | List of OpenSSL ciphers (see the [openssl.org manpages](https://www.openssl.org/docs/man1.1.1/man1/ciphers.html) for details). Optional. | [optional]
**tls_sni_hostname** | **string** | SNI hostname. Optional. | [optional]
**min_tls_version** | **int** | Minimum allowed TLS version on connections to this server. Optional. | [optional]
**max_tls_version** | **int** | Maximum allowed TLS version on connections to this server. Optional. | [optional]
**healthcheck** | **string** | Name of the healthcheck to use with this pool. Can be empty and could be reused across multiple backend and pools. | [optional]
**comment** | **string** | A freeform descriptive note. | [optional]
**type** | **string** | What type of load balance group to use. | [optional] [one of: 'random', 'hash', 'client']
**override_host** | **string** | The hostname to [override the Host header](https://docs.fastly.com/en/guides/specifying-an-override-host). Defaults to `null` meaning no override of the Host header will occur. This setting can also be added to a Server definition. If the field is set on a Server definition it will override the Pool setting. | [optional] [defaults to 'null']
**between_bytes_timeout** | **int** | Maximum duration in milliseconds that Fastly will wait while receiving no data on a download from a backend. If exceeded, the response received so far will be considered complete and the fetch will end. May be set at runtime using `bereq.between_bytes_timeout`. | [optional] [defaults to 10000]
**connect_timeout** | **int** | How long to wait for a timeout in milliseconds. Optional. | [optional]
**first_byte_timeout** | **int** | How long to wait for the first byte in milliseconds. Optional. | [optional]
**max_conn_default** | **int** | Maximum number of connections. Optional. | [optional] [defaults to 200]
**quorum** | **int** | Percentage of capacity (`0-100`) that needs to be operationally available for a pool to be considered up. | [optional] [defaults to 75]
**tls_check_cert** | **int** | Be strict on checking TLS certs. Optional. | [optional]

### Return type

[**\Fastly\Model\PoolResponse**](../Model/PoolResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
