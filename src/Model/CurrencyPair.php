<?php
/**
 * CurrencyPair
 *
 * PHP version 5
 *
 * @category Class
 * @package  GateApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Gate API v4
 *
 * APIv4 provides spot, margin and futures trading operations. There are public APIs to retrieve the real-time market statistics, and private APIs which needs authentication to trade on user's behalf.
 *
 * OpenAPI spec version: 4.6.0
 * Contact: support@mail.gate.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace GateApi\Model;

use \ArrayAccess;
use \GateApi\ObjectSerializer;

/**
 * CurrencyPair Class Doc Comment
 *
 * @category Class
 * @package  GateApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CurrencyPair implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CurrencyPair';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'base' => 'string',
        'quote' => 'string',
        'fee' => 'string',
        'min_base_amount' => 'string',
        'min_quote_amount' => 'string',
        'precision' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'base' => null,
        'quote' => null,
        'fee' => null,
        'min_base_amount' => null,
        'min_quote_amount' => null,
        'precision' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'base' => 'base',
        'quote' => 'quote',
        'fee' => 'fee',
        'min_base_amount' => 'min_base_amount',
        'min_quote_amount' => 'min_quote_amount',
        'precision' => 'precision'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'base' => 'setBase',
        'quote' => 'setQuote',
        'fee' => 'setFee',
        'min_base_amount' => 'setMinBaseAmount',
        'min_quote_amount' => 'setMinQuoteAmount',
        'precision' => 'setPrecision'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'base' => 'getBase',
        'quote' => 'getQuote',
        'fee' => 'getFee',
        'min_base_amount' => 'getMinBaseAmount',
        'min_quote_amount' => 'getMinQuoteAmount',
        'precision' => 'getPrecision'
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
        return self::$openAPIModelName;
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
        $this->container['base'] = isset($data['base']) ? $data['base'] : null;
        $this->container['quote'] = isset($data['quote']) ? $data['quote'] : null;
        $this->container['fee'] = isset($data['fee']) ? $data['fee'] : null;
        $this->container['min_base_amount'] = isset($data['min_base_amount']) ? $data['min_base_amount'] : null;
        $this->container['min_quote_amount'] = isset($data['min_quote_amount']) ? $data['min_quote_amount'] : null;
        $this->container['precision'] = isset($data['precision']) ? $data['precision'] : null;
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
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Currency pair
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets base
     *
     * @return string|null
     */
    public function getBase()
    {
        return $this->container['base'];
    }

    /**
     * Sets base
     *
     * @param string|null $base Base currency
     *
     * @return $this
     */
    public function setBase($base)
    {
        $this->container['base'] = $base;

        return $this;
    }

    /**
     * Gets quote
     *
     * @return string|null
     */
    public function getQuote()
    {
        return $this->container['quote'];
    }

    /**
     * Sets quote
     *
     * @param string|null $quote Quote currency
     *
     * @return $this
     */
    public function setQuote($quote)
    {
        $this->container['quote'] = $quote;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return string|null
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param string|null $fee Trading fee
     *
     * @return $this
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets min_base_amount
     *
     * @return string|null
     */
    public function getMinBaseAmount()
    {
        return $this->container['min_base_amount'];
    }

    /**
     * Sets min_base_amount
     *
     * @param string|null $min_base_amount Minimum amount of base currency to trade, `null` means no limit
     *
     * @return $this
     */
    public function setMinBaseAmount($min_base_amount)
    {
        $this->container['min_base_amount'] = $min_base_amount;

        return $this;
    }

    /**
     * Gets min_quote_amount
     *
     * @return string|null
     */
    public function getMinQuoteAmount()
    {
        return $this->container['min_quote_amount'];
    }

    /**
     * Sets min_quote_amount
     *
     * @param string|null $min_quote_amount Minimum amount of quote currency to trade, `null` means no limit
     *
     * @return $this
     */
    public function setMinQuoteAmount($min_quote_amount)
    {
        $this->container['min_quote_amount'] = $min_quote_amount;

        return $this;
    }

    /**
     * Gets precision
     *
     * @return int|null
     */
    public function getPrecision()
    {
        return $this->container['precision'];
    }

    /**
     * Sets precision
     *
     * @param int|null $precision Price scale
     *
     * @return $this
     */
    public function setPrecision($precision)
    {
        $this->container['precision'] = $precision;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


