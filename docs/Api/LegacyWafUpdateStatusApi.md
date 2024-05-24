# Fastly\Api\LegacyWafUpdateStatusApi


```php
$apiInstance = new Fastly\Api\LegacyWafUpdateStatusApi(
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
[**getWafUpdateStatus()**](LegacyWafUpdateStatusApi.md#getWafUpdateStatus) | **GET** /service/{service_id}/wafs/{firewall_id}/update_statuses/{update_status_id} | Get the status of a WAF update
[**listWafUpdateStatuses()**](LegacyWafUpdateStatusApi.md#listWafUpdateStatuses) | **GET** /service/{service_id}/wafs/{firewall_id}/update_statuses | List update statuses


## `getWafUpdateStatus()`

```php
getWafUpdateStatus($options): object // Get the status of a WAF update
```

Get a specific update status object for a particular service and firewall object.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['firewall_id'] = 'firewall_id_example'; // string | Alphanumeric string identifying a Firewall.
$options['update_status_id'] = 'update_status_id_example'; // string | Alphanumeric string identifying a WAF update status.

try {
    $result = $apiInstance->getWafUpdateStatus($options);
} catch (Exception $e) {
    echo 'Exception when calling LegacyWafUpdateStatusApi->getWafUpdateStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**firewall_id** | **string** | Alphanumeric string identifying a Firewall. |
**update_status_id** | **string** | Alphanumeric string identifying a WAF update status. |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWafUpdateStatuses()`

```php
listWafUpdateStatuses($options): object // List update statuses
```

List all update statuses for a particular service and firewall object.

### Example
```php
    $options['page_number'] = 1; // int | Current page.
$options['page_size'] = 20; // int | Number of records per page.
$options['include'] = waf; // string | Include relationships. Optional, comma separated values. Permitted values: `waf`.
$options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['firewall_id'] = 'firewall_id_example'; // string | Alphanumeric string identifying a Firewall.

try {
    $result = $apiInstance->listWafUpdateStatuses($options);
} catch (Exception $e) {
    echo 'Exception when calling LegacyWafUpdateStatusApi->listWafUpdateStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**page_number** | **int** | Current page. | [optional]
**page_size** | **int** | Number of records per page. | [optional] [defaults to 20]
**include** | **string** | Include relationships. Optional, comma separated values. Permitted values: `waf`. | [optional]
**service_id** | **string** | Alphanumeric string identifying the service. |
**firewall_id** | **string** | Alphanumeric string identifying a Firewall. |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
