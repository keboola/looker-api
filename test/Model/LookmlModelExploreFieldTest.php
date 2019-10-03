<?php
/**
 * LookmlModelExploreFieldTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Looker API 3.1 Reference
 *
 * ### Authorization  The Looker API uses Looker **API3** credentials for authorization and access control. Looker admins can create API3 credentials on Looker's **Admin/Users** page. Pass API3 credentials to the **_/login** endpoint to obtain a temporary access_token. Include that access_token in the Authorization header of Looker API requests. For details, see [Looker API Authorization](https://looker.com/docs/r/api/authorization)  ### Client SDKs  The Looker API is a RESTful system that should be usable by any programming language capable of making HTTPS requests. Client SDKs for a variety of programming languages can be generated from the Looker API's Swagger JSON metadata to streamline use of the Looker API in your applications. A client SDK for Ruby is available as an example. For more information, see [Looker API Client SDKs](https://looker.com/docs/r/api/client_sdks)  ### Try It Out!  The 'api-docs' page served by the Looker instance includes 'Try It Out!' buttons for each API method. After logging in with API3 credentials, you can use the \"Try It Out!\" buttons to call the API directly from the documentation page to interactively explore API features and responses.  Note! With great power comes great responsibility: The \"Try It Out!\" button makes API calls to your live Looker instance. Be especially careful with destructive API operations such as `delete_user` or similar. There is no \"undo\" for API operations.  ### Versioning  Future releases of Looker will expand this API release-by-release to securely expose more and more of the core power of Looker to API client applications. API endpoints marked as \"beta\" may receive breaking changes without warning (but we will try to avoid doing that). Stable (non-beta) API endpoints should not receive breaking changes in future releases. For more information, see [Looker API Versioning](https://looker.com/docs/r/api/versioning)  ### In This Release  This **API 3.1** is in active development. This is where support for new Looker features will appear as non-breaking additions - new functions, new optional parameters on existing functions, or new optional properties in existing types. Additive changes should not impact your existing application code that calls the Looker API. Your existing application code will not be aware of any new Looker API functionality until you choose to upgrade your app to use a newer Looker API client SDK release.  The following are a few examples of noteworthy items that have changed between API 3.0 and API 3.1. For more comprehensive coverage of API changes, please see the release notes for your Looker release.  ### Examples of new things added in API 3.1 (compared to API 3.0):  * [Dashboard construction](#!/3.1/Dashboard/) APIs * [Themes](#!/3.1/Theme/) and [custom color collections](#!/3.1/ColorCollection) APIs * Create and run [SQL Runner](#!/3.1/Query/run_sql_query) queries * Create and run [merged results](#!/3.1/Query/create_merge_query) queries * Create and modify [dashboard filters](#!/3.1/Dashboard/create_dashboard_filter) * Create and modify [password requirements](#!/3.1/Auth/password_config)  ### Deprecated in API 3.0  The following functions and properties have been deprecated in API 3.0.  They continue to exist and work in API 3.0 for the next several Looker releases but they have not been carried forward to API 3.1:  * Dashboard Prefetch functions * User access_filter functions * User API 1.0 credentials functions * Space.is_root and Space.is_user_root properties. Use Space.is_shared_root and Space.is_users_root instead.  ### Semantic changes in API 3.1:  * [all_looks()](#!/3.1/Look/all_looks) no longer includes soft-deleted looks, matching [all_dashboards()](#!/3.1/Dashboard/all_dashboards) behavior. You can find soft-deleted looks using [search_looks()](#!/3.1/Look/search_looks) with the `deleted` param set to True. * [all_spaces()](#!/3.1/Space/all_spaces) no longer includes duplicate items * [search_users()](#!/3.1/User/search_users) no longer accepts Y,y,1,0,N,n for Boolean params, only \"true\" and \"false\". * For greater client and network compatibility, [render_task_results](#!/3.1/RenderTask/render_task_results) now returns HTTP status **202 Accepted** instead of HTTP status **102 Processing** * [all_running_queries()](#!/3.1/Query/all_running_queries) and [kill_query](#!/3.1/Query/kill_query) functions have moved into the [Query](#!/3.1/Query/) function group.   If you have application code which relies on the old behavior of the APIs above, you may continue using the API 3.0 functions in this Looker release. We strongly suggest you update your code to use API 3.1 analogs as soon as possible.
 *
 * OpenAPI spec version: 3.1.0
 * Contact: support@looker.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace Swagger\Client;

/**
 * LookmlModelExploreFieldTest Class Doc Comment
 *
 * @category    Class
 * @description LookmlModelExploreField
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LookmlModelExploreFieldTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "LookmlModelExploreField"
     */
    public function testLookmlModelExploreField()
    {
    }

    /**
     * Test attribute "align"
     */
    public function testPropertyAlign()
    {
    }

    /**
     * Test attribute "can_filter"
     */
    public function testPropertyCanFilter()
    {
    }

    /**
     * Test attribute "category"
     */
    public function testPropertyCategory()
    {
    }

    /**
     * Test attribute "default_filter_value"
     */
    public function testPropertyDefaultFilterValue()
    {
    }

    /**
     * Test attribute "description"
     */
    public function testPropertyDescription()
    {
    }

    /**
     * Test attribute "enumerations"
     */
    public function testPropertyEnumerations()
    {
    }

    /**
     * Test attribute "error"
     */
    public function testPropertyError()
    {
    }

    /**
     * Test attribute "field_group_label"
     */
    public function testPropertyFieldGroupLabel()
    {
    }

    /**
     * Test attribute "field_group_variant"
     */
    public function testPropertyFieldGroupVariant()
    {
    }

    /**
     * Test attribute "fill_style"
     */
    public function testPropertyFillStyle()
    {
    }

    /**
     * Test attribute "fiscal_month_offset"
     */
    public function testPropertyFiscalMonthOffset()
    {
    }

    /**
     * Test attribute "has_allowed_values"
     */
    public function testPropertyHasAllowedValues()
    {
    }

    /**
     * Test attribute "hidden"
     */
    public function testPropertyHidden()
    {
    }

    /**
     * Test attribute "is_filter"
     */
    public function testPropertyIsFilter()
    {
    }

    /**
     * Test attribute "is_fiscal"
     */
    public function testPropertyIsFiscal()
    {
    }

    /**
     * Test attribute "is_numeric"
     */
    public function testPropertyIsNumeric()
    {
    }

    /**
     * Test attribute "is_timeframe"
     */
    public function testPropertyIsTimeframe()
    {
    }

    /**
     * Test attribute "can_time_filter"
     */
    public function testPropertyCanTimeFilter()
    {
    }

    /**
     * Test attribute "time_interval"
     */
    public function testPropertyTimeInterval()
    {
    }

    /**
     * Test attribute "label"
     */
    public function testPropertyLabel()
    {
    }

    /**
     * Test attribute "label_from_parameter"
     */
    public function testPropertyLabelFromParameter()
    {
    }

    /**
     * Test attribute "label_short"
     */
    public function testPropertyLabelShort()
    {
    }

    /**
     * Test attribute "lookml_link"
     */
    public function testPropertyLookmlLink()
    {
    }

    /**
     * Test attribute "map_layer"
     */
    public function testPropertyMapLayer()
    {
    }

    /**
     * Test attribute "measure"
     */
    public function testPropertyMeasure()
    {
    }

    /**
     * Test attribute "name"
     */
    public function testPropertyName()
    {
    }

    /**
     * Test attribute "strict_value_format"
     */
    public function testPropertyStrictValueFormat()
    {
    }

    /**
     * Test attribute "parameter"
     */
    public function testPropertyParameter()
    {
    }

    /**
     * Test attribute "permanent"
     */
    public function testPropertyPermanent()
    {
    }

    /**
     * Test attribute "primary_key"
     */
    public function testPropertyPrimaryKey()
    {
    }

    /**
     * Test attribute "project_name"
     */
    public function testPropertyProjectName()
    {
    }

    /**
     * Test attribute "requires_refresh_on_sort"
     */
    public function testPropertyRequiresRefreshOnSort()
    {
    }

    /**
     * Test attribute "scope"
     */
    public function testPropertyScope()
    {
    }

    /**
     * Test attribute "sortable"
     */
    public function testPropertySortable()
    {
    }

    /**
     * Test attribute "source_file"
     */
    public function testPropertySourceFile()
    {
    }

    /**
     * Test attribute "source_file_path"
     */
    public function testPropertySourceFilePath()
    {
    }

    /**
     * Test attribute "sql"
     */
    public function testPropertySql()
    {
    }

    /**
     * Test attribute "sql_case"
     */
    public function testPropertySqlCase()
    {
    }

    /**
     * Test attribute "suggest_dimension"
     */
    public function testPropertySuggestDimension()
    {
    }

    /**
     * Test attribute "suggest_explore"
     */
    public function testPropertySuggestExplore()
    {
    }

    /**
     * Test attribute "suggestable"
     */
    public function testPropertySuggestable()
    {
    }

    /**
     * Test attribute "suggestions"
     */
    public function testPropertySuggestions()
    {
    }

    /**
     * Test attribute "tags"
     */
    public function testPropertyTags()
    {
    }

    /**
     * Test attribute "type"
     */
    public function testPropertyType()
    {
    }

    /**
     * Test attribute "user_attribute_filter_types"
     */
    public function testPropertyUserAttributeFilterTypes()
    {
    }

    /**
     * Test attribute "value_format"
     */
    public function testPropertyValueFormat()
    {
    }

    /**
     * Test attribute "view"
     */
    public function testPropertyView()
    {
    }

    /**
     * Test attribute "view_label"
     */
    public function testPropertyViewLabel()
    {
    }

    /**
     * Test attribute "dynamic"
     */
    public function testPropertyDynamic()
    {
    }

    /**
     * Test attribute "week_start_day"
     */
    public function testPropertyWeekStartDay()
    {
    }
}
