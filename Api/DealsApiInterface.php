<?php
/**
 * DealsApiInterface
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Server
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

namespace Swagger\Server\Api;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Swagger\Server\Model\CreateDealRequest;
use Swagger\Server\Model\DealDetailsResponse;
use Swagger\Server\Model\IdsResponse;
use Swagger\Server\Model\PaymentRequest;
use Swagger\Server\Model\PaymentResponse;
use Swagger\Server\Model\UpdateDealRequest;

/**
 * DealsApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  Swagger\Server\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
interface DealsApiInterface
{

    /**
     * Sets authentication method basicAuth
     *
     * @param string $value Value of the basicAuth authentication method.
     *
     * @return void
     */
    public function setbasicAuth($value);

    /**
     * Operation dealsIdConfirmationsPost
     *
     * Confirm deal
     *
     * @param  int $id   (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return Swagger\Server\Model\IdsResponse[]
     *
     */
    public function dealsIdConfirmationsPost($id, &$responseCode, array &$responseHeaders);

    /**
     * Operation dealsIdGet
     *
     * Show deal details
     *
     * @param  int $id   (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return Swagger\Server\Model\DealDetailsResponse[]
     *
     */
    public function dealsIdGet($id, &$responseCode, array &$responseHeaders);

    /**
     * Operation dealsIdPatch
     *
     * Update a deal
     *
     * @param  int $id   (required)
     * @param  Swagger\Server\Model\UpdateDealRequest $body   (optional)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return Swagger\Server\Model\IdsResponse[]
     *
     */
    public function dealsIdPatch($id, UpdateDealRequest $body = null, &$responseCode, array &$responseHeaders);

    /**
     * Operation dealsIdPaymentsPost
     *
     * Start payment on deal
     *
     * @param  int $id   (required)
     * @param  Swagger\Server\Model\PaymentRequest $body   (optional)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return Swagger\Server\Model\PaymentResponse[]
     *
     */
    public function dealsIdPaymentsPost($id, PaymentRequest $body = null, &$responseCode, array &$responseHeaders);

    /**
     * Operation dealsIdRejectionsPost
     *
     * Reject deal
     *
     * @param  int $id   (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return Swagger\Server\Model\IdsResponse[]
     *
     */
    public function dealsIdRejectionsPost($id, &$responseCode, array &$responseHeaders);

    /**
     * Operation dealsPost
     *
     * Create a new deal
     *
     * @param  Swagger\Server\Model\CreateDealRequest $body   (optional)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return Swagger\Server\Model\IdsResponse[]
     *
     */
    public function dealsPost(CreateDealRequest $body = null, &$responseCode, array &$responseHeaders);
}
