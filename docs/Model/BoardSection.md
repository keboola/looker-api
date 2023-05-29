# BoardSection

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Time at which this section was created. | [optional] 
**deleted_at** | [**\DateTime**](\DateTime.md) | Time at which this section was deleted. | [optional] 
**description** | **string** | Description of the content found in this section. | [optional] 
**board_id** | **string** | Id reference to parent board | [optional] 
**board_items** | [**\Swagger\Client\Model\BoardItem[]**](BoardItem.md) | Items in the board section | [optional] 
**id** | **string** | Unique Id | [optional] 
**item_order** | **string[]** | ids of the board items in the order they should be displayed | [optional] 
**visible_item_order** | **string[]** | ids of the homepage items the user can see in the order they should be displayed | [optional] 
**title** | **string** | Name of row | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | Time at which this section was last updated. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


