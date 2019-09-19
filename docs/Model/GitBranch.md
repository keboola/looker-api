# GitBranch

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The short name on the local. Updating &#x60;name&#x60; results in &#x60;git checkout &lt;new_name&gt;&#x60; | [optional] 
**remote** | **string** | The name of the remote | [optional] 
**remote_name** | **string** | The short name on the remote | [optional] 
**error** | **string** | Name of error | [optional] 
**message** | **string** | Message describing an error if present | [optional] 
**owner_name** | **string** | Name of the owner of a personal branch | [optional] 
**readonly** | **bool** | Whether or not this branch is readonly | [optional] 
**personal** | **bool** | Whether or not this branch is a personal branch - readonly for all developers except the owner | [optional] 
**is_local** | **bool** | Whether or not a local ref exists for the branch | [optional] 
**is_remote** | **bool** | Whether or not a remote ref exists for the branch | [optional] 
**is_production** | **bool** | Whether or not this is the production branch | [optional] 
**ahead_count** | **int** | Number of commits the local branch is ahead of the remote | [optional] 
**behind_count** | **int** | Number of commits the local branch is behind the remote | [optional] 
**commit_at** | **int** | UNIX timestamp at which this branch was last committed. | [optional] 
**ref** | **string** | The resolved ref of this branch. Updating &#x60;ref&#x60; results in &#x60;git reset --hard &lt;new_ref&gt;&#x60;&#x60;. | [optional] 
**remote_ref** | **string** | The resolved ref of this branch remote. | [optional] 
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


