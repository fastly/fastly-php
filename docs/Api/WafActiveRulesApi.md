# OpenAPI\Client\WafActiveRulesApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkDeleteWafActiveRules()**](WafActiveRulesApi.md#bulkDeleteWafActiveRules) | **DELETE** /waf/firewalls/{firewall_id}/versions/{version_id}/active-rules | Delete multiple active rules from a WAF
[**bulkUpdateWafActiveRules()**](WafActiveRulesApi.md#bulkUpdateWafActiveRules) | **PATCH** /waf/firewalls/{firewall_id}/versions/{version_id}/active-rules/bulk | Update multiple active rules
[**createWafActiveRule()**](WafActiveRulesApi.md#createWafActiveRule) | **POST** /waf/firewalls/{firewall_id}/versions/{version_id}/active-rules | Add a rule to a WAF as an active rule
[**createWafActiveRulesTag()**](WafActiveRulesApi.md#createWafActiveRulesTag) | **POST** /waf/firewalls/{firewall_id}/versions/{version_id}/tags/{waf_tag_name}/active-rules | Create active rules by tag
[**deleteWafActiveRule()**](WafActiveRulesApi.md#deleteWafActiveRule) | **DELETE** /waf/firewalls/{firewall_id}/versions/{version_id}/active-rules/{waf_rule_id} | Delete an active rule
[**getWafActiveRule()**](WafActiveRulesApi.md#getWafActiveRule) | **GET** /waf/firewalls/{firewall_id}/versions/{version_id}/active-rules/{waf_rule_id} | Get an active WAF rule object
[**listWafActiveRules()**](WafActiveRulesApi.md#listWafActiveRules) | **GET** /waf/firewalls/{firewall_id}/versions/{version_id}/active-rules | List active rules on a WAF
[**updateWafActiveRule()**](WafActiveRulesApi.md#updateWafActiveRule) | **PATCH** /waf/firewalls/{firewall_id}/versions/{version_id}/active-rules/{waf_rule_id} | Update an active rule


## `bulkDeleteWafActiveRules()`

```php
bulkDeleteWafActiveRules($firewall_id, $version_id, $body)
```

Delete multiple active rules from a WAF

Delete many active rules on a particular firewall version using the active rule ID. Limited to 500 rules per request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WafActiveRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 'firewall_id_example'; // string
$version_id = 56; // int
$body = {"data":[{"type":"waf_active_rule","id":"3krg2uUGZzb2W9Euo4moOR"}]}; // object

try {
    $apiInstance->bulkDeleteWafActiveRules($firewall_id, $version_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling WafActiveRulesApi->bulkDeleteWafActiveRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firewall_id** | **string**|  |
 **version_id** | **int**|  |
 **body** | **object**|  | [optional]

### Return type

void (empty response body)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/vnd.api+json; ext=bulk`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkUpdateWafActiveRules()`

```php
bulkUpdateWafActiveRules($firewall_id, $version_id, $body)
```

Update multiple active rules

Bulk update all active rules on a [firewall version](https://developer.fastly.com/reference/api/waf/firewall-version/). This endpoint will not add new active rules, only update existing active rules.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WafActiveRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 'firewall_id_example'; // string
$version_id = 56; // int
$body = {"type":"waf_active_rule","attributes":{"revision":"latest"}}; // object

try {
    $apiInstance->bulkUpdateWafActiveRules($firewall_id, $version_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling WafActiveRulesApi->bulkUpdateWafActiveRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firewall_id** | **string**|  |
 **version_id** | **int**|  |
 **body** | **object**|  | [optional]

### Return type

void (empty response body)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/vnd.api+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWafActiveRule()`

```php
createWafActiveRule($firewall_id, $version_id, $body): object
```

Add a rule to a WAF as an active rule

Create an active rule for a particular firewall version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WafActiveRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 'firewall_id_example'; // string
$version_id = 56; // int
$body = {"data":{"type":"waf_active_rule","attributes":{"status":"log"},"relationships":{"waf_rule_revision":{"data":{"type":"waf_rule_revision","id":"r3Vg2uUGZzb2W9Euo4mo0R","examples":null}}}}}; // object

try {
    $result = $apiInstance->createWafActiveRule($firewall_id, $version_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WafActiveRulesApi->createWafActiveRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firewall_id** | **string**|  |
 **version_id** | **int**|  |
 **body** | **object**|  | [optional]

### Return type

**object**

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/vnd.api+json`, `application/vnd.api+json; ext=bulk`
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWafActiveRulesTag()`

```php
createWafActiveRulesTag($firewall_id, $version_id, $waf_tag_name, $body)
```

Create active rules by tag

Create active rules by tag. This endpoint will create active rules using the latest revision available for each rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WafActiveRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 'firewall_id_example'; // string
$version_id = 56; // int
$waf_tag_name = 'waf_tag_name_example'; // string
$body = {"data":{"type":"waf_active_rule","attributes":{"status":"log"}}}; // object

try {
    $apiInstance->createWafActiveRulesTag($firewall_id, $version_id, $waf_tag_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling WafActiveRulesApi->createWafActiveRulesTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firewall_id** | **string**|  |
 **version_id** | **int**|  |
 **waf_tag_name** | **string**|  |
 **body** | **object**|  | [optional]

### Return type

void (empty response body)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/vnd.api+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWafActiveRule()`

```php
deleteWafActiveRule($firewall_id, $version_id, $waf_rule_id)
```

Delete an active rule

Delete an active rule for a particular firewall version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WafActiveRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 'firewall_id_example'; // string
$version_id = 56; // int
$waf_rule_id = 'waf_rule_id_example'; // string

try {
    $apiInstance->deleteWafActiveRule($firewall_id, $version_id, $waf_rule_id);
} catch (Exception $e) {
    echo 'Exception when calling WafActiveRulesApi->deleteWafActiveRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firewall_id** | **string**|  |
 **version_id** | **int**|  |
 **waf_rule_id** | **string**|  |

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

## `getWafActiveRule()`

```php
getWafActiveRule($firewall_id, $version_id, $waf_rule_id, $include): object
```

Get an active WAF rule object

Get a specific active rule object. Includes details of the rule revision associated with the active rule object by default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WafActiveRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 'firewall_id_example'; // string
$version_id = 56; // int
$waf_rule_id = 'waf_rule_id_example'; // string
$include = waf_rule_revision,waf_firewall_version; // string | Include relationships. Optional, comma-separated values. Permitted values: `waf_rule_revision` and `waf_firewall_version`.

try {
    $result = $apiInstance->getWafActiveRule($firewall_id, $version_id, $waf_rule_id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WafActiveRulesApi->getWafActiveRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firewall_id** | **string**|  |
 **version_id** | **int**|  |
 **waf_rule_id** | **string**|  |
 **include** | **string**| Include relationships. Optional, comma-separated values. Permitted values: &#x60;waf_rule_revision&#x60; and &#x60;waf_firewall_version&#x60;. | [optional]

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

## `listWafActiveRules()`

```php
listWafActiveRules($firewall_id, $version_id, $filter_status, $filter_waf_rule_revision_message, $filter_waf_rule_revision_modsec_rule_id, $filter_outdated, $include, $page_number, $page_size): object
```

List active rules on a WAF

List all active rules for a particular firewall version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WafActiveRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 'firewall_id_example'; // string
$version_id = 56; // int
$filter_status = 'filter_status_example'; // string | Limit results to active rules with the specified status.
$filter_waf_rule_revision_message = 'filter_waf_rule_revision_message_example'; // string | Limit results to active rules with the specified message.
$filter_waf_rule_revision_modsec_rule_id = 'filter_waf_rule_revision_modsec_rule_id_example'; // string | Limit results to active rules that represent the specified ModSecurity modsec_rule_id.
$filter_outdated = 'filter_outdated_example'; // string | Limit results to active rules referencing an outdated rule revision.
$include = waf_rule_revision,waf_firewall_version; // string | Include relationships. Optional, comma-separated values. Permitted values: `waf_rule_revision` and `waf_firewall_version`.
$page_number = 56; // int | Current page.
$page_size = 20; // int | Number of records per page.

try {
    $result = $apiInstance->listWafActiveRules($firewall_id, $version_id, $filter_status, $filter_waf_rule_revision_message, $filter_waf_rule_revision_modsec_rule_id, $filter_outdated, $include, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WafActiveRulesApi->listWafActiveRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firewall_id** | **string**|  |
 **version_id** | **int**|  |
 **filter_status** | **string**| Limit results to active rules with the specified status. | [optional]
 **filter_waf_rule_revision_message** | **string**| Limit results to active rules with the specified message. | [optional]
 **filter_waf_rule_revision_modsec_rule_id** | **string**| Limit results to active rules that represent the specified ModSecurity modsec_rule_id. | [optional]
 **filter_outdated** | **string**| Limit results to active rules referencing an outdated rule revision. | [optional]
 **include** | **string**| Include relationships. Optional, comma-separated values. Permitted values: &#x60;waf_rule_revision&#x60; and &#x60;waf_firewall_version&#x60;. | [optional]
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

## `updateWafActiveRule()`

```php
updateWafActiveRule($firewall_id, $version_id, $waf_rule_id, $body): object
```

Update an active rule

Update an active rule's status for a particular firewall version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WafActiveRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 'firewall_id_example'; // string
$version_id = 56; // int
$waf_rule_id = 'waf_rule_id_example'; // string
$body = {"data":{"id":"3krg2uUGZzb2W9Euo4moOR","type":"waf_active_rule","attributes":{"status":"block"}}}; // object

try {
    $result = $apiInstance->updateWafActiveRule($firewall_id, $version_id, $waf_rule_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WafActiveRulesApi->updateWafActiveRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firewall_id** | **string**|  |
 **version_id** | **int**|  |
 **waf_rule_id** | **string**|  |
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
