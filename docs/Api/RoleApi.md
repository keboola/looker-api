# Swagger\Client\RoleApi

All URIs are relative to *https://keboolads.looker.com:19999/api/3.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**allModelSets**](RoleApi.md#allModelSets) | **GET** /model_sets | Get All Model Sets
[**allPermissionSets**](RoleApi.md#allPermissionSets) | **GET** /permission_sets | Get All Permission Sets
[**allPermissions**](RoleApi.md#allPermissions) | **GET** /permissions | Get All Permissions
[**allRoles**](RoleApi.md#allRoles) | **GET** /roles | Get All Roles
[**createModelSet**](RoleApi.md#createModelSet) | **POST** /model_sets | Create Model Set
[**createPermissionSet**](RoleApi.md#createPermissionSet) | **POST** /permission_sets | Create Permission Set
[**createRole**](RoleApi.md#createRole) | **POST** /roles | Create Role
[**deleteModelSet**](RoleApi.md#deleteModelSet) | **DELETE** /model_sets/{model_set_id} | Delete Model Set
[**deletePermissionSet**](RoleApi.md#deletePermissionSet) | **DELETE** /permission_sets/{permission_set_id} | Delete Permission Set
[**deleteRole**](RoleApi.md#deleteRole) | **DELETE** /roles/{role_id} | Delete Role
[**modelSet**](RoleApi.md#modelSet) | **GET** /model_sets/{model_set_id} | Get Model Set
[**permissionSet**](RoleApi.md#permissionSet) | **GET** /permission_sets/{permission_set_id} | Get Permission Set
[**role**](RoleApi.md#role) | **GET** /roles/{role_id} | Get Role
[**roleGroups**](RoleApi.md#roleGroups) | **GET** /roles/{role_id}/groups | Get Role Groups
[**roleUsers**](RoleApi.md#roleUsers) | **GET** /roles/{role_id}/users | Get Role Users
[**setRoleGroups**](RoleApi.md#setRoleGroups) | **PUT** /roles/{role_id}/groups | Update Role Groups
[**setRoleUsers**](RoleApi.md#setRoleUsers) | **PUT** /roles/{role_id}/users | Update Role Users
[**updateModelSet**](RoleApi.md#updateModelSet) | **PATCH** /model_sets/{model_set_id} | Update Model Set
[**updatePermissionSet**](RoleApi.md#updatePermissionSet) | **PATCH** /permission_sets/{permission_set_id} | Update Permission Set
[**updateRole**](RoleApi.md#updateRole) | **PATCH** /roles/{role_id} | Update Role


# **allModelSets**
> \Swagger\Client\Model\ModelSet[] allModelSets($fields)

Get All Model Sets

### Get information about all model sets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->allModelSets($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->allModelSets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\ModelSet[]**](../Model/ModelSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allPermissionSets**
> \Swagger\Client\Model\PermissionSet[] allPermissionSets($fields)

Get All Permission Sets

### Get information about all permission sets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->allPermissionSets($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->allPermissionSets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\PermissionSet[]**](../Model/PermissionSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allPermissions**
> \Swagger\Client\Model\Permission[] allPermissions()

Get All Permissions

### Get all supported permissions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->allPermissions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->allPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Permission[]**](../Model/Permission.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allRoles**
> \Swagger\Client\Model\Role[] allRoles($fields, $ids)

Get All Roles

### Get information about all roles.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | Requested fields.
$ids = array(56); // int[] | Optional list of ids to get specific roles.

try {
    $result = $apiInstance->allRoles($fields, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->allRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Requested fields. | [optional]
 **ids** | [**int[]**](../Model/int.md)| Optional list of ids to get specific roles. | [optional]

### Return type

[**\Swagger\Client\Model\Role[]**](../Model/Role.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createModelSet**
> \Swagger\Client\Model\ModelSet createModelSet($body)

Create Model Set

### Create a model set with the specified information. Model sets are used by Roles.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ModelSet(); // \Swagger\Client\Model\ModelSet | ModelSet

try {
    $result = $apiInstance->createModelSet($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->createModelSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ModelSet**](../Model/ModelSet.md)| ModelSet | [optional]

### Return type

[**\Swagger\Client\Model\ModelSet**](../Model/ModelSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPermissionSet**
> \Swagger\Client\Model\PermissionSet createPermissionSet($body)

Create Permission Set

### Create a permission set with the specified information. Permission sets are used by Roles.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PermissionSet(); // \Swagger\Client\Model\PermissionSet | Permission Set

try {
    $result = $apiInstance->createPermissionSet($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->createPermissionSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PermissionSet**](../Model/PermissionSet.md)| Permission Set | [optional]

### Return type

[**\Swagger\Client\Model\PermissionSet**](../Model/PermissionSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRole**
> \Swagger\Client\Model\Role createRole($body)

Create Role

### Create a role with the specified information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Role(); // \Swagger\Client\Model\Role | Role

try {
    $result = $apiInstance->createRole($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->createRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Role**](../Model/Role.md)| Role | [optional]

### Return type

[**\Swagger\Client\Model\Role**](../Model/Role.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteModelSet**
> string deleteModelSet($model_set_id)

Delete Model Set

### Delete the model set with a specific id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model_set_id = 789; // int | id of model set

try {
    $result = $apiInstance->deleteModelSet($model_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->deleteModelSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model_set_id** | **int**| id of model set |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePermissionSet**
> string deletePermissionSet($permission_set_id)

Delete Permission Set

### Delete the permission set with a specific id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$permission_set_id = 789; // int | Id of permission set

try {
    $result = $apiInstance->deletePermissionSet($permission_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->deletePermissionSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **permission_set_id** | **int**| Id of permission set |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRole**
> string deleteRole($role_id)

Delete Role

### Delete the role with a specific id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$role_id = 789; // int | id of role

try {
    $result = $apiInstance->deleteRole($role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->deleteRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **int**| id of role |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modelSet**
> \Swagger\Client\Model\ModelSet modelSet($model_set_id, $fields)

Get Model Set

### Get information about the model set with a specific id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model_set_id = 789; // int | Id of model set
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->modelSet($model_set_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->modelSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model_set_id** | **int**| Id of model set |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\ModelSet**](../Model/ModelSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **permissionSet**
> \Swagger\Client\Model\PermissionSet permissionSet($permission_set_id, $fields)

Get Permission Set

### Get information about the permission set with a specific id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$permission_set_id = 789; // int | Id of permission set
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->permissionSet($permission_set_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->permissionSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **permission_set_id** | **int**| Id of permission set |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\PermissionSet**](../Model/PermissionSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **role**
> \Swagger\Client\Model\Role role($role_id)

Get Role

### Get information about the role with a specific id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$role_id = 789; // int | id of role

try {
    $result = $apiInstance->role($role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->role: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **int**| id of role |

### Return type

[**\Swagger\Client\Model\Role**](../Model/Role.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleGroups**
> \Swagger\Client\Model\Group[] roleGroups($role_id, $fields)

Get Role Groups

### Get information about all the groups with the role that has a specific id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$role_id = 789; // int | id of role
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->roleGroups($role_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **int**| id of role |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\Group[]**](../Model/Group.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleUsers**
> \Swagger\Client\Model\User[] roleUsers($role_id, $fields, $direct_association_only)

Get Role Users

### Get information about all the users with the role that has a specific id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$role_id = 789; // int | id of user
$fields = "fields_example"; // string | Requested fields.
$direct_association_only = true; // bool | Get only users associated directly with the role: exclude those only associated through groups.

try {
    $result = $apiInstance->roleUsers($role_id, $fields, $direct_association_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **int**| id of user |
 **fields** | **string**| Requested fields. | [optional]
 **direct_association_only** | **bool**| Get only users associated directly with the role: exclude those only associated through groups. | [optional]

### Return type

[**\Swagger\Client\Model\User[]**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setRoleGroups**
> \Swagger\Client\Model\Group[] setRoleGroups($role_id, $body)

Update Role Groups

### Set all groups for a role, removing all existing group associations from that role.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$role_id = 789; // int | Id of Role
$body = array(new \Swagger\Client\Model\int[]()); // int[] | Array of Group Ids

try {
    $result = $apiInstance->setRoleGroups($role_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->setRoleGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **int**| Id of Role |
 **body** | **int[]**| Array of Group Ids |

### Return type

[**\Swagger\Client\Model\Group[]**](../Model/Group.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setRoleUsers**
> \Swagger\Client\Model\User[] setRoleUsers($role_id, $body)

Update Role Users

### Set all the users of the role with a specific id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$role_id = 789; // int | id of role
$body = array(new \Swagger\Client\Model\int[]()); // int[] | array of user ids for role

try {
    $result = $apiInstance->setRoleUsers($role_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->setRoleUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **int**| id of role |
 **body** | **int[]**| array of user ids for role |

### Return type

[**\Swagger\Client\Model\User[]**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateModelSet**
> \Swagger\Client\Model\ModelSet updateModelSet($model_set_id, $body)

Update Model Set

### Update information about the model set with a specific id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model_set_id = 789; // int | id of model set
$body = new \Swagger\Client\Model\ModelSet(); // \Swagger\Client\Model\ModelSet | ModelSet

try {
    $result = $apiInstance->updateModelSet($model_set_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->updateModelSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model_set_id** | **int**| id of model set |
 **body** | [**\Swagger\Client\Model\ModelSet**](../Model/ModelSet.md)| ModelSet |

### Return type

[**\Swagger\Client\Model\ModelSet**](../Model/ModelSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePermissionSet**
> \Swagger\Client\Model\PermissionSet updatePermissionSet($permission_set_id, $body)

Update Permission Set

### Update information about the permission set with a specific id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$permission_set_id = 789; // int | id of permission set
$body = new \Swagger\Client\Model\PermissionSet(); // \Swagger\Client\Model\PermissionSet | Permission Set

try {
    $result = $apiInstance->updatePermissionSet($permission_set_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->updatePermissionSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **permission_set_id** | **int**| id of permission set |
 **body** | [**\Swagger\Client\Model\PermissionSet**](../Model/PermissionSet.md)| Permission Set |

### Return type

[**\Swagger\Client\Model\PermissionSet**](../Model/PermissionSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRole**
> \Swagger\Client\Model\Role updateRole($role_id, $body)

Update Role

### Update information about the role with a specific id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$role_id = 789; // int | id of role
$body = new \Swagger\Client\Model\Role(); // \Swagger\Client\Model\Role | Role

try {
    $result = $apiInstance->updateRole($role_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->updateRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **int**| id of role |
 **body** | [**\Swagger\Client\Model\Role**](../Model/Role.md)| Role |

### Return type

[**\Swagger\Client\Model\Role**](../Model/Role.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

