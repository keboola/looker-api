# Swagger\Client\ProjectApi

All URIs are relative to *https://keboolads.looker.com:19999/api/3.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**allGitBranches**](ProjectApi.md#allGitBranches) | **GET** /projects/{project_id}/git_branches | Get All Git Branches
[**allGitConnectionTests**](ProjectApi.md#allGitConnectionTests) | **GET** /projects/{project_id}/git_connection_tests | Get All Git Connection Tests
[**allLookmlTests**](ProjectApi.md#allLookmlTests) | **GET** /projects/{project_id}/lookml_tests | Get All LookML Tests
[**allProjectFiles**](ProjectApi.md#allProjectFiles) | **GET** /projects/{project_id}/files | Get All Project Files
[**allProjects**](ProjectApi.md#allProjects) | **GET** /projects | Get All Projects
[**createGitBranch**](ProjectApi.md#createGitBranch) | **POST** /projects/{project_id}/git_branch | Checkout New Git Branch
[**createGitDeployKey**](ProjectApi.md#createGitDeployKey) | **POST** /projects/{project_id}/git/deploy_key | Create Deploy Key
[**createProject**](ProjectApi.md#createProject) | **POST** /projects | Create Project
[**deleteGitBranch**](ProjectApi.md#deleteGitBranch) | **DELETE** /projects/{project_id}/git_branch/{branch_name} | Delete a Git Branch
[**deleteRepositoryCredential**](ProjectApi.md#deleteRepositoryCredential) | **DELETE** /projects/{root_project_id}/credential/{credential_id} | Delete Repository Credential
[**deployToProduction**](ProjectApi.md#deployToProduction) | **POST** /projects/{project_id}/deploy_to_production | Deploy To Production
[**findGitBranch**](ProjectApi.md#findGitBranch) | **GET** /projects/{project_id}/git_branch/{branch_name} | Find a Git Branch
[**getAllRepositoryCredentials**](ProjectApi.md#getAllRepositoryCredentials) | **GET** /projects/{root_project_id}/credentials | Get All Repository Credentials
[**gitBranch**](ProjectApi.md#gitBranch) | **GET** /projects/{project_id}/git_branch | Get Active Git Branch
[**gitDeployKey**](ProjectApi.md#gitDeployKey) | **GET** /projects/{project_id}/git/deploy_key | Git Deploy Key
[**manifest**](ProjectApi.md#manifest) | **GET** /projects/{project_id}/manifest | Get Manifest
[**project**](ProjectApi.md#project) | **GET** /projects/{project_id} | Get Project
[**projectFile**](ProjectApi.md#projectFile) | **GET** /projects/{project_id}/files/file | Get Project File
[**projectValidationResults**](ProjectApi.md#projectValidationResults) | **GET** /projects/{project_id}/validate | Cached Project Validation Results
[**projectWorkspace**](ProjectApi.md#projectWorkspace) | **GET** /projects/{project_id}/current_workspace | Get Project Workspace
[**resetProjectToProduction**](ProjectApi.md#resetProjectToProduction) | **POST** /projects/{project_id}/reset_to_production | Reset To Production
[**resetProjectToRemote**](ProjectApi.md#resetProjectToRemote) | **POST** /projects/{project_id}/reset_to_remote | Reset To Remote
[**runGitConnectionTest**](ProjectApi.md#runGitConnectionTest) | **GET** /projects/{project_id}/git_connection_tests/{test_id} | Run Git Connection Test
[**runLookmlTest**](ProjectApi.md#runLookmlTest) | **GET** /projects/{project_id}/lookml_tests/run | Run LookML Test
[**updateGitBranch**](ProjectApi.md#updateGitBranch) | **PUT** /projects/{project_id}/git_branch | Update Project Git Branch
[**updateProject**](ProjectApi.md#updateProject) | **PATCH** /projects/{project_id} | Update Project
[**updateRepositoryCredential**](ProjectApi.md#updateRepositoryCredential) | **PUT** /projects/{root_project_id}/credential/{credential_id} | Create Repository Credential
[**validateProject**](ProjectApi.md#validateProject) | **POST** /projects/{project_id}/validate | Validate Project


# **allGitBranches**
> \Swagger\Client\Model\GitBranch[] allGitBranches($project_id)

Get All Git Branches

### Get All Git Branches  Returns a list of git branches in the project repository

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | Project Id

try {
    $result = $apiInstance->allGitBranches($project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->allGitBranches: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project Id |

### Return type

[**\Swagger\Client\Model\GitBranch[]**](../Model/GitBranch.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allGitConnectionTests**
> \Swagger\Client\Model\GitConnectionTest[] allGitConnectionTests($project_id, $remote_url)

Get All Git Connection Tests

### Get All Git Connection Tests  Returns a list of tests which can be run against a project's (or the dependency project for the provided remote_url) git connection. Call [Run Git Connection Test](#!/Project/run_git_connection_test) to execute each test in sequence.  Tests are ordered by increasing specificity. Tests should be run in the order returned because later tests require functionality tested by tests earlier in the test list.  For example, a late-stage test for write access is meaningless if connecting to the git server (an early test) is failing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | Project Id
$remote_url = "remote_url_example"; // string | (Optional: leave blank for root project) The remote url for remote dependency to test.

try {
    $result = $apiInstance->allGitConnectionTests($project_id, $remote_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->allGitConnectionTests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project Id |
 **remote_url** | **string**| (Optional: leave blank for root project) The remote url for remote dependency to test. | [optional]

### Return type

[**\Swagger\Client\Model\GitConnectionTest[]**](../Model/GitConnectionTest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allLookmlTests**
> \Swagger\Client\Model\LookmlTest[] allLookmlTests($project_id, $file_id)

Get All LookML Tests

### Get All LookML Tests  Returns a list of tests which can be run to validate a project's LookML code and/or the underlying data, optionally filtered by the file id. Call [Run LookML Test](#!/Project/run_lookml_test) to execute tests.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | Project Id
$file_id = "file_id_example"; // string | File Id

try {
    $result = $apiInstance->allLookmlTests($project_id, $file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->allLookmlTests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project Id |
 **file_id** | **string**| File Id | [optional]

### Return type

[**\Swagger\Client\Model\LookmlTest[]**](../Model/LookmlTest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allProjectFiles**
> \Swagger\Client\Model\ProjectFile[] allProjectFiles($project_id, $fields)

Get All Project Files

### Get All Project Files  Returns a list of the files in the project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | Project Id
$fields = "fields_example"; // string | Requested fields

try {
    $result = $apiInstance->allProjectFiles($project_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->allProjectFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project Id |
 **fields** | **string**| Requested fields | [optional]

### Return type

[**\Swagger\Client\Model\ProjectFile[]**](../Model/ProjectFile.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allProjects**
> \Swagger\Client\Model\Project[] allProjects($fields)

Get All Projects

### Get All Projects  Returns all projects visible to the current user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | Requested fields

try {
    $result = $apiInstance->allProjects($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->allProjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Requested fields | [optional]

### Return type

[**\Swagger\Client\Model\Project[]**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createGitBranch**
> \Swagger\Client\Model\GitBranch createGitBranch($project_id, $body)

Checkout New Git Branch

### Create and Checkout a Git Branch  Creates and checks out a new branch in the given project repository Only allowed in development mode   - Call `update_session` to select the 'dev' workspace.  Optionally specify a branch name, tag name or commit SHA as the start point in the ref field.   If no ref is specified, HEAD of the current branch will be used as the start point for the new branch.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | Project Id
$body = new \Swagger\Client\Model\GitBranch(); // \Swagger\Client\Model\GitBranch | Git Branch

try {
    $result = $apiInstance->createGitBranch($project_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->createGitBranch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project Id |
 **body** | [**\Swagger\Client\Model\GitBranch**](../Model/GitBranch.md)| Git Branch | [optional]

### Return type

[**\Swagger\Client\Model\GitBranch**](../Model/GitBranch.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createGitDeployKey**
> string createGitDeployKey($project_id)

Create Deploy Key

### Create Git Deploy Key  Create a public/private key pair for authenticating ssh git requests from Looker to a remote git repository for a particular Looker project.  Returns the public key of the generated ssh key pair.  Copy this public key to your remote git repository's ssh keys configuration so that the remote git service can validate and accept git requests from the Looker server.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | Project Id

try {
    $result = $apiInstance->createGitDeployKey($project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->createGitDeployKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project Id |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProject**
> \Swagger\Client\Model\Project createProject($body)

Create Project

### Create A Project  dev mode required. - Call `update_session` to select the 'dev' workspace.  `name` is required. `git_remote_url` is not allowed. To configure Git for the newly created project, follow the instructions in `update_project`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Project(); // \Swagger\Client\Model\Project | Project

try {
    $result = $apiInstance->createProject($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->createProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Project**](../Model/Project.md)| Project | [optional]

### Return type

[**\Swagger\Client\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGitBranch**
> string deleteGitBranch($project_id, $branch_name)

Delete a Git Branch

### Delete the specified Git Branch  Delete git branch specified in branch_name path param from local and remote of specified project repository

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | Project Id
$branch_name = "branch_name_example"; // string | Branch Name

try {
    $result = $apiInstance->deleteGitBranch($project_id, $branch_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->deleteGitBranch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project Id |
 **branch_name** | **string**| Branch Name |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRepositoryCredential**
> string deleteRepositoryCredential($root_project_id, $credential_id)

Delete Repository Credential

### Repository Credential for a remote dependency  Admin required.  `root_project_id` is required. `credential_id` is required.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$root_project_id = "root_project_id_example"; // string | Root Project Id
$credential_id = "credential_id_example"; // string | Credential Id

try {
    $result = $apiInstance->deleteRepositoryCredential($root_project_id, $credential_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->deleteRepositoryCredential: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **root_project_id** | **string**| Root Project Id |
 **credential_id** | **string**| Credential Id |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deployToProduction**
> string deployToProduction($project_id)

Deploy To Production

### Deploy LookML from this Development Mode Project to Production  Git must have been configured, must be in dev mode and deploy permission required  Deploy is a two / three step process 1. Push commits in current branch of dev mode project to the production branch (origin/master).    Note a. This step is skipped in read-only projects.    Note b. If this step is unsuccessful for any reason (e.g. rejected non-fastforward because production branch has              commits not in current branch), subsequent steps will be skipped. 2. If this is the first deploy of this project, create the production project with git repository. 3. Pull the production branch into the production project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | Id of project

try {
    $result = $apiInstance->deployToProduction($project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->deployToProduction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Id of project |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findGitBranch**
> \Swagger\Client\Model\GitBranch findGitBranch($project_id, $branch_name)

Find a Git Branch

### Get the specified Git Branch  Returns the git branch specified in branch_name path param if it exists in the given project repository

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | Project Id
$branch_name = "branch_name_example"; // string | Branch Name

try {
    $result = $apiInstance->findGitBranch($project_id, $branch_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->findGitBranch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project Id |
 **branch_name** | **string**| Branch Name |

### Return type

[**\Swagger\Client\Model\GitBranch**](../Model/GitBranch.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllRepositoryCredentials**
> \Swagger\Client\Model\RepositoryCredential[] getAllRepositoryCredentials($root_project_id)

Get All Repository Credentials

### Get all Repository Credentials for a project  `root_project_id` is required.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$root_project_id = "root_project_id_example"; // string | Root Project Id

try {
    $result = $apiInstance->getAllRepositoryCredentials($root_project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getAllRepositoryCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **root_project_id** | **string**| Root Project Id |

### Return type

[**\Swagger\Client\Model\RepositoryCredential[]**](../Model/RepositoryCredential.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gitBranch**
> \Swagger\Client\Model\GitBranch gitBranch($project_id)

Get Active Git Branch

### Get the Current Git Branch  Returns the git branch currently checked out in the given project repository

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | Project Id

try {
    $result = $apiInstance->gitBranch($project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->gitBranch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project Id |

### Return type

[**\Swagger\Client\Model\GitBranch**](../Model/GitBranch.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gitDeployKey**
> string gitDeployKey($project_id)

Git Deploy Key

### Git Deploy Key  Returns the ssh public key previously created for a project's git repository.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | Project Id

try {
    $result = $apiInstance->gitDeployKey($project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->gitDeployKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project Id |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **manifest**
> \Swagger\Client\Model\Manifest manifest($project_id)

Get Manifest

### Get A Projects Manifest object  Returns the project with the given project id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | Project Id

try {
    $result = $apiInstance->manifest($project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->manifest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project Id |

### Return type

[**\Swagger\Client\Model\Manifest**](../Model/Manifest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **project**
> \Swagger\Client\Model\Project project($project_id, $fields)

Get Project

### Get A Project  Returns the project with the given project id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | Project Id
$fields = "fields_example"; // string | Requested fields

try {
    $result = $apiInstance->project($project_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->project: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project Id |
 **fields** | **string**| Requested fields | [optional]

### Return type

[**\Swagger\Client\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectFile**
> \Swagger\Client\Model\ProjectFile projectFile($project_id, $file_id, $fields)

Get Project File

### Get Project File Info  Returns information about a file in the project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | Project Id
$file_id = "file_id_example"; // string | File Id
$fields = "fields_example"; // string | Requested fields

try {
    $result = $apiInstance->projectFile($project_id, $file_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project Id |
 **file_id** | **string**| File Id |
 **fields** | **string**| Requested fields | [optional]

### Return type

[**\Swagger\Client\Model\ProjectFile**](../Model/ProjectFile.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectValidationResults**
> \Swagger\Client\Model\ProjectValidationCache projectValidationResults($project_id, $fields)

Cached Project Validation Results

### Get Cached Project Validation Results  Returns the cached results of a previous project validation calculation, if any. Returns http status 204 No Content if no validation results exist.  Validating the content of all the files in a project can be computationally intensive for large projects. Use this API to simply fetch the results of the most recent project validation rather than revalidating the entire project from scratch.  A value of `\"stale\": true` in the response indicates that the project has changed since the cached validation results were computed. The cached validation results may no longer reflect the current state of the project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | Project Id
$fields = "fields_example"; // string | Requested fields

try {
    $result = $apiInstance->projectValidationResults($project_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectValidationResults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project Id |
 **fields** | **string**| Requested fields | [optional]

### Return type

[**\Swagger\Client\Model\ProjectValidationCache**](../Model/ProjectValidationCache.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectWorkspace**
> \Swagger\Client\Model\ProjectWorkspace projectWorkspace($project_id, $fields)

Get Project Workspace

### Get Project Workspace  Returns information about the state of the project files in the currently selected workspace

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | Project Id
$fields = "fields_example"; // string | Requested fields

try {
    $result = $apiInstance->projectWorkspace($project_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectWorkspace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project Id |
 **fields** | **string**| Requested fields | [optional]

### Return type

[**\Swagger\Client\Model\ProjectWorkspace**](../Model/ProjectWorkspace.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetProjectToProduction**
> string resetProjectToProduction($project_id)

Reset To Production

### Reset a project to the revision of the project that is in production.  **DANGER** this will delete any changes that have not been pushed to a remote repository.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | Id of project

try {
    $result = $apiInstance->resetProjectToProduction($project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->resetProjectToProduction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Id of project |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetProjectToRemote**
> string resetProjectToRemote($project_id)

Reset To Remote

### Reset a project development branch to the revision of the project that is on the remote.  **DANGER** this will delete any changes that have not been pushed to a remote repository.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | Id of project

try {
    $result = $apiInstance->resetProjectToRemote($project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->resetProjectToRemote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Id of project |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **runGitConnectionTest**
> \Swagger\Client\Model\GitConnectionTestResult runGitConnectionTest($project_id, $test_id, $remote_url)

Run Git Connection Test

### Run a git connection test  Run the named test on the git service used by this project (or the dependency project for the provided remote_url) and return the result. This is intended to help debug git connections when things do not work properly, to give more helpful information about why a git url is not working with Looker.  Tests should be run in the order they are returned by [Get All Git Connection Tests](#!/Project/all_git_connection_tests).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | Project Id
$test_id = "test_id_example"; // string | Test Id
$remote_url = "remote_url_example"; // string | (Optional: leave blank for root project) The remote url for remote dependency to test.

try {
    $result = $apiInstance->runGitConnectionTest($project_id, $test_id, $remote_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->runGitConnectionTest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project Id |
 **test_id** | **string**| Test Id |
 **remote_url** | **string**| (Optional: leave blank for root project) The remote url for remote dependency to test. | [optional]

### Return type

[**\Swagger\Client\Model\GitConnectionTestResult**](../Model/GitConnectionTestResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **runLookmlTest**
> \Swagger\Client\Model\LookmlTestResult[] runLookmlTest($project_id, $file_id, $test, $model)

Run LookML Test

### Run LookML Tests  Runs all tests in the project, optionally filtered by file, test, and/or model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | Project Id
$file_id = "file_id_example"; // string | File Name
$test = "test_example"; // string | Test Name
$model = "model_example"; // string | Model Name

try {
    $result = $apiInstance->runLookmlTest($project_id, $file_id, $test, $model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->runLookmlTest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project Id |
 **file_id** | **string**| File Name | [optional]
 **test** | **string**| Test Name | [optional]
 **model** | **string**| Model Name | [optional]

### Return type

[**\Swagger\Client\Model\LookmlTestResult[]**](../Model/LookmlTestResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGitBranch**
> \Swagger\Client\Model\GitBranch updateGitBranch($project_id, $body)

Update Project Git Branch

### Checkout and/or reset --hard an existing Git Branch  Only allowed in development mode   - Call `update_session` to select the 'dev' workspace.  Checkout an existing branch if name field is different from the name of the currently checked out branch.  Optionally specify a branch name, tag name or commit SHA to which the branch should be reset.   **DANGER** hard reset will be force pushed to the remote. Unsaved changes and commits may be permanently lost.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | Project Id
$body = new \Swagger\Client\Model\GitBranch(); // \Swagger\Client\Model\GitBranch | Git Branch

try {
    $result = $apiInstance->updateGitBranch($project_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->updateGitBranch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project Id |
 **body** | [**\Swagger\Client\Model\GitBranch**](../Model/GitBranch.md)| Git Branch |

### Return type

[**\Swagger\Client\Model\GitBranch**](../Model/GitBranch.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProject**
> \Swagger\Client\Model\Project updateProject($project_id, $body, $fields)

Update Project

### Update Project Configuration  Apply changes to a project's configuration.   #### Configuring Git for a Project  To set up a Looker project with a remote git repository, follow these steps:  1. Call `update_session` to select the 'dev' workspace. 1. Call `create_git_deploy_key` to create a new deploy key for the project 1. Copy the deploy key text into the remote git repository's ssh key configuration 1. Call `update_project` to set project's `git_remote_url` ()and `git_service_name`, if necessary).  When you modify a project's `git_remote_url`, Looker connects to the remote repository to fetch metadata. The remote git repository MUST be configured with the Looker-generated deploy key for this project prior to setting the project's `git_remote_url`.  To set up a Looker project with a git repository residing on the Looker server (a 'bare' git repo): 1. Call `update_session` to select the 'dev' workspace. 1. Call `update_project` setting `git_remote_url` to nil and `git_service_name` to \"bare\".

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | Project Id
$body = new \Swagger\Client\Model\Project(); // \Swagger\Client\Model\Project | Project
$fields = "fields_example"; // string | Requested fields

try {
    $result = $apiInstance->updateProject($project_id, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->updateProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project Id |
 **body** | [**\Swagger\Client\Model\Project**](../Model/Project.md)| Project |
 **fields** | **string**| Requested fields | [optional]

### Return type

[**\Swagger\Client\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepositoryCredential**
> \Swagger\Client\Model\RepositoryCredential updateRepositoryCredential($root_project_id, $credential_id, $body)

Create Repository Credential

### Configure Repository Credential for a remote dependency  Admin required.  `root_project_id` is required. `credential_id` is required.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$root_project_id = "root_project_id_example"; // string | Root Project Id
$credential_id = "credential_id_example"; // string | Credential Id
$body = new \Swagger\Client\Model\RepositoryCredential(); // \Swagger\Client\Model\RepositoryCredential | Remote Project Information

try {
    $result = $apiInstance->updateRepositoryCredential($root_project_id, $credential_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->updateRepositoryCredential: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **root_project_id** | **string**| Root Project Id |
 **credential_id** | **string**| Credential Id |
 **body** | [**\Swagger\Client\Model\RepositoryCredential**](../Model/RepositoryCredential.md)| Remote Project Information |

### Return type

[**\Swagger\Client\Model\RepositoryCredential**](../Model/RepositoryCredential.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateProject**
> \Swagger\Client\Model\ProjectValidation validateProject($project_id, $fields)

Validate Project

### Validate Project  Performs lint validation of all lookml files in the project. Returns a list of errors found, if any.  Validating the content of all the files in a project can be computationally intensive for large projects. For best performance, call `validate_project(project_id)` only when you really want to recompute project validation. To quickly display the results of the most recent project validation (without recomputing), use `project_validation_results(project_id)`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | Project Id
$fields = "fields_example"; // string | Requested fields

try {
    $result = $apiInstance->validateProject($project_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->validateProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project Id |
 **fields** | **string**| Requested fields | [optional]

### Return type

[**\Swagger\Client\Model\ProjectValidation**](../Model/ProjectValidation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

