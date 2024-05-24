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

> [!NOTE]
> All URIs are relative to `https://api.fastly.com`

Method | HTTP request | Description
------ | ------------ | -----------
[**createApexRedirect()**](ApexRedirectApi.md#createApexRedirect) | **POST** /service/{service_id}/version/{version_id}/apex-redirects | Create an apex redirect
[**deleteApexRedirect()**](ApexRedirectApi.md#deleteApexRedirect) | **DELETE** /apex-redirects/{apex_redirect_id} | Delete an apex redirect
[**getApexRedirect()**](ApexRedirectApi.md#getApexRedirect) | **GET** /apex-redirects/{apex_redirect_id} | Get an apex redirect
[**listApexRedirects()**](ApexRedirectApi.md#listApexRedirects) | **GET** /service/{service_id}/version/{version_id}/apex-redirects | List apex redirects
[**updateApexRedirect()**](ApexRedirectApi.md#updateApexRedirect) | **PUT** /apex-redirects/{apex_redirect_id} | Update an apex redirect


## `createApexRedirect()`

```php
createApexRedirect($options): \Fastly\Model\ApexRedirect // Create an apex redirect
```

Create an apex redirect for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['service_id'] = 'service_id_example'; // string
$options['version'] = 56; // int
$options['created_at'] = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date and time in ISO 8601 format.
$options['deleted_at'] = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date and time in ISO 8601 format.
$options['updated_at'] = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date and time in ISO 8601 format.
$options['status_code'] = 56; // int | HTTP status code used to redirect the client.
$options['domains'] = array('domains_example'); // string[] | Array of apex domains that should redirect to their WWW subdomain.
$options['feature_revision'] = 56; // int | Revision number of the apex redirect feature implementation. Defaults to the most recent revision.

try {
    $result = $apiInstance->createApexRedirect($options);
} catch (Exception $e) {
    echo 'Exception when calling ApexRedirectApi->createApexRedirect: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**service_id** | **string** |  | [optional]
**version** | **int** |  | [optional]
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

## `deleteApexRedirect()`

```php
deleteApexRedirect($options): \Fastly\Model\InlineResponse200 // Delete an apex redirect
```

Delete an apex redirect by its ID.

### Example
```php
    $options['apex_redirect_id'] = 6QI9o6ZZrSP3y9gI0OhMwZ; // string

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
    $options['apex_redirect_id'] = 6QI9o6ZZrSP3y9gI0OhMwZ; // string

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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

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
    $options['apex_redirect_id'] = 6QI9o6ZZrSP3y9gI0OhMwZ; // string
$options['service_id'] = 'service_id_example'; // string
$options['version'] = 56; // int
$options['created_at'] = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date and time in ISO 8601 format.
$options['deleted_at'] = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date and time in ISO 8601 format.
$options['updated_at'] = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date and time in ISO 8601 format.
$options['status_code'] = 56; // int | HTTP status code used to redirect the client.
$options['domains'] = array('domains_example'); // string[] | Array of apex domains that should redirect to their WWW subdomain.
$options['feature_revision'] = 56; // int | Revision number of the apex redirect feature implementation. Defaults to the most recent revision.

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
**service_id** | **string** |  | [optional]
**version** | **int** |  | [optional]
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
