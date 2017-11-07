<?php
/**
 * CustomerSessionServer
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * production-lychee-api-v1
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2017-11-07T03:14:22Z
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * CustomerSessionServer Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CustomerSessionServer implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'customerSession_server';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'hTTPUSERAGENT' => 'string',
        'hTTPREFERER' => 'string',
        'hTTPACCEPTLANGUAGE' => 'string',
        'qUERYSTRING' => 'map[string,string]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'hTTPUSERAGENT' => null,
        'hTTPREFERER' => null,
        'hTTPACCEPTLANGUAGE' => null,
        'qUERYSTRING' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'hTTPUSERAGENT' => 'HTTP_USER_AGENT',
        'hTTPREFERER' => 'HTTP_REFERER',
        'hTTPACCEPTLANGUAGE' => 'HTTP_ACCEPT_LANGUAGE',
        'qUERYSTRING' => 'QUERY_STRING'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'hTTPUSERAGENT' => 'setHTTPUSERAGENT',
        'hTTPREFERER' => 'setHTTPREFERER',
        'hTTPACCEPTLANGUAGE' => 'setHTTPACCEPTLANGUAGE',
        'qUERYSTRING' => 'setQUERYSTRING'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'hTTPUSERAGENT' => 'getHTTPUSERAGENT',
        'hTTPREFERER' => 'getHTTPREFERER',
        'hTTPACCEPTLANGUAGE' => 'getHTTPACCEPTLANGUAGE',
        'qUERYSTRING' => 'getQUERYSTRING'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['hTTPUSERAGENT'] = isset($data['hTTPUSERAGENT']) ? $data['hTTPUSERAGENT'] : null;
        $this->container['hTTPREFERER'] = isset($data['hTTPREFERER']) ? $data['hTTPREFERER'] : null;
        $this->container['hTTPACCEPTLANGUAGE'] = isset($data['hTTPACCEPTLANGUAGE']) ? $data['hTTPACCEPTLANGUAGE'] : null;
        $this->container['qUERYSTRING'] = isset($data['qUERYSTRING']) ? $data['qUERYSTRING'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets hTTPUSERAGENT
     * @return string
     */
    public function getHTTPUSERAGENT()
    {
        return $this->container['hTTPUSERAGENT'];
    }

    /**
     * Sets hTTPUSERAGENT
     * @param string $hTTPUSERAGENT
     * @return $this
     */
    public function setHTTPUSERAGENT($hTTPUSERAGENT)
    {
        $this->container['hTTPUSERAGENT'] = $hTTPUSERAGENT;

        return $this;
    }

    /**
     * Gets hTTPREFERER
     * @return string
     */
    public function getHTTPREFERER()
    {
        return $this->container['hTTPREFERER'];
    }

    /**
     * Sets hTTPREFERER
     * @param string $hTTPREFERER
     * @return $this
     */
    public function setHTTPREFERER($hTTPREFERER)
    {
        $this->container['hTTPREFERER'] = $hTTPREFERER;

        return $this;
    }

    /**
     * Gets hTTPACCEPTLANGUAGE
     * @return string
     */
    public function getHTTPACCEPTLANGUAGE()
    {
        return $this->container['hTTPACCEPTLANGUAGE'];
    }

    /**
     * Sets hTTPACCEPTLANGUAGE
     * @param string $hTTPACCEPTLANGUAGE
     * @return $this
     */
    public function setHTTPACCEPTLANGUAGE($hTTPACCEPTLANGUAGE)
    {
        $this->container['hTTPACCEPTLANGUAGE'] = $hTTPACCEPTLANGUAGE;

        return $this;
    }

    /**
     * Gets qUERYSTRING
     * @return map[string,string]
     */
    public function getQUERYSTRING()
    {
        return $this->container['qUERYSTRING'];
    }

    /**
     * Sets qUERYSTRING
     * @param map[string,string] $qUERYSTRING
     * @return $this
     */
    public function setQUERYSTRING($qUERYSTRING)
    {
        $this->container['qUERYSTRING'] = $qUERYSTRING;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


