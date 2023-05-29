# UpdateArtifact

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | Key of value to store. Namespace + Key must be unique. | 
**value** | **string** | Value to store. | 
**content_type** | **string** | MIME type of content. This can only be used to override content that is detected as text/plain. Needed to set application/json content types, which are analyzed as plain text. | [optional] 
**version** | **int** | Version number of the stored value. The version must be provided for any updates to an existing artifact. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


