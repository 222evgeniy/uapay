<?php
/**
 * UpdateAdRequestData
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
 * UpdateAdRequestData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateAdRequestData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateAdRequest_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'product_title' => 'string',
        'product_description' => 'string',
        'product_price' => 'int',
        'product_weight' => 'int',
        'seller_first_name' => 'string',
        'seller_last_name' => 'string',
        'seller_patronymic' => 'string',
        'seller_phone' => 'string',
        'seller_email' => 'string',
        'handlers_configs' => '\Swagger\Client\Model\CreateAdRequestHandlersConfigs[]',
        'payments_configs' => '\Swagger\Client\Model\CreateAdRequestPaymentsConfigs[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'product_title' => null,
        'product_description' => null,
        'product_price' => null,
        'product_weight' => null,
        'seller_first_name' => null,
        'seller_last_name' => null,
        'seller_patronymic' => null,
        'seller_phone' => null,
        'seller_email' => null,
        'handlers_configs' => null,
        'payments_configs' => null
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
        'product_title' => 'productTitle',
        'product_description' => 'productDescription',
        'product_price' => 'productPrice',
        'product_weight' => 'productWeight',
        'seller_first_name' => 'sellerFirstName',
        'seller_last_name' => 'sellerLastName',
        'seller_patronymic' => 'sellerPatronymic',
        'seller_phone' => 'sellerPhone',
        'seller_email' => 'sellerEmail',
        'handlers_configs' => 'handlersConfigs',
        'payments_configs' => 'paymentsConfigs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product_title' => 'setProductTitle',
        'product_description' => 'setProductDescription',
        'product_price' => 'setProductPrice',
        'product_weight' => 'setProductWeight',
        'seller_first_name' => 'setSellerFirstName',
        'seller_last_name' => 'setSellerLastName',
        'seller_patronymic' => 'setSellerPatronymic',
        'seller_phone' => 'setSellerPhone',
        'seller_email' => 'setSellerEmail',
        'handlers_configs' => 'setHandlersConfigs',
        'payments_configs' => 'setPaymentsConfigs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_title' => 'getProductTitle',
        'product_description' => 'getProductDescription',
        'product_price' => 'getProductPrice',
        'product_weight' => 'getProductWeight',
        'seller_first_name' => 'getSellerFirstName',
        'seller_last_name' => 'getSellerLastName',
        'seller_patronymic' => 'getSellerPatronymic',
        'seller_phone' => 'getSellerPhone',
        'seller_email' => 'getSellerEmail',
        'handlers_configs' => 'getHandlersConfigs',
        'payments_configs' => 'getPaymentsConfigs'
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
        $this->container['product_title'] = isset($data['product_title']) ? $data['product_title'] : null;
        $this->container['product_description'] = isset($data['product_description']) ? $data['product_description'] : null;
        $this->container['product_price'] = isset($data['product_price']) ? $data['product_price'] : null;
        $this->container['product_weight'] = isset($data['product_weight']) ? $data['product_weight'] : null;
        $this->container['seller_first_name'] = isset($data['seller_first_name']) ? $data['seller_first_name'] : null;
        $this->container['seller_last_name'] = isset($data['seller_last_name']) ? $data['seller_last_name'] : null;
        $this->container['seller_patronymic'] = isset($data['seller_patronymic']) ? $data['seller_patronymic'] : null;
        $this->container['seller_phone'] = isset($data['seller_phone']) ? $data['seller_phone'] : null;
        $this->container['seller_email'] = isset($data['seller_email']) ? $data['seller_email'] : null;
        $this->container['handlers_configs'] = isset($data['handlers_configs']) ? $data['handlers_configs'] : null;
        $this->container['payments_configs'] = isset($data['payments_configs']) ? $data['payments_configs'] : null;
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
     * Gets product_title
     *
     * @return string
     */
    public function getProductTitle()
    {
        return $this->container['product_title'];
    }

    /**
     * Sets product_title
     *
     * @param string $product_title product_title
     *
     * @return $this
     */
    public function setProductTitle($product_title)
    {
        $this->container['product_title'] = $product_title;

        return $this;
    }

    /**
     * Gets product_description
     *
     * @return string
     */
    public function getProductDescription()
    {
        return $this->container['product_description'];
    }

    /**
     * Sets product_description
     *
     * @param string $product_description product_description
     *
     * @return $this
     */
    public function setProductDescription($product_description)
    {
        $this->container['product_description'] = $product_description;

        return $this;
    }

    /**
     * Gets product_price
     *
     * @return int
     */
    public function getProductPrice()
    {
        return $this->container['product_price'];
    }

    /**
     * Sets product_price
     *
     * @param int $product_price product_price
     *
     * @return $this
     */
    public function setProductPrice($product_price)
    {
        $this->container['product_price'] = $product_price;

        return $this;
    }

    /**
     * Gets product_weight
     *
     * @return int
     */
    public function getProductWeight()
    {
        return $this->container['product_weight'];
    }

    /**
     * Sets product_weight
     *
     * @param int $product_weight product_weight
     *
     * @return $this
     */
    public function setProductWeight($product_weight)
    {
        $this->container['product_weight'] = $product_weight;

        return $this;
    }

    /**
     * Gets seller_first_name
     *
     * @return string
     */
    public function getSellerFirstName()
    {
        return $this->container['seller_first_name'];
    }

    /**
     * Sets seller_first_name
     *
     * @param string $seller_first_name seller_first_name
     *
     * @return $this
     */
    public function setSellerFirstName($seller_first_name)
    {
        $this->container['seller_first_name'] = $seller_first_name;

        return $this;
    }

    /**
     * Gets seller_last_name
     *
     * @return string
     */
    public function getSellerLastName()
    {
        return $this->container['seller_last_name'];
    }

    /**
     * Sets seller_last_name
     *
     * @param string $seller_last_name seller_last_name
     *
     * @return $this
     */
    public function setSellerLastName($seller_last_name)
    {
        $this->container['seller_last_name'] = $seller_last_name;

        return $this;
    }

    /**
     * Gets seller_patronymic
     *
     * @return string
     */
    public function getSellerPatronymic()
    {
        return $this->container['seller_patronymic'];
    }

    /**
     * Sets seller_patronymic
     *
     * @param string $seller_patronymic seller_patronymic
     *
     * @return $this
     */
    public function setSellerPatronymic($seller_patronymic)
    {
        $this->container['seller_patronymic'] = $seller_patronymic;

        return $this;
    }

    /**
     * Gets seller_phone
     *
     * @return string
     */
    public function getSellerPhone()
    {
        return $this->container['seller_phone'];
    }

    /**
     * Sets seller_phone
     *
     * @param string $seller_phone seller_phone
     *
     * @return $this
     */
    public function setSellerPhone($seller_phone)
    {
        $this->container['seller_phone'] = $seller_phone;

        return $this;
    }

    /**
     * Gets seller_email
     *
     * @return string
     */
    public function getSellerEmail()
    {
        return $this->container['seller_email'];
    }

    /**
     * Sets seller_email
     *
     * @param string $seller_email seller_email
     *
     * @return $this
     */
    public function setSellerEmail($seller_email)
    {
        $this->container['seller_email'] = $seller_email;

        return $this;
    }

    /**
     * Gets handlers_configs
     *
     * @return \Swagger\Client\Model\CreateAdRequestHandlersConfigs[]
     */
    public function getHandlersConfigs()
    {
        return $this->container['handlers_configs'];
    }

    /**
     * Sets handlers_configs
     *
     * @param \Swagger\Client\Model\CreateAdRequestHandlersConfigs[] $handlers_configs handlers_configs
     *
     * @return $this
     */
    public function setHandlersConfigs($handlers_configs)
    {
        $this->container['handlers_configs'] = $handlers_configs;

        return $this;
    }

    /**
     * Gets payments_configs
     *
     * @return \Swagger\Client\Model\CreateAdRequestPaymentsConfigs[]
     */
    public function getPaymentsConfigs()
    {
        return $this->container['payments_configs'];
    }

    /**
     * Sets payments_configs
     *
     * @param \Swagger\Client\Model\CreateAdRequestPaymentsConfigs[] $payments_configs payments_configs
     *
     * @return $this
     */
    public function setPaymentsConfigs($payments_configs)
    {
        $this->container['payments_configs'] = $payments_configs;

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


