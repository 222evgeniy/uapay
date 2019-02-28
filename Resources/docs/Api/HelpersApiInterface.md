# Swagger\Server\Api\HelpersApiInterface

All URIs are relative to *https://api.escrowbox.uapay.ua/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**handlersHandlerTypeCitiesCityIdOfficesGet**](HelpersApiInterface.md#handlersHandlerTypeCitiesCityIdOfficesGet) | **GET** /handlers/{handlerType}/cities/{cityId}/offices | List offices from handler by cityId
[**handlersHandlerTypeCitiesGet**](HelpersApiInterface.md#handlersHandlerTypeCitiesGet) | **GET** /handlers/{handlerType}/cities | List cities from handler
[**handlersHandlerTypeCostsGet**](HelpersApiInterface.md#handlersHandlerTypeCostsGet) | **GET** /handlers/{handlerType}/costs | Calculate delivery cost
[**payersPayerTypeCommissionAmountGet**](HelpersApiInterface.md#payersPayerTypeCommissionAmountGet) | **GET** /payers/{payerType}/commissionAmount | Calculate commission amount from income amount for payer
[**payersPayerTypeGet**](HelpersApiInterface.md#payersPayerTypeGet) | **GET** /payers/{payerType} | Get commission object of payer


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.helpers:
        class: Acme\MyBundle\Api\HelpersApi
        tags:
            - { name: "swagger_server.api", api: "helpers" }
    # ...
```

## **handlersHandlerTypeCitiesCityIdOfficesGet**
> Swagger\Server\Model\HandlerOfficesResponse handlersHandlerTypeCitiesCityIdOfficesGet($handlerType, $cityId)

List offices from handler by cityId

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/HelpersApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\HelpersApiInterface;

class HelpersApi implements HelpersApiInterface
{

    // ...

    /**
     * Implementation of HelpersApiInterface#handlersHandlerTypeCitiesCityIdOfficesGet
     */
    public function handlersHandlerTypeCitiesCityIdOfficesGet($handlerType, $cityId)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handlerType** | **string**|  |
 **cityId** | **string**|  |

### Return type

[**Swagger\Server\Model\HandlerOfficesResponse**](../Model/HandlerOfficesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **handlersHandlerTypeCitiesGet**
> Swagger\Server\Model\HandlerCitiesResponse handlersHandlerTypeCitiesGet($handlerType)

List cities from handler

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/HelpersApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\HelpersApiInterface;

class HelpersApi implements HelpersApiInterface
{

    // ...

    /**
     * Implementation of HelpersApiInterface#handlersHandlerTypeCitiesGet
     */
    public function handlersHandlerTypeCitiesGet($handlerType)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handlerType** | **string**|  |

### Return type

[**Swagger\Server\Model\HandlerCitiesResponse**](../Model/HandlerCitiesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **handlersHandlerTypeCostsGet**
> Swagger\Server\Model\HandlerCostResponse handlersHandlerTypeCostsGet($handlerType)

Calculate delivery cost

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/HelpersApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\HelpersApiInterface;

class HelpersApi implements HelpersApiInterface
{

    // ...

    /**
     * Implementation of HelpersApiInterface#handlersHandlerTypeCostsGet
     */
    public function handlersHandlerTypeCostsGet($handlerType)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handlerType** | **string**|  |

### Return type

[**Swagger\Server\Model\HandlerCostResponse**](../Model/HandlerCostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **payersPayerTypeCommissionAmountGet**
> Swagger\Server\Model\PayerCommissionAmountResponse payersPayerTypeCommissionAmountGet($payerType, $amount)

Calculate commission amount from income amount for payer

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/HelpersApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\HelpersApiInterface;

class HelpersApi implements HelpersApiInterface
{

    // ...

    /**
     * Implementation of HelpersApiInterface#payersPayerTypeCommissionAmountGet
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
// src/Acme/MyBundle/Api/HelpersApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\HelpersApiInterface;

class HelpersApi implements HelpersApiInterface
{

    // ...

    /**
     * Implementation of HelpersApiInterface#payersPayerTypeGet
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

