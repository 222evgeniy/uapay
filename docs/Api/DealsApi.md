# Swagger\Client\DealsApi

All URIs are relative to *https://api.escrowbox.uapay.ua/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dealsIdConfirmationsPost**](DealsApi.md#dealsIdConfirmationsPost) | **POST** /deals/{id}/confirmations | Confirm deal
[**dealsIdGet**](DealsApi.md#dealsIdGet) | **GET** /deals/{id} | Show deal details
[**dealsIdPatch**](DealsApi.md#dealsIdPatch) | **PATCH** /deals/{id} | Update a deal
[**dealsIdPaymentsPost**](DealsApi.md#dealsIdPaymentsPost) | **POST** /deals/{id}/payments | Start payment on deal
[**dealsIdRejectionsPost**](DealsApi.md#dealsIdRejectionsPost) | **POST** /deals/{id}/rejections | Reject deal
[**dealsPost**](DealsApi.md#dealsPost) | **POST** /deals | Create a new deal


# **dealsIdConfirmationsPost**
> \Swagger\Client\Model\IdsResponse dealsIdConfirmationsPost($id)

Confirm deal

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DealsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->dealsIdConfirmationsPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealsApi->dealsIdConfirmationsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\IdsResponse**](../Model/IdsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dealsIdGet**
> \Swagger\Client\Model\DealDetailsResponse dealsIdGet($id)

Show deal details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DealsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->dealsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealsApi->dealsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\DealDetailsResponse**](../Model/DealDetailsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dealsIdPatch**
> \Swagger\Client\Model\IdsResponse dealsIdPatch($id, $body)

Update a deal

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DealsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \Swagger\Client\Model\UpdateDealRequest(); // \Swagger\Client\Model\UpdateDealRequest | 

try {
    $result = $apiInstance->dealsIdPatch($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealsApi->dealsIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\UpdateDealRequest**](../Model/UpdateDealRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\IdsResponse**](../Model/IdsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dealsIdPaymentsPost**
> \Swagger\Client\Model\PaymentResponse dealsIdPaymentsPost($id, $body)

Start payment on deal

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DealsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \Swagger\Client\Model\PaymentRequest(); // \Swagger\Client\Model\PaymentRequest | 

try {
    $result = $apiInstance->dealsIdPaymentsPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealsApi->dealsIdPaymentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\PaymentRequest**](../Model/PaymentRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PaymentResponse**](../Model/PaymentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dealsIdRejectionsPost**
> \Swagger\Client\Model\IdsResponse dealsIdRejectionsPost($id)

Reject deal

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DealsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->dealsIdRejectionsPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealsApi->dealsIdRejectionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\IdsResponse**](../Model/IdsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dealsPost**
> \Swagger\Client\Model\IdsResponse dealsPost($body)

Create a new deal

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DealsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateDealRequest(); // \Swagger\Client\Model\CreateDealRequest | 

try {
    $result = $apiInstance->dealsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealsApi->dealsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateDealRequest**](../Model/CreateDealRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\IdsResponse**](../Model/IdsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

