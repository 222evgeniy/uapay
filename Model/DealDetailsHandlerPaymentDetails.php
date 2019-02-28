<?php
/**
 * DealDetailsHandlerPaymentDetails
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
 * Class representing the DealDetailsHandlerPaymentDetails model.
 *
 * @package Swagger\Server\Model
 * @author  Swagger Codegen team
 */
class DealDetailsHandlerPaymentDetails 
{
        /**
     * @var Swagger\Server\Model\DealDetailsHandlerPaymentDetailsConfirmation|null
     * @SerializedName("confirmation")
     * @Assert\Type("Swagger\Server\Model\DealDetailsHandlerPaymentDetailsConfirmation")
     * @Type("Swagger\Server\Model\DealDetailsHandlerPaymentDetailsConfirmation")
     */
    protected $confirmation;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->confirmation = isset($data['confirmation']) ? $data['confirmation'] : null;
    }

    /**
     * Gets confirmation.
     *
     * @return Swagger\Server\Model\DealDetailsHandlerPaymentDetailsConfirmation|null
     */
    public function getConfirmation()
    {
        return $this->confirmation;
    }

    /**
     * Sets confirmation.
     *
     * @param Swagger\Server\Model\DealDetailsHandlerPaymentDetailsConfirmation|null $confirmation
     *
     * @return $this
     */
    public function setConfirmation(DealDetailsHandlerPaymentDetailsConfirmation $confirmation = null)
    {
        $this->confirmation = $confirmation;

        return $this;
    }
}


