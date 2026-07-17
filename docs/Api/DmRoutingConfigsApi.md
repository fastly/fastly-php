# Fastly\Api\DmRoutingConfigsApi


```php
$apiInstance = new Fastly\Api\DmRoutingConfigsApi(
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
[**activateDmRoutingConfigDraft()**](DmRoutingConfigsApi.md#activateDmRoutingConfigDraft) | **POST** /domain-management/v1/routing-configs/{config_id}/activate | Activate the draft
[**createDmRoutingConfig()**](DmRoutingConfigsApi.md#createDmRoutingConfig) | **POST** /domain-management/v1/routing-configs | Create a routing config
[**createDmRoutingConfigPath()**](DmRoutingConfigsApi.md#createDmRoutingConfigPath) | **POST** /domain-management/v1/routing-configs/{config_id}/paths | Create a path
[**createDmRoutingConfigRule()**](DmRoutingConfigsApi.md#createDmRoutingConfigRule) | **POST** /domain-management/v1/routing-configs/{config_id}/paths/{path_id}/rules | Create a rule
[**deactivateDmRoutingConfig()**](DmRoutingConfigsApi.md#deactivateDmRoutingConfig) | **POST** /domain-management/v1/routing-configs/{config_id}/deactivate | Deactivate a routing config
[**deleteDmRoutingConfig()**](DmRoutingConfigsApi.md#deleteDmRoutingConfig) | **DELETE** /domain-management/v1/routing-configs/{config_id} | Delete a routing config
[**deleteDmRoutingConfigInactiveVersions()**](DmRoutingConfigsApi.md#deleteDmRoutingConfigInactiveVersions) | **DELETE** /domain-management/v1/routing-configs/{config_id}/versions/inactive | Delete inactive versions
[**deleteDmRoutingConfigPath()**](DmRoutingConfigsApi.md#deleteDmRoutingConfigPath) | **DELETE** /domain-management/v1/routing-configs/{config_id}/paths/{path_id} | Delete a path
[**deleteDmRoutingConfigRule()**](DmRoutingConfigsApi.md#deleteDmRoutingConfigRule) | **DELETE** /domain-management/v1/routing-configs/{config_id}/paths/{path_id}/rules/{rule_id} | Delete a rule
[**discardDmRoutingConfigDraft()**](DmRoutingConfigsApi.md#discardDmRoutingConfigDraft) | **DELETE** /domain-management/v1/routing-configs/{config_id}/draft | Discard the draft
[**getDmRoutingConfig()**](DmRoutingConfigsApi.md#getDmRoutingConfig) | **GET** /domain-management/v1/routing-configs/{config_id} | Get a routing config
[**getDmRoutingConfigDraftDiff()**](DmRoutingConfigsApi.md#getDmRoutingConfigDraftDiff) | **GET** /domain-management/v1/routing-configs/{config_id}/draft/diff | Get the draft diff
[**getDmRoutingConfigPath()**](DmRoutingConfigsApi.md#getDmRoutingConfigPath) | **GET** /domain-management/v1/routing-configs/{config_id}/paths/{path_id} | Get a path
[**getDmRoutingConfigRule()**](DmRoutingConfigsApi.md#getDmRoutingConfigRule) | **GET** /domain-management/v1/routing-configs/{config_id}/paths/{path_id}/rules/{rule_id} | Get a rule
[**listDmRoutingConfigPaths()**](DmRoutingConfigsApi.md#listDmRoutingConfigPaths) | **GET** /domain-management/v1/routing-configs/{config_id}/paths | List paths
[**listDmRoutingConfigRules()**](DmRoutingConfigsApi.md#listDmRoutingConfigRules) | **GET** /domain-management/v1/routing-configs/{config_id}/paths/{path_id}/rules | List rules
[**listDmRoutingConfigVersions()**](DmRoutingConfigsApi.md#listDmRoutingConfigVersions) | **GET** /domain-management/v1/routing-configs/{config_id}/versions | List versions
[**listDmRoutingConfigs()**](DmRoutingConfigsApi.md#listDmRoutingConfigs) | **GET** /domain-management/v1/routing-configs | List routing configs
[**reactivateDmRoutingConfigVersion()**](DmRoutingConfigsApi.md#reactivateDmRoutingConfigVersion) | **POST** /domain-management/v1/routing-configs/{config_id}/versions/{version_id}/activate | Reactivate a version
[**updateDmRoutingConfigDraft()**](DmRoutingConfigsApi.md#updateDmRoutingConfigDraft) | **PATCH** /domain-management/v1/routing-configs/{config_id}/draft | Update the draft
[**updateDmRoutingConfigPath()**](DmRoutingConfigsApi.md#updateDmRoutingConfigPath) | **PATCH** /domain-management/v1/routing-configs/{config_id}/paths/{path_id} | Update a path
[**updateDmRoutingConfigRule()**](DmRoutingConfigsApi.md#updateDmRoutingConfigRule) | **PATCH** /domain-management/v1/routing-configs/{config_id}/paths/{path_id}/rules/{rule_id} | Update a rule


## `activateDmRoutingConfigDraft()`

```php
activateDmRoutingConfigDraft($options): \Fastly\Model\RoutingConfigVersionResponse // Activate the draft
```

Activate the current draft version. The previously active version, if any, becomes inactive but is retained in version history.

### Example
```php
    $options['config_id'] = 'config_id_example'; // string

