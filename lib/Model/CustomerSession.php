<?php
/**
 * CustomerSession
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
 * OpenAPI spec version: 2017-11-07T20:47:19Z
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
 * CustomerSession Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CustomerSession implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'customerSession';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'sessionId' => 'string',
        'ip' => 'string',
        'created' => 'float',
        'modified' => 'float',
        'expiredAt' => 'float',
        'merchantId' => 'float',
        'partnerId' => 'float',
        'affiliateInfoId' => 'float',
        'productId' => 'float',
        'destinationId' => 'float',
        'networkId' => 'float',
        'tid' => 'string',
        'httpReferer' => 'string',
        'subIds' => '\Swagger\Client\Model\CustomerSessionSubIds'
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
        'id' => 'id',
        'sessionId' => 'sessionId',
        'ip' => 'ip',
        'created' => 'created',
        'modified' => 'modified',
        'expiredAt' => 'expiredAt',
        'merchantId' => 'merchantId',
        'partnerId' => 'partnerId',
        'affiliateInfoId' => 'affiliateInfoId',
        'productId' => 'productId',
        'destinationId' => 'destinationId',
        'networkId' => 'networkId',
        'tid' => 'tid',
        'httpReferer' => 'httpReferer',
        'subIds' => 'subIds'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'sessionId' => 'setSessionId',
        'ip' => 'setIp',
        'created' => 'setCreated',
        'modified' => 'setModified',
        'expiredAt' => 'setExpiredAt',
        'merchantId' => 'setMerchantId',
        'partnerId' => 'setPartnerId',
        'affiliateInfoId' => 'setAffiliateInfoId',
        'productId' => 'setProductId',
        'destinationId' => 'setDestinationId',
        'networkId' => 'setNetworkId',
        'tid' => 'setTid',
        'httpReferer' => 'setHttpReferer',
        'subIds' => 'setSubIds'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'sessionId' => 'getSessionId',
        'ip' => 'getIp',
        'created' => 'getCreated',
        'modified' => 'getModified',
        'expiredAt' => 'getExpiredAt',
        'merchantId' => 'getMerchantId',
        'partnerId' => 'getPartnerId',
        'affiliateInfoId' => 'getAffiliateInfoId',
        'productId' => 'getProductId',
        'destinationId' => 'getDestinationId',
        'networkId' => 'getNetworkId',
        'tid' => 'getTid',
        'httpReferer' => 'getHttpReferer',
        'subIds' => 'getSubIds'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['sessionId'] = isset($data['sessionId']) ? $data['sessionId'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['expiredAt'] = isset($data['expiredAt']) ? $data['expiredAt'] : null;
        $this->container['merchantId'] = isset($data['merchantId']) ? $data['merchantId'] : null;
        $this->container['partnerId'] = isset($data['partnerId']) ? $data['partnerId'] : null;
        $this->container['affiliateInfoId'] = isset($data['affiliateInfoId']) ? $data['affiliateInfoId'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['destinationId'] = isset($data['destinationId']) ? $data['destinationId'] : null;
        $this->container['networkId'] = isset($data['networkId']) ? $data['networkId'] : null;
        $this->container['tid'] = isset($data['tid']) ? $data['tid'] : null;
        $this->container['httpReferer'] = isset($data['httpReferer']) ? $data['httpReferer'] : null;
        $this->container['subIds'] = isset($data['subIds']) ? $data['subIds'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['sessionId'] === null) {
            $invalid_properties[] = "'sessionId' can't be null";
        }
        if ($this->container['ip'] === null) {
            $invalid_properties[] = "'ip' can't be null";
        }
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

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['sessionId'] === null) {
            return false;
        }
        if ($this->container['ip'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets sessionId
     * @return string
     */
    public function getSessionId()
    {
        return $this->container['sessionId'];
    }

    /**
     * Sets sessionId
     * @param string $sessionId
     * @return $this
     */
    public function setSessionId($sessionId)
    {
        $this->container['sessionId'] = $sessionId;

        return $this;
    }

    /**
     * Gets ip
     * @return string
     */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
     * Sets ip
     * @param string $ip
     * @return $this
     */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;

        return $this;
    }

    /**
     * Gets created
     * @return float
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param float $created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets modified
     * @return float
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     * @param float $modified
     * @return $this
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

        return $this;
    }

    /**
     * Gets expiredAt
     * @return float
     */
    public function getExpiredAt()
    {
        return $this->container['expiredAt'];
    }

    /**
     * Sets expiredAt
     * @param float $expiredAt
     * @return $this
     */
    public function setExpiredAt($expiredAt)
    {
        $this->container['expiredAt'] = $expiredAt;

        return $this;
    }

    /**
     * Gets merchantId
     * @return float
     */
    public function getMerchantId()
    {
        return $this->container['merchantId'];
    }

    /**
     * Sets merchantId
     * @param float $merchantId
     * @return $this
     */
    public function setMerchantId($merchantId)
    {
        $this->container['merchantId'] = $merchantId;

        return $this;
    }

    /**
     * Gets partnerId
     * @return float
     */
    public function getPartnerId()
    {
        return $this->container['partnerId'];
    }

    /**
     * Sets partnerId
     * @param float $partnerId
     * @return $this
     */
    public function setPartnerId($partnerId)
    {
        $this->container['partnerId'] = $partnerId;

        return $this;
    }

    /**
     * Gets affiliateInfoId
     * @return float
     */
    public function getAffiliateInfoId()
    {
        return $this->container['affiliateInfoId'];
    }

    /**
     * Sets affiliateInfoId
     * @param float $affiliateInfoId
     * @return $this
     */
    public function setAffiliateInfoId($affiliateInfoId)
    {
        $this->container['affiliateInfoId'] = $affiliateInfoId;

        return $this;
    }

    /**
     * Gets productId
     * @return float
     */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
     * Sets productId
     * @param float $productId
     * @return $this
     */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;

        return $this;
    }

    /**
     * Gets destinationId
     * @return float
     */
    public function getDestinationId()
    {
        return $this->container['destinationId'];
    }

    /**
     * Sets destinationId
     * @param float $destinationId
     * @return $this
     */
    public function setDestinationId($destinationId)
    {
        $this->container['destinationId'] = $destinationId;

        return $this;
    }

    /**
     * Gets networkId
     * @return float
     */
    public function getNetworkId()
    {
        return $this->container['networkId'];
    }

    /**
     * Sets networkId
     * @param float $networkId
     * @return $this
     */
    public function setNetworkId($networkId)
    {
        $this->container['networkId'] = $networkId;

        return $this;
    }

    /**
     * Gets tid
     * @return string
     */
    public function getTid()
    {
        return $this->container['tid'];
    }

    /**
     * Sets tid
     * @param string $tid
     * @return $this
     */
    public function setTid($tid)
    {
        $this->container['tid'] = $tid;

        return $this;
    }

    /**
     * Gets httpReferer
     * @return string
     */
    public function getHttpReferer()
    {
        return $this->container['httpReferer'];
    }

    /**
     * Sets httpReferer
     * @param string $httpReferer
     * @return $this
     */
    public function setHttpReferer($httpReferer)
    {
        $this->container['httpReferer'] = $httpReferer;

        return $this;
    }

    /**
     * Gets subIds
     * @return \Swagger\Client\Model\CustomerSessionSubIds
     */
    public function getSubIds()
    {
        return $this->container['subIds'];
    }

    /**
     * Sets subIds
     * @param \Swagger\Client\Model\CustomerSessionSubIds $subIds
     * @return $this
     */
    public function setSubIds($subIds)
    {
        $this->container['subIds'] = $subIds;

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


