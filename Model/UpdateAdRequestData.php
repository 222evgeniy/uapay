<?php
/**
 * UpdateAdRequestData
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Server\Model
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
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Server\Model;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing the UpdateAdRequestData model.
 *
 * @package Swagger\Server\Model
 * @author  Swagger Codegen team
 */
class UpdateAdRequestData 
{
        /**
     * @var string|null
     * @SerializedName("productTitle")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $productTitle;

    /**
     * @var string|null
     * @SerializedName("productDescription")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $productDescription;

    /**
     * @var int|null
     * @SerializedName("productPrice")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $productPrice;

    /**
     * @var int|null
     * @SerializedName("productWeight")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $productWeight;

    /**
     * @var string|null
     * @SerializedName("sellerFirstName")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $sellerFirstName;

    /**
     * @var string|null
     * @SerializedName("sellerLastName")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $sellerLastName;

    /**
     * @var string|null
     * @SerializedName("sellerPatronymic")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $sellerPatronymic;

    /**
     * @var string|null
     * @SerializedName("sellerPhone")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $sellerPhone;

    /**
     * @var string|null
     * @SerializedName("sellerEmail")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $sellerEmail;

    /**
     * @var Swagger\Server\Model\CreateAdRequestHandlersConfigs[]|null
     * @SerializedName("handlersConfigs")
     * @Assert\All({
     *   @Assert\Type("Swagger\Server\Model\CreateAdRequestHandlersConfigs")
     * })
     * @Type("array<Swagger\Server\Model\CreateAdRequestHandlersConfigs>")
     */
    protected $handlersConfigs;

