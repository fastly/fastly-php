# OpenAPI\Client\WafExclusionsApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWafRuleExclusion()**](WafExclusionsApi.md#createWafRuleExclusion) | **POST** /waf/firewalls/{firewall_id}/versions/{firewall_version_number}/exclusions | Create a WAF rule exclusion
[**deleteWafRuleExclusion()**](WafExclusionsApi.md#deleteWafRuleExclusion) | **DELETE** /waf/firewalls/{firewall_id}/versions/{firewall_version_number}/exclusions/{exclusion_number} | Delete a WAF rule exclusion
[**getWafRuleExclusion()**](WafExclusionsApi.md#getWafRuleExclusion) | **GET** /waf/firewalls/{firewall_id}/versions/{firewall_version_number}/exclusions/{exclusion_number} | Get a WAF rule exclusion
[**listWafRuleExclusions()**](WafExclusionsApi.md#listWafRuleExclusions) | **GET** /waf/firewalls/{firewall_id}/versions/{firewall_version_number}/exclusions | List WAF rule exclusions
[**updateWafRuleExclusion()**](WafExclusionsApi.md#updateWafRuleExclusion) | **PATCH** /waf/firewalls/{firewall_id}/versions/{firewall_version_number}/exclusions/{exclusion_number} | Update a WAF rule exclusion


## `createWafRuleExclusion()`

```php
createWafRuleExclusion($firewall_id, $firewall_version_number, $inline_object2)
```

Create a WAF rule exclusion

Create a WAF exclusion for a particular firewall version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WafExclusionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 'firewall_id_example'; // string
$firewall_version_number = 56; // int
$inline_object2 = new \OpenAPI\Client\Model\InlineObject2(); // \OpenAPI\Client\Model\InlineObject2

try {
    $apiInstance->createWafRuleExclusion($firewall_id, $firewall_version_number, $inline_object2);
} catch (Exception $e) {
    echo 'Exception when calling WafExclusionsApi->createWafRuleExclusion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firewall_id** | **string**|  |
 **firewall_version_number** | **int**|  |
 **inline_object2** | [**\OpenAPI\Client\Model\InlineObject2**](../Model/InlineObject2.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/vnd.api+json`
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWafRuleExclusion()`

```php
deleteWafRuleExclusion($firewall_id, $firewall_version_number, $exclusion_number)
```

Delete a WAF rule exclusion

Delete a WAF exclusion for a particular firewall version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WafExclusionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 'firewall_id_example'; // string
$firewall_version_number = 56; // int
$exclusion_number = 56; // int

try {
    $apiInstance->deleteWafRuleExclusion($firewall_id, $firewall_version_number, $exclusion_number);
} catch (Exception $e) {
    echo 'Exception when calling WafExclusionsApi->deleteWafRuleExclusion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firewall_id** | **string**|  |
 **firewall_version_number** | **int**|  |
 **exclusion_number** | **int**|  |

### Return type

void (empty response body)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWafRuleExclusion()`

```php
getWafRuleExclusion($firewall_id, $firewall_version_number, $exclusion_number)
```

Get a WAF rule exclusion

Get a specific WAF exclusion object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WafExclusionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 'firewall_id_example'; // string
$firewall_version_number = 56; // int
$exclusion_number = 56; // int

try {
    $apiInstance->getWafRuleExclusion($firewall_id, $firewall_version_number, $exclusion_number);
} catch (Exception $e) {
    echo 'Exception when calling WafExclusionsApi->getWafRuleExclusion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firewall_id** | **string**|  |
 **firewall_version_number** | **int**|  |
 **exclusion_number** | **int**|  |

### Return type

void (empty response body)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWafRuleExclusions()`

```php
listWafRuleExclusions($firewall_id, $firewall_version_number, $filter_exclusion_type, $filter_name, $filter_waf_rules_modsec_rule_id, $page_number, $page_size, $include)
```

List WAF rule exclusions

List all exclusions for a particular firewall version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WafExclusionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 'firewall_id_example'; // string
$firewall_version_number = 56; // int
$filter_exclusion_type = 'filter_exclusion_type_example'; // string | Filters the results based on this exclusion type.
$filter_name = 'filter_name_example'; // string | Filters the results based on name.
$filter_waf_rules_modsec_rule_id = 56; // int | Filters the results based on this ModSecurity rule ID.
$page_number = 56; // int | Current page.
$page_size = 20; // int | Number of records per page.
$include = 'include_example'; // string | Include relationships. Optional, comma-separated values. Permitted values: `waf_rules` and `waf_rule_revisions`.

try {
    $apiInstance->listWafRuleExclusions($firewall_id, $firewall_version_number, $filter_exclusion_type, $filter_name, $filter_waf_rules_modsec_rule_id, $page_number, $page_size, $include);
} catch (Exception $e) {
    echo 'Exception when calling WafExclusionsApi->listWafRuleExclusions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firewall_id** | **string**|  |
 **firewall_version_number** | **int**|  |
 **filter_exclusion_type** | **string**| Filters the results based on this exclusion type. | [optional]
 **filter_name** | **string**| Filters the results based on name. | [optional]
 **filter_waf_rules_modsec_rule_id** | **int**| Filters the results based on this ModSecurity rule ID. | [optional]
 **page_number** | **int**| Current page. | [optional]
 **page_size** | **int**| Number of records per page. | [optional] [default to 20]
 **include** | **string**| Include relationships. Optional, comma-separated values. Permitted values: &#x60;waf_rules&#x60; and &#x60;waf_rule_revisions&#x60;. | [optional]

### Return type

void (empty response body)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWafRuleExclusion()`

```php
updateWafRuleExclusion($firewall_id, $firewall_version_number, $exclusion_number, $inline_object3)
```

Update a WAF rule exclusion

Update a WAF exclusion for a particular firewall version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WafExclusionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 'firewall_id_example'; // string
$firewall_version_number = 56; // int
$exclusion_number = 56; // int
$inline_object3 = new \OpenAPI\Client\Model\InlineObject3(); // \OpenAPI\Client\Model\InlineObject3

try {
    $apiInstance->updateWafRuleExclusion($firewall_id, $firewall_version_number, $exclusion_number, $inline_object3);
} catch (Exception $e) {
    echo 'Exception when calling WafExclusionsApi->updateWafRuleExclusion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firewall_id** | **string**|  |
 **firewall_version_number** | **int**|  |
 **exclusion_number** | **int**|  |
 **inline_object3** | [**\OpenAPI\Client\Model\InlineObject3**](../Model/InlineObject3.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/vnd.api+json`
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
