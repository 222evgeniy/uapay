<?php
/**
 * HandlerCitiesResponseData
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
 * Class representing the HandlerCitiesResponseData model.
 *
 * @package Swagger\Server\Model
 * @author  Swagger Codegen team
 */
class HandlerCitiesResponseData 
{
        /**
     * @var string|null
     * @SerializedName("id")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $id;

    /**
     * @var string|null
     * @SerializedName("uk")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $uk;

    /**
     * @var string|null
     * @SerializedName("ru")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $ru;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->id = isset($data['id']) ? $data['id'] : null;
        $this->uk = isset($data['uk']) ? $data['uk'] : null;
        $this->ru = isset($data['ru']) ? $data['ru'] : null;
    }

    /**
     * Gets id.
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets id.
     *
     * @param string|null $id
     *
     * @return $this
     */
    public function setId($id = null)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets uk.
     *
     * @return string|null
     */
    public function getUk()
    {
        return $this->uk;
    }

    /**
     * Sets uk.
     *
     * @param string|null $uk
     *
     * @return $this
     */
    public function setUk($uk = null)
    {
        $this->uk = $uk;

        return $this;
    }

    /**
     * Gets ru.
     *
     * @return string|null
     */
    public function getRu()
    {
        return $this->ru;
    }

    /**
     * Sets ru.
     *
     * @param string|null $ru
     *
     * @return $this
     */
    public function setRu($ru = null)
    {
        $this->ru = $ru;

        return $this;
    }
}


