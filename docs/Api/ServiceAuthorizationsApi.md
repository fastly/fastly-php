# Fastly\Api\ServiceAuthorizationsApi


```php
$apiInstance = new Fastly\Api\ServiceAuthorizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**createServiceAuthorization()**](ServiceAuthorizationsApi.md#createServiceAuthorization) | **POST** /service-authorizations | Create service authorization
[**deleteServiceAuthorization()**](ServiceAuthorizationsApi.md#deleteServiceAuthorization) | **DELETE** /service-authorizations/{service_authorization_id} | Delete service authorization
[**deleteServiceAuthorization2()**](ServiceAuthorizationsApi.md#deleteServiceAuthorization2) | **DELETE** /service-authorizations | Delete service authorizations
[**listServiceAuthorization()**](ServiceAuthorizationsApi.md#listServiceAuthorization) | **GET** /service-authorizations | List service authorizations
[**showServiceAuthorization()**](ServiceAuthorizationsApi.md#showServiceAuthorization) | **GET** /service-authorizations/{service_authorization_id} | Show service authorization
[**updateServiceAuthorization()**](ServiceAuthorizationsApi.md#updateServiceAuthorization) | **PATCH** /service-authorizations/{service_authorization_id} | Update service authorization
[**updateServiceAuthorization2()**](ServiceAuthorizationsApi.md#updateServiceAuthorization2) | **PATCH** /service-authorizations | Update service authorizations


## `createServiceAuthorization()`

```php
createServiceAuthorization($options): \Fastly\Model\ServiceAuthorizationResponse // Create service authorization
```

Create service authorization.

### Example
```php
try {
    $result = $apiInstance->createServiceAuthorization($options);
} catch (Exception $e) {
    echo 'Exception when calling ServiceAuthorizationsApi->createServiceAuthorization: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_authorization** | [**\Fastly\Model\ServiceAuthorization**](../Model/ServiceAuthorization.md) |  | [optional]

### Return type

[**\Fastly\Model\ServiceAuthorizationResponse**](../Model/ServiceAuthorizationResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteServiceAuthorization()`

```php
deleteServiceAuthorization($options) // Delete service authorization
```

Delete service authorization.

### Example
```php
try {
    $apiInstance->deleteServiceAuthorization($options);
} catch (Exception $e) {
    echo 'Exception when calling ServiceAuthorizationsApi->deleteServiceAuthorization: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_authorization_id** | **string** | Alphanumeric string identifying a service authorization. |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteServiceAuthorization2()`

```php
deleteServiceAuthorization2($options): \Fastly\Model\InlineResponse204 // Delete service authorizations
```

Delete service authorizations.

### Example
```php
try {
    $result = $apiInstance->deleteServiceAuthorization2($options);
} catch (Exception $e) {
    echo 'Exception when calling ServiceAuthorizationsApi->deleteServiceAuthorization2: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**inline_object1** | [**\Fastly\Model\InlineObject1**](../Model/InlineObject1.md) |  | [optional]

### Return type

[**\Fastly\Model\InlineResponse204**](../Model/InlineResponse204.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listServiceAuthorization()`

```php
listServiceAuthorization($options): \Fastly\Model\ServiceAuthorizationsResponse // List service authorizations
```

List service authorizations.

### Example
```php
try {
    $result = $apiInstance->listServiceAuthorization($options);
} catch (Exception $e) {
    echo 'Exception when calling ServiceAuthorizationsApi->listServiceAuthorization: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**page_number** | **int** | Current page. | [optional]
**page_size** | **int** | Number of records per page. | [optional] [defaults to 20]

### Return type

[**\Fastly\Model\ServiceAuthorizationsResponse**](../Model/ServiceAuthorizationsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `showServiceAuthorization()`

```php
showServiceAuthorization($options): \Fastly\Model\ServiceAuthorizationResponse // Show service authorization
```

Show service authorization.

### Example
```php
try {
    $result = $apiInstance->showServiceAuthorization($options);
} catch (Exception $e) {
    echo 'Exception when calling ServiceAuthorizationsApi->showServiceAuthorization: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_authorization_id** | **string** | Alphanumeric string identifying a service authorization. |

### Return type

[**\Fastly\Model\ServiceAuthorizationResponse**](../Model/ServiceAuthorizationResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateServiceAuthorization()`

```php
updateServiceAuthorization($options): \Fastly\Model\ServiceAuthorizationResponse // Update service authorization
```

Update service authorization.

### Example
```php
try {
    $result = $apiInstance->updateServiceAuthorization($options);
} catch (Exception $e) {
    echo 'Exception when calling ServiceAuthorizationsApi->updateServiceAuthorization: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_authorization_id** | **string** | Alphanumeric string identifying a service authorization. |
**service_authorization** | [**\Fastly\Model\ServiceAuthorization**](../Model/ServiceAuthorization.md) |  | [optional]

### Return type

[**\Fastly\Model\ServiceAuthorizationResponse**](../Model/ServiceAuthorizationResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateServiceAuthorization2()`

```php
updateServiceAuthorization2($options): \Fastly\Model\ServiceAuthorizationsResponse // Update service authorizations
```

Update service authorizations.

### Example
```php
try {
    $result = $apiInstance->updateServiceAuthorization2($options);
} catch (Exception $e) {
    echo 'Exception when calling ServiceAuthorizationsApi->updateServiceAuthorization2: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**inline_object2** | [**\Fastly\Model\InlineObject2**](../Model/InlineObject2.md) |  | [optional]

### Return type

[**\Fastly\Model\ServiceAuthorizationsResponse**](../Model/ServiceAuthorizationsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
