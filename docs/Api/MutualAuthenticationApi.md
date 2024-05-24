# Fastly\Api\MutualAuthenticationApi


```php
$apiInstance = new Fastly\Api\MutualAuthenticationApi(
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
[**createMutualTlsAuthentication()**](MutualAuthenticationApi.md#createMutualTlsAuthentication) | **POST** /tls/mutual_authentications | Create a Mutual Authentication
[**deleteMutualTls()**](MutualAuthenticationApi.md#deleteMutualTls) | **DELETE** /tls/mutual_authentications/{mutual_authentication_id} | Delete a Mutual TLS
[**getMutualAuthentication()**](MutualAuthenticationApi.md#getMutualAuthentication) | **GET** /tls/mutual_authentications/{mutual_authentication_id} | Get a Mutual Authentication
[**listMutualAuthentications()**](MutualAuthenticationApi.md#listMutualAuthentications) | **GET** /tls/mutual_authentications | List Mutual Authentications
[**patchMutualAuthentication()**](MutualAuthenticationApi.md#patchMutualAuthentication) | **PATCH** /tls/mutual_authentications/{mutual_authentication_id} | Update a Mutual Authentication


## `createMutualTlsAuthentication()`

```php
createMutualTlsAuthentication($options): \Fastly\Model\MutualAuthenticationResponse // Create a Mutual Authentication
```

Create a mutual authentication using a bundle of certificates to enable client-to-server mutual TLS.

### Example
```php
    $options['mutual_authentication'] = {"data":{"type":"mutual_authentication","attributes":{"cert_bundle":"-----BEGIN CERTIFICATE-----\n...\n-----END CERTIFICATE-----\n","name":"Mutual Authentication A"}}}; // \Fastly\Model\MutualAuthentication

try {
    $result = $apiInstance->createMutualTlsAuthentication($options);
} catch (Exception $e) {
    echo 'Exception when calling MutualAuthenticationApi->createMutualTlsAuthentication: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**mutual_authentication** | [**\Fastly\Model\MutualAuthentication**](../Model/MutualAuthentication.md) |  | [optional]

### Return type

[**\Fastly\Model\MutualAuthenticationResponse**](../Model/MutualAuthenticationResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteMutualTls()`

```php
deleteMutualTls($options) // Delete a Mutual TLS
```

Remove a Mutual TLS authentication

### Example
```php
    $options['mutual_authentication_id'] = 'mutual_authentication_id_example'; // string | Alphanumeric string identifying a mutual authentication.

try {
    $apiInstance->deleteMutualTls($options);
} catch (Exception $e) {
    echo 'Exception when calling MutualAuthenticationApi->deleteMutualTls: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**mutual_authentication_id** | **string** | Alphanumeric string identifying a mutual authentication. |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getMutualAuthentication()`

```php
getMutualAuthentication($options): \Fastly\Model\MutualAuthenticationResponse // Get a Mutual Authentication
```

Show a Mutual Authentication.

### Example
```php
    $options['include'] = 'include_example'; // string | Comma-separated list of related objects to include (optional). Permitted values: `tls_activations`. Including TLS activations will provide you with the TLS domain names that are related to your Mutual TLS authentication.
$options['mutual_authentication_id'] = 'mutual_authentication_id_example'; // string | Alphanumeric string identifying a mutual authentication.

try {
    $result = $apiInstance->getMutualAuthentication($options);
} catch (Exception $e) {
    echo 'Exception when calling MutualAuthenticationApi->getMutualAuthentication: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**include** | **string** | Comma-separated list of related objects to include (optional). Permitted values: `tls_activations`. Including TLS activations will provide you with the TLS domain names that are related to your Mutual TLS authentication. | [optional]
**mutual_authentication_id** | **string** | Alphanumeric string identifying a mutual authentication. |

### Return type

[**\Fastly\Model\MutualAuthenticationResponse**](../Model/MutualAuthenticationResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listMutualAuthentications()`

```php
listMutualAuthentications($options): \Fastly\Model\MutualAuthenticationsResponse // List Mutual Authentications
```

List all mutual authentications.

### Example
```php
    $options['include'] = 'include_example'; // string | Comma-separated list of related objects to include (optional). Permitted values: `tls_activations`. Including TLS activations will provide you with the TLS domain names that are related to your Mutual TLS authentication.
$options['page_number'] = 1; // int | Current page.
$options['page_size'] = 20; // int | Number of records per page.

try {
    $result = $apiInstance->listMutualAuthentications($options);
} catch (Exception $e) {
    echo 'Exception when calling MutualAuthenticationApi->listMutualAuthentications: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**include** | **string** | Comma-separated list of related objects to include (optional). Permitted values: `tls_activations`. Including TLS activations will provide you with the TLS domain names that are related to your Mutual TLS authentication. | [optional]
**page_number** | **int** | Current page. | [optional]
**page_size** | **int** | Number of records per page. | [optional] [defaults to 20]

### Return type

[**\Fastly\Model\MutualAuthenticationsResponse**](../Model/MutualAuthenticationsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `patchMutualAuthentication()`

```php
patchMutualAuthentication($options): \Fastly\Model\MutualAuthenticationResponse // Update a Mutual Authentication
```

Update a Mutual Authentication.

### Example
```php
    $options['mutual_authentication_id'] = 'mutual_authentication_id_example'; // string | Alphanumeric string identifying a mutual authentication.
$options['mutual_authentication'] = {"data":{"type":"mutual_authentication","attributes":{"cert_bundle":"-----BEGIN CERTIFICATE-----\n...\n-----END CERTIFICATE-----\n","enforced":false,"name":"Mutual Authentication B"}}}; // \Fastly\Model\MutualAuthentication

try {
    $result = $apiInstance->patchMutualAuthentication($options);
} catch (Exception $e) {
    echo 'Exception when calling MutualAuthenticationApi->patchMutualAuthentication: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**mutual_authentication_id** | **string** | Alphanumeric string identifying a mutual authentication. |
**mutual_authentication** | [**\Fastly\Model\MutualAuthentication**](../Model/MutualAuthentication.md) |  | [optional]

### Return type

[**\Fastly\Model\MutualAuthenticationResponse**](../Model/MutualAuthenticationResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
