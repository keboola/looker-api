# Query

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique Id | [optional] 
**model** | **string** | Model | 
**view** | **string** | Explore Name | 
**fields** | **string[]** | Fields | [optional] 
**pivots** | **string[]** | Pivots | [optional] 
**fill_fields** | **string[]** | Fill Fields | [optional] 
**filters** | **map[string,string]** | Filters | [optional] 
**filter_expression** | **string** | Filter Expression | [optional] 
**sorts** | **string[]** | Sorting for the query results. Use the format &#x60;[\&quot;view.field\&quot;, ...]&#x60; to sort on fields in ascending order. Use the format &#x60;[\&quot;view.field desc\&quot;, ...]&#x60; to sort on fields in descending order. Use &#x60;[\&quot;__UNSORTED__\&quot;]&#x60; (2 underscores before and after) to disable sorting entirely. Empty sorts &#x60;[]&#x60; will trigger a default sort. | [optional] 
**limit** | **string** | Limit | [optional] 
**column_limit** | **string** | Column Limit | [optional] 
**total** | **bool** | Total | [optional] 
**row_total** | **string** | Raw Total | [optional] 
**subtotals** | **string[]** | Fields on which to run subtotals | [optional] 
**runtime** | **double** | Runtime | [optional] 
**vis_config** | **map[string,string]** | Visualization configuration properties. These properties are typically opaque and differ based on the type of visualization used. There is no specified set of allowed keys. The values can be any type supported by JSON. A \&quot;type\&quot; key with a string value is often present, and is used by Looker to determine which visualization to present. Visualizations ignore unknown vis_config properties. | [optional] 
**filter_config** | **map[string,string]** | The filter_config represents the state of the filter UI on the explore page for a given query. When running a query via the Looker UI, this parameter takes precedence over \&quot;filters\&quot;. When creating a query or modifying an existing query, \&quot;filter_config\&quot; should be set to null. Setting it to any other value could cause unexpected filtering behavior. The format should be considered opaque. | [optional] 
**visible_ui_sections** | **string** | Visible UI Sections | [optional] 
**slug** | **string** | Slug | [optional] 
**dynamic_fields** | **string** | Dynamic Fields | [optional] 
**client_id** | **string** | Client Id: used to generate shortened explore URLs. If set by client, must be a unique 22 character alphanumeric string. Otherwise one will be generated. | [optional] 
**share_url** | **string** | Share Url | [optional] 
**expanded_share_url** | **string** | Expanded Share Url | [optional] 
**url** | **string** | Expanded Url | [optional] 
**query_timezone** | **string** | Query Timezone | [optional] 
**has_table_calculations** | **bool** | Has Table Calculations | [optional] 
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


