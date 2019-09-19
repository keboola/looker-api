# LookmlModelExplore

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Fully qualified name model plus explore name | [optional] 
**name** | **string** | Explore name | [optional] 
**description** | **string** | Description | [optional] 
**label** | **string** | Label | [optional] 
**scopes** | **string[]** | Scopes | [optional] 
**can_total** | **bool** | Can Total | [optional] 
**can_save** | **bool** | Can Save | [optional] 
**can_explain** | **bool** | Can Explain | [optional] 
**can_pivot_in_db** | **bool** | Can pivot in the DB | [optional] 
**can_subtotal** | **bool** | Can use subtotals | [optional] 
**has_timezone_support** | **bool** | Has timezone support | [optional] 
**supports_cost_estimate** | **bool** | Cost estimates supported | [optional] 
**connection_name** | **string** | Connection name | [optional] 
**null_sort_treatment** | **string** | How nulls are sorted, possible values are \&quot;low\&quot;, \&quot;high\&quot;, \&quot;first\&quot; and \&quot;last\&quot; | [optional] 
**files** | **string[]** | List of model source files | [optional] 
**source_file** | **string** | Primary source_file file | [optional] 
**project_name** | **string** | Name of project | [optional] 
**model_name** | **string** | Name of model | [optional] 
**view_name** | **string** | Name of view | [optional] 
**hidden** | **bool** | Is hidden | [optional] 
**sql_table_name** | **string** | A sql_table_name expression that defines what sql table the view/explore maps onto. Example: \&quot;prod_orders2 AS orders\&quot; in a view named orders. | [optional] 
**access_filter_fields** | **string[]** | (DEPRECATED) Array of access filter field names | [optional] 
**access_filters** | [**\Swagger\Client\Model\LookmlModelExploreAccessFilter[]**](LookmlModelExploreAccessFilter.md) | Access filters | [optional] 
**aliases** | [**\Swagger\Client\Model\LookmlModelExploreAlias[]**](LookmlModelExploreAlias.md) | Aliases | [optional] 
**always_filter** | [**\Swagger\Client\Model\LookmlModelExploreAlwaysFilter[]**](LookmlModelExploreAlwaysFilter.md) | Always filter | [optional] 
**conditionally_filter** | [**\Swagger\Client\Model\LookmlModelExploreConditionallyFilter[]**](LookmlModelExploreConditionallyFilter.md) | Conditionally filter | [optional] 
**index_fields** | **string[]** | Array of index fields | [optional] 
**sets** | [**\Swagger\Client\Model\LookmlModelExploreSet[]**](LookmlModelExploreSet.md) | Sets | [optional] 
**tags** | **string[]** | An array of arbitrary string tags provided in the model for this explore. | [optional] 
**errors** | [**\Swagger\Client\Model\LookmlModelExploreError[]**](LookmlModelExploreError.md) | Errors | [optional] 
**fields** | [**\Swagger\Client\Model\LookmlModelExploreFieldset**](LookmlModelExploreFieldset.md) | Fields | [optional] 
**joins** | [**\Swagger\Client\Model\LookmlModelExploreJoins[]**](LookmlModelExploreJoins.md) | Views joined into this explore | [optional] 
**group_label** | **string** | Label used to group explores in the navigation menus | [optional] 
**supported_measure_types** | [**\Swagger\Client\Model\LookmlModelExploreSupportedMeasureType[]**](LookmlModelExploreSupportedMeasureType.md) | An array of items describing which custom measure types are supported for creating a custom measure &#39;baed_on&#39; each possible dimension type. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


