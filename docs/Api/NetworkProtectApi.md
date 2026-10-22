# Fastly\Api\NetworkProtectApi


```php
$apiInstance = new Fastly\Api\NetworkProtectApi(
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
[**createNetworkProtectEndpoint()**](NetworkProtectApi.md#createNetworkProtectEndpoint) | **POST** /network-protect/v1/endpoints | Create a Network Protect endpoint
[**createNetworkProtectNetwork()**](NetworkProtectApi.md#createNetworkProtectNetwork) | **POST** /network-protect/v1/networks | Create a Network Protect network
[**createNetworkProtectPrefixList()**](NetworkProtectApi.md#createNetworkProtectPrefixList) | **POST** /network-protect/v1/prefix-lists | Create a Network Protect prefix list
[**createNetworkProtectRuleSet()**](NetworkProtectApi.md#createNetworkProtectRuleSet) | **POST** /network-protect/v1/rule-sets | Create a Network Protect rule set
[**deleteNetworkProtectEndpoint()**](NetworkProtectApi.md#deleteNetworkProtectEndpoint) | **DELETE** /network-protect/v1/endpoints/{endpoint_id} | Delete a Network Protect endpoint
[**deleteNetworkProtectNetwork()**](NetworkProtectApi.md#deleteNetworkProtectNetwork) | **DELETE** /network-protect/v1/networks/{network_id} | Delete a Network Protect network
[**deleteNetworkProtectPrefixList()**](NetworkProtectApi.md#deleteNetworkProtectPrefixList) | **DELETE** /network-protect/v1/prefix-lists/{prefix_list_id} | Delete a Network Protect prefix list
[**deleteNetworkProtectRuleSet()**](NetworkProtectApi.md#deleteNetworkProtectRuleSet) | **DELETE** /network-protect/v1/rule-sets/{rule_set_id} | Delete a Network Protect rule set
[**getNetworkProtectEndpoint()**](NetworkProtectApi.md#getNetworkProtectEndpoint) | **GET** /network-protect/v1/endpoints/{endpoint_id} | Get a Network Protect endpoint
[**getNetworkProtectNetwork()**](NetworkProtectApi.md#getNetworkProtectNetwork) | **GET** /network-protect/v1/networks/{network_id} | Get a Network Protect network
[**getNetworkProtectPrefixList()**](NetworkProtectApi.md#getNetworkProtectPrefixList) | **GET** /network-protect/v1/prefix-lists/{prefix_list_id} | Get a Network Protect prefix list
[**getNetworkProtectRuleSet()**](NetworkProtectApi.md#getNetworkProtectRuleSet) | **GET** /network-protect/v1/rule-sets/{rule_set_id} | Get a Network Protect rule set
[**listNetworkProtectEndpoints()**](NetworkProtectApi.md#listNetworkProtectEndpoints) | **GET** /network-protect/v1/endpoints | List Network Protect endpoints
[**listNetworkProtectNetworks()**](NetworkProtectApi.md#listNetworkProtectNetworks) | **GET** /network-protect/v1/networks | List Network Protect networks
[**listNetworkProtectPrefixLists()**](NetworkProtectApi.md#listNetworkProtectPrefixLists) | **GET** /network-protect/v1/prefix-lists | List Network Protect prefix lists
[**listNetworkProtectRuleSets()**](NetworkProtectApi.md#listNetworkProtectRuleSets) | **GET** /network-protect/v1/rule-sets | List Network Protect rule sets
[**updateNetworkProtectEndpoint()**](NetworkProtectApi.md#updateNetworkProtectEndpoint) | **PATCH** /network-protect/v1/endpoints/{endpoint_id} | Update a Network Protect endpoint
[**updateNetworkProtectNetwork()**](NetworkProtectApi.md#updateNetworkProtectNetwork) | **PATCH** /network-protect/v1/networks/{network_id} | Update a Network Protect network
[**updateNetworkProtectPrefixList()**](NetworkProtectApi.md#updateNetworkProtectPrefixList) | **PATCH** /network-protect/v1/prefix-lists/{prefix_list_id} | Update a Network Protect prefix list
[**updateNetworkProtectRuleSet()**](NetworkProtectApi.md#updateNetworkProtectRuleSet) | **PATCH** /network-protect/v1/rule-sets/{rule_set_id} | Update a Network Protect rule set


## `createNetworkProtectEndpoint()`

```php
createNetworkProtectEndpoint($options): \Fastly\Model\NetworkProtectEndpointResponse // Create a Network Protect endpoint
```

Creates a GRE delivery destination. A new endpoint is not attached to a network until it is added to an endpoint policy.

### Example
```php
    $options['network_protect_endpoint_create'] = new \Fastly\Model\NetworkProtectEndpointCreate(); // \Fastly\Model\NetworkProtectEndpointCreate

