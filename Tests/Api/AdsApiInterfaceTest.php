<?php
/**
 * AdsApiInterfaceTest
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Server\Tests\Api
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
 * Please update the test case below to test the endpoint.
 */

namespace Swagger\Server\Tests\Api;

use Swagger\Server\Configuration;
use Swagger\Server\ApiClient;
use Swagger\Server\ApiException;
use Swagger\Server\ObjectSerializer;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * AdsApiInterfaceTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Server\Tests\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdsApiInterfaceTest extends WebTestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for adsIdConfirmationsPost
     *
     * Confirm ad.
     *
     */
    public function testAdsIdConfirmationsPost()
    {
        $client = static::createClient();

        $path = '/ads/{id}/confirmations';
        $pattern = '{id}';
        $data = $this->genTestData('[a-z0-9]+');
        $path = str_replace($pattern, $data, $path);

        $crawler = $client->request('POST', $path);
    }

    /**
     * Test case for adsIdGet
     *
     * Show ad details.
     *
     */
    public function testAdsIdGet()
    {
        $client = static::createClient();

        $path = '/ads/{id}';
        $pattern = '{id}';
        $data = $this->genTestData('[a-z0-9]+');
        $path = str_replace($pattern, $data, $path);

        $crawler = $client->request('GET', $path);
    }

    /**
     * Test case for adsIdPatch
     *
     * Update ad details.
     *
     */
    public function testAdsIdPatch()
    {
        $client = static::createClient();

        $path = '/ads/{id}';
        $pattern = '{id}';
        $data = $this->genTestData('[a-z0-9]+');
        $path = str_replace($pattern, $data, $path);

        $crawler = $client->request('PATCH', $path);
    }

    /**
     * Test case for adsPost
     *
     * Create a new ad.
     *
     */
    public function testAdsPost()
    {
        $client = static::createClient();

        $path = '/ads';

        $crawler = $client->request('POST', $path);
    }

    protected function genTestData($regexp)
    {
        $grammar  = new \Hoa\File\Read('hoa://Library/Regex/Grammar.pp');
        $compiler = \Hoa\Compiler\Llk\Llk::load($grammar);
        $ast      = $compiler->parse($regexp);
        $generator = new \Hoa\Regex\Visitor\Isotropic(new \Hoa\Math\Sampler\Random());

        return $generator->visit($ast); 
    }
}
