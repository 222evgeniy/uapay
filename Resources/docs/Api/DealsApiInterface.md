# Swagger\Server\Api\DealsApiInterface

All URIs are relative to *https://api.escrowbox.uapay.ua/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dealsIdConfirmationsPost**](DealsApiInterface.md#dealsIdConfirmationsPost) | **POST** /deals/{id}/confirmations | Confirm deal
[**dealsIdGet**](DealsApiInterface.md#dealsIdGet) | **GET** /deals/{id} | Show deal details
[**dealsIdPatch**](DealsApiInterface.md#dealsIdPatch) | **PATCH** /deals/{id} | Update a deal
[**dealsIdPaymentsPost**](DealsApiInterface.md#dealsIdPaymentsPost) | **POST** /deals/{id}/payments | Start payment on deal
[**dealsIdRejectionsPost**](DealsApiInterface.md#dealsIdRejectionsPost) | **POST** /deals/{id}/rejections | Reject deal
[**dealsPost**](DealsApiInterface.md#dealsPost) | **POST** /deals | Create a new deal


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.deals:
        class: Acme\MyBundle\Api\DealsApi
        tags:
            - { name: "swagger_server.api", api: "deals" }
    # ...
```

## **dealsIdConfirmationsPost**
> Swagger\Server\Model\IdsResponse dealsIdConfirmationsPost($id)

Confirm deal

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/DealsApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\DealsApiInterface;

class DealsApi implements DealsApiInterface
{

    // ...

    /**
     * Implementation of DealsApiInterface#dealsIdConfirmationsPost
     */
    public function dealsIdConfirmationsPost($id)
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

[**Swagger\Server\Model\IdsResponse**](../Model/IdsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **dealsIdGet**
> Swagger\Server\Model\DealDetailsResponse dealsIdGet($id)

Show deal details

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/DealsApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\DealsApiInterface;

class DealsApi implements DealsApiInterface
{

    // ...

    /**
     * Implementation of DealsApiInterface#dealsIdGet
     */
    public function dealsIdGet($id)
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

[**Swagger\Server\Model\DealDetailsResponse**](../Model/DealDetailsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **dealsIdPatch**
> Swagger\Server\Model\IdsResponse dealsIdPatch($id, $body)

Update a deal

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/DealsApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\DealsApiInterface;

class DealsApi implements DealsApiInterface
{

    // ...

    /**
     * Implementation of DealsApiInterface#dealsIdPatch
     */
    public function dealsIdPatch($id, UpdateDealRequest $body = null)
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
 **body** | [**Swagger\Server\Model\UpdateDealRequest**](../Model/UpdateDealRequest.md)|  | [optional]

### Return type

[**Swagger\Server\Model\IdsResponse**](../Model/IdsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **dealsIdPaymentsPost**
> Swagger\Server\Model\PaymentResponse dealsIdPaymentsPost($id, $body)

Start payment on deal

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/DealsApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\DealsApiInterface;

class DealsApi implements DealsApiInterface
{

    // ...

    /**
     * Implementation of DealsApiInterface#dealsIdPaymentsPost
     */
    public function dealsIdPaymentsPost($id, PaymentRequest $body = null)
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
 **body** | [**Swagger\Server\Model\PaymentRequest**](../Model/PaymentRequest.md)|  | [optional]

### Return type

[**Swagger\Server\Model\PaymentResponse**](../Model/PaymentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **dealsIdRejectionsPost**
> Swagger\Server\Model\IdsResponse dealsIdRejectionsPost($id)

Reject deal

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/DealsApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\DealsApiInterface;

class DealsApi implements DealsApiInterface
{

    // ...

    /**
     * Implementation of DealsApiInterface#dealsIdRejectionsPost
     */
    public function dealsIdRejectionsPost($id)
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

[**Swagger\Server\Model\IdsResponse**](../Model/IdsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **dealsPost**
> Swagger\Server\Model\IdsResponse dealsPost($body)

Create a new deal

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/DealsApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\DealsApiInterface;

class DealsApi implements DealsApiInterface
{

    // ...

    /**
     * Implementation of DealsApiInterface#dealsPost
     */
    public function dealsPost(CreateDealRequest $body = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**Swagger\Server\Model\CreateDealRequest**](../Model/CreateDealRequest.md)|  | [optional]

### Return type

[**Swagger\Server\Model\IdsResponse**](../Model/IdsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

