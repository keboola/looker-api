# ProjectWorkspace

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 
**project_id** | **string** | The id of the project | [optional] 
**workspace_id** | **string** | The id of the local workspace containing the project files | [optional] 
**git_status** | **string** | The status of the local git directory | [optional] 
**git_head** | **string** | Git head revision name | [optional] 
**dependency_status** | **string** | Status of the dependencies in your project. Valid values are: \&quot;lock_optional\&quot;, \&quot;lock_required\&quot;, \&quot;lock_error\&quot;, \&quot;install_none\&quot;. | [optional] 
**git_branch** | [**\Swagger\Client\Model\GitBranch**](GitBranch.md) | GitBranch | [optional] 
**lookml_type** | **string** | The lookml syntax used by all files in this project | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


