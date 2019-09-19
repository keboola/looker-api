<?php
/**
 * WhitelabelConfiguration
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
 * WhitelabelConfiguration Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WhitelabelConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WhitelabelConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'logo_file' => 'string',
        'logo_url' => 'string',
        'favicon_file' => 'string',
        'favicon_url' => 'string',
        'default_title' => 'string',
        'show_help_menu' => 'bool',
        'show_docs' => 'bool',
        'show_email_sub_options' => 'bool',
        'allow_looker_mentions' => 'bool',
        'allow_looker_links' => 'bool',
        'can' => 'map[string,bool]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'logo_file' => null,
        'logo_url' => null,
        'favicon_file' => null,
        'favicon_url' => null,
        'default_title' => null,
        'show_help_menu' => null,
        'show_docs' => null,
        'show_email_sub_options' => null,
        'allow_looker_mentions' => null,
        'allow_looker_links' => null,
        'can' => null
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
        'logo_file' => 'logo_file',
        'logo_url' => 'logo_url',
        'favicon_file' => 'favicon_file',
        'favicon_url' => 'favicon_url',
        'default_title' => 'default_title',
        'show_help_menu' => 'show_help_menu',
        'show_docs' => 'show_docs',
        'show_email_sub_options' => 'show_email_sub_options',
        'allow_looker_mentions' => 'allow_looker_mentions',
        'allow_looker_links' => 'allow_looker_links',
        'can' => 'can'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'logo_file' => 'setLogoFile',
        'logo_url' => 'setLogoUrl',
        'favicon_file' => 'setFaviconFile',
        'favicon_url' => 'setFaviconUrl',
        'default_title' => 'setDefaultTitle',
        'show_help_menu' => 'setShowHelpMenu',
        'show_docs' => 'setShowDocs',
        'show_email_sub_options' => 'setShowEmailSubOptions',
        'allow_looker_mentions' => 'setAllowLookerMentions',
        'allow_looker_links' => 'setAllowLookerLinks',
        'can' => 'setCan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'logo_file' => 'getLogoFile',
        'logo_url' => 'getLogoUrl',
        'favicon_file' => 'getFaviconFile',
        'favicon_url' => 'getFaviconUrl',
        'default_title' => 'getDefaultTitle',
        'show_help_menu' => 'getShowHelpMenu',
        'show_docs' => 'getShowDocs',
        'show_email_sub_options' => 'getShowEmailSubOptions',
        'allow_looker_mentions' => 'getAllowLookerMentions',
        'allow_looker_links' => 'getAllowLookerLinks',
        'can' => 'getCan'
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
        $this->container['logo_file'] = isset($data['logo_file']) ? $data['logo_file'] : null;
        $this->container['logo_url'] = isset($data['logo_url']) ? $data['logo_url'] : null;
        $this->container['favicon_file'] = isset($data['favicon_file']) ? $data['favicon_file'] : null;
        $this->container['favicon_url'] = isset($data['favicon_url']) ? $data['favicon_url'] : null;
        $this->container['default_title'] = isset($data['default_title']) ? $data['default_title'] : null;
        $this->container['show_help_menu'] = isset($data['show_help_menu']) ? $data['show_help_menu'] : null;
        $this->container['show_docs'] = isset($data['show_docs']) ? $data['show_docs'] : null;
        $this->container['show_email_sub_options'] = isset($data['show_email_sub_options']) ? $data['show_email_sub_options'] : null;
        $this->container['allow_looker_mentions'] = isset($data['allow_looker_mentions']) ? $data['allow_looker_mentions'] : null;
        $this->container['allow_looker_links'] = isset($data['allow_looker_links']) ? $data['allow_looker_links'] : null;
        $this->container['can'] = isset($data['can']) ? $data['can'] : null;
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
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Unique Id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets logo_file
     *
     * @return string
     */
    public function getLogoFile()
    {
        return $this->container['logo_file'];
    }

    /**
     * Sets logo_file
     *
     * @param string $logo_file Customer logo image. Expected base64 encoded data (write-only)
     *
     * @return $this
     */
    public function setLogoFile($logo_file)
    {
        $this->container['logo_file'] = $logo_file;

        return $this;
    }

    /**
     * Gets logo_url
     *
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->container['logo_url'];
    }

    /**
     * Sets logo_url
     *
     * @param string $logo_url Logo image url (read-only)
     *
     * @return $this
     */
    public function setLogoUrl($logo_url)
    {
        $this->container['logo_url'] = $logo_url;

        return $this;
    }

    /**
     * Gets favicon_file
     *
     * @return string
     */
    public function getFaviconFile()
    {
        return $this->container['favicon_file'];
    }

    /**
     * Sets favicon_file
     *
     * @param string $favicon_file Custom favicon image. Expected base64 encoded data (write-only)
     *
     * @return $this
     */
    public function setFaviconFile($favicon_file)
    {
        $this->container['favicon_file'] = $favicon_file;

        return $this;
    }

    /**
     * Gets favicon_url
     *
     * @return string
     */
    public function getFaviconUrl()
    {
        return $this->container['favicon_url'];
    }

    /**
     * Sets favicon_url
     *
     * @param string $favicon_url Favicon image url (read-only)
     *
     * @return $this
     */
    public function setFaviconUrl($favicon_url)
    {
        $this->container['favicon_url'] = $favicon_url;

        return $this;
    }

    /**
     * Gets default_title
     *
     * @return string
     */
    public function getDefaultTitle()
    {
        return $this->container['default_title'];
    }

    /**
     * Sets default_title
     *
     * @param string $default_title Default page title
     *
     * @return $this
     */
    public function setDefaultTitle($default_title)
    {
        $this->container['default_title'] = $default_title;

        return $this;
    }

    /**
     * Gets show_help_menu
     *
     * @return bool
     */
    public function getShowHelpMenu()
    {
        return $this->container['show_help_menu'];
    }

    /**
     * Sets show_help_menu
     *
     * @param bool $show_help_menu Boolean to toggle showing help menus
     *
     * @return $this
     */
    public function setShowHelpMenu($show_help_menu)
    {
        $this->container['show_help_menu'] = $show_help_menu;

        return $this;
    }

    /**
     * Gets show_docs
     *
     * @return bool
     */
    public function getShowDocs()
    {
        return $this->container['show_docs'];
    }

    /**
     * Sets show_docs
     *
     * @param bool $show_docs Boolean to toggle showing docs
     *
     * @return $this
     */
    public function setShowDocs($show_docs)
    {
        $this->container['show_docs'] = $show_docs;

        return $this;
    }

    /**
     * Gets show_email_sub_options
     *
     * @return bool
     */
    public function getShowEmailSubOptions()
    {
        return $this->container['show_email_sub_options'];
    }

    /**
     * Sets show_email_sub_options
     *
     * @param bool $show_email_sub_options Boolean to toggle showing email subscription options.
     *
     * @return $this
     */
    public function setShowEmailSubOptions($show_email_sub_options)
    {
        $this->container['show_email_sub_options'] = $show_email_sub_options;

        return $this;
    }

    /**
     * Gets allow_looker_mentions
     *
     * @return bool
     */
    public function getAllowLookerMentions()
    {
        return $this->container['allow_looker_mentions'];
    }

    /**
     * Sets allow_looker_mentions
     *
     * @param bool $allow_looker_mentions Boolean to toggle mentions of Looker in emails
     *
     * @return $this
     */
    public function setAllowLookerMentions($allow_looker_mentions)
    {
        $this->container['allow_looker_mentions'] = $allow_looker_mentions;

        return $this;
    }

    /**
     * Gets allow_looker_links
     *
     * @return bool
     */
    public function getAllowLookerLinks()
    {
        return $this->container['allow_looker_links'];
    }

    /**
     * Sets allow_looker_links
     *
     * @param bool $allow_looker_links Boolean to toggle links to Looker in emails
     *
     * @return $this
     */
    public function setAllowLookerLinks($allow_looker_links)
    {
        $this->container['allow_looker_links'] = $allow_looker_links;

        return $this;
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


