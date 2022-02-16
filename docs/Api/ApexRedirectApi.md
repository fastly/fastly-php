# Fastly\Api\ApexRedirectApi


```php
$apiInstance = new Fastly\Api\ApexRedirectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**deleteApexRedirect()**](ApexRedirectApi.md#deleteApexRedirect) | **DELETE** /apex-redirects/{apex_redirect_id} | Delete an apex redirect
[**getApexRedirect()**](ApexRedirectApi.md#getApexRedirect) | **GET** /apex-redirects/{apex_redirect_id} | Get an apex redirect
[**listApexRedirects()**](ApexRedirectApi.md#listApexRedirects) | **GET** /service/{service_id}/version/{version_id}/apex-redirects | List apex redirects
[**updateApexRedirect()**](ApexRedirectApi.md#updateApexRedirect) | **PUT** /apex-redirects/{apex_redirect_id} | Update an apex redirect


## `deleteApexRedirect()`

```php
deleteApexRedirect($options): \Fastly\Model\InlineResponse200 // Delete an apex redirect
```

Delete an apex redirect by its ID.

### Example
```php
try {
    $result = $apiInstance->deleteApexRedirect($options);
} catch (Exception $e) {
    echo 'Exception when calling ApexRedirectApi->deleteApexRedirect: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**apex_redirect_id** | **string** |  |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getApexRedirect()`

```php
getApexRedirect($options): \Fastly\Model\ApexRedirect // Get an apex redirect
```

Get an apex redirect by its ID.

### Example
```php
try {
    $result = $apiInstance->getApexRedirect($options);
} catch (Exception $e) {
    echo 'Exception when calling ApexRedirectApi->getApexRedirect: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**apex_redirect_id** | **string** |  |

### Return type

[**\Fastly\Model\ApexRedirect**](../Model/ApexRedirect.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listApexRedirects()`

```php
listApexRedirects($options): \Fastly\Model\ApexRedirect[] // List apex redirects
```

List all apex redirects for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->listApexRedirects($options);
} catch (Exception $e) {
    echo 'Exception when calling ApexRedirectApi->listApexRedirects: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\ApexRedirect[]**](../Model/ApexRedirect.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateApexRedirect()`

```php
updateApexRedirect($options): \Fastly\Model\ApexRedirect // Update an apex redirect
```

Update an apex redirect by its ID.

### Example
```php
try {
    $result = $apiInstance->updateApexRedirect($options);
} catch (Exception $e) {
    echo 'Exception when calling ApexRedirectApi->updateApexRedirect: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**apex_redirect_id** | **string** |  |
**service_id** | [**string**](../Model/string.md) |  | [optional]
**version** | [**int**](../Model/int.md) |  | [optional]
**created_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional]
**deleted_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional]
**updated_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional]
**status_code** | **int** | HTTP status code used to redirect the client. | [optional] [one of: 301, 302, 307, 308]
**domains** | [**string[]**](../Model/string.md) | Array of apex domains that should redirect to their WWW subdomain. | [optional]
**feature_revision** | **int** | Revision number of the apex redirect feature implementation. Defaults to the most recent revision. | [optional]

### Return type

[**\Fastly\Model\ApexRedirect**](../Model/ApexRedirect.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
