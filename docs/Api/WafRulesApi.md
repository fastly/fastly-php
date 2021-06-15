# OpenAPI\Client\WafRulesApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getWafRule()**](WafRulesApi.md#getWafRule) | **GET** /waf/rules/{waf_rule_id} | Get a rule
[**listWafRules()**](WafRulesApi.md#listWafRules) | **GET** /waf/rules | List available WAF rules


## `getWafRule()`

```php
getWafRule($waf_rule_id, $include): object
```

Get a rule

Get a specific rule. The `id` provided can be the ModSecurity Rule ID or the Fastly generated rule ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WafRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$waf_rule_id = 'waf_rule_id_example'; // string
$include = waf_tags,waf_rule_revisions; // string | Include relationships. Optional, comma-separated values. Permitted values: `waf_tags` and `waf_rule_revisions`.

try {
    $result = $apiInstance->getWafRule($waf_rule_id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WafRulesApi->getWafRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **waf_rule_id** | **string**|  |
 **include** | **string**| Include relationships. Optional, comma-separated values. Permitted values: &#x60;waf_tags&#x60; and &#x60;waf_rule_revisions&#x60;. | [optional]

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

## `listWafRules()`

```php
listWafRules($filter_modsec_rule_id, $filter_waf_tags_name, $filter_waf_rule_revisions_source, $filter_waf_firewall_id_not_match, $page_number, $page_size, $include): object
```

List available WAF rules

List all available WAF rules.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WafRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_modsec_rule_id = 'filter_modsec_rule_id_example'; // string | Limit the returned rules to a specific ModSecurity rule ID.
$filter_waf_tags_name = 'filter_waf_tags_name_example'; // string | Limit the returned rules to a set linked to a tag by name.
$filter_waf_rule_revisions_source = 'filter_waf_rule_revisions_source_example'; // string | Limit the returned rules to a set linked to a source.
$filter_waf_firewall_id_not_match = 'filter_waf_firewall_id_not_match_example'; // string | Limit the returned rules to a set not included in the active firewall version for a firewall.
$page_number = 56; // int | Current page.
$page_size = 20; // int | Number of records per page.
$include = waf_tags,waf_rule_revisions; // string | Include relationships. Optional, comma-separated values. Permitted values: `waf_tags` and `waf_rule_revisions`.

try {
    $result = $apiInstance->listWafRules($filter_modsec_rule_id, $filter_waf_tags_name, $filter_waf_rule_revisions_source, $filter_waf_firewall_id_not_match, $page_number, $page_size, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WafRulesApi->listWafRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_modsec_rule_id** | **string**| Limit the returned rules to a specific ModSecurity rule ID. | [optional]
 **filter_waf_tags_name** | **string**| Limit the returned rules to a set linked to a tag by name. | [optional]
 **filter_waf_rule_revisions_source** | **string**| Limit the returned rules to a set linked to a source. | [optional]
 **filter_waf_firewall_id_not_match** | **string**| Limit the returned rules to a set not included in the active firewall version for a firewall. | [optional]
 **page_number** | **int**| Current page. | [optional]
 **page_size** | **int**| Number of records per page. | [optional] [default to 20]
 **include** | **string**| Include relationships. Optional, comma-separated values. Permitted values: &#x60;waf_tags&#x60; and &#x60;waf_rule_revisions&#x60;. | [optional]

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
