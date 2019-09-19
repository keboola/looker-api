<?php
/**
 * LookmlModelExploreFieldMapLayer
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
 * LookmlModelExploreFieldMapLayer Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LookmlModelExploreFieldMapLayer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LookmlModelExploreFieldMapLayer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'url' => 'string',
        'name' => 'string',
        'feature_key' => 'string',
        'property_key' => 'string',
        'property_label_key' => 'string',
        'projection' => 'string',
        'format' => 'string',
        'extents_json_url' => 'string',
        'max_zoom_level' => 'int',
        'min_zoom_level' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'url' => null,
        'name' => null,
        'feature_key' => null,
        'property_key' => null,
        'property_label_key' => null,
        'projection' => null,
        'format' => null,
        'extents_json_url' => null,
        'max_zoom_level' => 'int64',
        'min_zoom_level' => 'int64'
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
        'url' => 'url',
        'name' => 'name',
        'feature_key' => 'feature_key',
        'property_key' => 'property_key',
        'property_label_key' => 'property_label_key',
        'projection' => 'projection',
        'format' => 'format',
        'extents_json_url' => 'extents_json_url',
        'max_zoom_level' => 'max_zoom_level',
        'min_zoom_level' => 'min_zoom_level'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
        'name' => 'setName',
        'feature_key' => 'setFeatureKey',
        'property_key' => 'setPropertyKey',
        'property_label_key' => 'setPropertyLabelKey',
        'projection' => 'setProjection',
        'format' => 'setFormat',
        'extents_json_url' => 'setExtentsJsonUrl',
        'max_zoom_level' => 'setMaxZoomLevel',
        'min_zoom_level' => 'setMinZoomLevel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
        'name' => 'getName',
        'feature_key' => 'getFeatureKey',
        'property_key' => 'getPropertyKey',
        'property_label_key' => 'getPropertyLabelKey',
        'projection' => 'getProjection',
        'format' => 'getFormat',
        'extents_json_url' => 'getExtentsJsonUrl',
        'max_zoom_level' => 'getMaxZoomLevel',
        'min_zoom_level' => 'getMinZoomLevel'
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['feature_key'] = isset($data['feature_key']) ? $data['feature_key'] : null;
        $this->container['property_key'] = isset($data['property_key']) ? $data['property_key'] : null;
        $this->container['property_label_key'] = isset($data['property_label_key']) ? $data['property_label_key'] : null;
        $this->container['projection'] = isset($data['projection']) ? $data['projection'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['extents_json_url'] = isset($data['extents_json_url']) ? $data['extents_json_url'] : null;
        $this->container['max_zoom_level'] = isset($data['max_zoom_level']) ? $data['max_zoom_level'] : null;
        $this->container['min_zoom_level'] = isset($data['min_zoom_level']) ? $data['min_zoom_level'] : null;
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
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url URL to the map layer resource.
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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
     * @param string $name Name of the map layer, as defined in LookML.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets feature_key
     *
     * @return string
     */
    public function getFeatureKey()
    {
        return $this->container['feature_key'];
    }

    /**
     * Sets feature_key
     *
     * @param string $feature_key Specifies the name of the TopoJSON object that the map layer references. If not specified, use the first object..
     *
     * @return $this
     */
    public function setFeatureKey($feature_key)
    {
        $this->container['feature_key'] = $feature_key;

        return $this;
    }

    /**
     * Gets property_key
     *
     * @return string
     */
    public function getPropertyKey()
    {
        return $this->container['property_key'];
    }

    /**
     * Sets property_key
     *
     * @param string $property_key Selects which property from the TopoJSON data to plot against. TopoJSON supports arbitrary metadata for each region. When null, the first matching property should be used.
     *
     * @return $this
     */
    public function setPropertyKey($property_key)
    {
        $this->container['property_key'] = $property_key;

        return $this;
    }

    /**
     * Gets property_label_key
     *
     * @return string
     */
    public function getPropertyLabelKey()
    {
        return $this->container['property_label_key'];
    }

    /**
     * Sets property_label_key
     *
     * @param string $property_label_key Which property from the TopoJSON data to use to label the region. When null, property_key should be used.
     *
     * @return $this
     */
    public function setPropertyLabelKey($property_label_key)
    {
        $this->container['property_label_key'] = $property_label_key;

        return $this;
    }

    /**
     * Gets projection
     *
     * @return string
     */
    public function getProjection()
    {
        return $this->container['projection'];
    }

    /**
     * Sets projection
     *
     * @param string $projection The preferred geographic projection of the map layer when displayed in a visualization that supports multiple geographic projections.
     *
     * @return $this
     */
    public function setProjection($projection)
    {
        $this->container['projection'] = $projection;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string $format Specifies the data format of the region information. Valid values are: \"topojson\", \"vector_tile_region\".
     *
     * @return $this
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets extents_json_url
     *
     * @return string
     */
    public function getExtentsJsonUrl()
    {
        return $this->container['extents_json_url'];
    }

    /**
     * Sets extents_json_url
     *
     * @param string $extents_json_url Specifies the URL to a JSON file that defines the geographic extents of each region available in the map layer. This data is used to automatically center the map on the available data for visualization purposes. The JSON file must be a JSON object where the keys are the mapping value of the feature (as specified by property_key) and the values are arrays of four numbers representing the west longitude, south latitude, east longitude, and north latitude extents of the region. The object must include a key for every possible value of property_key.
     *
     * @return $this
     */
    public function setExtentsJsonUrl($extents_json_url)
    {
        $this->container['extents_json_url'] = $extents_json_url;

        return $this;
    }

    /**
     * Gets max_zoom_level
     *
     * @return int
     */
    public function getMaxZoomLevel()
    {
        return $this->container['max_zoom_level'];
    }

    /**
     * Sets max_zoom_level
     *
     * @param int $max_zoom_level The minimum zoom level that the map layer may be displayed at, for visualizations that support zooming.
     *
     * @return $this
     */
    public function setMaxZoomLevel($max_zoom_level)
    {
        $this->container['max_zoom_level'] = $max_zoom_level;

        return $this;
    }

    /**
     * Gets min_zoom_level
     *
     * @return int
     */
    public function getMinZoomLevel()
    {
        return $this->container['min_zoom_level'];
    }

    /**
     * Sets min_zoom_level
     *
     * @param int $min_zoom_level The maximum zoom level that the map layer may be displayed at, for visualizations that support zooming.
     *
     * @return $this
     */
    public function setMinZoomLevel($min_zoom_level)
    {
        $this->container['min_zoom_level'] = $min_zoom_level;

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


