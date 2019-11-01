# Swagger\Client\GroupApi

All URIs are relative to *https://example.looker.com:19999/api/3.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addGroupGroup**](GroupApi.md#addGroupGroup) | **POST** /groups/{group_id}/groups | Add a Group to Group
[**addGroupUser**](GroupApi.md#addGroupUser) | **POST** /groups/{group_id}/users | Add a User to Group
[**allGroupGroups**](GroupApi.md#allGroupGroups) | **GET** /groups/{group_id}/groups | Get All Groups in Group
[**allGroupUsers**](GroupApi.md#allGroupUsers) | **GET** /groups/{group_id}/users | Get All Users in Group
[**allGroups**](GroupApi.md#allGroups) | **GET** /groups | Get All Groups
[**createGroup**](GroupApi.md#createGroup) | **POST** /groups | Create Group
[**deleteGroup**](GroupApi.md#deleteGroup) | **DELETE** /groups/{group_id} | Delete Group
[**deleteGroupFromGroup**](GroupApi.md#deleteGroupFromGroup) | **DELETE** /groups/{group_id}/groups/{deleting_group_id} | Deletes a Group from Group
[**deleteGroupUser**](GroupApi.md#deleteGroupUser) | **DELETE** /groups/{group_id}/users/{user_id} | Remove a User from Group
[**deleteUserAttributeGroupValue**](GroupApi.md#deleteUserAttributeGroupValue) | **DELETE** /groups/{group_id}/attribute_values/{user_attribute_id} | Delete User Attribute Group Value
[**group**](GroupApi.md#group) | **GET** /groups/{group_id} | Get Group
[**updateGroup**](GroupApi.md#updateGroup) | **PATCH** /groups/{group_id} | Update Group
[**updateUserAttributeGroupValue**](GroupApi.md#updateUserAttributeGroupValue) | **PATCH** /groups/{group_id}/attribute_values/{user_attribute_id} | Set User Attribute Group Value


# **addGroupGroup**
> \Swagger\Client\Model\Group addGroupGroup($group_id, $body)

Add a Group to Group

### Adds a new group to a group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 789; // int | Id of group
$body = new \Swagger\Client\Model\GroupIdForGroupInclusion(); // \Swagger\Client\Model\GroupIdForGroupInclusion | Group id to add

try {
    $result = $apiInstance->addGroupGroup($group_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->addGroupGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| Id of group |
 **body** | [**\Swagger\Client\Model\GroupIdForGroupInclusion**](../Model/GroupIdForGroupInclusion.md)| Group id to add | [optional]

### Return type

[**\Swagger\Client\Model\Group**](../Model/Group.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addGroupUser**
> \Swagger\Client\Model\User addGroupUser($group_id, $body)

Add a User to Group

### Adds a new user to a group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 789; // int | Id of group
$body = new \Swagger\Client\Model\GroupIdForGroupUserInclusion(); // \Swagger\Client\Model\GroupIdForGroupUserInclusion | User id to add

try {
    $result = $apiInstance->addGroupUser($group_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->addGroupUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| Id of group |
 **body** | [**\Swagger\Client\Model\GroupIdForGroupUserInclusion**](../Model/GroupIdForGroupUserInclusion.md)| User id to add | [optional]

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allGroupGroups**
> \Swagger\Client\Model\Group[] allGroupGroups($group_id, $fields)

Get All Groups in Group

### Get information about all the groups in a group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 789; // int | Id of group
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->allGroupGroups($group_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->allGroupGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| Id of group |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\Group[]**](../Model/Group.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allGroupUsers**
> \Swagger\Client\Model\User[] allGroupUsers($group_id, $fields, $page, $per_page, $sorts)

Get All Users in Group

### Get information about all the users directly included in a group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 789; // int | Id of group
$fields = "fields_example"; // string | Requested fields.
$page = 789; // int | Requested page.
$per_page = 789; // int | Results per page.
$sorts = "sorts_example"; // string | Fields to sort by.

try {
    $result = $apiInstance->allGroupUsers($group_id, $fields, $page, $per_page, $sorts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->allGroupUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| Id of group |
 **fields** | **string**| Requested fields. | [optional]
 **page** | **int**| Requested page. | [optional]
 **per_page** | **int**| Results per page. | [optional]
 **sorts** | **string**| Fields to sort by. | [optional]

### Return type

[**\Swagger\Client\Model\User[]**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allGroups**
> \Swagger\Client\Model\Group[] allGroups($fields, $page, $per_page, $sorts, $ids, $content_metadata_id, $can_add_to_content_metadata)

Get All Groups

### Get information about all groups.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | Requested fields.
$page = 789; // int | Requested page.
$per_page = 789; // int | Results per page.
$sorts = "sorts_example"; // string | Fields to sort by.
$ids = array(56); // int[] | Optional of ids to get specific groups.
$content_metadata_id = 789; // int | Id of content metadata to which groups must have access.
$can_add_to_content_metadata = true; // bool | Select only groups that either can/cannot be given access to content.

try {
    $result = $apiInstance->allGroups($fields, $page, $per_page, $sorts, $ids, $content_metadata_id, $can_add_to_content_metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->allGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Requested fields. | [optional]
 **page** | **int**| Requested page. | [optional]
 **per_page** | **int**| Results per page. | [optional]
 **sorts** | **string**| Fields to sort by. | [optional]
 **ids** | [**int[]**](../Model/int.md)| Optional of ids to get specific groups. | [optional]
 **content_metadata_id** | **int**| Id of content metadata to which groups must have access. | [optional]
 **can_add_to_content_metadata** | **bool**| Select only groups that either can/cannot be given access to content. | [optional]

### Return type

[**\Swagger\Client\Model\Group[]**](../Model/Group.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createGroup**
> \Swagger\Client\Model\Group createGroup($body, $fields)

Create Group

### Creates a new group (admin only).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Group(); // \Swagger\Client\Model\Group | Group
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->createGroup($body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->createGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Group**](../Model/Group.md)| Group | [optional]
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\Group**](../Model/Group.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGroup**
> string deleteGroup($group_id)

Delete Group

### Deletes a group (admin only).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 789; // int | Id of group

try {
    $result = $apiInstance->deleteGroup($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| Id of group |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGroupFromGroup**
> deleteGroupFromGroup($group_id, $deleting_group_id)

Deletes a Group from Group

### Removes a group from a group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 789; // int | Id of group
$deleting_group_id = 789; // int | Id of group to delete

try {
    $apiInstance->deleteGroupFromGroup($group_id, $deleting_group_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteGroupFromGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| Id of group |
 **deleting_group_id** | **int**| Id of group to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGroupUser**
> deleteGroupUser($group_id, $user_id)

Remove a User from Group

### Removes a user from a group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 789; // int | Id of group
$user_id = 789; // int | Id of user to remove from group

try {
    $apiInstance->deleteGroupUser($group_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteGroupUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| Id of group |
 **user_id** | **int**| Id of user to remove from group |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUserAttributeGroupValue**
> deleteUserAttributeGroupValue($group_id, $user_attribute_id)

Delete User Attribute Group Value

### Remove a user attribute value from a group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 789; // int | Id of group
$user_attribute_id = 789; // int | Id of user attribute

try {
    $apiInstance->deleteUserAttributeGroupValue($group_id, $user_attribute_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteUserAttributeGroupValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| Id of group |
 **user_attribute_id** | **int**| Id of user attribute |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **group**
> \Swagger\Client\Model\Group group($group_id, $fields)

Get Group

### Get information about a group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 789; // int | Id of group
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->group($group_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->group: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| Id of group |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\Group**](../Model/Group.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGroup**
> \Swagger\Client\Model\Group updateGroup($group_id, $body, $fields)

Update Group

### Updates the a group (admin only).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 789; // int | Id of group
$body = new \Swagger\Client\Model\Group(); // \Swagger\Client\Model\Group | Group
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->updateGroup($group_id, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->updateGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| Id of group |
 **body** | [**\Swagger\Client\Model\Group**](../Model/Group.md)| Group |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\Group**](../Model/Group.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUserAttributeGroupValue**
> \Swagger\Client\Model\UserAttributeGroupValue updateUserAttributeGroupValue($group_id, $user_attribute_id, $body)

Set User Attribute Group Value

### Set the value of a user attribute for a group.  For information about how user attribute values are calculated, see [Set User Attribute Group Values](#!/UserAttribute/set_user_attribute_group_values).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 789; // int | Id of group
$user_attribute_id = 789; // int | Id of user attribute
$body = new \Swagger\Client\Model\UserAttributeGroupValue(); // \Swagger\Client\Model\UserAttributeGroupValue | New value for group.

try {
    $result = $apiInstance->updateUserAttributeGroupValue($group_id, $user_attribute_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->updateUserAttributeGroupValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| Id of group |
 **user_attribute_id** | **int**| Id of user attribute |
 **body** | [**\Swagger\Client\Model\UserAttributeGroupValue**](../Model/UserAttributeGroupValue.md)| New value for group. |

### Return type

[**\Swagger\Client\Model\UserAttributeGroupValue**](../Model/UserAttributeGroupValue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

