# Fastly\Api\DomainResearchApi


```php
$apiInstance = new Fastly\Api\DomainResearchApi(
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
[**domainStatus()**](DomainResearchApi.md#domainStatus) | **GET** /domain-management/v1/tools/status | Domain status
[**suggestDomains()**](DomainResearchApi.md#suggestDomains) | **GET** /domain-management/v1/tools/suggest | Suggest domains


## `domainStatus()`

```php
domainStatus($options): \Fastly\Model\Status // Domain status
```

The `Status` method checks the availability status of a single domain name.

### Example
```php
    $options['domain'] = acmecoffee.shop; // string
$options['scope'] = estimate; // string

try {
    $result = $apiInstance->domainStatus($options);
} catch (Exception $e) {
    echo 'Exception when calling DomainResearchApi->domainStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**domain** | **string** |  |
**scope** | **string** |  | [optional]

### Return type

[**\Fastly\Model\Status**](../Model/Status.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `suggestDomains()`

```php
suggestDomains($options): \Fastly\Model\InlineResponse2006 // Suggest domains
```

The `Suggest` method performs a real-time query of the search term(s) against the [known zone database](http://zonedb.org), making recommendations, stemming, and applying Unicode folding, IDN normalization, registrar supported-zone restrictions, and other refinements. **Note:** `Suggest` method responses do not include domain availability status.

### Example
```php
    $options['query'] = foo%20bar; // string
$options['defaults'] = club; // string
$options['keywords'] = food,kitchen; // string
$options['location'] = de; // string
$options['vendor'] = dnsimple.com; // string

try {
    $result = $apiInstance->suggestDomains($options);
} catch (Exception $e) {
    echo 'Exception when calling DomainResearchApi->suggestDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**query** | **string** |  |
**defaults** | **string** |  | [optional]
**keywords** | **string** |  | [optional]
**location** | **string** |  | [optional]
**vendor** | **string** |  | [optional]

### Return type

[**\Fastly\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
