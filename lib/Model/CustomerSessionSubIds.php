<?php
/**
 * CustomerSessionSubIds
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
 * OpenAPI spec version: 2017-11-08T22:57:48Z
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
 * CustomerSessionSubIds Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CustomerSessionSubIds implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'customerSession_subIds';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'subId' => 'string',
        'subId2' => 'string',
        'subId3' => 'string',
        'clickId' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'subId' => 'subId',
        'subId2' => 'subId2',
        'subId3' => 'subId3',
        'clickId' => 'clickId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'subId' => 'setSubId',
        'subId2' => 'setSubId2',
        'subId3' => 'setSubId3',
        'clickId' => 'setClickId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'subId' => 'getSubId',
        'subId2' => 'getSubId2',
        'subId3' => 'getSubId3',
        'clickId' => 'getClickId'
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
        $this->container['subId'] = isset($data['subId']) ? $data['subId'] : null;
        $this->container['subId2'] = isset($data['subId2']) ? $data['subId2'] : null;
        $this->container['subId3'] = isset($data['subId3']) ? $data['subId3'] : null;
        $this->container['clickId'] = isset($data['clickId']) ? $data['clickId'] : null;
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
     * Gets subId
     * @return string
     */
    public function getSubId()
    {
        return $this->container['subId'];
    }

    /**
     * Sets subId
     * @param string $subId
     * @return $this
     */
    public function setSubId($subId)
    {
        $this->container['subId'] = $subId;

        return $this;
    }

    /**
     * Gets subId2
     * @return string
     */
    public function getSubId2()
    {
        return $this->container['subId2'];
    }

    /**
     * Sets subId2
     * @param string $subId2
     * @return $this
     */
    public function setSubId2($subId2)
    {
        $this->container['subId2'] = $subId2;

        return $this;
    }

    /**
     * Gets subId3
     * @return string
     */
    public function getSubId3()
    {
        return $this->container['subId3'];
    }

    /**
     * Sets subId3
     * @param string $subId3
     * @return $this
     */
    public function setSubId3($subId3)
    {
        $this->container['subId3'] = $subId3;

        return $this;
    }

    /**
     * Gets clickId
     * @return string
     */
    public function getClickId()
    {
        return $this->container['clickId'];
    }

    /**
     * Sets clickId
     * @param string $clickId
     * @return $this
     */
    public function setClickId($clickId)
    {
        $this->container['clickId'] = $clickId;

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


