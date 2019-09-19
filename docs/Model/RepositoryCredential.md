# RepositoryCredential

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique Id | [optional] 
**root_project_id** | **string** | Root project Id | [optional] 
**remote_url** | **string** | Git remote repository url | [optional] 
**git_username** | **string** | Git username for HTTPS authentication. | [optional] 
**git_password** | **string** | (Write-Only) Git password for HTTPS authentication. | [optional] 
**ssh_public_key** | **string** | Public deploy key for SSH authentication. | [optional] 
**is_configured** | **bool** | Whether the credentials have been configured for the Git Repository. | [optional] 
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


