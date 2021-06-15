# OpenAPI\Client\EventsApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEvent()**](EventsApi.md#getEvent) | **GET** /events/{event_id} | Get an event
[**listEvents()**](EventsApi.md#listEvents) | **GET** /events | List events


## `getEvent()`

```php
getEvent($event_id): \OpenAPI\Client\Model\ResourceEvent
```

Get an event

Get a specific event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string

try {
    $result = $apiInstance->getEvent($event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ResourceEvent**](../Model/ResourceEvent.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEvents()`

```php
listEvents($filter_event_type, $filter_customer_id, $filter_service_id, $filter_user_id, $page_number, $page_size, $sort): object
```

List events

List all events for a particular customer. Events can be filtered by user, customer and event type. Events can be sorted by date.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_event_type = 'filter_event_type_example'; // string | Limit the returned events to a specific `event_type`.
$filter_customer_id = 'filter_customer_id_example'; // string | Limit the results returned to a specific customer.
$filter_service_id = 'filter_service_id_example'; // string | Limit the results returned to a specific service.
$filter_user_id = 'filter_user_id_example'; // string | Limit the results returned to a specific user.
$page_number = 56; // int | Current page.
$page_size = 20; // int | Number of records per page.
$sort = created_at; // string | The order in which to list the results by creation date.

try {
    $result = $apiInstance->listEvents($filter_event_type, $filter_customer_id, $filter_service_id, $filter_user_id, $page_number, $page_size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->listEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_event_type** | **string**| Limit the returned events to a specific &#x60;event_type&#x60;. | [optional]
 **filter_customer_id** | **string**| Limit the results returned to a specific customer. | [optional]
 **filter_service_id** | **string**| Limit the results returned to a specific service. | [optional]
 **filter_user_id** | **string**| Limit the results returned to a specific user. | [optional]
 **page_number** | **int**| Current page. | [optional]
 **page_size** | **int**| Number of records per page. | [optional] [default to 20]
 **sort** | **string**| The order in which to list the results by creation date. | [optional] [default to &#39;created_at&#39;]

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
