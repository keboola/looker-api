# HomepageSection

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Time at which this section was created. | [optional] 
**deleted_at** | [**\DateTime**](\DateTime.md) | Time at which this section was deleted. | [optional] 
**detail_url** | **string** | A URL pointing to a page showing further information about the content in the section. | [optional] 
**homepage_id** | **string** | Id reference to parent homepage | [optional] 
**homepage_items** | [**\Swagger\Client\Model\HomepageItem[]**](HomepageItem.md) | Items in the homepage section | [optional] 
**id** | **string** | Unique Id | [optional] 
**is_header** | **bool** | Is this a header section (has no items) | [optional] 
**item_order** | **string[]** | ids of the homepage items in the order they should be displayed | [optional] 
**title** | **string** | Name of row | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | Time at which this section was last updated. | [optional] 
**description** | **string** | Description of the content found in this section. | [optional] 
**visible_item_order** | **string[]** | ids of the homepage items the user can see in the order they should be displayed | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


