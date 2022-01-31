<?php
/**
 * APIQuotationLineItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  SternerStuff\InsightlyPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Insightly API v3.1
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v3.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.25
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SternerStuff\InsightlyPHP\Model;

use \ArrayAccess;
use \SternerStuff\InsightlyPHP\ObjectSerializer;

/**
 * APIQuotationLineItem Class Doc Comment
 *
 * @category Class
 * @package  SternerStuff\InsightlyPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class APIQuotationLineItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'APIQuotationLineItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'quotation_item_id' => 'int',
        'opportunity_item_id' => 'int',
        'pricebook_entry_id' => 'int',
        'description' => 'string',
        'currency_code' => 'string',
        'quantity' => 'float',
        'list_price' => 'float',
        'unit_price' => 'float',
        'subtotal' => 'float',
        'discount' => 'float',
        'total_price' => 'float',
        'date_created_utc' => '\DateTime',
        'date_updated_utc' => '\DateTime',
        'sort_order' => 'int',
        'customfields' => '\SternerStuff\InsightlyPHP\Model\APICustomField[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'quotation_item_id' => 'int64',
        'opportunity_item_id' => 'int64',
        'pricebook_entry_id' => 'int64',
        'description' => 'string',
        'currency_code' => 'string',
        'quantity' => 'string',
        'list_price' => 'string',
        'unit_price' => 'string',
        'subtotal' => 'string',
        'discount' => 'string',
        'total_price' => 'string',
        'date_created_utc' => 'date-time',
        'date_updated_utc' => 'date-time',
        'sort_order' => 'int32',
        'customfields' => null
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
        'quotation_item_id' => 'QUOTATION_ITEM_ID',
        'opportunity_item_id' => 'OPPORTUNITY_ITEM_ID',
        'pricebook_entry_id' => 'PRICEBOOK_ENTRY_ID',
        'description' => 'DESCRIPTION',
        'currency_code' => 'CURRENCY_CODE',
        'quantity' => 'QUANTITY',
        'list_price' => 'LIST_PRICE',
        'unit_price' => 'UNIT_PRICE',
        'subtotal' => 'SUBTOTAL',
        'discount' => 'DISCOUNT',
        'total_price' => 'TOTAL_PRICE',
        'date_created_utc' => 'DATE_CREATED_UTC',
        'date_updated_utc' => 'DATE_UPDATED_UTC',
        'sort_order' => 'SORT_ORDER',
        'customfields' => 'CUSTOMFIELDS'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'quotation_item_id' => 'setQuotationItemId',
        'opportunity_item_id' => 'setOpportunityItemId',
        'pricebook_entry_id' => 'setPricebookEntryId',
        'description' => 'setDescription',
        'currency_code' => 'setCurrencyCode',
        'quantity' => 'setQuantity',
        'list_price' => 'setListPrice',
        'unit_price' => 'setUnitPrice',
        'subtotal' => 'setSubtotal',
        'discount' => 'setDiscount',
        'total_price' => 'setTotalPrice',
        'date_created_utc' => 'setDateCreatedUtc',
        'date_updated_utc' => 'setDateUpdatedUtc',
        'sort_order' => 'setSortOrder',
        'customfields' => 'setCustomfields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'quotation_item_id' => 'getQuotationItemId',
        'opportunity_item_id' => 'getOpportunityItemId',
        'pricebook_entry_id' => 'getPricebookEntryId',
        'description' => 'getDescription',
        'currency_code' => 'getCurrencyCode',
        'quantity' => 'getQuantity',
        'list_price' => 'getListPrice',
        'unit_price' => 'getUnitPrice',
        'subtotal' => 'getSubtotal',
        'discount' => 'getDiscount',
        'total_price' => 'getTotalPrice',
        'date_created_utc' => 'getDateCreatedUtc',
        'date_updated_utc' => 'getDateUpdatedUtc',
        'sort_order' => 'getSortOrder',
        'customfields' => 'getCustomfields'
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
        $this->container['quotation_item_id'] = isset($data['quotation_item_id']) ? $data['quotation_item_id'] : null;
        $this->container['opportunity_item_id'] = isset($data['opportunity_item_id']) ? $data['opportunity_item_id'] : null;
        $this->container['pricebook_entry_id'] = isset($data['pricebook_entry_id']) ? $data['pricebook_entry_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['list_price'] = isset($data['list_price']) ? $data['list_price'] : null;
        $this->container['unit_price'] = isset($data['unit_price']) ? $data['unit_price'] : null;
        $this->container['subtotal'] = isset($data['subtotal']) ? $data['subtotal'] : null;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : null;
        $this->container['total_price'] = isset($data['total_price']) ? $data['total_price'] : null;
        $this->container['date_created_utc'] = isset($data['date_created_utc']) ? $data['date_created_utc'] : null;
        $this->container['date_updated_utc'] = isset($data['date_updated_utc']) ? $data['date_updated_utc'] : null;
        $this->container['sort_order'] = isset($data['sort_order']) ? $data['sort_order'] : null;
        $this->container['customfields'] = isset($data['customfields']) ? $data['customfields'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pricebook_entry_id'] === null) {
            $invalidProperties[] = "'pricebook_entry_id' can't be null";
        }
        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['currency_code']) && (mb_strlen($this->container['currency_code']) > 3)) {
            $invalidProperties[] = "invalid value for 'currency_code', the character length must be smaller than or equal to 3.";
        }

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['list_price'] === null) {
            $invalidProperties[] = "'list_price' can't be null";
        }
        if ($this->container['unit_price'] === null) {
            $invalidProperties[] = "'unit_price' can't be null";
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
     * Gets quotation_item_id
     *
     * @return int
     */
    public function getQuotationItemId()
    {
        return $this->container['quotation_item_id'];
    }

    /**
     * Sets quotation_item_id
     *
     * @param int $quotation_item_id quotation_item_id
     *
     * @return $this
     */
    public function setQuotationItemId($quotation_item_id)
    {
        $this->container['quotation_item_id'] = $quotation_item_id;

        return $this;
    }

    /**
     * Gets opportunity_item_id
     *
     * @return int
     */
    public function getOpportunityItemId()
    {
        return $this->container['opportunity_item_id'];
    }

    /**
     * Sets opportunity_item_id
     *
     * @param int $opportunity_item_id opportunity_item_id
     *
     * @return $this
     */
    public function setOpportunityItemId($opportunity_item_id)
    {
        $this->container['opportunity_item_id'] = $opportunity_item_id;

        return $this;
    }

    /**
     * Gets pricebook_entry_id
     *
     * @return int
     */
    public function getPricebookEntryId()
    {
        return $this->container['pricebook_entry_id'];
    }

    /**
     * Sets pricebook_entry_id
     *
     * @param int $pricebook_entry_id pricebook_entry_id
     *
     * @return $this
     */
    public function setPricebookEntryId($pricebook_entry_id)
    {
        $this->container['pricebook_entry_id'] = $pricebook_entry_id;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 255)) {
            throw new \InvalidArgumentException('invalid length for $description when calling APIQuotationLineItem., must be smaller than or equal to 255.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code currency_code
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        if (!is_null($currency_code) && (mb_strlen($currency_code) > 3)) {
            throw new \InvalidArgumentException('invalid length for $currency_code when calling APIQuotationLineItem., must be smaller than or equal to 3.');
        }

        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets list_price
     *
     * @return float
     */
    public function getListPrice()
    {
        return $this->container['list_price'];
    }

    /**
     * Sets list_price
     *
     * @param float $list_price list_price
     *
     * @return $this
     */
    public function setListPrice($list_price)
    {
        $this->container['list_price'] = $list_price;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param float $unit_price unit_price
     *
     * @return $this
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets subtotal
     *
     * @return float
     */
    public function getSubtotal()
    {
        return $this->container['subtotal'];
    }

    /**
     * Sets subtotal
     *
     * @param float $subtotal subtotal
     *
     * @return $this
     */
    public function setSubtotal($subtotal)
    {
        $this->container['subtotal'] = $subtotal;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return float
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param float $discount discount
     *
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets total_price
     *
     * @return float
     */
    public function getTotalPrice()
    {
        return $this->container['total_price'];
    }

    /**
     * Sets total_price
     *
     * @param float $total_price total_price
     *
     * @return $this
     */
    public function setTotalPrice($total_price)
    {
        $this->container['total_price'] = $total_price;

        return $this;
    }

    /**
     * Gets date_created_utc
     *
     * @return \DateTime
     */
    public function getDateCreatedUtc()
    {
        return $this->container['date_created_utc'];
    }

    /**
     * Sets date_created_utc
     *
     * @param \DateTime $date_created_utc date_created_utc
     *
     * @return $this
     */
    public function setDateCreatedUtc($date_created_utc)
    {
        $this->container['date_created_utc'] = $date_created_utc;

        return $this;
    }

    /**
     * Gets date_updated_utc
     *
     * @return \DateTime
     */
    public function getDateUpdatedUtc()
    {
        return $this->container['date_updated_utc'];
    }

    /**
     * Sets date_updated_utc
     *
     * @param \DateTime $date_updated_utc date_updated_utc
     *
     * @return $this
     */
    public function setDateUpdatedUtc($date_updated_utc)
    {
        $this->container['date_updated_utc'] = $date_updated_utc;

        return $this;
    }

    /**
     * Gets sort_order
     *
     * @return int
     */
    public function getSortOrder()
    {
        return $this->container['sort_order'];
    }

    /**
     * Sets sort_order
     *
     * @param int $sort_order sort_order
     *
     * @return $this
     */
    public function setSortOrder($sort_order)
    {
        $this->container['sort_order'] = $sort_order;

        return $this;
    }

    /**
     * Gets customfields
     *
     * @return \SternerStuff\InsightlyPHP\Model\APICustomField[]
     */
    public function getCustomfields()
    {
        return $this->container['customfields'];
    }

    /**
     * Sets customfields
     *
     * @param \SternerStuff\InsightlyPHP\Model\APICustomField[] $customfields customfields
     *
     * @return $this
     */
    public function setCustomfields($customfields)
    {
        $this->container['customfields'] = $customfields;

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

