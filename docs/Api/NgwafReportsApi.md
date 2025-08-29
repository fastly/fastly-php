# Fastly\Api\NgwafReportsApi


```php
$apiInstance = new Fastly\Api\NgwafReportsApi(
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
[**getAttacksReport()**](NgwafReportsApi.md#getAttacksReport) | **GET** /ngwaf/v1/reports/attacks | Get attacks report
[**getSignalsReport()**](NgwafReportsApi.md#getSignalsReport) | **GET** /ngwaf/v1/reports/signals | Get signals report


## `getAttacksReport()`

```php
getAttacksReport($options): \Fastly\Model\ListAttackReport // Get attacks report
```

Get attacks report

### Example
```php
    $options['from'] = 2019-08-20T18:07:33Z; // \DateTime | The start of a time range in RFC 3339 format.
$options['to'] = 2019-08-21T18:07:33Z; // \DateTime | The end of a time range in RFC 3339 format. Defaults to the current time.

try {
    $result = $apiInstance->getAttacksReport($options);
} catch (Exception $e) {
    echo 'Exception when calling NgwafReportsApi->getAttacksReport: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**from** | **\DateTime** | The start of a time range in RFC 3339 format. |
**to** | **\DateTime** | The end of a time range in RFC 3339 format. Defaults to the current time. | [optional]

### Return type

[**\Fastly\Model\ListAttackReport**](../Model/ListAttackReport.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getSignalsReport()`

```php
getSignalsReport($options): \Fastly\Model\ListSignalReport // Get signals report
```

Get signals report

### Example
```php
    $options['from'] = 2019-08-20T18:07:33Z; // \DateTime | The start of a time range in RFC 3339 format.
$options['to'] = 2019-08-21T18:07:33Z; // \DateTime | The end of a time range in RFC 3339 format. Defaults to the current time.
$options['signal_type'] = all; // string | The type of signal

try {
    $result = $apiInstance->getSignalsReport($options);
} catch (Exception $e) {
    echo 'Exception when calling NgwafReportsApi->getSignalsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**from** | **\DateTime** | The start of a time range in RFC 3339 format. |
**to** | **\DateTime** | The end of a time range in RFC 3339 format. Defaults to the current time. | [optional]
**signal_type** | **string** | The type of signal | [optional] [one of: 'account', 'anomaly', 'attack', 'bot', 'all']

### Return type

[**\Fastly\Model\ListSignalReport**](../Model/ListSignalReport.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
