# DataActionFormField

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name | [optional] 
**label** | **string** | Human-readable label | [optional] 
**description** | **string** | Description of field | [optional] 
**type** | **string** | Type of field. | [optional] 
**default** | **string** | Default value of the field. | [optional] 
**oauth_url** | **string** | The URL for an oauth link, if type is &#39;oauth_link&#39;. | [optional] 
**required** | **bool** | Whether or not the field is required. This is a user-interface hint. A user interface displaying this form should not submit it without a value for this field. The action server must also perform this validation. | [optional] 
**options** | [**\Swagger\Client\Model\DataActionFormSelectOption[]**](DataActionFormSelectOption.md) | If the form type is &#39;select&#39;, a list of options to be selected from. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


