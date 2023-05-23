# Artifact

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | Key of value to store. Namespace + Key must be unique. | 
**value** | **string** | Value to store. | 
**content_type** | **string** | MIME type of content. This can only be used to override content that is detected as text/plain. Needed to set application/json content types, which are analyzed as plain text. | [optional] 
**version** | **int** | Version number of the stored value. The version must be provided for any updates to an existing artifact. | [optional] 
**namespace** | **string** | Artifact storage namespace. | 
**created_at** | [**\DateTime**](\DateTime.md) | Timestamp when this artifact was created. | 
**updated_at** | [**\DateTime**](\DateTime.md) | Timestamp when this artifact was updated. | 
**value_size** | **int** | Size (in bytes) of the stored value. | 
**created_by_userid** | **string** | User id of the artifact creator. | 
**updated_by_userid** | **string** | User id of the artifact updater. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


