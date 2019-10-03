<?php
/**
 * ContentValidationDashboardElement
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
 * ContentValidationDashboardElement Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContentValidationDashboardElement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ContentValidationDashboardElement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'dashboard_id' => 'string',
        'look_id' => 'string',
        'query_id' => 'int',
        'type' => 'string',
        'note_text' => 'string',
        'note_text_as_html' => 'string',
        'note_display' => 'string',
        'note_state' => 'string',
        'title_hidden' => 'bool',
        'title_text' => 'string',
        'title' => 'string',
        'subtitle_text' => 'string',
        'body_text' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'dashboard_id' => null,
        'look_id' => null,
        'query_id' => 'int64',
        'type' => null,
        'note_text' => null,
        'note_text_as_html' => null,
        'note_display' => null,
        'note_state' => null,
        'title_hidden' => null,
        'title_text' => null,
        'title' => null,
        'subtitle_text' => null,
        'body_text' => null
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
        'dashboard_id' => 'dashboard_id',
        'look_id' => 'look_id',
        'query_id' => 'query_id',
        'type' => 'type',
        'note_text' => 'note_text',
        'note_text_as_html' => 'note_text_as_html',
        'note_display' => 'note_display',
        'note_state' => 'note_state',
        'title_hidden' => 'title_hidden',
        'title_text' => 'title_text',
        'title' => 'title',
        'subtitle_text' => 'subtitle_text',
        'body_text' => 'body_text'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'dashboard_id' => 'setDashboardId',
        'look_id' => 'setLookId',
        'query_id' => 'setQueryId',
        'type' => 'setType',
        'note_text' => 'setNoteText',
        'note_text_as_html' => 'setNoteTextAsHtml',
        'note_display' => 'setNoteDisplay',
        'note_state' => 'setNoteState',
        'title_hidden' => 'setTitleHidden',
        'title_text' => 'setTitleText',
        'title' => 'setTitle',
        'subtitle_text' => 'setSubtitleText',
        'body_text' => 'setBodyText'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'dashboard_id' => 'getDashboardId',
        'look_id' => 'getLookId',
        'query_id' => 'getQueryId',
        'type' => 'getType',
        'note_text' => 'getNoteText',
        'note_text_as_html' => 'getNoteTextAsHtml',
        'note_display' => 'getNoteDisplay',
        'note_state' => 'getNoteState',
        'title_hidden' => 'getTitleHidden',
        'title_text' => 'getTitleText',
        'title' => 'getTitle',
        'subtitle_text' => 'getSubtitleText',
        'body_text' => 'getBodyText'
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
        $this->container['dashboard_id'] = isset($data['dashboard_id']) ? $data['dashboard_id'] : null;
        $this->container['look_id'] = isset($data['look_id']) ? $data['look_id'] : null;
        $this->container['query_id'] = isset($data['query_id']) ? $data['query_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['note_text'] = isset($data['note_text']) ? $data['note_text'] : null;
        $this->container['note_text_as_html'] = isset($data['note_text_as_html']) ? $data['note_text_as_html'] : null;
        $this->container['note_display'] = isset($data['note_display']) ? $data['note_display'] : null;
        $this->container['note_state'] = isset($data['note_state']) ? $data['note_state'] : null;
        $this->container['title_hidden'] = isset($data['title_hidden']) ? $data['title_hidden'] : null;
        $this->container['title_text'] = isset($data['title_text']) ? $data['title_text'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['subtitle_text'] = isset($data['subtitle_text']) ? $data['subtitle_text'] : null;
        $this->container['body_text'] = isset($data['body_text']) ? $data['body_text'] : null;
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
     * Gets dashboard_id
     *
     * @return string
     */
    public function getDashboardId()
    {
        return $this->container['dashboard_id'];
    }

    /**
     * Sets dashboard_id
     *
     * @param string $dashboard_id Id of Dashboard
     *
     * @return $this
     */
    public function setDashboardId($dashboard_id)
    {
        $this->container['dashboard_id'] = $dashboard_id;

        return $this;
    }

    /**
     * Gets look_id
     *
     * @return string
     */
    public function getLookId()
    {
        return $this->container['look_id'];
    }

    /**
     * Sets look_id
     *
     * @param string $look_id Id Of Look
     *
     * @return $this
     */
    public function setLookId($look_id)
    {
        $this->container['look_id'] = $look_id;

        return $this;
    }

    /**
     * Gets query_id
     *
     * @return int
     */
    public function getQueryId()
    {
        return $this->container['query_id'];
    }

    /**
     * Sets query_id
     *
     * @param int $query_id Id Of Query
     *
     * @return $this
     */
    public function setQueryId($query_id)
    {
        $this->container['query_id'] = $query_id;

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
     * @param string $type Type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets note_text
     *
     * @return string
     */
    public function getNoteText()
    {
        return $this->container['note_text'];
    }

    /**
     * Sets note_text
     *
     * @param string $note_text Note Text
     *
     * @return $this
     */
    public function setNoteText($note_text)
    {
        $this->container['note_text'] = $note_text;

        return $this;
    }

    /**
     * Gets note_text_as_html
     *
     * @return string
     */
    public function getNoteTextAsHtml()
    {
        return $this->container['note_text_as_html'];
    }

    /**
     * Sets note_text_as_html
     *
     * @param string $note_text_as_html Note Text as Html
     *
     * @return $this
     */
    public function setNoteTextAsHtml($note_text_as_html)
    {
        $this->container['note_text_as_html'] = $note_text_as_html;

        return $this;
    }

    /**
     * Gets note_display
     *
     * @return string
     */
    public function getNoteDisplay()
    {
        return $this->container['note_display'];
    }

    /**
     * Sets note_display
     *
     * @param string $note_display Note Display
     *
     * @return $this
     */
    public function setNoteDisplay($note_display)
    {
        $this->container['note_display'] = $note_display;

        return $this;
    }

    /**
     * Gets note_state
     *
     * @return string
     */
    public function getNoteState()
    {
        return $this->container['note_state'];
    }

    /**
     * Sets note_state
     *
     * @param string $note_state Note State
     *
     * @return $this
     */
    public function setNoteState($note_state)
    {
        $this->container['note_state'] = $note_state;

        return $this;
    }

    /**
     * Gets title_hidden
     *
     * @return bool
     */
    public function getTitleHidden()
    {
        return $this->container['title_hidden'];
    }

    /**
     * Sets title_hidden
     *
     * @param bool $title_hidden Whether title is hidden
     *
     * @return $this
     */
    public function setTitleHidden($title_hidden)
    {
        $this->container['title_hidden'] = $title_hidden;

        return $this;
    }

    /**
     * Gets title_text
     *
     * @return string
     */
    public function getTitleText()
    {
        return $this->container['title_text'];
    }

    /**
     * Sets title_text
     *
     * @param string $title_text Text tile title
     *
     * @return $this
     */
    public function setTitleText($title_text)
    {
        $this->container['title_text'] = $title_text;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Title of dashboard element
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets subtitle_text
     *
     * @return string
     */
    public function getSubtitleText()
    {
        return $this->container['subtitle_text'];
    }

    /**
     * Sets subtitle_text
     *
     * @param string $subtitle_text Text tile subtitle text
     *
     * @return $this
     */
    public function setSubtitleText($subtitle_text)
    {
        $this->container['subtitle_text'] = $subtitle_text;

        return $this;
    }

    /**
     * Gets body_text
     *
     * @return string
     */
    public function getBodyText()
    {
        return $this->container['body_text'];
    }

    /**
     * Sets body_text
     *
     * @param string $body_text Text tile body text
     *
     * @return $this
     */
    public function setBodyText($body_text)
    {
        $this->container['body_text'] = $body_text;

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