    /**
     * @var Swagger\Server\Model\CreateAdRequestPaymentsConfigs[]|null
     * @SerializedName("paymentsConfigs")
     * @Assert\All({
     *   @Assert\Type("Swagger\Server\Model\CreateAdRequestPaymentsConfigs")
     * })
     * @Type("array<Swagger\Server\Model\CreateAdRequestPaymentsConfigs>")
     */
    protected $paymentsConfigs;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->productTitle = isset($data['productTitle']) ? $data['productTitle'] : null;
        $this->productDescription = isset($data['productDescription']) ? $data['productDescription'] : null;
        $this->productPrice = isset($data['productPrice']) ? $data['productPrice'] : null;
        $this->productWeight = isset($data['productWeight']) ? $data['productWeight'] : null;
        $this->sellerFirstName = isset($data['sellerFirstName']) ? $data['sellerFirstName'] : null;
        $this->sellerLastName = isset($data['sellerLastName']) ? $data['sellerLastName'] : null;
        $this->sellerPatronymic = isset($data['sellerPatronymic']) ? $data['sellerPatronymic'] : null;
        $this->sellerPhone = isset($data['sellerPhone']) ? $data['sellerPhone'] : null;
        $this->sellerEmail = isset($data['sellerEmail']) ? $data['sellerEmail'] : null;
        $this->handlersConfigs = isset($data['handlersConfigs']) ? $data['handlersConfigs'] : null;
        $this->paymentsConfigs = isset($data['paymentsConfigs']) ? $data['paymentsConfigs'] : null;
    }

    /**
     * Gets productTitle.
     *
     * @return string|null
     */
    public function getProductTitle()
    {
        return $this->productTitle;
    }

    /**
     * Sets productTitle.
     *
     * @param string|null $productTitle
     *
     * @return $this
     */
    public function setProductTitle($productTitle = null)
    {
        $this->productTitle = $productTitle;

        return $this;
    }

    /**
     * Gets productDescription.
     *
     * @return string|null
     */
    public function getProductDescription()
    {
        return $this->productDescription;
    }

    /**
     * Sets productDescription.
     *
     * @param string|null $productDescription
     *
     * @return $this
     */
    public function setProductDescription($productDescription = null)
    {
        $this->productDescription = $productDescription;

        return $this;
    }

    /**
     * Gets productPrice.
     *
     * @return int|null
     */
    public function getProductPrice()
    {
        return $this->productPrice;
    }

    /**
     * Sets productPrice.
     *
     * @param int|null $productPrice
     *
     * @return $this
     */
    public function setProductPrice($productPrice = null)
    {
        $this->productPrice = $productPrice;

        return $this;
    }

    /**
     * Gets productWeight.
     *
     * @return int|null
     */
    public function getProductWeight()
    {
        return $this->productWeight;
    }

    /**
     * Sets productWeight.
     *
     * @param int|null $productWeight
     *
     * @return $this
     */
    public function setProductWeight($productWeight = null)
    {
        $this->productWeight = $productWeight;

        return $this;
    }

    /**
     * Gets sellerFirstName.
     *
     * @return string|null
     */
    public function getSellerFirstName()
    {
        return $this->sellerFirstName;
    }

    /**
     * Sets sellerFirstName.
     *
     * @param string|null $sellerFirstName
     *
     * @return $this
     */
    public function setSellerFirstName($sellerFirstName = null)
    {
        $this->sellerFirstName = $sellerFirstName;

        return $this;
    }

    /**
     * Gets sellerLastName.
     *
     * @return string|null
     */
    public function getSellerLastName()
    {
        return $this->sellerLastName;
    }

    /**
     * Sets sellerLastName.
     *
     * @param string|null $sellerLastName
     *
     * @return $this
     */
    public function setSellerLastName($sellerLastName = null)
    {
        $this->sellerLastName = $sellerLastName;

        return $this;
    }

    /**
     * Gets sellerPatronymic.
     *
     * @return string|null
     */
    public function getSellerPatronymic()
    {
        return $this->sellerPatronymic;
    }

    /**
     * Sets sellerPatronymic.
     *
     * @param string|null $sellerPatronymic
     *
     * @return $this
     */
    public function setSellerPatronymic($sellerPatronymic = null)
    {
        $this->sellerPatronymic = $sellerPatronymic;

        return $this;
    }

    /**
     * Gets sellerPhone.
     *
     * @return string|null
     */
    public function getSellerPhone()
    {
        return $this->sellerPhone;
    }

    /**
     * Sets sellerPhone.
     *
     * @param string|null $sellerPhone
     *
     * @return $this
     */
    public function setSellerPhone($sellerPhone = null)
    {
        $this->sellerPhone = $sellerPhone;

        return $this;
    }

    /**
     * Gets sellerEmail.
     *
     * @return string|null
     */
    public function getSellerEmail()
    {
        return $this->sellerEmail;
    }

    /**
     * Sets sellerEmail.
     *
     * @param string|null $sellerEmail
     *
     * @return $this
     */
    public function setSellerEmail($sellerEmail = null)
    {
        $this->sellerEmail = $sellerEmail;

        return $this;
    }

    /**
     * Gets handlersConfigs.
     *
     * @return Swagger\Server\Model\CreateAdRequestHandlersConfigs[]|null
     */
    public function getHandlersConfigs()
    {
        return $this->handlersConfigs;
    }

    /**
     * Sets handlersConfigs.
     *
     * @param Swagger\Server\Model\CreateAdRequestHandlersConfigs[]|null $handlersConfigs
     *
     * @return $this
     */
    public function setHandlersConfigs(CreateAdRequestHandlersConfigs $handlersConfigs = null)
    {
        $this->handlersConfigs = $handlersConfigs;

        return $this;
    }

    /**
     * Gets paymentsConfigs.
     *
     * @return Swagger\Server\Model\CreateAdRequestPaymentsConfigs[]|null
     */
    public function getPaymentsConfigs()
    {
        return $this->paymentsConfigs;
    }

    /**
     * Sets paymentsConfigs.
     *
     * @param Swagger\Server\Model\CreateAdRequestPaymentsConfigs[]|null $paymentsConfigs
     *
     * @return $this
     */
    public function setPaymentsConfigs(CreateAdRequestPaymentsConfigs $paymentsConfigs = null)
    {
        $this->paymentsConfigs = $paymentsConfigs;

        return $this;
    }
}


