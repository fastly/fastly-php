# Fastly\Api\BotManagementApi


```php
$apiInstance = new Fastly\Api\BotManagementApi(
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
[**botManagementGetBot()**](BotManagementApi.md#botManagementGetBot) | **GET** /bot-management/v1/workspaces/{workspace_id}/policy/categories/{category_id}/bots/{bot_id} | Get a bot
[**botManagementGetCategory()**](BotManagementApi.md#botManagementGetCategory) | **GET** /bot-management/v1/workspaces/{workspace_id}/policy/categories/{category_id} | Get a category
[**botManagementGetWorkspace()**](BotManagementApi.md#botManagementGetWorkspace) | **GET** /bot-management/v1/workspaces/{workspace_id} | Get a workspace
[**botManagementListBots()**](BotManagementApi.md#botManagementListBots) | **GET** /bot-management/v1/workspaces/{workspace_id}/policy/bots | List all bots in a workspace
[**botManagementListCategories()**](BotManagementApi.md#botManagementListCategories) | **GET** /bot-management/v1/workspaces/{workspace_id}/policy/categories | List categories
[**botManagementListCategoryBots()**](BotManagementApi.md#botManagementListCategoryBots) | **GET** /bot-management/v1/workspaces/{workspace_id}/policy/categories/{category_id}/bots | List bots in a category
[**botManagementListWorkspaces()**](BotManagementApi.md#botManagementListWorkspaces) | **GET** /bot-management/v1/workspaces | List workspaces
[**botManagementUpdateBot()**](BotManagementApi.md#botManagementUpdateBot) | **PATCH** /bot-management/v1/workspaces/{workspace_id}/policy/categories/{category_id}/bots/{bot_id} | Set a bot action
[**botManagementUpdateCategory()**](BotManagementApi.md#botManagementUpdateCategory) | **PATCH** /bot-management/v1/workspaces/{workspace_id}/policy/categories/{category_id} | Set a category action
[**botManagementUpdateCategoryBots()**](BotManagementApi.md#botManagementUpdateCategoryBots) | **PATCH** /bot-management/v1/workspaces/{workspace_id}/policy/categories/{category_id}/bots | Set the action for all bots in a category
[**botManagementUpdateWorkspace()**](BotManagementApi.md#botManagementUpdateWorkspace) | **PATCH** /bot-management/v1/workspaces/{workspace_id} | Update a workspace


## `botManagementGetBot()`

```php
botManagementGetBot($options): \Fastly\Model\BotManagementBotResponse // Get a bot
```

Get the attributes of a bot in a category.

### Example
```php
    $options['workspace_id'] = SU1Z0isxPaozGVKXdv0eY; // string | The ID of the bot management workspace.
$options['category_id'] = ai_crawlers; // string | The ID of the bot category.
$options['bot_id'] = gptbot; // string | The ID of the bot.

