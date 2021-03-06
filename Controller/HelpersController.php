<?php

/**
 * HelpersController
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Server\Controller
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

namespace Swagger\Server\Controller;

use \Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Validator\Constraints as Assert;
use Swagger\Server\Api\HelpersApiInterface;
use Swagger\Server\Model\HandlerCitiesResponse;
use Swagger\Server\Model\HandlerCostResponse;
use Swagger\Server\Model\HandlerOfficesResponse;
use Swagger\Server\Model\PayerCommissionAmountResponse;
use Swagger\Server\Model\PayerCommissionResponse;

/**
 * HelpersController Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Server\Controller
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HelpersController extends Controller
{

    /**
     * Operation handlersHandlerTypeCitiesCityIdOfficesGet
     *
     * List offices from handler by cityId
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function handlersHandlerTypeCitiesCityIdOfficesGetAction(Request $request, $handlerType, $cityId)
    {
        // Figure out what data format to return to the client
        $produces = ['application/json'];
        // Figure out what the client accepts
        $clientAccepts = $request->headers->has('Accept')?$request->headers->get('Accept'):'*/*';
        $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
        if ($responseFormat === null) {
            return new Response('', 406);
        }

        // Handle authentication
        // Authentication 'basicAuth' required
        // HTTP basic authentication required
        $securitybasicAuth = $request->headers->get('authorization');

        // Read out all input parameter values into variables

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        $handlerType = $this->deserialize($handlerType, 'string', 'string');
        $cityId = $this->deserialize($cityId, 'string', 'string');

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("string");
        $response = $this->validate($handlerType, $asserts);
        if ($response instanceof Response) {
            return $response;
        }
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("string");
        $response = $this->validate($cityId, $asserts);
        if ($response instanceof Response) {
            return $response;
        }


        try {
            $handler = $this->getApiHandler();

            // Set authentication method 'basicAuth'
            $handler->setbasicAuth($securitybasicAuth);
            
            // Make the call to the business logic
            $responseCode = 200;
            $responseHeaders = [];
            $result = $handler->handlersHandlerTypeCitiesCityIdOfficesGet($handlerType, $cityId, $responseCode, $responseHeaders);

            // Find default response message
            $message = 'Ids and labels of cities';

            // Find a more specific message, if available
            switch ($responseCode) {
                case 200:
                    $message = 'Ids and labels of cities';
                    break;
            }

            return new Response(
                $result?$this->serialize($result, $responseFormat):'',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                        'Content-Type' => $responseFormat,
                        'X-Swagger-Message' => $message
                    ]
                )
            );
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation handlersHandlerTypeCitiesGet
     *
     * List cities from handler
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function handlersHandlerTypeCitiesGetAction(Request $request, $handlerType)
    {
        // Figure out what data format to return to the client
        $produces = ['application/json'];
        // Figure out what the client accepts
        $clientAccepts = $request->headers->has('Accept')?$request->headers->get('Accept'):'*/*';
        $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
        if ($responseFormat === null) {
            return new Response('', 406);
        }

        // Handle authentication
        // Authentication 'basicAuth' required
        // HTTP basic authentication required
        $securitybasicAuth = $request->headers->get('authorization');

        // Read out all input parameter values into variables

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        $handlerType = $this->deserialize($handlerType, 'string', 'string');

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("string");
        $response = $this->validate($handlerType, $asserts);
        if ($response instanceof Response) {
            return $response;
        }


        try {
            $handler = $this->getApiHandler();

            // Set authentication method 'basicAuth'
            $handler->setbasicAuth($securitybasicAuth);
            
            // Make the call to the business logic
            $responseCode = 200;
            $responseHeaders = [];
            $result = $handler->handlersHandlerTypeCitiesGet($handlerType, $responseCode, $responseHeaders);

            // Find default response message
            $message = 'Ids and labels of cities';

            // Find a more specific message, if available
            switch ($responseCode) {
                case 200:
                    $message = 'Ids and labels of cities';
                    break;
            }

            return new Response(
                $result?$this->serialize($result, $responseFormat):'',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                        'Content-Type' => $responseFormat,
                        'X-Swagger-Message' => $message
                    ]
                )
            );
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation handlersHandlerTypeCostsGet
     *
     * Calculate delivery cost
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function handlersHandlerTypeCostsGetAction(Request $request, $handlerType)
    {
        // Figure out what data format to return to the client
        $produces = ['application/json'];
        // Figure out what the client accepts
        $clientAccepts = $request->headers->has('Accept')?$request->headers->get('Accept'):'*/*';
        $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
        if ($responseFormat === null) {
            return new Response('', 406);
        }

        // Handle authentication
        // Authentication 'basicAuth' required
        // HTTP basic authentication required
        $securitybasicAuth = $request->headers->get('authorization');

        // Read out all input parameter values into variables

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        $handlerType = $this->deserialize($handlerType, 'string', 'string');

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("string");
        $response = $this->validate($handlerType, $asserts);
        if ($response instanceof Response) {
            return $response;
        }


        try {
            $handler = $this->getApiHandler();

            // Set authentication method 'basicAuth'
            $handler->setbasicAuth($securitybasicAuth);
            
            // Make the call to the business logic
            $responseCode = 200;
            $responseHeaders = [];
            $result = $handler->handlersHandlerTypeCostsGet($handlerType, $responseCode, $responseHeaders);

            // Find default response message
            $message = 'Delivery cost';

            // Find a more specific message, if available
            switch ($responseCode) {
                case 200:
                    $message = 'Delivery cost';
                    break;
            }

            return new Response(
                $result?$this->serialize($result, $responseFormat):'',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                        'Content-Type' => $responseFormat,
                        'X-Swagger-Message' => $message
                    ]
                )
            );
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation payersPayerTypeCommissionAmountGet
     *
     * Calculate commission amount from income amount for payer
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function payersPayerTypeCommissionAmountGetAction(Request $request, $payerType)
    {
        // Figure out what data format to return to the client
        $produces = ['application/json'];
        // Figure out what the client accepts
        $clientAccepts = $request->headers->has('Accept')?$request->headers->get('Accept'):'*/*';
        $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
        if ($responseFormat === null) {
            return new Response('', 406);
        }

        // Handle authentication
        // Authentication 'basicAuth' required
        // HTTP basic authentication required
        $securitybasicAuth = $request->headers->get('authorization');

        // Read out all input parameter values into variables
        $amount = $request->query->get('amount');

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        $payerType = $this->deserialize($payerType, 'string', 'string');
        $amount = $this->deserialize($amount, 'int', 'string');

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("string");
        $response = $this->validate($payerType, $asserts);
        if ($response instanceof Response) {
            return $response;
        }
        $asserts = [];
        $asserts[] = new Assert\Type("int");
        $response = $this->validate($amount, $asserts);
        if ($response instanceof Response) {
            return $response;
        }


        try {
            $handler = $this->getApiHandler();

            // Set authentication method 'basicAuth'
            $handler->setbasicAuth($securitybasicAuth);
            
            // Make the call to the business logic
            $responseCode = 200;
            $responseHeaders = [];
            $result = $handler->payersPayerTypeCommissionAmountGet($payerType, $amount, $responseCode, $responseHeaders);

            // Find default response message
            $message = 'Commission amount';

            // Find a more specific message, if available
            switch ($responseCode) {
                case 200:
                    $message = 'Commission amount';
                    break;
            }

            return new Response(
                $result?$this->serialize($result, $responseFormat):'',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                        'Content-Type' => $responseFormat,
                        'X-Swagger-Message' => $message
                    ]
                )
            );
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation payersPayerTypeGet
     *
     * Get commission object of payer
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function payersPayerTypeGetAction(Request $request, $payerType)
    {
        // Figure out what data format to return to the client
        $produces = ['application/json'];
        // Figure out what the client accepts
        $clientAccepts = $request->headers->has('Accept')?$request->headers->get('Accept'):'*/*';
        $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
        if ($responseFormat === null) {
            return new Response('', 406);
        }

        // Handle authentication
        // Authentication 'basicAuth' required
        // HTTP basic authentication required
        $securitybasicAuth = $request->headers->get('authorization');

        // Read out all input parameter values into variables

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        $payerType = $this->deserialize($payerType, 'string', 'string');

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("string");
        $response = $this->validate($payerType, $asserts);
        if ($response instanceof Response) {
            return $response;
        }


        try {
            $handler = $this->getApiHandler();

            // Set authentication method 'basicAuth'
            $handler->setbasicAuth($securitybasicAuth);
            
            // Make the call to the business logic
            $responseCode = 200;
            $responseHeaders = [];
            $result = $handler->payersPayerTypeGet($payerType, $responseCode, $responseHeaders);

            // Find default response message
            $message = 'Payer commission';

            // Find a more specific message, if available
            switch ($responseCode) {
                case 200:
                    $message = 'Payer commission';
                    break;
            }

            return new Response(
                $result?$this->serialize($result, $responseFormat):'',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                        'Content-Type' => $responseFormat,
                        'X-Swagger-Message' => $message
                    ]
                )
            );
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Returns the handler for this API controller.
     * @return HelpersApiInterface
     */
    public function getApiHandler()
    {
        return $this->apiServer->getApiHandler('helpers');
    }
}
