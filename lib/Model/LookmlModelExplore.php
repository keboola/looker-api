<?php
/**
 * LookmlModelExplore
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
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * LookmlModelExplore Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LookmlModelExplore implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LookmlModelExplore';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'description' => 'string',
        'label' => 'string',
        'scopes' => 'string[]',
        'can_total' => 'bool',
        'can_save' => 'bool',
        'can_explain' => 'bool',
        'can_pivot_in_db' => 'bool',
        'can_subtotal' => 'bool',
        'has_timezone_support' => 'bool',
        'supports_cost_estimate' => 'bool',
        'connection_name' => 'string',
        'null_sort_treatment' => 'string',
        'files' => 'string[]',
        'source_file' => 'string',
        'project_name' => 'string',
        'model_name' => 'string',
        'view_name' => 'string',
        'hidden' => 'bool',
        'sql_table_name' => 'string',
        'access_filter_fields' => 'string[]',
        'access_filters' => '\Swagger\Client\Model\LookmlModelExploreAccessFilter[]',
        'aliases' => '\Swagger\Client\Model\LookmlModelExploreAlias[]',
        'always_filter' => '\Swagger\Client\Model\LookmlModelExploreAlwaysFilter[]',
        'conditionally_filter' => '\Swagger\Client\Model\LookmlModelExploreConditionallyFilter[]',
        'index_fields' => 'string[]',
        'sets' => '\Swagger\Client\Model\LookmlModelExploreSet[]',
        'tags' => 'string[]',
        'errors' => '\Swagger\Client\Model\LookmlModelExploreError[]',
        'fields' => '\Swagger\Client\Model\LookmlModelExploreFieldset',
        'joins' => '\Swagger\Client\Model\LookmlModelExploreJoins[]',
        'group_label' => 'string',
        'supported_measure_types' => '\Swagger\Client\Model\LookmlModelExploreSupportedMeasureType[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'label' => null,
        'scopes' => null,
        'can_total' => null,
        'can_save' => null,
        'can_explain' => null,
        'can_pivot_in_db' => null,
        'can_subtotal' => null,
        'has_timezone_support' => null,
        'supports_cost_estimate' => null,
        'connection_name' => null,
        'null_sort_treatment' => null,
        'files' => null,
        'source_file' => null,
        'project_name' => null,
        'model_name' => null,
        'view_name' => null,
        'hidden' => null,
        'sql_table_name' => null,
        'access_filter_fields' => null,
        'access_filters' => null,
        'aliases' => null,
        'always_filter' => null,
        'conditionally_filter' => null,
        'index_fields' => null,
        'sets' => null,
        'tags' => null,
        'errors' => null,
        'fields' => null,
        'joins' => null,
        'group_label' => null,
        'supported_measure_types' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'description' => 'description',
        'label' => 'label',
        'scopes' => 'scopes',
        'can_total' => 'can_total',
        'can_save' => 'can_save',
        'can_explain' => 'can_explain',
        'can_pivot_in_db' => 'can_pivot_in_db',
        'can_subtotal' => 'can_subtotal',
        'has_timezone_support' => 'has_timezone_support',
        'supports_cost_estimate' => 'supports_cost_estimate',
        'connection_name' => 'connection_name',
        'null_sort_treatment' => 'null_sort_treatment',
        'files' => 'files',
        'source_file' => 'source_file',
        'project_name' => 'project_name',
        'model_name' => 'model_name',
        'view_name' => 'view_name',
        'hidden' => 'hidden',
        'sql_table_name' => 'sql_table_name',
        'access_filter_fields' => 'access_filter_fields',
        'access_filters' => 'access_filters',
        'aliases' => 'aliases',
        'always_filter' => 'always_filter',
        'conditionally_filter' => 'conditionally_filter',
        'index_fields' => 'index_fields',
        'sets' => 'sets',
        'tags' => 'tags',
        'errors' => 'errors',
        'fields' => 'fields',
        'joins' => 'joins',
        'group_label' => 'group_label',
        'supported_measure_types' => 'supported_measure_types'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'description' => 'setDescription',
        'label' => 'setLabel',
        'scopes' => 'setScopes',
        'can_total' => 'setCanTotal',
        'can_save' => 'setCanSave',
        'can_explain' => 'setCanExplain',
        'can_pivot_in_db' => 'setCanPivotInDb',
        'can_subtotal' => 'setCanSubtotal',
        'has_timezone_support' => 'setHasTimezoneSupport',
        'supports_cost_estimate' => 'setSupportsCostEstimate',
        'connection_name' => 'setConnectionName',
        'null_sort_treatment' => 'setNullSortTreatment',
        'files' => 'setFiles',
        'source_file' => 'setSourceFile',
        'project_name' => 'setProjectName',
        'model_name' => 'setModelName',
        'view_name' => 'setViewName',
        'hidden' => 'setHidden',
        'sql_table_name' => 'setSqlTableName',
        'access_filter_fields' => 'setAccessFilterFields',
        'access_filters' => 'setAccessFilters',
        'aliases' => 'setAliases',
        'always_filter' => 'setAlwaysFilter',
        'conditionally_filter' => 'setConditionallyFilter',
        'index_fields' => 'setIndexFields',
        'sets' => 'setSets',
        'tags' => 'setTags',
        'errors' => 'setErrors',
        'fields' => 'setFields',
        'joins' => 'setJoins',
        'group_label' => 'setGroupLabel',
        'supported_measure_types' => 'setSupportedMeasureTypes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'description' => 'getDescription',
        'label' => 'getLabel',
        'scopes' => 'getScopes',
        'can_total' => 'getCanTotal',
        'can_save' => 'getCanSave',
        'can_explain' => 'getCanExplain',
        'can_pivot_in_db' => 'getCanPivotInDb',
        'can_subtotal' => 'getCanSubtotal',
        'has_timezone_support' => 'getHasTimezoneSupport',
        'supports_cost_estimate' => 'getSupportsCostEstimate',
        'connection_name' => 'getConnectionName',
        'null_sort_treatment' => 'getNullSortTreatment',
        'files' => 'getFiles',
        'source_file' => 'getSourceFile',
        'project_name' => 'getProjectName',
        'model_name' => 'getModelName',
        'view_name' => 'getViewName',
        'hidden' => 'getHidden',
        'sql_table_name' => 'getSqlTableName',
        'access_filter_fields' => 'getAccessFilterFields',
        'access_filters' => 'getAccessFilters',
        'aliases' => 'getAliases',
        'always_filter' => 'getAlwaysFilter',
        'conditionally_filter' => 'getConditionallyFilter',
        'index_fields' => 'getIndexFields',
        'sets' => 'getSets',
        'tags' => 'getTags',
        'errors' => 'getErrors',
        'fields' => 'getFields',
        'joins' => 'getJoins',
        'group_label' => 'getGroupLabel',
        'supported_measure_types' => 'getSupportedMeasureTypes'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['scopes'] = isset($data['scopes']) ? $data['scopes'] : null;
        $this->container['can_total'] = isset($data['can_total']) ? $data['can_total'] : null;
        $this->container['can_save'] = isset($data['can_save']) ? $data['can_save'] : null;
        $this->container['can_explain'] = isset($data['can_explain']) ? $data['can_explain'] : null;
        $this->container['can_pivot_in_db'] = isset($data['can_pivot_in_db']) ? $data['can_pivot_in_db'] : null;
        $this->container['can_subtotal'] = isset($data['can_subtotal']) ? $data['can_subtotal'] : null;
        $this->container['has_timezone_support'] = isset($data['has_timezone_support']) ? $data['has_timezone_support'] : null;
        $this->container['supports_cost_estimate'] = isset($data['supports_cost_estimate']) ? $data['supports_cost_estimate'] : null;
        $this->container['connection_name'] = isset($data['connection_name']) ? $data['connection_name'] : null;
        $this->container['null_sort_treatment'] = isset($data['null_sort_treatment']) ? $data['null_sort_treatment'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['source_file'] = isset($data['source_file']) ? $data['source_file'] : null;
        $this->container['project_name'] = isset($data['project_name']) ? $data['project_name'] : null;
        $this->container['model_name'] = isset($data['model_name']) ? $data['model_name'] : null;
        $this->container['view_name'] = isset($data['view_name']) ? $data['view_name'] : null;
        $this->container['hidden'] = isset($data['hidden']) ? $data['hidden'] : null;
        $this->container['sql_table_name'] = isset($data['sql_table_name']) ? $data['sql_table_name'] : null;
        $this->container['access_filter_fields'] = isset($data['access_filter_fields']) ? $data['access_filter_fields'] : null;
        $this->container['access_filters'] = isset($data['access_filters']) ? $data['access_filters'] : null;
        $this->container['aliases'] = isset($data['aliases']) ? $data['aliases'] : null;
        $this->container['always_filter'] = isset($data['always_filter']) ? $data['always_filter'] : null;
        $this->container['conditionally_filter'] = isset($data['conditionally_filter']) ? $data['conditionally_filter'] : null;
        $this->container['index_fields'] = isset($data['index_fields']) ? $data['index_fields'] : null;
        $this->container['sets'] = isset($data['sets']) ? $data['sets'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['joins'] = isset($data['joins']) ? $data['joins'] : null;
        $this->container['group_label'] = isset($data['group_label']) ? $data['group_label'] : null;
        $this->container['supported_measure_types'] = isset($data['supported_measure_types']) ? $data['supported_measure_types'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Fully qualified name model plus explore name
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Explore name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label Label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets scopes
     *
     * @return string[]
     */
    public function getScopes()
    {
        return $this->container['scopes'];
    }

    /**
     * Sets scopes
     *
     * @param string[] $scopes Scopes
     *
     * @return $this
     */
    public function setScopes($scopes)
    {
        $this->container['scopes'] = $scopes;

        return $this;
    }

    /**
     * Gets can_total
     *
     * @return bool
     */
    public function getCanTotal()
    {
        return $this->container['can_total'];
    }

    /**
     * Sets can_total
     *
     * @param bool $can_total Can Total
     *
     * @return $this
     */
    public function setCanTotal($can_total)
    {
        $this->container['can_total'] = $can_total;

        return $this;
    }

    /**
     * Gets can_save
     *
     * @return bool
     */
    public function getCanSave()
    {
        return $this->container['can_save'];
    }

    /**
     * Sets can_save
     *
     * @param bool $can_save Can Save
     *
     * @return $this
     */
    public function setCanSave($can_save)
    {
        $this->container['can_save'] = $can_save;

        return $this;
    }

    /**
     * Gets can_explain
     *
     * @return bool
     */
    public function getCanExplain()
    {
        return $this->container['can_explain'];
    }

    /**
     * Sets can_explain
     *
     * @param bool $can_explain Can Explain
     *
     * @return $this
     */
    public function setCanExplain($can_explain)
    {
        $this->container['can_explain'] = $can_explain;

        return $this;
    }

    /**
     * Gets can_pivot_in_db
     *
     * @return bool
     */
    public function getCanPivotInDb()
    {
        return $this->container['can_pivot_in_db'];
    }

    /**
     * Sets can_pivot_in_db
     *
     * @param bool $can_pivot_in_db Can pivot in the DB
     *
     * @return $this
     */
    public function setCanPivotInDb($can_pivot_in_db)
    {
        $this->container['can_pivot_in_db'] = $can_pivot_in_db;

        return $this;
    }

    /**
     * Gets can_subtotal
     *
     * @return bool
     */
    public function getCanSubtotal()
    {
        return $this->container['can_subtotal'];
    }

    /**
     * Sets can_subtotal
     *
     * @param bool $can_subtotal Can use subtotals
     *
     * @return $this
     */
    public function setCanSubtotal($can_subtotal)
    {
        $this->container['can_subtotal'] = $can_subtotal;

        return $this;
    }

    /**
     * Gets has_timezone_support
     *
     * @return bool
     */
    public function getHasTimezoneSupport()
    {
        return $this->container['has_timezone_support'];
    }

    /**
     * Sets has_timezone_support
     *
     * @param bool $has_timezone_support Has timezone support
     *
     * @return $this
     */
    public function setHasTimezoneSupport($has_timezone_support)
    {
        $this->container['has_timezone_support'] = $has_timezone_support;

        return $this;
    }

    /**
     * Gets supports_cost_estimate
     *
     * @return bool
     */
    public function getSupportsCostEstimate()
    {
        return $this->container['supports_cost_estimate'];
    }

    /**
     * Sets supports_cost_estimate
     *
     * @param bool $supports_cost_estimate Cost estimates supported
     *
     * @return $this
     */
    public function setSupportsCostEstimate($supports_cost_estimate)
    {
        $this->container['supports_cost_estimate'] = $supports_cost_estimate;

        return $this;
    }

    /**
     * Gets connection_name
     *
     * @return string
     */
    public function getConnectionName()
    {
        return $this->container['connection_name'];
    }

    /**
     * Sets connection_name
     *
     * @param string $connection_name Connection name
     *
     * @return $this
     */
    public function setConnectionName($connection_name)
    {
        $this->container['connection_name'] = $connection_name;

        return $this;
    }

    /**
     * Gets null_sort_treatment
     *
     * @return string
     */
    public function getNullSortTreatment()
    {
        return $this->container['null_sort_treatment'];
    }

    /**
     * Sets null_sort_treatment
     *
     * @param string $null_sort_treatment How nulls are sorted, possible values are \"low\", \"high\", \"first\" and \"last\"
     *
     * @return $this
     */
    public function setNullSortTreatment($null_sort_treatment)
    {
        $this->container['null_sort_treatment'] = $null_sort_treatment;

        return $this;
    }

    /**
     * Gets files
     *
     * @return string[]
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     * @param string[] $files List of model source files
     *
     * @return $this
     */
    public function setFiles($files)
    {
        $this->container['files'] = $files;

        return $this;
    }

    /**
     * Gets source_file
     *
     * @return string
     */
    public function getSourceFile()
    {
        return $this->container['source_file'];
    }

    /**
     * Sets source_file
     *
     * @param string $source_file Primary source_file file
     *
     * @return $this
     */
    public function setSourceFile($source_file)
    {
        $this->container['source_file'] = $source_file;

        return $this;
    }

    /**
     * Gets project_name
     *
     * @return string
     */
    public function getProjectName()
    {
        return $this->container['project_name'];
    }

    /**
     * Sets project_name
     *
     * @param string $project_name Name of project
     *
     * @return $this
     */
    public function setProjectName($project_name)
    {
        $this->container['project_name'] = $project_name;

        return $this;
    }

    /**
     * Gets model_name
     *
     * @return string
     */
    public function getModelName()
    {
        return $this->container['model_name'];
    }

    /**
     * Sets model_name
     *
     * @param string $model_name Name of model
     *
     * @return $this
     */
    public function setModelName($model_name)
    {
        $this->container['model_name'] = $model_name;

        return $this;
    }

    /**
     * Gets view_name
     *
     * @return string
     */
    public function getViewName()
    {
        return $this->container['view_name'];
    }

    /**
     * Sets view_name
     *
     * @param string $view_name Name of view
     *
     * @return $this
     */
    public function setViewName($view_name)
    {
        $this->container['view_name'] = $view_name;

        return $this;
    }

    /**
     * Gets hidden
     *
     * @return bool
     */
    public function getHidden()
    {
        return $this->container['hidden'];
    }

    /**
     * Sets hidden
     *
     * @param bool $hidden Is hidden
     *
     * @return $this
     */
    public function setHidden($hidden)
    {
        $this->container['hidden'] = $hidden;

        return $this;
    }

    /**
     * Gets sql_table_name
     *
     * @return string
     */
    public function getSqlTableName()
    {
        return $this->container['sql_table_name'];
    }

    /**
     * Sets sql_table_name
     *
     * @param string $sql_table_name A sql_table_name expression that defines what sql table the view/explore maps onto. Example: \"prod_orders2 AS orders\" in a view named orders.
     *
     * @return $this
     */
    public function setSqlTableName($sql_table_name)
    {
        $this->container['sql_table_name'] = $sql_table_name;

        return $this;
    }

    /**
     * Gets access_filter_fields
     *
     * @return string[]
     */
    public function getAccessFilterFields()
    {
        return $this->container['access_filter_fields'];
    }

    /**
     * Sets access_filter_fields
     *
     * @param string[] $access_filter_fields (DEPRECATED) Array of access filter field names
     *
     * @return $this
     */
    public function setAccessFilterFields($access_filter_fields)
    {
        $this->container['access_filter_fields'] = $access_filter_fields;

        return $this;
    }

    /**
     * Gets access_filters
     *
     * @return \Swagger\Client\Model\LookmlModelExploreAccessFilter[]
     */
    public function getAccessFilters()
    {
        return $this->container['access_filters'];
    }

    /**
     * Sets access_filters
     *
     * @param \Swagger\Client\Model\LookmlModelExploreAccessFilter[] $access_filters Access filters
     *
     * @return $this
     */
    public function setAccessFilters($access_filters)
    {
        $this->container['access_filters'] = $access_filters;

        return $this;
    }

    /**
     * Gets aliases
     *
     * @return \Swagger\Client\Model\LookmlModelExploreAlias[]
     */
    public function getAliases()
    {
        return $this->container['aliases'];
    }

    /**
     * Sets aliases
     *
     * @param \Swagger\Client\Model\LookmlModelExploreAlias[] $aliases Aliases
     *
     * @return $this
     */
    public function setAliases($aliases)
    {
        $this->container['aliases'] = $aliases;

        return $this;
    }

    /**
     * Gets always_filter
     *
     * @return \Swagger\Client\Model\LookmlModelExploreAlwaysFilter[]
     */
    public function getAlwaysFilter()
    {
        return $this->container['always_filter'];
    }

    /**
     * Sets always_filter
     *
     * @param \Swagger\Client\Model\LookmlModelExploreAlwaysFilter[] $always_filter Always filter
     *
     * @return $this
     */
    public function setAlwaysFilter($always_filter)
    {
        $this->container['always_filter'] = $always_filter;

        return $this;
    }

    /**
     * Gets conditionally_filter
     *
     * @return \Swagger\Client\Model\LookmlModelExploreConditionallyFilter[]
     */
    public function getConditionallyFilter()
    {
        return $this->container['conditionally_filter'];
    }

    /**
     * Sets conditionally_filter
     *
     * @param \Swagger\Client\Model\LookmlModelExploreConditionallyFilter[] $conditionally_filter Conditionally filter
     *
     * @return $this
     */
    public function setConditionallyFilter($conditionally_filter)
    {
        $this->container['conditionally_filter'] = $conditionally_filter;

        return $this;
    }

    /**
     * Gets index_fields
     *
     * @return string[]
     */
    public function getIndexFields()
    {
        return $this->container['index_fields'];
    }

    /**
     * Sets index_fields
     *
     * @param string[] $index_fields Array of index fields
     *
     * @return $this
     */
    public function setIndexFields($index_fields)
    {
        $this->container['index_fields'] = $index_fields;

        return $this;
    }

    /**
     * Gets sets
     *
     * @return \Swagger\Client\Model\LookmlModelExploreSet[]
     */
    public function getSets()
    {
        return $this->container['sets'];
    }

    /**
     * Sets sets
     *
     * @param \Swagger\Client\Model\LookmlModelExploreSet[] $sets Sets
     *
     * @return $this
     */
    public function setSets($sets)
    {
        $this->container['sets'] = $sets;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[] $tags An array of arbitrary string tags provided in the model for this explore.
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return \Swagger\Client\Model\LookmlModelExploreError[]
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \Swagger\Client\Model\LookmlModelExploreError[] $errors Errors
     *
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return \Swagger\Client\Model\LookmlModelExploreFieldset
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param \Swagger\Client\Model\LookmlModelExploreFieldset $fields Fields
     *
     * @return $this
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets joins
     *
     * @return \Swagger\Client\Model\LookmlModelExploreJoins[]
     */
    public function getJoins()
    {
        return $this->container['joins'];
    }

    /**
     * Sets joins
     *
     * @param \Swagger\Client\Model\LookmlModelExploreJoins[] $joins Views joined into this explore
     *
     * @return $this
     */
    public function setJoins($joins)
    {
        $this->container['joins'] = $joins;

        return $this;
    }

    /**
     * Gets group_label
     *
     * @return string
     */
    public function getGroupLabel()
    {
        return $this->container['group_label'];
    }

    /**
     * Sets group_label
     *
     * @param string $group_label Label used to group explores in the navigation menus
     *
     * @return $this
     */
    public function setGroupLabel($group_label)
    {
        $this->container['group_label'] = $group_label;

        return $this;
    }

    /**
     * Gets supported_measure_types
     *
     * @return \Swagger\Client\Model\LookmlModelExploreSupportedMeasureType[]
     */
    public function getSupportedMeasureTypes()
    {
        return $this->container['supported_measure_types'];
    }

    /**
     * Sets supported_measure_types
     *
     * @param \Swagger\Client\Model\LookmlModelExploreSupportedMeasureType[] $supported_measure_types An array of items describing which custom measure types are supported for creating a custom measure 'baed_on' each possible dimension type.
     *
     * @return $this
     */
    public function setSupportedMeasureTypes($supported_measure_types)
    {
        $this->container['supported_measure_types'] = $supported_measure_types;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


