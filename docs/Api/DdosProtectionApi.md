# Fastly\Api\DdosProtectionApi


```php
$apiInstance = new Fastly\Api\DdosProtectionApi(
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
[**ddosProtectionEventGet()**](DdosProtectionApi.md#ddosProtectionEventGet) | **GET** /ddos-protection/v1/events/{event_id} | Get event by ID
[**ddosProtectionEventList()**](DdosProtectionApi.md#ddosProtectionEventList) | **GET** /ddos-protection/v1/events | Get events
[**ddosProtectionEventRuleList()**](DdosProtectionApi.md#ddosProtectionEventRuleList) | **GET** /ddos-protection/v1/events/{event_id}/rules | Get all rules for an event
[**ddosProtectionRuleGet()**](DdosProtectionApi.md#ddosProtectionRuleGet) | **GET** /ddos-protection/v1/rules/{rule_id} | Get a rule by ID
[**ddosProtectionRulePatch()**](DdosProtectionApi.md#ddosProtectionRulePatch) | **PATCH** /ddos-protection/v1/rules/{rule_id} | Update rule
[**ddosProtectionTrafficStatsRuleGet()**](DdosProtectionApi.md#ddosProtectionTrafficStatsRuleGet) | **GET** /ddos-protection/v1/events/{event_id}/rules/{rule_id}/traffic-stats | Get traffic stats for a rule


## `ddosProtectionEventGet()`

```php
ddosProtectionEventGet($options): \Fastly\Model\DdosProtectionEvent // Get event by ID
```

Get event by ID.

### Example
```php
    $options['event_id'] = 'event_id_example'; // string | Unique ID of the event.

try {
    $result = $apiInstance->ddosProtectionEventGet($options);
} catch (Exception $e) {
    echo 'Exception when calling DdosProtectionApi->ddosProtectionEventGet: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**event_id** | **string** | Unique ID of the event. |

### Return type

[**\Fastly\Model\DdosProtectionEvent**](../Model/DdosProtectionEvent.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `ddosProtectionEventList()`

```php
ddosProtectionEventList($options): \Fastly\Model\InlineResponse2002 // Get events
```

Get events.

### Example
```php
    $options['cursor'] = 'cursor_example'; // string | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty.
$options['limit'] = 20; // int | Limit how many results are returned.
$options['service_id'] = 'service_id_example'; // string | Filter results based on a service_id.
$options['from'] = 2023-01-01T02:30Z; // \DateTime | Represents the start of a date-time range expressed in RFC 3339 format.
$options['to'] = 2023-01-01T02:30Z; // \DateTime | Represents the end of a date-time range expressed in RFC 3339 format.
$options['name'] = 'name_example'; // string

try {
    $result = $apiInstance->ddosProtectionEventList($options);
} catch (Exception $e) {
    echo 'Exception when calling DdosProtectionApi->ddosProtectionEventList: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**cursor** | **string** | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty. | [optional]
**limit** | **int** | Limit how many results are returned. | [optional] [defaults to 20]
**service_id** | **string** | Filter results based on a service_id. | [optional]
**from** | **\DateTime** | Represents the start of a date-time range expressed in RFC 3339 format. | [optional]
**to** | **\DateTime** | Represents the end of a date-time range expressed in RFC 3339 format. | [optional]
**name** | **string** |  | [optional]

### Return type

[**\Fastly\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `ddosProtectionEventRuleList()`

```php
ddosProtectionEventRuleList($options): \Fastly\Model\InlineResponse2003 // Get all rules for an event
```

Get all rules for an event.

### Example
```php
    $options['event_id'] = 'event_id_example'; // string | Unique ID of the event.
$options['cursor'] = 'cursor_example'; // string | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty.
$options['limit'] = 20; // int | Limit how many results are returned.

try {
    $result = $apiInstance->ddosProtectionEventRuleList($options);
} catch (Exception $e) {
    echo 'Exception when calling DdosProtectionApi->ddosProtectionEventRuleList: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**event_id** | **string** | Unique ID of the event. |
**cursor** | **string** | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty. | [optional]
**limit** | **int** | Limit how many results are returned. | [optional] [defaults to 20]

### Return type

[**\Fastly\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `ddosProtectionRuleGet()`

```php
ddosProtectionRuleGet($options): \Fastly\Model\DdosProtectionRule // Get a rule by ID
```

Get a rule by ID.

### Example
```php
    $options['rule_id'] = 'rule_id_example'; // string | Unique ID of the rule.

try {
    $result = $apiInstance->ddosProtectionRuleGet($options);
} catch (Exception $e) {
    echo 'Exception when calling DdosProtectionApi->ddosProtectionRuleGet: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**rule_id** | **string** | Unique ID of the rule. |

### Return type

[**\Fastly\Model\DdosProtectionRule**](../Model/DdosProtectionRule.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `ddosProtectionRulePatch()`

```php
ddosProtectionRulePatch($options): \Fastly\Model\DdosProtectionRule // Update rule
```

Update rule.

### Example
```php
    $options['rule_id'] = 'rule_id_example'; // string | Unique ID of the rule.
$options['ddos_protection_rule_patch'] = new \Fastly\Model\DdosProtectionRulePatch(); // \Fastly\Model\DdosProtectionRulePatch

try {
    $result = $apiInstance->ddosProtectionRulePatch($options);
} catch (Exception $e) {
    echo 'Exception when calling DdosProtectionApi->ddosProtectionRulePatch: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**rule_id** | **string** | Unique ID of the rule. |
**ddos_protection_rule_patch** | [**\Fastly\Model\DdosProtectionRulePatch**](../Model/DdosProtectionRulePatch.md) |  | [optional]

### Return type

[**\Fastly\Model\DdosProtectionRule**](../Model/DdosProtectionRule.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `ddosProtectionTrafficStatsRuleGet()`

```php
ddosProtectionTrafficStatsRuleGet($options): \Fastly\Model\DdosProtectionTrafficStats // Get traffic stats for a rule
```

Get traffic stats for a rule.

### Example
```php
    $options['event_id'] = 'event_id_example'; // string | Unique ID of the event.
$options['rule_id'] = 'rule_id_example'; // string | Unique ID of the rule.

try {
    $result = $apiInstance->ddosProtectionTrafficStatsRuleGet($options);
} catch (Exception $e) {
    echo 'Exception when calling DdosProtectionApi->ddosProtectionTrafficStatsRuleGet: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**event_id** | **string** | Unique ID of the event. |
**rule_id** | **string** | Unique ID of the rule. |

### Return type

[**\Fastly\Model\DdosProtectionTrafficStats**](../Model/DdosProtectionTrafficStats.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
