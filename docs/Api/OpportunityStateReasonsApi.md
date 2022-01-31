# SternerStuff\InsightlyPHP\OpportunityStateReasonsApi

All URIs are relative to *https://api.insightly.com/v3.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOpportunityStateReasons**](OpportunityStateReasonsApi.md#getOpportunityStateReasons) | **GET** /OpportunityStateReasons | Gets a list of Opportunity State Reasons


# **getOpportunityStateReasons**
> object[] getOpportunityStateReasons($authorization, $skip, $top, $count_total)

Gets a list of Opportunity State Reasons

This endpoint returns a list of opportunity state reasons set up for the Insightly instance.            This is a read only endpoint, so to add or update opportunity state reasons, you will need to do that via the web app.            Opportunity state reasons are used to indicate why the opportunity state was set to its current value.            For example, you can use this to indicate why you lost a particular sale.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\OpportunityStateReasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "{{Authorization}}"; // string | Authorization
$skip = 56; // int | Optional, number of states to skip.
$top = 56; // int | Optional, maximum number of states to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $apiInstance->getOpportunityStateReasons($authorization, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityStateReasonsApi->getOpportunityStateReasons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **skip** | **int**| Optional, number of states to skip. | [optional]
 **top** | **int**| Optional, maximum number of states to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