try {
    $result = $apiInstance->activateDmRoutingConfigDraft($options);
} catch (Exception $e) {
    echo 'Exception when calling DmRoutingConfigsApi->activateDmRoutingConfigDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**config_id** | **string** |  |

### Return type

[**\Fastly\Model\RoutingConfigVersionResponse**](../Model/RoutingConfigVersionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createDmRoutingConfig()`

```php
createDmRoutingConfig($options): \Fastly\Model\RoutingConfigResponse // Create a routing config
```

Create a new routing config. An optional `initial_version` may be provided to seed the config with paths and rules in a single request, and may also be activated immediately.

### Example
```php
    $options['routing_config'] = new \Fastly\Model\RoutingConfig(); // \Fastly\Model\RoutingConfig

try {
    $result = $apiInstance->createDmRoutingConfig($options);
} catch (Exception $e) {
    echo 'Exception when calling DmRoutingConfigsApi->createDmRoutingConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**routing_config** | [**\Fastly\Model\RoutingConfig**](../Model/RoutingConfig.md) |  | [optional]

### Return type

[**\Fastly\Model\RoutingConfigResponse**](../Model/RoutingConfigResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createDmRoutingConfigPath()`

```php
createDmRoutingConfigPath($options): \Fastly\Model\PathResponse // Create a path
```

Add a new path to the config's draft version. If no draft exists, one is created automatically by cloning the active version.

### Example
```php
    $options['config_id'] = 'config_id_example'; // string
$options['path_create'] = new \Fastly\Model\PathCreate(); // \Fastly\Model\PathCreate

try {
    $result = $apiInstance->createDmRoutingConfigPath($options);
} catch (Exception $e) {
    echo 'Exception when calling DmRoutingConfigsApi->createDmRoutingConfigPath: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**config_id** | **string** |  |
**path_create** | [**\Fastly\Model\PathCreate**](../Model/PathCreate.md) |  | [optional]

### Return type

[**\Fastly\Model\PathResponse**](../Model/PathResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createDmRoutingConfigRule()`

```php
createDmRoutingConfigRule($options): \Fastly\Model\RuleResponse // Create a rule
```

Add a new rule to a path on the config's draft version. If no draft exists, one is created automatically by cloning the active version. A rule with an empty `conditions` array is a default (catch-all) rule and there can be at most one default rule per path.

### Example
```php
    $options['config_id'] = 'config_id_example'; // string
$options['path_id'] = 'path_id_example'; // string
$options['rule_create'] = new \Fastly\Model\RuleCreate(); // \Fastly\Model\RuleCreate

try {
    $result = $apiInstance->createDmRoutingConfigRule($options);
} catch (Exception $e) {
    echo 'Exception when calling DmRoutingConfigsApi->createDmRoutingConfigRule: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**config_id** | **string** |  |
**path_id** | **string** |  |
**rule_create** | [**\Fastly\Model\RuleCreate**](../Model/RuleCreate.md) |  | [optional]

### Return type

[**\Fastly\Model\RuleResponse**](../Model/RuleResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deactivateDmRoutingConfig()`

```php
deactivateDmRoutingConfig($options): \Fastly\Model\RoutingConfigResponse // Deactivate a routing config
```

Clear the active version designation. This is a bookkeeping operation only — it does not stop edge traffic. Minerva continues serving the last-activated version until the domain association is removed in Spotless. Only removing the routing config from the domain (via Spotless) triggers Neptune to drop the reference, which causes Minerva to stop fetching and eventually clean up the cached config. Idempotent: returns 200 even if already deactivated.

### Example
```php
    $options['config_id'] = 'config_id_example'; // string

try {
    $result = $apiInstance->deactivateDmRoutingConfig($options);
} catch (Exception $e) {
    echo 'Exception when calling DmRoutingConfigsApi->deactivateDmRoutingConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**config_id** | **string** |  |

### Return type

[**\Fastly\Model\RoutingConfigResponse**](../Model/RoutingConfigResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteDmRoutingConfig()`

```php
deleteDmRoutingConfig($options) // Delete a routing config
```

Delete a routing config. By default, configs that have an active version cannot be deleted. Pass `force=true` to bypass the active-version check — this is destructive and will immediately stop traffic routing for any paths the config serves. The `force` parameter does **not** bypass the domain-association check; if domains are still associated, deletion is rejected with 409 regardless of `force`.

### Example
```php
    $options['config_id'] = 'config_id_example'; // string
$options['force'] = false; // bool | When `true`, allows deleting a routing config that has an active version. This is destructive — traffic routing for any paths served by the config will stop immediately.

try {
    $apiInstance->deleteDmRoutingConfig($options);
} catch (Exception $e) {
    echo 'Exception when calling DmRoutingConfigsApi->deleteDmRoutingConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**config_id** | **string** |  |
**force** | **bool** | When `true`, allows deleting a routing config that has an active version. This is destructive — traffic routing for any paths served by the config will stop immediately. | [optional] [defaults to false]

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteDmRoutingConfigInactiveVersions()`

```php
deleteDmRoutingConfigInactiveVersions($options) // Delete inactive versions
```

Delete all inactive versions for a routing config. The currently active version, if any, is retained.

### Example
```php
    $options['config_id'] = 'config_id_example'; // string

try {
    $apiInstance->deleteDmRoutingConfigInactiveVersions($options);
} catch (Exception $e) {
    echo 'Exception when calling DmRoutingConfigsApi->deleteDmRoutingConfigInactiveVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**config_id** | **string** |  |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteDmRoutingConfigPath()`

```php
deleteDmRoutingConfigPath($options) // Delete a path
```

Delete a path from the config's draft version. If no draft exists, one is created automatically by cloning the active version.

### Example
```php
    $options['config_id'] = 'config_id_example'; // string
$options['path_id'] = 'path_id_example'; // string

try {
    $apiInstance->deleteDmRoutingConfigPath($options);
} catch (Exception $e) {
    echo 'Exception when calling DmRoutingConfigsApi->deleteDmRoutingConfigPath: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**config_id** | **string** |  |
**path_id** | **string** |  |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteDmRoutingConfigRule()`

```php
deleteDmRoutingConfigRule($options) // Delete a rule
```

Delete a rule from the config's draft version. If no draft exists, one is created automatically by cloning the active version.

### Example
```php
    $options['config_id'] = 'config_id_example'; // string
$options['path_id'] = 'path_id_example'; // string
$options['rule_id'] = 'rule_id_example'; // string

try {
    $apiInstance->deleteDmRoutingConfigRule($options);
} catch (Exception $e) {
    echo 'Exception when calling DmRoutingConfigsApi->deleteDmRoutingConfigRule: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**config_id** | **string** |  |
**path_id** | **string** |  |
**rule_id** | **string** |  |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `discardDmRoutingConfigDraft()`

```php
discardDmRoutingConfigDraft($options) // Discard the draft
```

Delete the current draft version, reverting any unactivated changes.

### Example
```php
    $options['config_id'] = 'config_id_example'; // string

try {
    $apiInstance->discardDmRoutingConfigDraft($options);
} catch (Exception $e) {
    echo 'Exception when calling DmRoutingConfigsApi->discardDmRoutingConfigDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**config_id** | **string** |  |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getDmRoutingConfig()`

```php
getDmRoutingConfig($options): \Fastly\Model\RoutingConfigResponse // Get a routing config
```

Retrieve a single routing config by its identifier.

### Example
```php
    $options['config_id'] = 'config_id_example'; // string

try {
    $result = $apiInstance->getDmRoutingConfig($options);
} catch (Exception $e) {
    echo 'Exception when calling DmRoutingConfigsApi->getDmRoutingConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**config_id** | **string** |  |

### Return type

[**\Fastly\Model\RoutingConfigResponse**](../Model/RoutingConfigResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getDmRoutingConfigDraftDiff()`

```php
getDmRoutingConfigDraftDiff($options): \Fastly\Model\DraftDiff // Get the draft diff
```

Compare the current draft version against the active version and return the paths and rules that have been added, modified, or deleted.

### Example
```php
    $options['config_id'] = 'config_id_example'; // string

try {
    $result = $apiInstance->getDmRoutingConfigDraftDiff($options);
} catch (Exception $e) {
    echo 'Exception when calling DmRoutingConfigsApi->getDmRoutingConfigDraftDiff: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**config_id** | **string** |  |

### Return type

[**\Fastly\Model\DraftDiff**](../Model/DraftDiff.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getDmRoutingConfigPath()`

```php
getDmRoutingConfigPath($options): \Fastly\Model\PathResponse // Get a path
```

Retrieve a single path by its stable identifier.

### Example
```php
    $options['config_id'] = 'config_id_example'; // string
$options['path_id'] = 'path_id_example'; // string

try {
    $result = $apiInstance->getDmRoutingConfigPath($options);
} catch (Exception $e) {
    echo 'Exception when calling DmRoutingConfigsApi->getDmRoutingConfigPath: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**config_id** | **string** |  |
**path_id** | **string** |  |

### Return type

[**\Fastly\Model\PathResponse**](../Model/PathResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getDmRoutingConfigRule()`

```php
getDmRoutingConfigRule($options): \Fastly\Model\RuleResponse // Get a rule
```

Retrieve a single rule by its stable identifier.

### Example
```php
    $options['config_id'] = 'config_id_example'; // string
$options['path_id'] = 'path_id_example'; // string
$options['rule_id'] = 'rule_id_example'; // string

try {
    $result = $apiInstance->getDmRoutingConfigRule($options);
} catch (Exception $e) {
    echo 'Exception when calling DmRoutingConfigsApi->getDmRoutingConfigRule: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**config_id** | **string** |  |
**path_id** | **string** |  |
**rule_id** | **string** |  |

### Return type

[**\Fastly\Model\RuleResponse**](../Model/RuleResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listDmRoutingConfigPaths()`

```php
listDmRoutingConfigPaths($options): \Fastly\Model\PathsResponse // List paths
```

List paths for the config. Returns paths from the active version if one exists, otherwise from the draft.

### Example
```php
    $options['config_id'] = 'config_id_example'; // string
$options['path'] = 'path_example'; // string | Filter results by path pattern. The match strategy is controlled by the `match` parameter.
$options['match'] = 'exact'; // string | How to match the value of the `path` filter against existing path patterns. Has no effect unless `path` is also provided.
$options['sort'] = '-created_at'; // string | The order in which to list the results.
$options['cursor'] = 'cursor_example'; // string | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty.
$options['limit'] = 20; // int | Limit how many results are returned.

try {
    $result = $apiInstance->listDmRoutingConfigPaths($options);
} catch (Exception $e) {
    echo 'Exception when calling DmRoutingConfigsApi->listDmRoutingConfigPaths: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**config_id** | **string** |  |
**path** | **string** | Filter results by path pattern. The match strategy is controlled by the `match` parameter. | [optional]
**match** | **string** | How to match the value of the `path` filter against existing path patterns. Has no effect unless `path` is also provided. | [optional] [one of: 'exact', 'starts_with', 'ends_with', 'contains'] [defaults to 'exact']
**sort** | **string** | The order in which to list the results. | [optional] [one of: 'created_at', '-created_at', 'id', '-id', 'path', '-path'] [defaults to '-created_at']
**cursor** | **string** | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty. | [optional]
**limit** | **int** | Limit how many results are returned. | [optional] [defaults to 20]

### Return type

[**\Fastly\Model\PathsResponse**](../Model/PathsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listDmRoutingConfigRules()`

```php
listDmRoutingConfigRules($options): \Fastly\Model\RulesResponse // List rules
```

List all rules for a path in evaluation order.

### Example
```php
    $options['config_id'] = 'config_id_example'; // string
$options['path_id'] = 'path_id_example'; // string
$options['sort'] = 'position'; // string | The order in which to list the results.
$options['cursor'] = 'cursor_example'; // string | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty.
$options['limit'] = 20; // int | Limit how many results are returned.

try {
    $result = $apiInstance->listDmRoutingConfigRules($options);
} catch (Exception $e) {
    echo 'Exception when calling DmRoutingConfigsApi->listDmRoutingConfigRules: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**config_id** | **string** |  |
**path_id** | **string** |  |
**sort** | **string** | The order in which to list the results. | [optional] [one of: 'created_at', '-created_at', 'position', '-position'] [defaults to 'position']
**cursor** | **string** | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty. | [optional]
**limit** | **int** | Limit how many results are returned. | [optional] [defaults to 20]

### Return type

[**\Fastly\Model\RulesResponse**](../Model/RulesResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listDmRoutingConfigVersions()`

```php
listDmRoutingConfigVersions($options): \Fastly\Model\VersionsResponse // List versions
```

List all versions for a routing config.

### Example
```php
    $options['config_id'] = 'config_id_example'; // string
$options['sort'] = '-activated_at'; // string | The order in which to list the results.
$options['cursor'] = 'cursor_example'; // string | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty.
$options['limit'] = 20; // int | Limit how many results are returned.

try {
    $result = $apiInstance->listDmRoutingConfigVersions($options);
} catch (Exception $e) {
    echo 'Exception when calling DmRoutingConfigsApi->listDmRoutingConfigVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**config_id** | **string** |  |
**sort** | **string** | The order in which to list the results. | [optional] [one of: 'activated_at', '-activated_at', 'created_at', '-created_at'] [defaults to '-activated_at']
**cursor** | **string** | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty. | [optional]
**limit** | **int** | Limit how many results are returned. | [optional] [defaults to 20]

### Return type

[**\Fastly\Model\VersionsResponse**](../Model/VersionsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listDmRoutingConfigs()`

```php
listDmRoutingConfigs($options): \Fastly\Model\RoutingConfigsResponse // List routing configs
```

List all routing configs for the authenticated customer.

### Example
```php
    $options['state'] = array('state_example'); // string[] | Filter configs by lifecycle state. Accepts a comma-separated list of state values (e.g. `?state=active,active-with-draft`). Returns only configs whose current state matches one of the provided values. Returns 400 if any value is not a recognised state.
$options['sort'] = '-created_at'; // string | The order in which to list the results.
$options['cursor'] = 'cursor_example'; // string | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty.
$options['limit'] = 20; // int | Limit how many results are returned.

try {
    $result = $apiInstance->listDmRoutingConfigs($options);
} catch (Exception $e) {
    echo 'Exception when calling DmRoutingConfigsApi->listDmRoutingConfigs: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**state** | [**string[]**](../Model/string.md) | Filter configs by lifecycle state. Accepts a comma-separated list of state values (e.g. `?state&#x3D;active,active-with-draft`). Returns only configs whose current state matches one of the provided values. Returns 400 if any value is not a recognised state. | [optional] [one of: 'draft-only', 'active', 'active-with-draft']
**sort** | **string** | The order in which to list the results. | [optional] [one of: 'created_at', '-created_at', 'id', '-id', 'name', '-name'] [defaults to '-created_at']
**cursor** | **string** | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty. | [optional]
**limit** | **int** | Limit how many results are returned. | [optional] [defaults to 20]

### Return type

[**\Fastly\Model\RoutingConfigsResponse**](../Model/RoutingConfigsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `reactivateDmRoutingConfigVersion()`

```php
reactivateDmRoutingConfigVersion($options): \Fastly\Model\RoutingConfigVersionResponse // Reactivate a version
```

Reactivate a previously-active version. The currently active version, if any, becomes inactive but is retained in version history.

### Example
```php
    $options['config_id'] = 'config_id_example'; // string
$options['version_id'] = 'version_id_example'; // string

try {
    $result = $apiInstance->reactivateDmRoutingConfigVersion($options);
} catch (Exception $e) {
    echo 'Exception when calling DmRoutingConfigsApi->reactivateDmRoutingConfigVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**config_id** | **string** |  |
**version_id** | **string** |  |

### Return type

[**\Fastly\Model\RoutingConfigVersionResponse**](../Model/RoutingConfigVersionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateDmRoutingConfigDraft()`

```php
updateDmRoutingConfigDraft($options): \Fastly\Model\RoutingConfigVersionResponse // Update the draft
```

Update metadata on the draft version, such as its comment. If no draft exists, one is created automatically by cloning the active version.

### Example
```php
    $options['config_id'] = 'config_id_example'; // string
$options['draft_update'] = new \Fastly\Model\DraftUpdate(); // \Fastly\Model\DraftUpdate

try {
    $result = $apiInstance->updateDmRoutingConfigDraft($options);
} catch (Exception $e) {
    echo 'Exception when calling DmRoutingConfigsApi->updateDmRoutingConfigDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**config_id** | **string** |  |
**draft_update** | [**\Fastly\Model\DraftUpdate**](../Model/DraftUpdate.md) |  | [optional]

### Return type

[**\Fastly\Model\RoutingConfigVersionResponse**](../Model/RoutingConfigVersionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateDmRoutingConfigPath()`

```php
updateDmRoutingConfigPath($options): \Fastly\Model\PathResponse // Update a path
```

Update a path on the config's draft version. If no draft exists, one is created automatically by cloning the active version.

### Example
```php
    $options['config_id'] = 'config_id_example'; // string
$options['path_id'] = 'path_id_example'; // string
$options['path_update'] = new \Fastly\Model\PathUpdate(); // \Fastly\Model\PathUpdate

try {
    $result = $apiInstance->updateDmRoutingConfigPath($options);
} catch (Exception $e) {
    echo 'Exception when calling DmRoutingConfigsApi->updateDmRoutingConfigPath: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**config_id** | **string** |  |
**path_id** | **string** |  |
**path_update** | [**\Fastly\Model\PathUpdate**](../Model/PathUpdate.md) |  | [optional]

### Return type

[**\Fastly\Model\PathResponse**](../Model/PathResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateDmRoutingConfigRule()`

```php
updateDmRoutingConfigRule($options): \Fastly\Model\RuleResponse // Update a rule
```

Update a rule on the config's draft version. If no draft exists, one is created automatically by cloning the active version.

### Example
```php
    $options['config_id'] = 'config_id_example'; // string
$options['path_id'] = 'path_id_example'; // string
$options['rule_id'] = 'rule_id_example'; // string
$options['rule_update'] = new \Fastly\Model\RuleUpdate(); // \Fastly\Model\RuleUpdate

try {
    $result = $apiInstance->updateDmRoutingConfigRule($options);
} catch (Exception $e) {
    echo 'Exception when calling DmRoutingConfigsApi->updateDmRoutingConfigRule: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**config_id** | **string** |  |
**path_id** | **string** |  |
**rule_id** | **string** |  |
**rule_update** | [**\Fastly\Model\RuleUpdate**](../Model/RuleUpdate.md) |  | [optional]

### Return type

[**\Fastly\Model\RuleResponse**](../Model/RuleResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
