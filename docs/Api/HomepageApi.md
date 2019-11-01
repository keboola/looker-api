# Swagger\Client\HomepageApi

All URIs are relative to *https://example.looker.com:19999/api/3.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**allHomepageItems**](HomepageApi.md#allHomepageItems) | **GET** /homepage_items | Get All Homepage Items
[**allHomepageSections**](HomepageApi.md#allHomepageSections) | **GET** /homepage_sections | Get All Homepage sections
[**allHomepages**](HomepageApi.md#allHomepages) | **GET** /homepages | Get All Homepages
[**createHomepage**](HomepageApi.md#createHomepage) | **POST** /homepages | Create Homepage
[**createHomepageItem**](HomepageApi.md#createHomepageItem) | **POST** /homepage_items | Create Homepage Item
[**createHomepageSection**](HomepageApi.md#createHomepageSection) | **POST** /homepage_sections | Create Homepage section
[**deleteHomepage**](HomepageApi.md#deleteHomepage) | **DELETE** /homepages/{homepage_id} | Delete Homepage
[**deleteHomepageItem**](HomepageApi.md#deleteHomepageItem) | **DELETE** /homepage_items/{homepage_item_id} | Delete Homepage Item
[**deleteHomepageSection**](HomepageApi.md#deleteHomepageSection) | **DELETE** /homepage_sections/{homepage_section_id} | Delete Homepage section
[**homepage**](HomepageApi.md#homepage) | **GET** /homepages/{homepage_id} | Get Homepage
[**homepageItem**](HomepageApi.md#homepageItem) | **GET** /homepage_items/{homepage_item_id} | Get Homepage Item
[**homepageSection**](HomepageApi.md#homepageSection) | **GET** /homepage_sections/{homepage_section_id} | Get Homepage section
[**searchHomepages**](HomepageApi.md#searchHomepages) | **GET** /homepages/search | Search Homepages
[**updateHomepage**](HomepageApi.md#updateHomepage) | **PATCH** /homepages/{homepage_id} | Update Homepage
[**updateHomepageItem**](HomepageApi.md#updateHomepageItem) | **PATCH** /homepage_items/{homepage_item_id} | Update Homepage Item
[**updateHomepageSection**](HomepageApi.md#updateHomepageSection) | **PATCH** /homepage_sections/{homepage_section_id} | Update Homepage section


# **allHomepageItems**
> \Swagger\Client\Model\HomepageItem[] allHomepageItems($fields, $sorts, $homepage_section_id)

Get All Homepage Items

### Get information about all homepage items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HomepageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | Requested fields.
$sorts = "sorts_example"; // string | Fields to sort by.
$homepage_section_id = "homepage_section_id_example"; // string | Filter to a specific homepage section

try {
    $result = $apiInstance->allHomepageItems($fields, $sorts, $homepage_section_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HomepageApi->allHomepageItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Requested fields. | [optional]
 **sorts** | **string**| Fields to sort by. | [optional]
 **homepage_section_id** | **string**| Filter to a specific homepage section | [optional]

### Return type

[**\Swagger\Client\Model\HomepageItem[]**](../Model/HomepageItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allHomepageSections**
> \Swagger\Client\Model\HomepageSection[] allHomepageSections($fields, $sorts)

Get All Homepage sections

### Get information about all homepage sections.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HomepageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | Requested fields.
$sorts = "sorts_example"; // string | Fields to sort by.

try {
    $result = $apiInstance->allHomepageSections($fields, $sorts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HomepageApi->allHomepageSections: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Requested fields. | [optional]
 **sorts** | **string**| Fields to sort by. | [optional]

### Return type

[**\Swagger\Client\Model\HomepageSection[]**](../Model/HomepageSection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allHomepages**
> \Swagger\Client\Model\Homepage[] allHomepages($fields)

Get All Homepages

### Get information about all homepages.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HomepageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->allHomepages($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HomepageApi->allHomepages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\Homepage[]**](../Model/Homepage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createHomepage**
> \Swagger\Client\Model\Homepage createHomepage($body, $fields)

Create Homepage

### Create a new homepage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HomepageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Homepage(); // \Swagger\Client\Model\Homepage | Homepage
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->createHomepage($body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HomepageApi->createHomepage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Homepage**](../Model/Homepage.md)| Homepage | [optional]
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\Homepage**](../Model/Homepage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createHomepageItem**
> \Swagger\Client\Model\HomepageItem createHomepageItem($body, $fields)

Create Homepage Item

### Create a new homepage item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HomepageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\HomepageItem(); // \Swagger\Client\Model\HomepageItem | Homepage Item
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->createHomepageItem($body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HomepageApi->createHomepageItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\HomepageItem**](../Model/HomepageItem.md)| Homepage Item | [optional]
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\HomepageItem**](../Model/HomepageItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createHomepageSection**
> \Swagger\Client\Model\HomepageSection createHomepageSection($body, $fields)

Create Homepage section

### Create a new homepage section.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HomepageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\HomepageSection(); // \Swagger\Client\Model\HomepageSection | Homepage section
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->createHomepageSection($body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HomepageApi->createHomepageSection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\HomepageSection**](../Model/HomepageSection.md)| Homepage section | [optional]
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\HomepageSection**](../Model/HomepageSection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteHomepage**
> string deleteHomepage($homepage_id)

Delete Homepage

### Delete a homepage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HomepageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$homepage_id = 789; // int | Id of homepage

try {
    $result = $apiInstance->deleteHomepage($homepage_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HomepageApi->deleteHomepage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **homepage_id** | **int**| Id of homepage |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteHomepageItem**
> string deleteHomepageItem($homepage_item_id)

Delete Homepage Item

### Delete a homepage item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HomepageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$homepage_item_id = 789; // int | Id of homepage_item

try {
    $result = $apiInstance->deleteHomepageItem($homepage_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HomepageApi->deleteHomepageItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **homepage_item_id** | **int**| Id of homepage_item |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteHomepageSection**
> string deleteHomepageSection($homepage_section_id)

Delete Homepage section

### Delete a homepage section.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HomepageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$homepage_section_id = 789; // int | Id of homepage_section

try {
    $result = $apiInstance->deleteHomepageSection($homepage_section_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HomepageApi->deleteHomepageSection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **homepage_section_id** | **int**| Id of homepage_section |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **homepage**
> \Swagger\Client\Model\Homepage homepage($homepage_id, $fields)

Get Homepage

### Get information about a homepage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HomepageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$homepage_id = 789; // int | Id of homepage
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->homepage($homepage_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HomepageApi->homepage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **homepage_id** | **int**| Id of homepage |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\Homepage**](../Model/Homepage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **homepageItem**
> \Swagger\Client\Model\HomepageItem homepageItem($homepage_item_id, $fields)

Get Homepage Item

### Get information about a homepage item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HomepageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$homepage_item_id = 789; // int | Id of homepage item
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->homepageItem($homepage_item_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HomepageApi->homepageItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **homepage_item_id** | **int**| Id of homepage item |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\HomepageItem**](../Model/HomepageItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **homepageSection**
> \Swagger\Client\Model\HomepageSection homepageSection($homepage_section_id, $fields)

Get Homepage section

### Get information about a homepage section.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HomepageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$homepage_section_id = 789; // int | Id of homepage section
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->homepageSection($homepage_section_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HomepageApi->homepageSection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **homepage_section_id** | **int**| Id of homepage section |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\HomepageSection**](../Model/HomepageSection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchHomepages**
> \Swagger\Client\Model\Homepage[] searchHomepages($title, $created_at, $first_name, $last_name, $fields, $favorited, $creator_id, $sorts, $page, $per_page, $offset, $limit, $filter_or)

Search Homepages

### Search Homepages  If multiple search params are given and `filter_or` is FALSE or not specified, search params are combined in a logical AND operation. Only rows that match *all* search param criteria will be returned.  If `filter_or` is TRUE, multiple search params are combined in a logical OR operation. Results will include rows that match **any** of the search criteria.  String search params use case-insensitive matching. String search params can contain `%` and '_' as SQL LIKE pattern match wildcard expressions. example=\"dan%\" will match \"danger\" and \"Danzig\" but not \"David\" example=\"D_m%\" will match \"Damage\" and \"dump\"  Integer search params can accept a single value or a comma separated list of values. The multiple values will be combined under a logical OR operation - results will match at least one of the given values.  Most search params can accept \"IS NULL\" and \"NOT NULL\" as special expressions to match or exclude (respectively) rows where the column is null.  Boolean search params accept only \"true\" and \"false\" as values.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HomepageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$title = "title_example"; // string | Matches homepage title.
$created_at = "created_at_example"; // string | Matches the timestamp for when the homepage was created.
$first_name = "first_name_example"; // string | The first name of the user who created this homepage.
$last_name = "last_name_example"; // string | The last name of the user who created this homepage.
$fields = "fields_example"; // string | Requested fields.
$favorited = true; // bool | Return favorited homepages when true.
$creator_id = "creator_id_example"; // string | Filter on homepages created by a particular user.
$sorts = "sorts_example"; // string | The fields to sort the results by
$page = 789; // int | The page to return.
$per_page = 789; // int | The number of items in the returned page.
$offset = 789; // int | The number of items to skip before returning any. (used with limit and takes priority over page and per_page)
$limit = 789; // int | The maximum number of items to return. (used with offset and takes priority over page and per_page)
$filter_or = true; // bool | Combine given search criteria in a boolean OR expression

try {
    $result = $apiInstance->searchHomepages($title, $created_at, $first_name, $last_name, $fields, $favorited, $creator_id, $sorts, $page, $per_page, $offset, $limit, $filter_or);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HomepageApi->searchHomepages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **title** | **string**| Matches homepage title. | [optional]
 **created_at** | **string**| Matches the timestamp for when the homepage was created. | [optional]
 **first_name** | **string**| The first name of the user who created this homepage. | [optional]
 **last_name** | **string**| The last name of the user who created this homepage. | [optional]
 **fields** | **string**| Requested fields. | [optional]
 **favorited** | **bool**| Return favorited homepages when true. | [optional]
 **creator_id** | **string**| Filter on homepages created by a particular user. | [optional]
 **sorts** | **string**| The fields to sort the results by | [optional]
 **page** | **int**| The page to return. | [optional]
 **per_page** | **int**| The number of items in the returned page. | [optional]
 **offset** | **int**| The number of items to skip before returning any. (used with limit and takes priority over page and per_page) | [optional]
 **limit** | **int**| The maximum number of items to return. (used with offset and takes priority over page and per_page) | [optional]
 **filter_or** | **bool**| Combine given search criteria in a boolean OR expression | [optional]

### Return type

[**\Swagger\Client\Model\Homepage[]**](../Model/Homepage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateHomepage**
> \Swagger\Client\Model\Homepage updateHomepage($homepage_id, $body, $fields)

Update Homepage

### Update a homepage definition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HomepageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$homepage_id = 789; // int | Id of homepage
$body = new \Swagger\Client\Model\Homepage(); // \Swagger\Client\Model\Homepage | Homepage
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->updateHomepage($homepage_id, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HomepageApi->updateHomepage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **homepage_id** | **int**| Id of homepage |
 **body** | [**\Swagger\Client\Model\Homepage**](../Model/Homepage.md)| Homepage |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\Homepage**](../Model/Homepage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateHomepageItem**
> \Swagger\Client\Model\HomepageItem updateHomepageItem($homepage_item_id, $body, $fields)

Update Homepage Item

### Update a homepage item definition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HomepageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$homepage_item_id = 789; // int | Id of homepage item
$body = new \Swagger\Client\Model\HomepageItem(); // \Swagger\Client\Model\HomepageItem | Homepage Item
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->updateHomepageItem($homepage_item_id, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HomepageApi->updateHomepageItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **homepage_item_id** | **int**| Id of homepage item |
 **body** | [**\Swagger\Client\Model\HomepageItem**](../Model/HomepageItem.md)| Homepage Item |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\HomepageItem**](../Model/HomepageItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateHomepageSection**
> \Swagger\Client\Model\HomepageSection updateHomepageSection($homepage_section_id, $body, $fields)

Update Homepage section

### Update a homepage section definition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HomepageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$homepage_section_id = 789; // int | Id of homepage section
$body = new \Swagger\Client\Model\HomepageSection(); // \Swagger\Client\Model\HomepageSection | Homepage section
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->updateHomepageSection($homepage_section_id, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HomepageApi->updateHomepageSection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **homepage_section_id** | **int**| Id of homepage section |
 **body** | [**\Swagger\Client\Model\HomepageSection**](../Model/HomepageSection.md)| Homepage section |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\HomepageSection**](../Model/HomepageSection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

