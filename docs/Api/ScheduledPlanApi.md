# Swagger\Client\ScheduledPlanApi

All URIs are relative to *https://example.looker.com:443/api/4.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**allScheduledPlans**](ScheduledPlanApi.md#allScheduledPlans) | **GET** /scheduled_plans | Get All Scheduled Plans
[**createScheduledPlan**](ScheduledPlanApi.md#createScheduledPlan) | **POST** /scheduled_plans | Create Scheduled Plan
[**deleteScheduledPlan**](ScheduledPlanApi.md#deleteScheduledPlan) | **DELETE** /scheduled_plans/{scheduled_plan_id} | Delete Scheduled Plan
[**scheduledPlan**](ScheduledPlanApi.md#scheduledPlan) | **GET** /scheduled_plans/{scheduled_plan_id} | Get Scheduled Plan
[**scheduledPlanRunOnce**](ScheduledPlanApi.md#scheduledPlanRunOnce) | **POST** /scheduled_plans/run_once | Run Scheduled Plan Once
[**scheduledPlanRunOnceById**](ScheduledPlanApi.md#scheduledPlanRunOnceById) | **POST** /scheduled_plans/{scheduled_plan_id}/run_once | Run Scheduled Plan Once by Id
[**scheduledPlansForDashboard**](ScheduledPlanApi.md#scheduledPlansForDashboard) | **GET** /scheduled_plans/dashboard/{dashboard_id} | Scheduled Plans for Dashboard
[**scheduledPlansForLook**](ScheduledPlanApi.md#scheduledPlansForLook) | **GET** /scheduled_plans/look/{look_id} | Scheduled Plans for Look
[**scheduledPlansForLookmlDashboard**](ScheduledPlanApi.md#scheduledPlansForLookmlDashboard) | **GET** /scheduled_plans/lookml_dashboard/{lookml_dashboard_id} | Scheduled Plans for LookML Dashboard
[**scheduledPlansForSpace**](ScheduledPlanApi.md#scheduledPlansForSpace) | **GET** /scheduled_plans/space/{space_id} | Scheduled Plans for Space
[**updateScheduledPlan**](ScheduledPlanApi.md#updateScheduledPlan) | **PATCH** /scheduled_plans/{scheduled_plan_id} | Update Scheduled Plan


# **allScheduledPlans**
> \Swagger\Client\Model\ScheduledPlan[] allScheduledPlans($user_id, $fields, $all_users)

Get All Scheduled Plans

### List All Scheduled Plans  Returns all scheduled plans which belong to the caller or given user.  If no user_id is provided, this function returns the scheduled plans owned by the caller.   To list all schedules for all users, pass `all_users=true`.   The caller must have `see_schedules` permission to see other users' scheduled plans.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ScheduledPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = "user_id_example"; // string | Return scheduled plans belonging to this user_id. If not provided, returns scheduled plans owned by the caller.
$fields = "fields_example"; // string | Comma delimited list of field names. If provided, only the fields specified will be included in the response
$all_users = true; // bool | Return scheduled plans belonging to all users (caller needs see_schedules permission)

try {
    $result = $apiInstance->allScheduledPlans($user_id, $fields, $all_users);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledPlanApi->allScheduledPlans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| Return scheduled plans belonging to this user_id. If not provided, returns scheduled plans owned by the caller. | [optional]
 **fields** | **string**| Comma delimited list of field names. If provided, only the fields specified will be included in the response | [optional]
 **all_users** | **bool**| Return scheduled plans belonging to all users (caller needs see_schedules permission) | [optional]

### Return type

[**\Swagger\Client\Model\ScheduledPlan[]**](../Model/ScheduledPlan.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createScheduledPlan**
> \Swagger\Client\Model\ScheduledPlan createScheduledPlan($body)

Create Scheduled Plan

### Create a Scheduled Plan  Create a scheduled plan to render a Look or Dashboard on a recurring schedule.  To create a scheduled plan, you MUST provide values for the following fields: `name` and `look_id`, `dashboard_id`, `lookml_dashboard_id`, or `query_id` and `cron_tab` or `datagroup` and at least one scheduled_plan_destination  A scheduled plan MUST have at least one scheduled_plan_destination defined.  When `look_id` is set, `require_no_results`, `require_results`, and `require_change` are all required.  If `create_scheduled_plan` fails with a 422 error, be sure to look at the error messages in the response which will explain exactly what fields are missing or values that are incompatible.  The queries that provide the data for the look or dashboard are run in the context of user account that owns the scheduled plan.  When `run_as_recipient` is `false` or not specified, the queries that provide the data for the look or dashboard are run in the context of user account that owns the scheduled plan.  When `run_as_recipient` is `true` and all the email recipients are Looker user accounts, the queries are run in the context of each recipient, so different recipients may see different data from the same scheduled render of a look or dashboard. For more details, see [Run As Recipient](https://cloud.google.com/looker/docs/r/admin/run-as-recipient).  Admins can create and modify scheduled plans on behalf of other users by specifying a user id. Non-admin users may not create or modify scheduled plans by or for other users.  #### Email Permissions:  For details about permissions required to schedule delivery to email and the safeguards Looker offers to protect against sending to unauthorized email destinations, see [Email Domain Allow List for Scheduled Looks](https://cloud.google.com/looker/docs/r/api/embed-permissions).   #### Scheduled Plan Destination Formats  Scheduled plan destinations must specify the data format to produce and send to the destination.  Formats:  | format | Description | :-----------: | :--- | | json | A JSON object containing a `data` property which contains an array of JSON objects, one per row. No metadata. | json_detail | Row data plus metadata describing the fields, pivots, table calcs, and other aspects of the query | inline_json | Same as the JSON format, except that the `data` property is a string containing JSON-escaped row data. Additional properties describe the data operation. This format is primarily used to send data to web hooks so that the web hook doesn't have to re-encode the JSON row data in order to pass it on to its ultimate destination. | csv | Comma separated values with a header | txt | Tab separated values with a header | html | Simple html | xlsx | MS Excel spreadsheet | wysiwyg_pdf | Dashboard rendered in a tiled layout to produce a PDF document | assembled_pdf | Dashboard rendered in a single column layout to produce a PDF document | wysiwyg_png | Dashboard rendered in a tiled layout to produce a PNG image ||  Valid formats vary by destination type and source object. `wysiwyg_pdf` is only valid for dashboards, for example.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ScheduledPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ScheduledPlan(); // \Swagger\Client\Model\ScheduledPlan | Scheduled Plan

try {
    $result = $apiInstance->createScheduledPlan($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledPlanApi->createScheduledPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ScheduledPlan**](../Model/ScheduledPlan.md)| Scheduled Plan |

### Return type

[**\Swagger\Client\Model\ScheduledPlan**](../Model/ScheduledPlan.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteScheduledPlan**
> string deleteScheduledPlan($scheduled_plan_id)

Delete Scheduled Plan

### Delete a Scheduled Plan  Normal users can only delete their own scheduled plans. Admins can delete other users' scheduled plans. This delete cannot be undone.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ScheduledPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$scheduled_plan_id = "scheduled_plan_id_example"; // string | Scheduled Plan Id

try {
    $result = $apiInstance->deleteScheduledPlan($scheduled_plan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledPlanApi->deleteScheduledPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scheduled_plan_id** | **string**| Scheduled Plan Id |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scheduledPlan**
> \Swagger\Client\Model\ScheduledPlan scheduledPlan($scheduled_plan_id, $fields)

Get Scheduled Plan

### Get Information About a Scheduled Plan  Admins can fetch information about other users' Scheduled Plans.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ScheduledPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$scheduled_plan_id = "scheduled_plan_id_example"; // string | Scheduled Plan Id
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->scheduledPlan($scheduled_plan_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledPlanApi->scheduledPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scheduled_plan_id** | **string**| Scheduled Plan Id |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\ScheduledPlan**](../Model/ScheduledPlan.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scheduledPlanRunOnce**
> \Swagger\Client\Model\ScheduledPlan scheduledPlanRunOnce($body)

Run Scheduled Plan Once

### Run a Scheduled Plan Immediately  Create a scheduled plan that runs only once, and immediately.  This can be useful for testing a Scheduled Plan before committing to a production schedule.  Admins can create scheduled plans on behalf of other users by specifying a user id.  This API is rate limited to prevent it from being used for relay spam or DoS attacks  #### Email Permissions:  For details about permissions required to schedule delivery to email and the safeguards Looker offers to protect against sending to unauthorized email destinations, see [Email Domain Allow List for Scheduled Looks](https://cloud.google.com/looker/docs/r/api/embed-permissions).   #### Scheduled Plan Destination Formats  Scheduled plan destinations must specify the data format to produce and send to the destination.  Formats:  | format | Description | :-----------: | :--- | | json | A JSON object containing a `data` property which contains an array of JSON objects, one per row. No metadata. | json_detail | Row data plus metadata describing the fields, pivots, table calcs, and other aspects of the query | inline_json | Same as the JSON format, except that the `data` property is a string containing JSON-escaped row data. Additional properties describe the data operation. This format is primarily used to send data to web hooks so that the web hook doesn't have to re-encode the JSON row data in order to pass it on to its ultimate destination. | csv | Comma separated values with a header | txt | Tab separated values with a header | html | Simple html | xlsx | MS Excel spreadsheet | wysiwyg_pdf | Dashboard rendered in a tiled layout to produce a PDF document | assembled_pdf | Dashboard rendered in a single column layout to produce a PDF document | wysiwyg_png | Dashboard rendered in a tiled layout to produce a PNG image ||  Valid formats vary by destination type and source object. `wysiwyg_pdf` is only valid for dashboards, for example.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ScheduledPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ScheduledPlan(); // \Swagger\Client\Model\ScheduledPlan | Scheduled Plan

try {
    $result = $apiInstance->scheduledPlanRunOnce($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledPlanApi->scheduledPlanRunOnce: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ScheduledPlan**](../Model/ScheduledPlan.md)| Scheduled Plan |

### Return type

[**\Swagger\Client\Model\ScheduledPlan**](../Model/ScheduledPlan.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scheduledPlanRunOnceById**
> \Swagger\Client\Model\ScheduledPlan scheduledPlanRunOnceById($scheduled_plan_id, $body)

Run Scheduled Plan Once by Id

### Run a Scheduled Plan By Id Immediately This function creates a run-once schedule plan based on an existing scheduled plan, applies modifications (if any) to the new scheduled plan, and runs the new schedule plan immediately. This can be useful for testing modifications to an existing scheduled plan before committing to a production schedule.  This function internally performs the following operations:  1. Copies the properties of the existing scheduled plan into a new scheduled plan 2. Copies any properties passed in the JSON body of this request into the new scheduled plan (replacing the original values) 3. Creates the new scheduled plan 4. Runs the new scheduled plan  The original scheduled plan is not modified by this operation. Admins can create, modify, and run scheduled plans on behalf of other users by specifying a user id. Non-admins can only create, modify, and run their own scheduled plans.  #### Email Permissions:  For details about permissions required to schedule delivery to email and the safeguards Looker offers to protect against sending to unauthorized email destinations, see [Email Domain Allow List for Scheduled Looks](https://cloud.google.com/looker/docs/r/api/embed-permissions).   #### Scheduled Plan Destination Formats  Scheduled plan destinations must specify the data format to produce and send to the destination.  Formats:  | format | Description | :-----------: | :--- | | json | A JSON object containing a `data` property which contains an array of JSON objects, one per row. No metadata. | json_detail | Row data plus metadata describing the fields, pivots, table calcs, and other aspects of the query | inline_json | Same as the JSON format, except that the `data` property is a string containing JSON-escaped row data. Additional properties describe the data operation. This format is primarily used to send data to web hooks so that the web hook doesn't have to re-encode the JSON row data in order to pass it on to its ultimate destination. | csv | Comma separated values with a header | txt | Tab separated values with a header | html | Simple html | xlsx | MS Excel spreadsheet | wysiwyg_pdf | Dashboard rendered in a tiled layout to produce a PDF document | assembled_pdf | Dashboard rendered in a single column layout to produce a PDF document | wysiwyg_png | Dashboard rendered in a tiled layout to produce a PNG image ||  Valid formats vary by destination type and source object. `wysiwyg_pdf` is only valid for dashboards, for example.    This API is rate limited to prevent it from being used for relay spam or DoS attacks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ScheduledPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$scheduled_plan_id = "scheduled_plan_id_example"; // string | Id of schedule plan to copy and run
$body = new \Swagger\Client\Model\WriteScheduledPlan(); // \Swagger\Client\Model\WriteScheduledPlan | Property values to apply to the newly copied scheduled plan before running it

try {
    $result = $apiInstance->scheduledPlanRunOnceById($scheduled_plan_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledPlanApi->scheduledPlanRunOnceById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scheduled_plan_id** | **string**| Id of schedule plan to copy and run |
 **body** | [**\Swagger\Client\Model\WriteScheduledPlan**](../Model/WriteScheduledPlan.md)| Property values to apply to the newly copied scheduled plan before running it | [optional]

### Return type

[**\Swagger\Client\Model\ScheduledPlan**](../Model/ScheduledPlan.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scheduledPlansForDashboard**
> \Swagger\Client\Model\ScheduledPlan[] scheduledPlansForDashboard($dashboard_id, $user_id, $all_users, $fields)

Scheduled Plans for Dashboard

### Get Scheduled Plans for a Dashboard  Returns all scheduled plans for a dashboard which belong to the caller or given user.  If no user_id is provided, this function returns the scheduled plans owned by the caller.   To list all schedules for all users, pass `all_users=true`.   The caller must have `see_schedules` permission to see other users' scheduled plans.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ScheduledPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dashboard_id = "dashboard_id_example"; // string | Dashboard Id
$user_id = "user_id_example"; // string | User Id (default is requesting user if not specified)
$all_users = true; // bool | Return scheduled plans belonging to all users for the dashboard
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->scheduledPlansForDashboard($dashboard_id, $user_id, $all_users, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledPlanApi->scheduledPlansForDashboard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dashboard_id** | **string**| Dashboard Id |
 **user_id** | **string**| User Id (default is requesting user if not specified) | [optional]
 **all_users** | **bool**| Return scheduled plans belonging to all users for the dashboard | [optional]
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\ScheduledPlan[]**](../Model/ScheduledPlan.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scheduledPlansForLook**
> \Swagger\Client\Model\ScheduledPlan[] scheduledPlansForLook($look_id, $user_id, $fields, $all_users)

Scheduled Plans for Look

### Get Scheduled Plans for a Look  Returns all scheduled plans for a look which belong to the caller or given user.  If no user_id is provided, this function returns the scheduled plans owned by the caller.   To list all schedules for all users, pass `all_users=true`.   The caller must have `see_schedules` permission to see other users' scheduled plans.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ScheduledPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$look_id = "look_id_example"; // string | Look Id
$user_id = "user_id_example"; // string | User Id (default is requesting user if not specified)
$fields = "fields_example"; // string | Requested fields.
$all_users = true; // bool | Return scheduled plans belonging to all users for the look

try {
    $result = $apiInstance->scheduledPlansForLook($look_id, $user_id, $fields, $all_users);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledPlanApi->scheduledPlansForLook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **look_id** | **string**| Look Id |
 **user_id** | **string**| User Id (default is requesting user if not specified) | [optional]
 **fields** | **string**| Requested fields. | [optional]
 **all_users** | **bool**| Return scheduled plans belonging to all users for the look | [optional]

### Return type

[**\Swagger\Client\Model\ScheduledPlan[]**](../Model/ScheduledPlan.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scheduledPlansForLookmlDashboard**
> \Swagger\Client\Model\ScheduledPlan[] scheduledPlansForLookmlDashboard($lookml_dashboard_id, $user_id, $fields, $all_users)

Scheduled Plans for LookML Dashboard

### Get Scheduled Plans for a LookML Dashboard  Returns all scheduled plans for a LookML Dashboard which belong to the caller or given user.  If no user_id is provided, this function returns the scheduled plans owned by the caller.   To list all schedules for all users, pass `all_users=true`.   The caller must have `see_schedules` permission to see other users' scheduled plans.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ScheduledPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lookml_dashboard_id = "lookml_dashboard_id_example"; // string | LookML Dashboard Id
$user_id = "user_id_example"; // string | User Id (default is requesting user if not specified)
$fields = "fields_example"; // string | Requested fields.
$all_users = true; // bool | Return scheduled plans belonging to all users for the dashboard

try {
    $result = $apiInstance->scheduledPlansForLookmlDashboard($lookml_dashboard_id, $user_id, $fields, $all_users);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledPlanApi->scheduledPlansForLookmlDashboard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lookml_dashboard_id** | **string**| LookML Dashboard Id |
 **user_id** | **string**| User Id (default is requesting user if not specified) | [optional]
 **fields** | **string**| Requested fields. | [optional]
 **all_users** | **bool**| Return scheduled plans belonging to all users for the dashboard | [optional]

### Return type

[**\Swagger\Client\Model\ScheduledPlan[]**](../Model/ScheduledPlan.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scheduledPlansForSpace**
> \Swagger\Client\Model\ScheduledPlan[] scheduledPlansForSpace($space_id, $fields)

Scheduled Plans for Space

### Get Scheduled Plans for a Space  Returns scheduled plans owned by the caller for a given space id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ScheduledPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$space_id = "space_id_example"; // string | Space Id
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->scheduledPlansForSpace($space_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledPlanApi->scheduledPlansForSpace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **space_id** | **string**| Space Id |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\ScheduledPlan[]**](../Model/ScheduledPlan.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateScheduledPlan**
> \Swagger\Client\Model\ScheduledPlan updateScheduledPlan($scheduled_plan_id, $body)

Update Scheduled Plan

### Update a Scheduled Plan  Admins can update other users' Scheduled Plans.  Note: Any scheduled plan destinations specified in an update will **replace** all scheduled plan destinations currently defined for the scheduled plan.  For Example: If a scheduled plan has destinations A, B, and C, and you call update on this scheduled plan specifying only B in the destinations, then destinations A and C will be deleted by the update.  Updating a scheduled plan to assign null or an empty array to the scheduled_plan_destinations property is an error, as a scheduled plan must always have at least one destination.  If you omit the scheduled_plan_destinations property from the object passed to update, then the destinations defined on the original scheduled plan will remain unchanged.  #### Email Permissions:  For details about permissions required to schedule delivery to email and the safeguards Looker offers to protect against sending to unauthorized email destinations, see [Email Domain Allow List for Scheduled Looks](https://cloud.google.com/looker/docs/r/api/embed-permissions).   #### Scheduled Plan Destination Formats  Scheduled plan destinations must specify the data format to produce and send to the destination.  Formats:  | format | Description | :-----------: | :--- | | json | A JSON object containing a `data` property which contains an array of JSON objects, one per row. No metadata. | json_detail | Row data plus metadata describing the fields, pivots, table calcs, and other aspects of the query | inline_json | Same as the JSON format, except that the `data` property is a string containing JSON-escaped row data. Additional properties describe the data operation. This format is primarily used to send data to web hooks so that the web hook doesn't have to re-encode the JSON row data in order to pass it on to its ultimate destination. | csv | Comma separated values with a header | txt | Tab separated values with a header | html | Simple html | xlsx | MS Excel spreadsheet | wysiwyg_pdf | Dashboard rendered in a tiled layout to produce a PDF document | assembled_pdf | Dashboard rendered in a single column layout to produce a PDF document | wysiwyg_png | Dashboard rendered in a tiled layout to produce a PNG image ||  Valid formats vary by destination type and source object. `wysiwyg_pdf` is only valid for dashboards, for example.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ScheduledPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$scheduled_plan_id = "scheduled_plan_id_example"; // string | Scheduled Plan Id
$body = new \Swagger\Client\Model\ScheduledPlan(); // \Swagger\Client\Model\ScheduledPlan | Scheduled Plan

try {
    $result = $apiInstance->updateScheduledPlan($scheduled_plan_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledPlanApi->updateScheduledPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scheduled_plan_id** | **string**| Scheduled Plan Id |
 **body** | [**\Swagger\Client\Model\ScheduledPlan**](../Model/ScheduledPlan.md)| Scheduled Plan |

### Return type

[**\Swagger\Client\Model\ScheduledPlan**](../Model/ScheduledPlan.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

