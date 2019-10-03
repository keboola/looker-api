# GitStatus

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action** | **string** | Git action: add, delete, etc | [optional] 
**conflict** | **bool** | When true, changes to the local file conflict with the remote repository | [optional] 
**revertable** | **bool** | When true, the file can be reverted to an earlier state | [optional] 
**text** | **string** | Git description of the action | [optional] 
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


