<?php
/**
 * SshTunnel
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
 * SshTunnel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SshTunnel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SshTunnel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tunnel_id' => 'string',
        'ssh_server_id' => 'string',
        'ssh_server_name' => 'string',
        'ssh_server_host' => 'string',
        'ssh_server_port' => 'int',
        'ssh_server_user' => 'string',
        'last_attempt' => 'string',
        'local_host_port' => 'int',
        'database_host' => 'string',
        'database_port' => 'int',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tunnel_id' => null,
        'ssh_server_id' => null,
        'ssh_server_name' => null,
        'ssh_server_host' => null,
        'ssh_server_port' => 'int64',
        'ssh_server_user' => null,
        'last_attempt' => null,
        'local_host_port' => 'int64',
        'database_host' => null,
        'database_port' => 'int64',
        'status' => null
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
        'tunnel_id' => 'tunnel_id',
        'ssh_server_id' => 'ssh_server_id',
        'ssh_server_name' => 'ssh_server_name',
        'ssh_server_host' => 'ssh_server_host',
        'ssh_server_port' => 'ssh_server_port',
        'ssh_server_user' => 'ssh_server_user',
        'last_attempt' => 'last_attempt',
        'local_host_port' => 'local_host_port',
        'database_host' => 'database_host',
        'database_port' => 'database_port',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tunnel_id' => 'setTunnelId',
        'ssh_server_id' => 'setSshServerId',
        'ssh_server_name' => 'setSshServerName',
        'ssh_server_host' => 'setSshServerHost',
        'ssh_server_port' => 'setSshServerPort',
        'ssh_server_user' => 'setSshServerUser',
        'last_attempt' => 'setLastAttempt',
        'local_host_port' => 'setLocalHostPort',
        'database_host' => 'setDatabaseHost',
        'database_port' => 'setDatabasePort',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tunnel_id' => 'getTunnelId',
        'ssh_server_id' => 'getSshServerId',
        'ssh_server_name' => 'getSshServerName',
        'ssh_server_host' => 'getSshServerHost',
        'ssh_server_port' => 'getSshServerPort',
        'ssh_server_user' => 'getSshServerUser',
        'last_attempt' => 'getLastAttempt',
        'local_host_port' => 'getLocalHostPort',
        'database_host' => 'getDatabaseHost',
        'database_port' => 'getDatabasePort',
        'status' => 'getStatus'
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
        $this->container['tunnel_id'] = isset($data['tunnel_id']) ? $data['tunnel_id'] : null;
        $this->container['ssh_server_id'] = isset($data['ssh_server_id']) ? $data['ssh_server_id'] : null;
        $this->container['ssh_server_name'] = isset($data['ssh_server_name']) ? $data['ssh_server_name'] : null;
        $this->container['ssh_server_host'] = isset($data['ssh_server_host']) ? $data['ssh_server_host'] : null;
        $this->container['ssh_server_port'] = isset($data['ssh_server_port']) ? $data['ssh_server_port'] : null;
        $this->container['ssh_server_user'] = isset($data['ssh_server_user']) ? $data['ssh_server_user'] : null;
        $this->container['last_attempt'] = isset($data['last_attempt']) ? $data['last_attempt'] : null;
        $this->container['local_host_port'] = isset($data['local_host_port']) ? $data['local_host_port'] : null;
        $this->container['database_host'] = isset($data['database_host']) ? $data['database_host'] : null;
        $this->container['database_port'] = isset($data['database_port']) ? $data['database_port'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
     * Gets tunnel_id
     *
     * @return string
     */
    public function getTunnelId()
    {
        return $this->container['tunnel_id'];
    }

    /**
     * Sets tunnel_id
     *
     * @param string $tunnel_id Unique ID for the tunnel
     *
     * @return $this
     */
    public function setTunnelId($tunnel_id)
    {
        $this->container['tunnel_id'] = $tunnel_id;

        return $this;
    }

    /**
     * Gets ssh_server_id
     *
     * @return string
     */
    public function getSshServerId()
    {
        return $this->container['ssh_server_id'];
    }

    /**
     * Sets ssh_server_id
     *
     * @param string $ssh_server_id SSH Server ID
     *
     * @return $this
     */
    public function setSshServerId($ssh_server_id)
    {
        $this->container['ssh_server_id'] = $ssh_server_id;

        return $this;
    }

    /**
     * Gets ssh_server_name
     *
     * @return string
     */
    public function getSshServerName()
    {
        return $this->container['ssh_server_name'];
    }

    /**
     * Sets ssh_server_name
     *
     * @param string $ssh_server_name SSH Server name
     *
     * @return $this
     */
    public function setSshServerName($ssh_server_name)
    {
        $this->container['ssh_server_name'] = $ssh_server_name;

        return $this;
    }

    /**
     * Gets ssh_server_host
     *
     * @return string
     */
    public function getSshServerHost()
    {
        return $this->container['ssh_server_host'];
    }

    /**
     * Sets ssh_server_host
     *
     * @param string $ssh_server_host SSH Server Hostname or IP Address
     *
     * @return $this
     */
    public function setSshServerHost($ssh_server_host)
    {
        $this->container['ssh_server_host'] = $ssh_server_host;

        return $this;
    }

    /**
     * Gets ssh_server_port
     *
     * @return int
     */
    public function getSshServerPort()
    {
        return $this->container['ssh_server_port'];
    }

    /**
     * Sets ssh_server_port
     *
     * @param int $ssh_server_port SSH Server port
     *
     * @return $this
     */
    public function setSshServerPort($ssh_server_port)
    {
        $this->container['ssh_server_port'] = $ssh_server_port;

        return $this;
    }

    /**
     * Gets ssh_server_user
     *
     * @return string
     */
    public function getSshServerUser()
    {
        return $this->container['ssh_server_user'];
    }

    /**
     * Sets ssh_server_user
     *
     * @param string $ssh_server_user Username used to connect to the SSH Server
     *
     * @return $this
     */
    public function setSshServerUser($ssh_server_user)
    {
        $this->container['ssh_server_user'] = $ssh_server_user;

        return $this;
    }

    /**
     * Gets last_attempt
     *
     * @return string
     */
    public function getLastAttempt()
    {
        return $this->container['last_attempt'];
    }

    /**
     * Sets last_attempt
     *
     * @param string $last_attempt Time of last connect attempt
     *
     * @return $this
     */
    public function setLastAttempt($last_attempt)
    {
        $this->container['last_attempt'] = $last_attempt;

        return $this;
    }

    /**
     * Gets local_host_port
     *
     * @return int
     */
    public function getLocalHostPort()
    {
        return $this->container['local_host_port'];
    }

    /**
     * Sets local_host_port
     *
     * @param int $local_host_port Localhost Port used by the Looker instance to connect to the remote DB
     *
     * @return $this
     */
    public function setLocalHostPort($local_host_port)
    {
        $this->container['local_host_port'] = $local_host_port;

        return $this;
    }

    /**
     * Gets database_host
     *
     * @return string
     */
    public function getDatabaseHost()
    {
        return $this->container['database_host'];
    }

    /**
     * Sets database_host
     *
     * @param string $database_host Hostname or IP Address of the Database Server
     *
     * @return $this
     */
    public function setDatabaseHost($database_host)
    {
        $this->container['database_host'] = $database_host;

        return $this;
    }

    /**
     * Gets database_port
     *
     * @return int
     */
    public function getDatabasePort()
    {
        return $this->container['database_port'];
    }

    /**
     * Sets database_port
     *
     * @param int $database_port Port that the Database Server is listening on
     *
     * @return $this
     */
    public function setDatabasePort($database_port)
    {
        $this->container['database_port'] = $database_port;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Current connection status for this Tunnel
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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


