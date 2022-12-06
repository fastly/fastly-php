# Fastly\Api\EventsApi


```php
$apiInstance = new Fastly\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
```

## Methods

Method | Fastly API endpoint | Description
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
    $options['event_id'] = 'event_id_example'; // string | Alphanumeric string identifying an event.

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
**event_id** | **string** | Alphanumeric string identifying an event. |

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
    $options['filter_customer_id'] = x4xCwxxJxGCx123Rx5xTx; // string | Limit the results returned to a specific customer.
$options['filter_event_type'] = 'filter_event_type_example'; // string | Limit the returned events to a specific `event_type`.
$options['filter_service_id'] = 'filter_service_id_example'; // string | Limit the results returned to a specific service.
$options['filter_user_id'] = 'filter_user_id_example'; // string | Limit the results returned to a specific user.
$options['filter_token_id'] = 'filter_token_id_example'; // string | Limit the returned events to a specific token.
$options['page_number'] = 1; // int | Current page.
$options['page_size'] = 20; // int | Number of records per page.
$options['sort'] = created_at; // string | The order in which to list the results by creation date.

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
**filter_customer_id** | **string** | Limit the results returned to a specific customer. | [optional]
**filter_event_type** | **string** | Limit the returned events to a specific `event_type`. | [optional]
**filter_service_id** | **string** | Limit the results returned to a specific service. | [optional]
**filter_user_id** | **string** | Limit the results returned to a specific user. | [optional]
**filter_token_id** | **string** | Limit the returned events to a specific token. | [optional]
**page_number** | **int** | Current page. | [optional]
**page_size** | **int** | Number of records per page. | [optional] [defaults to 20]
**sort** | **string** | The order in which to list the results by creation date. | [optional] [one of: 'created_at', '-created_at'] [defaults to 'created_at']

### Return type

[**\Fastly\Model\EventsResponse**](../Model/EventsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
