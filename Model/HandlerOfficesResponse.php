<?php
/**
 * HandlerOfficesResponse
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
 * Class representing the HandlerOfficesResponse model.
 *
 * @package Swagger\Server\Model
 * @author  Swagger Codegen team
 */
class HandlerOfficesResponse 
{
        /**
     * @var Swagger\Server\Model\HandlerOfficesResponseData[]|null
     * @SerializedName("data")
     * @Assert\All({
     *   @Assert\Type("Swagger\Server\Model\HandlerOfficesResponseData")
     * })
     * @Type("array<Swagger\Server\Model\HandlerOfficesResponseData>")
     */
    protected $data;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->data = isset($data['data']) ? $data['data'] : null;
    }

    /**
     * Gets data.
     *
     * @return Swagger\Server\Model\HandlerOfficesResponseData[]|null
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets data.
     *
     * @param Swagger\Server\Model\HandlerOfficesResponseData[]|null $data
     *
     * @return $this
     */
    public function setData(HandlerOfficesResponseData $data = null)
    {
        $this->data = $data;

        return $this;
    }
}


