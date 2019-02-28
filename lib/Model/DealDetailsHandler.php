<?php
/**
 * DealDetailsHandler
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * UAPAY EscrowBox
 *
 * Escrow box from UAPAY
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0
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
 * DealDetailsHandler Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DealDetailsHandler implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DealDetails_handler';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'status' => 'string',
        'status_code' => 'string',
        'status_text' => 'string',
        'waybill_number' => 'int',
        'sender_city_id' => 'string',
        'sender_city_name' => 'string',
        'sender_office_id' => 'string',
        'sender_office_name' => 'string',
        'recipient_city_id' => 'string',
        'recipient_city_name' => 'string',
        'recipient_office_id' => 'string',
        'recipient_office_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'status' => null,
        'status_code' => null,
        'status_text' => null,
        'waybill_number' => null,
        'sender_city_id' => null,
        'sender_city_name' => null,
        'sender_office_id' => null,
        'sender_office_name' => null,
        'recipient_city_id' => null,
        'recipient_city_name' => null,
        'recipient_office_id' => null,
        'recipient_office_name' => null
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
        'type' => 'type',
        'status' => 'status',
        'status_code' => 'statusCode',
        'status_text' => 'statusText',
        'waybill_number' => 'waybillNumber',
        'sender_city_id' => 'senderCityId',
        'sender_city_name' => 'senderCityName',
        'sender_office_id' => 'senderOfficeId',
        'sender_office_name' => 'senderOfficeName',
        'recipient_city_id' => 'recipientCityId',
        'recipient_city_name' => 'recipientCityName',
        'recipient_office_id' => 'recipientOfficeId',
        'recipient_office_name' => 'recipientOfficeName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'status' => 'setStatus',
        'status_code' => 'setStatusCode',
        'status_text' => 'setStatusText',
        'waybill_number' => 'setWaybillNumber',
        'sender_city_id' => 'setSenderCityId',
        'sender_city_name' => 'setSenderCityName',
        'sender_office_id' => 'setSenderOfficeId',
        'sender_office_name' => 'setSenderOfficeName',
        'recipient_city_id' => 'setRecipientCityId',
        'recipient_city_name' => 'setRecipientCityName',
        'recipient_office_id' => 'setRecipientOfficeId',
        'recipient_office_name' => 'setRecipientOfficeName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'status' => 'getStatus',
        'status_code' => 'getStatusCode',
        'status_text' => 'getStatusText',
        'waybill_number' => 'getWaybillNumber',
        'sender_city_id' => 'getSenderCityId',
        'sender_city_name' => 'getSenderCityName',
        'sender_office_id' => 'getSenderOfficeId',
        'sender_office_name' => 'getSenderOfficeName',
        'recipient_city_id' => 'getRecipientCityId',
        'recipient_city_name' => 'getRecipientCityName',
        'recipient_office_id' => 'getRecipientOfficeId',
        'recipient_office_name' => 'getRecipientOfficeName'
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

    const STATUS__NEW = 'NEW';
    const STATUS_CREATED = 'CREATED';
    const STATUS_SENT = 'SENT';
    const STATUS_DELIVERED = 'DELIVERED';
    const STATUS_FINISHED = 'FINISHED';
    const STATUS_CANCELED = 'CANCELED';
    const STATUS_REJECTED = 'REJECTED';
    const STATUS_EXPIRED = 'EXPIRED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS__NEW,
            self::STATUS_CREATED,
            self::STATUS_SENT,
            self::STATUS_DELIVERED,
            self::STATUS_FINISHED,
            self::STATUS_CANCELED,
            self::STATUS_REJECTED,
            self::STATUS_EXPIRED,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['status_code'] = isset($data['status_code']) ? $data['status_code'] : null;
        $this->container['status_text'] = isset($data['status_text']) ? $data['status_text'] : null;
        $this->container['waybill_number'] = isset($data['waybill_number']) ? $data['waybill_number'] : null;
        $this->container['sender_city_id'] = isset($data['sender_city_id']) ? $data['sender_city_id'] : null;
        $this->container['sender_city_name'] = isset($data['sender_city_name']) ? $data['sender_city_name'] : null;
        $this->container['sender_office_id'] = isset($data['sender_office_id']) ? $data['sender_office_id'] : null;
        $this->container['sender_office_name'] = isset($data['sender_office_name']) ? $data['sender_office_name'] : null;
        $this->container['recipient_city_id'] = isset($data['recipient_city_id']) ? $data['recipient_city_id'] : null;
        $this->container['recipient_city_name'] = isset($data['recipient_city_name']) ? $data['recipient_city_name'] : null;
        $this->container['recipient_office_id'] = isset($data['recipient_office_id']) ? $data['recipient_office_id'] : null;
        $this->container['recipient_office_name'] = isset($data['recipient_office_name']) ? $data['recipient_office_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
     * @param string $status status
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
     * Gets status_code
     *
     * @return string
     */
    public function getStatusCode()
    {
        return $this->container['status_code'];
    }

    /**
     * Sets status_code
     *
     * @param string $status_code status_code
     *
     * @return $this
     */
    public function setStatusCode($status_code)
    {
        $this->container['status_code'] = $status_code;

        return $this;
    }

    /**
     * Gets status_text
     *
     * @return string
     */
    public function getStatusText()
    {
        return $this->container['status_text'];
    }

    /**
     * Sets status_text
     *
     * @param string $status_text status_text
     *
     * @return $this
     */
    public function setStatusText($status_text)
    {
        $this->container['status_text'] = $status_text;

        return $this;
    }

    /**
     * Gets waybill_number
     *
     * @return int
     */
    public function getWaybillNumber()
    {
        return $this->container['waybill_number'];
    }

    /**
     * Sets waybill_number
     *
     * @param int $waybill_number waybill_number
     *
     * @return $this
     */
    public function setWaybillNumber($waybill_number)
    {
        $this->container['waybill_number'] = $waybill_number;

        return $this;
    }

    /**
     * Gets sender_city_id
     *
     * @return string
     */
    public function getSenderCityId()
    {
        return $this->container['sender_city_id'];
    }

    /**
     * Sets sender_city_id
     *
     * @param string $sender_city_id sender_city_id
     *
     * @return $this
     */
    public function setSenderCityId($sender_city_id)
    {
        $this->container['sender_city_id'] = $sender_city_id;

        return $this;
    }

    /**
     * Gets sender_city_name
     *
     * @return string
     */
    public function getSenderCityName()
    {
        return $this->container['sender_city_name'];
    }

    /**
     * Sets sender_city_name
     *
     * @param string $sender_city_name sender_city_name
     *
     * @return $this
     */
    public function setSenderCityName($sender_city_name)
    {
        $this->container['sender_city_name'] = $sender_city_name;

        return $this;
    }

    /**
     * Gets sender_office_id
     *
     * @return string
     */
    public function getSenderOfficeId()
    {
        return $this->container['sender_office_id'];
    }

    /**
     * Sets sender_office_id
     *
     * @param string $sender_office_id sender_office_id
     *
     * @return $this
     */
    public function setSenderOfficeId($sender_office_id)
    {
        $this->container['sender_office_id'] = $sender_office_id;

        return $this;
    }

    /**
     * Gets sender_office_name
     *
     * @return string
     */
    public function getSenderOfficeName()
    {
        return $this->container['sender_office_name'];
    }

    /**
     * Sets sender_office_name
     *
     * @param string $sender_office_name sender_office_name
     *
     * @return $this
     */
    public function setSenderOfficeName($sender_office_name)
    {
        $this->container['sender_office_name'] = $sender_office_name;

        return $this;
    }

    /**
     * Gets recipient_city_id
     *
     * @return string
     */
    public function getRecipientCityId()
    {
        return $this->container['recipient_city_id'];
    }

    /**
     * Sets recipient_city_id
     *
     * @param string $recipient_city_id recipient_city_id
     *
     * @return $this
     */
    public function setRecipientCityId($recipient_city_id)
    {
        $this->container['recipient_city_id'] = $recipient_city_id;

        return $this;
    }

    /**
     * Gets recipient_city_name
     *
     * @return string
     */
    public function getRecipientCityName()
    {
        return $this->container['recipient_city_name'];
    }

    /**
     * Sets recipient_city_name
     *
     * @param string $recipient_city_name recipient_city_name
     *
     * @return $this
     */
    public function setRecipientCityName($recipient_city_name)
    {
        $this->container['recipient_city_name'] = $recipient_city_name;

        return $this;
    }

    /**
     * Gets recipient_office_id
     *
     * @return string
     */
    public function getRecipientOfficeId()
    {
        return $this->container['recipient_office_id'];
    }

    /**
     * Sets recipient_office_id
     *
     * @param string $recipient_office_id recipient_office_id
     *
     * @return $this
     */
    public function setRecipientOfficeId($recipient_office_id)
    {
        $this->container['recipient_office_id'] = $recipient_office_id;

        return $this;
    }

    /**
     * Gets recipient_office_name
     *
     * @return string
     */
    public function getRecipientOfficeName()
    {
        return $this->container['recipient_office_name'];
    }

    /**
     * Sets recipient_office_name
     *
     * @param string $recipient_office_name recipient_office_name
     *
     * @return $this
     */
    public function setRecipientOfficeName($recipient_office_name)
    {
        $this->container['recipient_office_name'] = $recipient_office_name;

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

