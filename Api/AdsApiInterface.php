<?php
/**
 * AdsApiInterface
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
use Swagger\Server\Model\AdDetailsResponse;
use Swagger\Server\Model\AdUrlResponse;
use Swagger\Server\Model\CreateAdRequest;
use Swagger\Server\Model\UpdateAdRequest;

/**
 * AdsApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  Swagger\Server\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
interface AdsApiInterface
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
     * Operation adsIdConfirmationsPost
     *
     * Confirm ad
     *
     * @param  string $id   (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return Swagger\Server\Model\AdUrlResponse[]
     *
     */
    public function adsIdConfirmationsPost($id, &$responseCode, array &$responseHeaders);

    /**
     * Operation adsIdGet
     *
     * Show ad details
     *
     * @param  string $id   (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return Swagger\Server\Model\AdDetailsResponse[]
     *
     */
    public function adsIdGet($id, &$responseCode, array &$responseHeaders);

    /**
     * Operation adsIdPatch
     *
     * Update ad details
     *
     * @param  string $id   (required)
     * @param  Swagger\Server\Model\UpdateAdRequest $body   (optional)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return Swagger\Server\Model\AdUrlResponse[]
     *
     */
    public function adsIdPatch($id, UpdateAdRequest $body = null, &$responseCode, array &$responseHeaders);

    /**
     * Operation adsPost
     *
     * Create a new ad
     *
     * @param  Swagger\Server\Model\CreateAdRequest $body   (optional)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return Swagger\Server\Model\AdUrlResponse[]
     *
     */
    public function adsPost(CreateAdRequest $body = null, &$responseCode, array &$responseHeaders);
}
