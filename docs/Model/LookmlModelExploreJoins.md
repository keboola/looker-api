# LookmlModelExploreJoins

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of this join (and name of the view to join) | [optional] 
**dependent_fields** | **string[]** | Fields referenced by the join | [optional] 
**fields** | **string[]** | Fields of the joined view to pull into this explore | [optional] 
**foreign_key** | **string** | Name of the dimension in this explore whose value is in the primary key of the joined view | [optional] 
**from** | **string** | Name of view to join | [optional] 
**outer_only** | **bool** | Specifies whether all queries must use an outer join | [optional] 
**relationship** | **string** | many_to_one, one_to_one, one_to_many, many_to_many | [optional] 
**required_joins** | **string[]** | Names of joins that must always be included in SQL queries | [optional] 
**sql_foreign_key** | **string** | SQL expression that produces a foreign key | [optional] 
**sql_on** | **string** | SQL ON expression describing the join condition | [optional] 
**sql_table_name** | **string** | SQL table name to join | [optional] 
**type** | **string** | The join type: left_outer, full_outer, inner, or cross | [optional] 
**view_label** | **string** | Label to display in UI selectors | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


