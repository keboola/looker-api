# Dashboard

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**content_favorite_id** | **int** | Content Favorite Id | [optional] 
**content_metadata_id** | **int** | Id of content metadata | [optional] 
**description** | **string** | Description | [optional] 
**hidden** | **bool** | Is Hidden | [optional] 
**id** | **string** | Unique Id | [optional] 
**model** | [**\Swagger\Client\Model\LookModel**](LookModel.md) | Model | [optional] 
**query_timezone** | **string** | Timezone in which the Dashboard will run by default. | [optional] 
**readonly** | **bool** | Is Read-only | [optional] 
**refresh_interval** | **string** | Refresh Interval, as a time duration phrase like \&quot;2 hours 30 minutes\&quot;. A number with no time units will be interpreted as whole seconds. | [optional] 
**refresh_interval_to_i** | **int** | Refresh Interval in milliseconds | [optional] 
**space** | [**\Swagger\Client\Model\SpaceBase**](SpaceBase.md) | Space | [optional] 
**title** | **string** | Dashboard Title | [optional] 
**user_id** | **int** | Id of User | [optional] 
**background_color** | **string** | Background color | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Time that the Dashboard was created. | [optional] 
**dashboard_elements** | [**\Swagger\Client\Model\DashboardElement[]**](DashboardElement.md) | Elements | [optional] 
**dashboard_filters** | [**\Swagger\Client\Model\DashboardFilter[]**](DashboardFilter.md) | Filters | [optional] 
**dashboard_layouts** | [**\Swagger\Client\Model\DashboardLayout[]**](DashboardLayout.md) | Layouts | [optional] 
**deleted** | **bool** | Whether or not a dashboard is &#39;soft&#39; deleted. | [optional] 
**deleted_at** | [**\DateTime**](\DateTime.md) | Time that the Dashboard was &#39;soft&#39; deleted. | [optional] 
**deleter_id** | **int** | Id of User that &#39;soft&#39; deleted the dashboard. | [optional] 
**edit_uri** | **string** | Relative path of URI of LookML file to edit the dashboard (LookML dashboard only). | [optional] 
**favorite_count** | **int** | Number of times favorited | [optional] 
**last_accessed_at** | [**\DateTime**](\DateTime.md) | Time the dashboard was last accessed | [optional] 
**last_viewed_at** | [**\DateTime**](\DateTime.md) | Time last viewed in the Looker web UI | [optional] 
**load_configuration** | **string** | configuration option that governs how dashboard loading will happen. | [optional] 
**lookml_link_id** | **string** | Links this dashboard to a particular LookML dashboard such that calling a **sync** operation on that LookML dashboard will update this dashboard to match. | [optional] 
**show_filters_bar** | **bool** | Show filters bar.  **Security Note:** This property only affects the *cosmetic* appearance of the dashboard, not a user&#39;s ability to access data. Hiding the filters bar does **NOT** prevent users from changing filters by other means. For information on how to set up secure data access control policies, see [Control User Access to Data](https://looker.com/docs/r/api/control-access?version&#x3D;6.20) | [optional] 
**show_title** | **bool** | Show title | [optional] 
**slug** | **string** | Content Metadata Slug | [optional] 
**space_id** | **string** | Id of Space | [optional] 
**text_tile_text_color** | **string** | Color of text on text tiles | [optional] 
**tile_background_color** | **string** | Tile background color | [optional] 
**tile_text_color** | **string** | Tile text color | [optional] 
**title_color** | **string** | Title color | [optional] 
**view_count** | **int** | Number of times viewed in the Looker web UI | [optional] 
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


