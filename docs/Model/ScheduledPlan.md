# ScheduledPlan

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique Id | [optional] 
**name** | **string** | Name | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Date and time when ScheduledPlan was created | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | Date and time when ScheduledPlan was last updated | [optional] 
**title** | **string** | Title | [optional] 
**user_id** | **int** | User Id which owns this ScheduledPlan | [optional] 
**user** | [**\Swagger\Client\Model\UserPublic**](UserPublic.md) | User who owns this ScheduledPlan | [optional] 
**run_as_recipient** | **bool** | Whether schedule is ran as recipient (only applicable for email recipients) | [optional] 
**enabled** | **bool** | Whether the ScheduledPlan is enabled | [optional] 
**next_run_at** | [**\DateTime**](\DateTime.md) | When the ScheduledPlan will next run (null if running once) | [optional] 
**last_run_at** | [**\DateTime**](\DateTime.md) | When the ScheduledPlan was last run | [optional] 
**look_id** | **int** | Id of a look | [optional] 
**dashboard_id** | **int** | Id of a dashboard | [optional] 
**lookml_dashboard_id** | **string** | Id of a LookML dashboard | [optional] 
**filters_string** | **string** | Query string to run look or dashboard with | [optional] 
**dashboard_filters** | **string** | (DEPRECATED) Alias for filters_string field | [optional] 
**require_results** | **bool** | Delivery should occur if running the dashboard or look returns results | [optional] 
**require_no_results** | **bool** | Delivery should occur if the dashboard look does not return results | [optional] 
**require_change** | **bool** | Delivery should occur if data have changed since the last run | [optional] 
**send_all_results** | **bool** | Will run an unlimited query and send all results. | [optional] 
**crontab** | **string** | Vixie-Style crontab specification when to run | [optional] 
**datagroup** | **string** | Name of a datagroup; if specified will run when datagroup triggered (can&#39;t be used with cron string) | [optional] 
**timezone** | **string** | Timezone for interpreting the specified crontab (default is Looker instance timezone) | [optional] 
**query_id** | **string** | Query id | [optional] 
**scheduled_plan_destination** | [**\Swagger\Client\Model\ScheduledPlanDestination[]**](ScheduledPlanDestination.md) | Scheduled plan destinations | [optional] 
**run_once** | **bool** | Whether the plan in question should only be run once (usually for testing) | [optional] 
**include_links** | **bool** | Whether links back to Looker should be included in this ScheduledPlan | [optional] 
**pdf_paper_size** | **string** | The size of paper a PDF should be rendered for | [optional] 
**pdf_landscape** | **bool** | Whether the paper should be landscape | [optional] 
**embed** | **bool** | Whether this schedule is in an embed context or not | [optional] 
**color_theme** | **string** | Color scheme of the dashboard if applicable | [optional] 
**long_tables** | **bool** | Whether or not to expand table vis to full length | [optional] 
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


