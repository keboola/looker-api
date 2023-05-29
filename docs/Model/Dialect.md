# Dialect

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the dialect | [optional] 
**label** | **string** | The human-readable label of the connection | [optional] 
**supports_cost_estimate** | **bool** | Whether the dialect supports query cost estimates | [optional] 
**cost_estimate_style** | **string** | How the dialect handles cost estimation | [optional] 
**persistent_table_indexes** | **string** | PDT index columns | [optional] 
**persistent_table_sortkeys** | **string** | PDT sortkey columns | [optional] 
**persistent_table_distkey** | **string** | PDT distkey column | [optional] 
**supports_streaming** | **bool** | Suports streaming results | [optional] 
**automatically_run_sql_runner_snippets** | **bool** | Should SQL Runner snippets automatically be run | [optional] 
**connection_tests** | **string[]** | Array of names of the tests that can be run on a connection using this dialect | [optional] 
**supports_inducer** | **bool** | Is supported with the inducer (i.e. generate from sql) | [optional] 
**supports_multiple_databases** | **bool** | Can multiple databases be accessed from a connection using this dialect | [optional] 
**supports_persistent_derived_tables** | **bool** | Whether the dialect supports allowing Looker to build persistent derived tables | [optional] 
**has_ssl_support** | **bool** | Does the database have client SSL support settable through the JDBC string explicitly? | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


