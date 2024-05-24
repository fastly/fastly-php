# Fastly\Api\DomainApi


```php
$apiInstance = new Fastly\Api\DomainApi(
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
[**checkDomain()**](DomainApi.md#checkDomain) | **GET** /service/{service_id}/version/{version_id}/domain/{domain_name}/check | Validate DNS configuration for a single domain on a service
[**checkDomains()**](DomainApi.md#checkDomains) | **GET** /service/{service_id}/version/{version_id}/domain/check_all | Validate DNS configuration for all domains on a service
[**createDomain()**](DomainApi.md#createDomain) | **POST** /service/{service_id}/version/{version_id}/domain | Add a domain name to a service
[**deleteDomain()**](DomainApi.md#deleteDomain) | **DELETE** /service/{service_id}/version/{version_id}/domain/{domain_name} | Remove a domain from a service
[**getDomain()**](DomainApi.md#getDomain) | **GET** /service/{service_id}/version/{version_id}/domain/{domain_name} | Describe a domain
[**listDomains()**](DomainApi.md#listDomains) | **GET** /service/{service_id}/version/{version_id}/domain | List domains
[**updateDomain()**](DomainApi.md#updateDomain) | **PUT** /service/{service_id}/version/{version_id}/domain/{domain_name} | Update a domain


## `checkDomain()`

```php
checkDomain($options): mixed[] // Validate DNS configuration for a single domain on a service
```

Checks the status of a specific domain's DNS record for a Service Version. Returns an array in the same format as domain/check_all.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['domain_name'] = 'domain_name_example'; // string | The name of the domain or domains associated with this service.

try {
    $result = $apiInstance->checkDomain($options);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->checkDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**domain_name** | **string** | The name of the domain or domains associated with this service. |

### Return type

**mixed[]**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `checkDomains()`

```php
checkDomains($options): array[] // Validate DNS configuration for all domains on a service
```

Checks the status of all domains' DNS records for a Service Version. Returns an array of 3 items for each domain; the first is the details for the domain, the second is the current CNAME of the domain, and the third is a boolean indicating whether or not it has been properly setup to use Fastly.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

try {
    $result = $apiInstance->checkDomains($options);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->checkDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

**array[]**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createDomain()`

```php
createDomain($options): \Fastly\Model\DomainResponse // Add a domain name to a service
```

Create a domain for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['comment'] = 'comment_example'; // string | A freeform descriptive note.
$options['name'] = 'name_example'; // string | The name of the domain or domains associated with this service.

try {
    $result = $apiInstance->createDomain($options);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->createDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**comment** | **string** | A freeform descriptive note. | [optional]
**name** | **string** | The name of the domain or domains associated with this service. | [optional]

### Return type

[**\Fastly\Model\DomainResponse**](../Model/DomainResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteDomain()`

```php
deleteDomain($options): \Fastly\Model\InlineResponse200 // Remove a domain from a service
```

Delete the domain for a particular service and versions.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['domain_name'] = 'domain_name_example'; // string | The name of the domain or domains associated with this service.

try {
    $result = $apiInstance->deleteDomain($options);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->deleteDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**domain_name** | **string** | The name of the domain or domains associated with this service. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getDomain()`

```php
getDomain($options): \Fastly\Model\DomainResponse // Describe a domain
```

Get the domain for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['domain_name'] = 'domain_name_example'; // string | The name of the domain or domains associated with this service.

try {
    $result = $apiInstance->getDomain($options);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->getDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**domain_name** | **string** | The name of the domain or domains associated with this service. |

### Return type

[**\Fastly\Model\DomainResponse**](../Model/DomainResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listDomains()`

```php
listDomains($options): \Fastly\Model\DomainResponse[] // List domains
```

List all the domains for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

try {
    $result = $apiInstance->listDomains($options);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->listDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\DomainResponse[]**](../Model/DomainResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateDomain()`

```php
updateDomain($options): \Fastly\Model\DomainResponse // Update a domain
```

Update the domain for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['domain_name'] = 'domain_name_example'; // string | The name of the domain or domains associated with this service.
$options['comment'] = 'comment_example'; // string | A freeform descriptive note.
$options['name'] = 'name_example'; // string | The name of the domain or domains associated with this service.

try {
    $result = $apiInstance->updateDomain($options);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->updateDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**domain_name** | **string** | The name of the domain or domains associated with this service. |
**comment** | **string** | A freeform descriptive note. | [optional]
**name** | **string** | The name of the domain or domains associated with this service. | [optional]

### Return type

[**\Fastly\Model\DomainResponse**](../Model/DomainResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
