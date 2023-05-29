# AlertField

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | Field&#39;s title. Usually auto-generated to reflect field name and its filters | 
**name** | **string** | Field&#39;s name. Has the format &#x60;&lt;view&gt;.&lt;field&gt;&#x60; Refer to [docs](https://cloud.google.com/looker/docs/sharing-and-publishing/creating-alerts) for more details | 
**filter** | [**\Swagger\Client\Model\AlertFieldFilter[]**](AlertFieldFilter.md) | (Optional / Advance Use) List of fields filter. This further restricts the alert to certain dashboard element&#39;s field values. This can be used on top of dashboard filters &#x60;applied_dashboard_filters&#x60;. To keep thing simple, it&#39;s suggested to just use dashboard filters. Example: &#x60;{ &#39;title&#39;: &#39;12 Number on Hand&#39;, &#39;name&#39;: &#39;inventory_items.number_on_hand&#39;, &#39;filter&#39;: [{ &#39;field_name&#39;: &#39;inventory_items.id&#39;, &#39;field_value&#39;: 12, &#39;filter_value&#39;: null }] }&#x60; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


