# Fastly\Api\EventsApi


```php
$apiInstance = new Fastly\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEvent()**](EventsApi.md#getEvent) | **GET** /events/{event_id} | Get an event
[**listEvents()**](EventsApi.md#listEvents) | **GET** /events | List events


## `getEvent()`

```php
getEvent($options): \Fastly\Model\EventResponse // Get an event
```

Get a specific event.

### Example
```php
try {
    $result = $apiInstance->getEvent($options);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**event_id** | **string** |  |

### Return type

[**\Fastly\Model\EventResponse**](../Model/EventResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listEvents()`

```php
listEvents($options): \Fastly\Model\EventsResponse // List events
```

List all events for a particular customer. Events can be filtered by user, customer and event type. Events can be sorted by date.

### Example
```php
try {
    $result = $apiInstance->listEvents($options);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->listEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**filter_event_type** | **string** | Limit the returned events to a specific &#x60;event_type&#x60;. | [optional]
**filter_customer_id** | **string** | Limit the results returned to a specific customer. | [optional]
**filter_service_id** | **string** | Limit the results returned to a specific service. | [optional]
**filter_user_id** | **string** | Limit the results returned to a specific user. | [optional]
**page_number** | **int** | Current page. | [optional]
**page_size** | **int** | Number of records per page. | [optional] [default to 20]
**sort** | **string** | The order in which to list the results by creation date. | [optional] [default to &#39;created_at&#39;]

### Return type

[**\Fastly\Model\EventsResponse**](../Model/EventsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
