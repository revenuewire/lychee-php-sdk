# Swagger\Client\DefaultApi

All URIs are relative to *https://lychee-api.revenuewire.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSession**](DefaultApi.md#getSession) | **GET** /sessions/{id} | 
[**getSessionsByIp**](DefaultApi.md#getSessionsByIp) | **GET** /sessions/ip/{ip} | 
[**getSessionsBySessionId**](DefaultApi.md#getSessionsBySessionId) | **GET** /sessions/session/{sessionId} | 


# **getSession**
> \Swagger\Client\Model\CustomerSession getSession($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new Swagger\Client\Api\DefaultApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->getSession($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CustomerSession**](../Model/CustomerSession.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSessionsByIp**
> \Swagger\Client\Model\CustomerSession[] getSessionsByIp($ip, $affiliateInfoId, $destinationId, $productId, $partnerId, $merchantId)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new Swagger\Client\Api\DefaultApi();
$ip = "ip_example"; // string | 
$affiliateInfoId = "affiliateInfoId_example"; // string | 
$destinationId = "destinationId_example"; // string | 
$productId = "productId_example"; // string | 
$partnerId = "partnerId_example"; // string | 
$merchantId = "merchantId_example"; // string | 

try {
    $result = $api_instance->getSessionsByIp($ip, $affiliateInfoId, $destinationId, $productId, $partnerId, $merchantId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSessionsByIp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ip** | **string**|  |
 **affiliateInfoId** | **string**|  | [optional]
 **destinationId** | **string**|  | [optional]
 **productId** | **string**|  | [optional]
 **partnerId** | **string**|  | [optional]
 **merchantId** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\CustomerSession[]**](../Model/CustomerSession.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSessionsBySessionId**
> \Swagger\Client\Model\CustomerSession[] getSessionsBySessionId($sessionId, $affiliateInfoId, $destinationId, $productId, $partnerId, $merchantId)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new Swagger\Client\Api\DefaultApi();
$sessionId = "sessionId_example"; // string | 
$affiliateInfoId = "affiliateInfoId_example"; // string | 
$destinationId = "destinationId_example"; // string | 
$productId = "productId_example"; // string | 
$partnerId = "partnerId_example"; // string | 
$merchantId = "merchantId_example"; // string | 

try {
    $result = $api_instance->getSessionsBySessionId($sessionId, $affiliateInfoId, $destinationId, $productId, $partnerId, $merchantId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSessionsBySessionId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sessionId** | **string**|  |
 **affiliateInfoId** | **string**|  | [optional]
 **destinationId** | **string**|  | [optional]
 **productId** | **string**|  | [optional]
 **partnerId** | **string**|  | [optional]
 **merchantId** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\CustomerSession[]**](../Model/CustomerSession.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

