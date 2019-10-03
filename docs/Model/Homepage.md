# Homepage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**content_metadata_id** | **int** | Id of associated content_metadata record | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Date of homepage creatopm | [optional] 
**deleted_at** | [**\DateTime**](\DateTime.md) | Date of homepage deletion | [optional] 
**description** | **string** | Description of homepage | [optional] 
**homepage_sections** | [**\Swagger\Client\Model\HomepageSection[]**](HomepageSection.md) | Sections of the homepage | [optional] 
**id** | **string** | Unique Id | [optional] 
**section_order** | **int[]** | ids of the homepage sections in the order they should be displayed | [optional] 
**title** | **string** | Title of homepage | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | Date of last homepage update | [optional] 
**user_id** | **int** | User id of homepage creator | [optional] 
**primary_homepage** | **bool** | Whether the homepage is the primary homepage or not | [optional] 
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


