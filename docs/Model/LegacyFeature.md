# LegacyFeature

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique Id | [optional] 
**name** | **string** | Name | [optional] 
**description** | **string** | Description | [optional] 
**enabled_locally** | **bool** | Whether this feature has been enabled by a user | [optional] 
**enabled** | **bool** | Whether this feature is currently enabled | [optional] 
**disallowed_as_of_version** | **string** | Looker version where this feature became a legacy feature | [optional] 
**disable_on_upgrade_to_version** | **string** | Looker version where this feature will be automatically disabled | [optional] 
**end_of_life_version** | **string** | Future Looker version where this feature will be removed | [optional] 
**documentation_url** | **string** | URL for documentation about this feature | [optional] 
**approximate_disable_date** | [**\DateTime**](\DateTime.md) | Approximate date that this feature will be automatically disabled. | [optional] 
**approximate_end_of_life_date** | [**\DateTime**](\DateTime.md) | Approximate date that this feature will be removed. | [optional] 
**has_disabled_on_upgrade** | **bool** | Whether this legacy feature may have been automatically disabled when upgrading to the current version. | [optional] 
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