try {
    $result = $apiInstance->createNetworkProtectEndpoint($options);
} catch (Exception $e) {
    echo 'Exception when calling NetworkProtectApi->createNetworkProtectEndpoint: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**network_protect_endpoint_create** | [**\Fastly\Model\NetworkProtectEndpointCreate**](../Model/NetworkProtectEndpointCreate.md) |  |

### Return type

[**\Fastly\Model\NetworkProtectEndpointResponse**](../Model/NetworkProtectEndpointResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createNetworkProtectNetwork()`

```php
createNetworkProtectNetwork($options): \Fastly\Model\NetworkProtectNetworkResponse // Create a Network Protect network
```

Registers customer-owned IP space for protection. The network starts with advertisement disabled and Fastly does not announce its prefix. Turn advertisement on after LOA and ROA authorization are ready. The create request cannot include advertise; sending it returns a `400 Bad Request` error.

### Example
```php
    $options['network_protect_network_create'] = new \Fastly\Model\NetworkProtectNetworkCreate(); // \Fastly\Model\NetworkProtectNetworkCreate

try {
    $result = $apiInstance->createNetworkProtectNetwork($options);
} catch (Exception $e) {
    echo 'Exception when calling NetworkProtectApi->createNetworkProtectNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**network_protect_network_create** | [**\Fastly\Model\NetworkProtectNetworkCreate**](../Model/NetworkProtectNetworkCreate.md) |  |

### Return type

[**\Fastly\Model\NetworkProtectNetworkResponse**](../Model/NetworkProtectNetworkResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createNetworkProtectPrefixList()`

```php
createNetworkProtectPrefixList($options): \Fastly\Model\NetworkProtectPrefixListResponse // Create a Network Protect prefix list
```

Creates a typed list of addresses that rules can reference. The family is required and cannot be changed. The addresses list may remain empty.

### Example
```php
    $options['network_protect_prefix_list_create'] = new \Fastly\Model\NetworkProtectPrefixListCreate(); // \Fastly\Model\NetworkProtectPrefixListCreate

try {
    $result = $apiInstance->createNetworkProtectPrefixList($options);
} catch (Exception $e) {
    echo 'Exception when calling NetworkProtectApi->createNetworkProtectPrefixList: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**network_protect_prefix_list_create** | [**\Fastly\Model\NetworkProtectPrefixListCreate**](../Model/NetworkProtectPrefixListCreate.md) |  |

### Return type

[**\Fastly\Model\NetworkProtectPrefixListResponse**](../Model/NetworkProtectPrefixListResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createNetworkProtectRuleSet()`

```php
createNetworkProtectRuleSet($options): \Fastly\Model\NetworkProtectRuleSetResponse // Create a Network Protect rule set
```

Creates an ordered rule set and stores its filtering intent. A rule set has at most 64 rules and uses the default action when no rule matches. Custom attachment and detachment are restricted in this release.

### Example
```php
    $options['network_protect_rule_set_create'] = new \Fastly\Model\NetworkProtectRuleSetCreate(); // \Fastly\Model\NetworkProtectRuleSetCreate

try {
    $result = $apiInstance->createNetworkProtectRuleSet($options);
} catch (Exception $e) {
    echo 'Exception when calling NetworkProtectApi->createNetworkProtectRuleSet: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**network_protect_rule_set_create** | [**\Fastly\Model\NetworkProtectRuleSetCreate**](../Model/NetworkProtectRuleSetCreate.md) |  |

### Return type

[**\Fastly\Model\NetworkProtectRuleSetResponse**](../Model/NetworkProtectRuleSetResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteNetworkProtectEndpoint()`

```php
deleteNetworkProtectEndpoint($options) // Delete a Network Protect endpoint
```

Deletes an endpoint. The endpoint must first be removed from every network policy; active references return a `409 Conflict` error.

### Example
```php
    $options['endpoint_id'] = DBOEWyMXebAir5qwjWEwK1; // string | Unique identifier of the Network Protect endpoint.

try {
    $apiInstance->deleteNetworkProtectEndpoint($options);
} catch (Exception $e) {
    echo 'Exception when calling NetworkProtectApi->deleteNetworkProtectEndpoint: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**endpoint_id** | **string** | Unique identifier of the Network Protect endpoint. |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteNetworkProtectNetwork()`

```php
deleteNetworkProtectNetwork($options) // Delete a Network Protect network
```

Deletes a network and stops its advertisement and filtering. Endpoints and rule sets used by the network are not deleted.

### Example
```php
    $options['network_id'] = an7NWnhOjjOkwSNvrwphTd; // string | Unique identifier of the Network Protect network.

try {
    $apiInstance->deleteNetworkProtectNetwork($options);
} catch (Exception $e) {
    echo 'Exception when calling NetworkProtectApi->deleteNetworkProtectNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**network_id** | **string** | Unique identifier of the Network Protect network. |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteNetworkProtectPrefixList()`

```php
deleteNetworkProtectPrefixList($options) // Delete a Network Protect prefix list
```

Deletes a prefix list. Active rule references must be removed first; referenced lists return a `409 Conflict` error. Unknown and foreign IDs are indistinguishable and return a `404 Not Found` error.

### Example
```php
    $options['prefix_list_id'] = QoavyX1BHOMGQm2zmVyEbS; // string | Unique identifier of the Network Protect prefix list.

try {
    $apiInstance->deleteNetworkProtectPrefixList($options);
} catch (Exception $e) {
    echo 'Exception when calling NetworkProtectApi->deleteNetworkProtectPrefixList: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**prefix_list_id** | **string** | Unique identifier of the Network Protect prefix list. |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteNetworkProtectRuleSet()`

```php
deleteNetworkProtectRuleSet($options) // Delete a Network Protect rule set
```

Deletes a rule set. Attached rule sets cannot be deleted and return a `409 Conflict` error until their references are removed.

### Example
```php
    $options['rule_set_id'] = Z4xQoBznwNb5GJfdJbp58Y; // string | Unique identifier of the Network Protect rule set.

try {
    $apiInstance->deleteNetworkProtectRuleSet($options);
} catch (Exception $e) {
    echo 'Exception when calling NetworkProtectApi->deleteNetworkProtectRuleSet: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**rule_set_id** | **string** | Unique identifier of the Network Protect rule set. |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getNetworkProtectEndpoint()`

```php
getNetworkProtectEndpoint($options): \Fastly\Model\NetworkProtectEndpointResponse // Get a Network Protect endpoint
```

Retrieves a single endpoint by its identifier.

### Example
```php
    $options['endpoint_id'] = DBOEWyMXebAir5qwjWEwK1; // string | Unique identifier of the Network Protect endpoint.

try {
    $result = $apiInstance->getNetworkProtectEndpoint($options);
} catch (Exception $e) {
    echo 'Exception when calling NetworkProtectApi->getNetworkProtectEndpoint: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**endpoint_id** | **string** | Unique identifier of the Network Protect endpoint. |

### Return type

[**\Fastly\Model\NetworkProtectEndpointResponse**](../Model/NetworkProtectEndpointResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getNetworkProtectNetwork()`

```php
getNetworkProtectNetwork($options): \Fastly\Model\NetworkProtectNetworkResponse // Get a Network Protect network
```

Retrieves a single network by its identifier.

### Example
```php
    $options['network_id'] = an7NWnhOjjOkwSNvrwphTd; // string | Unique identifier of the Network Protect network.

try {
    $result = $apiInstance->getNetworkProtectNetwork($options);
} catch (Exception $e) {
    echo 'Exception when calling NetworkProtectApi->getNetworkProtectNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**network_id** | **string** | Unique identifier of the Network Protect network. |

### Return type

[**\Fastly\Model\NetworkProtectNetworkResponse**](../Model/NetworkProtectNetworkResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getNetworkProtectPrefixList()`

```php
getNetworkProtectPrefixList($options): \Fastly\Model\NetworkProtectPrefixListResponse // Get a Network Protect prefix list
```

Retrieves a single prefix list by its identifier. Unknown and foreign IDs are indistinguishable and return a `404 Not Found` error.

### Example
```php
    $options['prefix_list_id'] = QoavyX1BHOMGQm2zmVyEbS; // string | Unique identifier of the Network Protect prefix list.

try {
    $result = $apiInstance->getNetworkProtectPrefixList($options);
} catch (Exception $e) {
    echo 'Exception when calling NetworkProtectApi->getNetworkProtectPrefixList: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**prefix_list_id** | **string** | Unique identifier of the Network Protect prefix list. |

### Return type

[**\Fastly\Model\NetworkProtectPrefixListResponse**](../Model/NetworkProtectPrefixListResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getNetworkProtectRuleSet()`

```php
getNetworkProtectRuleSet($options): \Fastly\Model\NetworkProtectRuleSetResponse // Get a Network Protect rule set
```

Retrieves a single rule set with rules in evaluation order.

### Example
```php
    $options['rule_set_id'] = Z4xQoBznwNb5GJfdJbp58Y; // string | Unique identifier of the Network Protect rule set.

try {
    $result = $apiInstance->getNetworkProtectRuleSet($options);
} catch (Exception $e) {
    echo 'Exception when calling NetworkProtectApi->getNetworkProtectRuleSet: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**rule_set_id** | **string** | Unique identifier of the Network Protect rule set. |

### Return type

[**\Fastly\Model\NetworkProtectRuleSetResponse**](../Model/NetworkProtectRuleSetResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listNetworkProtectEndpoints()`

```php
listNetworkProtectEndpoints($options): \Fastly\Model\NetworkProtectEndpointsResponse // List Network Protect endpoints
```

Lists the customer's GRE delivery endpoints in ascending ID order. The response is cursor-paginated and includes the effective page limit.

### Example
```php
    $options['limit'] = 100; // int | Maximum resources to return. Defaults to 100. Positive values above 1000 are accepted and clamped to 1000; the effective value is reported in meta.limit. Zero, negative, and non-integer values return a `400 Bad Request` error.
$options['cursor'] = network-cursor-next; // string | Continuation value from a previous response's meta.next_cursor. Omit this parameter to request the first page.

try {
    $result = $apiInstance->listNetworkProtectEndpoints($options);
} catch (Exception $e) {
    echo 'Exception when calling NetworkProtectApi->listNetworkProtectEndpoints: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**limit** | **int** | Maximum resources to return. Defaults to 100. Positive values above 1000 are accepted and clamped to 1000; the effective value is reported in meta.limit. Zero, negative, and non-integer values return a `400 Bad Request` error. | [optional] [defaults to 100]
**cursor** | **string** | Continuation value from a previous response&#39;s meta.next_cursor. Omit this parameter to request the first page. | [optional]

### Return type

[**\Fastly\Model\NetworkProtectEndpointsResponse**](../Model/NetworkProtectEndpointsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listNetworkProtectNetworks()`

```php
listNetworkProtectNetworks($options): \Fastly\Model\NetworkProtectNetworksResponse // List Network Protect networks
```

Lists the customer's networks in ascending ID order. The response is cursor-paginated and includes the effective page limit.

### Example
```php
    $options['limit'] = 100; // int | Maximum resources to return. Defaults to 100. Positive values above 1000 are accepted and clamped to 1000; the effective value is reported in meta.limit. Zero, negative, and non-integer values return a `400 Bad Request` error.
$options['cursor'] = network-cursor-next; // string | Continuation value from a previous response's meta.next_cursor. Omit this parameter to request the first page.

try {
    $result = $apiInstance->listNetworkProtectNetworks($options);
} catch (Exception $e) {
    echo 'Exception when calling NetworkProtectApi->listNetworkProtectNetworks: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**limit** | **int** | Maximum resources to return. Defaults to 100. Positive values above 1000 are accepted and clamped to 1000; the effective value is reported in meta.limit. Zero, negative, and non-integer values return a `400 Bad Request` error. | [optional] [defaults to 100]
**cursor** | **string** | Continuation value from a previous response&#39;s meta.next_cursor. Omit this parameter to request the first page. | [optional]

### Return type

[**\Fastly\Model\NetworkProtectNetworksResponse**](../Model/NetworkProtectNetworksResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listNetworkProtectPrefixLists()`

```php
listNetworkProtectPrefixLists($options): \Fastly\Model\NetworkProtectPrefixListsResponse // List Network Protect prefix lists
```

Lists prefix lists in ascending ID order. Positive limits above 1000 are accepted and clamped to 1000. Invalid limits return a `400 Bad Request` error.

### Example
```php
    $options['limit'] = 100; // int | Maximum resources to return. Defaults to 100. Positive values above 1000 are accepted and clamped to 1000; the effective value is reported in meta.limit. Zero, negative, and non-integer values return a `400 Bad Request` error.
$options['cursor'] = network-cursor-next; // string | Continuation value from a previous response's meta.next_cursor. Omit this parameter to request the first page.

try {
    $result = $apiInstance->listNetworkProtectPrefixLists($options);
} catch (Exception $e) {
    echo 'Exception when calling NetworkProtectApi->listNetworkProtectPrefixLists: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**limit** | **int** | Maximum resources to return. Defaults to 100. Positive values above 1000 are accepted and clamped to 1000; the effective value is reported in meta.limit. Zero, negative, and non-integer values return a `400 Bad Request` error. | [optional] [defaults to 100]
**cursor** | **string** | Continuation value from a previous response&#39;s meta.next_cursor. Omit this parameter to request the first page. | [optional]

### Return type

[**\Fastly\Model\NetworkProtectPrefixListsResponse**](../Model/NetworkProtectPrefixListsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listNetworkProtectRuleSets()`

```php
listNetworkProtectRuleSets($options): \Fastly\Model\NetworkProtectRuleSetsResponse // List Network Protect rule sets
```

Lists rule sets in ascending ID order. Positive limits above 1000 are accepted and clamped to 1000; invalid limits return a `400 Bad Request` error.

### Example
```php
    $options['limit'] = 100; // int | Maximum resources to return. Defaults to 100. Positive values above 1000 are accepted and clamped to 1000; the effective value is reported in meta.limit. Zero, negative, and non-integer values return a `400 Bad Request` error.
$options['cursor'] = network-cursor-next; // string | Continuation value from a previous response's meta.next_cursor. Omit this parameter to request the first page.

try {
    $result = $apiInstance->listNetworkProtectRuleSets($options);
} catch (Exception $e) {
    echo 'Exception when calling NetworkProtectApi->listNetworkProtectRuleSets: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**limit** | **int** | Maximum resources to return. Defaults to 100. Positive values above 1000 are accepted and clamped to 1000; the effective value is reported in meta.limit. Zero, negative, and non-integer values return a `400 Bad Request` error. | [optional] [defaults to 100]
**cursor** | **string** | Continuation value from a previous response&#39;s meta.next_cursor. Omit this parameter to request the first page. | [optional]

### Return type

[**\Fastly\Model\NetworkProtectRuleSetsResponse**](../Model/NetworkProtectRuleSetsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateNetworkProtectEndpoint()`

```php
updateNetworkProtectEndpoint($options): \Fastly\Model\NetworkProtectEndpointResponse // Update a Network Protect endpoint
```

Updates an endpoint. Omitted fields remain unchanged. The IP address cannot be changed; create a new endpoint if the destination changes.

### Example
```php
    $options['endpoint_id'] = DBOEWyMXebAir5qwjWEwK1; // string | Unique identifier of the Network Protect endpoint.
$options['network_protect_endpoint_update'] = new \Fastly\Model\NetworkProtectEndpointUpdate(); // \Fastly\Model\NetworkProtectEndpointUpdate

try {
    $result = $apiInstance->updateNetworkProtectEndpoint($options);
} catch (Exception $e) {
    echo 'Exception when calling NetworkProtectApi->updateNetworkProtectEndpoint: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**endpoint_id** | **string** | Unique identifier of the Network Protect endpoint. |
**network_protect_endpoint_update** | [**\Fastly\Model\NetworkProtectEndpointUpdate**](../Model/NetworkProtectEndpointUpdate.md) |  |

### Return type

[**\Fastly\Model\NetworkProtectEndpointResponse**](../Model/NetworkProtectEndpointResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateNetworkProtectNetwork()`

```php
updateNetworkProtectNetwork($options): \Fastly\Model\NetworkProtectNetworkResponse // Update a Network Protect network
```

Updates a network. Omitted fields remain unchanged. The prefix cannot be changed. Sending `endpoint_policies` replaces the complete policy list; an empty array removes every policy. Advertisement is desired state. Enabling it requires an approved LOA, a valid ROA, and a ready default-region delivery policy. A readiness failure returns a `409 Conflict` error.

### Example
```php
    $options['network_id'] = an7NWnhOjjOkwSNvrwphTd; // string | Unique identifier of the Network Protect network.
$options['network_protect_network_update'] = new \Fastly\Model\NetworkProtectNetworkUpdate(); // \Fastly\Model\NetworkProtectNetworkUpdate

try {
    $result = $apiInstance->updateNetworkProtectNetwork($options);
} catch (Exception $e) {
    echo 'Exception when calling NetworkProtectApi->updateNetworkProtectNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**network_id** | **string** | Unique identifier of the Network Protect network. |
**network_protect_network_update** | [**\Fastly\Model\NetworkProtectNetworkUpdate**](../Model/NetworkProtectNetworkUpdate.md) |  |

### Return type

[**\Fastly\Model\NetworkProtectNetworkResponse**](../Model/NetworkProtectNetworkResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateNetworkProtectPrefixList()`

```php
updateNetworkProtectPrefixList($options): \Fastly\Model\NetworkProtectPrefixListResponse // Update a Network Protect prefix list
```

Updates a prefix list. The family cannot be changed. Sending addresses replaces the complete list; an empty array clears it when no active source-list restriction applies. Addresses are canonicalized, deduplicated, and sorted by the backend.

### Example
```php
    $options['prefix_list_id'] = QoavyX1BHOMGQm2zmVyEbS; // string | Unique identifier of the Network Protect prefix list.
$options['network_protect_prefix_list_update'] = new \Fastly\Model\NetworkProtectPrefixListUpdate(); // \Fastly\Model\NetworkProtectPrefixListUpdate

try {
    $result = $apiInstance->updateNetworkProtectPrefixList($options);
} catch (Exception $e) {
    echo 'Exception when calling NetworkProtectApi->updateNetworkProtectPrefixList: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**prefix_list_id** | **string** | Unique identifier of the Network Protect prefix list. |
**network_protect_prefix_list_update** | [**\Fastly\Model\NetworkProtectPrefixListUpdate**](../Model/NetworkProtectPrefixListUpdate.md) |  |

### Return type

[**\Fastly\Model\NetworkProtectPrefixListResponse**](../Model/NetworkProtectPrefixListResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateNetworkProtectRuleSet()`

```php
updateNetworkProtectRuleSet($options): \Fastly\Model\NetworkProtectRuleSetResponse // Update a Network Protect rule set
```

Updates a rule set. Omitted fields remain unchanged. Sending rules replaces the complete ordered list; an empty array removes every rule. Custom attachment and detachment remain restricted in this release.

### Example
```php
    $options['rule_set_id'] = Z4xQoBznwNb5GJfdJbp58Y; // string | Unique identifier of the Network Protect rule set.
$options['network_protect_rule_set_update'] = new \Fastly\Model\NetworkProtectRuleSetUpdate(); // \Fastly\Model\NetworkProtectRuleSetUpdate

try {
    $result = $apiInstance->updateNetworkProtectRuleSet($options);
} catch (Exception $e) {
    echo 'Exception when calling NetworkProtectApi->updateNetworkProtectRuleSet: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**rule_set_id** | **string** | Unique identifier of the Network Protect rule set. |
**network_protect_rule_set_update** | [**\Fastly\Model\NetworkProtectRuleSetUpdate**](../Model/NetworkProtectRuleSetUpdate.md) |  |

### Return type

[**\Fastly\Model\NetworkProtectRuleSetResponse**](../Model/NetworkProtectRuleSetResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
