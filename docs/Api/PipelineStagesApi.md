# SternerStuff\InsightlyPHP\PipelineStagesApi

All URIs are relative to *https://api.insightly.com/v3.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPipelineStage**](PipelineStagesApi.md#getPipelineStage) | **GET** /PipelineStages/{id} | Gets a Pipeline Stage
[**getPipelineStages**](PipelineStagesApi.md#getPipelineStages) | **GET** /PipelineStages | Gets a list of Pipeline Stages


# **getPipelineStage**
> object getPipelineStage($id, $authorization)

Gets a Pipeline Stage

This endpoint returns the graph for a specific pipeline stage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\PipelineStagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Pipeline Stage's ID
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->getPipelineStage($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PipelineStagesApi->getPipelineStage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Pipeline Stage&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPipelineStages**
> object[] getPipelineStages($authorization, $skip, $top, $count_total)

Gets a list of Pipeline Stages

This read only endpoint returns a list of the pipeline stages that have been set up for the Insightly instance.            Pipeline stages are used to indicate where a project or opportunity is in terms of its progression.            For example, stage 1 for the sales pipeline might be \"initial contact\", while stage 4 might be \"generating quote\".            The API for pipeline stages is read only, so to create or update pipeline stages, you'll need to use the web app to do so.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\PipelineStagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "{{Authorization}}"; // string | Authorization
$skip = 56; // int | Optional, number of stages to skip.
$top = 56; // int | Optional, maximum number of stages to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $apiInstance->getPipelineStages($authorization, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PipelineStagesApi->getPipelineStages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **skip** | **int**| Optional, number of stages to skip. | [optional]
 **top** | **int**| Optional, maximum number of stages to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

