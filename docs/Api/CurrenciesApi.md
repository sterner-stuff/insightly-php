# SternerStuff\InsightlyPHP\CurrenciesApi

All URIs are relative to *https://api.insightly.com/v3.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCurrencies**](CurrenciesApi.md#getCurrencies) | **GET** /Currencies | Gets a list of Currencies used by Insightly


# **getCurrencies**
> \SternerStuff\InsightlyPHP\Model\APICurrency[] getCurrencies()

Gets a list of Currencies used by Insightly

This read only endpoint returns a list of the currencies and currency symbols currently recognized by Insightly.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\CurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getCurrencies();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->getCurrencies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\SternerStuff\InsightlyPHP\Model\APICurrency[]**](../Model/APICurrency.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

