# Swagger\Client\CartsApi

All URIs are relative to *https://api.escrowbox.uapay.ua/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cartsIdGet**](CartsApi.md#cartsIdGet) | **GET** /carts/{id} | Show cart and its deals
[**cartsPost**](CartsApi.md#cartsPost) | **POST** /carts | Create a cart


# **cartsIdGet**
> \Swagger\Client\Model\CartDetailsResponse cartsIdGet($id)

Show cart and its deals

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\CartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->cartsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartsApi->cartsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\CartDetailsResponse**](../Model/CartDetailsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cartsPost**
> \Swagger\Client\Model\CartIdsResponse cartsPost($body)

Create a cart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\CartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateCartRequest(); // \Swagger\Client\Model\CreateCartRequest | 

try {
    $result = $apiInstance->cartsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartsApi->cartsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateCartRequest**](../Model/CreateCartRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CartIdsResponse**](../Model/CartIdsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

