# Fastly\Api\WafRuleRevisionsApi


```php
$apiInstance = new Fastly\Api\WafRuleRevisionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**getWafRuleRevision()**](WafRuleRevisionsApi.md#getWafRuleRevision) | **GET** /waf/rules/{waf_rule_id}/revisions/{waf_rule_revision_number} | Get a revision of a rule
[**listWafRuleRevisions()**](WafRuleRevisionsApi.md#listWafRuleRevisions) | **GET** /waf/rules/{waf_rule_id}/revisions | List revisions for a rule


## `getWafRuleRevision()`

```php
getWafRuleRevision($options): \Fastly\Model\WafRuleRevisionResponse // Get a revision of a rule
```

Get a specific rule revision.

### Example
```php
try {
    $result = $apiInstance->getWafRuleRevision($options);
} catch (Exception $e) {
    echo 'Exception when calling WafRuleRevisionsApi->getWafRuleRevision: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**waf_rule_id** | **string** |  |
**waf_rule_revision_number** | **int** |  |
**include** | **string** | Include relationships. Optional, comma-separated values. Permitted values: &#x60;waf_rule&#x60;, &#x60;vcl&#x60;, and &#x60;source&#x60;. The &#x60;vcl&#x60; and &#x60;source&#x60; relationships show the WAF VCL and corresponding ModSecurity source. These fields are blank unless the relationship is included. | [optional]

### Return type

[**\Fastly\Model\WafRuleRevisionResponse**](../Model/WafRuleRevisionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWafRuleRevisions()`

```php
listWafRuleRevisions($options): \Fastly\Model\WafRuleRevisionsResponse // List revisions for a rule
```

List all revisions for a specific rule. The `rule_id` provided can be the ModSecurity Rule ID or the Fastly generated rule ID.

### Example
```php
try {
    $result = $apiInstance->listWafRuleRevisions($options);
} catch (Exception $e) {
    echo 'Exception when calling WafRuleRevisionsApi->listWafRuleRevisions: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**waf_rule_id** | **string** |  |
**page_number** | **int** | Current page. | [optional]
**page_size** | **int** | Number of records per page. | [optional] [default to 20]
**include** | **string** | Include relationships. Optional. | [optional] [default to &#39;waf_rule&#39;]

### Return type

[**\Fastly\Model\WafRuleRevisionsResponse**](../Model/WafRuleRevisionsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
