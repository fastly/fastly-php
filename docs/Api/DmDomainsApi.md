# Fastly\Api\DmDomainsApi


```php
$apiInstance = new Fastly\Api\DmDomainsApi(
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
[**createDmDomain()**](DmDomainsApi.md#createDmDomain) | **POST** /domain-management/v1/domains | Create a domain
[**deleteDmDomain()**](DmDomainsApi.md#deleteDmDomain) | **DELETE** /domain-management/v1/domains/{domain_id} | Delete a domain
[**getDmDomain()**](DmDomainsApi.md#getDmDomain) | **GET** /domain-management/v1/domains/{domain_id} | Get a domain
[**listDmDomains()**](DmDomainsApi.md#listDmDomains) | **GET** /domain-management/v1/domains | List domains
[**updateDmDomain()**](DmDomainsApi.md#updateDmDomain) | **PATCH** /domain-management/v1/domains/{domain_id} | Update a domain


## `createDmDomain()`

```php
createDmDomain($options): \Fastly\Model\SuccessfulResponseAsObject // Create a domain
```

Create a domain

### Example
```php
    $options['request_body_for_create'] = new \Fastly\Model\RequestBodyForCreate(); // \Fastly\Model\RequestBodyForCreate

try {
    $result = $apiInstance->createDmDomain($options);
} catch (Exception $e) {
    echo 'Exception when calling DmDomainsApi->createDmDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**request_body_for_create** | [**\Fastly\Model\RequestBodyForCreate**](../Model/RequestBodyForCreate.md) |  | [optional]

### Return type

[**\Fastly\Model\SuccessfulResponseAsObject**](../Model/SuccessfulResponseAsObject.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteDmDomain()`

```php
deleteDmDomain($options) // Delete a domain
```

Delete a domain

### Example
```php
    $options['domain_id'] = 'domain_id_example'; // string

try {
    $apiInstance->deleteDmDomain($options);
} catch (Exception $e) {
    echo 'Exception when calling DmDomainsApi->deleteDmDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**domain_id** | **string** |  |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getDmDomain()`

```php
getDmDomain($options): \Fastly\Model\SuccessfulResponseAsObject // Get a domain
```

Show a domain

### Example
```php
    $options['domain_id'] = 'domain_id_example'; // string

try {
    $result = $apiInstance->getDmDomain($options);
} catch (Exception $e) {
    echo 'Exception when calling DmDomainsApi->getDmDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**domain_id** | **string** |  |

### Return type

[**\Fastly\Model\SuccessfulResponseAsObject**](../Model/SuccessfulResponseAsObject.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listDmDomains()`

```php
listDmDomains($options): \Fastly\Model\InlineResponse2004 // List domains
```

List all domains

### Example
```php
    $options['fqdn'] = 'fqdn_example'; // string
$options['service_id'] = 'service_id_example'; // string | Filter results based on a service_id.
$options['sort'] = 'fqdn'; // string | The order in which to list the results.
$options['activated'] = True; // bool
$options['verified'] = True; // bool
$options['cursor'] = 'cursor_example'; // string | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty.
$options['limit'] = 20; // int | Limit how many results are returned.

try {
    $result = $apiInstance->listDmDomains($options);
} catch (Exception $e) {
    echo 'Exception when calling DmDomainsApi->listDmDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**fqdn** | **string** |  | [optional]
**service_id** | **string** | Filter results based on a service_id. | [optional]
**sort** | **string** | The order in which to list the results. | [optional] [one of: 'fqdn', '-fqdn'] [defaults to 'fqdn']
**activated** | **bool** |  | [optional]
**verified** | **bool** |  | [optional]
**cursor** | **string** | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty. | [optional]
**limit** | **int** | Limit how many results are returned. | [optional] [defaults to 20]

### Return type

[**\Fastly\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateDmDomain()`

```php
updateDmDomain($options): \Fastly\Model\SuccessfulResponseAsObject // Update a domain
```

Update a domain

### Example
```php
    $options['domain_id'] = 'domain_id_example'; // string
$options['request_body_for_update'] = new \Fastly\Model\RequestBodyForUpdate(); // \Fastly\Model\RequestBodyForUpdate

try {
    $result = $apiInstance->updateDmDomain($options);
} catch (Exception $e) {
    echo 'Exception when calling DmDomainsApi->updateDmDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**domain_id** | **string** |  |
**request_body_for_update** | [**\Fastly\Model\RequestBodyForUpdate**](../Model/RequestBodyForUpdate.md) |  | [optional]

### Return type

[**\Fastly\Model\SuccessfulResponseAsObject**](../Model/SuccessfulResponseAsObject.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
