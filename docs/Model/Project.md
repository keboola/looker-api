# Project

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 
**id** | **string** | Project Id | [optional] 
**name** | **string** | Project display name | [optional] 
**uses_git** | **bool** | If true the project is configured with a git repository | [optional] 
**git_remote_url** | **string** | Git remote repository url | [optional] 
**git_username** | **string** | Git username for HTTPS authentication. (For production only, if using user attributes.) | [optional] 
**git_password** | **string** | (Write-Only) Git password for HTTPS authentication. (For production only, if using user attributes.) | [optional] 
**git_production_branch_name** | **string** | Git production branch name. Defaults to master. Supported only in Looker 21.0 and higher. | [optional] 
**use_git_cookie_auth** | **bool** | If true, the project uses a git cookie for authentication. | [optional] 
**git_username_user_attribute** | **string** | User attribute name for username in per-user HTTPS authentication. | [optional] 
**git_password_user_attribute** | **string** | User attribute name for password in per-user HTTPS authentication. | [optional] 
**git_service_name** | **string** | Name of the git service provider | [optional] 
**git_application_server_http_port** | **int** | Port that HTTP(S) application server is running on (for PRs, file browsing, etc.) | [optional] 
**git_application_server_http_scheme** | **string** | Scheme that is running on application server (for PRs, file browsing, etc.) | [optional] 
**deploy_secret** | **string** | (Write-Only) Optional secret token with which to authenticate requests to the webhook deploy endpoint. If not set, endpoint is unauthenticated. | [optional] 
**unset_deploy_secret** | **bool** | (Write-Only) When true, unsets the deploy secret to allow unauthenticated access to the webhook deploy endpoint. | [optional] 
**pull_request_mode** | **string** | The git pull request policy for this project. Valid values are: \&quot;off\&quot;, \&quot;links\&quot;, \&quot;recommended\&quot;, \&quot;required\&quot;. | [optional] 
**validation_required** | **bool** | Validation policy: If true, the project must pass validation checks before project changes can be committed to the git repository | [optional] 
**git_release_mgmt_enabled** | **bool** | If true, advanced git release management is enabled for this project | [optional] 
**allow_warnings** | **bool** | Validation policy: If true, the project can be committed with warnings when &#x60;validation_required&#x60; is true. (&#x60;allow_warnings&#x60; does nothing if &#x60;validation_required&#x60; is false). | [optional] 
**is_example** | **bool** | If true the project is an example project and cannot be modified | [optional] 
**dependency_status** | **string** | Status of dependencies in your manifest &amp; lockfile | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


