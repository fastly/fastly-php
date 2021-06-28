# Fastly\Api\TlsActivationsApi


```php
$apiInstance = new Fastly\Api\TlsActivationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**createTlsActivation()**](TlsActivationsApi.md#createTlsActivation) | **POST** /tls/activations | Enable TLS for a domain using a custom certificate
[**deleteTlsActivation()**](TlsActivationsApi.md#deleteTlsActivation) | **DELETE** /tls/activations/{tls_activation_id} | Disable TLS on a domain
[**getTlsActivation()**](TlsActivationsApi.md#getTlsActivation) | **GET** /tls/activations/{tls_activation_id} | Get a TLS activation
[**listTlsActivations()**](TlsActivationsApi.md#listTlsActivations) | **GET** /tls/activations | List TLS activations
[**updateTlsActivation()**](TlsActivationsApi.md#updateTlsActivation) | **PATCH** /tls/activations/{tls_activation_id} | Update a certificate


## `createTlsActivation()`

```php
createTlsActivation($options): \Fastly\Model\TlsActivationResponse // Enable TLS for a domain using a custom certificate
```

Enable TLS for a particular TLS domain and certificate combination. These relationships must be specified to create the TLS activation.

### Example
```php
try {
    $result = $apiInstance->createTlsActivation($options);
} catch (Exception $e) {
    echo 'Exception when calling TlsActivationsApi->createTlsActivation: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**tls_activation** | [**\Fastly\Model\TlsActivation**](../Model/TlsActivation.md) |  | [optional]

### Return type

[**\Fastly\Model\TlsActivationResponse**](../Model/TlsActivationResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteTlsActivation()`

```php
deleteTlsActivation($options) // Disable TLS on a domain
```

Disable TLS on the domain associated with this TLS activation.

### Example
```php
try {
    $apiInstance->deleteTlsActivation($options);
} catch (Exception $e) {
    echo 'Exception when calling TlsActivationsApi->deleteTlsActivation: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**tls_activation_id** | **string** |  |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getTlsActivation()`

```php
getTlsActivation($options): \Fastly\Model\TlsActivationResponse // Get a TLS activation
```

Show a TLS activation.

### Example
```php
try {
    $result = $apiInstance->getTlsActivation($options);
} catch (Exception $e) {
    echo 'Exception when calling TlsActivationsApi->getTlsActivation: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**tls_activation_id** | **string** |  |
**include** | **string** | Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_certificate&#x60;, &#x60;tls_configuration&#x60;, and &#x60;tls_domain&#x60;. | [optional]

### Return type

[**\Fastly\Model\TlsActivationResponse**](../Model/TlsActivationResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listTlsActivations()`

```php
listTlsActivations($options): \Fastly\Model\TlsActivationsResponse // List TLS activations
```

List all TLS activations.

### Example
```php
try {
    $result = $apiInstance->listTlsActivations($options);
} catch (Exception $e) {
    echo 'Exception when calling TlsActivationsApi->listTlsActivations: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**filter_tls_certificate_id** | **string** | Limit the returned activations to a specific certificate. | [optional]
**filter_tls_configuration_id** | **string** | Limit the returned activations to a specific TLS configuration. | [optional]
**filter_tls_domain_id** | **string** | Limit the returned rules to a specific domain name. | [optional]
**include** | **string** | Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_certificate&#x60;, &#x60;tls_configuration&#x60;, and &#x60;tls_domain&#x60;. | [optional]
**page_number** | **int** | Current page. | [optional]
**page_size** | **int** | Number of records per page. | [optional] [default to 20]

### Return type

[**\Fastly\Model\TlsActivationsResponse**](../Model/TlsActivationsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateTlsActivation()`

```php
updateTlsActivation($options): \Fastly\Model\TlsActivationResponse // Update a certificate
```

Update the certificate used to terminate TLS traffic for the domain associated with this TLS activation.

### Example
```php
try {
    $result = $apiInstance->updateTlsActivation($options);
} catch (Exception $e) {
    echo 'Exception when calling TlsActivationsApi->updateTlsActivation: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**tls_activation_id** | **string** |  |
**tls_activation** | [**\Fastly\Model\TlsActivation**](../Model/TlsActivation.md) |  | [optional]

### Return type

[**\Fastly\Model\TlsActivationResponse**](../Model/TlsActivationResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
