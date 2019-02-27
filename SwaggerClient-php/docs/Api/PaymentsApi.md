# Swagger\Client\PaymentsApi

All URIs are relative to *https://api.escrowbox.uapay.ua/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**payersPayerTypeCommissionAmountGet**](PaymentsApi.md#payersPayerTypeCommissionAmountGet) | **GET** /payers/{payerType}/commissionAmount | Calculate commission amount from income amount for payer
[**payersPayerTypeGet**](PaymentsApi.md#payersPayerTypeGet) | **GET** /payers/{payerType} | Get commission object of payer
[**paymentsIdConfirmationsPost**](PaymentsApi.md#paymentsIdConfirmationsPost) | **POST** /payments/{id}/confirmations | Confirm payment with code or PaRes


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


$apiInstance = new Swagger\Client\Api\PaymentsApi(
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
    echo 'Exception when calling PaymentsApi->payersPayerTypeCommissionAmountGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Swagger\Client\Api\PaymentsApi(
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
    echo 'Exception when calling PaymentsApi->payersPayerTypeGet: ', $e->getMessage(), PHP_EOL;
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

# **paymentsIdConfirmationsPost**
> \Swagger\Client\Model\InlineResponse200 paymentsIdConfirmationsPost($id)

Confirm payment with code or PaRes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->paymentsIdConfirmationsPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->paymentsIdConfirmationsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

