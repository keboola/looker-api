# Swagger\Client\ContentApi

All URIs are relative to *https://keboolads.looker.com:19999/api/3.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**allContentMetadataAccesses**](ContentApi.md#allContentMetadataAccesses) | **GET** /content_metadata_access | Get All Content Metadata Accesses
[**allContentMetadatas**](ContentApi.md#allContentMetadatas) | **GET** /content_metadata | Get All Content Metadatas
[**contentFavorite**](ContentApi.md#contentFavorite) | **GET** /content_favorite/{content_favorite_id} | Get Favorite Content
[**contentMetadata**](ContentApi.md#contentMetadata) | **GET** /content_metadata/{content_metadata_id} | Get Content Metadata
[**contentValidation**](ContentApi.md#contentValidation) | **GET** /content_validation | Validate Content
[**createContentFavorite**](ContentApi.md#createContentFavorite) | **POST** /content_favorite | Create Favorite Content
[**createContentMetadataAccess**](ContentApi.md#createContentMetadataAccess) | **POST** /content_metadata_access | Create Content Metadata Access
[**deleteContentFavorite**](ContentApi.md#deleteContentFavorite) | **DELETE** /content_favorite/{content_favorite_id} | Delete Favorite Content
[**deleteContentMetadataAccess**](ContentApi.md#deleteContentMetadataAccess) | **DELETE** /content_metadata_access/{content_metadata_access_id} | Delete Content Metadata Access
[**searchContentFavorites**](ContentApi.md#searchContentFavorites) | **GET** /content_favorite/search | Search Favorite Contents
[**searchContentViews**](ContentApi.md#searchContentViews) | **GET** /content_view/search | Search Content Views
[**updateContentMetadata**](ContentApi.md#updateContentMetadata) | **PATCH** /content_metadata/{content_metadata_id} | Update Content Metadata
[**updateContentMetadataAccess**](ContentApi.md#updateContentMetadataAccess) | **PUT** /content_metadata_access/{content_metadata_access_id} | Update Content Metadata Access


# **allContentMetadataAccesses**
> \Swagger\Client\Model\ContentMetaGroupUser[] allContentMetadataAccesses($content_metadata_id, $fields)

Get All Content Metadata Accesses

### All content metadata access records for a content metadata item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_metadata_id = 789; // int | Id of content metadata
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->allContentMetadataAccesses($content_metadata_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->allContentMetadataAccesses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_metadata_id** | **int**| Id of content metadata |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\ContentMetaGroupUser[]**](../Model/ContentMetaGroupUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allContentMetadatas**
> \Swagger\Client\Model\ContentMeta[] allContentMetadatas($parent_id, $fields)

Get All Content Metadatas

### Get information about all content metadata in a space.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$parent_id = 789; // int | Parent space of content.
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->allContentMetadatas($parent_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->allContentMetadatas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent_id** | **int**| Parent space of content. |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\ContentMeta[]**](../Model/ContentMeta.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contentFavorite**
> \Swagger\Client\Model\ContentFavorite contentFavorite($content_favorite_id, $fields)

Get Favorite Content

### Get favorite content by its id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_favorite_id = 789; // int | Id of favorite content
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->contentFavorite($content_favorite_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->contentFavorite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_favorite_id** | **int**| Id of favorite content |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\ContentFavorite**](../Model/ContentFavorite.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contentMetadata**
> \Swagger\Client\Model\ContentMeta contentMetadata($content_metadata_id, $fields)

Get Content Metadata

### Get information about an individual content metadata record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_metadata_id = 789; // int | Id of content metadata
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->contentMetadata($content_metadata_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->contentMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_metadata_id** | **int**| Id of content metadata |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\ContentMeta**](../Model/ContentMeta.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contentValidation**
> \Swagger\Client\Model\ContentValidation contentValidation($fields)

Validate Content

### Validate All Content Requires Content Validation Labs Feature be enabled  Performs validation of all looks and dashboards Returns a list of errors found as well as metadata about the content validation run.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->contentValidation($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->contentValidation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\ContentValidation**](../Model/ContentValidation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createContentFavorite**
> \Swagger\Client\Model\ContentFavorite createContentFavorite($body)

Create Favorite Content

### Create favorite content

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ContentFavorite(); // \Swagger\Client\Model\ContentFavorite | Favorite Content

try {
    $result = $apiInstance->createContentFavorite($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->createContentFavorite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ContentFavorite**](../Model/ContentFavorite.md)| Favorite Content | [optional]

### Return type

[**\Swagger\Client\Model\ContentFavorite**](../Model/ContentFavorite.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createContentMetadataAccess**
> \Swagger\Client\Model\ContentMetaGroupUser createContentMetadataAccess($body)

Create Content Metadata Access

### Create content metadata access.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ContentMetaGroupUser(); // \Swagger\Client\Model\ContentMetaGroupUser | Content Metadata Access

try {
    $result = $apiInstance->createContentMetadataAccess($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->createContentMetadataAccess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ContentMetaGroupUser**](../Model/ContentMetaGroupUser.md)| Content Metadata Access | [optional]

### Return type

[**\Swagger\Client\Model\ContentMetaGroupUser**](../Model/ContentMetaGroupUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContentFavorite**
> string deleteContentFavorite($content_favorite_id)

Delete Favorite Content

### Delete favorite content

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_favorite_id = 789; // int | Id of favorite content

try {
    $result = $apiInstance->deleteContentFavorite($content_favorite_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->deleteContentFavorite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_favorite_id** | **int**| Id of favorite content |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContentMetadataAccess**
> string deleteContentMetadataAccess($content_metadata_access_id)

Delete Content Metadata Access

### Remove content metadata access.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_metadata_access_id = 789; // int | Id of content metadata access

try {
    $result = $apiInstance->deleteContentMetadataAccess($content_metadata_access_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->deleteContentMetadataAccess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_metadata_access_id** | **int**| Id of content metadata access |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchContentFavorites**
> \Swagger\Client\Model\ContentFavorite[] searchContentFavorites($id, $user_id, $content_metadata_id, $dashboard_id, $look_id, $limit, $offset, $sorts, $fields, $filter_or)

Search Favorite Contents

### Search Favorite Content  If multiple search params are given and `filter_or` is FALSE or not specified, search params are combined in a logical AND operation. Only rows that match *all* search param criteria will be returned.  If `filter_or` is TRUE, multiple search params are combined in a logical OR operation. Results will include rows that match **any** of the search criteria.  String search params use case-insensitive matching. String search params can contain `%` and '_' as SQL LIKE pattern match wildcard expressions. example=\"dan%\" will match \"danger\" and \"Danzig\" but not \"David\" example=\"D_m%\" will match \"Damage\" and \"dump\"  Integer search params can accept a single value or a comma separated list of values. The multiple values will be combined under a logical OR operation - results will match at least one of the given values.  Most search params can accept \"IS NULL\" and \"NOT NULL\" as special expressions to match or exclude (respectively) rows where the column is null.  Boolean search params accept only \"true\" and \"false\" as values.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | Match content favorite id(s)
$user_id = 789; // int | Match user id(s)
$content_metadata_id = 789; // int | Match content metadata id(s)
$dashboard_id = 789; // int | Match dashboard id(s)
$look_id = 789; // int | Match look id(s)
$limit = 789; // int | Number of results to return. (used with offset)
$offset = 789; // int | Number of results to skip before returning any. (used with limit)
$sorts = "sorts_example"; // string | Fields to sort by.
$fields = "fields_example"; // string | Requested fields.
$filter_or = true; // bool | Combine given search criteria in a boolean OR expression

try {
    $result = $apiInstance->searchContentFavorites($id, $user_id, $content_metadata_id, $dashboard_id, $look_id, $limit, $offset, $sorts, $fields, $filter_or);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->searchContentFavorites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Match content favorite id(s) | [optional]
 **user_id** | **int**| Match user id(s) | [optional]
 **content_metadata_id** | **int**| Match content metadata id(s) | [optional]
 **dashboard_id** | **int**| Match dashboard id(s) | [optional]
 **look_id** | **int**| Match look id(s) | [optional]
 **limit** | **int**| Number of results to return. (used with offset) | [optional]
 **offset** | **int**| Number of results to skip before returning any. (used with limit) | [optional]
 **sorts** | **string**| Fields to sort by. | [optional]
 **fields** | **string**| Requested fields. | [optional]
 **filter_or** | **bool**| Combine given search criteria in a boolean OR expression | [optional]

### Return type

[**\Swagger\Client\Model\ContentFavorite[]**](../Model/ContentFavorite.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchContentViews**
> \Swagger\Client\Model\ContentView[] searchContentViews($view_count, $group_id, $look_id, $dashboard_id, $content_metadata_id, $start_of_week_date, $all_time, $user_id, $fields, $limit, $offset, $sorts, $filter_or)

Search Content Views

### Search Content Views  If multiple search params are given and `filter_or` is FALSE or not specified, search params are combined in a logical AND operation. Only rows that match *all* search param criteria will be returned.  If `filter_or` is TRUE, multiple search params are combined in a logical OR operation. Results will include rows that match **any** of the search criteria.  String search params use case-insensitive matching. String search params can contain `%` and '_' as SQL LIKE pattern match wildcard expressions. example=\"dan%\" will match \"danger\" and \"Danzig\" but not \"David\" example=\"D_m%\" will match \"Damage\" and \"dump\"  Integer search params can accept a single value or a comma separated list of values. The multiple values will be combined under a logical OR operation - results will match at least one of the given values.  Most search params can accept \"IS NULL\" and \"NOT NULL\" as special expressions to match or exclude (respectively) rows where the column is null.  Boolean search params accept only \"true\" and \"false\" as values.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$view_count = 789; // int | Match view count
$group_id = 789; // int | Match Group Id
$look_id = "look_id_example"; // string | Match look_id
$dashboard_id = "dashboard_id_example"; // string | Match dashboard_id
$content_metadata_id = 789; // int | Match content metadata id
$start_of_week_date = "start_of_week_date_example"; // string | Match start of week date
$all_time = true; // bool | True if only all time view records should be returned
$user_id = 789; // int | Match user id
$fields = "fields_example"; // string | Requested fields
$limit = 789; // int | Number of results to return. Use with `offset` to manage pagination of results
$offset = 789; // int | Number of results to skip before returning data
$sorts = "sorts_example"; // string | Fields to sort by
$filter_or = true; // bool | Combine given search criteria in a boolean OR expression

try {
    $result = $apiInstance->searchContentViews($view_count, $group_id, $look_id, $dashboard_id, $content_metadata_id, $start_of_week_date, $all_time, $user_id, $fields, $limit, $offset, $sorts, $filter_or);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->searchContentViews: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **view_count** | **int**| Match view count | [optional]
 **group_id** | **int**| Match Group Id | [optional]
 **look_id** | **string**| Match look_id | [optional]
 **dashboard_id** | **string**| Match dashboard_id | [optional]
 **content_metadata_id** | **int**| Match content metadata id | [optional]
 **start_of_week_date** | **string**| Match start of week date | [optional]
 **all_time** | **bool**| True if only all time view records should be returned | [optional]
 **user_id** | **int**| Match user id | [optional]
 **fields** | **string**| Requested fields | [optional]
 **limit** | **int**| Number of results to return. Use with &#x60;offset&#x60; to manage pagination of results | [optional]
 **offset** | **int**| Number of results to skip before returning data | [optional]
 **sorts** | **string**| Fields to sort by | [optional]
 **filter_or** | **bool**| Combine given search criteria in a boolean OR expression | [optional]

### Return type

[**\Swagger\Client\Model\ContentView[]**](../Model/ContentView.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContentMetadata**
> \Swagger\Client\Model\ContentMeta updateContentMetadata($content_metadata_id, $body)

Update Content Metadata

### Move a piece of content.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_metadata_id = 789; // int | Id of content metadata
$body = new \Swagger\Client\Model\ContentMeta(); // \Swagger\Client\Model\ContentMeta | Content Metadata

try {
    $result = $apiInstance->updateContentMetadata($content_metadata_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->updateContentMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_metadata_id** | **int**| Id of content metadata |
 **body** | [**\Swagger\Client\Model\ContentMeta**](../Model/ContentMeta.md)| Content Metadata |

### Return type

[**\Swagger\Client\Model\ContentMeta**](../Model/ContentMeta.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContentMetadataAccess**
> \Swagger\Client\Model\ContentMetaGroupUser updateContentMetadataAccess($content_metadata_access_id, $body)

Update Content Metadata Access

### Update type of access for content metadata.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_metadata_access_id = 789; // int | Id of content metadata access
$body = new \Swagger\Client\Model\ContentMetaGroupUser(); // \Swagger\Client\Model\ContentMetaGroupUser | Content Metadata Access

try {
    $result = $apiInstance->updateContentMetadataAccess($content_metadata_access_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->updateContentMetadataAccess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_metadata_access_id** | **int**| Id of content metadata access |
 **body** | [**\Swagger\Client\Model\ContentMetaGroupUser**](../Model/ContentMetaGroupUser.md)| Content Metadata Access |

### Return type

[**\Swagger\Client\Model\ContentMetaGroupUser**](../Model/ContentMetaGroupUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

