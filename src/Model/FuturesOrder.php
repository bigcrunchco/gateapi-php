<?php
/**
 * FuturesOrder
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
 * FuturesOrder Class Doc Comment
 *
 * @category Class
 * @package  GateApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FuturesOrder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FuturesOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'user' => 'int',
        'create_time' => 'float',
        'finish_time' => 'float',
        'finish_as' => 'string',
        'status' => 'string',
        'contract' => 'string',
        'size' => 'int',
        'iceberg' => 'int',
        'price' => 'string',
        'close' => 'bool',
        'is_close' => 'bool',
        'reduce_only' => 'bool',
        'is_reduce_only' => 'bool',
        'is_liq' => 'bool',
        'tif' => 'string',
        'left' => 'int',
        'fill_price' => 'string',
        'text' => 'string',
        'tkfr' => 'string',
        'mkfr' => 'string',
        'refu' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'user' => null,
        'create_time' => null,
        'finish_time' => null,
        'finish_as' => null,
        'status' => null,
        'contract' => null,
        'size' => 'int64',
        'iceberg' => 'int64',
        'price' => null,
        'close' => null,
        'is_close' => null,
        'reduce_only' => null,
        'is_reduce_only' => null,
        'is_liq' => null,
        'tif' => null,
        'left' => 'int64',
        'fill_price' => null,
        'text' => null,
        'tkfr' => null,
        'mkfr' => null,
        'refu' => null
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
        'user' => 'user',
        'create_time' => 'create_time',
        'finish_time' => 'finish_time',
        'finish_as' => 'finish_as',
        'status' => 'status',
        'contract' => 'contract',
        'size' => 'size',
        'iceberg' => 'iceberg',
        'price' => 'price',
        'close' => 'close',
        'is_close' => 'is_close',
        'reduce_only' => 'reduce_only',
        'is_reduce_only' => 'is_reduce_only',
        'is_liq' => 'is_liq',
        'tif' => 'tif',
        'left' => 'left',
        'fill_price' => 'fill_price',
        'text' => 'text',
        'tkfr' => 'tkfr',
        'mkfr' => 'mkfr',
        'refu' => 'refu'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'user' => 'setUser',
        'create_time' => 'setCreateTime',
        'finish_time' => 'setFinishTime',
        'finish_as' => 'setFinishAs',
        'status' => 'setStatus',
        'contract' => 'setContract',
        'size' => 'setSize',
        'iceberg' => 'setIceberg',
        'price' => 'setPrice',
        'close' => 'setClose',
        'is_close' => 'setIsClose',
        'reduce_only' => 'setReduceOnly',
        'is_reduce_only' => 'setIsReduceOnly',
        'is_liq' => 'setIsLiq',
        'tif' => 'setTif',
        'left' => 'setLeft',
        'fill_price' => 'setFillPrice',
        'text' => 'setText',
        'tkfr' => 'setTkfr',
        'mkfr' => 'setMkfr',
        'refu' => 'setRefu'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'user' => 'getUser',
        'create_time' => 'getCreateTime',
        'finish_time' => 'getFinishTime',
        'finish_as' => 'getFinishAs',
        'status' => 'getStatus',
        'contract' => 'getContract',
        'size' => 'getSize',
        'iceberg' => 'getIceberg',
        'price' => 'getPrice',
        'close' => 'getClose',
        'is_close' => 'getIsClose',
        'reduce_only' => 'getReduceOnly',
        'is_reduce_only' => 'getIsReduceOnly',
        'is_liq' => 'getIsLiq',
        'tif' => 'getTif',
        'left' => 'getLeft',
        'fill_price' => 'getFillPrice',
        'text' => 'getText',
        'tkfr' => 'getTkfr',
        'mkfr' => 'getMkfr',
        'refu' => 'getRefu'
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

    const FINISH_AS_FILLED = 'filled';
    const FINISH_AS_CANCELLED = 'cancelled';
    const FINISH_AS_LIQUIDATED = 'liquidated';
    const FINISH_AS_IOC = 'ioc';
    const FINISH_AS_AUTO_DELEVERAGED = 'auto_deleveraged';
    const FINISH_AS_REDUCE_ONLY = 'reduce_only';
    const STATUS_OPEN = 'open';
    const STATUS_FINISHED = 'finished';
    const TIF_GTC = 'gtc';
    const TIF_IOC = 'ioc';
    const TIF_POC = 'poc';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFinishAsAllowableValues()
    {
        return [
            self::FINISH_AS_FILLED,
            self::FINISH_AS_CANCELLED,
            self::FINISH_AS_LIQUIDATED,
            self::FINISH_AS_IOC,
            self::FINISH_AS_AUTO_DELEVERAGED,
            self::FINISH_AS_REDUCE_ONLY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OPEN,
            self::STATUS_FINISHED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTifAllowableValues()
    {
        return [
            self::TIF_GTC,
            self::TIF_IOC,
            self::TIF_POC,
        ];
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
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['create_time'] = isset($data['create_time']) ? $data['create_time'] : null;
        $this->container['finish_time'] = isset($data['finish_time']) ? $data['finish_time'] : null;
        $this->container['finish_as'] = isset($data['finish_as']) ? $data['finish_as'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['contract'] = isset($data['contract']) ? $data['contract'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['iceberg'] = isset($data['iceberg']) ? $data['iceberg'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['close'] = isset($data['close']) ? $data['close'] : false;
        $this->container['is_close'] = isset($data['is_close']) ? $data['is_close'] : null;
        $this->container['reduce_only'] = isset($data['reduce_only']) ? $data['reduce_only'] : false;
        $this->container['is_reduce_only'] = isset($data['is_reduce_only']) ? $data['is_reduce_only'] : null;
        $this->container['is_liq'] = isset($data['is_liq']) ? $data['is_liq'] : null;
        $this->container['tif'] = isset($data['tif']) ? $data['tif'] : 'gtc';
        $this->container['left'] = isset($data['left']) ? $data['left'] : null;
        $this->container['fill_price'] = isset($data['fill_price']) ? $data['fill_price'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['tkfr'] = isset($data['tkfr']) ? $data['tkfr'] : null;
        $this->container['mkfr'] = isset($data['mkfr']) ? $data['mkfr'] : null;
        $this->container['refu'] = isset($data['refu']) ? $data['refu'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFinishAsAllowableValues();
        if (!is_null($this->container['finish_as']) && !in_array($this->container['finish_as'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'finish_as', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['contract'] === null) {
            $invalidProperties[] = "'contract' can't be null";
        }
        $allowedValues = $this->getTifAllowableValues();
        if (!is_null($this->container['tif']) && !in_array($this->container['tif'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'tif', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Futures order ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets user
     *
     * @return int|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param int|null $user User ID
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets create_time
     *
     * @return float|null
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time
     *
     * @param float|null $create_time Order creation time
     *
     * @return $this
     */
    public function setCreateTime($create_time)
    {
        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets finish_time
     *
     * @return float|null
     */
    public function getFinishTime()
    {
        return $this->container['finish_time'];
    }

    /**
     * Sets finish_time
     *
     * @param float|null $finish_time Order finished time. Not returned if order is open
     *
     * @return $this
     */
    public function setFinishTime($finish_time)
    {
        $this->container['finish_time'] = $finish_time;

        return $this;
    }

    /**
     * Gets finish_as
     *
     * @return string|null
     */
    public function getFinishAs()
    {
        return $this->container['finish_as'];
    }

    /**
     * Sets finish_as
     *
     * @param string|null $finish_as How the order is finished.  - filled: all filled - cancelled: manually cancelled - liquidated: cancelled because of liquidation - ioc: time in force is `IOC`, finish immediately - auto_deleveraged: finished by ADL - reduce_only: cancelled because of increasing position while `reduce-only` set
     *
     * @return $this
     */
    public function setFinishAs($finish_as)
    {
        $allowedValues = $this->getFinishAsAllowableValues();
        if (!is_null($finish_as) && !in_array($finish_as, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'finish_as', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['finish_as'] = $finish_as;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Order status  - `open`: waiting to be traded - `finished`: finished
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets contract
     *
     * @return string
     */
    public function getContract()
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     *
     * @param string $contract Futures contract
     *
     * @return $this
     */
    public function setContract($contract)
    {
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int|null $size Order size. Specify positive number to make a bid, and negative number to ask
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets iceberg
     *
     * @return int|null
     */
    public function getIceberg()
    {
        return $this->container['iceberg'];
    }

    /**
     * Sets iceberg
     *
     * @param int|null $iceberg Display size for iceberg order. 0 for non-iceberg. Note that you would pay the taker fee for the hidden size
     *
     * @return $this
     */
    public function setIceberg($iceberg)
    {
        $this->container['iceberg'] = $iceberg;

        return $this;
    }

    /**
     * Gets price
     *
     * @return string|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param string|null $price Order price. 0 for market order with `tif` set as `ioc`
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets close
     *
     * @return bool|null
     */
    public function getClose()
    {
        return $this->container['close'];
    }

    /**
     * Sets close
     *
     * @param bool|null $close Set as `true` to close the position, with `size` set to 0
     *
     * @return $this
     */
    public function setClose($close)
    {
        $this->container['close'] = $close;

        return $this;
    }

    /**
     * Gets is_close
     *
     * @return bool|null
     */
    public function getIsClose()
    {
        return $this->container['is_close'];
    }

    /**
     * Sets is_close
     *
     * @param bool|null $is_close Is the order to close position
     *
     * @return $this
     */
    public function setIsClose($is_close)
    {
        $this->container['is_close'] = $is_close;

        return $this;
    }

    /**
     * Gets reduce_only
     *
     * @return bool|null
     */
    public function getReduceOnly()
    {
        return $this->container['reduce_only'];
    }

    /**
     * Sets reduce_only
     *
     * @param bool|null $reduce_only Set as `true` to be post-only order
     *
     * @return $this
     */
    public function setReduceOnly($reduce_only)
    {
        $this->container['reduce_only'] = $reduce_only;

        return $this;
    }

    /**
     * Gets is_reduce_only
     *
     * @return bool|null
     */
    public function getIsReduceOnly()
    {
        return $this->container['is_reduce_only'];
    }

    /**
     * Sets is_reduce_only
     *
     * @param bool|null $is_reduce_only Is the order post-only
     *
     * @return $this
     */
    public function setIsReduceOnly($is_reduce_only)
    {
        $this->container['is_reduce_only'] = $is_reduce_only;

        return $this;
    }

    /**
     * Gets is_liq
     *
     * @return bool|null
     */
    public function getIsLiq()
    {
        return $this->container['is_liq'];
    }

    /**
     * Sets is_liq
     *
     * @param bool|null $is_liq Is the order for liquidation
     *
     * @return $this
     */
    public function setIsLiq($is_liq)
    {
        $this->container['is_liq'] = $is_liq;

        return $this;
    }

    /**
     * Gets tif
     *
     * @return string|null
     */
    public function getTif()
    {
        return $this->container['tif'];
    }

    /**
     * Sets tif
     *
     * @param string|null $tif Time in force  - gtc: GoodTillCancelled - ioc: ImmediateOrCancelled, taker only - poc: PendingOrCancelled, post-only
     *
     * @return $this
     */
    public function setTif($tif)
    {
        $allowedValues = $this->getTifAllowableValues();
        if (!is_null($tif) && !in_array($tif, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'tif', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tif'] = $tif;

        return $this;
    }

    /**
     * Gets left
     *
     * @return int|null
     */
    public function getLeft()
    {
        return $this->container['left'];
    }

    /**
     * Sets left
     *
     * @param int|null $left Size left to be traded
     *
     * @return $this
     */
    public function setLeft($left)
    {
        $this->container['left'] = $left;

        return $this;
    }

    /**
     * Gets fill_price
     *
     * @return string|null
     */
    public function getFillPrice()
    {
        return $this->container['fill_price'];
    }

    /**
     * Sets fill_price
     *
     * @param string|null $fill_price Fill price of the order
     *
     * @return $this
     */
    public function setFillPrice($fill_price)
    {
        $this->container['fill_price'] = $fill_price;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text How order is created  - web: from web - api: from API - app: from mobile phones - auto_deleveraging: from ADL - liquidation: from liquidation - insurance: from insurance
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets tkfr
     *
     * @return string|null
     */
    public function getTkfr()
    {
        return $this->container['tkfr'];
    }

    /**
     * Sets tkfr
     *
     * @param string|null $tkfr Taker fee
     *
     * @return $this
     */
    public function setTkfr($tkfr)
    {
        $this->container['tkfr'] = $tkfr;

        return $this;
    }

    /**
     * Gets mkfr
     *
     * @return string|null
     */
    public function getMkfr()
    {
        return $this->container['mkfr'];
    }

    /**
     * Sets mkfr
     *
     * @param string|null $mkfr Maker fee
     *
     * @return $this
     */
    public function setMkfr($mkfr)
    {
        $this->container['mkfr'] = $mkfr;

        return $this;
    }

    /**
     * Gets refu
     *
     * @return int|null
     */
    public function getRefu()
    {
        return $this->container['refu'];
    }

    /**
     * Sets refu
     *
     * @param int|null $refu Reference user ID
     *
     * @return $this
     */
    public function setRefu($refu)
    {
        $this->container['refu'] = $refu;

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


