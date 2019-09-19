# ContentFavorite

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique Id | [optional] 
**user_id** | **int** | User Id which owns this ContentFavorite | [optional] 
**content_metadata_id** | **int** | Content Metadata Id associated with this ContentFavorite | [optional] 
**look_id** | **int** | Id of a look | [optional] 
**dashboard_id** | **int** | Id of a dashboard | [optional] 
**look** | [**\Swagger\Client\Model\LookBasic**](LookBasic.md) | Associated Look | [optional] 
**dashboard** | [**\Swagger\Client\Model\DashboardBase**](DashboardBase.md) | Associated Dashboard | [optional] 
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


