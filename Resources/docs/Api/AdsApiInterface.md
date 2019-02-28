# Swagger\Server\Api\AdsApiInterface

All URIs are relative to *https://api.escrowbox.uapay.ua/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adsIdConfirmationsPost**](AdsApiInterface.md#adsIdConfirmationsPost) | **POST** /ads/{id}/confirmations | Confirm ad
[**adsIdGet**](AdsApiInterface.md#adsIdGet) | **GET** /ads/{id} | Show ad details
[**adsIdPatch**](AdsApiInterface.md#adsIdPatch) | **PATCH** /ads/{id} | Update ad details
[**adsPost**](AdsApiInterface.md#adsPost) | **POST** /ads | Create a new ad


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.ads:
        class: Acme\MyBundle\Api\AdsApi
        tags:
            - { name: "swagger_server.api", api: "ads" }
    # ...
```

## **adsIdConfirmationsPost**
> Swagger\Server\Model\AdUrlResponse adsIdConfirmationsPost($id)

Confirm ad

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/AdsApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\AdsApiInterface;

class AdsApi implements AdsApiInterface
{

    // ...

    /**
     * Implementation of AdsApiInterface#adsIdConfirmationsPost
     */
    public function adsIdConfirmationsPost($id)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**Swagger\Server\Model\AdUrlResponse**](../Model/AdUrlResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **adsIdGet**
> Swagger\Server\Model\AdDetailsResponse adsIdGet($id)

Show ad details

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/AdsApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\AdsApiInterface;

class AdsApi implements AdsApiInterface
{

    // ...

    /**
     * Implementation of AdsApiInterface#adsIdGet
     */
    public function adsIdGet($id)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**Swagger\Server\Model\AdDetailsResponse**](../Model/AdDetailsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **adsIdPatch**
> Swagger\Server\Model\AdUrlResponse adsIdPatch($id, $body)

Update ad details

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/AdsApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\AdsApiInterface;

class AdsApi implements AdsApiInterface
{

    // ...

    /**
     * Implementation of AdsApiInterface#adsIdPatch
     */
    public function adsIdPatch($id, UpdateAdRequest $body = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**Swagger\Server\Model\UpdateAdRequest**](../Model/UpdateAdRequest.md)|  | [optional]

### Return type

[**Swagger\Server\Model\AdUrlResponse**](../Model/AdUrlResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **adsPost**
> Swagger\Server\Model\AdUrlResponse adsPost($body)

Create a new ad

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/AdsApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\AdsApiInterface;

class AdsApi implements AdsApiInterface
{

    // ...

    /**
     * Implementation of AdsApiInterface#adsPost
     */
    public function adsPost(CreateAdRequest $body = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**Swagger\Server\Model\CreateAdRequest**](../Model/CreateAdRequest.md)|  | [optional]

### Return type

[**Swagger\Server\Model\AdUrlResponse**](../Model/AdUrlResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

