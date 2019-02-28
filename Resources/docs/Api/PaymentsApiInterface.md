# Swagger\Server\Api\PaymentsApiInterface

All URIs are relative to *https://api.escrowbox.uapay.ua/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**payersPayerTypeCommissionAmountGet**](PaymentsApiInterface.md#payersPayerTypeCommissionAmountGet) | **GET** /payers/{payerType}/commissionAmount | Calculate commission amount from income amount for payer
[**payersPayerTypeGet**](PaymentsApiInterface.md#payersPayerTypeGet) | **GET** /payers/{payerType} | Get commission object of payer
[**paymentsIdConfirmationsPost**](PaymentsApiInterface.md#paymentsIdConfirmationsPost) | **POST** /payments/{id}/confirmations | Confirm payment with code or PaRes


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.payments:
        class: Acme\MyBundle\Api\PaymentsApi
        tags:
            - { name: "swagger_server.api", api: "payments" }
    # ...
```

## **payersPayerTypeCommissionAmountGet**
> Swagger\Server\Model\PayerCommissionAmountResponse payersPayerTypeCommissionAmountGet($payerType, $amount)

Calculate commission amount from income amount for payer

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/PaymentsApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\PaymentsApiInterface;

class PaymentsApi implements PaymentsApiInterface
{

    // ...

    /**
     * Implementation of PaymentsApiInterface#payersPayerTypeCommissionAmountGet
     */
    public function payersPayerTypeCommissionAmountGet($payerType, $amount = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payerType** | **string**|  |
 **amount** | **int**|  | [optional]

### Return type

[**Swagger\Server\Model\PayerCommissionAmountResponse**](../Model/PayerCommissionAmountResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **payersPayerTypeGet**
> Swagger\Server\Model\PayerCommissionResponse payersPayerTypeGet($payerType)

Get commission object of payer

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/PaymentsApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\PaymentsApiInterface;

class PaymentsApi implements PaymentsApiInterface
{

    // ...

    /**
     * Implementation of PaymentsApiInterface#payersPayerTypeGet
     */
    public function payersPayerTypeGet($payerType)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payerType** | **string**|  |

### Return type

[**Swagger\Server\Model\PayerCommissionResponse**](../Model/PayerCommissionResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **paymentsIdConfirmationsPost**
> Swagger\Server\Model\InlineResponse200 paymentsIdConfirmationsPost($id)

Confirm payment with code or PaRes

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/PaymentsApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\PaymentsApiInterface;

class PaymentsApi implements PaymentsApiInterface
{

    // ...

    /**
     * Implementation of PaymentsApiInterface#paymentsIdConfirmationsPost
     */
    public function paymentsIdConfirmationsPost($id)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**Swagger\Server\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

