# Swagger\Client\ThemeApi

All URIs are relative to *https://keboolads.looker.com:19999/api/3.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activeThemes**](ThemeApi.md#activeThemes) | **GET** /themes/active | Get Active Themes
[**allThemes**](ThemeApi.md#allThemes) | **GET** /themes | Get All Themes
[**createTheme**](ThemeApi.md#createTheme) | **POST** /themes | Create Theme
[**defaultTheme**](ThemeApi.md#defaultTheme) | **GET** /themes/default | Get Default Theme
[**deleteTheme**](ThemeApi.md#deleteTheme) | **DELETE** /themes/{theme_id} | Delete Theme
[**searchThemes**](ThemeApi.md#searchThemes) | **GET** /themes/search | Search Themes
[**setDefaultTheme**](ThemeApi.md#setDefaultTheme) | **PUT** /themes/default | Set Default Theme
[**theme**](ThemeApi.md#theme) | **GET** /themes/{theme_id} | Get Theme
[**themeOrDefault**](ThemeApi.md#themeOrDefault) | **GET** /themes/theme_or_default | Get Theme or Default
[**updateTheme**](ThemeApi.md#updateTheme) | **PATCH** /themes/{theme_id} | Update Theme
[**validateTheme**](ThemeApi.md#validateTheme) | **POST** /themes/validate | Validate Theme


# **activeThemes**
> \Swagger\Client\Model\Theme[] activeThemes($name, $ts, $fields)

Get Active Themes

### Get active themes  Returns an array of active themes.  If the `name` parameter is specified, it will return an array with one theme if it's active and found.  The optional `ts` parameter can specify a different timestamp than \"now.\"  **Note**: Custom themes needs to be enabled by Looker. Unless custom themes are enabled, only the automatically generated default theme can be used. Please contact your Account Manager or support@looker.com to update your license for this feature.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ThemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Name of theme
$ts = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Timestamp representing the target datetime for the active period. Defaults to 'now'
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->activeThemes($name, $ts, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThemeApi->activeThemes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of theme | [optional]
 **ts** | **\DateTime**| Timestamp representing the target datetime for the active period. Defaults to &#39;now&#39; | [optional]
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\Theme[]**](../Model/Theme.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allThemes**
> \Swagger\Client\Model\Theme[] allThemes($fields)

Get All Themes

### Get an array of all existing themes  Get a **single theme** by id with [Theme](#!/Theme/theme)  This method returns an array of all existing themes. The active time for the theme is not considered.  **Note**: Custom themes needs to be enabled by Looker. Unless custom themes are enabled, only the automatically generated default theme can be used. Please contact your Account Manager or support@looker.com to update your license for this feature.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ThemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->allThemes($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThemeApi->allThemes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\Theme[]**](../Model/Theme.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTheme**
> \Swagger\Client\Model\Theme createTheme($body)

Create Theme

### Create a theme  Creates a new theme object, returning the theme details, including the created id.  If `settings` are not specified, the default theme settings will be copied into the new theme.  The theme `name` can only contain alphanumeric characters or underscores. Theme names should not contain any confidential information, such as customer names.  **Update** an existing theme with [Update Theme](#!/Theme/update_theme)  **Permanently delete** an existing theme with [Delete Theme](#!/Theme/delete_theme)  For more information, see [Creating and Applying Themes](https://looker.com/docs/r/admin/themes?version=6.20).  **Note**: Custom themes needs to be enabled by Looker. Unless custom themes are enabled, only the automatically generated default theme can be used. Please contact your Account Manager or support@looker.com to update your license for this feature.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ThemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Theme(); // \Swagger\Client\Model\Theme | Theme

try {
    $result = $apiInstance->createTheme($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThemeApi->createTheme: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Theme**](../Model/Theme.md)| Theme | [optional]

### Return type

[**\Swagger\Client\Model\Theme**](../Model/Theme.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **defaultTheme**
> \Swagger\Client\Model\Theme defaultTheme($ts)

Get Default Theme

### Get the default theme  Returns the active theme object set as the default.  The **default** theme name can be set in the UI on the Admin|Theme UI page  The optional `ts` parameter can specify a different timestamp than \"now.\" If specified, it returns the default theme at the time indicated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ThemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ts = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Timestamp representing the target datetime for the active period. Defaults to 'now'

try {
    $result = $apiInstance->defaultTheme($ts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThemeApi->defaultTheme: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ts** | **\DateTime**| Timestamp representing the target datetime for the active period. Defaults to &#39;now&#39; | [optional]

### Return type

[**\Swagger\Client\Model\Theme**](../Model/Theme.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTheme**
> string deleteTheme($theme_id)

Delete Theme

### Delete a specific theme by id  This operation permanently deletes the identified theme from the database.  Because multiple themes can have the same name (with different activation time spans) themes can only be deleted by ID.  All IDs associated with a theme name can be retrieved by searching for the theme name with [Theme Search](#!/Theme/search).  **Note**: Custom themes needs to be enabled by Looker. Unless custom themes are enabled, only the automatically generated default theme can be used. Please contact your Account Manager or support@looker.com to update your license for this feature.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ThemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$theme_id = "theme_id_example"; // string | Id of theme

try {
    $result = $apiInstance->deleteTheme($theme_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThemeApi->deleteTheme: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **theme_id** | **string**| Id of theme |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchThemes**
> \Swagger\Client\Model\Theme[] searchThemes($id, $name, $begin_at, $end_at, $limit, $offset, $sorts, $fields, $filter_or)

Search Themes

### Search all themes for matching criteria.  Returns an **array of theme objects** that match the specified search criteria.  | Search Parameters | Description | :-------------------: | :------ | | `begin_at` only | Find themes active at or after `begin_at` | `end_at` only | Find themes active at or before `end_at` | both set | Find themes with an active inclusive period between `begin_at` and `end_at`  Note: Range matching requires boolean AND logic. When using `begin_at` and `end_at` together, do not use `filter_or`=TRUE  If multiple search params are given and `filter_or` is FALSE or not specified, search params are combined in a logical AND operation. Only rows that match *all* search param criteria will be returned.  If `filter_or` is TRUE, multiple search params are combined in a logical OR operation. Results will include rows that match **any** of the search criteria.  String search params use case-insensitive matching. String search params can contain `%` and '_' as SQL LIKE pattern match wildcard expressions. example=\"dan%\" will match \"danger\" and \"Danzig\" but not \"David\" example=\"D_m%\" will match \"Damage\" and \"dump\"  Integer search params can accept a single value or a comma separated list of values. The multiple values will be combined under a logical OR operation - results will match at least one of the given values.  Most search params can accept \"IS NULL\" and \"NOT NULL\" as special expressions to match or exclude (respectively) rows where the column is null.  Boolean search params accept only \"true\" and \"false\" as values.   Get a **single theme** by id with [Theme](#!/Theme/theme)  **Note**: Custom themes needs to be enabled by Looker. Unless custom themes are enabled, only the automatically generated default theme can be used. Please contact your Account Manager or support@looker.com to update your license for this feature.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ThemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | Match theme id.
$name = "name_example"; // string | Match theme name.
$begin_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Timestamp for activation.
$end_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Timestamp for expiration.
$limit = 789; // int | Number of results to return (used with `offset`).
$offset = 789; // int | Number of results to skip before returning any (used with `limit`).
$sorts = "sorts_example"; // string | Fields to sort by.
$fields = "fields_example"; // string | Requested fields.
$filter_or = true; // bool | Combine given search criteria in a boolean OR expression

try {
    $result = $apiInstance->searchThemes($id, $name, $begin_at, $end_at, $limit, $offset, $sorts, $fields, $filter_or);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThemeApi->searchThemes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Match theme id. | [optional]
 **name** | **string**| Match theme name. | [optional]
 **begin_at** | **\DateTime**| Timestamp for activation. | [optional]
 **end_at** | **\DateTime**| Timestamp for expiration. | [optional]
 **limit** | **int**| Number of results to return (used with &#x60;offset&#x60;). | [optional]
 **offset** | **int**| Number of results to skip before returning any (used with &#x60;limit&#x60;). | [optional]
 **sorts** | **string**| Fields to sort by. | [optional]
 **fields** | **string**| Requested fields. | [optional]
 **filter_or** | **bool**| Combine given search criteria in a boolean OR expression | [optional]

### Return type

[**\Swagger\Client\Model\Theme[]**](../Model/Theme.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setDefaultTheme**
> \Swagger\Client\Model\Theme setDefaultTheme($name)

Set Default Theme

### Set the global default theme by theme name  Only Admin users can call this function.  Only an active theme with no expiration (`end_at` not set) can be assigned as the default theme. As long as a theme has an active record with no expiration, it can be set as the default.  [Create Theme](#!/Theme/create) has detailed information on rules for default and active themes  Returns the new specified default theme object.  **Note**: Custom themes needs to be enabled by Looker. Unless custom themes are enabled, only the automatically generated default theme can be used. Please contact your Account Manager or support@looker.com to update your license for this feature.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ThemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Name of theme to set as default

try {
    $result = $apiInstance->setDefaultTheme($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThemeApi->setDefaultTheme: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of theme to set as default |

### Return type

[**\Swagger\Client\Model\Theme**](../Model/Theme.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **theme**
> \Swagger\Client\Model\Theme theme($theme_id, $fields)

Get Theme

### Get a theme by ID  Use this to retrieve a specific theme, whether or not it's currently active.  **Note**: Custom themes needs to be enabled by Looker. Unless custom themes are enabled, only the automatically generated default theme can be used. Please contact your Account Manager or support@looker.com to update your license for this feature.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ThemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$theme_id = "theme_id_example"; // string | Id of theme
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->theme($theme_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThemeApi->theme: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **theme_id** | **string**| Id of theme |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\Theme**](../Model/Theme.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **themeOrDefault**
> \Swagger\Client\Model\Theme themeOrDefault($name, $ts)

Get Theme or Default

### Get the named theme if it's active. Otherwise, return the default theme  The optional `ts` parameter can specify a different timestamp than \"now.\" Note: API users with `show` ability can call this function  **Note**: Custom themes needs to be enabled by Looker. Unless custom themes are enabled, only the automatically generated default theme can be used. Please contact your Account Manager or support@looker.com to update your license for this feature.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ThemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Name of theme
$ts = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Timestamp representing the target datetime for the active period. Defaults to 'now'

try {
    $result = $apiInstance->themeOrDefault($name, $ts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThemeApi->themeOrDefault: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of theme |
 **ts** | **\DateTime**| Timestamp representing the target datetime for the active period. Defaults to &#39;now&#39; | [optional]

### Return type

[**\Swagger\Client\Model\Theme**](../Model/Theme.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTheme**
> \Swagger\Client\Model\Theme updateTheme($theme_id, $body)

Update Theme

### Update the theme by id.  **Note**: Custom themes needs to be enabled by Looker. Unless custom themes are enabled, only the automatically generated default theme can be used. Please contact your Account Manager or support@looker.com to update your license for this feature.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ThemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$theme_id = "theme_id_example"; // string | Id of theme
$body = new \Swagger\Client\Model\Theme(); // \Swagger\Client\Model\Theme | Theme

try {
    $result = $apiInstance->updateTheme($theme_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThemeApi->updateTheme: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **theme_id** | **string**| Id of theme |
 **body** | [**\Swagger\Client\Model\Theme**](../Model/Theme.md)| Theme |

### Return type

[**\Swagger\Client\Model\Theme**](../Model/Theme.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateTheme**
> \Swagger\Client\Model\ValidationError validateTheme($body)

Validate Theme

### Validate a theme with the specified information  Validates all values set for the theme, returning any errors encountered, or 200 OK if valid  See [Create Theme](#!/Theme/create_theme) for constraints  **Note**: Custom themes needs to be enabled by Looker. Unless custom themes are enabled, only the automatically generated default theme can be used. Please contact your Account Manager or support@looker.com to update your license for this feature.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ThemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Theme(); // \Swagger\Client\Model\Theme | Theme

try {
    $result = $apiInstance->validateTheme($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThemeApi->validateTheme: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Theme**](../Model/Theme.md)| Theme | [optional]

### Return type

[**\Swagger\Client\Model\ValidationError**](../Model/ValidationError.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

