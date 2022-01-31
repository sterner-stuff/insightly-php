# SternerStuff\InsightlyPHP\InstanceApi

All URIs are relative to *https://api.insightly.com/v3.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInstance**](InstanceApi.md#getInstance) | **GET** /Instance | Gets the Instance


# **getInstance**
> \SternerStuff\InsightlyPHP\Model\APIInstance getInstance()

Gets the Instance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\InstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getInstance();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->getInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\SternerStuff\InsightlyPHP\Model\APIInstance**](../Model/APIInstance.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

