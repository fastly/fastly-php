# OpenAPI\Client\WafFirewallVersionsApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cloneWafFirewallVersion()**](WafFirewallVersionsApi.md#cloneWafFirewallVersion) | **PUT** /waf/firewalls/{firewall_id}/versions/{firewall_version_number}/clone | Clone a firewall version
[**createWafFirewallVersion()**](WafFirewallVersionsApi.md#createWafFirewallVersion) | **POST** /waf/firewalls/{firewall_id}/versions | Create a firewall version
[**deployActivateWafFirewallVersion()**](WafFirewallVersionsApi.md#deployActivateWafFirewallVersion) | **PUT** /waf/firewalls/{firewall_id}/versions/{firewall_version_number}/activate | Deploy or activate a firewall version
[**getWafFirewallVersion()**](WafFirewallVersionsApi.md#getWafFirewallVersion) | **GET** /waf/firewalls/{firewall_id}/versions/{firewall_version_number} | Get a firewall version
[**listWafFirewallVersions()**](WafFirewallVersionsApi.md#listWafFirewallVersions) | **GET** /waf/firewalls/{firewall_id}/versions | List firewall versions
[**updateWafFirewallVersion()**](WafFirewallVersionsApi.md#updateWafFirewallVersion) | **PATCH** /waf/firewalls/{firewall_id}/versions/{firewall_version_number} | Update a firewall version


## `cloneWafFirewallVersion()`

```php
cloneWafFirewallVersion($firewall_id, $firewall_version_number): object
```

Clone a firewall version

Clone a specific, existing firewall version into a new, draft firewall version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WafFirewallVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 'firewall_id_example'; // string
$firewall_version_number = 56; // int

try {
    $result = $apiInstance->cloneWafFirewallVersion($firewall_id, $firewall_version_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WafFirewallVersionsApi->cloneWafFirewallVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firewall_id** | **string**|  |
 **firewall_version_number** | **int**|  |

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

## `createWafFirewallVersion()`

```php
createWafFirewallVersion($firewall_id, $body): object
```

Create a firewall version

Create a new, draft firewall version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WafFirewallVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 'firewall_id_example'; // string
$body = {}; // object

try {
    $result = $apiInstance->createWafFirewallVersion($firewall_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WafFirewallVersionsApi->createWafFirewallVersion: ', $e->getMessage(), PHP_EOL;
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

## `deployActivateWafFirewallVersion()`

```php
deployActivateWafFirewallVersion($firewall_id, $firewall_version_number): object
```

Deploy or activate a firewall version

Deploy or activate a specific firewall version. If a firewall has been disabled, deploying a firewall version will automatically enable the firewall again.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WafFirewallVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 'firewall_id_example'; // string
$firewall_version_number = 56; // int

try {
    $result = $apiInstance->deployActivateWafFirewallVersion($firewall_id, $firewall_version_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WafFirewallVersionsApi->deployActivateWafFirewallVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firewall_id** | **string**|  |
 **firewall_version_number** | **int**|  |

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

## `getWafFirewallVersion()`

```php
getWafFirewallVersion($firewall_id, $firewall_version_number, $include): object
```

Get a firewall version

Get details about a specific firewall version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WafFirewallVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 'firewall_id_example'; // string
$firewall_version_number = 56; // int
$include = waf_firewall,waf_active_rules; // string | Include relationships. Optional, comma-separated values. Permitted values: `waf_firewall` and `waf_active_rules`.

try {
    $result = $apiInstance->getWafFirewallVersion($firewall_id, $firewall_version_number, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WafFirewallVersionsApi->getWafFirewallVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firewall_id** | **string**|  |
 **firewall_version_number** | **int**|  |
 **include** | **string**| Include relationships. Optional, comma-separated values. Permitted values: &#x60;waf_firewall&#x60; and &#x60;waf_active_rules&#x60;. | [optional]

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

## `listWafFirewallVersions()`

```php
listWafFirewallVersions($firewall_id, $include, $page_number, $page_size): object
```

List firewall versions

Get a list of firewall versions associated with a specific firewall.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WafFirewallVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 'firewall_id_example'; // string
$include = waf_firewall; // string | Include relationships. Optional. Comma-separated values. Permitted values: `waf_firewall`.
$page_number = 56; // int | Current page.
$page_size = 20; // int | Number of records per page.

try {
    $result = $apiInstance->listWafFirewallVersions($firewall_id, $include, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WafFirewallVersionsApi->listWafFirewallVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firewall_id** | **string**|  |
 **include** | **string**| Include relationships. Optional. Comma-separated values. Permitted values: &#x60;waf_firewall&#x60;. | [optional]
 **page_number** | **int**| Current page. | [optional]
 **page_size** | **int**| Number of records per page. | [optional] [default to 20]

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

## `updateWafFirewallVersion()`

```php
updateWafFirewallVersion($firewall_id, $firewall_version_number, $body): object
```

Update a firewall version

Update a specific firewall version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WafFirewallVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 'firewall_id_example'; // string
$firewall_version_number = 56; // int
$body = {"data":{"type":"waf_firewall_version","attributes":{"notice_anomaly_score":12}}}; // object

try {
    $result = $apiInstance->updateWafFirewallVersion($firewall_id, $firewall_version_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WafFirewallVersionsApi->updateWafFirewallVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firewall_id** | **string**|  |
 **firewall_version_number** | **int**|  |
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
