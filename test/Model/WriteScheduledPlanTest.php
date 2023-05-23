<?php
/**
 * WriteScheduledPlanTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Looker API 4.0 Reference
 *
 * API 4.0 is the current release of the Looker API. API 3.1 is deprecated.  ### Authorization  The classic method of API authorization uses Looker **API** credentials for authorization and access control. Looker admins can create API credentials on Looker's **Admin/Users** page.  API 4.0 adds additional ways to authenticate API requests, including OAuth and CORS requests.  For details, see [Looker API Authorization](https://cloud.google.com/looker/docs/r/api/authorization).   ### API Explorer  The API Explorer is a Looker-provided utility with many new and unique features for learning and using the Looker API and SDKs.  For details, see the [API Explorer documentation](https://cloud.google.com/looker/docs/r/api/explorer).   ### Looker Language SDKs  The Looker API is a RESTful system that should be usable by any programming language capable of making HTTPS requests. SDKs for a variety of programming languages are also provided to streamline using the API. Looker has an OpenSource [sdk-codegen project](https://github.com/looker-open-source/sdk-codegen) that provides several language SDKs. Language SDKs generated by `sdk-codegen` have an Authentication manager that can automatically authenticate API requests when needed.  For details on available Looker SDKs, see [Looker API Client SDKs](https://cloud.google.com/looker/docs/r/api/client_sdks).   ### API Versioning  Future releases of Looker expand the latest API version release-by-release to securely expose more and more of the core power of the Looker platform to API client applications. API endpoints marked as \"beta\" may receive breaking changes without warning (but we will try to avoid doing that). Stable (non-beta) API endpoints should not receive breaking changes in future releases.  For details, see [Looker API Versioning](https://cloud.google.com/looker/docs/r/api/versioning).   ### In This Release  API 4.0 version was introduced to make adjustments to API functions, parameters, and response types to fix bugs and inconsistencies. These changes fall outside the bounds of non-breaking additive changes we can make to the previous API 3.1.  One benefit of these type adjustments in API 4.0 is dramatically better support for strongly typed languages like TypeScript, Kotlin, Swift, Go, C#, and more.  See the [API 4.0 GA announcement](https://developers.looker.com/api/advanced-usage/version-4-ga) for more information about API 4.0.  The API Explorer can be used to [interactively compare](https://cloud.google.com/looker/docs/r/api/explorer#comparing_api_versions) the differences between API 3.1 and 4.0.   ### API and SDK Support Policies  Looker API versions and language SDKs have varying support levels. Please read the API and SDK [support policies](https://cloud.google.com/looker/docs/r/api/support-policy) for more information.
 *
 * OpenAPI spec version: 4.0.23.6
 * 
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
 * WriteScheduledPlanTest Class Doc Comment
 *
 * @category    Class
 * @description WriteScheduledPlan
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class WriteScheduledPlanTest extends \PHPUnit_Framework_TestCase
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
     * Test "WriteScheduledPlan"
     */
    public function testWriteScheduledPlan()
    {
    }

    /**
     * Test attribute "name"
     */
    public function testPropertyName()
    {
    }

    /**
     * Test attribute "user_id"
     */
    public function testPropertyUserId()
    {
    }

    /**
     * Test attribute "run_as_recipient"
     */
    public function testPropertyRunAsRecipient()
    {
    }

    /**
     * Test attribute "enabled"
     */
    public function testPropertyEnabled()
    {
    }

    /**
     * Test attribute "look_id"
     */
    public function testPropertyLookId()
    {
    }

    /**
     * Test attribute "dashboard_id"
     */
    public function testPropertyDashboardId()
    {
    }

    /**
     * Test attribute "lookml_dashboard_id"
     */
    public function testPropertyLookmlDashboardId()
    {
    }

    /**
     * Test attribute "filters_string"
     */
    public function testPropertyFiltersString()
    {
    }

    /**
     * Test attribute "dashboard_filters"
     */
    public function testPropertyDashboardFilters()
    {
    }

    /**
     * Test attribute "require_results"
     */
    public function testPropertyRequireResults()
    {
    }

    /**
     * Test attribute "require_no_results"
     */
    public function testPropertyRequireNoResults()
    {
    }

    /**
     * Test attribute "require_change"
     */
    public function testPropertyRequireChange()
    {
    }

    /**
     * Test attribute "send_all_results"
     */
    public function testPropertySendAllResults()
    {
    }

    /**
     * Test attribute "crontab"
     */
    public function testPropertyCrontab()
    {
    }

    /**
     * Test attribute "datagroup"
     */
    public function testPropertyDatagroup()
    {
    }

    /**
     * Test attribute "timezone"
     */
    public function testPropertyTimezone()
    {
    }

    /**
     * Test attribute "query_id"
     */
    public function testPropertyQueryId()
    {
    }

    /**
     * Test attribute "scheduled_plan_destination"
     */
    public function testPropertyScheduledPlanDestination()
    {
    }

    /**
     * Test attribute "run_once"
     */
    public function testPropertyRunOnce()
    {
    }

    /**
     * Test attribute "include_links"
     */
    public function testPropertyIncludeLinks()
    {
    }

    /**
     * Test attribute "custom_url_base"
     */
    public function testPropertyCustomUrlBase()
    {
    }

    /**
     * Test attribute "custom_url_params"
     */
    public function testPropertyCustomUrlParams()
    {
    }

    /**
     * Test attribute "custom_url_label"
     */
    public function testPropertyCustomUrlLabel()
    {
    }

    /**
     * Test attribute "show_custom_url"
     */
    public function testPropertyShowCustomUrl()
    {
    }

    /**
     * Test attribute "pdf_paper_size"
     */
    public function testPropertyPdfPaperSize()
    {
    }

    /**
     * Test attribute "pdf_landscape"
     */
    public function testPropertyPdfLandscape()
    {
    }

    /**
     * Test attribute "embed"
     */
    public function testPropertyEmbed()
    {
    }

    /**
     * Test attribute "color_theme"
     */
    public function testPropertyColorTheme()
    {
    }

    /**
     * Test attribute "long_tables"
     */
    public function testPropertyLongTables()
    {
    }

    /**
     * Test attribute "inline_table_width"
     */
    public function testPropertyInlineTableWidth()
    {
    }
}
