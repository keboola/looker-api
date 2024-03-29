<?php
/**
 * MergeQuery
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
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * MergeQuery Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MergeQuery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MergeQuery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'can' => 'map[string,bool]',
        'column_limit' => 'string',
        'dynamic_fields' => 'string',
        'id' => 'string',
        'pivots' => 'string[]',
        'result_maker_id' => 'string',
        'sorts' => 'string[]',
        'source_queries' => '\Swagger\Client\Model\MergeQuerySourceQuery[]',
        'total' => 'bool',
        'vis_config' => 'map[string,string]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'can' => null,
        'column_limit' => null,
        'dynamic_fields' => null,
        'id' => null,
        'pivots' => null,
        'result_maker_id' => null,
        'sorts' => null,
        'source_queries' => null,
        'total' => null,
        'vis_config' => null
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
        'can' => 'can',
        'column_limit' => 'column_limit',
        'dynamic_fields' => 'dynamic_fields',
        'id' => 'id',
        'pivots' => 'pivots',
        'result_maker_id' => 'result_maker_id',
        'sorts' => 'sorts',
        'source_queries' => 'source_queries',
        'total' => 'total',
        'vis_config' => 'vis_config'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'can' => 'setCan',
        'column_limit' => 'setColumnLimit',
        'dynamic_fields' => 'setDynamicFields',
        'id' => 'setId',
        'pivots' => 'setPivots',
        'result_maker_id' => 'setResultMakerId',
        'sorts' => 'setSorts',
        'source_queries' => 'setSourceQueries',
        'total' => 'setTotal',
        'vis_config' => 'setVisConfig'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'can' => 'getCan',
        'column_limit' => 'getColumnLimit',
        'dynamic_fields' => 'getDynamicFields',
        'id' => 'getId',
        'pivots' => 'getPivots',
        'result_maker_id' => 'getResultMakerId',
        'sorts' => 'getSorts',
        'source_queries' => 'getSourceQueries',
        'total' => 'getTotal',
        'vis_config' => 'getVisConfig'
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
        $this->container['can'] = isset($data['can']) ? $data['can'] : null;
        $this->container['column_limit'] = isset($data['column_limit']) ? $data['column_limit'] : null;
        $this->container['dynamic_fields'] = isset($data['dynamic_fields']) ? $data['dynamic_fields'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['pivots'] = isset($data['pivots']) ? $data['pivots'] : null;
        $this->container['result_maker_id'] = isset($data['result_maker_id']) ? $data['result_maker_id'] : null;
        $this->container['sorts'] = isset($data['sorts']) ? $data['sorts'] : null;
        $this->container['source_queries'] = isset($data['source_queries']) ? $data['source_queries'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['vis_config'] = isset($data['vis_config']) ? $data['vis_config'] : null;
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
     * Gets can
     *
     * @return map[string,bool]
     */
    public function getCan()
    {
        return $this->container['can'];
    }

    /**
     * Sets can
     *
     * @param map[string,bool] $can Operations the current user is able to perform on this object
     *
     * @return $this
     */
    public function setCan($can)
    {
        $this->container['can'] = $can;

        return $this;
    }

    /**
     * Gets column_limit
     *
     * @return string
     */
    public function getColumnLimit()
    {
        return $this->container['column_limit'];
    }

    /**
     * Sets column_limit
     *
     * @param string $column_limit Column Limit
     *
     * @return $this
     */
    public function setColumnLimit($column_limit)
    {
        $this->container['column_limit'] = $column_limit;

        return $this;
    }

    /**
     * Gets dynamic_fields
     *
     * @return string
     */
    public function getDynamicFields()
    {
        return $this->container['dynamic_fields'];
    }

    /**
     * Sets dynamic_fields
     *
     * @param string $dynamic_fields Dynamic Fields
     *
     * @return $this
     */
    public function setDynamicFields($dynamic_fields)
    {
        $this->container['dynamic_fields'] = $dynamic_fields;

        return $this;
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
     * @param string $id Unique Id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets pivots
     *
     * @return string[]
     */
    public function getPivots()
    {
        return $this->container['pivots'];
    }

    /**
     * Sets pivots
     *
     * @param string[] $pivots Pivots
     *
     * @return $this
     */
    public function setPivots($pivots)
    {
        $this->container['pivots'] = $pivots;

        return $this;
    }

    /**
     * Gets result_maker_id
     *
     * @return string
     */
    public function getResultMakerId()
    {
        return $this->container['result_maker_id'];
    }

    /**
     * Sets result_maker_id
     *
     * @param string $result_maker_id Unique to get results
     *
     * @return $this
     */
    public function setResultMakerId($result_maker_id)
    {
        $this->container['result_maker_id'] = $result_maker_id;

        return $this;
    }

    /**
     * Gets sorts
     *
     * @return string[]
     */
    public function getSorts()
    {
        return $this->container['sorts'];
    }

    /**
     * Sets sorts
     *
     * @param string[] $sorts Sorts
     *
     * @return $this
     */
    public function setSorts($sorts)
    {
        $this->container['sorts'] = $sorts;

        return $this;
    }

    /**
     * Gets source_queries
     *
     * @return \Swagger\Client\Model\MergeQuerySourceQuery[]
     */
    public function getSourceQueries()
    {
        return $this->container['source_queries'];
    }

    /**
     * Sets source_queries
     *
     * @param \Swagger\Client\Model\MergeQuerySourceQuery[] $source_queries Source Queries defining the results to be merged.
     *
     * @return $this
     */
    public function setSourceQueries($source_queries)
    {
        $this->container['source_queries'] = $source_queries;

        return $this;
    }

    /**
     * Gets total
     *
     * @return bool
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param bool $total Total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets vis_config
     *
     * @return map[string,string]
     */
    public function getVisConfig()
    {
        return $this->container['vis_config'];
    }

    /**
     * Sets vis_config
     *
     * @param map[string,string] $vis_config Visualization Config
     *
     * @return $this
     */
    public function setVisConfig($vis_config)
    {
        $this->container['vis_config'] = $vis_config;

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


