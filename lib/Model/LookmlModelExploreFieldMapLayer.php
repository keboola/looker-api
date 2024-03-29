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


