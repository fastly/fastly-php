# OpenAPI\Client\WafFirewallsApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWafFirewall()**](WafFirewallsApi.md#createWafFirewall) | **POST** /waf/firewalls | Create a firewall
[**deleteWafFirewall()**](WafFirewallsApi.md#deleteWafFirewall) | **DELETE** /waf/firewalls/{firewall_id} | Delete a firewall
[**getWafFirewall()**](WafFirewallsApi.md#getWafFirewall) | **GET** /waf/firewalls/{firewall_id} | Get a firewall
[**listWafFirewalls()**](WafFirewallsApi.md#listWafFirewalls) | **GET** /waf/firewalls | List firewalls
[**updateWafFirewall()**](WafFirewallsApi.md#updateWafFirewall) | **PATCH** /waf/firewalls/{firewall_id} | Update a firewall


## `createWafFirewall()`

```php
createWafFirewall($body): object
```

Create a firewall

Create a firewall object for a particular service and service version using a defined `prefetch_condition` and `response`. If the `prefetch_condition` or the `response` is missing from the request body, Fastly will generate a default object on your service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WafFirewallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = {"data":{"type":"waf_firewall","attributes":{"prefetch_condition":"WAF_Condition","response":"WAF_Error","service_id":"SU1Z0isxPaozGVKXdv0eY","service_version_number":1}}}; // object

try {
    $result = $apiInstance->createWafFirewall($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WafFirewallsApi->createWafFirewall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  | [optional]

### Return type

**object**

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/vnd.api+json`
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWafFirewall()`

```php
deleteWafFirewall($firewall_id, $body)
```

Delete a firewall

Delete the firewall object for a particular service and service version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WafFirewallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 'firewall_id_example'; // string
$body = {"data":{"id":"fW7g2uUGZzb2W9Euo4Mo0r","type":"waf_firewall","attributes":{"service_version_number":1}}}; // object

try {
    $apiInstance->deleteWafFirewall($firewall_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling WafFirewallsApi->deleteWafFirewall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firewall_id** | **string**|  |
 **body** | **object**|  | [optional]

### Return type

void (empty response body)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWafFirewall()`

```php
getWafFirewall($firewall_id, $filter_service_version_number, $include): object
```

Get a firewall

Get a specific firewall object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WafFirewallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 'firewall_id_example'; // string
$filter_service_version_number = 'filter_service_version_number_example'; // string | Limit the results returned to a specific service version.
$include = waf_firewall_versions; // string | Include related objects. Optional, comma-separated values. Permitted values: `waf_firewall_versions`.

try {
    $result = $apiInstance->getWafFirewall($firewall_id, $filter_service_version_number, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WafFirewallsApi->getWafFirewall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firewall_id** | **string**|  |
 **filter_service_version_number** | **string**| Limit the results returned to a specific service version. | [optional]
 **include** | **string**| Include related objects. Optional, comma-separated values. Permitted values: &#x60;waf_firewall_versions&#x60;. | [optional]

### Return type

**object**

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWafFirewalls()`

```php
listWafFirewalls($page_number, $page_size, $filter_service_id, $filter_service_version_number, $include): object
```

List firewalls

List all firewall objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WafFirewallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_number = 56; // int | Current page.
$page_size = 20; // int | Number of records per page.
$filter_service_id = 'filter_service_id_example'; // string | Limit the results returned to a specific service.
$filter_service_version_number = 'filter_service_version_number_example'; // string | Limit the results returned to a specific service version.
$include = waf_firewall_versions; // string | Include related objects. Optional, comma-separated values. Permitted values: `waf_firewall_versions`.

try {
    $result = $apiInstance->listWafFirewalls($page_number, $page_size, $filter_service_id, $filter_service_version_number, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WafFirewallsApi->listWafFirewalls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_number** | **int**| Current page. | [optional]
 **page_size** | **int**| Number of records per page. | [optional] [default to 20]
 **filter_service_id** | **string**| Limit the results returned to a specific service. | [optional]
 **filter_service_version_number** | **string**| Limit the results returned to a specific service version. | [optional]
 **include** | **string**| Include related objects. Optional, comma-separated values. Permitted values: &#x60;waf_firewall_versions&#x60;. | [optional]

### Return type

**object**

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWafFirewall()`

```php
updateWafFirewall($firewall_id, $body): object
```

Update a firewall

Update a firewall object for a particular service and service version. Specifying a `service_version_number` is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WafFirewallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 'firewall_id_example'; // string
$body = {"update":{"summary":"Update a firewall object for a particular service and service version. Specifying a `service_version_number` is required.","value":{"data":{"id":"fW7g2uUGZzb2W9Euo4Mo0r","type":"waf_firewall","attributes":{"response":"NEW_RESPONSE","service_version_number":1}}}}}; // object

try {
    $result = $apiInstance->updateWafFirewall($firewall_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WafFirewallsApi->updateWafFirewall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firewall_id** | **string**|  |
 **body** | **object**|  | [optional]

### Return type

**object**

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/vnd.api+json`
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
