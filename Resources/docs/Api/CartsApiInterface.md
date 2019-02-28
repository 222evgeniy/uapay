# Swagger\Server\Api\CartsApiInterface

All URIs are relative to *https://api.escrowbox.uapay.ua/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cartsIdGet**](CartsApiInterface.md#cartsIdGet) | **GET** /carts/{id} | Show cart and its deals
[**cartsPost**](CartsApiInterface.md#cartsPost) | **POST** /carts | Create a cart


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.carts:
        class: Acme\MyBundle\Api\CartsApi
        tags:
            - { name: "swagger_server.api", api: "carts" }
    # ...
```

## **cartsIdGet**
> Swagger\Server\Model\CartDetailsResponse cartsIdGet($id)

Show cart and its deals

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CartsApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\CartsApiInterface;

class CartsApi implements CartsApiInterface
{

    // ...

    /**
     * Implementation of CartsApiInterface#cartsIdGet
     */
    public function cartsIdGet($id)
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

[**Swagger\Server\Model\CartDetailsResponse**](../Model/CartDetailsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **cartsPost**
> Swagger\Server\Model\CartIdsResponse cartsPost($body)

Create a cart

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CartsApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\CartsApiInterface;

class CartsApi implements CartsApiInterface
{

    // ...

    /**
     * Implementation of CartsApiInterface#cartsPost
     */
    public function cartsPost(CreateCartRequest $body = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**Swagger\Server\Model\CreateCartRequest**](../Model/CreateCartRequest.md)|  | [optional]

### Return type

[**Swagger\Server\Model\CartIdsResponse**](../Model/CartIdsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

