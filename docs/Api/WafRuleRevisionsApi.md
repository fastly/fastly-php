# OpenAPI\Client\WafRuleRevisionsApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getWafRuleRevision()**](WafRuleRevisionsApi.md#getWafRuleRevision) | **GET** /waf/rules/{waf_rule_id}/revisions/{waf_rule_revision_number} | Get a revision of a rule
[**listWafRuleRevisions()**](WafRuleRevisionsApi.md#listWafRuleRevisions) | **GET** /waf/rules/{waf_rule_id}/revisions | List revisions for a rule


## `getWafRuleRevision()`

```php
getWafRuleRevision($waf_rule_id, $waf_rule_revision_number, $include): object
```

Get a revision of a rule

Get a specific rule revision.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WafRuleRevisionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$waf_rule_id = 'waf_rule_id_example'; // string
$waf_rule_revision_number = 56; // int
$include = source,vcl,waf_rule; // string | Include relationships. Optional, comma-separated values. Permitted values: `waf_rule`, `vcl`, and `source`. The `vcl` and `source` relationships show the WAF VCL and corresponding ModSecurity source. These fields are blank unless the relationship is included.

try {
    $result = $apiInstance->getWafRuleRevision($waf_rule_id, $waf_rule_revision_number, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WafRuleRevisionsApi->getWafRuleRevision: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **waf_rule_id** | **string**|  |
 **waf_rule_revision_number** | **int**|  |
 **include** | **string**| Include relationships. Optional, comma-separated values. Permitted values: &#x60;waf_rule&#x60;, &#x60;vcl&#x60;, and &#x60;source&#x60;. The &#x60;vcl&#x60; and &#x60;source&#x60; relationships show the WAF VCL and corresponding ModSecurity source. These fields are blank unless the relationship is included. | [optional]

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

## `listWafRuleRevisions()`

```php
listWafRuleRevisions($waf_rule_id, $page_number, $page_size, $include): object
```

List revisions for a rule

List all revisions for a specific rule. The `rule_id` provided can be the ModSecurity Rule ID or the Fastly generated rule ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WafRuleRevisionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$waf_rule_id = 'waf_rule_id_example'; // string
$page_number = 56; // int | Current page.
$page_size = 20; // int | Number of records per page.
$include = waf_rule; // string | Include relationships. Optional. Comma-separated values. Permitted values: `waf_rule`.

try {
    $result = $apiInstance->listWafRuleRevisions($waf_rule_id, $page_number, $page_size, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WafRuleRevisionsApi->listWafRuleRevisions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **waf_rule_id** | **string**|  |
 **page_number** | **int**| Current page. | [optional]
 **page_size** | **int**| Number of records per page. | [optional] [default to 20]
 **include** | **string**| Include relationships. Optional. Comma-separated values. Permitted values: &#x60;waf_rule&#x60;. | [optional]

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