try {
    $result = $apiInstance->botManagementGetBot($options);
} catch (Exception $e) {
    echo 'Exception when calling BotManagementApi->botManagementGetBot: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**workspace_id** | **string** | The ID of the bot management workspace. |
**category_id** | **string** | The ID of the bot category. |
**bot_id** | **string** | The ID of the bot. |

### Return type

[**\Fastly\Model\BotManagementBotResponse**](../Model/BotManagementBotResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `botManagementGetCategory()`

```php
botManagementGetCategory($options): \Fastly\Model\BotManagementCategoryResponse // Get a category
```

Get the attributes of a bot category.

### Example
```php
    $options['workspace_id'] = SU1Z0isxPaozGVKXdv0eY; // string | The ID of the bot management workspace.
$options['category_id'] = ai_crawlers; // string | The ID of the bot category.

try {
    $result = $apiInstance->botManagementGetCategory($options);
} catch (Exception $e) {
    echo 'Exception when calling BotManagementApi->botManagementGetCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**workspace_id** | **string** | The ID of the bot management workspace. |
**category_id** | **string** | The ID of the bot category. |

### Return type

[**\Fastly\Model\BotManagementCategoryResponse**](../Model/BotManagementCategoryResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `botManagementGetWorkspace()`

```php
botManagementGetWorkspace($options): \Fastly\Model\BotManagementWorkspaceResponse // Get a workspace
```

Retrieve a bot management workspace.

### Example
```php
    $options['workspace_id'] = SU1Z0isxPaozGVKXdv0eY; // string | The ID of the bot management workspace.

try {
    $result = $apiInstance->botManagementGetWorkspace($options);
} catch (Exception $e) {
    echo 'Exception when calling BotManagementApi->botManagementGetWorkspace: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**workspace_id** | **string** | The ID of the bot management workspace. |

### Return type

[**\Fastly\Model\BotManagementWorkspaceResponse**](../Model/BotManagementWorkspaceResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `botManagementListBots()`

```php
botManagementListBots($options): \Fastly\Model\BotManagementWorkspaceBotsResponse // List all bots in a workspace
```

List all bots in a workspace's policy across all categories.

### Example
```php
    $options['workspace_id'] = SU1Z0isxPaozGVKXdv0eY; // string | The ID of the bot management workspace.
$options['limit'] = 100; // int | Limit how many results are returned.
$options['cursor'] = MTAwOjA; // string | Cursor for pagination. Use the `next_cursor` value from a previous response to request the next page of results.

try {
    $result = $apiInstance->botManagementListBots($options);
} catch (Exception $e) {
    echo 'Exception when calling BotManagementApi->botManagementListBots: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**workspace_id** | **string** | The ID of the bot management workspace. |
**limit** | **int** | Limit how many results are returned. | [optional] [defaults to 100]
**cursor** | **string** | Cursor for pagination. Use the `next_cursor` value from a previous response to request the next page of results. | [optional]

### Return type

[**\Fastly\Model\BotManagementWorkspaceBotsResponse**](../Model/BotManagementWorkspaceBotsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `botManagementListCategories()`

```php
botManagementListCategories($options): \Fastly\Model\BotManagementCategoriesResponse // List categories
```

List all bot categories in a workspace's policy. Each category has an action that applies to every bot in the category that is set to `inherit`. To list the bots themselves, use [list all bots in a workspace](#bot-management-list-bots) or [list bots in a category](#bot-management-list-category-bots).

### Example
```php
    $options['workspace_id'] = SU1Z0isxPaozGVKXdv0eY; // string | The ID of the bot management workspace.
$options['limit'] = 100; // int | Limit how many results are returned.
$options['cursor'] = MTAwOjA; // string | Cursor for pagination. Use the `next_cursor` value from a previous response to request the next page of results.

try {
    $result = $apiInstance->botManagementListCategories($options);
} catch (Exception $e) {
    echo 'Exception when calling BotManagementApi->botManagementListCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**workspace_id** | **string** | The ID of the bot management workspace. |
**limit** | **int** | Limit how many results are returned. | [optional] [defaults to 100]
**cursor** | **string** | Cursor for pagination. Use the `next_cursor` value from a previous response to request the next page of results. | [optional]

### Return type

[**\Fastly\Model\BotManagementCategoriesResponse**](../Model/BotManagementCategoriesResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `botManagementListCategoryBots()`

```php
botManagementListCategoryBots($options): \Fastly\Model\BotManagementBotsResponse // List bots in a category
```

List all bots in a bot category.

### Example
```php
    $options['workspace_id'] = SU1Z0isxPaozGVKXdv0eY; // string | The ID of the bot management workspace.
$options['category_id'] = ai_crawlers; // string | The ID of the bot category.
$options['limit'] = 100; // int | Limit how many results are returned.
$options['cursor'] = MTAwOjA; // string | Cursor for pagination. Use the `next_cursor` value from a previous response to request the next page of results.

try {
    $result = $apiInstance->botManagementListCategoryBots($options);
} catch (Exception $e) {
    echo 'Exception when calling BotManagementApi->botManagementListCategoryBots: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**workspace_id** | **string** | The ID of the bot management workspace. |
**category_id** | **string** | The ID of the bot category. |
**limit** | **int** | Limit how many results are returned. | [optional] [defaults to 100]
**cursor** | **string** | Cursor for pagination. Use the `next_cursor` value from a previous response to request the next page of results. | [optional]

### Return type

[**\Fastly\Model\BotManagementBotsResponse**](../Model/BotManagementBotsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `botManagementListWorkspaces()`

```php
botManagementListWorkspaces($options): \Fastly\Model\BotManagementWorkspacesResponse // List workspaces
```

List bot management workspaces.

### Example
```php
    $options['service_id'] = 6oMkSHsKCMBjQJPLHgMxu1; // string | Filter results to the workspace attached to this service. Returns an empty list if the service is not attached to a workspace.
$options['limit'] = 100; // int | Limit how many results are returned.
$options['cursor'] = MTAwOjA; // string | Cursor for pagination. Use the `next_cursor` value from a previous response to request the next page of results.

try {
    $result = $apiInstance->botManagementListWorkspaces($options);
} catch (Exception $e) {
    echo 'Exception when calling BotManagementApi->botManagementListWorkspaces: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Filter results to the workspace attached to this service. Returns an empty list if the service is not attached to a workspace. | [optional]
**limit** | **int** | Limit how many results are returned. | [optional] [defaults to 100]
**cursor** | **string** | Cursor for pagination. Use the `next_cursor` value from a previous response to request the next page of results. | [optional]

### Return type

[**\Fastly\Model\BotManagementWorkspacesResponse**](../Model/BotManagementWorkspacesResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `botManagementUpdateBot()`

```php
botManagementUpdateBot($options): \Fastly\Model\BotManagementBotResponse // Set a bot action
```

Set the action for a bot. Set the action to 'inherit' to apply the category's action or to a specific value to override the category's action.

### Example
```php
    $options['workspace_id'] = SU1Z0isxPaozGVKXdv0eY; // string | The ID of the bot management workspace.
$options['category_id'] = ai_crawlers; // string | The ID of the bot category.
$options['bot_id'] = gptbot; // string | The ID of the bot.
$options['bot_management_bot'] = new \Fastly\Model\BotManagementBot(); // \Fastly\Model\BotManagementBot

try {
    $result = $apiInstance->botManagementUpdateBot($options);
} catch (Exception $e) {
    echo 'Exception when calling BotManagementApi->botManagementUpdateBot: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**workspace_id** | **string** | The ID of the bot management workspace. |
**category_id** | **string** | The ID of the bot category. |
**bot_id** | **string** | The ID of the bot. |
**bot_management_bot** | [**\Fastly\Model\BotManagementBot**](../Model/BotManagementBot.md) |  |

### Return type

[**\Fastly\Model\BotManagementBotResponse**](../Model/BotManagementBotResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `botManagementUpdateCategory()`

```php
botManagementUpdateCategory($options): \Fastly\Model\BotManagementCategoryResponse // Set a category action
```

Set the default action for a bot category. Bots set to `inherit` follow this action. Bots with their own action keep it. To remove every bot's own action in the category, use [set the action for all bots in a category](#bot-management-update-category-bots).

### Example
```php
    $options['workspace_id'] = SU1Z0isxPaozGVKXdv0eY; // string | The ID of the bot management workspace.
$options['category_id'] = ai_crawlers; // string | The ID of the bot category.
$options['bot_management_category'] = new \Fastly\Model\BotManagementCategory(); // \Fastly\Model\BotManagementCategory

try {
    $result = $apiInstance->botManagementUpdateCategory($options);
} catch (Exception $e) {
    echo 'Exception when calling BotManagementApi->botManagementUpdateCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**workspace_id** | **string** | The ID of the bot management workspace. |
**category_id** | **string** | The ID of the bot category. |
**bot_management_category** | [**\Fastly\Model\BotManagementCategory**](../Model/BotManagementCategory.md) |  |

### Return type

[**\Fastly\Model\BotManagementCategoryResponse**](../Model/BotManagementCategoryResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `botManagementUpdateCategoryBots()`

```php
botManagementUpdateCategoryBots($options): \Fastly\Model\BotManagementBotsResponse // Set the action for all bots in a category
```

Set the action for every bot in a category. Setting `inherit` removes each bot's own action, so every bot follows the category's action. The category's own action is unchanged. The update applies to every bot in the category or to none, and repeating it gives the same result. The response lists every bot in the category, including bots that already inherited, and is not paginated.

### Example
```php
    $options['workspace_id'] = SU1Z0isxPaozGVKXdv0eY; // string | The ID of the bot management workspace.
$options['category_id'] = ai_crawlers; // string | The ID of the bot category.
$options['bot_management_category_bots'] = new \Fastly\Model\BotManagementCategoryBots(); // \Fastly\Model\BotManagementCategoryBots

try {
    $result = $apiInstance->botManagementUpdateCategoryBots($options);
} catch (Exception $e) {
    echo 'Exception when calling BotManagementApi->botManagementUpdateCategoryBots: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**workspace_id** | **string** | The ID of the bot management workspace. |
**category_id** | **string** | The ID of the bot category. |
**bot_management_category_bots** | [**\Fastly\Model\BotManagementCategoryBots**](../Model/BotManagementCategoryBots.md) |  |

### Return type

[**\Fastly\Model\BotManagementBotsResponse**](../Model/BotManagementBotsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `botManagementUpdateWorkspace()`

```php
botManagementUpdateWorkspace($options): \Fastly\Model\BotManagementWorkspaceResponse // Update a workspace
```

Update the attributes of a bot management workspace.

### Example
```php
    $options['workspace_id'] = SU1Z0isxPaozGVKXdv0eY; // string | The ID of the bot management workspace.
$options['bot_management_workspace'] = new \Fastly\Model\BotManagementWorkspace(); // \Fastly\Model\BotManagementWorkspace

try {
    $result = $apiInstance->botManagementUpdateWorkspace($options);
} catch (Exception $e) {
    echo 'Exception when calling BotManagementApi->botManagementUpdateWorkspace: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**workspace_id** | **string** | The ID of the bot management workspace. |
**bot_management_workspace** | [**\Fastly\Model\BotManagementWorkspace**](../Model/BotManagementWorkspace.md) |  |

### Return type

[**\Fastly\Model\BotManagementWorkspaceResponse**](../Model/BotManagementWorkspaceResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
