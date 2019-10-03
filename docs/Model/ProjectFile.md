# ProjectFile

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | An opaque token uniquely identifying a file within a project. Avoid parsing or decomposing the text of this token. This token is stable within a Looker release but may change between Looker releases | [optional] 
**path** | **string** | Path, file name, and extension of the file relative to the project root directory | [optional] 
**title** | **string** | Display name | [optional] 
**type** | **string** | File type: model, view, etc | [optional] 
**extension** | **string** | The extension of the file: .view.lkml, .model.lkml, etc | [optional] 
**mime_type** | **string** | File mime type | [optional] 
**editable** | **bool** | State of editability for the file. | [optional] 
**git_status** | [**\Swagger\Client\Model\GitStatus**](GitStatus.md) | Status of the file according to git | [optional] 
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


