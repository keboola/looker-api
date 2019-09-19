<?php
/**
 * LookmlModelExploreField
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
 * LookmlModelExploreField Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LookmlModelExploreField implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LookmlModelExploreField';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'align' => 'string',
        'can_filter' => 'bool',
        'category' => 'string',
        'default_filter_value' => 'string',
        'description' => 'string',
        'enumerations' => '\Swagger\Client\Model\LookmlModelExploreFieldEnumeration[]',
        'error' => 'string',
        'field_group_label' => 'string',
        'field_group_variant' => 'string',
        'fill_style' => 'string',
        'fiscal_month_offset' => 'int',
        'has_allowed_values' => 'bool',
        'hidden' => 'bool',
        'is_filter' => 'bool',
        'is_fiscal' => 'bool',
        'is_numeric' => 'bool',
        'is_timeframe' => 'bool',
        'can_time_filter' => 'bool',
        'time_interval' => '\Swagger\Client\Model\LookmlModelExploreFieldTimeInterval',
        'label' => 'string',
        'label_from_parameter' => 'string',
        'label_short' => 'string',
        'lookml_link' => 'string',
        'map_layer' => '\Swagger\Client\Model\LookmlModelExploreFieldMapLayer',
        'measure' => 'bool',
        'name' => 'string',
        'strict_value_format' => 'bool',
        'parameter' => 'bool',
        'permanent' => 'bool',
        'primary_key' => 'bool',
        'project_name' => 'string',
        'requires_refresh_on_sort' => 'bool',
        'scope' => 'string',
        'sortable' => 'bool',
        'source_file' => 'string',
        'source_file_path' => 'string',
        'sql' => 'string',
        'sql_case' => '\Swagger\Client\Model\LookmlModelExploreFieldSqlCase[]',
        'suggest_dimension' => 'string',
        'suggest_explore' => 'string',
        'suggestable' => 'bool',
        'suggestions' => 'string[]',
        'tags' => 'string[]',
        'type' => 'string',
        'user_attribute_filter_types' => 'string[]',
        'value_format' => 'string',
        'view' => 'string',
        'view_label' => 'string',
        'dynamic' => 'bool',
        'week_start_day' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'align' => null,
        'can_filter' => null,
        'category' => null,
        'default_filter_value' => null,
        'description' => null,
        'enumerations' => null,
        'error' => null,
        'field_group_label' => null,
        'field_group_variant' => null,
        'fill_style' => null,
        'fiscal_month_offset' => 'int64',
        'has_allowed_values' => null,
        'hidden' => null,
        'is_filter' => null,
        'is_fiscal' => null,
        'is_numeric' => null,
        'is_timeframe' => null,
        'can_time_filter' => null,
        'time_interval' => null,
        'label' => null,
        'label_from_parameter' => null,
        'label_short' => null,
        'lookml_link' => null,
        'map_layer' => null,
        'measure' => null,
        'name' => null,
        'strict_value_format' => null,
        'parameter' => null,
        'permanent' => null,
        'primary_key' => null,
        'project_name' => null,
        'requires_refresh_on_sort' => null,
        'scope' => null,
        'sortable' => null,
        'source_file' => null,
        'source_file_path' => null,
        'sql' => null,
        'sql_case' => null,
        'suggest_dimension' => null,
        'suggest_explore' => null,
        'suggestable' => null,
        'suggestions' => null,
        'tags' => null,
        'type' => null,
        'user_attribute_filter_types' => null,
        'value_format' => null,
        'view' => null,
        'view_label' => null,
        'dynamic' => null,
        'week_start_day' => null
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
        'align' => 'align',
        'can_filter' => 'can_filter',
        'category' => 'category',
        'default_filter_value' => 'default_filter_value',
        'description' => 'description',
        'enumerations' => 'enumerations',
        'error' => 'error',
        'field_group_label' => 'field_group_label',
        'field_group_variant' => 'field_group_variant',
        'fill_style' => 'fill_style',
        'fiscal_month_offset' => 'fiscal_month_offset',
        'has_allowed_values' => 'has_allowed_values',
        'hidden' => 'hidden',
        'is_filter' => 'is_filter',
        'is_fiscal' => 'is_fiscal',
        'is_numeric' => 'is_numeric',
        'is_timeframe' => 'is_timeframe',
        'can_time_filter' => 'can_time_filter',
        'time_interval' => 'time_interval',
        'label' => 'label',
        'label_from_parameter' => 'label_from_parameter',
        'label_short' => 'label_short',
        'lookml_link' => 'lookml_link',
        'map_layer' => 'map_layer',
        'measure' => 'measure',
        'name' => 'name',
        'strict_value_format' => 'strict_value_format',
        'parameter' => 'parameter',
        'permanent' => 'permanent',
        'primary_key' => 'primary_key',
        'project_name' => 'project_name',
        'requires_refresh_on_sort' => 'requires_refresh_on_sort',
        'scope' => 'scope',
        'sortable' => 'sortable',
        'source_file' => 'source_file',
        'source_file_path' => 'source_file_path',
        'sql' => 'sql',
        'sql_case' => 'sql_case',
        'suggest_dimension' => 'suggest_dimension',
        'suggest_explore' => 'suggest_explore',
        'suggestable' => 'suggestable',
        'suggestions' => 'suggestions',
        'tags' => 'tags',
        'type' => 'type',
        'user_attribute_filter_types' => 'user_attribute_filter_types',
        'value_format' => 'value_format',
        'view' => 'view',
        'view_label' => 'view_label',
        'dynamic' => 'dynamic',
        'week_start_day' => 'week_start_day'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'align' => 'setAlign',
        'can_filter' => 'setCanFilter',
        'category' => 'setCategory',
        'default_filter_value' => 'setDefaultFilterValue',
        'description' => 'setDescription',
        'enumerations' => 'setEnumerations',
        'error' => 'setError',
        'field_group_label' => 'setFieldGroupLabel',
        'field_group_variant' => 'setFieldGroupVariant',
        'fill_style' => 'setFillStyle',
        'fiscal_month_offset' => 'setFiscalMonthOffset',
        'has_allowed_values' => 'setHasAllowedValues',
        'hidden' => 'setHidden',
        'is_filter' => 'setIsFilter',
        'is_fiscal' => 'setIsFiscal',
        'is_numeric' => 'setIsNumeric',
        'is_timeframe' => 'setIsTimeframe',
        'can_time_filter' => 'setCanTimeFilter',
        'time_interval' => 'setTimeInterval',
        'label' => 'setLabel',
        'label_from_parameter' => 'setLabelFromParameter',
        'label_short' => 'setLabelShort',
        'lookml_link' => 'setLookmlLink',
        'map_layer' => 'setMapLayer',
        'measure' => 'setMeasure',
        'name' => 'setName',
        'strict_value_format' => 'setStrictValueFormat',
        'parameter' => 'setParameter',
        'permanent' => 'setPermanent',
        'primary_key' => 'setPrimaryKey',
        'project_name' => 'setProjectName',
        'requires_refresh_on_sort' => 'setRequiresRefreshOnSort',
        'scope' => 'setScope',
        'sortable' => 'setSortable',
        'source_file' => 'setSourceFile',
        'source_file_path' => 'setSourceFilePath',
        'sql' => 'setSql',
        'sql_case' => 'setSqlCase',
        'suggest_dimension' => 'setSuggestDimension',
        'suggest_explore' => 'setSuggestExplore',
        'suggestable' => 'setSuggestable',
        'suggestions' => 'setSuggestions',
        'tags' => 'setTags',
        'type' => 'setType',
        'user_attribute_filter_types' => 'setUserAttributeFilterTypes',
        'value_format' => 'setValueFormat',
        'view' => 'setView',
        'view_label' => 'setViewLabel',
        'dynamic' => 'setDynamic',
        'week_start_day' => 'setWeekStartDay'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'align' => 'getAlign',
        'can_filter' => 'getCanFilter',
        'category' => 'getCategory',
        'default_filter_value' => 'getDefaultFilterValue',
        'description' => 'getDescription',
        'enumerations' => 'getEnumerations',
        'error' => 'getError',
        'field_group_label' => 'getFieldGroupLabel',
        'field_group_variant' => 'getFieldGroupVariant',
        'fill_style' => 'getFillStyle',
        'fiscal_month_offset' => 'getFiscalMonthOffset',
        'has_allowed_values' => 'getHasAllowedValues',
        'hidden' => 'getHidden',
        'is_filter' => 'getIsFilter',
        'is_fiscal' => 'getIsFiscal',
        'is_numeric' => 'getIsNumeric',
        'is_timeframe' => 'getIsTimeframe',
        'can_time_filter' => 'getCanTimeFilter',
        'time_interval' => 'getTimeInterval',
        'label' => 'getLabel',
        'label_from_parameter' => 'getLabelFromParameter',
        'label_short' => 'getLabelShort',
        'lookml_link' => 'getLookmlLink',
        'map_layer' => 'getMapLayer',
        'measure' => 'getMeasure',
        'name' => 'getName',
        'strict_value_format' => 'getStrictValueFormat',
        'parameter' => 'getParameter',
        'permanent' => 'getPermanent',
        'primary_key' => 'getPrimaryKey',
        'project_name' => 'getProjectName',
        'requires_refresh_on_sort' => 'getRequiresRefreshOnSort',
        'scope' => 'getScope',
        'sortable' => 'getSortable',
        'source_file' => 'getSourceFile',
        'source_file_path' => 'getSourceFilePath',
        'sql' => 'getSql',
        'sql_case' => 'getSqlCase',
        'suggest_dimension' => 'getSuggestDimension',
        'suggest_explore' => 'getSuggestExplore',
        'suggestable' => 'getSuggestable',
        'suggestions' => 'getSuggestions',
        'tags' => 'getTags',
        'type' => 'getType',
        'user_attribute_filter_types' => 'getUserAttributeFilterTypes',
        'value_format' => 'getValueFormat',
        'view' => 'getView',
        'view_label' => 'getViewLabel',
        'dynamic' => 'getDynamic',
        'week_start_day' => 'getWeekStartDay'
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
        $this->container['align'] = isset($data['align']) ? $data['align'] : null;
        $this->container['can_filter'] = isset($data['can_filter']) ? $data['can_filter'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['default_filter_value'] = isset($data['default_filter_value']) ? $data['default_filter_value'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enumerations'] = isset($data['enumerations']) ? $data['enumerations'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['field_group_label'] = isset($data['field_group_label']) ? $data['field_group_label'] : null;
        $this->container['field_group_variant'] = isset($data['field_group_variant']) ? $data['field_group_variant'] : null;
        $this->container['fill_style'] = isset($data['fill_style']) ? $data['fill_style'] : null;
        $this->container['fiscal_month_offset'] = isset($data['fiscal_month_offset']) ? $data['fiscal_month_offset'] : null;
        $this->container['has_allowed_values'] = isset($data['has_allowed_values']) ? $data['has_allowed_values'] : null;
        $this->container['hidden'] = isset($data['hidden']) ? $data['hidden'] : null;
        $this->container['is_filter'] = isset($data['is_filter']) ? $data['is_filter'] : null;
        $this->container['is_fiscal'] = isset($data['is_fiscal']) ? $data['is_fiscal'] : null;
        $this->container['is_numeric'] = isset($data['is_numeric']) ? $data['is_numeric'] : null;
        $this->container['is_timeframe'] = isset($data['is_timeframe']) ? $data['is_timeframe'] : null;
        $this->container['can_time_filter'] = isset($data['can_time_filter']) ? $data['can_time_filter'] : null;
        $this->container['time_interval'] = isset($data['time_interval']) ? $data['time_interval'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['label_from_parameter'] = isset($data['label_from_parameter']) ? $data['label_from_parameter'] : null;
        $this->container['label_short'] = isset($data['label_short']) ? $data['label_short'] : null;
        $this->container['lookml_link'] = isset($data['lookml_link']) ? $data['lookml_link'] : null;
        $this->container['map_layer'] = isset($data['map_layer']) ? $data['map_layer'] : null;
        $this->container['measure'] = isset($data['measure']) ? $data['measure'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['strict_value_format'] = isset($data['strict_value_format']) ? $data['strict_value_format'] : null;
        $this->container['parameter'] = isset($data['parameter']) ? $data['parameter'] : null;
        $this->container['permanent'] = isset($data['permanent']) ? $data['permanent'] : null;
        $this->container['primary_key'] = isset($data['primary_key']) ? $data['primary_key'] : null;
        $this->container['project_name'] = isset($data['project_name']) ? $data['project_name'] : null;
        $this->container['requires_refresh_on_sort'] = isset($data['requires_refresh_on_sort']) ? $data['requires_refresh_on_sort'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['sortable'] = isset($data['sortable']) ? $data['sortable'] : null;
        $this->container['source_file'] = isset($data['source_file']) ? $data['source_file'] : null;
        $this->container['source_file_path'] = isset($data['source_file_path']) ? $data['source_file_path'] : null;
        $this->container['sql'] = isset($data['sql']) ? $data['sql'] : null;
        $this->container['sql_case'] = isset($data['sql_case']) ? $data['sql_case'] : null;
        $this->container['suggest_dimension'] = isset($data['suggest_dimension']) ? $data['suggest_dimension'] : null;
        $this->container['suggest_explore'] = isset($data['suggest_explore']) ? $data['suggest_explore'] : null;
        $this->container['suggestable'] = isset($data['suggestable']) ? $data['suggestable'] : null;
        $this->container['suggestions'] = isset($data['suggestions']) ? $data['suggestions'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['user_attribute_filter_types'] = isset($data['user_attribute_filter_types']) ? $data['user_attribute_filter_types'] : null;
        $this->container['value_format'] = isset($data['value_format']) ? $data['value_format'] : null;
        $this->container['view'] = isset($data['view']) ? $data['view'] : null;
        $this->container['view_label'] = isset($data['view_label']) ? $data['view_label'] : null;
        $this->container['dynamic'] = isset($data['dynamic']) ? $data['dynamic'] : null;
        $this->container['week_start_day'] = isset($data['week_start_day']) ? $data['week_start_day'] : null;
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
     * Gets align
     *
     * @return string
     */
    public function getAlign()
    {
        return $this->container['align'];
    }

    /**
     * Sets align
     *
     * @param string $align The appropriate horizontal text alignment the values of this field shoud be displayed in. Valid values are: \"left\", \"right\".
     *
     * @return $this
     */
    public function setAlign($align)
    {
        $this->container['align'] = $align;

        return $this;
    }

    /**
     * Gets can_filter
     *
     * @return bool
     */
    public function getCanFilter()
    {
        return $this->container['can_filter'];
    }

    /**
     * Sets can_filter
     *
     * @param bool $can_filter Whether it's possible to filter on this field.
     *
     * @return $this
     */
    public function setCanFilter($can_filter)
    {
        $this->container['can_filter'] = $can_filter;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category Field category Valid values are: \"parameter\", \"filter\", \"measure\", \"dimension\".
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets default_filter_value
     *
     * @return string
     */
    public function getDefaultFilterValue()
    {
        return $this->container['default_filter_value'];
    }

    /**
     * Sets default_filter_value
     *
     * @param string $default_filter_value The default value that this field uses when filtering. Null if there is no default value.
     *
     * @return $this
     */
    public function setDefaultFilterValue($default_filter_value)
    {
        $this->container['default_filter_value'] = $default_filter_value;

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
     * Gets enumerations
     *
     * @return \Swagger\Client\Model\LookmlModelExploreFieldEnumeration[]
     */
    public function getEnumerations()
    {
        return $this->container['enumerations'];
    }

    /**
     * Sets enumerations
     *
     * @param \Swagger\Client\Model\LookmlModelExploreFieldEnumeration[] $enumerations An array enumerating all the possible values that this field can contain. When null, there is no limit to the set of possible values this field can contain.
     *
     * @return $this
     */
    public function setEnumerations($enumerations)
    {
        $this->container['enumerations'] = $enumerations;

        return $this;
    }

    /**
     * Gets error
     *
     * @return string
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param string $error An error message indicating a problem with the definition of this field. If there are no errors, this will be null.
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets field_group_label
     *
     * @return string
     */
    public function getFieldGroupLabel()
    {
        return $this->container['field_group_label'];
    }

    /**
     * Sets field_group_label
     *
     * @param string $field_group_label A label creating a grouping of fields. All fields with this label should be presented together when displayed in a UI.
     *
     * @return $this
     */
    public function setFieldGroupLabel($field_group_label)
    {
        $this->container['field_group_label'] = $field_group_label;

        return $this;
    }

    /**
     * Gets field_group_variant
     *
     * @return string
     */
    public function getFieldGroupVariant()
    {
        return $this->container['field_group_variant'];
    }

    /**
     * Sets field_group_variant
     *
     * @param string $field_group_variant When presented in a field group via field_group_label, a shorter name of the field to be displayed in that context.
     *
     * @return $this
     */
    public function setFieldGroupVariant($field_group_variant)
    {
        $this->container['field_group_variant'] = $field_group_variant;

        return $this;
    }

    /**
     * Gets fill_style
     *
     * @return string
     */
    public function getFillStyle()
    {
        return $this->container['fill_style'];
    }

    /**
     * Sets fill_style
     *
     * @param string $fill_style The style of dimension fill that is possible for this field. Null if no dimension fill is possible. Valid values are: \"enumeration\", \"range\".
     *
     * @return $this
     */
    public function setFillStyle($fill_style)
    {
        $this->container['fill_style'] = $fill_style;

        return $this;
    }

    /**
     * Gets fiscal_month_offset
     *
     * @return int
     */
    public function getFiscalMonthOffset()
    {
        return $this->container['fiscal_month_offset'];
    }

    /**
     * Sets fiscal_month_offset
     *
     * @param int $fiscal_month_offset An offset (in months) from the calendar start month to the fiscal start month defined in the LookML model this field belongs to.
     *
     * @return $this
     */
    public function setFiscalMonthOffset($fiscal_month_offset)
    {
        $this->container['fiscal_month_offset'] = $fiscal_month_offset;

        return $this;
    }

    /**
     * Gets has_allowed_values
     *
     * @return bool
     */
    public function getHasAllowedValues()
    {
        return $this->container['has_allowed_values'];
    }

    /**
     * Sets has_allowed_values
     *
     * @param bool $has_allowed_values Whether this field has a set of allowed_values specified in LookML.
     *
     * @return $this
     */
    public function setHasAllowedValues($has_allowed_values)
    {
        $this->container['has_allowed_values'] = $has_allowed_values;

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
     * @param bool $hidden Whether this field should be hidden from the user interface.
     *
     * @return $this
     */
    public function setHidden($hidden)
    {
        $this->container['hidden'] = $hidden;

        return $this;
    }

    /**
     * Gets is_filter
     *
     * @return bool
     */
    public function getIsFilter()
    {
        return $this->container['is_filter'];
    }

    /**
     * Sets is_filter
     *
     * @param bool $is_filter Whether this field is a filter.
     *
     * @return $this
     */
    public function setIsFilter($is_filter)
    {
        $this->container['is_filter'] = $is_filter;

        return $this;
    }

    /**
     * Gets is_fiscal
     *
     * @return bool
     */
    public function getIsFiscal()
    {
        return $this->container['is_fiscal'];
    }

    /**
     * Sets is_fiscal
     *
     * @param bool $is_fiscal Whether this field represents a fiscal time value.
     *
     * @return $this
     */
    public function setIsFiscal($is_fiscal)
    {
        $this->container['is_fiscal'] = $is_fiscal;

        return $this;
    }

    /**
     * Gets is_numeric
     *
     * @return bool
     */
    public function getIsNumeric()
    {
        return $this->container['is_numeric'];
    }

    /**
     * Sets is_numeric
     *
     * @param bool $is_numeric Whether this field is of a type that represents a numeric value.
     *
     * @return $this
     */
    public function setIsNumeric($is_numeric)
    {
        $this->container['is_numeric'] = $is_numeric;

        return $this;
    }

    /**
     * Gets is_timeframe
     *
     * @return bool
     */
    public function getIsTimeframe()
    {
        return $this->container['is_timeframe'];
    }

    /**
     * Sets is_timeframe
     *
     * @param bool $is_timeframe Whether this field is of a type that represents a time value.
     *
     * @return $this
     */
    public function setIsTimeframe($is_timeframe)
    {
        $this->container['is_timeframe'] = $is_timeframe;

        return $this;
    }

    /**
     * Gets can_time_filter
     *
     * @return bool
     */
    public function getCanTimeFilter()
    {
        return $this->container['can_time_filter'];
    }

    /**
     * Sets can_time_filter
     *
     * @param bool $can_time_filter Whether this field can be time filtered.
     *
     * @return $this
     */
    public function setCanTimeFilter($can_time_filter)
    {
        $this->container['can_time_filter'] = $can_time_filter;

        return $this;
    }

    /**
     * Gets time_interval
     *
     * @return \Swagger\Client\Model\LookmlModelExploreFieldTimeInterval
     */
    public function getTimeInterval()
    {
        return $this->container['time_interval'];
    }

    /**
     * Sets time_interval
     *
     * @param \Swagger\Client\Model\LookmlModelExploreFieldTimeInterval $time_interval Details on the time interval this field represents, if it is_timeframe.
     *
     * @return $this
     */
    public function setTimeInterval($time_interval)
    {
        $this->container['time_interval'] = $time_interval;

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
     * @param string $label Fully-qualified human-readable label of the field.
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets label_from_parameter
     *
     * @return string
     */
    public function getLabelFromParameter()
    {
        return $this->container['label_from_parameter'];
    }

    /**
     * Sets label_from_parameter
     *
     * @param string $label_from_parameter The name of the parameter that will provide a parameterized label for this field, if available in the current context.
     *
     * @return $this
     */
    public function setLabelFromParameter($label_from_parameter)
    {
        $this->container['label_from_parameter'] = $label_from_parameter;

        return $this;
    }

    /**
     * Gets label_short
     *
     * @return string
     */
    public function getLabelShort()
    {
        return $this->container['label_short'];
    }

    /**
     * Sets label_short
     *
     * @param string $label_short The human-readable label of the field, without the view label.
     *
     * @return $this
     */
    public function setLabelShort($label_short)
    {
        $this->container['label_short'] = $label_short;

        return $this;
    }

    /**
     * Gets lookml_link
     *
     * @return string
     */
    public function getLookmlLink()
    {
        return $this->container['lookml_link'];
    }

    /**
     * Sets lookml_link
     *
     * @param string $lookml_link A URL linking to the definition of this field in the LookML IDE.
     *
     * @return $this
     */
    public function setLookmlLink($lookml_link)
    {
        $this->container['lookml_link'] = $lookml_link;

        return $this;
    }

    /**
     * Gets map_layer
     *
     * @return \Swagger\Client\Model\LookmlModelExploreFieldMapLayer
     */
    public function getMapLayer()
    {
        return $this->container['map_layer'];
    }

    /**
     * Sets map_layer
     *
     * @param \Swagger\Client\Model\LookmlModelExploreFieldMapLayer $map_layer If applicable, a map layer this field is associated with.
     *
     * @return $this
     */
    public function setMapLayer($map_layer)
    {
        $this->container['map_layer'] = $map_layer;

        return $this;
    }

    /**
     * Gets measure
     *
     * @return bool
     */
    public function getMeasure()
    {
        return $this->container['measure'];
    }

    /**
     * Sets measure
     *
     * @param bool $measure Whether this field is a measure.
     *
     * @return $this
     */
    public function setMeasure($measure)
    {
        $this->container['measure'] = $measure;

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
     * @param string $name Fully-qualified name of the field.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets strict_value_format
     *
     * @return bool
     */
    public function getStrictValueFormat()
    {
        return $this->container['strict_value_format'];
    }

    /**
     * Sets strict_value_format
     *
     * @param bool $strict_value_format If yes, the field will not be localized with the user attribute number_format. Defaults to no
     *
     * @return $this
     */
    public function setStrictValueFormat($strict_value_format)
    {
        $this->container['strict_value_format'] = $strict_value_format;

        return $this;
    }

    /**
     * Gets parameter
     *
     * @return bool
     */
    public function getParameter()
    {
        return $this->container['parameter'];
    }

    /**
     * Sets parameter
     *
     * @param bool $parameter Whether this field is a parameter.
     *
     * @return $this
     */
    public function setParameter($parameter)
    {
        $this->container['parameter'] = $parameter;

        return $this;
    }

    /**
     * Gets permanent
     *
     * @return bool
     */
    public function getPermanent()
    {
        return $this->container['permanent'];
    }

    /**
     * Sets permanent
     *
     * @param bool $permanent Whether this field can be removed from a query.
     *
     * @return $this
     */
    public function setPermanent($permanent)
    {
        $this->container['permanent'] = $permanent;

        return $this;
    }

    /**
     * Gets primary_key
     *
     * @return bool
     */
    public function getPrimaryKey()
    {
        return $this->container['primary_key'];
    }

    /**
     * Sets primary_key
     *
     * @param bool $primary_key Whether or not the field represents a primary key.
     *
     * @return $this
     */
    public function setPrimaryKey($primary_key)
    {
        $this->container['primary_key'] = $primary_key;

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
     * @param string $project_name The name of the project this field is defined in.
     *
     * @return $this
     */
    public function setProjectName($project_name)
    {
        $this->container['project_name'] = $project_name;

        return $this;
    }

    /**
     * Gets requires_refresh_on_sort
     *
     * @return bool
     */
    public function getRequiresRefreshOnSort()
    {
        return $this->container['requires_refresh_on_sort'];
    }

    /**
     * Sets requires_refresh_on_sort
     *
     * @param bool $requires_refresh_on_sort When true, it's not possible to re-sort this field's values without re-running the SQL query, due to database logic that affects the sort.
     *
     * @return $this
     */
    public function setRequiresRefreshOnSort($requires_refresh_on_sort)
    {
        $this->container['requires_refresh_on_sort'] = $requires_refresh_on_sort;

        return $this;
    }

    /**
     * Gets scope
     *
     * @return string
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param string $scope The LookML scope this field belongs to. The scope is typically the field's view.
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets sortable
     *
     * @return bool
     */
    public function getSortable()
    {
        return $this->container['sortable'];
    }

    /**
     * Sets sortable
     *
     * @param bool $sortable Whether this field can be sorted.
     *
     * @return $this
     */
    public function setSortable($sortable)
    {
        $this->container['sortable'] = $sortable;

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
     * @param string $source_file The path portion of source_file_path.
     *
     * @return $this
     */
    public function setSourceFile($source_file)
    {
        $this->container['source_file'] = $source_file;

        return $this;
    }

    /**
     * Gets source_file_path
     *
     * @return string
     */
    public function getSourceFilePath()
    {
        return $this->container['source_file_path'];
    }

    /**
     * Sets source_file_path
     *
     * @param string $source_file_path The fully-qualified path of the project file this field is defined in.
     *
     * @return $this
     */
    public function setSourceFilePath($source_file_path)
    {
        $this->container['source_file_path'] = $source_file_path;

        return $this;
    }

    /**
     * Gets sql
     *
     * @return string
     */
    public function getSql()
    {
        return $this->container['sql'];
    }

    /**
     * Sets sql
     *
     * @param string $sql SQL expression as defined in the LookML model. The SQL syntax shown here is a representation intended for auditability, and is not neccessarily an exact match for what will ultimately be run in the database. It may contain special LookML syntax or annotations that are not valid SQL. This will be null if the current user does not have the see_lookml permission for the field's model.
     *
     * @return $this
     */
    public function setSql($sql)
    {
        $this->container['sql'] = $sql;

        return $this;
    }

    /**
     * Gets sql_case
     *
     * @return \Swagger\Client\Model\LookmlModelExploreFieldSqlCase[]
     */
    public function getSqlCase()
    {
        return $this->container['sql_case'];
    }

    /**
     * Sets sql_case
     *
     * @param \Swagger\Client\Model\LookmlModelExploreFieldSqlCase[] $sql_case An array of conditions and values that make up a SQL Case expression, as defined in the LookML model. The SQL syntax shown here is a representation intended for auditability, and is not neccessarily an exact match for what will ultimately be run in the database. It may contain special LookML syntax or annotations that are not valid SQL. This will be null if the current user does not have the see_lookml permission for the field's model.
     *
     * @return $this
     */
    public function setSqlCase($sql_case)
    {
        $this->container['sql_case'] = $sql_case;

        return $this;
    }

    /**
     * Gets suggest_dimension
     *
     * @return string
     */
    public function getSuggestDimension()
    {
        return $this->container['suggest_dimension'];
    }

    /**
     * Sets suggest_dimension
     *
     * @param string $suggest_dimension The name of the dimension to base suggest queries from.
     *
     * @return $this
     */
    public function setSuggestDimension($suggest_dimension)
    {
        $this->container['suggest_dimension'] = $suggest_dimension;

        return $this;
    }

    /**
     * Gets suggest_explore
     *
     * @return string
     */
    public function getSuggestExplore()
    {
        return $this->container['suggest_explore'];
    }

    /**
     * Sets suggest_explore
     *
     * @param string $suggest_explore The name of the explore to base suggest queries from.
     *
     * @return $this
     */
    public function setSuggestExplore($suggest_explore)
    {
        $this->container['suggest_explore'] = $suggest_explore;

        return $this;
    }

    /**
     * Gets suggestable
     *
     * @return bool
     */
    public function getSuggestable()
    {
        return $this->container['suggestable'];
    }

    /**
     * Sets suggestable
     *
     * @param bool $suggestable Whether or not suggestions are possible for this field.
     *
     * @return $this
     */
    public function setSuggestable($suggestable)
    {
        $this->container['suggestable'] = $suggestable;

        return $this;
    }

    /**
     * Gets suggestions
     *
     * @return string[]
     */
    public function getSuggestions()
    {
        return $this->container['suggestions'];
    }

    /**
     * Sets suggestions
     *
     * @param string[] $suggestions If available, a list of suggestions for this field. For most fields, a suggest query is a more appropriate way to get an up-to-date list of suggestions. Or use enumerations to list all the possible values.
     *
     * @return $this
     */
    public function setSuggestions($suggestions)
    {
        $this->container['suggestions'] = $suggestions;

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
     * @param string[] $tags An array of arbitrary string tags provided in the model for this field.
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The LookML type of the field.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets user_attribute_filter_types
     *
     * @return string[]
     */
    public function getUserAttributeFilterTypes()
    {
        return $this->container['user_attribute_filter_types'];
    }

    /**
     * Sets user_attribute_filter_types
     *
     * @param string[] $user_attribute_filter_types An array of user attribute types that are allowed to be used in filters on this field. Valid values are: \"advanced_filter_string\", \"advanced_filter_number\", \"advanced_filter_datetime\", \"string\", \"number\", \"datetime\", \"yesno\", \"zipcode\".
     *
     * @return $this
     */
    public function setUserAttributeFilterTypes($user_attribute_filter_types)
    {
        $this->container['user_attribute_filter_types'] = $user_attribute_filter_types;

        return $this;
    }

    /**
     * Gets value_format
     *
     * @return string
     */
    public function getValueFormat()
    {
        return $this->container['value_format'];
    }

    /**
     * Sets value_format
     *
     * @param string $value_format If specified, the LookML value format string for formatting values of this field.
     *
     * @return $this
     */
    public function setValueFormat($value_format)
    {
        $this->container['value_format'] = $value_format;

        return $this;
    }

    /**
     * Gets view
     *
     * @return string
     */
    public function getView()
    {
        return $this->container['view'];
    }

    /**
     * Sets view
     *
     * @param string $view The name of the view this field belongs to.
     *
     * @return $this
     */
    public function setView($view)
    {
        $this->container['view'] = $view;

        return $this;
    }

    /**
     * Gets view_label
     *
     * @return string
     */
    public function getViewLabel()
    {
        return $this->container['view_label'];
    }

    /**
     * Sets view_label
     *
     * @param string $view_label The human-readable label of the view the field belongs to.
     *
     * @return $this
     */
    public function setViewLabel($view_label)
    {
        $this->container['view_label'] = $view_label;

        return $this;
    }

    /**
     * Gets dynamic
     *
     * @return bool
     */
    public function getDynamic()
    {
        return $this->container['dynamic'];
    }

    /**
     * Sets dynamic
     *
     * @param bool $dynamic Whether this field was specified in \"dynamic_fields\" and is not part of the model.
     *
     * @return $this
     */
    public function setDynamic($dynamic)
    {
        $this->container['dynamic'] = $dynamic;

        return $this;
    }

    /**
     * Gets week_start_day
     *
     * @return string
     */
    public function getWeekStartDay()
    {
        return $this->container['week_start_day'];
    }

    /**
     * Sets week_start_day
     *
     * @param string $week_start_day The name of the starting day of the week. Valid values are: \"monday\", \"tuesday\", \"wednesday\", \"thursday\", \"friday\", \"saturday\", \"sunday\".
     *
     * @return $this
     */
    public function setWeekStartDay($week_start_day)
    {
        $this->container['week_start_day'] = $week_start_day;

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


