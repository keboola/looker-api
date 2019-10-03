<?php
/**
 * LookmlModelExploreJoins
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
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * LookmlModelExploreJoins Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LookmlModelExploreJoins implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LookmlModelExploreJoins';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'dependent_fields' => 'string[]',
        'fields' => 'string[]',
        'foreign_key' => 'string',
        'from' => 'string',
        'outer_only' => 'bool',
        'relationship' => 'string',
        'required_joins' => 'string[]',
        'sql_foreign_key' => 'string',
        'sql_on' => 'string',
        'sql_table_name' => 'string',
        'type' => 'string',
        'view_label' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'dependent_fields' => null,
        'fields' => null,
        'foreign_key' => null,
        'from' => null,
        'outer_only' => null,
        'relationship' => null,
        'required_joins' => null,
        'sql_foreign_key' => null,
        'sql_on' => null,
        'sql_table_name' => null,
        'type' => null,
        'view_label' => null
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
        'name' => 'name',
        'dependent_fields' => 'dependent_fields',
        'fields' => 'fields',
        'foreign_key' => 'foreign_key',
        'from' => 'from',
        'outer_only' => 'outer_only',
        'relationship' => 'relationship',
        'required_joins' => 'required_joins',
        'sql_foreign_key' => 'sql_foreign_key',
        'sql_on' => 'sql_on',
        'sql_table_name' => 'sql_table_name',
        'type' => 'type',
        'view_label' => 'view_label'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'dependent_fields' => 'setDependentFields',
        'fields' => 'setFields',
        'foreign_key' => 'setForeignKey',
        'from' => 'setFrom',
        'outer_only' => 'setOuterOnly',
        'relationship' => 'setRelationship',
        'required_joins' => 'setRequiredJoins',
        'sql_foreign_key' => 'setSqlForeignKey',
        'sql_on' => 'setSqlOn',
        'sql_table_name' => 'setSqlTableName',
        'type' => 'setType',
        'view_label' => 'setViewLabel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'dependent_fields' => 'getDependentFields',
        'fields' => 'getFields',
        'foreign_key' => 'getForeignKey',
        'from' => 'getFrom',
        'outer_only' => 'getOuterOnly',
        'relationship' => 'getRelationship',
        'required_joins' => 'getRequiredJoins',
        'sql_foreign_key' => 'getSqlForeignKey',
        'sql_on' => 'getSqlOn',
        'sql_table_name' => 'getSqlTableName',
        'type' => 'getType',
        'view_label' => 'getViewLabel'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['dependent_fields'] = isset($data['dependent_fields']) ? $data['dependent_fields'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['foreign_key'] = isset($data['foreign_key']) ? $data['foreign_key'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['outer_only'] = isset($data['outer_only']) ? $data['outer_only'] : null;
        $this->container['relationship'] = isset($data['relationship']) ? $data['relationship'] : null;
        $this->container['required_joins'] = isset($data['required_joins']) ? $data['required_joins'] : null;
        $this->container['sql_foreign_key'] = isset($data['sql_foreign_key']) ? $data['sql_foreign_key'] : null;
        $this->container['sql_on'] = isset($data['sql_on']) ? $data['sql_on'] : null;
        $this->container['sql_table_name'] = isset($data['sql_table_name']) ? $data['sql_table_name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['view_label'] = isset($data['view_label']) ? $data['view_label'] : null;
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
     * @param string $name Name of this join (and name of the view to join)
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets dependent_fields
     *
     * @return string[]
     */
    public function getDependentFields()
    {
        return $this->container['dependent_fields'];
    }

    /**
     * Sets dependent_fields
     *
     * @param string[] $dependent_fields Fields referenced by the join
     *
     * @return $this
     */
    public function setDependentFields($dependent_fields)
    {
        $this->container['dependent_fields'] = $dependent_fields;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return string[]
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param string[] $fields Fields of the joined view to pull into this explore
     *
     * @return $this
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets foreign_key
     *
     * @return string
     */
    public function getForeignKey()
    {
        return $this->container['foreign_key'];
    }

    /**
     * Sets foreign_key
     *
     * @param string $foreign_key Name of the dimension in this explore whose value is in the primary key of the joined view
     *
     * @return $this
     */
    public function setForeignKey($foreign_key)
    {
        $this->container['foreign_key'] = $foreign_key;

        return $this;
    }

    /**
     * Gets from
     *
     * @return string
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string $from Name of view to join
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets outer_only
     *
     * @return bool
     */
    public function getOuterOnly()
    {
        return $this->container['outer_only'];
    }

    /**
     * Sets outer_only
     *
     * @param bool $outer_only Specifies whether all queries must use an outer join
     *
     * @return $this
     */
    public function setOuterOnly($outer_only)
    {
        $this->container['outer_only'] = $outer_only;

        return $this;
    }

    /**
     * Gets relationship
     *
     * @return string
     */
    public function getRelationship()
    {
        return $this->container['relationship'];
    }

    /**
     * Sets relationship
     *
     * @param string $relationship many_to_one, one_to_one, one_to_many, many_to_many
     *
     * @return $this
     */
    public function setRelationship($relationship)
    {
        $this->container['relationship'] = $relationship;

        return $this;
    }

    /**
     * Gets required_joins
     *
     * @return string[]
     */
    public function getRequiredJoins()
    {
        return $this->container['required_joins'];
    }

    /**
     * Sets required_joins
     *
     * @param string[] $required_joins Names of joins that must always be included in SQL queries
     *
     * @return $this
     */
    public function setRequiredJoins($required_joins)
    {
        $this->container['required_joins'] = $required_joins;

        return $this;
    }

    /**
     * Gets sql_foreign_key
     *
     * @return string
     */
    public function getSqlForeignKey()
    {
        return $this->container['sql_foreign_key'];
    }

    /**
     * Sets sql_foreign_key
     *
     * @param string $sql_foreign_key SQL expression that produces a foreign key
     *
     * @return $this
     */
    public function setSqlForeignKey($sql_foreign_key)
    {
        $this->container['sql_foreign_key'] = $sql_foreign_key;

        return $this;
    }

    /**
     * Gets sql_on
     *
     * @return string
     */
    public function getSqlOn()
    {
        return $this->container['sql_on'];
    }

    /**
     * Sets sql_on
     *
     * @param string $sql_on SQL ON expression describing the join condition
     *
     * @return $this
     */
    public function setSqlOn($sql_on)
    {
        $this->container['sql_on'] = $sql_on;

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
     * @param string $sql_table_name SQL table name to join
     *
     * @return $this
     */
    public function setSqlTableName($sql_table_name)
    {
        $this->container['sql_table_name'] = $sql_table_name;

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
     * @param string $type The join type: left_outer, full_outer, inner, or cross
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
     * @param string $view_label Label to display in UI selectors
     *
     * @return $this
     */
    public function setViewLabel($view_label)
    {
        $this->container['view_label'] = $view_label;

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


