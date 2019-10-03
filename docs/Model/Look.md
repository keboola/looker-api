# Look

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**content_metadata_id** | **int** | Id of content metadata | [optional] 
**id** | **int** | Unique Id | [optional] 
**title** | **string** | Look Title | [optional] 
**content_favorite_id** | **int** | Content Favorite Id | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Time that the Look was created. | [optional] 
**deleted** | **bool** | Whether or not a look is &#39;soft&#39; deleted. | [optional] 
**deleted_at** | [**\DateTime**](\DateTime.md) | Time that the Look was deleted. | [optional] 
**deleter_id** | **int** | Id of User that deleted the look. | [optional] 
**description** | **string** | Description | [optional] 
**embed_url** | **string** | Embed Url | [optional] 
**excel_file_url** | **string** | Excel File Url | [optional] 
**favorite_count** | **int** | Number of times favorited | [optional] 
**google_spreadsheet_formula** | **string** | Google Spreadsheet Formula | [optional] 
**image_embed_url** | **string** | Image Embed Url | [optional] 
**is_run_on_load** | **bool** | auto-run query when Look viewed | [optional] 
**last_accessed_at** | [**\DateTime**](\DateTime.md) | Time that the Look was last accessed by any user | [optional] 
**last_updater_id** | **int** | Id of User that last updated the look. | [optional] 
**last_viewed_at** | [**\DateTime**](\DateTime.md) | Time last viewed in the Looker web UI | [optional] 
**model** | [**\Swagger\Client\Model\LookModel**](LookModel.md) | Model | [optional] 
**public** | **bool** | Is Public | [optional] 
**public_slug** | **string** | Public Slug | [optional] 
**public_url** | **string** | Public Url | [optional] 
**query_id** | **int** | Query Id | [optional] 
**short_url** | **string** | Short Url | [optional] 
**space** | [**\Swagger\Client\Model\SpaceBase**](SpaceBase.md) | Space of this Look | [optional] 
**space_id** | **string** | Space Id | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | Time that the Look was updated. | [optional] 
**user** | [**\Swagger\Client\Model\UserIdOnly**](UserIdOnly.md) | User | [optional] 
**user_id** | **int** | User Id | [optional] 
**view_count** | **int** | Number of times viewed in the Looker web UI | [optional] 
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


