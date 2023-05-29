# Board

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 
**content_metadata_id** | **string** | Id of associated content_metadata record | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Date of board creation | [optional] 
**deleted_at** | [**\DateTime**](\DateTime.md) | Date of board deletion | [optional] 
**description** | **string** | Description of the board | [optional] 
**board_sections** | [**\Swagger\Client\Model\BoardSection[]**](BoardSection.md) | Sections of the board | [optional] 
**id** | **string** | Unique Id | [optional] 
**section_order** | **string[]** | ids of the board sections in the order they should be displayed | [optional] 
**title** | **string** | Title of the board | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | Date of last board update | [optional] 
**user_id** | **string** | User id of board creator | [optional] 
**primary_homepage** | **bool** | Whether the board is the primary homepage or not | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


