# Swagger\Client\FolderApi

All URIs are relative to *https://keboolads.looker.com:19999/api/3.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**allFolders**](FolderApi.md#allFolders) | **GET** /folders | Get All Folders
[**createFolder**](FolderApi.md#createFolder) | **POST** /folders | Create Folder
[**deleteFolder**](FolderApi.md#deleteFolder) | **DELETE** /folders/{folder_id} | Delete Folder
[**folder**](FolderApi.md#folder) | **GET** /folders/{folder_id} | Get Folder
[**folderAncestors**](FolderApi.md#folderAncestors) | **GET** /folders/{folder_id}/ancestors | Get Folder Ancestors
[**folderChildren**](FolderApi.md#folderChildren) | **GET** /folders/{folder_id}/children | Get Folder Children
[**folderChildrenSearch**](FolderApi.md#folderChildrenSearch) | **GET** /folders/{folder_id}/children/search | Search Folder Children
[**folderDashboards**](FolderApi.md#folderDashboards) | **GET** /folders/{folder_id}/dashboards | Get Folder Dashboards
[**folderLooks**](FolderApi.md#folderLooks) | **GET** /folders/{folder_id}/looks | Get Folder Looks
[**folderParent**](FolderApi.md#folderParent) | **GET** /folders/{folder_id}/parent | Get Folder Parent
[**searchFolders**](FolderApi.md#searchFolders) | **GET** /folders/search | Search Folders
[**updateFolder**](FolderApi.md#updateFolder) | **PATCH** /folders/{folder_id} | Update Folder


# **allFolders**
> \Swagger\Client\Model\Folder[] allFolders($fields)

Get All Folders

### Get information about all folders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->allFolders($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->allFolders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\Folder[]**](../Model/Folder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createFolder**
> \Swagger\Client\Model\Folder createFolder($body)

Create Folder

### Create a folder with specified information.  Caller must have permission to edit the parent folder and to create folders, otherwise the request returns 404 Not Found.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Folder(); // \Swagger\Client\Model\Folder | Folder

try {
    $result = $apiInstance->createFolder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->createFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Folder**](../Model/Folder.md)| Folder | [optional]

### Return type

[**\Swagger\Client\Model\Folder**](../Model/Folder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFolder**
> string deleteFolder($folder_id)

Delete Folder

### Delete the folder with a specific id including any children folders. **DANGER** this will delete all looks and dashboards in the folder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folder_id = "folder_id_example"; // string | Id of folder

try {
    $result = $apiInstance->deleteFolder($folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->deleteFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder_id** | **string**| Id of folder |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **folder**
> \Swagger\Client\Model\Folder folder($folder_id, $fields)

Get Folder

### Get information about the folder with a specific id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folder_id = "folder_id_example"; // string | Id of folder
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->folder($folder_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->folder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder_id** | **string**| Id of folder |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\Folder**](../Model/Folder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **folderAncestors**
> \Swagger\Client\Model\Folder[] folderAncestors($folder_id, $fields)

Get Folder Ancestors

### Get the ancestors of a folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folder_id = "folder_id_example"; // string | Id of folder
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->folderAncestors($folder_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->folderAncestors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder_id** | **string**| Id of folder |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\Folder[]**](../Model/Folder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **folderChildren**
> \Swagger\Client\Model\Space[] folderChildren($folder_id, $fields, $page, $per_page, $sorts)

Get Folder Children

### Get the children of a folder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folder_id = "folder_id_example"; // string | Id of folder
$fields = "fields_example"; // string | Requested fields.
$page = 789; // int | Requested page.
$per_page = 789; // int | Results per page.
$sorts = "sorts_example"; // string | Fields to sort by.

try {
    $result = $apiInstance->folderChildren($folder_id, $fields, $page, $per_page, $sorts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->folderChildren: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder_id** | **string**| Id of folder |
 **fields** | **string**| Requested fields. | [optional]
 **page** | **int**| Requested page. | [optional]
 **per_page** | **int**| Results per page. | [optional]
 **sorts** | **string**| Fields to sort by. | [optional]

### Return type

[**\Swagger\Client\Model\Space[]**](../Model/Space.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **folderChildrenSearch**
> \Swagger\Client\Model\Folder[] folderChildrenSearch($folder_id, $fields, $sorts, $name)

Search Folder Children

### Search the children of a folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folder_id = "folder_id_example"; // string | Id of folder
$fields = "fields_example"; // string | Requested fields.
$sorts = "sorts_example"; // string | Fields to sort by.
$name = "name_example"; // string | Match folder name.

try {
    $result = $apiInstance->folderChildrenSearch($folder_id, $fields, $sorts, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->folderChildrenSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder_id** | **string**| Id of folder |
 **fields** | **string**| Requested fields. | [optional]
 **sorts** | **string**| Fields to sort by. | [optional]
 **name** | **string**| Match folder name. | [optional]

### Return type

[**\Swagger\Client\Model\Folder[]**](../Model/Folder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **folderDashboards**
> \Swagger\Client\Model\Dashboard[] folderDashboards($folder_id, $fields)

Get Folder Dashboards

### Get the dashboards in a folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folder_id = "folder_id_example"; // string | Id of folder
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->folderDashboards($folder_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->folderDashboards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder_id** | **string**| Id of folder |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\Dashboard[]**](../Model/Dashboard.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **folderLooks**
> \Swagger\Client\Model\LookWithQuery[] folderLooks($folder_id, $fields)

Get Folder Looks

### Get the looks in a folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folder_id = "folder_id_example"; // string | Id of folder
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->folderLooks($folder_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->folderLooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder_id** | **string**| Id of folder |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\LookWithQuery[]**](../Model/LookWithQuery.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **folderParent**
> \Swagger\Client\Model\Folder folderParent($folder_id, $fields)

Get Folder Parent

### Get the parent of a folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folder_id = "folder_id_example"; // string | Id of folder
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->folderParent($folder_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->folderParent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder_id** | **string**| Id of folder |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\Folder**](../Model/Folder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchFolders**
> \Swagger\Client\Model\Folder[] searchFolders($fields, $page, $per_page, $limit, $offset, $sorts, $name, $id, $parent_id, $creator_id, $filter_or)

Search Folders

Search for folders by creator id, parent id, name, etc

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | Requested fields.
$page = 789; // int | Requested page.
$per_page = 789; // int | Results per page.
$limit = 789; // int | Number of results to return. (used with offset and takes priority over page and per_page)
$offset = 789; // int | Number of results to skip before returning any. (used with limit and takes priority over page and per_page)
$sorts = "sorts_example"; // string | Fields to sort by.
$name = "name_example"; // string | Match Space title.
$id = 789; // int | Match Space id
$parent_id = "parent_id_example"; // string | Filter on a children of a particular folder.
$creator_id = "creator_id_example"; // string | Filter on folder created by a particular user.
$filter_or = true; // bool | Combine given search criteria in a boolean OR expression

try {
    $result = $apiInstance->searchFolders($fields, $page, $per_page, $limit, $offset, $sorts, $name, $id, $parent_id, $creator_id, $filter_or);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->searchFolders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Requested fields. | [optional]
 **page** | **int**| Requested page. | [optional]
 **per_page** | **int**| Results per page. | [optional]
 **limit** | **int**| Number of results to return. (used with offset and takes priority over page and per_page) | [optional]
 **offset** | **int**| Number of results to skip before returning any. (used with limit and takes priority over page and per_page) | [optional]
 **sorts** | **string**| Fields to sort by. | [optional]
 **name** | **string**| Match Space title. | [optional]
 **id** | **int**| Match Space id | [optional]
 **parent_id** | **string**| Filter on a children of a particular folder. | [optional]
 **creator_id** | **string**| Filter on folder created by a particular user. | [optional]
 **filter_or** | **bool**| Combine given search criteria in a boolean OR expression | [optional]

### Return type

[**\Swagger\Client\Model\Folder[]**](../Model/Folder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFolder**
> \Swagger\Client\Model\Folder updateFolder($folder_id, $body)

Update Folder

### Update the folder with a specific id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folder_id = "folder_id_example"; // string | Id of folder
$body = new \Swagger\Client\Model\Folder(); // \Swagger\Client\Model\Folder | Folder

try {
    $result = $apiInstance->updateFolder($folder_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->updateFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder_id** | **string**| Id of folder |
 **body** | [**\Swagger\Client\Model\Folder**](../Model/Folder.md)| Folder |

### Return type

[**\Swagger\Client\Model\Folder**](../Model/Folder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

