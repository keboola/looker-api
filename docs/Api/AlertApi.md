# Swagger\Client\AlertApi

All URIs are relative to *https://example.looker.com:443/api/4.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alertNotifications**](AlertApi.md#alertNotifications) | **GET** /alert_notifications | Alert Notifications
[**createAlert**](AlertApi.md#createAlert) | **POST** /alerts | Create an alert
[**deleteAlert**](AlertApi.md#deleteAlert) | **DELETE** /alerts/{alert_id} | Delete an alert
[**enqueueAlert**](AlertApi.md#enqueueAlert) | **POST** /alerts/{alert_id}/enqueue | Enqueue an alert
[**followAlert**](AlertApi.md#followAlert) | **POST** /alerts/{alert_id}/follow | Follow an alert
[**getAlert**](AlertApi.md#getAlert) | **GET** /alerts/{alert_id} | Get an alert
[**readAlertNotification**](AlertApi.md#readAlertNotification) | **PATCH** /alert_notifications/{alert_notification_id} | Read a Notification
[**searchAlerts**](AlertApi.md#searchAlerts) | **GET** /alerts/search | Search Alerts
[**unfollowAlert**](AlertApi.md#unfollowAlert) | **DELETE** /alerts/{alert_id}/follow | Unfollow an alert
[**updateAlert**](AlertApi.md#updateAlert) | **PUT** /alerts/{alert_id} | Update an alert
[**updateAlertField**](AlertApi.md#updateAlertField) | **PATCH** /alerts/{alert_id} | Update select fields on an alert


# **alertNotifications**
> \Swagger\Client\Model\AlertNotifications[] alertNotifications($limit, $offset)

Alert Notifications

# Alert Notifications.   The endpoint returns all the alert notifications received by the user on email in the past 7 days. It also returns whether the notifications have been read by the user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AlertApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 789; // int | (Optional) Number of results to return (used with `offset`).
$offset = 789; // int | (Optional) Number of results to skip before returning any (used with `limit`).

try {
    $result = $apiInstance->alertNotifications($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertApi->alertNotifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| (Optional) Number of results to return (used with &#x60;offset&#x60;). | [optional]
 **offset** | **int**| (Optional) Number of results to skip before returning any (used with &#x60;limit&#x60;). | [optional]

### Return type

[**\Swagger\Client\Model\AlertNotifications[]**](../Model/AlertNotifications.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAlert**
> \Swagger\Client\Model\Alert createAlert($body)

Create an alert

### Create a new alert and return details of the newly created object  Required fields: `field`, `destinations`, `comparison_type`, `threshold`, `cron`  Example Request: Run alert on dashboard element '103' at 5am every day. Send an email to 'test@test.com' if inventory for Los Angeles (using dashboard filter `Warehouse Name`) is lower than 1,000 ``` {   \"cron\": \"0 5 * * *\",   \"custom_title\": \"Alert when LA inventory is low\",   \"dashboard_element_id\": 103,   \"applied_dashboard_filters\": [     {       \"filter_title\": \"Warehouse Name\",       \"field_name\": \"distribution_centers.name\",       \"filter_value\": \"Los Angeles CA\",       \"filter_description\": \"is Los Angeles CA\"     }   ],   \"comparison_type\": \"LESS_THAN\",   \"destinations\": [     {       \"destination_type\": \"EMAIL\",       \"email_address\": \"test@test.com\"     }   ],   \"field\": {     \"title\": \"Number on Hand\",     \"name\": \"inventory_items.number_on_hand\"   },   \"is_disabled\": false,   \"is_public\": true,   \"threshold\": 1000 } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AlertApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Alert(); // \Swagger\Client\Model\Alert | Alert

try {
    $result = $apiInstance->createAlert($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertApi->createAlert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Alert**](../Model/Alert.md)| Alert |

### Return type

[**\Swagger\Client\Model\Alert**](../Model/Alert.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAlert**
> deleteAlert($alert_id)

Delete an alert

### Delete an alert by a given alert ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AlertApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$alert_id = "alert_id_example"; // string | ID of an alert

try {
    $apiInstance->deleteAlert($alert_id);
} catch (Exception $e) {
    echo 'Exception when calling AlertApi->deleteAlert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alert_id** | **string**| ID of an alert |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enqueueAlert**
> enqueueAlert($alert_id, $force)

Enqueue an alert

### Enqueue an Alert by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AlertApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$alert_id = "alert_id_example"; // string | ID of an alert
$force = true; // bool | Whether to enqueue an alert again if its already running.

try {
    $apiInstance->enqueueAlert($alert_id, $force);
} catch (Exception $e) {
    echo 'Exception when calling AlertApi->enqueueAlert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alert_id** | **string**| ID of an alert |
 **force** | **bool**| Whether to enqueue an alert again if its already running. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **followAlert**
> followAlert($alert_id)

Follow an alert

Follow an alert.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AlertApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$alert_id = "alert_id_example"; // string | ID of an alert

try {
    $apiInstance->followAlert($alert_id);
} catch (Exception $e) {
    echo 'Exception when calling AlertApi->followAlert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alert_id** | **string**| ID of an alert |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAlert**
> \Swagger\Client\Model\Alert getAlert($alert_id)

Get an alert

### Get an alert by a given alert ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AlertApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$alert_id = "alert_id_example"; // string | ID of an alert

try {
    $result = $apiInstance->getAlert($alert_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertApi->getAlert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alert_id** | **string**| ID of an alert |

### Return type

[**\Swagger\Client\Model\Alert**](../Model/Alert.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readAlertNotification**
> \Swagger\Client\Model\AlertNotifications readAlertNotification($alert_notification_id)

Read a Notification

# Reads a Notification   The endpoint marks a given alert notification as read by the user, in case it wasn't already read. The AlertNotification model is updated for this purpose. It returns the notification as a response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AlertApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$alert_notification_id = "alert_notification_id_example"; // string | ID of a notification

try {
    $result = $apiInstance->readAlertNotification($alert_notification_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertApi->readAlertNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alert_notification_id** | **string**| ID of a notification |

### Return type

[**\Swagger\Client\Model\AlertNotifications**](../Model/AlertNotifications.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchAlerts**
> \Swagger\Client\Model\Alert[] searchAlerts($limit, $offset, $group_by, $fields, $disabled, $frequency, $condition_met, $last_run_start, $last_run_end, $all_owners)

Search Alerts

### Search Alerts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AlertApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 789; // int | (Optional) Number of results to return (used with `offset`).
$offset = 789; // int | (Optional) Number of results to skip before returning any (used with `limit`).
$group_by = "group_by_example"; // string | (Optional) Dimension by which to order the results(`dashboard` | `owner`)
$fields = "fields_example"; // string | (Optional) Requested fields.
$disabled = true; // bool | (Optional) Filter on returning only enabled or disabled alerts.
$frequency = "frequency_example"; // string | (Optional) Filter on alert frequency, such as: monthly, weekly, daily, hourly, minutes
$condition_met = true; // bool | (Optional) Filter on whether the alert has met its condition when it last executed
$last_run_start = "last_run_start_example"; // string | (Optional) Filter on the start range of the last time the alerts were run. Example: 2021-01-01T01:01:01-08:00.
$last_run_end = "last_run_end_example"; // string | (Optional) Filter on the start range of the last time the alerts were run. Example: 2021-01-01T01:01:01-08:00.
$all_owners = true; // bool | (Admin only) (Optional) Filter for all owners.

try {
    $result = $apiInstance->searchAlerts($limit, $offset, $group_by, $fields, $disabled, $frequency, $condition_met, $last_run_start, $last_run_end, $all_owners);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertApi->searchAlerts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| (Optional) Number of results to return (used with &#x60;offset&#x60;). | [optional]
 **offset** | **int**| (Optional) Number of results to skip before returning any (used with &#x60;limit&#x60;). | [optional]
 **group_by** | **string**| (Optional) Dimension by which to order the results(&#x60;dashboard&#x60; | &#x60;owner&#x60;) | [optional]
 **fields** | **string**| (Optional) Requested fields. | [optional]
 **disabled** | **bool**| (Optional) Filter on returning only enabled or disabled alerts. | [optional]
 **frequency** | **string**| (Optional) Filter on alert frequency, such as: monthly, weekly, daily, hourly, minutes | [optional]
 **condition_met** | **bool**| (Optional) Filter on whether the alert has met its condition when it last executed | [optional]
 **last_run_start** | **string**| (Optional) Filter on the start range of the last time the alerts were run. Example: 2021-01-01T01:01:01-08:00. | [optional]
 **last_run_end** | **string**| (Optional) Filter on the start range of the last time the alerts were run. Example: 2021-01-01T01:01:01-08:00. | [optional]
 **all_owners** | **bool**| (Admin only) (Optional) Filter for all owners. | [optional]

### Return type

[**\Swagger\Client\Model\Alert[]**](../Model/Alert.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unfollowAlert**
> unfollowAlert($alert_id)

Unfollow an alert

Unfollow an alert.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AlertApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$alert_id = "alert_id_example"; // string | ID of an alert

try {
    $apiInstance->unfollowAlert($alert_id);
} catch (Exception $e) {
    echo 'Exception when calling AlertApi->unfollowAlert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alert_id** | **string**| ID of an alert |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAlert**
> \Swagger\Client\Model\Alert updateAlert($alert_id, $body)

Update an alert

### Update an alert # Required fields: `owner_id`, `field`, `destinations`, `comparison_type`, `threshold`, `cron` #

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AlertApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$alert_id = "alert_id_example"; // string | ID of an alert
$body = new \Swagger\Client\Model\Alert(); // \Swagger\Client\Model\Alert | Alert

try {
    $result = $apiInstance->updateAlert($alert_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertApi->updateAlert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alert_id** | **string**| ID of an alert |
 **body** | [**\Swagger\Client\Model\Alert**](../Model/Alert.md)| Alert |

### Return type

[**\Swagger\Client\Model\Alert**](../Model/Alert.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAlertField**
> \Swagger\Client\Model\Alert updateAlertField($alert_id, $body)

Update select fields on an alert

### Update select alert fields # Available fields: `owner_id`, `is_disabled`, `disabled_reason`, `is_public`, `threshold` #

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AlertApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$alert_id = "alert_id_example"; // string | ID of an alert
$body = new \Swagger\Client\Model\AlertPatch(); // \Swagger\Client\Model\AlertPatch | Alert

try {
    $result = $apiInstance->updateAlertField($alert_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertApi->updateAlertField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alert_id** | **string**| ID of an alert |
 **body** | [**\Swagger\Client\Model\AlertPatch**](../Model/AlertPatch.md)| Alert |

### Return type

[**\Swagger\Client\Model\Alert**](../Model/Alert.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

