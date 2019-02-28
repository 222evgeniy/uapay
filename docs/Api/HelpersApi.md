# Swagger\Client\HelpersApi

All URIs are relative to *https://api.escrowbox.uapay.ua/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**handlersHandlerTypeCitiesCityIdOfficesGet**](HelpersApi.md#handlersHandlerTypeCitiesCityIdOfficesGet) | **GET** /handlers/{handlerType}/cities/{cityId}/offices | List offices from handler by cityId
[**handlersHandlerTypeCitiesGet**](HelpersApi.md#handlersHandlerTypeCitiesGet) | **GET** /handlers/{handlerType}/cities | List cities from handler
[**handlersHandlerTypeCostsGet**](HelpersApi.md#handlersHandlerTypeCostsGet) | **GET** /handlers/{handlerType}/costs | Calculate delivery cost
[**payersPayerTypeCommissionAmountGet**](HelpersApi.md#payersPayerTypeCommissionAmountGet) | **GET** /payers/{payerType}/commissionAmount | Calculate commission amount from income amount for payer
[**payersPayerTypeGet**](HelpersApi.md#payersPayerTypeGet) | **GET** /payers/{payerType} | Get commission object of payer


# **handlersHandlerTypeCitiesCityIdOfficesGet**
> \Swagger\Client\Model\HandlerOfficesResponse handlersHandlerTypeCitiesCityIdOfficesGet($handler_type, $city_id)

List offices from handler by cityId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\HelpersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handler_type = "handler_type_example"; // string | 
$city_id = "city_id_example"; // string | 

try {
    $result = $apiInstance->handlersHandlerTypeCitiesCityIdOfficesGet($handler_type, $city_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpersApi->handlersHandlerTypeCitiesCityIdOfficesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handler_type** | **string**|  |
 **city_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\HandlerOfficesResponse**](../Model/HandlerOfficesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **handlersHandlerTypeCitiesGet**
> \Swagger\Client\Model\HandlerCitiesResponse handlersHandlerTypeCitiesGet($handler_type)

List cities from handler

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\HelpersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handler_type = "handler_type_example"; // string | 

try {
    $result = $apiInstance->handlersHandlerTypeCitiesGet($handler_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpersApi->handlersHandlerTypeCitiesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handler_type** | **string**|  |

### Return type

[**\Swagger\Client\Model\HandlerCitiesResponse**](../Model/HandlerCitiesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **handlersHandlerTypeCostsGet**
> \Swagger\Client\Model\HandlerCostResponse handlersHandlerTypeCostsGet($handler_type)

Calculate delivery cost

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\HelpersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handler_type = "handler_type_example"; // string | 

try {
    $result = $apiInstance->handlersHandlerTypeCostsGet($handler_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpersApi->handlersHandlerTypeCostsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handler_type** | **string**|  |

### Return type

[**\Swagger\Client\Model\HandlerCostResponse**](../Model/HandlerCostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payersPayerTypeCommissionAmountGet**
> \Swagger\Client\Model\PayerCommissionAmountResponse payersPayerTypeCommissionAmountGet($payer_type, $amount)

Calculate commission amount from income amount for payer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\HelpersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payer_type = "payer_type_example"; // string | 
$amount = 56; // int | 

try {
    $result = $apiInstance->payersPayerTypeCommissionAmountGet($payer_type, $amount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpersApi->payersPayerTypeCommissionAmountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payer_type** | **string**|  |
 **amount** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\PayerCommissionAmountResponse**](../Model/PayerCommissionAmountResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payersPayerTypeGet**
> \Swagger\Client\Model\PayerCommissionResponse payersPayerTypeGet($payer_type)

Get commission object of payer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\HelpersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payer_type = "payer_type_example"; // string | 

try {
    $result = $apiInstance->payersPayerTypeGet($payer_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpersApi->payersPayerTypeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payer_type** | **string**|  |

### Return type

[**\Swagger\Client\Model\PayerCommissionResponse**](../Model/PayerCommissionResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

