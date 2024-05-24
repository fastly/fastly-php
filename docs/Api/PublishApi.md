# Fastly\Api\PublishApi


```php
$apiInstance = new Fastly\Api\PublishApi(
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
[**publish()**](PublishApi.md#publish) | **POST** /service/{service_id}/publish/ | Send messages to Fanout subscribers


## `publish()`

```php
publish($options): string // Send messages to Fanout subscribers
```

Send one or more messages to [Fanout](https://www.fastly.com/documentation/learning/concepts/real-time-messaging/fanout) subscribers. Each message specifies a channel, and Fanout will deliver the message to all subscribers of its channel. > **IMPORTANT:** For compatibility with GRIP, this endpoint requires a trailing slash, and the API token may be provided in the `Authorization` header (instead of the `Fastly-Key` header) using the `Bearer` scheme.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['publish_request'] = {"items":[{"channel":"mychannel","formats":{"ws-message":{"content":"hello world"}}}]}; // \Fastly\Model\PublishRequest

try {
    $result = $apiInstance->publish($options);
} catch (Exception $e) {
    echo 'Exception when calling PublishApi->publish: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**publish_request** | [**\Fastly\Model\PublishRequest**](../Model/PublishRequest.md) |  | [optional]

### Return type

**string**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
